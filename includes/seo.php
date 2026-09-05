<?php
/**
 * Generador de Metadatos SEO, Open Graph y JSON-LD Estructurado
 * Optimizado para Google SERP, Facebook Debugger y Motores de IA
 */

function render_seo_meta($config = []) {
    $default_title = SITE_NAME . ' | Gasfiter Certificado SEC y Detección de Fugas en Santiago';
    $default_desc = 'Servicio de gasfitería profesional con certificación SEC en Santiago. Detección y sellado de fugas con gas trazador y Prodoral R6-1 sin picar. Atención 24/7.';
    $default_image = SITE_URL . '/assets/img/og-instalgas-share.jpg';
    $default_canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'instalgaschile.cl') . ($_SERVER['REQUEST_URI'] ?? '/');

    $title = $config['title'] ?? $default_title;
    $description = $config['description'] ?? $default_desc;
    $keywords = $config['keywords'] ?? 'gasfiter certificado SEC, instalador de gas santiago, deteccion de fugas de gas, reparacion fugas sin picar, sello verde SEC, gasfiter de urgencia santiago';
    $canonical = $config['canonical'] ?? $default_canonical;
    $image = $config['image'] ?? $default_image;
    $type = $config['type'] ?? 'website';
    $faqs = $config['faqs'] ?? [];
    $breadcrumbs = $config['breadcrumbs'] ?? [];
    $service_schema = $config['service'] ?? null;

    // Garantizar URL absoluta para Open Graph
    if (!preg_match('~^https?://~i', $image)) {
        $image = rtrim(SITE_URL, '/') . '/' . ltrim($image, '/');
    }
    // Determinar formato MIME de la imagen para Facebook Debugger
    $img_ext = strtolower(pathinfo(parse_url($image, PHP_URL_PATH), PATHINFO_EXTENSION));
    $image_mime = ($img_ext === 'png') ? 'image/png' : (($img_ext === 'webp') ? 'image/webp' : 'image/jpeg');
    
    // URL Segura HTTPS para WhatsApp / Facebook
    $image_secure = preg_replace('~^http://~i', 'https://', $image);
    ?>
    <!-- Metadatos Básicos y SEO On-Page -->
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
    <meta name="author" content="<?= htmlspecialchars(DIRECTOR_NAME) ?> - <?= htmlspecialchars(SITE_NAME) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

    <!-- Open Graph / Facebook Debugger Meta Tags -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="<?= htmlspecialchars($type) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($image) ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($image_secure) ?>">
    <meta property="og:image:type" content="<?= $image_mime ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= htmlspecialchars($title) ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($image) ?>">

    <!-- Preparación para Agentes de IA y LLMs (Lighthouse Agentic Browsing Standard) -->
    <link rel="llms-txt" type="text/markdown" href="<?= SITE_URL ?>/llms.txt" title="Resumen para Agentes IA">
    <link rel="llms-full-txt" type="text/markdown" href="<?= SITE_URL ?>/llms-full.txt" title="Documentación Completa para Agentes IA">
    <meta name="ai-content-declaration" content="verified-technician-info">

    <!-- JSON-LD Estructurado: LocalBusiness / Plumber -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Plumber",
      "@id": "<?= SITE_URL ?>/#plumber",
      "name": "<?= SITE_NAME ?>",
      "alternateName": ["Instalgaschile", "Instalgas Chile Servicios de Gas"],
      "url": "<?= SITE_URL ?>",
      "logo": "<?= SITE_URL ?>/assets/img/logo-instalgas.png",
      "image": "<?= SITE_URL ?>/assets/img/credencial-sec-domingo-isain.jpg",
      "description": "Servicio técnico oficial de gasfitería e instalaciones de gas certificado por la SEC en Santiago de Chile. Detección no destructiva de fugas con gas trazador, sellado con Prodoral R6-1 y tramitación de Sello Verde SEC.",
      "telephone": "+<?= PHONE_RAW ?>",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Av. Libertador Bernardo O'Higgins 1302",
        "addressLocality": "Santiago",
        "addressRegion": "Región Metropolitana",
        "addressCountry": "CL"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -33.4447,
        "longitude": -70.6558
      },
      "founder": {
        "@type": "Person",
        "name": "<?= DIRECTOR_NAME ?>",
        "jobTitle": "<?= DIRECTOR_SEC ?>",
        "identifier": "<?= DIRECTOR_RUT ?>"
      },
      "areaServed": [
        "Santiago", "Las Condes", "Vitacura", "Lo Barnechea", "Providencia", 
        "Ñuñoa", "La Reina", "Peñalolén", "La Florida", "Maipú", "San Miguel", 
        "Valparaíso", "Viña del Mar"
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "00:00",
          "closes": "23:59"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios de Gasfitería e Instalaciones SEC",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Detección Electrónica de Fugas de Gas sin Romper",
              "description": "Localización precisa con gas trazador y geófono acústico de fugas invisibles en tuberías de gas."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Sellado de Fugas con Polímero Prodoral R6-1",
              "description": "Reparación definitiva y hermética de cañerías de gas sin necesidad de picar muros ni cerámicas."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Certificación SEC y Regularización Sello Verde",
              "description": "Inspección, subsanación de anomalías de Sello Rojo o Amarillo y emisión de Sello Verde oficial SEC."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Instalación y Conversión de Redes de Gas",
              "description": "Montaje de redes en cobre norma DS 66 y conversión de artefactos para Gas Natural y Gas Licuado GLP."
            }
          }
        ]
      },
      "potentialAction": [
        {
          "@type": "CommunicateAction",
          "name": "Solicitar Urgencia o Atención Técnica SEC vía WhatsApp",
          "target": "https://wa.me/56949877316"
        },
        {
          "@type": "ReserveAction",
          "name": "Agendar Inspección y Diagnóstico Técnico a Domicilio",
          "target": "<?= SITE_URL ?>/contacto",
          "result": {
            "@type": "Reservation",
            "name": "Visita Técnica Instalador SEC"
          }
        }
      ]
    }
    </script>

    <?php if (!empty($breadcrumbs)): ?>
    <!-- JSON-LD Estructurado: BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        <?php 
        $b_items = [];
        $pos = 1;
        foreach ($breadcrumbs as $b) {
            $b_items[] = json_encode([
                "@type" => "ListItem",
                "position" => $pos++,
                "name" => $b['name'],
                "item" => $b['url']
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        echo implode(",\n        ", $b_items);
        ?>
      ]
    }
    </script>
    <?php endif; ?>

    <?php if (!empty($faqs)): ?>
    <!-- JSON-LD Estructurado: FAQPage (100% coherente con preguntas en pantalla) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php 
        $faq_items = [];
        foreach ($faqs as $f) {
            $faq_items[] = json_encode([
                "@type" => "Question",
                "name" => $f['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => strip_tags($f['answer'])
                ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        echo implode(",\n        ", $faq_items);
        ?>
      ]
    }
    </script>
    <?php endif; ?>

    <?php if (!empty($service_schema)): ?>
    <!-- JSON-LD Estructurado: Service Específico -->
    <script type="application/ld+json">
    <?= json_encode($service_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    </script>
    <?php endif; ?>
    <?php
}
