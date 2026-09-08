<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Services Hero Slider Section (Matched Exactly to Design Mockup) -->
<section class="services-hero-slider position-relative overflow-hidden" itemscope itemtype="https://schema.org/WPHeader">
    <div class="container position-relative z-2">
        <div class="row align-items-center services-hero-row gy-5">
            
            <!-- Left Column: Content -->
            <div class="col-12 col-lg-6 services-hero-left pe-lg-4">
                <div class="mb-2">
                    <?php $this->load->view('about/dynamic_breadcrumbs', [
                        'breadcrumbs' => [
                            ['name' => 'Our Services']
                        ]
                    ]); ?>
                </div>
                <h1 class="services-hero-title mb-3" itemprop="name">
                    Digital Solutions<br>
                    That Drive Real<br>
                    <span class="text-danger-highlight">Business Growth</span>
                </h1>
                <p class="services-hero-desc mb-4" itemprop="description">
                    From SEO to Web Design, we provide result-driven digital services to help your brand grow online.
                </p>
                <div class="services-hero-cta">
                    <a href="<?= site_url('contact-us') ?>" class="btn-services-cta">
                        <span>Discuss Your Project</span>
                        <svg class="cta-arrow-icon" viewBox="0 0 20 20" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="10" x2="17" y2="10"></line>
                            <polyline points="11 4 17 10 11 16"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column: Pixel-Perfect SVG Artwork Stage -->
            <div class="col-12 col-lg-6 services-hero-right">
                <div class="services-mockup-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 777 442" fill="none" class="services-hero-svg" preserveAspectRatio="xMidYMid meet">
                      <defs>
                        <!-- Background -->
                        <linearGradient id="backgroundGrad" x1="0" y1="0" x2="777" y2="442" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FFFFFF"/>
                          <stop offset="1" stop-color="#FAFAFA"/>
                        </linearGradient>

                        <!-- Screen -->
                        <linearGradient id="screenGrad" x1="220" y1="95" x2="590" y2="390" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FFFFFF"/>
                          <stop offset="1" stop-color="#F7F7F7"/>
                        </linearGradient>

                        <!-- Red -->
                        <linearGradient id="redGrad" x1="440" y1="150" x2="560" y2="290" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F21D25"/>
                          <stop offset="1" stop-color="#D90008"/>
                        </linearGradient>

                        <!-- Card -->
                        <linearGradient id="cardGrad" x1="120" y1="60" x2="220" y2="190" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FFFFFF"/>
                          <stop offset="1" stop-color="#FCFCFC"/>
                        </linearGradient>

                        <!-- Laptop shadow -->
                        <filter id="laptopShadowFilter" x="-30%" y="-30%" width="160%" height="170%" color-interpolation-filters="sRGB">
                          <feDropShadow dx="0" dy="7" stdDeviation="8" flood-color="#000000" flood-opacity=".18"/>
                        </filter>

                        <!-- Card shadow -->
                        <filter id="cardShadowFilter" x="-40%" y="-40%" width="180%" height="190%" color-interpolation-filters="sRGB">
                          <feDropShadow dx="0" dy="8" stdDeviation="10" flood-color="#000000" flood-opacity=".12"/>
                        </filter>

                        <!-- Ground shadow -->
                        <filter id="groundBlurFilter" x="-30%" y="-300%" width="160%" height="700%">
                          <feGaussianBlur stdDeviation="9"/>
                        </filter>

                        <!-- Screen clip -->
                        <clipPath id="screenClipPath">
                          <path d="M237 108 L604 49 L578 378 L209 378 Z"/>
                        </clipPath>

                        <!-- Soft Blush/Light Red Circular Backdrop Gradient -->
                        <radialGradient id="circleBgGrad" cx="40%" cy="44%" r="58%">
                          <stop offset="0%" stop-color="#FCD5D2" stop-opacity="0.95"/>
                          <stop offset="30%" stop-color="#FDE4E1" stop-opacity="0.85"/>
                          <stop offset="65%" stop-color="#FEF1F0" stop-opacity="0.6"/>
                          <stop offset="90%" stop-color="#FFF8F8" stop-opacity="0.25"/>
                          <stop offset="100%" stop-color="#FFFFFF" stop-opacity="0"/>
                        </radialGradient>
                      </defs>

                      <!-- Soft circular background (Distinct Light Red / Rose Glow) -->
                      <circle cx="391" cy="220" r="268" fill="url(#circleBgGrad)"/>
                      <circle cx="391" cy="220" r="268" stroke="#FCA5A5" stroke-width="1.8" opacity=".75"/>

                      <!-- Smooth red outer arc 1 -->
                      <path d="M95 65 C32 145 50 305 138 375" stroke="#F87171" stroke-width="1.8" opacity=".7"/>

                      <!-- Smooth red outer arc 2 -->
                      <path d="M82 88 C28 172 55 315 130 365" stroke="#EF4444" stroke-width="1.3" opacity=".48"/>

                      <!-- Bottom right subtle accent arc -->
                      <path d="M610 365 C665 395 725 415 777 425" stroke="#F87171" stroke-width="1.6" opacity=".55"/>

                      <!-- GROUND SHADOW -->
                      <ellipse cx="390" cy="417" rx="286" ry="12" fill="#000000" opacity=".16" filter="url(#groundBlurFilter)"/>

                      <!-- LAPTOP SCREEN OUTER BODY -->
                      <path d="M225 96 L608 34 Q621 32 621 46 L592 390 Q591 400 580 401 L190 401 Q185 400 188 392 Z" fill="#050505" filter="url(#laptopShadowFilter)"/>

                      <!-- SCREEN -->
                      <path d="M237 108 L604 49 L578 378 L209 378 Z" fill="url(#screenGrad)"/>

                      <!-- WEBSITE INSIDE SCREEN -->
                      <g clip-path="url(#screenClipPath)">
                        <!-- Browser top bar parallel to top bezel -->
                        <path d="M237 108 L604 49 L598 84 L231 143 Z" fill="#FBFBFB"/>
                        <line x1="231" y1="143" x2="598" y2="84" stroke="#F0F0F0" stroke-width="1"/>

                        <!-- Browser control dots (parallel to bezel) -->
                        <g transform="translate(258, 126) rotate(-9.13)">
                          <circle cx="0" cy="0" r="3.8" fill="#EF343A"/>
                          <circle cx="12" cy="0" r="2.8" fill="#E2E2E2"/>
                          <circle cx="23" cy="0" r="2.8" fill="#E2E2E2"/>
                        </g>

                        <!-- Address bar (rotated to follow exact screen perspective) -->
                        <g transform="translate(306, 118) rotate(-9.13)">
                          <rect x="0" y="-8" width="155" height="16" rx="8" fill="#FFFFFF" stroke="#ECECEC" stroke-width="1"/>
                          <circle cx="12" cy="0" r="2.5" fill="#E4E4E4"/>
                        </g>

                        <!-- LEFT CONTENT -->
                        <text x="260" y="183" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="20" font-weight="800" fill="#111111">Your</text>
                        <text x="260" y="207" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="20" font-weight="800" fill="#111111">Success</text>
                        <text x="258" y="232" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="20" font-weight="800" fill="#E51B23">Our Strategy</text>

                        <!-- Text lines -->
                        <rect x="259" y="249" width="137" height="5" rx="2.5" fill="#E8E8E8"/>
                        <rect x="259" y="261" width="119" height="5" rx="2.5" fill="#EEEEEE"/>
                        <rect x="259" y="273" width="102" height="5" rx="2.5" fill="#EEEEEE"/>

                        <!-- Button -->
                        <rect x="245" y="327" width="64" height="24" rx="5" fill="#E51B23"/>
                        <rect x="258" y="337" width="37" height="4" rx="2" fill="#FFFFFF" opacity=".95"/>

                        <!-- SEO GRAPH -->
                        <!-- subtle graph panel -->
                        <rect x="432" y="139" width="133" height="157" rx="5" fill="#FCFCFC"/>

                        <!-- baseline -->
                        <path d="M451 292 L555 292" stroke="#E3E3E3" stroke-width="2"/>

                        <!-- vertical -->
                        <path d="M451 292 L451 166" stroke="#E3E3E3" stroke-width="2"/>

                        <!-- Bars -->
                        <rect x="458" y="258" width="16" height="34" rx="1" fill="url(#redGrad)"/>
                        <rect x="482" y="239" width="16" height="53" rx="1" fill="url(#redGrad)"/>
                        <rect x="506" y="210" width="16" height="82" rx="1" fill="url(#redGrad)"/>
                        <rect x="530" y="180" width="16" height="112" rx="1" fill="url(#redGrad)"/>

                        <!-- Smooth growth line -->
                        <path d="M450 250 C463 243 475 234 487 226 C496 219 502 207 511 201 C520 193 530 180 538 170 C544 165 550 165 557 170" stroke="#E91B23" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>

                        <!-- Arrow head -->
                        <path d="M544 156 L566 153 L561 177" stroke="#E91B23" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>

                        <!-- Right text -->
                        <rect x="444" y="310" width="112" height="5" rx="2.5" fill="#E8E8E8"/>
                        <rect x="444" y="322" width="95" height="5" rx="2.5" fill="#EEEEEE"/>
                        <rect x="444" y="334" width="106" height="5" rx="2.5" fill="#EEEEEE"/>
                      </g>

                      <!-- LAPTOP BASE -->
                      <!-- Upper edge -->
                      <path d="M193 378 L590 378 L581 392 L186 392 Z" fill="#252525"/>

                      <!-- Main base -->
                      <path d="M186 391 L581 391 L600 399 Q605 402 597 405 L164 405 Q157 404 163 399 Z" fill="#080808"/>

                      <!-- Trackpad -->
                      <path d="M374 390 L453 390 L446 398 L382 398 Z" fill="#151515"/>

                      <!-- Bottom highlight -->
                      <path d="M165 405 C280 407 470 407 597 405" stroke="#353535" stroke-width="2" stroke-linecap="round"/>

                      <!-- LEFT CARD — HIGHER VISIBILITY -->
                      <g filter="url(#cardShadowFilter)" class="svg-floating-card card-vis">
                        <rect x="119" y="62" width="120" height="130" rx="17" fill="url(#cardGrad)"/>

                        <!-- icon -->
                        <rect x="158" y="106" width="8" height="18" rx="2" fill="#D91C24"/>
                        <rect x="171" y="98" width="8" height="26" rx="2" fill="#E02128"/>
                        <rect x="184" y="88" width="8" height="36" rx="2" fill="#ED1C24"/>

                        <!-- smooth upward line -->
                        <path d="M155 125 C166 119 174 113 181 107 C186 102 190 96 196 89" stroke="#111111" stroke-width="3" stroke-linecap="round" fill="none"/>

                        <!-- Text -->
                        <text x="139" y="151" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="14" font-weight="800" fill="#111111">Higher</text>
                        <text x="139" y="170" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="14" font-weight="800" fill="#111111">Visibility</text>
                      </g>

                      <!-- RIGHT CARD — MORE TRAFFIC -->
                      <g filter="url(#cardShadowFilter)" class="svg-floating-card card-traffic">
                        <rect x="626" y="62" width="100" height="132" rx="17" fill="#FFFFFF"/>

                        <!-- People icon -->
                        <circle cx="664" cy="91" r="9" fill="#DD2027"/>
                        <circle cx="681" cy="91" r="8" fill="#E32A31"/>
                        <path d="M648 116 C648 104 655 99 664 99 C672 99 679 104 679 116 Z" fill="#DD2027"/>
                        <path d="M673 115 C673 105 679 100 687 100 C695 100 701 105 701 115 Z" fill="#E32A31"/>

                        <!-- Text -->
                        <text x="644" y="144" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="13" font-weight="800" fill="#111111">More</text>
                        <text x="644" y="162" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="13" font-weight="800" fill="#111111">Traffic</text>
                      </g>

                      <!-- RIGHT BOTTOM CARD — BETTER RESULTS -->
                      <g filter="url(#cardShadowFilter)" class="svg-floating-card card-results">
                        <rect x="520" y="269" width="164" height="98" rx="18" fill="#FFFFFF"/>

                        <!-- Target -->
                        <circle cx="557" cy="318" r="21" stroke="#E51B23" stroke-width="5" fill="none"/>
                        <circle cx="557" cy="318" r="12" stroke="#E51B23" stroke-width="4" fill="none"/>
                        <circle cx="557" cy="318" r="5" fill="#E51B23"/>

                        <!-- Target arrow -->
                        <path d="M548 329 L568 307" stroke="#E51B23" stroke-width="5" stroke-linecap="round"/>
                        <path d="M561 307 L570 306 L569 316" stroke="#E51B23" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>

                        <!-- Text -->
                        <text x="593" y="313" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="13" font-weight="800" fill="#111111">Better</text>
                        <text x="593" y="332" font-family="'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="13" font-weight="800" fill="#111111">Results</text>
                      </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. ALL SERVICES CATALOG & INTERACTIVE FILTERABLE SHOWCASE
     ========================================================================= -->
