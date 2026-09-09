<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$blog = @$query[0];
$title = !empty($blog->title) ? htmlspecialchars($blog->title) : 'Blog Article';
$date_raw = !empty($blog->date) ? $blog->date : (!empty($blog->created_at) ? $blog->created_at : date('Y-m-d'));
$author = !empty($blog->author) ? htmlspecialchars($blog->author) : 'Editorial Team';

// Image handling - only set if real image exists
$image_name = $blog->image ?? '';
$has_image = false;
$img = '';

if (!empty($image_name)) {
    if (substr($image_name, 0, 4) === 'http') {
        $has_image = true;
        $img = $image_name;
    } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_name)) {
        $has_image = true;
        $img = base_url('assets/uploads/blog/' . $image_name);
    } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_name)) {
        $has_image = true;
        $img = base_url('uploads/blogs/' . $image_name);
    }
}
?>

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
                            'bc_h1' => $title,
                            'bc_desc' => word_limiter(strip_tags($blog->description ?? ''), 120),
                            'breadcrumbs' => [
                                ['name' => 'Blog', 'url' => site_url('blog')],
                                ['name' => $title]
                            ]
                        ]); ?>
                    </div>

                    <!-- Main Hero Heading -->
                    <h1 class="cnt-bc-hero-title mb-1">
                        <?= $title ?>
                    </h1>

                    <!-- Short Concise Subtitle -->
                    <p class="cnt-bc-hero-desc">
                        Published on <?= date('F d, Y', strtotime($date_raw)) ?> • By <?= $author ?>
                    </p>
                </div>

                <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                    <div class="cnt-bc-hero-badges">
                        <div class="cnt-bc-badge">
                            <span class="cnt-status-dot cnt-dot-green"></span>
                            <span><?= date('M d, Y', strtotime($date_raw)) ?></span>
                        </div>
                        <div class="cnt-bc-badge cnt-bc-badge-blue">
                            <i class="bi bi-person-check-fill"></i>
                            <span><?= $author ?></span>
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

    <!-- =========================================================================
         2. BLOG SINGLE ARTICLE CONTENT & SIDEBAR
         ========================================================================= -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row g-4">
                
                <!-- Main Article Column -->
                <div class="col-lg-8">
                    <article class="blog-details-article">
                        
                        <?php if ($has_image): ?>
                        <!-- Featured Header Image -->
                        <div class="blog-featured-img-box">
                            <img src="<?= $img ?>" 
                                 alt="<?= $title ?>" 
                                 class="w-100 img-fluid">
                        </div>
                        <?php endif; ?>
                        
                        <!-- Meta Info Bar -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom gap-2">
                            <div class="d-flex flex-wrap gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar-event text-danger"></i> <?= date('M d, Y', strtotime($date_raw)) ?>
                                </span>
                                <span class="d-flex align-items-center gap-2">
                                    <i class="bi bi-person-circle text-success"></i> By <?= $author ?>
                                </span>
                                <?php if (!empty($blog->views)): ?>
                                <span class="d-flex align-items-center gap-2">
                                    <i class="bi bi-eye text-primary"></i> <?= (int)$blog->views ?> Views
                                </span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary px-3 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Article
                                </button>
                            </div>
                        </div>

                        <!-- Main Article Body -->
                        <h2 class="fw-bold mb-4 text-dark" style="font-size: 26px; line-height: 1.35;"><?= $title ?></h2>
                        
                        <div class="blog-content-wrapper text-secondary" style="font-size: 15.5px; line-height: 1.8;">
                            <?= nl2br($blog->description ?? '') ?>
                        </div>

                        <?php if (!empty($blog->tags)): ?>
                        <!-- Tags -->
                        <div class="mt-4 pt-3 border-top d-flex flex-wrap align-items-center gap-2">
                            <span class="fw-bold text-dark small me-1"><i class="bi bi-tags-fill text-danger me-1"></i>Tags:</span>
                            <?php 
                            $tags = explode(',', $blog->tags);
                            foreach ($tags as $t): 
                                $t_clean = trim($t);
                                if (!empty($t_clean)):
                            ?>
                                <span class="badge bg-light text-dark border px-3 py-2"><?= htmlspecialchars($t_clean) ?></span>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                        <?php endif; ?>

                    </article>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <aside class="sticky-top" style="top: 100px; z-index: 10;">
                        
                        <!-- Recent Posts Widget -->
                        <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                            <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                                <i class="bi bi-journal-richtext text-danger me-2"></i>Recent Articles
                            </h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_obj): 
                                        $post = (object)$post_obj;
                                        if (isset($blog->b_id) && isset($post->b_id) && $blog->b_id == $post->b_id) continue;
                                        
                                        $p_img_file = $post->image ?? '';
                                        $p_has_img = false;
                                        $p_img = '';
                                        if (!empty($p_img_file) && substr($p_img_file, 0, 4) === 'http') {
                                            $p_has_img = true;
                                            $p_img = $p_img_file;
                                        } elseif (!empty($p_img_file) && file_exists(FCPATH . 'assets/uploads/blog/' . $p_img_file)) {
                                            $p_has_img = true;
                                            $p_img = base_url('assets/uploads/blog/' . $p_img_file);
                                        } elseif (!empty($p_img_file) && file_exists(FCPATH . 'uploads/blogs/' . $p_img_file)) {
                                            $p_has_img = true;
                                            $p_img = base_url('uploads/blogs/' . $p_img_file);
                                        }

                                        $p_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        $p_date = !empty($post->date) ? $post->date : (!empty($post->created_at) ? $post->created_at : date('Y-m-d'));
                                    ?>
                                        <a href="<?= site_url('blog/' . $p_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none text-dark p-2 rounded-3 border bg-light">
                                            <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-white border" style="width: 54px; height: 54px; border-radius: 8px; overflow: hidden;">
                                                <?php if ($p_has_img): ?>
                                                    <img src="<?= $p_img ?>" alt="<?= htmlspecialchars($post->title) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="bi bi-file-earmark-text text-danger" style="font-size: 22px;"></i>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 small" style="line-height: 1.3; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?= $post->title ?></h6>
                                                <small class="text-muted" style="font-size: 11.5px;"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime($p_date)) ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted small mb-0">No other articles available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Technical Consultation CTA Widget -->
                        <div class="bg-dark text-white p-4 rounded-4 shadow-sm text-center position-relative overflow-hidden">
                            <div class="mb-3 text-danger fs-2">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Ready to Scale Your Software?</h5>
                            <p class="text-secondary small mb-4" style="line-height: 1.6;">Schedule a strategy session with our engineering consultants today.</p>
                            <a href="<?= site_url('contact-us') ?>" class="btn btn-danger w-100 fw-bold py-2 rounded-3">
                                <i class="bi bi-chat-dots-fill me-2"></i> Request Consultation
                            </a>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg p-3">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold text-dark">Share This Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-3">
                <div class="d-grid gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(current_url()) ?>" target="_blank" class="btn btn-primary py-2 rounded-3 fw-bold">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()) ?>&text=<?= urlencode($title) ?>" target="_blank" class="btn btn-dark py-2 rounded-3 fw-bold">
                        <i class="bi bi-twitter-x me-2"></i> Share on X (Twitter)
                    </a>
                    <a href="https://api.whatsapp.com/send?text=<?= urlencode($title . ' ' . current_url()) ?>" target="_blank" class="btn btn-success py-2 rounded-3 fw-bold">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes($title) ?>",
    "image": ["<?= $img ?>"],
    "datePublished": "<?= date('c', strtotime($date_raw)) ?>",
    "author": {
        "@type": "Person",
        "name": "<?= addslashes($author) ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'Groveus Informatics' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/images/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags($blog->description ?? ''), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>