<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Enterprise SEO Services',
    'bc_desc' => 'Scalable Solutions for Large Web Platforms',
    'breadcrumbs' => [
        ['name' => 'SEO Services', 'url' => site_url('seo-services')],
        ['name' => 'Enterprise SEO']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Enterprise-Level Search Engine Optimization</h2>
                    <p>Designed for large organizations with thousands of pages. We implement scalable SEO architectures, automated workflow processes, and high-impact strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>
