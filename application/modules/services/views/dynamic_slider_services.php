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

<!-- Clean Service Hero / Slider CSS (No Continuous Animations) -->
<style>
/* Service Hero Section */
.service-hero-section {
    background-color: #ffffff;
    background-image: 
        radial-gradient(circle at 12% 88%, rgba(254, 226, 226, 0.45) 0%, rgba(255, 255, 255, 0) 45%),
        radial-gradient(circle at 90% 12%, rgba(254, 226, 226, 0.5) 0%, rgba(255, 255, 255, 0) 40%);
    position: relative;
    overflow: hidden;
}

/* Organic Ambient Background Blobs with Gentle Breathing */
.service-hero-shape-tr {
    position: absolute;
    top: -50px;
    right: -80px;
    width: 360px;
    height: 360px;
    background: radial-gradient(circle, rgba(254, 215, 215, 0.55) 0%, rgba(254, 242, 242, 0.2) 60%, transparent 80%);
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
    animation: heroBlobFloat1 9s ease-in-out infinite alternate;
}

.service-hero-shape-bl {
    position: absolute;
    bottom: -120px;
    left: -120px;
    width: 420px;
    height: 420px;
    background: radial-gradient(circle, rgba(254, 215, 215, 0.6) 0%, rgba(254, 242, 242, 0.25) 55%, transparent 75%);
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
    animation: heroBlobFloat2 11s ease-in-out infinite alternate;
}

@keyframes heroBlobFloat1 {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(-20px, 20px) scale(1.08); }
}

@keyframes heroBlobFloat2 {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(20px, -18px) scale(1.06); }
}

/* Typography & Titles */
.service-hero-title {
    color: #0f172a;
    font-size: clamp(2.1rem, 3.5vw, 3.1rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.025em;
}

.text-danger-highlight {
    color: #c91a25;
    display: inline-block;
}

.service-hero-desc {
    color: #475569;
    font-size: 15px;
    line-height: 1.65;
    max-width: 480px;
}

/* CTA Pill Button */
.btn-service-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #d91c24 0%, #b9131a 100%);
    color: #ffffff !important;
    font-size: 15px;
    font-weight: 700;
    padding: 12px 28px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 22px rgba(217, 28, 36, 0.28);
    border: none;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.btn-service-cta:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 28px rgba(217, 28, 36, 0.38);
    color: #ffffff !important;
}

.btn-service-cta i {
    transition: transform 0.3s ease;
}

.btn-service-cta:hover i {
    transform: translateX(4px);
}

/* Feature Highlight Badges (Strict Single Row on All Devices) */
.service-hero-highlights {
    border-top: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    width: 100%;
}

.service-highlight-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    flex: 1 1 0;
    min-width: 0;
    transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    cursor: default;
}

.service-highlight-item:hover {
    transform: translateY(-2px);
}

.service-highlight-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #fee2e2;
    color: #c91a25;
    display: grid;
    place-items: center;
    font-size: 16px;
    flex-shrink: 0;
    border: 1px solid rgba(201, 26, 37, 0.15);
    transition: all 0.3s ease;
}

.service-highlight-item:hover .service-highlight-icon {
    background: #c91a25;
    color: #ffffff;
    transform: scale(1.08) rotate(-4deg);
    box-shadow: 0 4px 12px rgba(201, 26, 37, 0.3);
}

.service-highlight-text {
    min-width: 0;
}

.service-highlight-text strong {
    display: block;
    font-size: 12.5px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.15;
    white-space: nowrap;
}

.service-highlight-text span {
    display: block;
    font-size: 11.5px;
    font-weight: 600;
    color: #64748b;
    line-height: 1.15;
    white-space: nowrap;
}

/* SVG Artwork Stage - Smooth Levitation & 3D Interactive Hover */
.service-mockup-wrapper {
    position: relative;
    width: 100%;
    max-width: 680px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    perspective: 1200px;
    cursor: pointer;
}

.service-mockup-inner {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), filter 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    transform-style: preserve-3d;
    animation: serviceSvgFloat 6s ease-in-out infinite;
    will-change: transform;
}

.service-mockup-wrapper:hover .service-mockup-inner {
    animation-play-state: paused;
    transform: translateY(-10px) scale(1.025);
    filter: drop-shadow(0 25px 40px rgba(201, 26, 37, 0.12)) drop-shadow(0 10px 20px rgba(15, 23, 42, 0.06));
}

.service-mockup-wrapper svg {
    width: 100%;
    height: auto;
    display: block;
    overflow: visible;
    filter: drop-shadow(0 15px 30px rgba(15, 23, 42, 0.07));
    transition: filter 0.5s ease;
}

@keyframes serviceSvgFloat {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-8px) rotate(0.35deg);
    }
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .service-hero-desc {
        max-width: 100%;
    }
}

@media (max-width: 576px) {
    .service-hero-highlights {
        gap: 6px !important;
        padding-top: 14px !important;
    }
    .service-highlight-item {
        gap: 5px;
    }
    .service-highlight-icon {
        width: 30px;
        height: 30px;
        font-size: 13px;
    }
    .service-highlight-text strong {
        font-size: 10.5px;
    }
    .service-highlight-text span {
        font-size: 8.5px;
    }
}

@media (max-width: 380px) {
    .service-hero-highlights {
        gap: 4px !important;
    }
    .service-highlight-item {
        gap: 4px;
    }
    .service-highlight-icon {
        width: 25px;
        height: 25px;
        font-size: 11px;
    }
    .service-highlight-text strong {
        font-size: 9.5px;
    }
    .service-highlight-text span {
        font-size: 7.5px;
    }
}
</style>

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
