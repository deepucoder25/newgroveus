<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     1. DYNAMIC BREADCRUMBS & HERO HEADER SECTION WITH RICH BACKGROUND DESIGN
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
                <pattern id="cntBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="cntBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="cntBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="cntBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#cntBcDotPattern)" />
            <rect width="100%" height="100%" fill="url(#cntBcGridPattern)" />
            <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#cntBcSweepRed)" stroke-width="1.8" />
            <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#cntBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                        'bc_h1' => 'Contact Us &amp; Request a Proposal',
                        'bc_desc' => 'Connect with our digital growth strategists, request a custom project audit, or schedule a 1-on-1 strategy call with our engineering team.',
                        'breadcrumbs' => [
                            ['name' => 'Contact Us']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="cnt-bc-hero-title mb-1">
                    Contact <span class="cnt-title-highlight"><?= !empty($company3) ? $company3 : 'Us' ?></span>
                </h1>

                <!-- Short Concise Subtitle -->
                <p class="cnt-bc-hero-desc">
                    Get in touch with our expert team for custom project proposals, audits, and inquiries.
                </p>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="cnt-bc-hero-badges">
                    <div class="cnt-bc-badge">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span>Direct Strategist Line Open</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-blue">
                        <i class="bi bi-shield-check"></i>
                        <span>100% Confidential &amp; NDA Protected</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-amber">
                        <i class="bi bi-clock-history"></i>
                        <span>Average Response &lt; 15 Mins</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. MAIN CONTACT PAGE CONTAINER (WITH RICH AMBIENT BACKGROUND SYSTEM)
     ========================================================================= -->
<div class="cnt-page-wrapper position-relative">

    <!-- Global Full-Page Ambient Decorative Background Layers -->
    <div class="cnt-page-ambient-bg" aria-hidden="true">
        <!-- Floating Ambient Glowing Color Orbs -->
        <div class="cnt-ambient-orb cnt-orb-1"></div>
        <div class="cnt-ambient-orb cnt-orb-2"></div>
        <div class="cnt-ambient-orb cnt-orb-3"></div>
        <div class="cnt-ambient-orb cnt-orb-4"></div>

        <!-- Canvas Background Decorative SVG Geometry & Rich Tech Canvas -->
        <svg class="position-absolute w-100 h-100" style="top:0; left:0; pointer-events:none;" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <!-- Modern Blueprint Dot-Grid Matrix -->
                <pattern id="cntPageDotPattern" x="0" y="0" width="32" height="32" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.2" fill="#64748b" fill-opacity="0.18" />
                </pattern>
                
                <!-- Isometric Tech Blueprint Grid -->
                <pattern id="cntPageIsoGrid" width="80" height="80" patternUnits="userSpaceOnUse">
                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="#94a3b8" stroke-width="0.8" stroke-opacity="0.12" stroke-dasharray="4 4" />
                    <circle cx="0" cy="0" r="2" fill="#cbd5e1" fill-opacity="0.4" />
                    <circle cx="80" cy="80" r="2" fill="#cbd5e1" fill-opacity="0.4" />
                </pattern>

                <!-- Flowing Vector Gradients -->
                <linearGradient id="cntWaveGradRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.22" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.08" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>

                <linearGradient id="cntWaveGradBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.2" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.06" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>

                <linearGradient id="cntWaveGradAmber" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#d97706" stop-opacity="0.18" />
                    <stop offset="60%" stop-color="#f59e0b" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>

                <linearGradient id="cntCubeGradRed" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#fee2e2" stop-opacity="0.6" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.1" />
                </linearGradient>

                <linearGradient id="cntCubeGradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#e0f2fe" stop-opacity="0.6" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.1" />
                </linearGradient>
            </defs>

            <!-- Background Patterns -->
            <rect width="100%" height="100%" fill="url(#cntPageDotPattern)" />
            <rect width="100%" height="100%" fill="url(#cntPageIsoGrid)" />

            <!-- Dynamic Flowing Structural Ribbons -->
            <path d="M-100,100 C300,260 700,-10 1200,140 C1600,240 1920,60 2200,80" fill="none" stroke="url(#cntWaveGradRed)" stroke-width="2.2" />
            <path d="M-50,310 C350,150 850,390 1350,230 C1750,110 2000,290 2300,250" fill="none" stroke="url(#cntWaveGradBlue)" stroke-width="1.8" stroke-dasharray="6 6" />
            <path d="M-100,680 C400,520 900,780 1450,620 C1850,510 2100,720 2300,680" fill="none" stroke="url(#cntWaveGradAmber)" stroke-width="1.8" />
            <path d="M-80,890 C320,760 820,980 1380,820 C1800,720 2150,890 2350,860" fill="none" stroke="url(#cntWaveGradBlue)" stroke-width="1.5" stroke-dasharray="5 5" />

            <!-- ==========================================
                 1. TOP-LEFT FLOATING ISOMETRIC 3D CUBE
                 ========================================== -->
            <g transform="translate(60, 90)" opacity="0.65">
                <!-- Top Face -->
                <polygon points="0,-24 28,-10 0,4 -28,-10" fill="url(#cntCubeGradRed)" stroke="#c91a25" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Left Face -->
                <polygon points="-28,-10 0,4 0,36 -28,22" fill="#fee2e2" fill-opacity="0.4" stroke="#c91a25" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Right Face -->
                <polygon points="0,4 28,-10 28,22 0,36" fill="#fecaca" fill-opacity="0.3" stroke="#c91a25" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Inner Axis -->
                <line x1="0" y1="4" x2="0" y2="36" stroke="#c91a25" stroke-width="1" stroke-opacity="0.4" />
                <!-- Orbit Ring -->
                <circle cx="0" cy="6" r="42" fill="none" stroke="#c91a25" stroke-width="1" stroke-opacity="0.15" stroke-dasharray="3 3" />
            </g>

            <!-- ==========================================
                 2. TOP-RIGHT FLOATING ISOMETRIC 3D CUBE
                 ========================================== -->
            <g transform="translate(calc(100% - 90px), 130)" opacity="0.65">
                <!-- Top Face -->
                <polygon points="0,-28 32,-12 0,4 -32,-12" fill="url(#cntCubeGradBlue)" stroke="#0284c7" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Left Face -->
                <polygon points="-32,-12 0,4 0,40 -32,24" fill="#e0f2fe" fill-opacity="0.4" stroke="#0284c7" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Right Face -->
                <polygon points="0,4 32,-12 32,24 0,40" fill="#bae6fd" fill-opacity="0.3" stroke="#0284c7" stroke-width="1.2" stroke-opacity="0.35" />
                <!-- Orbit Rings -->
                <circle cx="0" cy="6" r="48" fill="none" stroke="#0284c7" stroke-width="1" stroke-opacity="0.18" stroke-dasharray="4 4" />
            </g>

            <!-- ==========================================
                 3. MID-CANVAS INTERCONNECTED CONSTELLATION MESH
                 ========================================== -->
            <g opacity="0.75">
                <!-- Connected Circuit Lines -->
                <line x1="120" y1="210" x2="280" y2="160" stroke="#c91a25" stroke-opacity="0.22" stroke-width="1.2" stroke-dasharray="4 4" />
                <line x1="280" y1="160" x2="520" y2="230" stroke="#0284c7" stroke-opacity="0.22" stroke-width="1.2" />
                <line x1="520" y1="230" x2="780" y2="170" stroke="#0284c7" stroke-opacity="0.22" stroke-width="1.2" stroke-dasharray="5 5" />
                <line x1="780" y1="170" x2="1050" y2="240" stroke="#d97706" stroke-opacity="0.22" stroke-width="1.2" />
                <line x1="1050" y1="240" x2="1280" y2="180" stroke="#d97706" stroke-opacity="0.22" stroke-width="1.2" stroke-dasharray="4 4" />

                <!-- Nodes -->
                <circle cx="120" cy="210" r="4" fill="#c91a25" fill-opacity="0.4" />
                <circle cx="120" cy="210" r="9" fill="none" stroke="#c91a25" stroke-opacity="0.2" stroke-width="1" />
                <circle cx="280" cy="160" r="3.5" fill="#f43f5e" fill-opacity="0.45" />
                <circle cx="520" cy="230" r="5" fill="#0284c7" fill-opacity="0.45" />
                <circle cx="520" cy="230" r="11" fill="none" stroke="#0284c7" stroke-opacity="0.2" stroke-width="1" />
                <circle cx="780" cy="170" r="3.5" fill="#38bdf8" fill-opacity="0.45" />
                <circle cx="1050" cy="240" r="4.5" fill="#d97706" fill-opacity="0.45" />
                <circle cx="1050" cy="240" r="10" fill="none" stroke="#d97706" stroke-opacity="0.2" stroke-width="1" />
                <circle cx="1280" cy="180" r="4" fill="#f59e0b" fill-opacity="0.45" />
            </g>

            <!-- ==========================================
                 4. FLOATING TECH CROSSHAIRS & BLUEPRINT ACCENTS
                 ========================================== -->
            <g stroke="#94a3b8" stroke-width="1.2" stroke-opacity="0.45">
                <!-- Top Left Crosshair -->
                <path d="M 45,35 L 45,55 M 45,35 L 65,35" />
                <circle cx="45" cy="35" r="2.5" fill="#c91a25" fill-opacity="0.6" stroke="none" />
                <!-- Top Right Crosshair -->
                <path d="M calc(100% - 45px),35 L calc(100% - 45px),55 M calc(100% - 45px),35 L calc(100% - 65px),35" />
                <circle cx="calc(100% - 45px)" cy="35" r="2.5" fill="#0284c7" fill-opacity="0.6" stroke="none" />
                <!-- Bottom Left Crosshair -->
                <path d="M 45,calc(100% - 35px) L 45,calc(100% - 55px) M 45,calc(100% - 35px) L 65,calc(100% - 35px)" />
                <circle cx="45" cy="calc(100% - 35px)" r="2.5" fill="#d97706" fill-opacity="0.6" stroke="none" />
                <!-- Bottom Right Crosshair -->
                <path d="M calc(100% - 45px),calc(100% - 35px) L calc(100% - 45px),calc(100% - 55px) M calc(100% - 45px),calc(100% - 35px) L calc(100% - 65px),calc(100% - 35px)" />
                <circle cx="calc(100% - 45px)" cy="calc(100% - 35px)" r="2.5" fill="#16a34a" fill-opacity="0.6" stroke="none" />
            </g>

            <!-- Floating Diamond Sparkles -->
            <g fill="none" stroke-width="1.2" opacity="0.5">
                <polygon points="180,480 190,490 180,500 170,490" stroke="#c91a25" stroke-opacity="0.35" />
                <polygon points="calc(100% - 160px),520 calc(100% - 150px),530 calc(100% - 160px),540 calc(100% - 170px),530" stroke="#0284c7" stroke-opacity="0.35" />
                <polygon points="340,780 352,792 340,804 328,792" stroke="#d97706" stroke-opacity="0.35" />
            </g>
        </svg>
    </div>

    <!-- Top Quick-Contact Cards Section -->
    <section class="cnt-quick-cards-section">
        <div class="container">
            <div class="row g-4">
                
                <!-- Quick Card 1: Direct Phone -->
                <div class="col-12 col-md-4">
                    <div class="cnt-quick-card cnt-card-phone">
                        <!-- Card Corner SVG Decoration with Soundwave & Concentric Radar -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="140" height="140" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="120" cy="20" r="70" fill="none" stroke="#c91a25" stroke-opacity="0.06" stroke-width="1" />
                                <circle cx="120" cy="20" r="45" fill="none" stroke="#c91a25" stroke-opacity="0.08" stroke-width="1.2" stroke-dasharray="4 4" />
                                <circle cx="120" cy="20" r="25" fill="#fee2e2" fill-opacity="0.35" stroke="#c91a25" stroke-opacity="0.12" stroke-width="1" />
                                <circle cx="120" cy="20" r="6" fill="#c91a25" fill-opacity="0.2" />
                                <!-- Floating Micro Accent Sparkles -->
                                <circle cx="65" cy="45" r="2" fill="#c91a25" fill-opacity="0.3" />
                                <circle cx="85" cy="85" r="3" fill="#c91a25" fill-opacity="0.25" />
                                <path d="M 60,20 L 70,20 M 65,15 L 65,25" stroke="#c91a25" stroke-opacity="0.2" stroke-width="1" />
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
                        <!-- Card Corner SVG Decoration with Diamond Mesh & Geometry -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="140" height="140" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="120" cy="20" r="70" fill="none" stroke="#0284c7" stroke-opacity="0.06" stroke-width="1" />
                                <circle cx="120" cy="20" r="45" fill="none" stroke="#0284c7" stroke-opacity="0.08" stroke-width="1.2" stroke-dasharray="4 4" />
                                <polygon points="120,5 135,20 120,35 105,20" fill="#e0f2fe" fill-opacity="0.4" stroke="#0284c7" stroke-opacity="0.15" stroke-width="1" />
                                <circle cx="120" cy="20" r="4" fill="#0284c7" fill-opacity="0.25" />
                                <!-- Network flight lines -->
                                <line x1="105" y1="20" x2="65" y2="55" stroke="#0284c7" stroke-opacity="0.15" stroke-width="1" stroke-dasharray="3 3" />
                                <circle cx="65" cy="55" r="2.5" fill="#0284c7" fill-opacity="0.3" />
                                <circle cx="85" cy="80" r="2" fill="#38bdf8" fill-opacity="0.35" />
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
                        <!-- Card Corner SVG Decoration with Geo Target & Isometric Rays -->
                        <div class="cnt-card-svg-bg" aria-hidden="true">
                            <svg width="140" height="140" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="120" cy="20" r="70" fill="none" stroke="#d97706" stroke-opacity="0.06" stroke-width="1" />
                                <circle cx="120" cy="20" r="45" fill="none" stroke="#d97706" stroke-opacity="0.08" stroke-width="1.2" stroke-dasharray="4 4" />
                                <circle cx="120" cy="20" r="25" fill="#fef3c7" fill-opacity="0.35" stroke="#d97706" stroke-opacity="0.12" stroke-width="1" />
                                <path d="M 120,5 L 120,35 M 105,20 L 135,20" stroke="#d97706" stroke-opacity="0.2" stroke-width="1" />
                                <circle cx="120" cy="20" r="5" fill="#d97706" fill-opacity="0.3" />
                                <!-- Floating Geo Dots -->
                                <circle cx="70" cy="50" r="2.5" fill="#d97706" fill-opacity="0.3" />
                                <circle cx="95" cy="85" r="2" fill="#f59e0b" fill-opacity="0.35" />
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
                        
                        <!-- Form Box SVG Decorative Background with Multi-Tier Curves & Sparkles -->
                        <div class="cnt-box-svg-bg" aria-hidden="true">
                            <svg width="100%" height="100%" viewBox="0 0 600 600" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="cntFormGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.09" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntFormGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#f43f5e" stop-opacity="0.06" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntLineGradRed" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.28" />
                                        <stop offset="50%" stop-color="#ef4444" stop-opacity="0.12" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <pattern id="cntDotGridRed" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
                                        <circle cx="2" cy="2" r="1.2" fill="#94a3b8" fill-opacity="0.22" />
                                    </pattern>
                                    <radialGradient id="cntFormGlow" cx="95%" cy="5%" r="55%">
                                        <stop offset="0%" stop-color="#fee2e2" stop-opacity="0.5" />
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
                                <circle cx="530" cy="75" r="40" fill="none" stroke="#c91a25" stroke-opacity="0.09" stroke-width="1.2" />
                                <circle cx="530" cy="75" r="70" fill="none" stroke="#c91a25" stroke-opacity="0.06" stroke-width="1" stroke-dasharray="6 6" />
                                <!-- Floating Tech Polygon Sparkles -->
                                <polygon points="520,180 538,198 524,220 506,206" fill="none" stroke="#ef4444" stroke-opacity="0.2" stroke-width="1.2" />
                                <circle cx="520" cy="180" r="2.5" fill="#c91a25" fill-opacity="0.35" />
                                <circle cx="538" cy="198" r="2.5" fill="#ef4444" fill-opacity="0.35" />
                                <!-- Subtle Lower-Left Tech Accent -->
                                <circle cx="45" cy="550" r="30" fill="none" stroke="#c91a25" stroke-opacity="0.05" stroke-width="1" />
                                <circle cx="45" cy="550" r="15" fill="#fee2e2" fill-opacity="0.2" />
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
                        
                        <!-- Info Box SVG Decorative Background with Blue Gradient Glow & Connected Nodes -->
                        <div class="cnt-box-svg-bg" aria-hidden="true">
                            <svg width="100%" height="100%" viewBox="0 0 600 600" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="cntInfoGrad1" x1="100%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.09" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="cntLineGradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.28" />
                                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                                    </linearGradient>
                                    <pattern id="cntDotGridBlue" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
                                        <circle cx="2" cy="2" r="1.2" fill="#94a3b8" fill-opacity="0.22" />
                                    </pattern>
                                    <radialGradient id="cntInfoGlow" cx="95%" cy="5%" r="55%">
                                        <stop offset="0%" stop-color="#e0f2fe" stop-opacity="0.45" />
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
                                <circle cx="530" cy="75" r="40" fill="none" stroke="#0284c7" stroke-opacity="0.09" stroke-width="1.2" />
                                <circle cx="530" cy="75" r="70" fill="none" stroke="#0284c7" stroke-opacity="0.06" stroke-width="1" stroke-dasharray="6 6" />
                                <!-- Connected Network Nodes in Corner -->
                                <line x1="490" y1="160" x2="540" y2="135" stroke="#0284c7" stroke-opacity="0.22" stroke-width="1" />
                                <line x1="540" y1="135" x2="565" y2="175" stroke="#0284c7" stroke-opacity="0.22" stroke-width="1" />
                                <circle cx="490" cy="160" r="3" fill="#0284c7" fill-opacity="0.35" />
                                <circle cx="540" cy="135" r="3.5" fill="#38bdf8" fill-opacity="0.4" />
                                <circle cx="565" cy="175" r="2.5" fill="#0284c7" fill-opacity="0.35" />
                                <!-- Lower Ambient Geometry -->
                                <circle cx="80" cy="530" r="35" fill="none" stroke="#0284c7" stroke-opacity="0.05" stroke-width="1" stroke-dasharray="4 4" />
                            </svg>
                        </div>

                        <!-- Top Header -->
                        <div class="cnt-box-header">
                            <div class="cnt-box-pill-badge cnt-box-pill-blue">
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
            <div class="cnt-map-frame-wrapper position-relative">
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
        </div>
    </section>

</div>
