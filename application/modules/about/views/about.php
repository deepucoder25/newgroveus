<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     1. DYNAMIC BREADCRUMBS & HERO HEADER SECTION
     ========================================================================= -->
<section class="cnt-breadcrumb-hero position-relative overflow-hidden">
    <!-- Breadcrumb Ambient SVG Background Canvas Layer -->
    <div class="cnt-bc-ambient-bg" aria-hidden="true">
        <!-- Floating Glow Orbs -->
        <div class="cnt-bc-orb cnt-bc-orb-left"></div>
        <div class="cnt-bc-orb cnt-bc-orb-right"></div>
        
        <!-- Tech SVG Vector Canvas -->
        <svg class="position-absolute w-100 h-100" style="top:0; left:0; pointer-events:none;" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="abtBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="abtBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="abtBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="abtBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#abtBcDotPattern)" />
            <rect width="100%" height="100%" fill="url(#abtBcGridPattern)" />
            <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#abtBcSweepRed)" stroke-width="1.8" />
            <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#abtBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
            <!-- Corner Crosshair Accent Markers -->
            <g stroke="#94a3b8" stroke-width="1" stroke-opacity="0.4">
                <path d="M 25,20 L 25,38 M 25,20 L 43,20" />
                <circle cx="25" cy="20" r="2.5" fill="#c91a25" fill-opacity="0.5" stroke="none" />
                <path d="M calc(100% - 25px),20 L calc(100% - 25px),38 M calc(100% - 25px),20 L calc(100% - 43px),20" />
            </g>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-4">
            
            <div class="col-12 col-lg-8">
                <!-- Breadcrumb Capsule Pill -->
                <div class="cnt-bc-pill-wrap mb-3">
                    <?php $this->load->view('about/dynamic_breadcrumbs', [
                        'bc_h1' => 'About Us - ' . $company3,
                        'bc_desc' => 'Discover our legacy, dedicated team of engineers, mission, and vision for digital transformation.',
                        'breadcrumbs' => [
                            ['name' => 'About Us']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="cnt-bc-hero-title mb-2">
                    Engineering Digital Growth &amp; <span class="cnt-title-highlight">Innovation</span>
                </h1>

                <!-- Subtitle -->
                <p class="cnt-bc-hero-desc">
                    Discover our journey, elite engineering culture, core values, and relentless commitment to building scalable software, high-ranking search engines, and sustainable client growth.
                </p>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="cnt-bc-hero-badges">
                    <div class="cnt-bc-badge">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span><?= !empty($experience) ? rtrim($experience, '+') . '+' : '12+' ?> Years Industry Legacy</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-blue">
                        <i class="bi bi-award-fill"></i>
                        <span>ISO Certified &amp; Trusted Partner</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-amber">
                        <i class="bi bi-people-fill"></i>
                        <span>5,000+ Satisfied Clients</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. SECTION 1: WHO WE ARE (COL-6 IMAGE STYLE 1: DUAL OVERLAPPING COLLAGE + COL-6 CONTENT)
     ========================================================================= -->
<section class="abt-section">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Visual Style 1 (Multi-Layered Overlapping Collage with Floating Badges) -->
            <div class="col-12 col-lg-5">
                <div class="abt-visual-wrap-1">
                    
                    <div class="abt-visual-aura-1"></div>
                    
                    <div class="abt-collage-container-1" id="abtCollage1">
                        <!-- Floating Top Pill -->
                        <div class="abt-float-pill-top">
                            <span class="abt-pulse-dot"></span>
                            <span><?= !empty($experience) ? rtrim($experience, '+') . '+' : '12+' ?> Years Proven Excellence</span>
                        </div>

                        <!-- Main Primary Photo Box -->
                        <div class="abt-main-img-box-1">
                            <img src="<?= base_url('assets/images/about/about-showcase.webp') ?>" alt="<?= $company3 ?> Team Showcase" class="abt-main-img-1" loading="lazy" onerror="this.onerror=null; this.src='<?= base_url('assets/images/about/about-presentation.jpg') ?>';">
                        </div>

                        <!-- Secondary Overlapping Floating Thumbnail Photo -->
                        <div class="abt-sub-img-box-1">
                            <img src="<?= base_url('assets/images/services_modules/web_development.webp') ?>" alt="Custom Development" class="abt-sub-img-1" loading="lazy">
                        </div>

                        <!-- Floating Bottom Growth Stats Card -->
                        <div class="abt-float-card-bottom">
                            <div class="abt-float-card-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div>
                                <div class="abt-float-card-val">+420% ROI</div>
                                <div class="abt-float-card-lbl">Average Organic &amp; Sales Lift</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Content Column -->
            <div class="col-12 col-lg-7">
                <div class="abt-content-block ps-lg-3">
                    
                    <span class="abt-section-badge">
                        <i class="bi bi-compass-fill me-1"></i> Who We Are &amp; Our Journey
                    </span>

                    <h2 class="abt-section-title">
                        Pioneering Digital Transformation with <span class="abt-highlight-red">Engineering Rigor</span>
                    </h2>

                    <p class="abt-section-lead">
                        Founded with a clear mission to redefine how modern businesses harness the power of technology, <strong><?= $company3 ?></strong> has evolved into a premier full-service digital agency and software engineering firm.
                    </p>

                    <p class="text-secondary mb-4" style="line-height: 1.7; font-size: 14.5px;">
                        We specialize in custom web application development, data-driven SEO architectures, cloud infrastructure scaling, and high-conversion performance marketing. Our multidisciplinary team combines strategic consulting with hands-on technical execution to help enterprises outpace competition.
                    </p>

                    <!-- Feature Checklist -->
                    <ul class="abt-feature-list">
                        <li class="abt-feature-item">
                            <div class="abt-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h4 class="abt-feature-title">Custom-Engineered Software</h4>
                                <p class="abt-feature-desc">Zero cookie-cutter templates. Every system is purpose-built for speed, security, and effortless scaling.</p>
                            </div>
                        </li>
                        <li class="abt-feature-item">
                            <div class="abt-feature-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div>
                                <h4 class="abt-feature-title">Data-Backed Growth Strategies</h4>
                                <p class="abt-feature-desc">From commercial search keywords to paid funnels, every move is backed by real-time analytics.</p>
                            </div>
                        </li>
                        <li class="abt-feature-item">
                            <div class="abt-feature-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <h4 class="abt-feature-title">Dedicated 24/7 Technical SLA</h4>
                                <p class="abt-feature-desc">Continuous monitoring, proactive performance patches, and rapid incident response teams.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="<?= site_url('services') ?>" class="abt-cta-btn-primary">
                            <i class="bi bi-grid-fill"></i> Explore Our Services
                        </a>
                        <a href="<?= site_url('packages') ?>" class="btn btn-outline-dark px-4 py-3 rounded-3 fw-bold">
                            <i class="bi bi-tags-fill me-1"></i> View Pricing Plans
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     3. SECTION 2: MISSION & VISION (COL-6 CONTENT + COL-6 IMAGE STYLE 2: 3D ISOMETRIC DUAL PHOTO)
     ========================================================================= -->
<section class="abt-section abt-section-light">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Content Column -->
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <div class="abt-content-block pe-lg-3">
                    
                    <span class="abt-section-badge abt-section-badge-blue">
                        <i class="bi bi-eye-fill me-1"></i> Purpose &amp; Strategic Ambition
                    </span>

                    <h2 class="abt-section-title">
                        Our Mission &amp; Strategic Vision for <span class="abt-highlight-blue">Global Impact</span>
                    </h2>

                    <p class="abt-section-lead">
                        We believe that software should be an asset that accelerates revenue, not technical debt that slows operations down.
                    </p>

                    <!-- Mission vs Vision Cards -->
                    <div class="row g-3 mb-4">
                        
                        <div class="col-12">
                            <div class="p-3 bg-white border rounded-3 shadow-sm">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-danger p-2"><i class="bi bi-rocket-takeoff-fill fs-6"></i></span>
                                    <h4 class="fs-6 fw-bold text-dark mb-0">Our Mission</h4>
                                </div>
                                <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                    To empower ambitious enterprises with high-velocity digital architectures, resilient cloud infrastructures, and high-converting search strategies that maximize commercial ROI and eliminate operational friction.
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="p-3 bg-white border rounded-3 shadow-sm">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary p-2"><i class="bi bi-globe-americas fs-6"></i></span>
                                    <h4 class="fs-6 fw-bold text-dark mb-0">Our Strategic Vision</h4>
                                </div>
                                <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                    To be universally recognized as the standard for digital engineering excellence, trusted by global organizations to deliver secure, ethical, and high-performance digital transformations.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Right Column: Visual Style 2 (3D Isometric Dual-Card Photo Composition) -->
            <div class="col-12 col-lg-5 order-1 order-lg-2">
                <div class="abt-visual-wrap-2">
                    
                    <div class="abt-iso-photo-container" id="abtIsoContainer2">
                        
                        <!-- Back Layer: Tilted Landscape Photo Card -->
                        <div class="abt-iso-photo-back abt-clickable-card" title="Click to bring to front">
                            <span class="abt-click-hint"><i class="bi bi-hand-index-thumb me-1"></i>Click to expand</span>
                            <img src="<?= base_url('assets/images/services_modules/international_seo.webp') ?>" alt="International SEO & Architecture" class="abt-iso-back-img" loading="lazy">
                        </div>

                        <!-- Front Layer: Primary Presentation Photo Card -->
                        <div class="abt-iso-photo-front abt-clickable-card abt-is-upper" title="Click to bring to front">
                            <span class="abt-click-hint"><i class="bi bi-check2 me-1"></i>Active</span>
                            <img src="<?= base_url('assets/images/about/about-presentation.jpg') ?>" alt="Groveus Strategy & Presentation" class="abt-iso-front-img" loading="lazy">
                        </div>

                        <!-- Overlapping Center Emblem Badge -->
                        <div class="abt-iso-badge-center">
                            <i class="bi bi-patch-check-fill text-primary fs-5"></i>
                            <span>ISO Certified &amp; Global Standards</span>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     4. SECTION 3: ENGINEERING ECOSYSTEM (COL-6 IMAGE STYLE 3: SPLIT DUAL-PHOTO + COL-6 CONTENT)
     ========================================================================= -->
<section class="abt-section">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Visual Style 3 (Dual-Photo Geometric Split & Surrounding Tech Halos) -->
            <div class="col-12 col-lg-5">
                <div class="abt-visual-wrap-3">
                    
                    <!-- Floating Halo Pill Top -->
                    <div class="abt-halo-pill-wrap">
                        <span class="badge bg-danger shadow-sm px-3 py-2 fw-bold" style="font-size: 11px;">
                            <i class="bi bi-lightning-fill me-1"></i> 99.98% High Concurrency SLA
                        </span>
                    </div>

                    <div class="abt-split-photo-container" id="abtSplitContainer3">
                        
                        <!-- Left Big Photo Card -->
                        <div class="abt-split-card-left">
                            <img src="<?= base_url('assets/images/services_modules/ecommerce_seo.webp') ?>" alt="E-Commerce Architecture" class="abt-split-img" loading="lazy">
                            <div class="abt-split-label">
                                <i class="bi bi-cart3 text-danger me-1"></i> E-Commerce Speed
                            </div>
                        </div>

                        <!-- Right Column Sub Photo Cards -->
                        <div class="abt-split-card-right">
                            <div class="abt-split-sub-card">
                                <img src="<?= base_url('assets/images/services_modules/content_marketing.webp') ?>" alt="Content Authority" class="abt-split-img" loading="lazy">
                                <div class="abt-split-label">
                                    <i class="bi bi-journal-code text-primary me-1"></i> Search Authority
                                </div>
                            </div>
                            <div class="abt-split-sub-card">
                                <img src="<?= base_url('assets/images/services_modules/ppc_management.webp') ?>" alt="PPC Ads Management" class="abt-split-img" loading="lazy">
                                <div class="abt-split-label">
                                    <i class="bi bi-graph-up text-success me-1"></i> High-ROI Funnels
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Surrounding Technology Badges Halo -->
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-white text-dark border shadow-sm px-3 py-2"><i class="bi bi-filetype-php text-primary me-1"></i> PHP 8.x MVC</span>
                        <span class="badge bg-white text-dark border shadow-sm px-3 py-2"><i class="bi bi-hdd-network text-warning me-1"></i> Redis Cache</span>
                        <span class="badge bg-white text-dark border shadow-sm px-3 py-2"><i class="bi bi-cloud-arrow-up text-info me-1"></i> AWS Cloud</span>
                        <span class="badge bg-white text-dark border shadow-sm px-3 py-2"><i class="bi bi-database text-danger me-1"></i> MySQL 8</span>
                    </div>

                </div>
            </div>

            <!-- Right Column: Content Column -->
            <div class="col-12 col-lg-7">
                <div class="abt-content-block ps-lg-3">
                    
                    <span class="abt-section-badge abt-section-badge-purple">
                        <i class="bi bi-gear-wide-connected me-1"></i> Engineering Philosophy
                    </span>

                    <h2 class="abt-section-title">
                        Robust Engineering on <span class="abt-highlight-red">Open, Scalable Standards</span>
                    </h2>

                    <p class="abt-section-lead">
                        We build technology that withstands heavy enterprise loads, scales effortlessly as traffic surges, and maintains strict data governance.
                    </p>

                    <p class="text-secondary mb-4" style="line-height: 1.7; font-size: 14.5px;">
                        Our engineering principles prioritize speed, code maintainability, and search visibility. By eliminating unnecessary bloat and adhering to strict MVC patterns, our applications deliver sub-second performance across mobile and desktop devices.
                    </p>

                    <!-- Key Checkpoints -->
                    <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-semibold text-dark small">Strict Code Reviews &amp; QA</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-semibold text-dark small">Automated Crawl Budget Testing</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-semibold text-dark small">Zero Third-Party Data Leaks</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-semibold text-dark small">99.9% Production SLA Uptime</span>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quoteModal" class="abt-cta-btn-primary">
                        <i class="bi bi-chat-quote-fill"></i> Request a Technical Consultation
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     5. SECTION 4: WHY CHOOSE US (COL-6 CONTENT + COL-6 IMAGE STYLE 4: ARCHED ARCHITECTURAL FRAME)
     ========================================================================= -->
<section class="abt-section abt-section-light">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Content Column -->
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <div class="abt-content-block pe-lg-3">
                    
                    <span class="abt-section-badge abt-section-badge-green">
                        <i class="bi bi-award-fill me-1"></i> The Groveus Advantage
                    </span>

                    <h2 class="abt-section-title">
                        Why Global Leaders <span class="abt-highlight-red">Choose to Partner</span> with Us
                    </h2>

                    <p class="abt-section-lead">
                        We act as an integrated extension of your engineering and growth team, taking full ownership of project architecture, deadlines, and business outcomes.
                    </p>

                    <div class="row g-3 mb-4">
                        
                        <div class="col-12 col-sm-6">
                            <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                <i class="bi bi-people-fill text-danger fs-4 mb-2 d-block"></i>
                                <h4 class="fs-6 fw-bold text-dark mb-1">100% In-House Team</h4>
                                <p class="text-secondary small mb-0">Direct collaboration with senior engineers, designers, and SEO experts.</p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                <i class="bi bi-graph-up-arrow text-primary fs-4 mb-2 d-block"></i>
                                <h4 class="fs-6 fw-bold text-dark mb-1">Transparent ROI</h4>
                                <p class="text-secondary small mb-0">Clear monthly deliverables, keyword movements, and traffic conversions.</p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                <i class="bi bi-lock-fill text-success fs-4 mb-2 d-block"></i>
                                <h4 class="fs-6 fw-bold text-dark mb-1">Strict Data Privacy</h4>
                                <p class="text-secondary small mb-0">GDPR, DPDP Act 2023, SSL encryption, and non-disclosure compliance.</p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                <i class="bi bi-speedometer text-warning fs-4 mb-2 d-block"></i>
                                <h4 class="fs-6 fw-bold text-dark mb-1">Rapid Agile Sprints</h4>
                                <p class="text-secondary small mb-0">Bi-weekly sprints, staged staging servers, and rapid deployment cycles.</p>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= site_url('contact-us') ?>" class="abt-cta-btn-primary">
                            <i class="bi bi-telephone-outbound-fill"></i> Get in Touch With Our Team
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Column: Visual Style 4 (Architectural Arched Frame with 5-Star Social Proof) -->
            <div class="col-12 col-lg-5 order-1 order-lg-2">
                <div class="abt-visual-wrap-4">
                    
                    <div class="abt-arch-ring-bg"></div>
                    <div class="abt-arch-ring-bg-2"></div>

                    <div class="abt-arch-container" id="abtArchContainer4">
                        
                        <!-- Floating Top-Right 5-Star Rating Card -->
                        <div class="abt-arch-rating-card">
                            <div class="abt-stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="fw-bold text-dark" style="font-size: 13.5px;">5,000+ Satisfied Clients</div>
                            <div class="text-muted" style="font-size: 11px;">Worldwide verified delivery</div>
                        </div>

                        <!-- Main Arched Photo Container -->
                        <div class="abt-arch-img-box">
                            <img src="<?= base_url('assets/images/services_modules/social_media.webp') ?>" alt="Social Proof & Global Partnerships" class="abt-arch-img" loading="lazy" onerror="this.onerror=null; this.src='<?= base_url('assets/images/about/about-showcase.webp') ?>';">
                        </div>

                        <!-- Floating Bottom-Left Engineer Guarantee Pill -->
                        <div class="abt-arch-engineer-pill">
                            <i class="bi bi-shield-check text-success fs-5"></i>
                            <span>100% In-House Senior Engineers</span>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     6. EXECUTIVE MILESTONE STATS COUNTER BAR
     ========================================================================= -->
<section class="abt-stats-wrap">
    <div class="container">
        <div class="row g-4 text-center">
            
            <div class="col-6 col-lg-3">
                <div class="abt-stat-card">
                    <div class="abt-stat-number"><?= !empty($experience) ? rtrim($experience, '+') . '+' : '12+' ?></div>
                    <div class="abt-stat-label">Years Experience</div>
                    <p class="abt-stat-desc">Proven industry track record</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="abt-stat-card">
                    <div class="abt-stat-number">5,000+</div>
                    <div class="abt-stat-label">Projects Completed</div>
                    <p class="abt-stat-desc">Across 30+ global industries</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="abt-stat-card">
                    <div class="abt-stat-number">98.4%</div>
                    <div class="abt-stat-label">Client Retention</div>
                    <p class="abt-stat-desc">Long-term strategic relationships</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="abt-stat-card">
                    <div class="abt-stat-number">50+</div>
                    <div class="abt-stat-label">Expert Engineers</div>
                    <p class="abt-stat-desc">Certified full-stack specialists</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     7. OUR CORE VALUES & CULTURAL MANIFESTO (6-CARD GRID)
     ========================================================================= -->
<section class="abt-section">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="abt-section-badge">
                <i class="bi bi-heart-pulse-fill me-1"></i> Our Core Values
            </span>
            <h2 class="abt-section-title">
                The Principles That <span class="abt-highlight-red">Drive Everything We Build</span>
            </h2>
            <p class="abt-section-lead">
                Our culture is grounded in engineering discipline, relentless curiosity, and genuine care for our clients' long-term business success.
            </p>
        </div>

        <div class="abt-values-grid">
            
            <!-- Value 1 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-red">
                    <i class="bi bi-lightbulb-fill"></i>
                </div>
                <h3 class="abt-value-title">Relentless Innovation</h3>
                <p class="abt-value-text">
                    We constantly push technical boundaries, adopting state-of-the-art tools and methodologies to give our clients an unfair competitive advantage.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-blue">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="abt-value-title">Absolute Integrity</h3>
                <p class="abt-value-text">
                    We believe in radical transparency, accurate timelines, clear communication, and delivering exactly what we promise without hidden surprises.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-green">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <h3 class="abt-value-title">Speed &amp; Performance</h3>
                <p class="abt-value-text">
                    Every millisecond counts. We optimize database queries, code execution, and assets to ensure instant user experiences across all devices.
                </p>
            </div>

            <!-- Value 4 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-purple">
                    <i class="bi bi-code-square"></i>
                </div>
                <h3 class="abt-value-title">Clean, Scalable Code</h3>
                <p class="abt-value-text">
                    We write modular, well-documented code that is easy to maintain, test, and scale as your organization grows to millions of users.
                </p>
            </div>

            <!-- Value 5 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-amber">
                    <i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <h3 class="abt-value-title">Data-Driven Execution</h3>
                <p class="abt-value-text">
                    We do not rely on guesswork. Every feature, search strategy, and ad campaign is tested, measured, and optimized against quantifiable KPIs.
                </p>
            </div>

            <!-- Value 6 -->
            <div class="abt-value-card">
                <div class="abt-value-icon-box abt-val-cyan">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="abt-value-title">Client-First Partnership</h3>
                <p class="abt-value-text">
                    Your success is our success. We invest in deeply understanding your industry nuances to build digital solutions that truly move the needle.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     8. CLIENT-SIDE INTERACTIVITY SCRIPT (CLICK-TO-BRING-TO-FRONT)
     ========================================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // Function to handle click-to-bring-to-front within any container
    function setupContainerStacking(containerSelector, cardSelector) {
        const containers = document.querySelectorAll(containerSelector);
        containers.forEach(container => {
            const cards = container.querySelectorAll(cardSelector);
            cards.forEach(card => {
                card.addEventListener('click', function(e) {
                    // Remove upper from siblings inside this container
                    cards.forEach(c => {
                        c.classList.remove('abt-is-upper');
                        const hint = c.querySelector('.abt-click-hint');
                        if (hint) hint.innerHTML = '<i class="bi bi-hand-index-thumb me-1"></i>Click to expand';
                    });
                    
                    // Add upper to clicked card
                    this.classList.add('abt-is-upper');
                    const clickedHint = this.querySelector('.abt-click-hint');
                    if (clickedHint) clickedHint.innerHTML = '<i class="bi bi-check2 me-1"></i>Active';
                });
            });
        });
    }

    // Initialize ONLY for Section 2 (Isometric Dual Photo Cards)
    setupContainerStacking('#abtIsoContainer2', '.abt-clickable-card');

});
</script>