<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'PPC Management Services',
    'bc_desc' => 'High-ROI Paid Advertising on Google & Social Media',
    'breadcrumbs' => [
        ['name' => 'Other Services', 'url' => site_url('other-services')],
        ['name' => 'PPC Management']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Targeted Paid Campaigns That Deliver Maximum ROI</h2>
                    <p>Maximize your return on ad spend with precision-targeted Google Ads, Bing Ads, and Social PPC management that brings qualified leads to your business immediately.</p>
                </div>
            </div>
        </div>
    </div>
</section>
