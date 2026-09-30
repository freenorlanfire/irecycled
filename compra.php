<?php
$pageTitle = 'Vende tu tecnología';
$errors = [];
$submitted = false;
$name = $email = $device = $condition = $description = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
    $device = trim(filter_input(INPUT_POST, 'device', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $condition = trim(filter_input(INPUT_POST, 'condition', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    if ($name === '') $errors[] = 'Escribe tu nombre.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Introduce un correo electrónico válido.';
    if ($device === '') $errors[] = 'Indica qué dispositivo quieres ofrecer.';
    if ($description === '') $errors[] = 'Cuéntanos brevemente su estado.';
    if (!$errors) $submitted = true;
}
require __DIR__ . '/includes/header.php';
?>
<section class="page-intro"><p class="eyebrow">Dale otra oportunidad</p><h1>¿Tienes tecnología que ya no utilizas?</h1><p>Cuéntanos qué tienes. Revisaremos la información y te responderemos con los siguientes pasos. Este formulario no constituye una valoración ni una compra automática.</p></section>
<section class="section form-layout"><div class="form-aside"><h2>Aceptamos consultas sobre:</h2><ul class="check-list"><li>Móviles y smartphones</li><li>PCs y portátiles</li><li>Tablets y accesorios</li><li>Consolas y otros dispositivos</li></ul><p>Antes de entregarlo, elimina tus datos personales y restablece el dispositivo si es posible.</p></div><form class="site-form" method="post" action="compra.php" novalidate><?php if ($submitted): ?><div class="alert success">Gracias, <?= htmlspecialchars($name) ?>. Hemos recibido la información para revisarla. Nos pondremos en contacto contigo.</div><?php elseif ($errors): ?><div class="alert error"><strong>Revisa el formulario:</strong><ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?><label for="name">Nombre completo</label><input id="name" name="name" type="text" value="<?= htmlspecialchars($name) ?>" required><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="<?= htmlspecialchars($email) ?>" required><label for="device">Tipo de dispositivo</label><select id="device" name="device" required><option value="">Selecciona una opción</option><option>Móvil o smartphone</option><option>PC o portátil</option><option>Tablet</option><option>Accesorio</option><option>Otro dispositivo</option></select><label for="condition">Estado aproximado</label><select id="condition" name="condition"><option value="">Selecciona una opción</option><option>Funciona correctamente</option><option>Funciona con fallos</option><option>No enciende</option><option>Para piezas o reciclaje</option></select><label for="description">Descripción</label><textarea id="description" name="description" rows="5" required><?= htmlspecialchars($description) ?></textarea><button class="button button-primary" type="submit">Enviar información</button></form></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
