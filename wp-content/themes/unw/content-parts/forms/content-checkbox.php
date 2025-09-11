<div class="form-field-checkbox">
  <input type="checkbox" name="DecisionBox1" id="DecisionBox1" checked required>
  <label for="DecisionBox1">
    <span class="custom-checkbox"></span>
    <span class="text">
      Declaro expresamente haber leído y aceptado las <button type="button" data-modal-target="politics-modal">Políticas de privacidad</button>
    </span>
  </label>
</div>

<?php
get_template_part(COMMON_CONTENT_PATH, 'rich-text-modal', [
  'id' => 'politics-modal',
  'body' => '<h1>Título Principal del Contenido</h1>

<p>
  Este es un párrafo de introducción que sirve para presentar el tema. Incluye elementos básicos como <strong>texto en negrita</strong> para resaltar ideas clave y <em>texto en cursiva</em> para dar énfasis. También podemos añadir un <a href="#">enlace de ejemplo</a> que no lleva a ninguna parte.
</p>

<h2>Una Sección Importante (H2)</h2>
<p>
  Aquí desarrollamos el primer punto principal. Los párrafos deben tener un espaciado adecuado para facilitar la lectura y no cansar la vista del usuario. Este contenido está diseñado para ser claro y legible.
</p>

<h3>Subsección de Detalle (H3)</h3>
<p>
  Dentro de una sección, podemos tener subsecciones que profundizan en aspectos más específicos.
</p>

<h4>Punto Específico (H4)</h4>
<p>
  Y si es necesario, podemos bajar a un cuarto nivel de jerarquía para detalles aún más finos.
</p>

<h2>Listas y Elementos Clave (H2)</h2>
<p>
  Las listas son excelentes para organizar información de manera esquemática.
</p>

<h4>Lista de Ventajas:</h4>
<ul>
  <li>Facilita la lectura rápida de puntos.</li>
  <li>Ayuda a estructurar el contenido visualmente.</li>
  <li>Es ideal para enumerar características o beneficios.</li>
</ul>

<h4>Lista de Pasos a Seguir:</h4>
<ul>
  <li>Primero, define el problema.</li>
  <li>Segundo, investiga las posibles soluciones.</li>
  <li>Tercero, implementa la mejor opción.</li>
</ul>

<blockquote>
  "Las citas son una forma excelente de destacar una frase o testimonio importante. Le dan un peso visual diferente al resto del texto."
</blockquote>

<p>
  Y finalmente, un párrafo de conclusión para cerrar el contenido de manera satisfactoria. ¡Espero que este ejemplo sea útil!
</p>',
]);
?>

