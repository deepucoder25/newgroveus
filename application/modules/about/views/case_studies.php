<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

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
                <pattern id="csBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="csBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="csBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="csBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#csBcDotPattern)" />
            <rect width="100%" height="100%" fill="url(#csBcGridPattern)" />
            <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#csBcSweepRed)" stroke-width="1.8" />
            <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#csBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                        'bc_h1' => 'Case Studies & Measurable Results',
                        'bc_desc' => 'Explore proven case studies and real-world growth results delivered by our engineering team.',
                        'breadcrumbs' => [
                            ['name' => 'Case Studies']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="cnt-bc-hero-title mb-1">
                    Case Studies &amp; <span class="cnt-title-highlight">Client Results</span>
                </h1>

                <!-- Short Concise Subtitle -->
                <p class="cnt-bc-hero-desc">
                    In-depth breakdowns of real-world challenges, strategic technical solutions, and measurable business growth achieved.
                </p>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="cnt-bc-hero-badges">
                    <div class="cnt-bc-badge">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span>Proven Measurable ROI</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-blue">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>10x Traffic &amp; Conversion Gains</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-amber">
                        <i class="bi bi-journal-code"></i>
                        <span>End-to-End Architectural Studies</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Real Client Results, Measurable Growth</h2>
                    <p>Discover how our data-driven strategies have helped businesses scale search traffic, increase customer acquisition, and maximize revenue across various industries.</p>
                </div>
            </div>
        </div>
    </div>
</section>
