<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic business context with Canada-focused variables
$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';
$companyPhone = isset($phone) && !empty($phone) ? $phone : '+1 (800) 555-0199';
$companyPhoneHtml = isset($phonehtml) && !empty($phonehtml) ? $phonehtml : 'tel:+18005550199';
$companyWhatsapp = isset($whatsapphtml) && !empty($whatsapphtml) ? $whatsapphtml : 'https://wa.me/18005550199';
?>

<!-- ========================================================================= -->
<!-- 4-TIER CANADA SERVICE PACKAGES SECTION (SEO & SCHEMA OPTIMIZED)           -->
<!-- 1. Basic  2. Start Up  3. Advanced  4. Premium                           -->
<!-- Standard Canadian Agency SEO Monthly Investment Ranges (CAD)             -->
<!-- ========================================================================= -->
<section class="ca-pricing-section py-5 position-relative" id="canadaPackagesSection" itemscope itemtype="https://schema.org/Product" aria-label="Canadian Service Pricing Plans and Packages">
    
    <!-- Meta Structured Data for Search Engines -->
    <meta itemprop="name" content="Canada Business & SEO Service Packages - <?= htmlspecialchars($companyName) ?>">
    <meta itemprop="description" content="Flexible Canadian SEO & digital marketing package ranges in CAD for Basic, Start Up, Advanced, and Premium tiers. CRA compliant with zero lock-in contracts.">
    <meta itemprop="brand" content="<?= htmlspecialchars($companyName) ?>">

    <div class="container py-2 py-lg-4">
        
        <!-- Section Header (Using standard wl- header classes from services_info.php) -->
        <header class="wl-header text-center mb-4 mb-md-5">
            <div class="wl-badge-pill mb-2">
                <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i> Transparent Canada Pricing &bull; CAD Currency
            </div>
            <h2 class="wl-main-title text-uppercase">
                Comprehensive Packages Tailored for Canadian Growth
            </h2>
            <p class="wl-main-subtitle mx-auto">
                Explore our 4 transparent tiers estimated in <strong>Canadian Dollars (CAD)</strong> based on industry market standards. Choose the plan that fits your business scale, with no hidden fees and CRA-compliant tax invoices.
            </p>
        </header>

        <!-- 4 Pricing Boxes Grid (Col-xl-3 / Col-lg-6 / Col-12) -->
        <div class="row g-4 justify-content-center align-items-stretch">
            
            <!-- ========================================== -->
            <!-- BOX 1: BASIC PLAN                          -->
            <!-- ========================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-12" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="priceCurrency" content="CAD">
                <meta itemprop="price" content="350.00">
                <meta itemprop="availability" content="https://schema.org/InStock">
                
                <div class="ca-pricing-card ca-card-basic h-100 d-flex flex-column shadow-sm">
                    <div class="ca-card-top">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-plan-tier">Starter Entry</span>
                            <!-- SVG Tier Icon: Target / Local Pin -->
                            <div class="ca-tier-svg-icon" title="Starter Tier">
                                <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="16" cy="16" r="14" fill="#fee2e2" stroke="#fca5a5" stroke-width="1.5"/>
                                    <circle cx="16" cy="16" r="8" stroke="#dc2626" stroke-width="2"/>
                                    <circle cx="16" cy="16" r="3" fill="#dc2626"/>
                                    <path d="M16 2V6M16 26V30M2 16H6M26 16H30" stroke="#dc2626" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="ca-plan-name">1. Basic</h3>
                        <p class="ca-plan-target">Ideal for solo contractors, local storefronts, and emerging Canadian micro-businesses.</p>
                        
                        <!-- Price Range in CAD -->
                        <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                            <span class="ca-currency">$</span>
                            <span class="ca-amount">350</span>
                            <span class="ca-range-sep">&ndash;</span>
                            <span class="ca-amount">650</span>
                            <span class="ca-cad-label">CAD</span>
                            <span class="ca-period">/ mo</span>
                        </div>
                        <div class="ca-tax-note">Estimated range based on local market scope</div>
                    </div>

                    <div class="ca-card-divider"></div>

                    <!-- Deliverables List with Fixed Scrollable Height -->
                    <div class="ca-card-body flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                            <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                        </div>
                        
                        <div class="ca-features-scroll">
                            <ul class="ca-feature-list list-unstyled m-0">
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>1 Canadian City / Regional</strong> Geo-Targeting</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Up to <strong>12 Target Search Keywords</strong></span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Google Business Profile (GBP) &amp; Bing Setup</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Core On-Page Meta Titles &amp; Description Tagging</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Technical SEO Audit (Fix 404s, Broken Links, XML Sitemap)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Core Web Vitals &amp; Mobile UX Basic Tuning</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>10 Local Canadian Citations</strong> (YellowPages.ca, etc.)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Google Analytics 4 &amp; Search Console Integration</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Monthly Executive PDF Performance Report</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Standard Email Support (48h SLA)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dual Action Buttons in One Row -->
                    <div class="ca-card-footer mt-auto pt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn ca-btn-enquiry w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Open Basic Plan Enquiry Form">
                                    <i class="bi bi-pencil-square me-1" aria-hidden="true"></i>
                                    <span>Enquiry</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="<?= htmlspecialchars($companyWhatsapp) ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100 d-flex align-items-center justify-content-center" aria-label="Chat Now for Basic Plan">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>
                                    <span>Chat Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- BOX 2: START UP PLAN                       -->
            <!-- ========================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-12" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="priceCurrency" content="CAD">
                <meta itemprop="price" content="750.00">
                <meta itemprop="availability" content="https://schema.org/InStock">

                <div class="ca-pricing-card ca-card-startup h-100 d-flex flex-column shadow-sm">
                    <div class="ca-card-top">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-plan-tier">Growth Focus</span>
                            <!-- SVG Tier Icon: Rocket Launch -->
                            <div class="ca-tier-svg-icon" title="Startup Growth Tier">
                                <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <rect width="32" height="32" rx="8" fill="#eff6ff"/>
                                    <path d="M19 6C19 6 22 9 22 13C22 17 19 20 16 23C13 20 10 17 10 13C10 9 13 6 13 6L16 8L19 6Z" fill="#3b82f6"/>
                                    <circle cx="16" cy="13" r="3" fill="#ffffff"/>
                                    <path d="M11 20L7 22L9 18M21 20L25 22L23 18" stroke="#2563eb" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M16 23V27M14 26L16 29L18 26" stroke="#ea580c" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="ca-plan-name">2. Start Up</h3>
                        <p class="ca-plan-target">Tailored for fast-growing startups and expanding provincial Canadian businesses.</p>
                        
                        <!-- Price Range in CAD -->
                        <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                            <span class="ca-currency">$</span>
                            <span class="ca-amount">750</span>
                            <span class="ca-range-sep">&ndash;</span>
                            <span class="ca-amount">1,250</span>
                            <span class="ca-cad-label">CAD</span>
                            <span class="ca-period">/ mo</span>
                        </div>
                        <div class="ca-tax-note">Standard Canadian startup scaling investment</div>
                    </div>

                    <div class="ca-card-divider"></div>

                    <!-- Deliverables List with Fixed Scrollable Height -->
                    <div class="ca-card-body flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                            <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                        </div>
                        
                        <div class="ca-features-scroll">
                            <ul class="ca-feature-list list-unstyled m-0">
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>Multi-City &amp; Provincial</strong> Geo-Targeting (Up to 3 Areas)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Up to <strong>30 Commercial Buyer-Intent Keywords</strong></span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Top 3 Competitor SERP &amp; Keyword Gap Analysis</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Schema.org Rich Snippets (LocalBusiness, Org, Breadcrumbs)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>2 High-Quality SEO Articles</strong> / Service Pages (800+ words)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>High-Authority <strong>Canadian (.CA) Citations &amp; Directory Push</strong></span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Lead Form &amp; Call Event Conversion Tracking Setup</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Advanced Asset Minification &amp; Server Caching Tuning</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Bi-Weekly Performance &amp; Traffic Movement Report</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Priority Email &amp; Ticket Support (24h SLA)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dual Action Buttons in One Row -->
                    <div class="ca-card-footer mt-auto pt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn ca-btn-enquiry w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Open Start Up Plan Enquiry Form">
                                    <i class="bi bi-pencil-square me-1" aria-hidden="true"></i>
                                    <span>Enquiry</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="<?= htmlspecialchars($companyWhatsapp) ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100 d-flex align-items-center justify-content-center" aria-label="Chat Now for Start Up Plan">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>
                                    <span>Chat Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- BOX 3: ADVANCED PLAN (MOST POPULAR)        -->
            <!-- ========================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-12" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="priceCurrency" content="CAD">
                <meta itemprop="price" content="1500.00">
                <meta itemprop="availability" content="https://schema.org/InStock">

                <div class="ca-pricing-card ca-featured-card ca-card-advanced h-100 d-flex flex-column shadow position-relative">
                    
                    <!-- Popular Badge -->
                    <div class="ca-featured-ribbon" aria-hidden="true">
                        <i class="bi bi-star-fill me-1"></i> Most Popular Choice
                    </div>

                    <div class="ca-card-top">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-plan-tier">Competitive Edge</span>
                            <!-- SVG Tier Icon: Crown / Star Diamond -->
                            <div class="ca-tier-svg-icon" title="Advanced National Tier">
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

                        <h3 class="ca-plan-name">3. Advanced</h3>
                        <p class="ca-plan-target">Engineered for competitive brands targeting dominance across Toronto, Vancouver &amp; nationwide.</p>
                        
                        <!-- Price Range in CAD -->
                        <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                            <span class="ca-currency">$</span>
                            <span class="ca-amount">1,500</span>
                            <span class="ca-range-sep">&ndash;</span>
                            <span class="ca-amount">2,800</span>
                            <span class="ca-cad-label">CAD</span>
                            <span class="ca-period">/ mo</span>
                        </div>
                        <div class="ca-tax-note">Highest ROI tier for mid-to-large enterprises</div>
                    </div>

                    <div class="ca-card-divider"></div>

                    <!-- Deliverables List with Fixed Scrollable Height -->
                    <div class="ca-card-body flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                            <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                        </div>
                        
                        <div class="ca-features-scroll">
                            <ul class="ca-feature-list list-unstyled m-0">
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>Nationwide Canada Coverage</strong> (Multi-Metro Dominance)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Up to <strong>60+ Prime Keywords</strong> &amp; Competitor Intercept</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>English &amp; French <strong>Bilingual SEO Optimization</strong></span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>5 High-DA Canadian (.CA) Backlinks</strong> &amp; Guest Posts</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>4 In-Depth SEO Articles</strong> (1,200+ words) with Infographics</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Conversion Rate Optimization (CRO) &amp; Heatmap UX Tuning</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Google Map Pack Top 3 Push &amp; Geo-Tagged Photos</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Full Schema Suite (FAQPage, Review, Service, Breadcrumb)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>Dedicated Account Manager</strong> in Canadian Timezones (EST/PST)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Bi-Weekly Live Strategy Calls &amp; Real-Time Analytics Dashboard</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Direct WhatsApp &amp; Phone Support Access</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dual Action Buttons in One Row -->
                    <div class="ca-card-footer mt-auto pt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn ca-btn-primary w-100 d-flex align-items-center justify-content-center shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Open Advanced Plan Enquiry Form">
                                    <i class="bi bi-pencil-square me-1" aria-hidden="true"></i>
                                    <span>Enquiry</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="<?= htmlspecialchars($companyWhatsapp) ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100 d-flex align-items-center justify-content-center" aria-label="Chat Now for Advanced Plan">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>
                                    <span>Chat Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- BOX 4: PREMIUM PLAN                        -->
            <!-- ========================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-12" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <meta itemprop="priceCurrency" content="CAD">
                <meta itemprop="price" content="3000.00">
                <meta itemprop="availability" content="https://schema.org/InStock">

                <div class="ca-pricing-card ca-card-premium h-100 d-flex flex-column shadow-sm">
                    <div class="ca-card-top">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-plan-tier">Enterprise &amp; White-Label</span>
                            <!-- SVG Tier Icon: Enterprise Shield / Diamond -->
                            <div class="ca-tier-svg-icon" title="Enterprise White-Label Tier">
                                <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <rect width="32" height="32" rx="8" fill="#f8fafc"/>
                                    <path d="M16 4L6 8V16C6 22 10.5 27 16 29C21.5 27 26 22 26 16V8L16 4Z" fill="#0f172a" stroke="#334155" stroke-width="1.5"/>
                                    <path d="M16 9L18.5 14H23.5L19.5 17.5L21 22.5L16 19.5L11 22.5L12.5 17.5L8.5 14H13.5L16 9Z" fill="#f59e0b"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="ca-plan-name">4. Premium</h3>
                        <p class="ca-plan-target">Ultimate turnkey solution for large enterprises, multi-location franchises, and agencies.</p>
                        
                        <!-- Price Range in CAD -->
                        <div class="ca-price-box d-flex align-items-baseline flex-wrap">
                            <span class="ca-currency">$</span>
                            <span class="ca-amount">3,000</span>
                            <span class="ca-range-sep">&ndash;</span>
                            <span class="ca-amount">5,500+</span>
                            <span class="ca-cad-label">CAD</span>
                            <span class="ca-period">/ mo</span>
                        </div>
                        <div class="ca-tax-note">Full turnkey SLA &amp; dedicated technical team</div>
                    </div>

                    <div class="ca-card-divider"></div>

                    <!-- Deliverables List with Fixed Scrollable Height -->
                    <div class="ca-card-body flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="ca-features-heading text-uppercase m-0">What We Provide:</span>
                            <span class="ca-scroll-hint"><i class="bi bi-arrow-down-up me-1"></i>Scroll</span>
                        </div>
                        
                        <div class="ca-features-scroll">
                            <ul class="ca-feature-list list-unstyled m-0">
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>Unlimited Search Keywords</strong> &amp; Aggressive SERP Conquest</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Full Turnkey <strong>White-Label Reporting</strong> with Custom Portals</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Custom Landing Page Architecture &amp; A/B Split Testing</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span><strong>8 Premium Articles</strong> / Research Whitepapers Monthly</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>High-Tier Tier 1 Canadian Media, News &amp; .CA Authority Outreach</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Direct <strong>Slack / Microsoft Teams Channel</strong> with Lead Architect</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Priority <strong>24/7 SLA Engineering Response</strong> (1-hour SLA)</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Weekly 1-on-1 Executive Growth Strategy Mastermind Calls</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Omnichannel Retargeting &amp; Social Signal Synergy Setup</span>
                                </li>
                                <li class="ca-feature-item d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill ca-check-icon me-2" aria-hidden="true"></i>
                                    <span>Custom Volume Agency Invoicing, NDA &amp; Tailored SLA Terms</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dual Action Buttons in One Row -->
                    <div class="ca-card-footer mt-auto pt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn ca-btn-enquiry w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Open Premium Plan Enquiry Form">
                                    <i class="bi bi-pencil-square me-1" aria-hidden="true"></i>
                                    <span>Enquiry</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="<?= htmlspecialchars($companyWhatsapp) ?>" target="_blank" rel="noopener" class="btn ca-btn-chat w-100 d-flex align-items-center justify-content-center" aria-label="Chat Now for Premium Plan">
                                    <i class="bi bi-whatsapp me-1" aria-hidden="true"></i>
                                    <span>Chat Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Trust Badges & Canadian Business Guarantees (Modern Micro-Cards Layout) -->
        <div class="ca-guarantees-wrapper mt-4 mt-lg-5">
            <div class="row g-2 g-md-3">
                <!-- Trust Item 1 -->
                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-shield-check" aria-hidden="true"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">CRA Tax Compliant</span>
                            <span class="ca-trust-desc d-block">GST/HST Invoiced</span>
                        </div>
                    </div>
                </div>

                <!-- Trust Item 2 -->
                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-clock-history" aria-hidden="true"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">Canadian Timezones</span>
                            <span class="ca-trust-desc d-block">EST / PST Live Support</span>
                        </div>
                    </div>
                </div>

                <!-- Trust Item 3 -->
                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-file-earmark-lock" aria-hidden="true"></i>
                        </div>
                        <div class="ca-trust-text-box">
                            <span class="ca-trust-title d-block">PIPEDA Privacy</span>
                            <span class="ca-trust-desc d-block">Bank-Grade Compliance</span>
                        </div>
                    </div>
                </div>

                <!-- Trust Item 4 -->
                <div class="col-lg-3 col-6">
                    <div class="ca-trust-card d-flex align-items-center h-100">
                        <div class="ca-trust-icon-box flex-shrink-0">
                            <i class="bi bi-arrow-repeat" aria-hidden="true"></i>
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
