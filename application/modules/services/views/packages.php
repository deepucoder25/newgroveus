<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$companyName = !empty($company3) ? $company3 : 'Groveus Informatics';
$companyPhone = !empty($phone) ? $phone : '+91 90933 11022';
$companyPhoneHtml = !empty($phonehtml) ? $phonehtml : 'tel:+919093311022';
$companyMail = !empty($mail) ? $mail : 'support@groveus.com';
$companyMailHtml = !empty($mailhtml) ? $mailhtml : 'mailto:support@groveus.com';
$companyWhatsapp = !empty($whatsapphtml) ? $whatsapphtml : 'https://wa.me/919093311022';
?>

<!-- =========================================================================
     1. DYNAMIC BREADCRUMBS & HERO HEADER SECTION (SAME DESIGN AS CONTACT PAGE)
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
                <pattern id="pkgBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="pkgBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="pkgBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="pkgBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#pkgBcDotPattern)" />
            <rect width="100%" height="100%" fill="url(#pkgBcGridPattern)" />
            <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#pkgBcSweepRed)" stroke-width="1.8" />
            <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#pkgBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                        'bc_h1' => 'Our Packages &amp; Pricing Plans',
                        'bc_desc' => 'Explore transparent, flexible, and high-ROI packages tailored for your exact growth goals.',
                        'breadcrumbs' => [
                            ['name' => 'Packages']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="cnt-bc-hero-title mb-1">
                    Transparent <span class="cnt-title-highlight">Packages &amp; Pricing</span>
                </h1>

                <!-- Short Concise Subtitle -->
                <p class="cnt-bc-hero-desc">
                    Scalable, flexible, and high-ROI service tiers engineered to deliver maximum value without hidden fees.
                </p>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="cnt-bc-hero-badges">
                    <div class="cnt-bc-badge">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span>No Hidden Fees &amp; Clear Pricing</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-blue">
                        <i class="bi bi-credit-card-2-front-fill"></i>
                        <span>Milestone-Based Flexible Billing</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-amber">
                        <i class="bi bi-lightning-charge-fill"></i>
                        <span>Fast Turnaround &amp; Guaranteed SLA</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. DEDICATED INTERACTIVE PACKAGES SECTION (USES HOME PAGE CA- STYLES)
     ========================================================================= -->
<section class="ca-pricing-section py-5 position-relative" id="interactivePackages">
    
    <div class="container py-2 py-lg-4">
        
        <!-- Section Header -->
        <div class="wl-header text-center mb-4 mb-md-5">
            <div class="wl-badge-pill mb-2">
                <i class="bi bi-patch-check-fill me-1"></i> Transparent Pricing &bull; All-Inclusive Deliverables
            </div>
            <h2 class="wl-main-title text-uppercase">
                Choose the Right Growth Tier for Your Business
            </h2>
            <p class="wl-main-subtitle mx-auto">
                Select your required service category below to view tailored monthly investment tiers, comprehensive deliverable scopes, and clear SLAs with no lock-in contracts.
            </p>
            
            <!-- Category Navigation Buttons (Tab Switcher) -->
            <div class="pkg-nav-wrapper mt-4">
                <div class="pkg-tabs-container shadow-sm" role="tablist">
                    
                    <button type="button" class="pkg-tab-btn active" data-target="pkg-seo" role="tab" aria-selected="true">
                        <span class="pkg-tab-icon"><i class="bi bi-search"></i></span>
                        <span class="pkg-tab-text">SEO Packages</span>
                        <span class="pkg-tab-badge">4 Tiers</span>
                    </button>

                    <button type="button" class="pkg-tab-btn" data-target="pkg-web" role="tab" aria-selected="false">
                        <span class="pkg-tab-icon"><i class="bi bi-laptop"></i></span>
                        <span class="pkg-tab-text">Website Design &amp; Dev</span>
                        <span class="pkg-tab-badge">Popular</span>
                    </button>

                    <button type="button" class="pkg-tab-btn" data-target="pkg-ppc" role="tab" aria-selected="false">
                        <span class="pkg-tab-icon"><i class="bi bi-graph-up-arrow"></i></span>
                        <span class="pkg-tab-text">Digital Marketing &amp; Ads</span>
                        <span class="pkg-tab-badge">High ROI</span>
                    </button>

                    <button type="button" class="pkg-tab-btn" data-target="pkg-maint" role="tab" aria-selected="false">
                        <span class="pkg-tab-icon"><i class="bi bi-shield-check"></i></span>
                        <span class="pkg-tab-text">Maintenance &amp; Support</span>
                        <span class="pkg-tab-badge">24/7 SLA</span>
                    </button>

                </div>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- CATEGORY 1: SEO PACKAGES                                         -->
        <!-- ================================================================= -->
        <div class="pkg-content-pane active" id="pkg-seo">
            <div class="row g-4 justify-content-center align-items-stretch">
                
                <!-- SEO 1: Basic Starter -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-basic h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Starter Entry</span>
                                <div class="ca-tier-svg-icon" title="Starter Tier">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <circle cx="16" cy="16" r="14" fill="#fee2e2" stroke="#fca5a5" stroke-width="1.5"/>
                                        <circle cx="16" cy="16" r="8" stroke="#dc2626" stroke-width="2"/>
                                        <circle cx="16" cy="16" r="3" fill="#dc2626"/>
                                        <path d="M16 2V6M16 26V30M2 16H6M26 16H30" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">1. Basic SEO</h3>
                            <p class="ca-plan-target">Essential local visibility for startups, solo contractors, and local business storefronts.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">350</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">650</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Estimated range &bull; zero lock-in contract</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>1 Target City / Region</strong> Geo-Focus</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>12 Target Search Keywords</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Google Business Profile (GBP) Audit &amp; Setup</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>On-Page Meta Title &amp; Description Tagging</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Technical SEO Audit (Fix 404s, XML Sitemap, Robots)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Core Web Vitals &amp; Mobile Speed Tuning</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>10 Local Citations</strong> &amp; Directory Submissions</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Google Analytics 4 &amp; Search Console Setup</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Monthly Executive PDF Performance Report</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Email Support with 48h Response SLA</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO 2: Startup Growth -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-startup h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Growth Focus</span>
                                <div class="ca-tier-svg-icon" title="Growth Tier">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#eff6ff"/>
                                        <path d="M19 6C19 6 22 9 22 13C22 17 19 20 16 23C13 20 10 17 10 13C10 9 13 6 13 6L16 8L19 6Z" fill="#3b82f6"/>
                                        <circle cx="16" cy="13" r="3" fill="#ffffff"/>
                                        <path d="M11 20L7 22L9 18M21 20L25 22L23 18" stroke="#2563eb" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M16 23V27M14 26L16 29L18 26" stroke="#ea580c" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">2. Startup SEO</h3>
                            <p class="ca-plan-target">Accelerate search keyword rankings, multi-location reach, and inbound lead volume.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">750</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">1,250</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Ideal for expanding mid-size businesses</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Multi-City &amp; Provincial</strong> Geo-Targeting (Up to 3 Areas)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>30 High-Intent Commercial Keywords</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Top 3 Competitor SERP &amp; Gap Analysis</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Schema.org Rich Snippets (LocalBusiness, Org, Breadcrumbs)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>2 SEO Blog Articles</strong> / Service Pages (1,000+ words)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>High-Authority <strong>Directory &amp; Citation Outreach</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Lead Form &amp; Call Event Conversion Tracking</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Advanced Image WebP Conversion &amp; Server Caching</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Bi-Weekly Ranking Movement &amp; Traffic Report</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Priority Support with 24h Response SLA</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO 3: Advanced National (Featured) -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-featured-card ca-card-advanced h-100 d-flex flex-column shadow position-relative">
                        
                        <div class="ca-featured-ribbon">
                            <i class="bi bi-star-fill me-1"></i> Most Popular Choice
                        </div>

                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Competitive Edge</span>
                                <div class="ca-tier-svg-icon" title="Advanced Tier">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fef2f2"/>
                                        <path d="M7 23L9 11L14 16L16 9L18 16L23 11L25 23H7Z" fill="#ea2d2d" stroke="#b91c1c" stroke-width="1.5" stroke-linejoin="round"/>
                                        <circle cx="9" cy="11" r="1.5" fill="#ffffff"/>
                                        <circle cx="16" cy="9" r="1.5" fill="#ffffff"/>
                                        <circle cx="23" cy="11" r="1.5" fill="#ffffff"/>
                                        <rect x="7" y="23" width="18" height="3" rx="1.5" fill="#991b1b"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">3. Advanced SEO</h3>
                            <p class="ca-plan-target">Dominance across nationwide search results with aggressive backlinks and technical CRO.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">1,500</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">2,800</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Highest ROI tier for mid-to-large brands</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Nationwide Search Dominance</strong> (Multi-Metro Targeting)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>60+ Prime Keywords</strong> &amp; Competitor Intercept</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>5 High-DA Editorial Backlinks</strong> &amp; Guest Publications</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>4 In-Depth SEO Long-Form Articles</strong> (1,500+ words)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Conversion Rate Optimization (CRO) &amp; Heatmap Tuning</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Google Map Pack Top-3 Rank Push &amp; Review Strategy</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Full Schema Architecture (FAQ, HowTo, Service, Reviews)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Dedicated Account Strategist</strong> (Direct WhatsApp/Call)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Bi-Weekly Live Strategy Calls &amp; Real-time Dashboard</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Priority 12h Engineering Response SLA</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO 4: Premium Enterprise -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-premium h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Enterprise &amp; White-Label</span>
                                <div class="ca-tier-svg-icon" title="Enterprise Tier">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#f8fafc"/>
                                        <path d="M16 4L6 8V16C6 22 10.5 27 16 29C21.5 27 26 22 26 16V8L16 4Z" fill="#0f172a" stroke="#334155" stroke-width="1.5"/>
                                        <path d="M16 9L18.5 14H23.5L19.5 17.5L21 22.5L16 19.5L11 22.5L12.5 17.5L8.5 14H13.5L16 9Z" fill="#f59e0b"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">4. Enterprise SEO</h3>
                            <p class="ca-plan-target">Turnkey enterprise SEO department with custom portals, white-label reporting &amp; dedicated pods.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">3,000</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">5,500+</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Full turnkey SLA &amp; dedicated engineering team</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Unlimited Search Keywords</strong> &amp; Multi-Brand Conquest</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Turnkey <strong>White-Label Reporting</strong> with Client Portal</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Landing Page Architecture &amp; A/B Split Testing</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>8 Premium Research Whitepapers / Articles</strong> Monthly</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Tier-1 Digital PR &amp; High-Authority Media Outreach</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct <strong>Slack / Microsoft Teams Channel</strong> with Team</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Priority <strong>1-Hour SLA Emergency Response</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Weekly 1-on-1 Executive Growth Strategy Masterminds</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Omnichannel Retargeting &amp; Social Signal Synergy</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Enterprise Invoicing, Master NDA &amp; Tailored SLA</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================================================================= -->
        <!-- CATEGORY 2: WEBSITE DESIGN & DEVELOPMENT                         -->
        <!-- ================================================================= -->
        <div class="pkg-content-pane" id="pkg-web">
            <div class="row g-4 justify-content-center align-items-stretch">
                
                <!-- Web 1: Basic Business -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-basic h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Quick Launch</span>
                                <div class="ca-tier-svg-icon" title="Quick Launch">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fee2e2"/>
                                        <rect x="5" y="8" width="22" height="16" rx="2" stroke="#dc2626" stroke-width="2"/>
                                        <path d="M5 13H27" stroke="#dc2626" stroke-width="2"/>
                                        <circle cx="8" cy="10.5" r="1" fill="#dc2626"/>
                                        <circle cx="11" cy="10.5" r="1" fill="#dc2626"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">1. Starter Website</h3>
                            <p class="ca-plan-target">Fast-loading responsive landing page or 5-page corporate website for local service businesses.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">499</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">899</span>
                                <span class="ca-cad-label">One-Time</span>
                            </div>
                            <div class="ca-tax-note">Turnaround: 5-7 business days &bull; 100% IP ownership</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>5 Custom Responsive Pages</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>100% Mobile &amp; Tablet Responsive Layout</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Contact Lead Capture Form &amp; WhatsApp Integration</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Basic On-Page SEO &amp; Meta Tag Architecture</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Fast Performance (PageSpeed 90+ Score)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>SSL Certificate &amp; Security Configuration</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Google Analytics &amp; Search Console Setup</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Social Media Profiles Integration</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>30-Day Post-Launch Bug Warranty</strong></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web 2: Custom Dynamic Website -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-startup h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Dynamic CMS</span>
                                <div class="ca-tier-svg-icon" title="Dynamic CMS">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#eff6ff"/>
                                        <path d="M10 12L6 16L10 20M22 12L26 16L22 20M18 9L14 23" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">2. Professional CMS</h3>
                            <p class="ca-plan-target">Modern dynamic website with full admin control panel, custom blogs, and lead funnels.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">999</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">1,899</span>
                                <span class="ca-cad-label">One-Time</span>
                            </div>
                            <div class="ca-tax-note">Turnaround: 10-14 business days &bull; Full CMS Admin</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>15 Custom Dynamic Pages</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>User-Friendly Admin Dashboard (WordPress or Custom PHP)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Dynamic Blog, Case Studies &amp; Team Management</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Advanced Schema.org Markup &amp; Technical SEO</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Lead Gen Calculation Forms / Estimators</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Email Newsletter (Mailchimp/Sendgrid) Integration</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Speed Caching &amp; CDN Setup (Cloudflare)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Full Source Code &amp; Database Ownership Transfer</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>60-Day Post-Launch Technical Support</strong></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web 3: E-Commerce Store (Featured) -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-featured-card ca-card-advanced h-100 d-flex flex-column shadow position-relative">
                        
                        <div class="ca-featured-ribbon">
                            <i class="bi bi-cart-check-fill me-1"></i> High Converting E-Com
                        </div>

                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Online Storefront</span>
                                <div class="ca-tier-svg-icon" title="E-Commerce Store">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fef2f2"/>
                                        <path d="M6 8H9L12 21H24L26 11H10" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="13" cy="25" r="2" fill="#dc2626"/>
                                        <circle cx="23" cy="25" r="2" fill="#dc2626"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">3. E-Commerce Store</h3>
                            <p class="ca-plan-target">Turnkey online shop with payment gateway, automated tax, shipping &amp; inventory management.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">1,999</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">3,499</span>
                                <span class="ca-cad-label">One-Time</span>
                            </div>
                            <div class="ca-tax-note">Turnaround: 14-21 business days &bull; Multi-Payment Ready</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Unlimited Products &amp; Categories</strong> Upload</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Payment Gateways (Stripe, Razorpay, PayPal, Apple Pay)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Automated Shipping, GST/HST/Sales Tax Calculation</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Abandoned Cart Recovery &amp; Discount Coupon Engine</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Customer Account Portal, Wishlists &amp; Order Tracking</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Product Schema / Google Merchant Center Feed</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>High-Performance Checkout (&lt;1s Transaction Time)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Complete Store Admin Video Training Session</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>90-Day Post-Launch Warranty &amp; Backups</strong></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web 4: Enterprise Custom Web App -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-premium h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Custom SaaS &amp; Portal</span>
                                <div class="ca-tier-svg-icon" title="Custom SaaS Portal">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#f8fafc"/>
                                        <rect x="6" y="6" width="20" height="20" rx="3" stroke="#0f172a" stroke-width="2"/>
                                        <circle cx="16" cy="16" r="4" fill="#f59e0b"/>
                                        <path d="M16 2V6M16 26V30M2 16H6M26 16H30" stroke="#0f172a" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">4. Custom Web App</h3>
                            <p class="ca-plan-target">Bespoke SaaS platforms, enterprise client portals, ERP integrations, and custom database web apps.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">3,999</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">8,500+</span>
                                <span class="ca-cad-label">Milestone</span>
                            </div>
                            <div class="ca-tax-note">Tailored architecture &bull; 50/30/20 milestone billing</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Architecture (Laravel, Node.js, React, CI3)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Role-Based Access Control (RBAC) &amp; Multi-Tenant Auth</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>RESTful API Development &amp; 3rd-Party Sync</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Bank-Grade Data Encryption &amp; Audit Logging</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Scalable Cloud Infrastructure (AWS / DigitalOcean)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Automated CI/CD Deployment &amp; Staging Environments</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Complete Technical Documentation &amp; API Swagger Specs</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Master NDA, Full IP Assignment &amp; Git Repository Handover</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>6-Month Dedicated Engineering Retainer</strong></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================================================================= -->
        <!-- CATEGORY 3: DIGITAL MARKETING & PPC                              -->
        <!-- ================================================================= -->
        <div class="pkg-content-pane" id="pkg-ppc">
            <div class="row g-4 justify-content-center align-items-stretch">
                
                <!-- PPC 1: Google Ads Starter -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-basic h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Paid Search</span>
                                <div class="ca-tier-svg-icon" title="Google Search Ads">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fee2e2"/>
                                        <circle cx="16" cy="16" r="8" stroke="#dc2626" stroke-width="2"/>
                                        <path d="M22 22L28 28" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">1. Google Ads Starter</h3>
                            <p class="ca-plan-target">Targeted Google Search &amp; Call Ads designed to generate immediate qualified customer enquiries.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">399</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">699</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Management fee &bull; Ad spend managed directly</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Up to <strong>2 Search Ad Campaigns</strong> Setup</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Targeted High-Buyer Intent Keyword Research</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Negative Keyword Matrix (Prevents Wasted Ad Spend)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Ad Copywriting &amp; A/B Split Variant Testing</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Google Tag Manager Conversion Pixel Tracking</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Call Tracking &amp; Lead Form Event Logging</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Weekly Bid Adjustments &amp; Quality Score Tuning</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Monthly ROAS &amp; Cost-Per-Lead (CPL) Report</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PPC 2: Social Media Ads (Meta / Insta) -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-startup h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Social Scale</span>
                                <div class="ca-tier-svg-icon" title="Social Ads">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#eff6ff"/>
                                        <path d="M16 8C11.5 8 8 11.5 8 16C8 20.5 11.5 24 16 24C20.5 24 24 20.5 24 16C24 11.5 20.5 8 16 8Z" stroke="#2563eb" stroke-width="2"/>
                                        <circle cx="16" cy="16" r="3" fill="#2563eb"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">2. Meta &amp; Social Ads</h3>
                            <p class="ca-plan-target">Targeted Facebook &amp; Instagram funnel ads with high-converting creative copies and retargeting.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">699</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">1,199</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Includes ad creatives &amp; audience targeting</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Facebook &amp; Instagram Funnel Campaigns</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>6 Custom Graphic Ad Creatives / Carousels</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Audience Persona Building &amp; Lookalike Segmentation</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Meta Pixel &amp; Server-Side CAPI Setup (iOS 14+ Ready)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Retargeting Funnels for Site Visitors</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Continuous Creative Fatigue Refresh</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Bi-Weekly Performance &amp; Lead Quality Optimization</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct Strategist WhatsApp Access</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PPC 3: Omnichannel PPC (Featured) -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-featured-card ca-card-advanced h-100 d-flex flex-column shadow position-relative">
                        
                        <div class="ca-featured-ribbon">
                            <i class="bi bi-lightning-fill me-1"></i> Maximum Conversions
                        </div>

                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Full Funnel Growth</span>
                                <div class="ca-tier-svg-icon" title="Omnichannel Ads">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fef2f2"/>
                                        <path d="M6 16L12 8H20L26 16L20 24H12L6 16Z" stroke="#dc2626" stroke-width="2"/>
                                        <circle cx="16" cy="16" r="3" fill="#dc2626"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">3. Omnichannel Growth</h3>
                            <p class="ca-plan-target">Synergistic cross-platform strategy uniting Google Ads, Meta Ads, LinkedIn &amp; dynamic retargeting.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">1,499</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">2,499</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Highest performing paid media package</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Google Ads + Meta + LinkedIn Ads</strong> Full Management</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Dedicated Landing Page CRO Design &amp; A/B Testing</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>12 Fresh Ad Creatives &amp; Short Video Hooks</strong> / mo</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Omnichannel Omnipresent Retargeting Sequences</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Multi-Touch Attribution &amp; CRM Sync (Hubspot/Zoho)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Competitor Search conquest &amp; Brand Defense</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Weekly 1-on-1 Strategy &amp; ROAS Optimization Calls</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>24/7 Live Looker Studio Analytics Dashboard</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PPC 4: 360 Enterprise Marketing -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-premium h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Full CMO Suite</span>
                                <div class="ca-tier-svg-icon" title="360 CMO Suite">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#f8fafc"/>
                                        <circle cx="16" cy="16" r="10" stroke="#0f172a" stroke-width="2"/>
                                        <path d="M16 6C20 10 20 22 16 26M16 6C12 10 12 22 16 26M6 16H26" stroke="#0f172a" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">4. Enterprise 360°</h3>
                            <p class="ca-plan-target">Dedicated outsourced growth team managing multi-million ad budgets, PR, and revenue funnels.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">2,999</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">6,000+</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Dedicated fractional CMO &amp; paid media team</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Unlimited Scale: Google, YouTube, Meta, TikTok, LinkedIn</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Turnkey High-Converting Funnels &amp; VSL Architecture</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Video Ad Production &amp; Professional Motion Graphics</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>End-to-End Email &amp; SMS Automation Sequences</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct Slack War-Room with Senior Growth Strategists</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Real-Time Ad Fraud &amp; Click-Bot Prevention Shield</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Volume Retainers, Tailored Master Agreements</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Priority 1-Hour SLA Dedicated Media Buyer Support</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================================================================= -->
        <!-- CATEGORY 4: MAINTENANCE & SUPPORT                                -->
        <!-- ================================================================= -->
        <div class="pkg-content-pane" id="pkg-maint">
            <div class="row g-4 justify-content-center align-items-stretch">
                
                <!-- Maint 1: Basic Care -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-basic h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Security &amp; Backups</span>
                                <div class="ca-tier-svg-icon" title="Security & Backups">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fee2e2"/>
                                        <path d="M16 6L8 10V16C8 21.5 11.5 25.5 16 27C20.5 25.5 24 21.5 24 16V10L16 6Z" fill="#fee2e2" stroke="#dc2626" stroke-width="2"/>
                                        <path d="M12 16L15 19L20 13" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">1. Basic Care</h3>
                            <p class="ca-plan-target">Keep your website secure, backed up in the cloud, and updated with zero downtime.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">99</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">199</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Peace of mind website insurance &bull; No contract</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>24/7 Automated Uptime Monitoring (1-min checks)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Weekly Cloud Remote Backups (Amazon S3)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Core CMS &amp; Plugin Security Patch Updates</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Daily Malware, Spam &amp; Blacklist Scans</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>SSL Certificate Expiry &amp; Renewal Check</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Database Optimization &amp; Spam Comment Cleanups</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>1 Hour Dedicated Developer Small Edits / mo</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Monthly Security &amp; Health PDF Report</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maint 2: Performance & Care -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-startup h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Speed &amp; Protection</span>
                                <div class="ca-tier-svg-icon" title="Speed & Protection">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#eff6ff"/>
                                        <path d="M7 21C7 15.5 11.5 11 17 11C22.5 11 27 15.5 27 21" stroke="#2563eb" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M17 16L21 12" stroke="#2563eb" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">2. Performance Pro</h3>
                            <p class="ca-plan-target">Daily backups, proactive speed tuning, firewall hardening &amp; 3 hours of technical maintenance.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">249</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">449</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Ideal for high-traffic corporate websites</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>Daily Automated Cloud Backups</strong> with 1-Click Restore</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Web Application Firewall (WAF) &amp; DDoS Protection</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Continuous PageSpeed &amp; Core Web Vitals Optimization</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Broken Link Monitoring &amp; Automatic 301 Redirects</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Form Submission &amp; SMTP Email Delivery Audits</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>3 Hours Dedicated Webmaster Edits</strong> / mo</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Priority Email Support (12h SLA)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Free Malware Disinfection Guarantee</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maint 3: E-Com & Business SLA (Featured) -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-featured-card ca-card-advanced h-100 d-flex flex-column shadow position-relative">
                        
                        <div class="ca-featured-ribbon">
                            <i class="bi bi-lightning-charge-fill me-1"></i> Business Critical
                        </div>

                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">24/7 E-Com Guardian</span>
                                <div class="ca-tier-svg-icon" title="24/7 Guardian">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#fef2f2"/>
                                        <path d="M16 5L7 9V16C7 22.5 10.8 26.5 16 28C21.2 26.5 25 22.5 25 16V9L16 5Z" fill="#fee2e2" stroke="#dc2626" stroke-width="2"/>
                                        <path d="M12 16.5L14.8 19.5L20 13.5" stroke="#dc2626" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">3. Business SLA</h3>
                            <p class="ca-plan-target">For mission-critical e-commerce &amp; SaaS requiring real-time disaster recovery &amp; 1-hour response SLA.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">599</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">999</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Emergency hotfix SLA &bull; Staging server testing</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Real-Time Transaction &amp; Checkout Flow Monitoring</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Staging Server Testing for All Updates (Zero Live Bugs)</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Hourly Database Snapshots &amp; Geo-Redundant Backups</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct <strong>1-Hour SLA Emergency Response</strong></span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>8 Hours Dedicated Full-Stack Developer Time</strong> / mo</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Server Resource &amp; Database Query Tuning</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct Phone &amp; WhatsApp Emergency Hotline</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Dedicated Lead Developer Assigned to Your Account</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maint 4: Enterprise Dedicated Pod -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="ca-pricing-card ca-card-premium h-100 d-flex flex-column shadow-sm">
                        <div class="ca-card-top">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-plan-tier">Dedicated Team Pod</span>
                                <div class="ca-tier-svg-icon" title="Dedicated Pod">
                                    <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect width="32" height="32" rx="8" fill="#f8fafc"/>
                                        <circle cx="12" cy="12" r="4" stroke="#0f172a" stroke-width="2"/>
                                        <circle cx="20" cy="12" r="4" stroke="#0f172a" stroke-width="2"/>
                                        <path d="M6 24C6 20.5 9 18 12 18C15 18 18 20.5 18 24" stroke="#0f172a" stroke-width="2"/>
                                        <path d="M18 18C21 18 24 20.5 24 24" stroke="#0f172a" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ca-plan-name">4. Dedicated Pod</h3>
                            <p class="ca-plan-target">Dedicated full-time engineering squad (frontend, backend, QA &amp; DevOps) embedded in your team.</p>
                            
                            <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                                <span class="ca-currency">$</span>
                                <span class="ca-amount">1,499</span>
                                <span class="ca-range-sep">&ndash;</span>
                                <span class="ca-amount">3,500+</span>
                                <span class="ca-cad-label">USD / CAD</span>
                                <span class="ca-period">/ mo</span>
                            </div>
                            <div class="ca-tax-note">Full retainer hours &bull; Enterprise SLA terms</div>
                        </div>

                        <div class="ca-card-divider"></div>

                        <div class="ca-card-body flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                                <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                            </div>
                            <div class="ca-features-scroll">
                                <ul class="ca-feature-list list-unstyled m-0">
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span><strong>20+ Dedicated Developer Retainer Hours</strong> / mo</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>CI/CD Pipeline Maintenance &amp; Cloud DevOps Support</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Direct Integration into Jira, GitHub, Slack or Teams</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Continuous Feature Releases &amp; Code Refactoring</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>24/7 Security Operations &amp; Pen-Testing Reviews</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Executive Monthly Technical Roadmap &amp; Arch Review</span></li>
                                    <li class="ca-feature-item d-flex align-items-start"><i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i><span>Custom Contract Terms, NDA &amp; Volume Pricing</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ca-card-footer mt-auto pt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn ca-btn-enquiry w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-pencil-square me-1"></i> Enquiry
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?= $companyWhatsapp ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100">
                                        <i class="bi bi-whatsapp me-1"></i> Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Trust Badges & Business Guarantees (Using Home Page ca- Trust Classes) -->
        <div class="ca-guarantees-wrapper mt-4 mt-lg-5">
            <div class="row g-2 g-md-3">
                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">Tax Compliant</span>
                            <span class="ca-trust-desc d-block">Full GST / Tax Invoiced</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">Global Timezones</span>
                            <span class="ca-trust-desc d-block">EST / IST / GMT Live Support</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-file-earmark-lock"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">100% NDA Protected</span>
                            <span class="ca-trust-desc d-block">Strict Data Privacy</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">Zero Lock-In</span>
                            <span class="ca-trust-desc d-block">Cancel Anytime Freedom</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- =========================================================================
     INTERACTIVE JAVASCRIPT TAB SWITCHER (PAGE-SCOPED)
     ========================================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var tabBtns = document.querySelectorAll('.pkg-tab-btn');
    var tabPanes = document.querySelectorAll('.pkg-content-pane');

    function switchTab(targetId, triggerElement) {
        // Remove active state from all buttons
        tabBtns.forEach(function(btn) {
            if (btn.getAttribute('data-target') === targetId) {
                btn.classList.add('active');
                btn.setAttribute('aria-selected', 'true');
                if (triggerElement && typeof triggerElement.scrollIntoView === 'function') {
                    triggerElement.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                }
            } else {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            }
        });

        // Hide all panes and show target
        tabPanes.forEach(function(pane) {
            if (pane.id === targetId) {
                pane.classList.add('active');
            } else {
                pane.classList.remove('active');
            }
        });
    }

    tabBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var target = this.getAttribute('data-target');
            if (target) {
                switchTab(target, this);
            }
        });
    });

    // Check URL Hash on Load (e.g. #seo, #web, #ppc, #maint)
    var hash = window.location.hash;
    if (hash) {
        var cleanHash = hash.replace('#', '').toLowerCase();
        var matchTarget = 'pkg-' + cleanHash;
        var matchedBtn = document.querySelector('.pkg-tab-btn[data-target="' + matchTarget + '"]');
        if (document.getElementById(matchTarget)) {
            switchTab(matchTarget, matchedBtn);
        }
    }
});
</script>
