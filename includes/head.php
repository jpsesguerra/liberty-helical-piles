<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Liberty Helical Piles' : 'Liberty Helical Piles'; ?></title>
  <meta name="description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Liberty Helical Piles delivers robust, reliable, and cost-effective helical pile foundation solutions across the United States.'; ?>" />

  <!-- Canonical -->
  <?php if (isset($canonical_url)): ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
  <?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Liberty Helical Piles" />
  <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Liberty Helical Piles' : 'Liberty Helical Piles'; ?>" />
  <meta property="og:description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Liberty Helical Piles delivers robust, reliable, and cost-effective helical pile foundation solutions across the United States.'; ?>" />
  <?php if (isset($canonical_url)): ?>
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>" />
  <?php endif; ?>
  <meta property="og:image" content="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_1200/hero-1_bv3xpq" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Liberty Helical Piles' : 'Liberty Helical Piles'; ?>" />
  <meta name="twitter:description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Liberty Helical Piles delivers robust, reliable, and cost-effective helical pile foundation solutions across the United States.'; ?>" />
  <meta name="twitter:image" content="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_1200/hero-1_bv3xpq" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/assets/icons/fav.png" />

  <!-- Google Fonts: Host Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/style.css" />

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JGN5G7YM06"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-JGN5G7YM06');
  </script>

  <!-- Schema.org: Organization (global) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "GeneralContractor",
    "@id": "https://libertyhelicalpiles.com/#organization",
    "name": "Liberty Helical Piles",
    "url": "https://libertyhelicalpiles.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto/logo-dark_wqr8wi.svg"
    },
    "telephone": "+19058074389",
    "email": "info@libertyhelicalpiles.com",
    "description": "Liberty Helical Piles provides expert helical pile and pier installation, foundation underpinning and repair, equipment rentals, and custom fabrication across the United States.",
    "areaServed": { "@type": "Country", "name": "United States" },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Foundation Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Helical Pile/Pier Installation",     "url": "https://libertyhelicalpiles.com/services/helical-pile-installation" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Foundation Underpinning & Repair",  "url": "https://libertyhelicalpiles.com/services/underpinning-repair" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Equipment Rentals & Sale",          "url": "https://libertyhelicalpiles.com/services/equipment-rentals" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Custom Fabrication",               "url": "https://libertyhelicalpiles.com/services/custom-fabrication" } }
      ]
    }
  }
  </script>

  <?php if (isset($page_schema)): ?>
  <!-- Schema.org: Page-specific -->
  <script type="application/ld+json">
  <?php echo $page_schema; ?>
  </script>
  <?php endif; ?>
</head>
<body>
