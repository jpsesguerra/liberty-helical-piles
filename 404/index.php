<?php
http_response_code(404);
$page_title       = 'Page Not Found';
$page_description = 'The page you were looking for could not be found. Return to the Liberty Helical Piles homepage.';
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/topbar.php';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <section class="not-found-section">
    <div class="not-found-inner">
      <p class="not-found-code">404</p>
      <h1>Page Not Found</h1>
      <p class="not-found-body">The page you're looking for doesn't exist or may have been moved.</p>
      <div class="not-found-buttons">
        <a href="/" class="btn btn-primary">Go to Homepage</a>
        <a href="/contact" class="btn-call">Contact Us</a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
