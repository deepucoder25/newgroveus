<footer class="footer-section footer-dark-theme">

  <!-- Top Wavy Dual-Ribbon Divider -->
  <div class="footer-wave-wrap">
    <svg viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="footer-wave-svg">
      <defs>
        <!-- Primary Upper Wave Ribbon Gradient (Crimson Red to Indigo/Navy) -->
        <linearGradient id="footerWaveGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#e52328"/>
          <stop offset="28%" stop-color="#e01f30"/>
          <stop offset="50%" stop-color="#ab235a"/>
          <stop offset="72%" stop-color="#5a2e82"/>
          <stop offset="88%" stop-color="#283a8f"/>
          <stop offset="100%" stop-color="#12254c"/>
        </linearGradient>

        <!-- Secondary Lower Overlapping Ribbon Gradient (Darker Crimson to Dark Indigo) -->
        <linearGradient id="footerWaveGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#b8161d"/>
          <stop offset="30%" stop-color="#a41829"/>
          <stop offset="55%" stop-color="#781d4a"/>
          <stop offset="80%" stop-color="#3c2668"/>
          <stop offset="100%" stop-color="#0e1832"/>
        </linearGradient>
      </defs>

      <!-- Base Dark Fill Connecting to Footer Main Body (Below the Ribbons) -->
      <path d="M0 34 C340 58 720 20 1060 46 C1220 56 1350 42 1440 32 L1440 64 L0 64 Z" fill="#0e1217"/>

      <!-- Secondary Darker Ribbon (Behind/Under) -->
      <path d="M0 24 C340 48 720 10 1060 36 C1220 46 1350 32 1440 22 L1440 32 C1350 42 1220 56 1060 46 C720 20 340 58 0 34 Z" fill="url(#footerWaveGrad2)" opacity="0.9"/>

      <!-- Primary Bright Ribbon (Front) -->
      <path d="M0 16 C340 42 720 4 1060 30 C1220 40 1350 24 1440 14 L1440 24 C1350 34 1220 50 1060 40 C720 14 340 52 0 26 Z" fill="url(#footerWaveGrad1)"/>
    </svg>
  </div>

  <!-- Main Footer Content -->
  <div class="footer-main">
    <div class="container">
      
      <!-- Top 4 Columns Row -->
      <div class="row g-4 g-lg-5 pb-4">

        <!-- Column 1: Company Info & Contact Details -->
        <div class="col-12 col-lg-4 footer-col-company">
          <div class="footer-brand pe-lg-4">
            
            <!-- Official Brand Logo -->
            <a href="<?= site_url() ?>" class="footer-brand-logo mb-3 d-inline-block text-decoration-none" aria-label="GROEUS">
              <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= !empty($company3) ? $company3 : 'GROEUS' ?>" class="footer-logo img-fluid" loading="lazy">
            </a>

            <p class="footer-brand-desc mb-3">
              Groveus is a leading digital transformation and IT solutions agency dedicated to accelerating business growth. We empower enterprises with innovative web development, advanced SEO strategies, and high-performance digital marketing solutions.
            </p>

            <!-- Follow Us & Colorful Social Circles -->
            <div class="footer-social-section mt-3">
              <span class="footer-social-heading d-block mb-2">Follow Us</span>
              <div class="footer-social-icons d-flex align-items-center gap-2">
                <!-- Facebook -->
                <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Facebook" class="footer-social-circle social-bg-fb">
                  <i class="bi bi-facebook"></i>
                </a>
                <!-- LinkedIn -->
                <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" target="_blank" rel="noopener" aria-label="LinkedIn" class="footer-social-circle social-bg-li">
                  <i class="bi bi-linkedin"></i>
                </a>
                <!-- Twitter / X -->
                <a href="<?= !empty($twitterhtml) ? $twitterhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Twitter" class="footer-social-circle social-bg-tw">
                  <i class="bi bi-twitter-x"></i>
                </a>
                <!-- Instagram -->
                <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Instagram" class="footer-social-circle social-bg-insta">
                  <i class="bi bi-instagram"></i>
                </a>
                <!-- YouTube -->
                <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" target="_blank" rel="noopener" aria-label="YouTube" class="footer-social-circle social-bg-yt">
                  <i class="bi bi-youtube"></i>
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-6 col-md-4 col-lg-2 footer-col-links">
          <div class="footer-widget">
            <h4 class="footer-col-title">Quick Links</h4>
            <ul class="footer-link-list list-unstyled mt-3">
              <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Home</a></li>
              <li><a href="<?= site_url('services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> All Services</a></li>
              <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Blog</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Contact Us</a></li>
              <li><a href="<?= site_url('case-studies') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Case Studies</a></li>
              <li><a href="<?= site_url('packages') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Packages</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: Our Services -->
        <div class="col-6 col-md-4 col-lg-3 footer-col-links">
          <div class="footer-widget">
            <h4 class="footer-col-title">Our Services</h4>
            <ul class="footer-link-list list-unstyled mt-3">
              <li><a href="<?= site_url('local-seo-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Local SEO Services</a></li>
              <li><a href="<?= site_url('international-seo-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> International SEO Services</a></li>
              <li><a href="<?= site_url('white-label-seo-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> White Label SEO Services</a></li>
              <li><a href="<?= site_url('ecommerce-seo-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> E-Commerce SEO Services</a></li>
              <li><a href="<?= site_url('nationwide-seo-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Nationwide SEO Services</a></li>
              <li><a href="<?= site_url('linkbuilding-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Link Building Services</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: Other Services -->
        <div class="col-6 col-md-4 col-lg-3 footer-col-links">
          <div class="footer-widget">
            <h4 class="footer-col-title">Other Services</h4>
            <ul class="footer-link-list list-unstyled mt-3">
              <li><a href="<?= site_url('ppc-management-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> PPC Management</a></li>
              <li><a href="<?= site_url('web-development-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Web Design &amp; Development</a></li>
              <li><a href="<?= site_url('content-marketing-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Content Marketing</a></li>
              <li><a href="<?= site_url('cro-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Conversion Rate Optimization</a></li>
              <li><a href="<?= site_url('email-marketing-services') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Email Marketing</a></li>
              <li><a href="<?= site_url('social-media-marketing') ?>"><i class="bi bi-chevron-right text-danger me-1"></i> Social Media Marketing</a></li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Middle Strip: Trust Features & Newsletter -->
      <div class="footer-middle-strip position-relative pt-4 pb-4">
        
        <div class="row align-items-center g-0 position-relative z-1">
          
          <!-- Feature 1: Secure & Reliable -->
          <div class="col-12 col-sm-6 col-lg-3 footer-trust-col">
            <div class="footer-trust-item d-flex align-items-center gap-3 pe-lg-3">
              <div class="footer-trust-icon text-danger flex-shrink-0">
                <svg viewBox="0 0 32 32" width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 3L5 7.5V14.5C5 21.5 9.7 27.8 16 29.5C22.3 27.8 27 21.5 27 14.5V7.5L16 3Z" stroke="#ea2d2d" stroke-width="2.3" stroke-linejoin="round"/>
                  <path d="M11 16L14.5 19.5L21.5 12.5" stroke="#ea2d2d" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div>
                <h5 class="footer-trust-title mb-1">Secure &amp; Reliable</h5>
                <p class="footer-trust-desc mb-0">Enterprise-grade security you can trust</p>
              </div>
            </div>
          </div>

          <!-- Feature 2: 24/7 Support -->
          <div class="col-12 col-sm-6 col-lg-3 footer-trust-col">
            <div class="footer-trust-item d-flex align-items-center gap-3 px-lg-3">
              <div class="footer-trust-icon text-primary flex-shrink-0">
                <svg viewBox="0 0 32 32" width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 17V15C6 9.48 10.48 5 16 5C21.52 5 26 9.48 26 15V17" stroke="#0072d6" stroke-width="2.3" stroke-linecap="round"/>
                  <rect x="4" y="16" width="5" height="9" rx="2.5" stroke="#0072d6" stroke-width="2.3"/>
                  <rect x="23" y="16" width="5" height="9" rx="2.5" stroke="#0072d6" stroke-width="2.3"/>
                  <path d="M25 24V26C25 27.66 23.66 29 22 29H18" stroke="#0072d6" stroke-width="2.3" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <h5 class="footer-trust-title mb-1">24/7 Support</h5>
                <p class="footer-trust-desc mb-0">Our team is always here to help you</p>
              </div>
            </div>
          </div>

          <!-- Feature 3: Future Ready -->
          <div class="col-12 col-sm-6 col-lg-3 footer-trust-col">
            <div class="footer-trust-item d-flex align-items-center gap-3 px-lg-3">
              <div class="footer-trust-icon text-danger flex-shrink-0">
                <svg viewBox="0 0 32 32" width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.5 5.5C19.5 5.5 24 6 26.5 8.5C29 11 29.5 15.5 29.5 15.5C29.5 15.5 24.5 19 19.5 18C18.5 23 15 28 15 28L12.5 23.5L8.5 19.5L4 17C4 17 9 13.5 14 12.5C13 7.5 19.5 5.5 19.5 5.5Z" stroke="#ea2d2d" stroke-width="2.3" stroke-linejoin="round"/>
                  <circle cx="20.5" cy="11.5" r="2.5" stroke="#ea2d2d" stroke-width="2"/>
                  <path d="M8.5 23.5L5 27" stroke="#ea2d2d" stroke-width="2.3" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <h5 class="footer-trust-title mb-1">Future Ready</h5>
                <p class="footer-trust-desc mb-0">Innovative solutions for your business transformation</p>
              </div>
            </div>
          </div>

          <!-- Feature 4: Newsletter Box -->
          <div class="col-12 col-sm-6 col-lg-3 ps-lg-3">
            <div class="footer-newsletter-wrap">
              <h5 class="footer-newsletter-title mb-1">Subscribe to our Newsletter</h5>
              <p class="footer-newsletter-desc mb-2">Get the latest updates, insights and news.</p>
              <form class="footer-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing!'); this.reset();">
                <input type="email" class="form-control footer-newsletter-input" placeholder="Enter your email address" required aria-label="Email address for newsletter">
                <button type="submit" class="btn footer-newsletter-btn" aria-label="Subscribe">
                  <i class="bi bi-send-fill"></i>
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Dual-Gradient Copyright & Legal Bar -->
  <div class="footer-bottom-dual-bar position-relative py-3">
    <div class="container-fluid px-3 px-lg-5 position-relative z-1">
      <div class="row align-items-center gy-2">
        <!-- Copyright on Left -->
        <div class="col-12 col-lg-4 text-center text-lg-start">
          <p class="footer-copyright-text mb-0">
            &copy; <?= date('Y') ?> <strong><?= !empty($company3) ? $company3 : 'Groveus Informatics Pvt. Ltd.' ?></strong>. All Rights Reserved.
          </p>
        </div>

        <!-- Policy Navigation Links on Right -->
        <div class="col-12 col-lg-8 text-center text-lg-end footer-legal-nav-col">
          <nav class="footer-bottom-nav d-inline-flex flex-wrap justify-content-center justify-content-lg-end align-items-center gap-2 gap-md-3">
            <a href="<?= site_url('about-us') ?>">About Us</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('faqs') ?>">Support / FAQ</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('testimonials') ?>">Testimonials</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('reviews') ?>">Reviews</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('photo-gallery') ?>">Gallery</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
            <span class="nav-sep">|</span>
            <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Large Corner Diamond Graphic matching reference screenshot exactly -->
  <div class="footer-corner-diamond-wrap" aria-hidden="true">
    <svg viewBox="0 0 160 200" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-corner-diamond-svg">
      <!-- Top Half Royal Blue Chevron with rounded apex and clean horizontal cut base -->
      <path d="M10 98 L70 28 Q80 18 90 28 L150 98 L122 98 L88 58 Q80 50 72 58 L38 98 Z" fill="#0072d6"/>
      <!-- Bottom Half Crimson Red Chevron with rounded apex and clean horizontal cut top -->
      <path d="M10 102 L70 172 Q80 182 90 172 L150 102 L122 102 L88 142 Q80 150 72 142 L38 102 Z" fill="#e52323"/>
    </svg>
  </div>

</footer>

<!-- Floating Action Sticky Widget Partial -->

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
</body>

</html>