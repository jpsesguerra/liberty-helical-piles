<?php
/* FAQ Section — reusable include.
 * The $faq_items array can be overridden before including this file.
 * Default items match the Figma design exactly.
 */
if (!isset($faq_items)) {
  $faq_items = [
    [
      'question' => 'What are helical piles/piers and how do they work?',
      'answer'   => 'Helical piles/piers are deep foundation elements made of steel shafts with helical plates that are screwed into the ground. They transfer the load of a structure to stable soil layers or bedrock, making them ideal for areas with poor surface soil conditions. The installation process is quick, vibration-free, and requires minimal excavation.',
    ],
    [
      'question' => 'What types of projects are helical piles suitable for?',
      'answer'   => 'Helical piles are versatile and can be used for residential foundations and decks, commercial and industrial structures, boardwalks and light poles, solar panel arrays, and underpinning and foundation repair projects. They are especially useful in areas with limited access or challenging soil conditions.',
    ],
    [
      'question' => 'How long does it take to install helical piles/piers?',
      'answer'   => 'Installation time varies depending on project size and soil conditions, but most residential projects can be completed in 1–2 days. Because there\'s no curing time (unlike concrete), construction can begin immediately after installation, significantly speeding up the building timeline.',
    ],
    [
      'question' => 'Are helical piles/piers approved for use in the United States?',
      'answer'   => 'Yes. Helical piles/piers are widely accepted in the U.S. by building departments and engineers. Liberty Helical Piles follows all ICC (International Code Council) and local building codes, and our team provides engineering support and documentation to meet permitting requirements.',
    ],
    [
      'question' => 'Do you service areas outside of Buffalo, New York?',
      'answer'   => 'Yes. Liberty Helical Piles proudly serves clients across the United States. Contact us to discuss your project location and we will confirm availability and logistics for your area.',
    ],
  ];
}
?>

<section class="faq-section">
  <div class="faq-inner">

    <!-- Left: image -->
    <div class="faq-image">
      <img
        src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_700/faq-bg_gu6jtg"
        alt="Helical pile components"
        loading="lazy"
      />
    </div>

    <!-- Right: content -->
    <div class="faq-content">
      <div class="faq-title">
        <div class="label-tag">
          <span class="label-line" aria-hidden="true"></span>
          Frequently Asked Questions
        </div>
        <h2>General Questions</h2>
      </div>

      <div class="faq-list">
        <?php foreach ($faq_items as $index => $item): ?>
        <div class="faq-item<?php echo $index === 0 ? ' open' : ' closed'; ?>">
          <div class="faq-question" role="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
            <h4><?php echo htmlspecialchars($item['question']); ?></h4>
            <div class="faq-icon" aria-hidden="true">
              <!-- Chevron icon -->
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7.5L10 12.5L15 7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="faq-answer">
            <p><?php echo htmlspecialchars($item['answer']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>
