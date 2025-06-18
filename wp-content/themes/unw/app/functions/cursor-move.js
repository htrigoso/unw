import gsap from 'gsap'

export function CursorMove() {
  const cursor = document.querySelector('.move-cursor')
  const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 }
  const mouse = { x: pos.x, y: pos.y }
  const speed = 0.1
  const xSet = gsap.quickSetter(cursor, 'x', 'px')
  const ySet = gsap.quickSetter(cursor, 'y', 'px')
  const container = document.querySelector('.hero .swiper-container')

  container.addEventListener('pointermove', e => {
    mouse.x = e.x
    mouse.y = e.y
  })
  gsap.set(cursor, { xPercent: -50, yPercent: -50 })
  gsap.ticker.add(() => {
    const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio())
    pos.x += (mouse.x - pos.x) * dt
    pos.y += (mouse.y - pos.y) * dt
    xSet(pos.x)
    ySet(pos.y)
  })
}