<section class="services-catalog-section py-5 position-relative" id="servicesCatalog">
    <div class="container py-2 py-lg-4 position-relative z-2">
        
        <!-- Section Header -->
        <header class="section-top-header text-center mb-4 mb-md-5">
            <div class="section-pill-badge mb-2">
                <i class="bi bi-stars text-danger me-1"></i> EXPLORE SOLUTIONS &bull; DOMINATE YOUR MARKET
            </div>
            <h2 class="section-main-title">
                Comprehensive Digital &amp; Growth Services
            </h2>
            <p class="section-sub-desc mx-auto">
                Engineered for maximum ROI, search dominance, and conversion acceleration across all digital customer touchpoints.
            </p>
        </header>
        <!-- Services Cards Grid -->
        <div class="row g-3 g-lg-4 services-grid-row" id="servicesGrid">
            
            <!-- Service 1: Local SEO -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('local-seo-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/local_seo.webp') ?>" alt="Local SEO Services" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; GEO TARGETING</span>
                                <h3 class="srv-card-title">Local SEO Services</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 2: International SEO -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('international-seo-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/international_seo.webp') ?>" alt="International SEO Services" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; GLOBAL REACH</span>
                                <h3 class="srv-card-title">International SEO</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 3: White Label SEO -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('white-label-seo-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/white_label_seo.webp') ?>" alt="White Label SEO Services" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; AGENCY PARTNER</span>
                                <h3 class="srv-card-title">White Label SEO</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 4: Ecommerce SEO -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('ecommerce-seo-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/ecommerce_seo.webp') ?>" alt="Ecommerce SEO Services" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; STORE REVENUE</span>
                                <h3 class="srv-card-title">Ecommerce SEO</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 5: Nationwide SEO -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('nationwide-seo-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/nationwide_seo.webp') ?>" alt="Nationwide SEO Services" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; SCALE &amp; AUTHORITY</span>
                                <h3 class="srv-card-title">Nationwide SEO</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 6: Link Building & Digital PR -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="seo">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('linkbuilding-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/link_building.webp') ?>" alt="Link Building & Digital PR" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SEO &bull; DOMAIN AUTHORITY</span>
                                <h3 class="srv-card-title">Link Building &amp; PR</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 7: Content Marketing -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="marketing">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('content-marketing-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/content_marketing.webp') ?>" alt="Content Marketing" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">CONTENT &bull; BRAND AUTHORITY</span>
                                <h3 class="srv-card-title">Content Marketing</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 8: Google Pay Per Click -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="ppc">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('ppc-management-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/ppc_management.webp') ?>" alt="Google Pay Per Click" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">PAID ADS &bull; GOOGLE ADS</span>
                                <h3 class="srv-card-title">Google Pay Per Click</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 9: Social Media Marketing -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="social">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('social-media-marketing') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/social_media.webp') ?>" alt="Social Media Marketing" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">SOCIAL &bull; BRAND GROWTH</span>
                                <h3 class="srv-card-title">Social Media Marketing</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 10: Web Design & Development -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 service-card-col" data-category="web">
                <div class="premium-service-card h-100">
                    <a href="<?= site_url('web-development-services') ?>" class="srv-card-link text-decoration-none d-flex flex-column h-100">
                        <div class="srv-card-thumb mb-3 position-relative overflow-hidden rounded-4">
                            <img src="<?= base_url('assets/images/services_modules/web_development.webp') ?>" alt="Web Design & Development" width="400" height="400" loading="lazy" class="img-fluid srv-thumb-img">
                        </div>
                        <div class="srv-card-info d-flex align-items-center justify-content-between mt-auto pt-2">
                            <div>
                                <span class="srv-cat-tag">DEV &bull; HIGH PERFORMANCE</span>
                                <h3 class="srv-card-title">Web Design &amp; Development</h3>
                            </div>
                            <div class="srv-circle-btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. PERFORMANCE METRICS & EXECUTION FRAMEWORK STRIP
     ========================================================================= -->
