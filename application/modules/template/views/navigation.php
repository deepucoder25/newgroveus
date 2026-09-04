<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif (in_array($segment1, ['seo-services', 'local-seo', 'technical-seo', 'ecommerce-seo', 'on-page-seo', 'link-building-services', 'enterprise-seo'])) {
    $active_tab = 'seo-services';
  } elseif ($segment1 === 'social-media-marketing') {
    $active_tab = 'smm';
  } elseif (in_array($segment1, ['other-services', 'our-services', 'ppc-management-services', 'web-development-services', 'content-marketing-services', 'cro-services', 'email-marketing-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'packing-and-moving', 'loading-unloading'])) {
    $active_tab = 'other-services';
  } elseif ($segment1 === 'case-studies') {
    $active_tab = 'case-studies';
  } elseif ($segment1 === 'packages') {
    $active_tab = 'packages';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'packers_movers' || in_array($segment1, ['our-branches', 'delhi', 'maharashtra', 'bangalore', 'west-bengal', 'bihar', 'rajasthan', 'gujarat', 'uttar-pradesh', 'punjab', 'haryana', 'jharkhand', 'assam', 'karnataka', 'tamil-nadu'])) {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  }
  ?>

  <!-- Top Red Gradient Info Bar with Slanted Right Section -->
  <div class="top-info-bar">
    <div class="top-bar-inner d-flex align-items-stretch justify-content-between">
      <!-- Left Side (Red gradient): Tagline + Links -->
      <div class="top-bar-left d-flex align-items-center flex-wrap px-3 px-sm-4 px-lg-5 py-2">
        <div class="top-tagline d-flex align-items-center me-3">
          <strong>Technology Has No Boundaries</strong>
        </div>
        <span class="top-divider d-none d-lg-inline me-3">|</span>
        <div class="top-nav-links d-none d-md-flex align-items-center gap-3">
          <a href="https://edubios.com" target="_blank" rel="noopener" class="top-item-link">
            <i class="bi bi-mortarboard-fill me-1"></i> EduBios
          </a>
          <span class="top-divider">|</span>
          <a href="https://groveus.com" target="_blank" rel="noopener" class="top-item-link">
            <i class="bi bi-people-fill me-1"></i> Groveus Education
          </a>
          <span class="top-divider">|</span>
          <a href="<?= site_url('login') ?>" class="top-item-link">
            <i class="bi bi-headset me-1"></i> Client Login
          </a>
        </div>
      </div>

      <!-- Right Side (Angled/Slanted Dark Red): Phone & Email -->
      <div class="top-bar-right d-flex align-items-center px-2 px-sm-3 px-md-4 py-1">
        <!-- Phone Block (Hidden on mobile, shown on md and up) -->
        <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:+919093311022' ?>" class="top-contact-block d-none d-md-flex align-items-center">
          <div class="top-circle-icon me-2">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="top-contact-meta">
            <span class="meta-main"><?= !empty($phone) ? $phone : '+91 0000000000' ?></span>
            <span class="meta-sub">Mon - Sat, 9:00 AM - 6:00 PM</span>
          </div>
        </a>

        <span class="top-divider d-none d-md-inline mx-3">|</span>

        <!-- Email Block (Visible on all devices) -->
        <a href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:support@groveus.com' ?>" class="top-contact-block d-flex align-items-center">
          <div class="top-circle-icon me-1 me-sm-2">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <div class="top-contact-meta">
            <span class="meta-main"><?= !empty($mail) ? $mail : 'support@mycompany.com' ?></span>
            <span class="meta-sub d-none d-sm-block">We reply within 24 hrs</span>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Sticky Header Bar -->
  <header class="main-header" id="mainHeader">
    <div class="container-fluid px-3 px-sm-4 px-lg-5 d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap" aria-label="<?= $company3 ?>">
        <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Logo of <?= $company3 ?>" class="brand-logo" loading="lazy">
      </a>

      <!-- Header Action Buttons (Send Enquiry + Hamburger) -->
      <div class="d-flex align-items-center gap-2 gap-sm-3">
        <!-- Send Enquiry Button (Desktop / Tablet only) -->
        <a href="#" class="btn-enquiry d-none d-md-inline-flex" data-bs-toggle="modal" data-bs-target="#qteModal">
          Send Enquiry
        </a>

        <!-- Hamburger Icon Button with Round Soft Background -->
        <button class="hamburger-circle-btn" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu Overlay -->
  <div class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <div class="mega-container container py-3">
      <!-- Mega Top Header Bar -->
      <div class="mega-header d-flex align-items-center justify-content-between py-3">
        <a href="<?= site_url() ?>" class="brand-wrap" aria-label="<?= $company3 ?>">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Logo of <?= $company3 ?>" class="brand-logo" loading="lazy">
        </a>
        <button class="mega-close-btn" id="closeMenu" aria-label="Close navigation menu">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- Mega Menu Multi-Column Grid -->
      <div class="mega-grid-body py-4">
        <div class="row g-4 g-xl-5">
          <!-- Col 1: Quick Links -->
          <div class="col-6 col-lg-3 mega-col-quick">
            <div class="mega-section-block">
              <h4 class="mega-heading">Quick Links</h4>
              <ul class="mega-nav-list">
                <li><a href="<?= site_url() ?>" class="<?= $active_tab === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= site_url('services') ?>" class="<?= in_array($segment1, ['services', 'all-services', 'other-services']) ? 'active' : '' ?>">All Services</a></li>
                <li><a href="<?= site_url('blog') ?>" class="<?= $segment1 === 'blog' ? 'active' : '' ?>">Blog</a></li>
                <li><a href="<?= site_url('contact-us') ?>" class="<?= $segment1 === 'contact-us' ? 'active' : '' ?>">Contact Us</a></li>
                <li><a href="<?= site_url('case-studies') ?>" class="<?= $segment1 === 'case-studies' ? 'active' : '' ?>">Case Studies</a></li>
                <li><a href="<?= site_url('packages') ?>" class="<?= $segment1 === 'packages' ? 'active' : '' ?>">Packages</a></li>
              </ul>
            </div>
          </div>

          <!-- Col 2: Services (Our Services & Other Services in one column) -->
          <div class="col-6 col-lg-3 mega-col-services">
            <div class="mega-section-block mb-4">
              <h4 class="mega-heading">Our Services</h4>
              <ul class="mega-nav-list">
                <li><a href="<?= site_url('local-seo-services') ?>" class="<?= in_array($segment1, ['local-seo', 'local-seo-services']) ? 'active' : '' ?>">Local Seo Services</a></li>
                <li><a href="<?= site_url('international-seo-services') ?>" class="<?= $segment1 === 'international-seo-services' ? 'active' : '' ?>">International Seo Services</a></li>
                <li><a href="<?= site_url('white-label-seo-services') ?>" class="<?= $segment1 === 'white-label-seo-services' ? 'active' : '' ?>">White Label Seo Services</a></li>
                <li><a href="<?= site_url('ecommerce-seo-services') ?>" class="<?= in_array($segment1, ['ecommerce-seo', 'ecommerce-seo-services']) ? 'active' : '' ?>">Ecommerce Seo- Services</a></li>
                <li><a href="<?= site_url('nationwide-seo-services') ?>" class="<?= $segment1 === 'nationwide-seo-services' ? 'active' : '' ?>">Nationwide Seo Services</a></li>
                <li><a href="<?= site_url('linkbuilding-services') ?>" class="<?= in_array($segment1, ['linkbuilding-services', 'link-building-services']) ? 'active' : '' ?>">Linkbuilding Services</a></li>
              </ul>
            </div>
            <div class="mega-section-block">
              <h4 class="mega-heading">Other Services</h4>
              <ul class="mega-nav-list">
                <li><a href="<?= site_url('ppc-management-services') ?>" class="<?= $segment1 === 'ppc-management-services' ? 'active' : '' ?>">PPC Management</a></li>
                <li><a href="<?= site_url('web-development-services') ?>" class="<?= $segment1 === 'web-development-services' ? 'active' : '' ?>">Web Design &amp; Development</a></li>
                <li><a href="<?= site_url('content-marketing-services') ?>" class="<?= $segment1 === 'content-marketing-services' ? 'active' : '' ?>">Content Marketing</a></li>
                <li><a href="<?= site_url('cro-services') ?>" class="<?= $segment1 === 'cro-services' ? 'active' : '' ?>">Conversion Rate Optimization</a></li>
                <li><a href="<?= site_url('email-marketing-services') ?>" class="<?= $segment1 === 'email-marketing-services' ? 'active' : '' ?>">Email Marketing</a></li>
                <li><a href="<?= site_url('social-media-marketing') ?>" class="<?= $segment1 === 'social-media-marketing' ? 'active' : '' ?>">Social Media Marketing</a></li>
              </ul>
            </div>
          </div>

          <!-- Col 3: About -->
          <div class="col-6 col-lg-3 mega-col-about">
            <div class="mega-section-block">
              <h4 class="mega-heading">About</h4>
              <ul class="mega-nav-list">
                <li><a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a></li>
                <li><a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">Support / FAQ</a></li>
                <li><a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonials</a></li>
                <li><a href="<?= site_url('reviews') ?>" class="<?= $segment1 === 'reviews' ? 'active' : '' ?>">Reviews</a></li>
                <li><a href="<?= site_url('photo-gallery') ?>" class="<?= $segment1 === 'photo-gallery' ? 'active' : '' ?>">Gallery</a></li>
                <li><a href="<?= site_url('privacy-policy') ?>" class="<?= $segment1 === 'privacy-policy' ? 'active' : '' ?>">Privacy Policy</a></li>
                <li><a href="<?= site_url('terms-and-conditions') ?>" class="<?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>

          <!-- Col 4: Contact Info -->
          <div class="col-12 col-lg-3 mega-col-contact">
            <div class="mega-section-block">
              <h4 class="mega-heading">Contact Info</h4>
              <div class="mega-contact-list">
                <div class="mega-contact-item">
                  <div class="contact-dot-icon"><i class="bi bi-geo-alt-fill"></i></div>
                  <span><?= !empty($address) ? $address : 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai, Pin Code- 421302' ?></span>
                </div>
                <div class="mega-contact-item">
                  <div class="contact-dot-icon"><i class="bi bi-envelope-fill"></i></div>
                  <a href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:support@mycompany.com' ?>"><?= !empty($mail) ? $mail : 'support@mycompany.com' ?></a>
                </div>
                <div class="mega-contact-item">
                  <div class="contact-dot-icon"><i class="bi bi-telephone-fill"></i></div>
                  <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:+910000000000' ?>"><?= !empty($phone) ? $phone : '+91 0000000000' ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const htmlEl = document.documentElement;
    const bodyEl = document.body;
    const mainHeader = document.getElementById('mainHeader');

    function toggleMegaMenu() {
      const isActive = megaMenu.classList.toggle('active');
      htmlEl.classList.toggle('menu-open', isActive);
      bodyEl.classList.toggle('menu-open', isActive);
    }

    if (openMenu) openMenu.addEventListener('click', toggleMegaMenu);
    if (closeMenu) closeMenu.addEventListener('click', toggleMegaMenu);

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        htmlEl.classList.remove('menu-open');
        bodyEl.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        htmlEl.classList.remove('menu-open');
        bodyEl.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      if (mainHeader) {
        mainHeader.classList.toggle('scrolled', window.scrollY > 20);
      }
    });
  </script>