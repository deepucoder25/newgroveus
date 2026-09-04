<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'International SEO Services',
    'bc_desc' => 'Expand Your Global Digital Presence & Reach International Audiences',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'International SEO Services']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Global Organic Growth with Multi-Country & Multilingual SEO</h2>
                    <p>Drive organic traffic and revenue worldwide with localized hreflang optimization, ccTLD and subfolder architectures, geo-targeted keyword strategies, and global search engine compliance.</p>
                </div>
            </div>
        </div>
    </div>
</section>
