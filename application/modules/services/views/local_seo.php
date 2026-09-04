<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Local SEO Services',
    'bc_desc' => 'Dominate Local Search & Google Maps Rankings',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'Local SEO']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Capture High-Intent Local Customers with Targeted Local SEO</h2>
                    <p>Connect with ready-to-buy customers in your target neighborhood, city, or region. We optimize your Google Business Profile, local citations, NAP consistency, and geo-targeted landing pages.</p>
                </div>
            </div>
        </div>
    </div>
</section>
