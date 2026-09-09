<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

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
                            <span><?= !empty($total) ? $total . ' Published Articles' : 'Active Tech Blog' ?></span>
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

    <!-- =========================================================================
         2. BLOG ARTICLES LISTING GRID SECTION (REDESIGNED CARD BOX)
         ========================================================================= -->
    <section class="blog-section">
        <div class="container">
            
            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="badge bg-danger px-3 py-2 fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">
                    <i class="bi bi-newspaper me-1"></i> Tech Publications
                </span>
                <h2 class="fw-bold text-dark mt-2 mb-2">
                    Latest <span class="text-danger">Articles &amp; News</span>
                </h2>
                <p class="text-muted small" style="max-width: 600px; margin: 0 auto;">
                    Practical tutorials, architectural blueprints, and industry analysis authored by our senior engineering team.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $schemaData = [];
                
                if (!empty($blogs)):
                    foreach ($blogs as $b_obj):
                        $b = (object) $b_obj;
                        $slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = site_url('blog/' . $slug);

                        // Strict Image Check - Only show image if uploaded by admin
                        $has_image = false;
                        $img = '';
                        $image_name = trim($b->image ?? '');
                        if (!empty($image_name)) {
                            if (substr($image_name, 0, 4) === 'http') {
                                $img = $image_name;
                                $has_image = true;
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_name)) {
                                $img = base_url('assets/uploads/blog/' . $image_name);
                                $has_image = true;
                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_name)) {
                                $img = base_url('uploads/blogs/' . $image_name);
                                $has_image = true;
                            }
                        }

                        // Date & Meta
                        $date_raw = !empty($b->date) ? $b->date : (!empty($b->created_at) ? $b->created_at : date('Y-m-d'));
                        $day = date('d', strtotime($date_raw));
                        $month = date('M', strtotime($date_raw));
                        $formatted_date = date('M d, Y', strtotime($date_raw));
                        $author = !empty($b->author) ? $b->author : 'Editorial Team';
                        $tags_arr = !empty($b->tags) ? explode(',', $b->tags) : [];
                        $first_tag = !empty($tags_arr[0]) ? trim($tags_arr[0]) : 'Technology';

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $has_image ? $img : base_url('assets/images/logo/logo.png'),
                            "datePublished" => $date_raw,
                            "author" => [
                                "@type" => "Person",
                                "name" => $author
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => isset($company3) ? $company3 : 'Groveus Informatics',
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/images/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description), 0, 160) . '...'
                        ];
                        ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <article class="blog-card h-100">
                                
                                <?php if ($has_image): ?>
                                    <!-- Image Block (Only rendered when image is uploaded) -->
                                    <div class="blog-img-wrap">
                                        <a href="<?= $link ?>" class="d-block w-100 h-100" aria-label="<?= htmlspecialchars($b->title) ?>">
                                            <img src="<?= $img ?>" 
                                                 class="blog-card-img" 
                                                 alt="<?= htmlspecialchars($b->title) ?>"
                                                 loading="lazy">
                                        </a>
                                        <div class="blog-img-date-badge">
                                            <i class="bi bi-calendar3"></i>
                                            <span><?= $day ?> <?= $month ?></span>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <!-- No Image Header Block -->
                                    <div class="blog-no-img-header">
                                        <span class="blog-category-tag">
                                            <i class="bi bi-tag-fill me-1"></i><?= htmlspecialchars($first_tag) ?>
                                        </span>
                                        <span class="blog-text-date">
                                            <i class="bi bi-calendar-event text-danger"></i> <?= $formatted_date ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <!-- Card Content Body -->
                                <div class="blog-card-body">
                                    <div class="blog-meta-row">
                                        <span class="blog-meta-item">
                                            <i class="bi bi-person-circle text-danger"></i> <?= htmlspecialchars($author) ?>
                                        </span>
                                        <span class="text-muted">•</span>
                                        <span class="blog-meta-item">
                                            <i class="bi bi-patch-check-fill text-primary"></i> Verified
                                        </span>
                                    </div>

                                    <h3 class="blog-card-title">
                                        <a href="<?= $link ?>"><?= htmlspecialchars($b->title) ?></a>
                                    </h3>

                                    <p class="blog-card-desc">
                                        <?= substr(strip_tags($b->description), 0, 130) ?><?= strlen(strip_tags($b->description)) > 130 ? '...' : '' ?>
                                    </p>

                                    <div class="pt-2 mt-auto">
                                        <a href="<?= $link ?>" class="blog-read-btn">
                                            <span>Read Article</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <div class="py-5 bg-white rounded-4 shadow-sm border p-4">
                            <div class="display-6 text-danger mb-3">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2">No Blog Posts Published Yet</h4>
                            <p class="text-secondary small mb-0">Articles published via the Admin Panel will appear here automatically.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if (!empty($total) && $total > 6): ?>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>