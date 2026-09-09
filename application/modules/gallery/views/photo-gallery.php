<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

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
                <pattern id="glyBcDotPattern" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="glyBcGridPattern" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.3" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="glyBcSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.16" />
                    <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.05" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="glyBcSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.14" />
                    <stop offset="60%" stop-color="#38bdf8" stop-opacity="0.04" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#glyBcDotPattern)" />
            <rect width="100%" height="100%" fill="url(#glyBcGridPattern)" />
            <path d="M-50,65 C320,180 720,10 1200,110 C1600,200 1900,40 2200,80" fill="none" stroke="url(#glyBcSweepRed)" stroke-width="1.8" />
            <path d="M-20,130 C380,40 820,190 1300,60 C1700,-10 2000,120 2300,90" fill="none" stroke="url(#glyBcSweepBlue)" stroke-width="1.5" stroke-dasharray="6 6" />
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
                        'bc_h1' => 'Our Visual Showcase &amp; Media Gallery',
                        'bc_desc' => 'Explore moments from our technology labs, client milestones, team collaborations, and engineering innovation showcase.',
                        'breadcrumbs' => [
                            ['name' => 'Photo Gallery']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="cnt-bc-hero-title mb-1">
                    Visual Showcase &amp; <span class="cnt-title-highlight">Photo Gallery</span>
                </h1>

                <!-- Short Concise Subtitle -->
                <p class="cnt-bc-hero-desc">
                    Explore visual highlights of our digital engineering projects, office showcases, client presentations, and tech innovations.
                </p>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="cnt-bc-hero-badges">
                    <div class="cnt-bc-badge">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span><?= !empty($photos) ? count($photos) . ' Photos Online' : 'Active Media Gallery' ?></span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-blue">
                        <i class="bi bi-images"></i>
                        <span>High-Resolution Media</span>
                    </div>
                    <div class="cnt-bc-badge cnt-bc-badge-amber">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>Verified Project Media</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. PHOTO GALLERY GRID SECTION
     ========================================================================= -->
<section class="gallery-section">
    <div class="container">
        
        <!-- Section Top Filter/Heading -->
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-2 border-bottom">
            <div>
                <span class="badge bg-danger px-3 py-2 fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">
                    <i class="bi bi-camera-fill me-1"></i> Gallery Collection
                </span>
                <h2 class="fs-4 fw-bold text-dark mt-2 mb-0">Explore Our Highlights</h2>
            </div>
            <div class="text-secondary small mt-2 mt-md-0">
                <i class="bi bi-info-circle me-1"></i> Click any photo to expand in full high-resolution view
            </div>
        </div>

        <!-- Photos Grid -->
        <div class="row g-4">
            <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): 
                    // Support admin uploaded image path
                    $photo_img = !empty($photo->image) ? base_url('assets/uploads/gallery/' . $photo->image) : base_url('assets/images/about/about-showcase.webp');
                    $photo_title = !empty($photo->title) ? htmlspecialchars($photo->title) : (!empty($company3) ? $company3 . ' Showcase' : 'Groveus Gallery');
                    $album = !empty($photo->album_name) ? htmlspecialchars($photo->album_name) : 'Showcase';
                ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card gallery-photo-card h-100">
                        <div class="gallery-img-wrapper" onclick="openGalleryLightbox('<?= $photo_img ?>', '<?= addslashes($photo_title) ?>', '<?= addslashes($album) ?>')">
                            <img loading="lazy" 
                                 src="<?= $photo_img ?>" 
                                 class="gallery-img" 
                                 alt="<?= $photo_title ?>"
                                 onerror="this.onerror=null; this.src='<?= base_url('assets/images/about/about-showcase.webp') ?>';">
                            <div class="gallery-hover-overlay">
                                <div class="gallery-zoom-btn">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-body">
                            <span class="gallery-album-badge">
                                <i class="bi bi-folder-fill me-1"></i><?= $album ?>
                            </span>
                            <h3 class="gallery-title"><?= $photo_title ?></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Clean Empty State -->
                <div class="col-12">
                    <div class="text-center py-5 bg-white rounded-4 shadow-sm border p-4">
                        <div class="display-6 text-danger mb-3">
                            <i class="bi bi-images"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">No Gallery Photos Uploaded Yet</h4>
                        <p class="text-secondary small mb-0">Photos uploaded via the admin panel will automatically appear here.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Lightbox Modal for Full Resolution Preview -->
<div class="modal fade" id="galleryLightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content gallery-modal-content">
            <div class="modal-header border-0 pb-0">
                <div>
                    <span class="badge bg-danger px-3 py-1 mb-1" id="lightboxAlbumBadge" style="font-size: 11px;">Album</span>
                    <h5 class="modal-title text-white fw-bold" id="lightboxTitle">Photo Preview</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-3">
                <img src="" alt="Preview" class="gallery-modal-img img-fluid" id="lightboxImg">
            </div>
        </div>
    </div>
</div>

<script>
function openGalleryLightbox(imgSrc, title, album) {
    document.getElementById('lightboxImg').src = imgSrc;
    document.getElementById('lightboxTitle').textContent = title;
    document.getElementById('lightboxAlbumBadge').textContent = album;
    var modalEl = document.getElementById('galleryLightboxModal');
    var modal = new bootstrap.Modal(modalEl);
    modal.show();
}
</script>
