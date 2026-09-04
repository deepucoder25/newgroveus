<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'E-Commerce SEO Services',
    'bc_desc' => 'Drive Qualified Buyers to Your Online Store',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'E-Commerce SEO']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Scale Your Online Store Traffic & Sales</h2>
                    <p>From product page optimization and category taxonomy refinement to rich snippet structured data, we help e-commerce brands maximize sales and outrank competition.</p>
                </div>
            </div>
        </div>
    </div>
</section>
