# Art Craft

Marketplace de artesanías colombianas developed with **Laravel 12** (backend + Blade) and **React 19** (home page).

The project lives inside XAMPP (`C:\xampp\htdocs\artcraft`) and uses the MySQL database `artcraft`.

---

## 1. Requisitos

| Herramienta | Versión |
|---|---|
| PHP | 8.2 o superior (la de XAMPP) |
| Composer | 2.x |
| Node.js | 18 o superior |
| MySQL | el de XAMPP (puerto 3306, usuario `root` sin contraseña) |

## 2. Puesta en marcha (primera vez)

```bash
composer install
copy .env.example .env          # en Windows: copy .env.example .env
php artisan key:generate
php artisan migrate --seed      # crea las tablas y los 24 productos de ejemplo
npm install
npm run build                   # compila los assets (incluye la portada en React)
```

La base de datos `artcraft` se puede crear desde phpMyAdmin o con:

```sql
CREATE DATABASE artcraft CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

## 3. Cómo abrir la página

**Opción A — XAMPP (la que se usa en la presentación)**

1. Abre el **Panel de Control de XAMPP**.
2. Inicia **Apache** y **MySQL**.
3. Entra en <http://localhost/artcraft/public>.

**Opción B — Servidor de Laravel**

```bash
php artisan serve
```

Entra en <http://127.0.0.1:8000>.

> Las rutas de los assets se generan con `URL::forceRootUrl()` (`app/Providers/AppServiceProvider.php`), por eso el proyecto funciona
> en la subcarpeta de XAMPP y también con `artisan serve` sin cambiar nada.

## 4. Desarrollo con recarga automática

```bash
npm run dev      # servidor de Vite con Hot Module Replacement
php artisan serve
```

Al terminar la presentación hay que dejar los assets compilados otra vez: `npm run build`.

---

## 5. Estructura del proyecto

```
app/
  Http/Controllers/
    InicioController.php      -> portada (React)
    CatalogoController.php    -> categorías y fichas de producto
    ArtesanoController.php    -> perfil del artesano y subir producto
    TiendaController.php      -> carrito y pago
    AuthController.php        -> acceso y registro
    ContenidoController.php   -> blog, contacto y nosotros
  Models/Producto.php         -> modelo Eloquent del catálogo

database/
  migrations/..._create_productos_table.php
  seeders/ProductoSeeder.php  -> 24 productos (mochilas, bisutería, cerámica, máscaras)

resources/
  views/
    layouts/app.blade.php     -> layout común (@yield, @stack, @include)
    partials/
      header.blade.php        -> barra de navegación compartida
      footer.blade.php        -> pie de página compartido
      tabs-categorias.blade.php
      grid-productos.blade.php-> grilla que recorre $productos
    inicio.blade.php          -> contenedor de React (#artcraft-inicio)
    <paginas>.blade.php       -> acceso, carrito, ceramic, mostrar-*, etc.
  js/
    inicio.jsx                -> punto de entrada de React
    inicio/
      App.jsx  Navbar.jsx  Hero.jsx  Destacados.jsx  Footer.jsx
  css/app.css                 -> Tailwind (utilidades, sin preflight)

public/
  css/    -> estilos (base.css, inicio.css, componentes.css, css de cada página)
  imagenes/-> imágenes del sitio
  build/  -> assets compilados por Vite
```

## 6. Rutas del sitio

| Ruta | Vista | Nombre de la ruta |
|---|---|---|
| `/` , `/inicio` | Portada en React | `inicio` |
| `/categorias` | Catálogo de mochilas | `categorias` |
| `/bisuteria` | Catálogo de bisutería | `bisuteria` |
| `/ceramica` | Catálogo de cerámica | `ceramica` |
| `/mascaras` | Catálogo de máscaras | `mascaras` |
| `/mostrarproducto` | Fichas de las mochilas | `mostrar-producto` |
| `/mostrarbisuteria` | Fichas de bisutería | `mostrar-bisuteria` |
| `/mostrarceramica` | Fichas de cerámica | `mostrar-ceramica` |
| `/mostrarmascaras` | Fichas de máscaras | `mostrar-mascaras` |
| `/carritoartesano` | Carrito | `carrito` |
| `/pagar` | Pago | `pagar` |
| `/acceso` | Iniciar sesión | `acceso` |
| `/registrousuario` | Registro | `registro` |
| `/perfilartesano` | Perfil del artesano | `perfil-artesano` |
| `/subirproducto` | Subir producto | `subir-producto` |
| `/bloghistoria` | Blog e historias | `blog` |
| `/contacto` | Contacto y soporte | `contacto` |
| `/sobrenosotros` | Sobre nosotros | `sobre-nosotros` |

Todas las páginas se enlazan con `route('nombre')`; ya no existen archivos `.html`.

## 7. La portada en React

`InicioController` consulta los productos marcados como `destacado` y se los entrega a la vista
como JSON (`data-destacados`, `data-categorias`, `data-urls`). `resources/js/inicio.jsx` monta
React en `#artcraft-inicio` y la interfaz se separa en componentes:

- `Navbar` — buscador (filtra los destacados en vivo), menú lateral desplegable y contador del carrito.
- `Hero` — banner principal.
- `Destacados` — filtros por categoría, precio formateado y botón «Agregar» que suma al carrito.
- `Footer` — pie de página con redes y métodos de pago.

El estado vive en `App.jsx` con `useState` y la búsqueda usa `useMemo`.

## 8. Base de datos

La tabla `productos` guarda: `nombre`, `descripcion`, `categoria`, `precio`, `imagen`, `ruta_detalle`
y `destacado`. Para recargar los datos de ejemplo:

```bash
php artisan migrate:fresh --seed
```

## 9. Problemas frecuentes

| Síntoma | Solución |
|---|---|
| Pantalla en blanco con «Base de datos» | Inicia MySQL en XAMPP y ejecuta `php artisan migrate --seed`. |
| No carga el CSS/JS (página sin estilos) | Ejecuta `npm run build`. |
| Cambiaste React y no se ve | `npm run build` otra vez, o usa `npm run dev`. |
| `419 Page Expired` al enviar un formulario | Los formularios ya llevan `@csrf`; no edites el token a mano. |