<section class="services-stats-framework py-5 bg-light position-relative">
    <div class="container py-3">
        <div class="row g-4 text-center justify-content-center">
            
            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-framework-box p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="stat-big-number text-danger mb-1">98%</div>
                    <div class="stat-label-title fw-bold text-dark mb-1">Client Retention</div>
                    <p class="stat-small-desc text-muted mb-0 small">Long-term strategic partnerships built on measurable results</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-framework-box p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="stat-big-number text-danger mb-1">3.8X</div>
                    <div class="stat-label-title fw-bold text-dark mb-1">Traffic Multiplier</div>
                    <p class="stat-small-desc text-muted mb-0 small">Average organic search increase within 6 months of launch</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-framework-box p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="stat-big-number text-danger mb-1">10K+</div>
                    <div class="stat-label-title fw-bold text-dark mb-1">Top-3 Keywords</div>
                    <p class="stat-small-desc text-muted mb-0 small">Ranked across competitive commercial high-volume search queries</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-framework-box p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="stat-big-number text-danger mb-1">24/7</div>
                    <div class="stat-label-title fw-bold text-dark mb-1">SLA Support</div>
                    <p class="stat-small-desc text-muted mb-0 small">Dedicated senior account strategists and transparent live dashboard</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     4. PROVEN 4-STEP EXECUTION PROCESS
     ========================================================================= -->
