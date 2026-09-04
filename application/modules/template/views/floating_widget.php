<!-- Floating Action Sticky Widget -->

<!-- Left Side Floating Hamburger Action Trigger & Sub-Buttons (Call & Enquiry) -->
<div class="floating-left-wrap" id="floatingLeftWidget">
  <!-- Sub-Buttons (Call & Enquiry Form) -->
  <div class="floating-sub-menu" id="floatingSubMenu">
    <!-- Call Button -->
    <a href="<?= $phonehtml ?>" class="float-sub-btn float-sub-call" title="Call Now" aria-label="Call Now">
      <div class="float-sub-icon"><i class="bi bi-telephone-fill"></i></div>
      <span class="float-sub-label">Call Now</span>
    </a>

    <!-- Enquiry Form Button (Opens Quote Modal) -->
    <button type="button" class="float-sub-btn float-sub-enquiry" data-bs-toggle="modal" data-bs-target="#qteModal" title="Enquiry Form" aria-label="Enquiry Form">
      <div class="float-sub-icon"><i class="bi bi-pencil-square"></i></div>
      <span class="float-sub-label">Enquiry Form</span>
    </button>
  </div>

  <!-- Left Main Floating Hamburger Button -->
  <button type="button" class="float-main-btn float-hamburger-btn" id="floatHamburgerToggle" aria-label="Toggle Quick Actions" title="Quick Actions">
    <div class="float-hamburger-bars">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </button>
</div>

<!-- Right Side Floating WhatsApp Button -->
<div class="floating-right-wrap">
  <a href="<?= $whatsapphtml ?>" class="float-main-btn float-whatsapp-btn" target="_blank" rel="noopener" title="WhatsApp Us" aria-label="Message on WhatsApp">
    <i class="bi bi-whatsapp"></i>
    <span class="float-tooltip-label">WhatsApp Us</span>
  </a>
</div>

<script>
  (function() {
    const floatToggle = document.getElementById('floatHamburgerToggle');
    const floatWrap = document.getElementById('floatingLeftWidget');

    if (floatToggle && floatWrap) {
      floatToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        floatWrap.classList.toggle('active');
      });

      document.addEventListener('click', function(e) {
        if (!floatWrap.contains(e.target)) {
          floatWrap.classList.remove('active');
        }
      });
    }
  })();
</script>
