<footer class="footer-section footer-light-theme">

  <!-- Wavy Top Decorative Line SVG with Smooth Gradient Transitions -->
  <div class="footer-wave-wrap">
    <svg class="footer-wave-svg" viewBox="0 0 1440 90" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <defs>
        <!-- Gradient 1: Deep Maroon & Red to Dark Navy -->
        <linearGradient id="footerWaveGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#ea2d2d" stop-opacity="0.85"/>
          <stop offset="45%" stop-color="#9b0b10" stop-opacity="0.75"/>
          <stop offset="100%" stop-color="#20344d" stop-opacity="0.9"/>
        </linearGradient>

        <!-- Gradient 2: Vibrant Accent Red to Deep Maroon -->
        <linearGradient id="footerWaveGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#d3181e" stop-opacity="0.95"/>
          <stop offset="50%" stop-color="#ea2d2d" stop-opacity="0.9"/>
          <stop offset="100%" stop-color="#152233" stop-opacity="0.95"/>
        </linearGradient>

        <!-- Gradient 3: Soft Highlight Ribbon -->
        <linearGradient id="footerWaveGrad3" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0.7"/>
          <stop offset="55%" stop-color="#ea2d2d" stop-opacity="0.85"/>
          <stop offset="100%" stop-color="#d3181e" stop-opacity="0.7"/>
        </linearGradient>
      </defs>

      <!-- Layer 1: Back Wave starting from top edge -->
      <path d="M0,0 C260,65 520,0 800,40 C1080,80 1280,10 1440,25 L1440,90 L0,90 Z" fill="url(#footerWaveGrad1)"/>

      <!-- Layer 2: Middle Accent Wave -->
      <path d="M0,18 C300,75 580,12 870,52 C1150,88 1320,22 1440,42 L1440,90 L0,90 Z" fill="url(#footerWaveGrad2)"/>

      <!-- Layer 3: Accent Ribbon Wave -->
      <path d="M0,32 C340,82 640,22 940,62 C1200,92 1350,35 1440,52 L1440,90 L0,90 Z" fill="url(#footerWaveGrad3)"/>

      <!-- Layer 4: Front Base White Wave connecting seamlessly to Footer Body -->
      <path d="M0,45 C380,92 700,32 1020,72 C1240,96 1360,52 1440,64 L1440,90 L0,90 Z" fill="#ffffff"/>
    </svg>
  </div>

  <!-- Main Footer Content -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-4 g-lg-5">

        <!-- Column 1: Brand Info & Social -->
        <div class="col-12 col-lg-4 col-xl-4">
          <div class="footer-brand pe-lg-4">
            <a href="<?= site_url() ?>" class="footer-brand-logo mb-3 d-inline-block" aria-label="<?= $company3 ?>">
              <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="footer-logo img-fluid" loading="lazy">
            </a>

            <div class="footer-tagline-badge mb-3">
              <i class="bi bi-cpu-fill me-1 text-danger"></i>
              <strong>Technology Has No Boundaries</strong>
            </div>

            <p class="footer-brand-copy">
              We empower businesses with data-driven SEO, cutting-edge web technologies, and scalable digital marketing strategies to achieve measurable global growth.
            </p>

            <div class="footer-social-wrap mt-3 pt-1">
              <span class="footer-social-label">CONNECT WITH US:</span>
              <div class="footer-social-icons d-flex align-items-center gap-2 mt-2">
                <!-- Facebook -->
                <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" aria-label="Facebook" class="social-circle-btn social-btn-facebook">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                  </svg>
                </a>

                <!-- Instagram -->
                <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" aria-label="Instagram" class="social-circle-btn social-btn-instagram">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                  </svg>
                </a>

                <!-- LinkedIn -->
                <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" aria-label="LinkedIn" class="social-circle-btn social-btn-linkedin">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                  </svg>
                </a>

                <!-- YouTube -->
                <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener" aria-label="YouTube" class="social-circle-btn social-btn-youtube">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                  </svg>
                </a>

                <!-- Twitter / X -->
                <a href="<?= $twitterhtml ?>" target="_blank" rel="noopener" aria-label="Twitter / X" class="social-circle-btn social-btn-twitter">
                  <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column (col-lg-8): 3 Link Columns + 3 Aligned Meta Pills Directly Below -->
        <div class="col-12 col-lg-8 col-xl-8">
          <!-- 3 Navigation Link Columns -->
          <div class="row g-4">
            <!-- Col 1: Quick Links -->
            <div class="col-6 col-sm-6 col-md-4">
              <div class="footer-widget">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-nav-list">
                  <li><a href="<?= site_url() ?>">Home</a></li>
                  <li><a href="<?= site_url('services') ?>">All Services</a></li>
                  <li><a href="<?= site_url('blog') ?>">Blog</a></li>
                  <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
                  <li><a href="<?= site_url('case-studies') ?>">Case Studies</a></li>
                  <li><a href="<?= site_url('packages') ?>">Packages</a></li>
                </ul>
              </div>
            </div>

            <!-- Col 2: Our Services -->
            <div class="col-6 col-sm-6 col-md-4">
              <div class="footer-widget">
                <h4 class="footer-heading">Our Services</h4>
                <ul class="footer-nav-list">
                  <li><a href="<?= site_url('local-seo-services') ?>">Local Seo Services</a></li>
                  <li><a href="<?= site_url('international-seo-services') ?>">International Seo Services</a></li>
                  <li><a href="<?= site_url('white-label-seo-services') ?>">White Label Seo Services</a></li>
                  <li><a href="<?= site_url('ecommerce-seo-services') ?>">Ecommerce Seo- Services</a></li>
                  <li><a href="<?= site_url('nationwide-seo-services') ?>">Nationwide Seo Services</a></li>
                  <li><a href="<?= site_url('linkbuilding-services') ?>">Linkbuilding Services</a></li>
                </ul>
              </div>
            </div>

            <!-- Col 3: Other Services -->
            <div class="col-6 col-md-4">
              <div class="footer-widget">
                <h4 class="footer-heading">Other Services</h4>
                <ul class="footer-nav-list">
                  <li><a href="<?= site_url('ppc-management-services') ?>">PPC Management</a></li>
                  <li><a href="<?= site_url('web-development-services') ?>">Web Design &amp; Development</a></li>
                  <li><a href="<?= site_url('content-marketing-services') ?>">Content Marketing</a></li>
                  <li><a href="<?= site_url('cro-services') ?>">Conversion Rate Optimization</a></li>
                  <li><a href="<?= site_url('email-marketing-services') ?>">Email Marketing</a></li>
                  <li><a href="<?= site_url('social-media-marketing') ?>">Social Media Marketing</a></li>
                </ul>
              </div>
            </div>

            <!-- Col 4 (Mobile Slot) / Full Strip (Desktop): Contact Info & GST Quick Strip -->
            <div class="col-6 col-md-12 footer-meta-col">
              <div class="footer-meta-strip">
                <div class="row g-3">
                  <!-- Email Box -->
                  <div class="col-12 col-md-4">
                    <div class="footer-meta-box">
                      <span class="meta-box-label">OR EMAIL US AT</span>
                      <div class="meta-box-pill d-flex align-items-center justify-content-between">
                        <a href="<?= $mailhtml ?>" class="meta-pill-link text-truncate">
                          <?= $mail ?>
                        </a>
                        <button type="button" class="btn-copy-meta flex-shrink-0" onclick="navigator.clipboard.writeText('<?= $mail ?>'); this.innerHTML='<i class=\'bi bi-check2 text-success\'></i>'; setTimeout(() => this.innerHTML='<i class=\'bi bi-copy\'></i>', 2000);" title="Copy Email" aria-label="Copy Email">
                          <i class="bi bi-copy"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <!-- Phone Box -->
                  <div class="col-12 col-md-4">
                    <div class="footer-meta-box">
                      <span class="meta-box-label">OR CALL US AT</span>
                      <div class="meta-box-pill d-flex align-items-center justify-content-between">
                        <a href="<?= $phonehtml ?>" class="meta-pill-link text-truncate">
                          <?= $phone ?>
                        </a>
                        <a href="<?= $phonehtml ?>" class="btn-copy-meta flex-shrink-0" title="Call Us" aria-label="Call Us">
                          <i class="bi bi-telephone-outbound"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- GSTIN Box -->
                  <div class="col-12 col-md-4">
                    <div class="footer-meta-box">
                      <span class="meta-box-label">GSTIN</span>
                      <div class="meta-box-pill d-flex align-items-center justify-content-between">
                        <span class="meta-pill-text fw-semibold text-truncate">
                          <?= $gstin ?>
                        </span>
                        <button type="button" class="btn-copy-meta flex-shrink-0" onclick="navigator.clipboard.writeText('<?= $gstin ?>'); this.innerHTML='<i class=\'bi bi-check2 text-success\'></i>'; setTimeout(() => this.innerHTML='<i class=\'bi bi-copy\'></i>', 2000);" title="Copy GSTIN" aria-label="Copy GSTIN">
                          <i class="bi bi-copy"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom Bar -->
      <div class="footer-bottom mt-4 pt-4">
        <div class="row align-items-center gy-3">
          <!-- Copyright -->
          <div class="col-12 col-md-6 text-center text-md-start">
            <p class="footer-copy-text mb-0">
              &copy; <?= date('Y') ?> <strong class="text-dark"><?= $company3 ?></strong>. All Rights Reserved.
            </p>
          </div>

          <!-- Policy & Navigation Links -->
          <div class="col-12 col-md-6 text-center text-md-end">
            <div class="footer-policy-nav d-inline-flex flex-wrap justify-content-center justify-content-md-end gap-3 gap-md-4">
              <a href="<?= site_url('about-us') ?>">About Us</a>
              <a href="<?= site_url('faqs') ?>">Support / FAQ</a>
              <a href="<?= site_url('testimonials') ?>">Testimonials</a>
              <a href="<?= site_url('reviews') ?>">Reviews</a>
              <a href="<?= site_url('photo-gallery') ?>">Gallery</a>
              <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
              <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</footer>

<!-- Floating Action Sticky Widget Partial -->
<?php $this->load->view('floating_widget'); ?>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
</body>

</html>