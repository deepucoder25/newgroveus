<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Nationwide SEO Services',
    'bc_desc' => 'High-Impact National SEO Campaigns for Broad Market Reach',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'Nationwide SEO Services']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Win Competitive National Keywords & Outrank Competitors</h2>
                    <p>Execute comprehensive, full-scale nationwide SEO campaigns designed to capture non-geo-restricted search terms and build market dominance across the country.</p>
                </div>
            </div>
        </div>
    </div>
</section>
