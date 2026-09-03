# Instalgas Chile (instalgaschile.cl)

Sitio web corporativo y plataforma de alta conversión para **Instalgas Chile** ([https://instalgaschile.cl](https://instalgaschile.cl)), desarrollado en **PHP puro**, modular, ultrarrápido y optimizado para posicionamiento en motores de búsqueda (SEO técnico), datos estructurados (JSON-LD), previsualizaciones en redes sociales (Open Graph para Facebook Debugger), pautas de *Lighthouse Agentic Browsing* y agentes de Inteligencia Artificial (`llms.txt` y `llms-full.txt`).

---

## 📋 Características Principales

- **Arquitectura en PHP Puro:** Sin dependencias pesadas ni frameworks, garantizando cargas ultrarrápidas y compatibilidad total con servidores Apache/Nginx.
- **URLs Limpias sin `.php`:** Configuración mediante `.htaccess` con redirección 301 canónica y reescritura interna. Incluye `router.php` para desarrollo local con `php -S`.
- **Identidad de Marca y Respaldo SEC:**
  - **Director Técnico:** Domingo Isaín Plaza Caamaño (RUT: `12.738.961-6`).
  - **Acreditación Oficial:** Instalador Autorizado SEC Clase 3 (Regulado por DS 191 de la SEC; ejecución conforme a DS 66, DS 222, DS 20 y coordinación con redes exteriores DS 67).
  - Paleta institucional basada en el logotipo oficial (Azul Seguridad `#0d254c` y Rojo Urgencia `#c62828`).
- **Conversión Directa hacia WhatsApp:**
  - Botón flotante interactivo con animación de pulso y contador de mensajes.
  - Barra de acción rápida fija para dispositivos móviles (Llamada en 1 toque y WhatsApp directo).
  - Central telefónica y WhatsApp: **[+56 9 4987 7316](https://wa.me/56949877316)**.
- **SEO On-Page y Datos Estructurados:**
  - Esquema `Plumber` / `LocalBusiness` con datos de contacto, geolocalización y servicios.
  - Esquema `BreadcrumbList` en todas las páginas internas.
  - Esquema `FAQPage` con coherencia estricta 1:1 con el DOM visible para obtener fragmentos enriquecidos en Google.
  - Metatags de Open Graph (`og:*`) y Twitter Cards completos para Facebook Debugger.
- **Preparación para Agentes de IA:**
  - `llms.txt`: Resumen para motores de IA (Perplexity, ChatGPT, Gemini, Claude).
  - `llms-full.txt`: Documentación técnica detallada con especificaciones normativas SEC y tecnologías no destructivas (Gas Trazador y Prodoral R6-1).
  - `sitemap.xml` con metadatos de imágenes y `robots.txt` permisivo para rastreadores de IA.

---

## 🗂️ Estructura del Proyecto

```
instalgaschile.cl/
│
├── includes/
│   ├── config.php          # Configuración global, datos de contacto y helpers
│   ├── seo.php             # Generador de metatags SEO, Open Graph y JSON-LD dinámico
│   ├── header.php          # Cabecera accesible, barra superior de urgencias 24/7 y nav limpia
│   ├── footer.php          # Pie de página, enlaces a IA, botón WhatsApp flotante y barra móvil
│   └── faq-section.php     # Acordeón FAQ accesible y coherente con FAQPage JSON-LD
│
├── assets/
│   ├── css/
│   │   └── style.css       # Hoja de estilos nativa, variables CSS y cero CLS
│   ├── js/
│   │   └── main.js         # Lógica interactiva ligera (acordeón, menú móvil, cotizador WA)
│   └── img/                # Logotipo, credencial oficial SEC, badges y fotografías
│
├── index.php               # Portada principal (servida en /)
├── certificacion-sec.php   # Sello Verde SEC y regularización de sellos rojos (servida en /certificacion-sec)
├── deteccion-fugas-gas.php # Detección no invasiva con gas trazador y Prodoral R6-1 (servida en /deteccion-fugas-gas)
├── servicios.php           # Catálogo técnico integral (servida en /servicios)
├── contacto.php            # Canales de atención y formulario directo a WhatsApp (servida en /contacto)
│
├── router.php              # Router para servidor de desarrollo integrado de PHP (php -S)
├── .htaccess               # Redirecciones 301, URLs amigables, compresión Gzip y caché
├── llms.txt                # Ficha estándar para motores de IA
├── llms-full.txt           # Documentación técnica completa para LLMs
├── sitemap.xml             # Mapa del sitio XML para Google
└── robots.txt              # Directivas de indexación y rastreo
```

---

## 🚀 Despliegue y Ejecución Local

### En Laragon / Servidor Apache:
El archivo `.htaccess` gestiona automáticamente la reescritura de URLs y redirecciones canónicas.

### Con el servidor integrado de PHP:
```bash
php -S 127.0.0.1:8088 router.php
```

---

## 📞 Contacto y Soporte Técnico
- **Sitio Web:** [https://instalgaschile.cl](https://instalgaschile.cl)
- **WhatsApp Oficial:** [+56 9 4987 7316](https://wa.me/56949877316)
- **Atención:** Urgencias 24 Horas en Santiago y Región de Valparaíso.
