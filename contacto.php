<?php
$pageTitle = 'Contacto';
$errors = [];
$submitted = false;
$name = $email = $subject = $message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    if ($name === '') $errors[] = 'Escribe tu nombre.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Introduce un correo electrónico válido.';
    if ($subject === '') $errors[] = 'Indica el asunto.';
    if ($message === '') $errors[] = 'Escribe tu mensaje.';
    if (!$errors) $submitted = true;
}
require __DIR__ . '/includes/header.php';
?>
<section class="page-intro"><p class="eyebrow">Hablemos</p><h1>Construyamos algo más sostenible.</h1><p>¿Tienes una pregunta, una idea de ecodiseño o un proyecto tecnológico? Escríbenos.</p></section>
<section class="section form-layout"><div class="form-aside"><h2>Intelligent Recycled</h2><p>Estamos aquí para explorar nuevas formas de reparar, reutilizar y transformar.</p><div class="contact-details"><p><strong>Temas:</strong><br>Reparaciones · Productos · Ecodiseño · Reciclaje</p><p><strong>Respuesta:</strong><br>Tu mensaje quedará preparado para revisión. La integración de correo puede añadirse más adelante.</p></div></div><form class="site-form" method="post" action="contacto.php" novalidate><?php if ($submitted): ?><div class="alert success">Gracias, <?= htmlspecialchars($name) ?>. Tu mensaje está preparado para revisión.</div><?php elseif ($errors): ?><div class="alert error"><strong>Revisa el formulario:</strong><ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?><label for="name">Nombre completo</label><input id="name" name="name" type="text" value="<?= htmlspecialchars($name) ?>" required><label for="email">Correo electrónico</label><input id="email" name="email" type="email" value="<?= htmlspecialchars($email) ?>" required><label for="subject">Asunto</label><input id="subject" name="subject" type="text" value="<?= htmlspecialchars($subject) ?>" required><label for="message">Mensaje</label><textarea id="message" name="message" rows="7" required><?= htmlspecialchars($message) ?></textarea><button class="button button-primary" type="submit">Enviar mensaje</button></form></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
