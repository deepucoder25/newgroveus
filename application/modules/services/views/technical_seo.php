<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Technical SEO',
    'bc_desc' => 'Site Architecture, Speed, Indexation & Core Web Vitals',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'Technical SEO']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Optimize Your Website Infrastructure for Search Engines</h2>
                    <p>Ensure search engine spiders can crawl, render, and index your website seamlessly with our in-depth technical audits, schema markup implementation, page speed enhancements, and mobile responsiveness tuning.</p>
                </div>
            </div>
        </div>
    </div>
</section>
