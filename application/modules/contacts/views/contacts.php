<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     1. DYNAMIC BREADCRUMBS HERO SECTION
     ========================================================================= -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us &amp; Request a Proposal',
    'bc_desc' => 'Connect with our digital growth strategists, request a custom project audit, or schedule a 1-on-1 strategy call with our engineering team.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]); ?>

<!-- =========================================================================
     2. MAIN CONTACT PAGE CONTAINER (SIDE-BY-SIDE FORM & INFO BOXES)
     ========================================================================= -->
<div class="cnt-page-wrapper">

    <!-- Top Quick-Contact Cards Section -->
    <section class="cnt-quick-cards-section">
        <div class="container">
            <div class="row g-4">
                
                <!-- Quick Card 1: Direct Phone -->
                <div class="col-12 col-md-4">
                    <div class="cnt-quick-card cnt-card-phone">
                        <!-- Card Corner SVG Decoration -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="85" cy="15" r="50" fill="none" stroke="#c91a25" stroke-opacity="0.05" stroke-width="1" />
                                <circle cx="85" cy="15" r="30" fill="none" stroke="#c91a25" stroke-opacity="0.07" stroke-width="1" stroke-dasharray="3 3" />
                            </svg>
                        </div>
                        <div class="cnt-card-icon-wrap cnt-icon-red">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div class="cnt-card-content">
                            <span class="cnt-card-subtitle">DIRECT CONSULTATION LINE</span>
                            <h3 class="cnt-card-title">Speak to an Expert</h3>
                            <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:+919093311022' ?>" class="cnt-card-link">
                                <?= !empty($phone) ? $phone : '+91 90933 11022' ?>
                            </a>
                            <div class="cnt-card-status">
                                <span class="cnt-status-dot cnt-dot-green"></span>
                                <span>Mon - Sat: 9:00 AM - 7:00 PM IST</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Card 2: Email & RFPs -->
                <div class="col-12 col-md-4">
                    <div class="cnt-quick-card cnt-card-mail">
                        <!-- Card Corner SVG Decoration -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="85" cy="15" r="50" fill="none" stroke="#0284c7" stroke-opacity="0.05" stroke-width="1" />
                                <circle cx="85" cy="15" r="30" fill="none" stroke="#0284c7" stroke-opacity="0.07" stroke-width="1" stroke-dasharray="3 3" />
                            </svg>
                        </div>
                        <div class="cnt-card-icon-wrap cnt-icon-blue">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>
                        <div class="cnt-card-content">
                            <span class="cnt-card-subtitle">PROPOSALS &amp; INQUIRIES</span>
                            <h3 class="cnt-card-title">Send Us an Email</h3>
                            <a href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:support@groveus.com' ?>" class="cnt-card-link">
                                <?= !empty($mail) ? $mail : 'support@groveus.com' ?>
                            </a>
                            <div class="cnt-card-status">
                                <span class="cnt-status-dot cnt-dot-blue"></span>
                                <span>Monitored 24/7 &bull; Fast Reply (&lt; 15m)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Card 3: Office Address -->
                <div class="col-12 col-md-4">
                    <div class="cnt-quick-card cnt-card-address">
                        <!-- Card Corner SVG Decoration -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="85" cy="15" r="50" fill="none" stroke="#d97706" stroke-opacity="0.05" stroke-width="1" />
                                <circle cx="85" cy="15" r="30" fill="none" stroke="#d97706" stroke-opacity="0.07" stroke-width="1" stroke-dasharray="3 3" />
                            </svg>
                        </div>
                        <div class="cnt-card-icon-wrap cnt-icon-amber">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="cnt-card-content">
                            <span class="cnt-card-subtitle">HEADQUARTERS &amp; DELIVERY</span>
                            <h3 class="cnt-card-title">Corporate Office</h3>
                            <p class="cnt-card-address">
                                <?= !empty($address) ? $address : 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai, 421302' ?>
                            </p>
                            <div class="cnt-card-status">
                                <span class="cnt-status-dot cnt-dot-amber"></span>
                                <span>Mumbai &bull; Global Client Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Form & Contact Information Side-by-Side Section -->
    <section class="cnt-main-section">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-stretch">
                
                <!-- =========================================================
                     LEFT COLUMN: CONTACT FORM BOX
                     ========================================================= -->
                <div class="col-12 col-lg-6 d-flex">
                    <div class="cnt-box cnt-form-box w-100">
                        
                        <!-- Form Box SVG Decorative Background -->
                        <div class="cnt-box-svg-bg" aria-hidden="true">
                            <svg width="100%" height="100%" viewBox="0 0 600 600" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="cntFormGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.08" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntFormGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#f43f5e" stop-opacity="0.05" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntLineGradRed" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.25" />
                                        <stop offset="50%" stop-color="#ef4444" stop-opacity="0.1" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <pattern id="cntDotGridRed" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
                                        <circle cx="2" cy="2" r="1.2" fill="#94a3b8" fill-opacity="0.22" />
                                    </pattern>
                                    <radialGradient id="cntFormGlow" cx="95%" cy="5%" r="55%">
                                        <stop offset="0%" stop-color="#fee2e2" stop-opacity="0.45" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                                <!-- Soft top-right radial glow -->
                                <rect width="100%" height="100%" fill="url(#cntFormGlow)" />
                                <!-- Dot Grid Pattern overlay -->
                                <rect width="100%" height="100%" fill="url(#cntDotGridRed)" />
                                <!-- Elegant Geometric Curves & Waves -->
                                <path d="M 380 -50 C 460 70, 500 170, 620 210 L 620 -50 Z" fill="url(#cntFormGrad1)" />
                                <path d="M -50 480 C 100 450, 180 520, 260 650 L -50 650 Z" fill="url(#cntFormGrad2)" />
                                <path d="M 320 -50 C 410 90, 480 200, 620 260" fill="none" stroke="url(#cntLineGradRed)" stroke-width="1.5" stroke-dasharray="5 5" />
                                <path d="M 280 -50 C 380 110, 450 230, 620 300" fill="none" stroke="url(#cntLineGradRed)" stroke-width="1" />
                                <!-- Floating Concentric Rings in Top-Right Corner -->
                                <circle cx="530" cy="75" r="40" fill="none" stroke="#c91a25" stroke-opacity="0.08" stroke-width="1.2" />
                                <circle cx="530" cy="75" r="70" fill="none" stroke="#c91a25" stroke-opacity="0.05" stroke-width="1" stroke-dasharray="6 6" />
                                <!-- Floating Tech Polygon Sparkles -->
                                <polygon points="520,180 538,198 524,220 506,206" fill="none" stroke="#ef4444" stroke-opacity="0.18" stroke-width="1.2" />
                                <circle cx="520" cy="180" r="2.5" fill="#c91a25" fill-opacity="0.3" />
                                <circle cx="538" cy="198" r="2.5" fill="#ef4444" fill-opacity="0.3" />
                            </svg>
                        </div>

                        <!-- Top Header -->
                        <div class="cnt-box-header">
                            <div class="cnt-box-pill-badge">
                                <i class="bi bi-send-fill"></i>
                                <span>REQUEST A PROPOSAL</span>
                            </div>
                            <h2 class="cnt-box-title">Get in Touch with <?= !empty($company3) ? $company3 : 'Groveus' ?></h2>
                            <p class="cnt-box-subtitle">
                                Looking for high-performance Web Development, SEO, or Digital Marketing solutions? Share your project requirements below and our technical experts will get back to you promptly.
                            </p>
                        </div>

                        <!-- Form Body -->
                        <form id="contactform" class="ajax-form cnt-form-body" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                            <div class="row g-2.5 g-sm-3">
                                
                                <!-- Your Name -->
                                <div class="col-12 col-sm-6">
                                    <div class="cnt-field-group form-group">
                                        <label class="cnt-field-label">Your Name <span class="cnt-field-req">*</span></label>
                                        <div class="cnt-field-input-wrap">
                                            <span class="cnt-field-icon"><i class="bi bi-person-fill"></i></span>
                                            <input type="text" name="name" class="cnt-field-input" placeholder="e.g. Rahul Sharma" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-12 col-sm-6">
                                    <div class="cnt-field-group form-group">
                                        <label class="cnt-field-label">Phone Number <span class="cnt-field-req">*</span></label>
                                        <div class="cnt-field-input-wrap">
                                            <span class="cnt-field-icon"><i class="bi bi-telephone-fill"></i></span>
                                            <input type="tel" name="phone" class="cnt-field-input" placeholder="e.g. 9876543210" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="col-12">
                                    <div class="cnt-field-group form-group">
                                        <label class="cnt-field-label">Email Address <span class="cnt-field-req">*</span></label>
                                        <div class="cnt-field-input-wrap">
                                            <span class="cnt-field-icon"><i class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name="email" class="cnt-field-input" placeholder="e.g. rahul@example.com" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Message / Comment -->
                                <div class="col-12">
                                    <div class="cnt-field-group form-group">
                                        <label class="cnt-field-label">Your Message / Comment <span class="cnt-field-req">*</span></label>
                                        <div class="cnt-field-input-wrap align-items-start">
                                            <span class="cnt-field-icon pt-2"><i class="bi bi-chat-left-dots-fill"></i></span>
                                            <textarea name="message" class="cnt-field-input cnt-field-textarea" rows="3" placeholder="Tell us about your project requirements (Web Development, SEO, Digital Marketing, custom software, etc.)..." required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-2">
                                    <button type="submit" class="cnt-hero-submit-btn">
                                        <span>Send Message</span>
                                        <i class="bi bi-send-fill"></i>
                                    </button>
                                </div>

                            </div>

                            <!-- Trust Badges Strip -->
                            <div class="cnt-form-trust-strip">
                                <div class="cnt-trust-pill">
                                    <i class="bi bi-shield-lock-fill text-success"></i>
                                    <span>NDA Protected</span>
                                </div>
                                <div class="cnt-trust-pill">
                                    <i class="bi bi-clock-history text-primary"></i>
                                    <span>15-Min Response</span>
                                </div>
                                <div class="cnt-trust-pill">
                                    <i class="bi bi-check-circle-fill text-danger"></i>
                                    <span>Zero Obligation</span>
                                </div>
                            </div>

                            <!-- AJAX Result Containers -->
                            <div id="contactformresults" class="cnt-ajax-result mt-3"></div>
                            <div id="resultContactFormPage" class="cnt-ajax-result mt-3"></div>
                        </form>

                    </div>
                </div>

                <!-- =========================================================
                     RIGHT COLUMN: CONTACT INFORMATION BOX (PHONE, MAIL, ADDRESS, TIMING)
                     ========================================================= -->
                <div class="col-12 col-lg-6 d-flex">
                    <div class="cnt-box cnt-info-box w-100">
                        
                        <!-- Info Box SVG Decorative Background -->
                        <div class="cnt-box-svg-bg" aria-hidden="true">
                            <svg width="100%" height="100%" viewBox="0 0 600 600" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="cntInfoGrad1" x1="100%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.08" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntLineGradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.25" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <pattern id="cntDotGridBlue" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
                                        <circle cx="2" cy="2" r="1.2" fill="#94a3b8" fill-opacity="0.22" />
                                    </pattern>
                                    <radialGradient id="cntInfoGlow" cx="95%" cy="5%" r="55%">
                                        <stop offset="0%" stop-color="#e0f2fe" stop-opacity="0.4" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                                <!-- Soft top-right radial glow -->
                                <rect width="100%" height="100%" fill="url(#cntInfoGlow)" />
                                <!-- Dot Grid Pattern overlay -->
                                <rect width="100%" height="100%" fill="url(#cntDotGridBlue)" />
                                <!-- Curves & Rings -->
                                <path d="M 380 -50 C 460 70, 500 170, 620 210 L 620 -50 Z" fill="url(#cntInfoGrad1)" />
                                <path d="M 300 -50 C 400 90, 470 210, 620 270" fill="none" stroke="url(#cntLineGradBlue)" stroke-width="1.5" stroke-dasharray="5 5" />
                                <circle cx="530" cy="75" r="40" fill="none" stroke="#0284c7" stroke-opacity="0.08" stroke-width="1.2" />
                                <circle cx="530" cy="75" r="70" fill="none" stroke="#0284c7" stroke-opacity="0.05" stroke-width="1" stroke-dasharray="6 6" />
                                <!-- Connected Network Nodes in Corner -->
                                <line x1="490" y1="160" x2="540" y2="135" stroke="#0284c7" stroke-opacity="0.2" stroke-width="1" />
                                <line x1="540" y1="135" x2="565" y2="175" stroke="#0284c7" stroke-opacity="0.2" stroke-width="1" />
                                <circle cx="490" cy="160" r="3" fill="#0284c7" fill-opacity="0.3" />
                                <circle cx="540" cy="135" r="3.5" fill="#38bdf8" fill-opacity="0.35" />
                                <circle cx="565" cy="175" r="2.5" fill="#0284c7" fill-opacity="0.3" />
                            </svg>
                        </div>

                        <!-- Top Header -->
                        <div class="cnt-box-header">
                            <div class="cnt-box-pill-badge">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>DIRECT HEADQUARTERS</span>
                            </div>
                            <h2 class="cnt-box-title"><?= !empty($company3) ? $company3 : 'Groveus' ?> Contact Desk</h2>
                            <p class="cnt-box-subtitle">
                                Connect directly with our digital strategists and technical team via phone, email, or visit our office during business hours.
                            </p>
                        </div>

                        <!-- Info Items List -->
                        <div class="cnt-info-list">
                            
                            <!-- Item 1: Phone Number -->
                            <div class="cnt-info-item">
                                <div class="cnt-info-icon-wrap cnt-icon-red">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="cnt-info-body">
                                    <span class="cnt-info-label">PHONE NUMBER</span>
                                    <a href="<?= !empty($phonehtml) ? $phonehtml : 'tel:+919093311022' ?>" class="cnt-info-value-link">
                                        <?= !empty($phone) ? $phone : '+91 90933 11022' ?>
                                    </a>
                                    <div class="cnt-info-subtext">
                                        <span class="cnt-status-dot cnt-dot-green"></span>
                                        <span>Direct Support &bull; Mon - Sat, 9 AM - 7 PM</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2: Email Address -->
                            <div class="cnt-info-item">
                                <div class="cnt-info-icon-wrap cnt-icon-blue">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="cnt-info-body">
                                    <span class="cnt-info-label">EMAIL ADDRESS</span>
                                    <a href="<?= !empty($mailhtml) ? $mailhtml : 'mailto:support@groveus.com' ?>" class="cnt-info-value-link">
                                        <?= !empty($mail) ? $mail : 'support@groveus.com' ?>
                                    </a>
                                    <div class="cnt-info-subtext">
                                        <span class="cnt-status-dot cnt-dot-blue"></span>
                                        <span>Monitored 24/7 &bull; Fast Reply (&lt; 15m)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3: Office Address -->
                            <div class="cnt-info-item">
                                <div class="cnt-info-icon-wrap cnt-icon-amber">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="cnt-info-body">
                                    <span class="cnt-info-label">OFFICE ADDRESS</span>
                                    <p class="cnt-info-value-text">
                                        <?= !empty($address) ? $address : 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai, 421302' ?>
                                    </p>
                                    <div class="cnt-info-subtext">
                                        <span class="cnt-status-dot cnt-dot-amber"></span>
                                        <span>Mumbai &bull; Global Client Delivery</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4: Working Timing -->
                            <div class="cnt-info-item">
                                <div class="cnt-info-icon-wrap cnt-icon-green">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div class="cnt-info-body">
                                    <span class="cnt-info-label">WORKING TIMING</span>
                                    <p class="cnt-info-value-text">
                                        Monday – Saturday: 9:00 AM – 7:00 PM (IST)
                                    </p>
                                    <div class="cnt-info-subtext">
                                        <span class="cnt-status-dot cnt-dot-green"></span>
                                        <span>Sunday: Emergency Support Available</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Bottom WhatsApp Direct CTA Button -->
                        <div class="cnt-info-cta-wrap mt-auto pt-3">
                            <a href="<?= !empty($whatsapphtml) ? $whatsapphtml : 'https://api.whatsapp.com/send?phone=919093311022' ?>" target="_blank" rel="noopener" class="cnt-whatsapp-cta-btn">
                                <i class="bi bi-whatsapp"></i>
                                <span>Chat on WhatsApp Now</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. INTERACTIVE MAP & OFFICE LOCATION SECTION
         ========================================================================= -->
    <section class="cnt-map-section">
        <div class="container">
            <div class="cnt-map-frame position-relative overflow-hidden">
                <iframe 
                    src="https://maps.google.com/maps?q=Deeplaxmi%20Rajaram%20Residency,%20Kalher,%20Bhiwandi,%20Maharashtra%20421302&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="380" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Groveus Office Location">
                </iframe>
                
                <div class="cnt-map-floating-card d-none d-md-flex align-items-center gap-3">
                    <div class="cnt-map-pin-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h4 class="cnt-map-card-title mb-1"><?= !empty($company3) ? $company3 : 'Groveus Digital HQ' ?></h4>
                        <p class="cnt-map-card-desc mb-0">Kalher, Bhiwandi, Mumbai &bull; Open Mon-Sat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
