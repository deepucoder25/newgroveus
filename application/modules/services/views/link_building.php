<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Link Building & Off-Page SEO',
    'bc_desc' => 'High-Authority Backlinks & Digital PR',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'Link Building']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Build Domain Authority with Safe, White-Hat Link Building</h2>
                    <p>Earn trusted, authoritative backlinks from top industry publications and high-DA domains to boost your search rankings and outcompete competitors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
