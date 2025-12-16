import http from 'k6/http'
import { check } from 'k6'
import { Counter } from 'k6/metrics'

// Métricas personalizadas
const utmCodesFound = new Counter('utm_codes_found')

// Configuración del test
export const options = {
  scenarios: {
    // ESCENARIO 1: Lanzamiento de campaña - Todos entran al mismo tiempo
    campaign_launch: {
      executor: 'shared-iterations',
      vus: 50, // 100 usuarios virtuales (ajustado para Local)
      iterations: 50, // 100 peticiones totales
      maxDuration: '2m' // Máximo 2 minutos
    },

    // ESCENARIO 2 (opcional): Carga sostenida - Usuarios entrando constantemente
    sustained_load: {
      executor: 'constant-arrival-rate',
      rate: 5, // 5 usuarios por segundo
      timeUnit: '1s',
      duration: '10s', // Durante 10 segundos = 50 usuarios totales
      preAllocatedVUs: 50,
      maxVUs: 50
    }
  },

  thresholds: {
    http_req_duration: ['p(95)<10000'], // 95% de requests < 10s (más realista en local)
    http_req_failed: ['rate<0.1'] // Menos del 10% de errores
  }
}

// URL de la campaña (TODOS entran a esta misma URL)
const CAMPAIGN_URL = 'http://unw.local/blogsssss'

// Variable global para almacenar códigos UTM encontrados
const utmCodes = {}

export default function () {
  // Simular usuario real: headers, cookies, etc
  const params = {
    headers: {
      'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36',
      Accept: 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
      'Accept-Language': 'es-ES,es;q=0.9,en;q=0.8',
      'Accept-Encoding': 'gzip, deflate',
      Connection: 'keep-alive'
    },
    timeout: '30s'
  }

  // Hacer la petición
  const response = http.get(CAMPAIGN_URL, params)

  // Verificar respuesta
  const success = check(response, {
    'status is 200': (r) => r.status === 200,
    'response has content': (r) => r.body && r.body.length > 0,
    'response time < 5s': (r) => r.timings.duration < 5000
  })

  if (success && response.body) {
    // Extraer código UTM del HTML
    const utmMatch = response.body.match(/UNW[OP]\d{5}/)

    if (utmMatch) {
      const utmCode = utmMatch[0]

      // Contar códigos encontrados
      utmCodesFound.add(1)

      // Registrar código (para análisis posterior)
      if (!utmCodes[utmCode]) {
        utmCodes[utmCode] = 0
      }
      utmCodes[utmCode]++

      console.log(`✓ Usuario obtuvo código: ${utmCode}`)
    } else {
      console.log('✗ No se encontró código UTM en respuesta')
    }
  } else {
    console.log(`✗ Error: HTTP ${response.status} - ${response.error}`)
  }

  // Simular tiempo de lectura del usuario (opcional)
  // sleep(Math.random() * 2);
}

// Resumen al final del test
export function handleSummary(data) {
  console.log('\n' + '='.repeat(70))
  console.log('📊 RESULTADOS DEL TEST DE CAMPAÑA')
  console.log('='.repeat(70))

  const metrics = data.metrics

  console.log('\n🎯 Usuarios:')
  console.log(`   Total VUs: ${options.scenarios.campaign_launch.vus}`)
  console.log(`   Requests: ${metrics.http_reqs.values.count}`)
  console.log(`   Éxito: ${metrics.http_reqs.values.count - (metrics.http_req_failed?.values.count || 0)}`)
  console.log(`   Errores: ${metrics.http_req_failed?.values.count || 0}`)

  console.log('\n⏱️  Performance:')
  console.log(`   Duración: ${(metrics.http_req_duration.values.avg / 1000).toFixed(2)}s (avg)`)
  console.log(`   p95: ${(metrics.http_req_duration.values['p(95)'] / 1000).toFixed(2)}s`)
  console.log(`   p99: ${(metrics.http_req_duration.values['p(99)'] / 1000).toFixed(2)}s`)
  console.log(`   Min: ${(metrics.http_req_duration.values.min / 1000).toFixed(2)}s`)
  console.log(`   Max: ${(metrics.http_req_duration.values.max / 1000).toFixed(2)}s`)

  console.log('\n🔍 Códigos UTM:')
  const uniqueCodes = Object.keys(utmCodes).length
  if (uniqueCodes === 1) {
    console.log('   ✅ PERFECTO: Todos obtuvieron el mismo código')
    console.log(`   📍 Código: ${Object.keys(utmCodes)[0]}`)
    console.log(`   👥 Usuarios: ${Object.values(utmCodes)[0]}`)
  } else if (uniqueCodes > 1) {
    console.log(`   ❌ PROBLEMA: ${uniqueCodes} códigos diferentes (duplicados)`)
    Object.entries(utmCodes).forEach(([code, count]) => {
      console.log(`      • ${code}: ${count} usuarios`)
    })
  } else {
    console.log('   ⚠️  No se encontraron códigos UTM')
  }

  console.log('\n' + '='.repeat(70))
  console.log('✅ Test completado. Verifica en phpMyAdmin:')
  console.log('   SELECT COUNT(*) FROM wpunw_posts WHERE post_type="utm"')
  console.log('     AND post_date > DATE_SUB(NOW(), INTERVAL 5 MINUTE);')
  console.log('='.repeat(70) + '\n')

  return {
    stdout: JSON.stringify(data, null, 2)
  }
}
