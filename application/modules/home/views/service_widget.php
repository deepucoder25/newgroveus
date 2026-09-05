<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';

// 4 Flagship Core Services in exactly ONE Row
$featuredServices = [
    [
        'id' => 'srv-local-seo',
        'title' => 'Local SEO Services',
        'category' => 'Geo-Targeting & Maps',
        'theme_color' => '#ea2d2d',
        'bg_gradient' => 'linear-gradient(135deg, #fff1f2 0%, #ffffff 100%)',
        'desc' => 'Dominate Canadian local map packs, geo-targeted searches in Toronto, Vancouver & Montreal, and drive high-intent calls.',
        'link' => 'local-seo-services',
        'svg_type' => 'local_seo'
    ],
    [
        'id' => 'srv-white-label',
        'title' => 'White Label SEO Services',
        'category' => 'Agency Outsourcing',
        'theme_color' => '#0284c7',
        'bg_gradient' => 'linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%)',
        'desc' => '100% confidential agency SEO fulfillment under strict NDAs, real-time unbranded client portals, and CRA-compliant CAD invoices.',
        'link' => 'white-label-seo-services',
        'svg_type' => 'white_label'
    ],
    [
        'id' => 'srv-ecommerce-seo',
        'title' => 'Ecommerce SEO Services',
        'category' => 'Online Store Growth',
        'theme_color' => '#10b981',
        'bg_gradient' => 'linear-gradient(135deg, #ecfdf5 0%, #ffffff 100%)',
        'desc' => 'Revenue-driven product schema optimization, category architecture, and organic sales conversion scaling for online stores.',
        'link' => 'ecommerce-seo-services',
        'svg_type' => 'ecommerce'
    ],
    [
        'id' => 'srv-international-seo',
        'title' => 'International & Bilingual SEO',
        'category' => 'Global & French-CA',
        'theme_color' => '#8b5cf6',
        'bg_gradient' => 'linear-gradient(135deg, #f5f3ff 0%, #ffffff 100%)',
        'desc' => 'Expand across US, UK, and Quebec markets with precision hreflang architecture, French-Canadian keyword silos, and backlinks.',
        'link' => 'international-seo-services',
        'svg_type' => 'international'
    ]
];
?>

