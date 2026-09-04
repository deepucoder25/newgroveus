<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'White Label SEO Services',
    'bc_desc' => 'Scale Your Agency with Turnkey White Label SEO Solutions',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'White Label SEO Services']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Turnkey SEO Fulfillment for Agencies & Partners</h2>
                    <p>Deliver award-winning search engine optimization campaigns to your clients under your own brand. We handle technical audits, on-page optimization, content, and link building while you grow your revenue.</p>
                </div>
            </div>
        </div>
    </div>
</section>
