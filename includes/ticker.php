<?php
/* Scrolling application ticker — reusable include.
 * Used on the Home page hero section.
 */
$ticker_items = ['HOUSES', 'COTTAGES', 'SHEDS', 'DECKS', 'DOCK', 'SOLAR'];
?>

<div class="ticker-wrap" aria-hidden="true">
  <div class="ticker-track">
    <?php
    /* Render items twice for seamless infinite scroll */
    for ($pass = 0; $pass < 2; $pass++):
      foreach ($ticker_items as $item): ?>
        <div class="ticker-item">
          <span class="dot"></span>
          <span><?php echo $item; ?></span>
        </div>
    <?php endforeach; endfor; ?>
  </div>
</div>
