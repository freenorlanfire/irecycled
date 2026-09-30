# Intelligent Recycled

Sitio web inicial de una empresa de ecodiseño, reparación, recuperación tecnológica y reciclaje de materias primas.

## Ejecutar localmente

Necesitas PHP 8 o superior. Desde la carpeta del proyecto ejecuta:

```bash
php -S localhost:8000
```

Después abre `http://localhost:8000` en el navegador.

## Estructura

- `index.php`: página de inicio.
- `nosotros.php`: misión, visión y valores.
- `servicios.php`: servicios de reparación, recuperación y ecodiseño.
- `productos.php`: ejemplos de productos circulares.
- `compra.php`: formulario para ofrecer tecnología usada.
- `contacto.php`: formulario de contacto.
- `includes/`: encabezado y pie compartidos.
- `css/estilos.css`: estilos y diseño responsive.
- `images/logo.svg`: logotipo vectorial inicial; puede sustituirse por el archivo oficial manteniendo el mismo nombre.

## Formularios

Los formularios validan y limpian los datos en el servidor, pero no envían correos ni realizan compras automáticas. Están preparados para integrar posteriormente un servicio de correo, una base de datos o un sistema de valoración.
