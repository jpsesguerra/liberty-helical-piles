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

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/assets/icons/fav.png" />

  <!-- Google Fonts: Host Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
