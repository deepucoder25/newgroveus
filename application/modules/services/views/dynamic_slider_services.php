<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dynamic Services Hero / Slider Component (Clean & Static)
 * 
 * Expected / Supported Parameters:
 * @var array  $breadcrumbs   Array of breadcrumb items e.g. [['name' => 'Services', 'url' => site_url('services')], ['name' => 'Local SEO Services']]
 * @var string $title         Hero main title (supports HTML/highlight spans)
 * @var string $description   Hero subtitle/paragraph description
 * @var string $cta_text      Call to action button label (default: 'Get Started')
 * @var string $cta_url       Call to action link URL (default: site_url('contact-us'))
 * @var string $cta_icon      Bootstrap icon class for CTA (default: 'bi bi-arrow-right')
 * @var array  $highlights    Array of 3 feature badges: [['icon' => 'bi bi-search', 'title' => 'Higher', 'subtitle' => 'Rankings'], ...]
 * @var string $svg           Raw SVG code or HTML for the right column illustration
 */

$breadcrumbs = isset($breadcrumbs) ? $breadcrumbs : [];
$title       = isset($title) ? $title : '';
$description = isset($description) ? $description : '';
$cta_text    = isset($cta_text) ? $cta_text : 'Get Started';
$cta_url     = isset($cta_url) ? $cta_url : site_url('contact-us');
$cta_icon    = isset($cta_icon) ? $cta_icon : 'bi bi-arrow-right';
$highlights  = isset($highlights) && is_array($highlights) ? $highlights : [];
$svg         = isset($svg) ? $svg : '';
?>
<!-- Hero Section Container -->
<section class="service-hero-section position-relative overflow-hidden py-4" itemscope itemtype="https://schema.org/WPHeader">
    <!-- Ambient Background Blobs -->
    <div class="service-hero-shape-tr"></div>
    <div class="service-hero-shape-bl"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center gy-5">
            
            <!-- Left Column: Dynamic Content -->
            <div class="col-12 col-lg-6 pe-lg-4">
                
                <!-- Dynamic Breadcrumbs Pill Component -->
                <?php if (!empty($breadcrumbs)): ?>
                <div class="mb-3">
                    <?php $this->load->view('about/dynamic_breadcrumbs', [
                        'breadcrumbs' => $breadcrumbs
                    ]); ?>
                </div>
                <?php endif; ?>

                <!-- Dynamic Hero Heading -->
                <?php if (!empty($title)): ?>
                <h1 class="service-hero-title mb-3" itemprop="name">
                    <?= $title ?>
                </h1>
                <?php endif; ?>

                <!-- Dynamic Subtitle Description -->
                <?php if (!empty($description)): ?>
                <p class="service-hero-desc mb-4" itemprop="description">
                    <?= $description ?>
                </p>
                <?php endif; ?>

                <!-- Dynamic CTA Button -->
                <?php if (!empty($cta_text)): ?>
                <div class="service-hero-cta mb-4 mb-lg-5">
                    <a href="<?= $cta_url ?>" class="btn-service-cta">
                        <span><?= $cta_text ?></span>
                        <?php if (!empty($cta_icon)): ?>
                        <i class="<?= $cta_icon ?>"></i>
                        <?php endif; ?>
                    </a>
                </div>
                <?php endif; ?>

                <!-- Dynamic Feature Highlight Badges -->
                <?php if (!empty($highlights)): ?>
                <div class="service-hero-highlights pt-4">
                    <?php foreach ($highlights as $item): ?>
                    <div class="service-highlight-item">
                        <div class="service-highlight-icon">
                            <i class="<?= isset($item['icon']) ? $item['icon'] : 'bi bi-check-lg' ?>"></i>
                        </div>
                        <div class="service-highlight-text">
                            <strong><?= isset($item['title']) ? $item['title'] : '' ?></strong>
                            <span><?= isset($item['subtitle']) ? $item['subtitle'] : '' ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>

            <!-- Right Column: Vector Artwork SVG Stage -->
            <div class="col-12 col-lg-6">
                <div class="service-mockup-wrapper">
                    <div class="service-mockup-inner">
                        <?= $svg ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var wrapper = document.querySelector('.service-mockup-wrapper');
    var inner = document.querySelector('.service-mockup-inner');
    if (!wrapper || !inner) return;

    var rafId = null;
    var targetRotateX = 0, targetRotateY = 0;
    var currentRotateX = 0, currentRotateY = 0;
    var isHovered = false;

    function updateTilt() {
        if (isHovered) {
            currentRotateX += (targetRotateX - currentRotateX) * 0.12;
            currentRotateY += (targetRotateY - currentRotateY) * 0.12;
            inner.style.transform = 'translateY(-10px) scale(1.025) rotateX(' + currentRotateX.toFixed(2) + 'deg) rotateY(' + currentRotateY.toFixed(2) + 'deg)';
            rafId = requestAnimationFrame(updateTilt);
        } else {
            currentRotateX += (0 - currentRotateX) * 0.15;
            currentRotateY += (0 - currentRotateY) * 0.15;
            if (Math.abs(currentRotateX) > 0.05 || Math.abs(currentRotateY) > 0.05) {
                inner.style.transform = 'translateY(0px) scale(1) rotateX(' + currentRotateX.toFixed(2) + 'deg) rotateY(' + currentRotateY.toFixed(2) + 'deg)';
                rafId = requestAnimationFrame(updateTilt);
            } else {
                inner.style.transform = '';
                cancelAnimationFrame(rafId);
                rafId = null;
            }
        }
    }

    wrapper.addEventListener('mouseenter', function() {
        isHovered = true;
        if (!rafId) rafId = requestAnimationFrame(updateTilt);
    });

    wrapper.addEventListener('mousemove', function(e) {
        var rect = wrapper.getBoundingClientRect();
        var x = e.clientX - rect.left - rect.width / 2;
        var y = e.clientY - rect.top - rect.height / 2;
        targetRotateY = (x / (rect.width / 2)) * 7; // max 7 deg
        targetRotateX = -(y / (rect.height / 2)) * 7;
    });

    wrapper.addEventListener('mouseleave', function() {
        isHovered = false;
        targetRotateX = 0;
        targetRotateY = 0;
    });
});
</script>
