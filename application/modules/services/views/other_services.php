<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'All Digital & SEO Services',
    'bc_desc' => 'Comprehensive Suite of Search Engine Optimization & Growth Solutions',
    'breadcrumbs' => [
        ['name' => 'All Services']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <!-- SEO Services Grid -->
        <div class="mb-5">
            <h2 class="h3 fw-bold mb-4">Search Engine Optimization (SEO) Services</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Local SEO Services</h3>
                        <p class="text-muted small mb-3">Dominate Google Maps and local search queries in your target area.</p>
                        <a href="<?= site_url('local-seo-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">International SEO Services</h3>
                        <p class="text-muted small mb-3">Scale your global organic reach across multiple countries and languages.</p>
                        <a href="<?= site_url('international-seo-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">White Label SEO Services</h3>
                        <p class="text-muted small mb-3">Turnkey, client-ready SEO fulfillment solutions for agencies.</p>
                        <a href="<?= site_url('white-label-seo-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Ecommerce SEO Services</h3>
                        <p class="text-muted small mb-3">Drive product visibility, category rank, and sales for online stores.</p>
                        <a href="<?= site_url('ecommerce-seo-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Nationwide SEO Services</h3>
                        <p class="text-muted small mb-3">Capture high-volume national search terms and outrank major brands.</p>
                        <a href="<?= site_url('nationwide-seo-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Linkbuilding Services</h3>
                        <p class="text-muted small mb-3">Acquire high-quality, relevant editorial backlinks to build authority.</p>
                        <a href="<?= site_url('linkbuilding-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Digital Marketing Services Grid -->
        <div>
            <h2 class="h3 fw-bold mb-4">Digital Marketing & Web Solutions</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">PPC Management</h3>
                        <p class="text-muted small mb-3">High-converting Google Ads and paid advertising campaigns.</p>
                        <a href="<?= site_url('ppc-management-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Web Design & Development</h3>
                        <p class="text-muted small mb-3">Modern, fast, mobile-friendly websites engineered for conversion.</p>
                        <a href="<?= site_url('web-development-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Content Marketing</h3>
                        <p class="text-muted small mb-3">Strategic content creation that educates, engages, and converts visitors.</p>
                        <a href="<?= site_url('content-marketing-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Conversion Rate Optimization</h3>
                        <p class="text-muted small mb-3">Turn more of your existing traffic into paying clients and leads.</p>
                        <a href="<?= site_url('cro-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Email Marketing</h3>
                        <p class="text-muted small mb-3">Automated email workflows and nurturing sequences that drive repeat sales.</p>
                        <a href="<?= site_url('email-marketing-services') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                        <h3 class="h5 fw-bold mb-2">Social Media Marketing</h3>
                        <p class="text-muted small mb-3">Build an active community and generate direct inquiries across social channels.</p>
                        <a href="<?= site_url('social-media-marketing') ?>" class="text-danger fw-semibold text-decoration-none">Learn More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
