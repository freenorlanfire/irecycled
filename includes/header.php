<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$navigation = [
    'index.php' => 'Inicio', 'nosotros.php' => 'Nosotros', 'servicios.php' => 'Servicios',
    'productos.php' => 'Productos', 'compra.php' => 'Vende tu tecnología', 'contacto.php' => 'Contacto'
];
?><!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Intelligent Recycled: ecodiseño, reparación, reciclaje y recuperación de tecnología."><title><?= htmlspecialchars($pageTitle ?? 'Intelligent Recycled') ?> | Intelligent Recycled</title><link rel="stylesheet" href="css/estilos.css"></head>
<body>
<a class="skip-link" href="#contenido">Saltar al contenido</a>
<header class="site-header"><div class="container header-inner"><a class="brand" href="index.php" aria-label="Intelligent Recycled, inicio"><img src="images/logo.svg" alt="Intelligent Recycled"><span>INTELLIGENT<br><b>RECYCLED</b></span></a><nav aria-label="Navegación principal"><button class="menu-toggle" type="button" aria-label="Abrir menú" onclick="document.querySelector('.main-nav').classList.toggle('is-open')">☰</button><ul class="main-nav"><?php foreach ($navigation as $url => $label): ?><li><a class="<?= $currentPage === $url ? 'active' : '' ?>" href="<?= $url ?>"><?= $label ?></a></li><?php endforeach; ?></ul></nav></div></header>
<main id="contenido" class="container">
