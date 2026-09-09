<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<main class="main">
    <!-- =========================================================================
         1. DYNAMIC BREADCRUMBS & HERO HEADER SECTION (CONTACT PAGE DESIGN)
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
                    <pattern id="blgBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                        <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                    </pattern>
                    <pattern id="blgBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                    </pattern>
                    <linearGradient id="blgBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                        <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="blgBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                        <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <rect width="100%" height="100%" fill="url(#blgBcDotPattern)" />
                <rect width="100%" height="100%" fill="url(#blgBcGridPattern)" />
                <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#blgBcSweepRed)" stroke-width="1.8" />
                <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#blgBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                            'bc_h1' => 'Our Official Blog &amp; Tech Insights',
                            'bc_desc' => 'Discover the latest technology trends, software development best practices, SEO blueprints, and engineering insights from ' . (!empty($company3) ? $company3 : 'Groveus Informatics') . '.',
                            'breadcrumbs' => [
                                ['name' => 'Blog']
                            ]
                        ]); ?>
                    </div>

                    <!-- Main Hero Heading -->
                    <h1 class="cnt-bc-hero-title mb-1">
                        Engineering Insights &amp; <span class="cnt-title-highlight">Official Blog</span>
                    </h1>

                    <!-- Short Concise Subtitle -->
                    <p class="cnt-bc-hero-desc">
                        Stay ahead with in-depth articles, case breakdowns, software development insights, and growth strategies.
                    </p>
                </div>

                <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                    <div class="cnt-bc-hero-badges">
                        <div class="cnt-bc-badge">
                            <span class="cnt-status-dot cnt-dot-green"></span>
                            <span>Regular Tech Publications</span>
                        </div>
                        <div class="cnt-bc-badge cnt-bc-badge-blue">
                            <i class="bi bi-journal-code"></i>
                            <span>Software &amp; Growth Insights</span>
                        </div>
                        <div class="cnt-bc-badge cnt-bc-badge-amber">
                            <i class="bi bi-award-fill"></i>
                            <span>Expert Engineering Team</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog-section py-5 bg-light">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Our Latest <span class="blog-title-highlight">News & Blog</span>
                </h2>
                <p class="text-muted">
                    Stay updated with our latest packing and moving insights.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $schemaData = []; // Initialize the schema data array
                
                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        $image_path = FCPATH . 'uploads/blogs/' . $b->image;
                        $img = ($b->image && file_exists($image_path)) ? base_url("uploads/blogs/{$b->image}") : base_url('assets/images/about/about-showcase.webp');

                        // Handle date parsing
                        $created_at = isset($b->created_at) ? $b->created_at : date('Y-m-d H:i:s');
                        $day = date('d', strtotime($created_at));
                        $month = date('M', strtotime($created_at));

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => $created_at,
                            "author" => [
                                "@type" => "Person",
                                "name" => "Admin"
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => isset($company3) ? $company3 : 'MyCompany',
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/images/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description), 0, 160) . '...'
                        ];
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden blog-card blog-transition-hover">
                                <div class="position-relative">
                                    <a href="<?= $link ?>">
                                        <img src="<?= $img ?>" class="card-img-top blog-card-img"
                                            alt="<?= htmlspecialchars($b->title) ?>">
                                    </a>
                                    <div
                                        class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-2 rounded-bottom-start shadow-sm blog-date-badge">
                                        <?= $day ?>         <?= $month ?>
                                    </div>
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-3 mb-3 text-muted small">
                                        <span class="d-flex align-items-center gap-1"><i
                                                class="bi bi-person-circle blog-icon-primary"></i> By Admin</span>
                                        <span class="d-flex align-items-center gap-1"><i
                                                class="bi bi-patch-check-fill text-success"></i> Verified</span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">
                                        <a href="<?= $link ?>"
                                            class="text-dark text-decoration-none blog-title-link"><?= $b->title ?></a>
                                    </h5>
                                    <p class="card-text text-muted small mb-4 flex-grow-1">
                                        <?= substr(strip_tags($b->description), 0, 110) ?>...
                                    </p>
                                    <div>
                                        <a href="<?= $link ?>" class="btn btn-sm px-4 rounded-pill fw-bold blog-btn-primary">
                                            Read More <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="p-5 bg-white rounded-4 shadow-sm text-muted">No blogs published yet. Check back soon!</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>