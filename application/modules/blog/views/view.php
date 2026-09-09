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
                    <pattern id="blgDtlDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                        <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                    </pattern>
                    <pattern id="blgDtlGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                    </pattern>
                    <linearGradient id="blgDtlSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                        <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="blgDtlSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                        <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                        <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <rect width="100%" height="100%" fill="url(#blgDtlDotPattern)" />
                <rect width="100%" height="100%" fill="url(#blgDtlGridPattern)" />
                <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#blgDtlSweepRed)" stroke-width="1.8" />
                <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#blgDtlSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                            'bc_h1' => htmlspecialchars(@$query[0]->title),
                            'bc_desc' => word_limiter(strip_tags(@$query[0]->description), 120),
                            'breadcrumbs' => [
                                ['name' => 'Blog', 'url' => site_url('blog')],
                                ['name' => htmlspecialchars(@$query[0]->title)]
                            ]
                        ]); ?>
                    </div>

                    <!-- Main Hero Heading -->
                    <h1 class="cnt-bc-hero-title mb-1">
                        <?= htmlspecialchars(@$query[0]->title) ?>
                    </h1>

                    <!-- Short Concise Subtitle -->
                    <p class="cnt-bc-hero-desc">
                        Published on <?= date('F d, Y', strtotime(@$query[0]->created_at ?? 'now')) ?> • Technical Article &amp; Strategic Guide
                    </p>
                </div>

                <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                    <div class="cnt-bc-hero-badges">
                        <div class="cnt-bc-badge">
                            <span class="cnt-status-dot cnt-dot-green"></span>
                            <span><?= date('M d, Y', strtotime(@$query[0]->created_at ?? 'now')) ?></span>
                        </div>
                        <div class="cnt-bc-badge cnt-bc-badge-blue">
                            <i class="bi bi-person-check-fill"></i>
                            <span>By Editorial Team</span>
                        </div>
                        <div class="cnt-bc-badge cnt-bc-badge-amber">
                            <i class="bi bi-clock-history"></i>
                            <span>5 Min Technical Read</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row ">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image -->
                        <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <?php 
                            $image_path = FCPATH . 'uploads/blogs/' . @$query[0]->image;
                            if (@$query[0]->image && file_exists($image_path)): ?>
                                <img src="<?= base_url('uploads/blogs/' . @$query[0]->image) ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100 blog-details-img">
                            <?php else: ?>
                                <img src="<?= base_url('assets/images/about/about-showcase.webp') ?>" alt="Default Image" class="img-fluid w-100 blog-details-img">
                            <?php endif; ?>
                        </div>
                        
                        <!-- Meta Info -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= date('M d, Y', strtotime(@$query[0]->created_at)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By Admin</span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4 blog-details-title"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted">
                            <?= nl2br(@$query[0]->content) ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar sticky-top blog-sidebar-sticky">
                        <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                            <h5 class="fw-bold mb-4 pb-2 border-bottom blog-icon-primary">Recent Posts</h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image;
                                        $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                        $imagePath = ($image_file && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : base_url('assets/images/about/about-showcase.webp');
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item blog-post-link-item">
                                            <div class="flex-shrink-0">
                                                <img src="<?= $imagePath ?>" alt="thumb" class="rounded-3 shadow-sm blog-recent-post-img">
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 blog-post-title"><?= $post->title ?></h6>
                                                <small class="text-muted"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime($post->created_at)) ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No recent posts available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Sticky CTA Widget -->
                        <div class="bg-light p-4 rounded-4 shadow-sm text-center border-top border-4 blog-border-warning">
                            <div class="mb-3">
                                <i class="bi bi-headset blog-icon-lg-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Need Moving Help?</h5>
                            <p class="text-muted small mb-4">Get a quick and free estimate for your relocation directly from our experts.</p>
                            <button class="btn w-100 fw-bold py-2 rounded-pill shadow-sm blog-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold blog-icon-primary">Share this post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/images/about/packers_movers.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/images/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>