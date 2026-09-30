<?php
$pageTitle = 'Inicio';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">Ecodiseño · Tecnología · Economía circular</p>
        <h1>La tecnología también puede tener una segunda vida.</h1>
        <p class="lead">En <strong>Intelligent Recycled</strong> recuperamos, reparamos y transformamos dispositivos y materias primas para crear soluciones más sostenibles.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="compra.php">Vende tu dispositivo</a>
            <a class="button button-ghost" href="servicios.php">Conoce nuestros servicios</a>
        </div>
    </div>
    <div class="hero-panel" aria-label="Ciclo de vida sostenible">
        <span class="panel-orbit orbit-one"></span><span class="panel-orbit orbit-two"></span>
        <div class="panel-core"><span>IR</span><small>REUSE<br>REPAIR<br>RECYCLE</small></div>
    </div>
</section>
<section class="section" aria-labelledby="beneficios-title">
    <div class="section-heading"><p class="eyebrow">Nuestro enfoque</p><h2 id="beneficios-title">Tecnología útil. Impacto positivo.</h2><p>Reducimos residuos electrónicos alargando la vida de los productos y aprovechando sus materiales.</p></div>
    <div class="card-grid four-columns">
        <article class="info-card"><span class="card-icon">↻</span><h3>Reutilizar</h3><p>Damos nuevas oportunidades a equipos que todavía pueden ser útiles.</p></article>
        <article class="info-card"><span class="card-icon">⚙</span><h3>Reparar</h3><p>Diagnosticamos y reparamos tecnología para evitar reemplazos innecesarios.</p></article>
        <article class="info-card"><span class="card-icon">◈</span><h3>Reciclar</h3><p>Clasificamos componentes y materias primas con responsabilidad.</p></article>
        <article class="info-card"><span class="card-icon">✦</span><h3>Ecodiseñar</h3><p>Convertimos materiales recuperados en productos con propósito.</p></article>
    </div>
</section>
<section class="section split-section">
    <div><p class="eyebrow">Economía circular</p><h2>Del residuo a la oportunidad.</h2><p>Compramos dispositivos usados o averiados, evaluamos sus posibilidades y elegimos el mejor camino: reparación, reacondicionamiento, reutilización de piezas o reciclaje responsable.</p><a class="text-link" href="nosotros.php">Conoce nuestra misión →</a></div>
    <div class="stat-box"><strong>01</strong><span>Recuperar</span><strong>02</strong><span>Transformar</span><strong>03</strong><span>Reintegrar</span></div>
</section>
<section class="cta-banner"><div><p class="eyebrow">¿Tienes tecnología sin usar?</p><h2>Puede valer más de lo que imaginas.</h2></div><a class="button button-primary" href="compra.php">Quiero ofrecerla</a></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
