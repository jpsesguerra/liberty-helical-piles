<?php
$page_title       = 'Contact Us';
$page_description = 'Get in touch with Liberty Helical Piles. Request a free consultation for helical pile installation, underpinning, equipment rentals, or custom fabrication across the United States.';
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/topbar.php';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- Inner Hero -->
  <div class="inner-hero">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>

  <!-- ============================================================
       CONTACT FORM SECTION
       ============================================================ -->
  <section class="form-section">
    <div class="form-outer">

      <form
        class="form-card"
        id="contact-form"
        action="https://api.web3forms.com/submit"
        method="POST"
      >
        <!-- Web3Forms hidden fields -->
        <input type="hidden" name="access_key" value="5acaa04e-e48f-4afc-ba72-1c7609fd65ba" />
        <input type="hidden" name="subject" value="New Contact Form Submission — Liberty Helical Piles" />
        <input type="hidden" name="from_name" value="Liberty Helical Piles Website" />
        <input type="checkbox" name="botcheck" style="display:none;" />

        <!-- Row 1: Name + Email -->
        <div class="form-row">

          <div class="form-field">
            <label for="contact-name">Your Name</label>
            <div class="form-input-wrap">
              <svg class="form-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle cx="12" cy="8" r="4" stroke="#6A6A6A" stroke-width="1.5"/>
                <path d="M4 20C4 16.686 7.582 14 12 14C16.418 14 20 16.686 20 20" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
              <input
                type="text"
                id="contact-name"
                name="name"
                placeholder="Enter your name"
                required
              />
            </div>
          </div>

          <div class="form-field">
            <label for="contact-email">Email Address</label>
            <div class="form-input-wrap">
              <svg class="form-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" stroke="#6A6A6A" stroke-width="1.5"/>
                <path d="M3 8L12 13L21 8" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
              <input
                type="email"
                id="contact-email"
                name="email"
                placeholder="Enter your email"
                required
              />
            </div>
          </div>

        </div>

        <!-- Row 2: Phone + Service -->
        <div class="form-row">

          <div class="form-field">
            <label for="contact-phone">Phone</label>
            <div class="form-input-wrap">
              <svg class="form-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M4.5 3.5C4.5 3.5 3 3.5 3 5C3 6.5 3.5 9.5 7.5 13.5C11.5 17.5 14.5 17 16 17C17.5 17 17.5 15.5 17.5 15.5L16 12.5L14 13.5C14 13.5 12.5 13 10.5 11C8.5 9 8 7.5 8 7.5L9 5.5L6 3.5H4.5Z" stroke="#6A6A6A" stroke-width="1.5" stroke-linejoin="round"/>
              </svg>
              <input
                type="tel"
                id="contact-phone"
                name="phone"
                placeholder="Phone Number"
              />
            </div>
          </div>

          <div class="form-field">
            <label for="contact-service">Service</label>
            <div class="form-input-wrap form-select-wrap">
              <select id="contact-service" name="service">
                <option value="" disabled selected>Select Service</option>
                <option value="Helical Pile/Piers Installation">Helical Pile/Piers Installation</option>
                <option value="Underpinning &amp; Repair">Underpinning &amp; Repair</option>
                <option value="Equipment Rentals &amp; Sale">Equipment Rentals &amp; Sale</option>
                <option value="Custom Fabrication">Custom Fabrication</option>
                <option value="Other">Other</option>
              </select>
              <svg class="form-select-arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

        </div>

        <!-- Message -->
        <div class="form-field form-field-full">
          <label for="contact-message">Message</label>
          <div class="form-input-wrap">
            <textarea
              id="contact-message"
              name="message"
              placeholder="Write Your Message Here"
              rows="7"
              required
            ></textarea>
          </div>
        </div>

        <!-- Submit -->
        <div class="form-submit-row">
          <button type="submit" class="btn btn-form-submit">Send Your Message</button>
          <div class="form-status" id="contact-status" aria-live="polite"></div>
        </div>

      </form>

    </div>
  </section>

  <!-- FAQ -->
  <?php require_once __DIR__ . '/../includes/faq.php'; ?>

</main>

<script>
(function () {
  var form = document.getElementById('contact-form');
  var status = document.getElementById('contact-status');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var btn = form.querySelector('button[type="submit"]');
    btn.disabled = true;
    btn.textContent = 'Sending…';
    status.textContent = '';
    status.className = 'form-status';

    fetch('https://api.web3forms.com/submit', {
      method: 'POST',
      body: new FormData(form)
    })
      .then(function (r) { return r.json(); })
      .then(function (data) {
        if (data.success) {
          form.reset();
          status.textContent = 'Message sent! We\'ll be in touch shortly.';
          status.classList.add('form-status--success');
          btn.textContent = 'Send Your Message';
          btn.disabled = false;
        } else {
          throw new Error(data.message || 'Submission failed');
        }
      })
      .catch(function (err) {
        status.textContent = 'Something went wrong. Please try again or call us directly.';
        status.classList.add('form-status--error');
        btn.textContent = 'Send Your Message';
        btn.disabled = false;
      });
  });
}());
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