<section class="services-process-section py-5 position-relative">
    <div class="container py-2 py-lg-4">
        
        <header class="section-top-header text-center mb-5">
            <div class="section-pill-badge mb-2">
                <i class="bi bi-gear-wide-connected text-danger me-1"></i> METHODOLOGY &bull; PRECISION &bull; SPEED
            </div>
            <h2 class="section-main-title">
                Our 4-Step Proven Growth Framework
            </h2>
            <p class="section-sub-desc mx-auto">
                How we take your website from its current baseline to dominant market leadership.
            </p>
        </header>

        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="process-step-box p-4 rounded-4 bg-white h-100 position-relative">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="step-badge-num flex-shrink-0">01</div>
                        <h4 class="step-title fw-bold mb-0">Deep Discovery Audit</h4>
                    </div>
                    <p class="step-desc text-muted small mb-0">
                        We analyze your technical footprint, competitor backlinks, algorithmic gaps, and conversion roadblocks.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="process-step-box p-4 rounded-4 bg-white h-100 position-relative">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="step-badge-num flex-shrink-0">02</div>
                        <h4 class="step-title fw-bold mb-0">Strategic Blueprint</h4>
                    </div>
                    <p class="step-desc text-muted small mb-0">
                        A customized milestone plan with prioritized high-impact keywords, schema roadmap, and technical fixes.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="process-step-box p-4 rounded-4 bg-white h-100 position-relative">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="step-badge-num flex-shrink-0">03</div>
                        <h4 class="step-title fw-bold mb-0">Agile Execution</h4>
                    </div>
                    <p class="step-desc text-muted small mb-0">
                        Our engineering team deploys on-page optimizations, editorial link outreach, and paid acquisition sprints.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="process-step-box p-4 rounded-4 bg-white h-100 position-relative">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="step-badge-num flex-shrink-0">04</div>
                        <h4 class="step-title fw-bold mb-0">Scale &amp; Conversion</h4>
                    </div>
                    <p class="step-desc text-muted small mb-0">
                        Continuous A/B testing, rankings expansion into adjacent terms, and transparent live ROI reporting.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- =========================================================================
     5. FREQUENTLY ASKED QUESTIONS (ACCORDION)
     ========================================================================= -->
