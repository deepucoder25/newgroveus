<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Web Design & Development',
    'bc_desc' => 'High-Performance, Fast & Responsive Websites',
    'breadcrumbs' => [
        ['name' => 'Other Services', 'url' => site_url('other-services')],
        ['name' => 'Web Design & Development']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Custom, Fast, and High-Converting Websites</h2>
                    <p>We build beautiful, mobile-first, and lightning-fast websites engineered to convert traffic into leads and scale effortlessly alongside your business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
