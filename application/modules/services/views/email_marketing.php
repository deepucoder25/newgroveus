<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Email Marketing & Automation',
    'bc_desc' => 'Targeted Campaigns & Automated Drip Funnels',
    'breadcrumbs' => [
        ['name' => 'Other Services', 'url' => site_url('other-services')],
        ['name' => 'Email Marketing']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Engage Leads & Drive Customer Retention with Email Marketing</h2>
                    <p>Automate your sales pipelines and nurture leads with personalized, high-open-rate email marketing campaigns and automated workflows.</p>
                </div>
            </div>
        </div>
    </div>
</section>
