/* =============================================
   LIBERTY HELICAL PILES — Main JS
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

  // --- Mobile Nav ---
  const hamburger = document.getElementById('nav-hamburger');
  const mobileNav = document.getElementById('mobile-nav');
  const mobileClose = document.getElementById('mobile-nav-close');

  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('open');
      mobileNav.classList.toggle('open');
      document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
    });
  }

  if (mobileClose && mobileNav) {
    mobileClose.addEventListener('click', function () {
      mobileNav.classList.remove('open');
      if (hamburger) hamburger.classList.remove('open');
      document.body.style.overflow = '';
    });
  }

  // Close mobile nav on link click
  if (mobileNav) {
    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileNav.classList.remove('open');
        if (hamburger) hamburger.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  // --- FAQ Accordion ---
  document.querySelectorAll('.faq-item').forEach(function (item) {
    item.classList.add('closed');
  });

  document.querySelectorAll('.faq-item .faq-question').forEach(function (question) {
    question.addEventListener('click', function () {
      const item = question.closest('.faq-item');
      const isOpen = item.classList.contains('open');

      // Close all
      document.querySelectorAll('.faq-item').forEach(function (el) {
        el.classList.remove('open');
        el.classList.add('closed');
      });

      // If it wasn't open, open it
      if (!isOpen) {
        item.classList.remove('closed');
        item.classList.add('open');
      }
    });
  });

  // Open first FAQ by default
  const firstFaq = document.querySelector('.faq-item');
  if (firstFaq) {
    firstFaq.classList.remove('closed');
    firstFaq.classList.add('open');
  }

  // --- Active nav link ---
  const currentPath = window.location.pathname.replace(/\/$/, '');
  document.querySelectorAll('.nav-links a, .mobile-nav-links a').forEach(function (link) {
    const linkPath = link.getAttribute('href').replace(/\/$/, '');
    if (currentPath === linkPath || (linkPath !== '' && currentPath.startsWith(linkPath))) {
      link.classList.add('active');
    }
  });

});