<section class="services-faq-section py-5 bg-light position-relative">
    <div class="container py-2 py-lg-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <header class="section-top-header text-center mb-5">
                    <div class="section-pill-badge mb-2">
                        <i class="bi bi-question-circle text-danger me-1"></i> CLARITY &bull; TRANSPARENCY
                    </div>
                    <h2 class="section-main-title">
                        Frequently Asked Questions
                    </h2>
                    <p class="section-sub-desc mx-auto">
                        Common questions about our digital marketing, SEO, and web engineering capabilities.
                    </p>
                </header>

                <div class="accordion custom-services-accordion" id="servicesFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                How soon can we expect to see tangible organic ranking results?
                            </button>
                        </h3>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#servicesFaqAccordion">
                            <div class="accordion-body text-muted pt-0 pb-3">
                                Most clients begin observing measurable upward rank movement and increased impressions within 60 to 90 days. For competitive high-volume terms, sustained compounding growth and top-3 positions typically solidify between months 4 through 9.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Do you provide dedicated monthly reporting and analytics access?
                            </button>
                        </h3>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#servicesFaqAccordion">
                            <div class="accordion-body text-muted pt-0 pb-3">
                                Yes. You receive 24/7 access to an unbranded live dashboard tracking keyword rankings, organic sessions, conversion events, and backlink acquisitions, supplemented by monthly executive video reviews with your dedicated strategist.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Are your digital services safe against Google algorithmic updates?
                            </button>
                        </h3>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#servicesFaqAccordion">
                            <div class="accordion-body text-muted pt-0 pb-3">
                                Absolutely. We adhere strictly to 100% white-hat Google Search Essentials guidelines. We do not use automated link spam or PBNs. Our strategies focus on technical perfection, authentic editorial outreach, and high-value user experience.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                Can you provide white label fulfillment for our agency clients?
                            </button>
                        </h3>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#servicesFaqAccordion">
                            <div class="accordion-body text-muted pt-0 pb-3">
                                Yes. We have turnkey white-label agency partnerships under strict NDAs. We fulfill deliverables, link acquisitions, and technical implementations quietly while you maintain client relationships with unbranded reports.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item border-0 rounded-4 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                What is the onboarding process and how do we get started?
                            </button>
                        </h3>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#servicesFaqAccordion">
                            <div class="accordion-body text-muted pt-0 pb-3">
                                Simply click "Discuss Your Project" or reach out to our team. We perform a complimentary baseline search footprint audit, schedule a 30-minute discovery call, and deliver a tailored strategy proposal within 48 hours.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