<!-- ========================================================================= -->
<!-- CORE DIGITAL & SEO SERVICES SHOWCASE WIDGET (EXACTLY 1 ROW WITH 4 COLS)   -->
<!-- ========================================================================= -->
<section class="ca-services-section py-5 position-relative" id="canadaServicesSection" itemscope itemtype="https://schema.org/ItemList" aria-label="Digital Marketing and SEO Services offered by <?= htmlspecialchars($companyName) ?>">
    
    <!-- Background Ambient Shapes -->
    <div class="ca-srv-bg-shape shape-top-left" aria-hidden="true"></div>
    <div class="ca-srv-bg-shape shape-bottom-right" aria-hidden="true"></div>

    <div class="container py-2 py-lg-4 position-relative z-2">
        
        <!-- Section Header (Standard wl- structure) -->
        <header class="wl-header text-center mb-4 mb-md-5">
            <div class="wl-badge-pill mb-2">
                <i class="bi bi-stars me-1" aria-hidden="true"></i> FEATURES &bull; SERVICES &bull; GROWTH
            </div>
            <h2 class="wl-main-title text-uppercase" itemprop="name">
                Our Features &amp; Services.
            </h2>
            <p class="wl-main-subtitle mx-auto">
                Engineered digital solutions, bespoke search algorithms, and white-label fulfillment designed to accelerate commercial market dominance.
            </p>
        </header>

        <!-- Exactly 1 Row using explicit Bootstrap col classes -->
        <div class="row g-3 g-xl-4 align-items-stretch">
            <?php foreach ($featuredServices as $index => $srv): ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex" itemprop="itemListElement" itemscope itemtype="https://schema.org/Service">
                    <meta itemprop="position" content="<?= $index + 1 ?>">
                    <meta itemprop="serviceType" content="<?= htmlspecialchars($srv['title']) ?>">
                    
                    <article class="ca-srv-card w-100 d-flex flex-column justify-content-between position-relative overflow-hidden">
                        
                        <!-- Top Visual Illustration Area -->
                        <div class="ca-srv-illustration-wrap position-relative d-flex align-items-center justify-content-center overflow-hidden" style="background: <?= $srv['bg_gradient'] ?>;">
                            
                            <!-- Ambient Decorative Pattern -->
                            <svg class="ca-srv-ambient-svg" viewBox="0 0 280 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="230" cy="20" r="70" fill="<?= $srv['theme_color'] ?>" fill-opacity="0.08"/>
                                <circle cx="30" cy="150" r="50" fill="<?= $srv['theme_color'] ?>" fill-opacity="0.06"/>
                                <path d="M-20,90 Q70,40 140,110 T300,70" stroke="<?= $srv['theme_color'] ?>" stroke-width="1.5" stroke-dasharray="4 4" stroke-opacity="0.25"/>
                            </svg>

                            <!-- ================================================= -->
                            <!-- BESPOKE HIGH-GRADE VECTOR SVG ARTWORKS            -->
                            <!-- ================================================= -->
                            <?php if ($srv['svg_type'] === 'local_seo'): ?>
                                <!-- 1. LOCAL SEO -->
                                <svg class="ca-srv-art-svg" viewBox="0 0 240 150" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Local SEO Illustration">
                                    <defs>
                                        <linearGradient id="lsMapBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#f8fafc"/></linearGradient>
                                        <linearGradient id="lsPinGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff4b4b"/><stop offset="100%" stop-color="#dc2626"/></linearGradient>
                                    </defs>
                                    <rect x="25" y="15" width="190" height="120" rx="14" fill="url(#lsMapBg)" stroke="#e2e8f0" stroke-width="1.5"/>
                                    <path d="M25 50 H215 M25 90 H215 M80 15 V135 M160 15 V135" stroke="#edf2f7" stroke-width="2.5"/>
                                    <path d="M50 15 Q120 70 190 40" stroke="#fecaca" stroke-width="2.5" stroke-dasharray="4 4"/>
                                    <circle cx="120" cy="65" r="38" fill="#fee2e2" fill-opacity="0.45"/>
                                    <circle cx="120" cy="65" r="24" fill="#fca5a5" fill-opacity="0.35"/>
                                    <path d="M120 32 C108 32 99 41 99 53 C99 68 120 88 120 88 C120 88 141 68 141 53 C141 41 132 32 120 32 Z" fill="url(#lsPinGrad)"/>
                                    <circle cx="120" cy="51" r="6.5" fill="#ffffff"/>
                                    <circle cx="62" cy="72" r="15" fill="#ffffff" stroke="#ea2d2d" stroke-width="2.2"/>
                                    <path d="M73 83 L83 93" stroke="#ea2d2d" stroke-width="3" stroke-linecap="round"/>
                                    <circle cx="62" cy="72" r="6" fill="#fee2e2"/>
                                    <rect x="155" y="24" width="50" height="20" rx="10" fill="#ffffff" stroke="#fef08a" stroke-width="1.2"/>
                                    <path d="M165 34 L166.5 30 L168 34 L172 34.5 L169 37 L170 41 L166.5 38.5 L163 41 L164 37 L161 34.5 Z" fill="#f59e0b"/>
                                    <text x="188" y="38" fill="#0f172a" font-size="9" font-weight="bold" text-anchor="middle">5.0 ★</text>
                                    <rect x="40" y="106" width="160" height="16" rx="8" fill="#f8fafc" stroke="#e2e8f0"/>
                                    <circle cx="50" cy="114" r="3.5" fill="#ea2d2d"/>
                                    <rect x="60" y="112" width="70" height="4" rx="2" fill="#94a3b8"/>
                                    <rect x="165" y="109" width="28" height="10" rx="5" fill="#ea2d2d"/>
                                </svg>

                            <?php elseif ($srv['svg_type'] === 'white_label'): ?>
                                <!-- 2. WHITE LABEL SEO -->
                                <svg class="ca-srv-art-svg" viewBox="0 0 240 150" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="White Label Illustration">
                                    <defs>
                                        <linearGradient id="wlPortalBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#f0f9ff"/></linearGradient>
                                        <linearGradient id="wlShieldGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0ea5e9"/><stop offset="100%" stop-color="#0284c7"/></linearGradient>
                                    </defs>
                                    <rect x="25" y="15" width="190" height="120" rx="14" fill="url(#wlPortalBg)" stroke="#e2e8f0" stroke-width="1.5"/>
                                    <path d="M25 35 H215" stroke="#e2e8f0" stroke-width="1.2"/>
                                    <circle cx="38" cy="25" r="3" fill="#ef4444"/><circle cx="48" cy="25" r="3" fill="#f59e0b"/><circle cx="58" cy="25" r="3" fill="#10b981"/>
                                    <rect x="80" y="21" width="80" height="8" rx="4" fill="#e2e8f0"/>
                                    <rect x="36" y="46" width="46" height="32" rx="6" fill="#ffffff" stroke="#bae6fd" stroke-width="1.2"/>
                                    <rect x="42" y="64" width="6" height="10" rx="2" fill="#0284c7"/><rect x="52" y="56" width="6" height="18" rx="2" fill="#38bdf8"/><rect x="62" y="50" width="6" height="24" rx="2" fill="#0284c7"/>
                                    <circle cx="120" cy="74" r="34" fill="#e0f2fe" fill-opacity="0.6"/>
                                    <path d="M120 48 L142 56 V73 C142 86 132 96 120 100 C108 96 98 86 98 73 V56 L120 48 Z" fill="url(#wlShieldGrad)"/>
                                    <path d="M112 73 L118 79 L130 67" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="158" y="46" width="46" height="54" rx="6" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.2"/>
                                    <rect x="166" y="54" width="30" height="4" rx="2" fill="#0284c7"/><rect x="166" y="62" width="24" height="3" rx="1.5" fill="#cbd5e1"/><rect x="166" y="69" width="28" height="3" rx="1.5" fill="#cbd5e1"/>
                                    <circle cx="184" cy="88" r="6" fill="#fef08a"/>
                                    <rect x="75" y="112" width="90" height="14" rx="7" fill="#0284c7"/>
                                    <text x="120" y="122" fill="#ffffff" font-size="8.5" font-weight="bold" text-anchor="middle">100% WHITE LABEL</text>
                                </svg>

                            <?php elseif ($srv['svg_type'] === 'ecommerce'): ?>
                                <!-- 3. ECOMMERCE SEO -->
                                <svg class="ca-srv-art-svg" viewBox="0 0 240 150" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Ecommerce Illustration">
                                    <defs>
                                        <linearGradient id="ecBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#ecfdf5"/></linearGradient>
                                        <linearGradient id="ecGreenGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#34d399"/><stop offset="100%" stop-color="#059669"/></linearGradient>
                                    </defs>
                                    <rect x="25" y="15" width="190" height="120" rx="14" fill="url(#ecBg)" stroke="#e2e8f0" stroke-width="1.5"/>
                                    <rect x="40" y="38" width="58" height="72" rx="10" fill="#ffffff" stroke="#a7f3d0" stroke-width="1.5"/>
                                    <path d="M56 38 C56 28 82 28 82 38" stroke="#059669" stroke-width="2.5" fill="none"/>
                                    <circle cx="69" cy="62" r="14" fill="#d1fae5"/>
                                    <path d="M63 62 H75 M69 56 V68" stroke="#059669" stroke-width="2.2" stroke-linecap="round"/>
                                    <rect x="49" y="86" width="40" height="14" rx="7" fill="#10b981"/>
                                    <text x="69" y="96" fill="#ffffff" font-size="8" font-weight="bold" text-anchor="middle">BUY NOW</text>
                                    <rect x="112" y="38" width="92" height="72" rx="10" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.2"/>
                                    <path d="M122 92 L140 76 L158 82 L186 52" stroke="url(#ecGreenGrad)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M174 52 H186 V64" stroke="#059669" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M120 94 H194 M120 74 H194 M120 54 H194" stroke="#f1f5f9" stroke-width="1.2"/>
                                    <rect x="134" y="24" width="58" height="18" rx="9" fill="#059669"/>
                                    <text x="163" y="36" fill="#ffffff" font-size="9" font-weight="bold" text-anchor="middle">+148% ROI</text>
                                    <circle cx="114" cy="28" r="10" fill="#fef08a"/>
                                    <text x="114" y="32" fill="#b45309" font-size="9" font-weight="bold" text-anchor="middle">$</text>
                                </svg>

                            <?php else: ?>
                                <!-- 4. INTERNATIONAL & BILINGUAL SEO -->
                                <svg class="ca-srv-art-svg" viewBox="0 0 240 150" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="International Illustration">
                                    <defs>
                                        <linearGradient id="intBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#f5f3ff"/></linearGradient>
                                    </defs>
                                    <rect x="25" y="15" width="190" height="120" rx="14" fill="url(#intBg)" stroke="#e2e8f0" stroke-width="1.5"/>
                                    <circle cx="120" cy="74" r="46" fill="#ede9fe" fill-opacity="0.4"/>
                                    <circle cx="120" cy="74" r="36" fill="#ffffff" stroke="#8b5cf6" stroke-width="2"/>
                                    <ellipse cx="120" cy="74" rx="20" ry="36" stroke="#c4b5fd" stroke-width="1.5"/>
                                    <path d="M84 74 H156 M92 56 H148 M92 92 H148" stroke="#c4b5fd" stroke-width="1.5"/>
                                    <circle cx="120" cy="74" r="4" fill="#8b5cf6"/>
                                    <rect x="36" y="44" width="46" height="24" rx="8" fill="#7c3aed"/>
                                    <text x="59" y="60" fill="#ffffff" font-size="10" font-weight="bold" text-anchor="middle">EN • US</text>
                                    <path d="M82 56 Q100 62 116 70" stroke="#8b5cf6" stroke-width="2" stroke-dasharray="3 3"/>
                                    <rect x="158" y="80" width="46" height="24" rx="8" fill="#6366f1"/>
                                    <text x="181" y="96" fill="#ffffff" font-size="10" font-weight="bold" text-anchor="middle">FR • CA</text>
                                    <path d="M158 90 Q140 84 124 78" stroke="#6366f1" stroke-width="2" stroke-dasharray="3 3"/>
                                    <rect x="88" y="22" width="64" height="16" rx="8" fill="#ffffff" stroke="#ddd6fe" stroke-width="1.2"/>
                                    <text x="120" y="33" fill="#7c3aed" font-size="8.5" font-weight="bold" text-anchor="middle">hreflang="ca-fr"</text>
                                </svg>
                            <?php endif; ?>

                        </div>

                        <!-- Card Content Body -->
                        <div class="ca-srv-card-body p-3 p-xl-4 d-flex flex-column flex-grow-1 justify-content-between text-center">
                            
                            <div>
                                <!-- Service Category Subtitle -->
                                <div class="ca-srv-category-tag mb-2">
                                    <span class="badge rounded-pill" style="color: <?= $srv['theme_color'] ?>; background-color: <?= $srv['theme_color'] ?>15;">
                                        <?= htmlspecialchars($srv['category']) ?>
                                    </span>
                                </div>

                                <!-- Service Title -->
                                <h3 class="ca-srv-title mb-2" itemprop="name">
                                    <a href="<?= site_url($srv['link']) ?>" class="text-decoration-none text-dark" itemprop="url">
                                        <?= htmlspecialchars($srv['title']) ?>
                                    </a>
                                </h3>

                                <!-- Service Description -->
                                <p class="ca-srv-desc mb-3" itemprop="description">
                                    <?= htmlspecialchars($srv['desc']) ?>
                                </p>
                            </div>

                            <!-- Bottom CTA Pill Button (Solid Vibrant Color Guaranteed) -->
                            <div class="ca-srv-actions mt-auto pt-2">
                                <a href="<?= site_url($srv['link']) ?>" class="ca-srv-pill-btn w-100 fw-bold d-inline-flex align-items-center justify-content-center gap-2" style="--btn-color: <?= $srv['theme_color'] ?>; background-color: <?= $srv['theme_color'] ?>;">
                                    <span>MORE</span>
                                    <i class="bi bi-arrow-right ca-btn-arrow"></i>
                                </a>
                            </div>

                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Center CTA Button: View All Services & Packages -->
        <div class="text-center mt-5 pt-2">
            <a href="<?= site_url('services') ?>" class="ca-srv-all-btn text-decoration-none d-inline-flex align-items-center gap-3 rounded-pill">
                <span class="ca-srv-all-icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-grid-fill"></i>
                </span>
                <span class="ca-srv-all-text fw-bold">Explore All Services &amp; Packages</span>
                <span class="ca-srv-all-arrow-badge d-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-right"></i>
                </span>
            </a>
        </div>

    </div>
</section>
