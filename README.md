# MBR Flexibles Ltd - Static Website

A high-performance, mobile-responsive, and SEO-optimized static website for **MBR Flexibles Ltd.**, ready for deployment to **Cloudflare Pages**, **GitHub Pages**, or any modern static web host.

## Clean URLs & Extensionless Directory Routes

All pages are organized into clean directory structures with `index.html`, eliminating `.html` and `.php` extensions from browser URLs:

| Route / Browser URL | Static File | Description |
| :--- | :--- | :--- |
| `https://mbrflexibles.com/` | `index.html` | Homepage with hero slice slider |
| `https://mbrflexibles.com/about/` | `about/index.html` | Our Journey, Mission, Vision, Expertise & Advantage |
| `https://mbrflexibles.com/infrastructures/` | `infrastructures/index.html` | Plant machinery, lamination, printing & testing facilities |
| `https://mbrflexibles.com/markets/` | `markets/index.html` | Interactive showcase of market categories catered |
| `https://mbrflexibles.com/food-beverages/` | `food-beverages/index.html` | Food & Beverages flexible packaging solutions |
| `https://mbrflexibles.com/pharmaceutical/` | `pharmaceutical/index.html` | Pharmaceutical & medical barrier packaging |
| `https://mbrflexibles.com/home-personal/` | `home-personal/index.html` | Home care and personal care packaging |
| `https://mbrflexibles.com/agriculture/` | `agriculture/index.html` | Agriculture seeds and agro-chemical packaging |
| `https://mbrflexibles.com/pet-foods/` | `pet-foods/index.html` | Pet foods packaging solutions |
| `https://mbrflexibles.com/pouch-type/` | `pouch-type/index.html` | Complete pouch catalog (Standup, Spouted, Zipper, Kraft, etc.) |
| `https://mbrflexibles.com/quality-sustainability/` | `quality-sustainability/index.html` | ISO & HACCP standards, eco-friendly practices |
| `https://mbrflexibles.com/contact/` | `contact/index.html` | Corporate office, Sanand plant location & inquiry form |
| `https://mbrflexibles.com/terms/` | `terms/index.html` | Terms and Conditions of use |
| `https://mbrflexibles.com/policy/` | `policy/index.html` | Privacy Policy and data protection |

## Modular Architecture in `_php_backup/`

The original PHP templates have been completely refactored into a clean modular architecture in `_php_backup/` for seamless long-term maintenance:

- **Core Configuration**: `_php_backup/config.php` (clean URL helper `url()`, asset path helper `asset('...')`, company contact details).
- **Head Component**: `_php_backup/includes/head.php` (meta tags, Google Analytics UA-91828981-1, GTM-5V5NJ87, fonts, and stylesheets in `assets/css/`).
- **Modular Menu Component**: `_php_backup/includes/menu-inside.php` (converted from `menu-inside.php` into a reusable module section with dynamic active class highlighting and extensionless clean links).
- **Modular Header**: `_php_backup/includes/header.php` (branding logo, mobile drawer navigation, overlay menu trigger).
- **Modular Footer**: `_php_backup/includes/footer.php` (clean navigation links, social icons, and copyright).
- **Scripts Module**: `_php_backup/includes/scripts.php` (jQuery, Swiper, mousewheel, and global script runners in `assets/js/`).
- **All Modular Pages**: `_php_backup/*.php` (fully updated to use modular includes).
- **Contact Script Backup**: `_php_backup/send_mail.php`.

## Static HTML Regeneration

To modify any page or modular component and regenerate all static HTML files:

```bash
C:\xampp\php\php.exe _php_backup\generate_static.php
```

All 14 clean pages will immediately compile into their respective directory locations with portable relative paths (`assets/...` on root, `../assets/...` in subdirectories).

## Hosting, Cloudflare & SEO

- **Assets Folder**: All `js`, `css`, `img`, and `fonts` reside within `assets/` (`assets/js/`, `assets/css/`, `assets/img/`, `assets/fonts/`).
- **Portable Relative Paths**: Subfolder pages use `../assets/...` relative asset paths, making the site work locally on XAMPP (`/mbr-flexibles/`), on Cloudflare Pages, or on any custom domain.
- **Cloudflare Redirections**: `_redirects` provides 301 rules redirecting legacy `.php` and `.html` URLs to extensionless directory paths, plus trailing slash normalization.
- **Security & Caching**: `_headers` enables strict security headers (`X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`) and 1-year immutable caching for static assets (`/assets/*`).
- **Sitemap & Robots**: `sitemap.xml` lists all 14 canonical URLs and `robots.txt` points search crawlers to the sitemap.
