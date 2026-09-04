<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'On-Page SEO',
    'bc_desc' => 'Content Optimization, Meta Data & Structure',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'On-Page SEO']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Perfect On-Page Factors for Maximum Relevancy</h2>
                    <p>Fine-tune every page of your site with semantic keyword alignment, high-converting metadata, structured heading tags, internal linking, and content optimizations.</p>
                </div>
            </div>
        </div>
    </div>
</section>
