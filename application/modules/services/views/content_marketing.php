<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Content Marketing',
    'bc_desc' => 'Authority Content Strategy & Creation',
    'breadcrumbs' => [
        ['name' => 'Other Services', 'url' => site_url('other-services')],
        ['name' => 'Content Marketing']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Fuel Your Brand Growth with Strategic Content Marketing</h2>
                    <p>We craft SEO-driven blog posts, authoritative whitepapers, infographics, and landing page copy that engage your audience and build topical authority in your industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
