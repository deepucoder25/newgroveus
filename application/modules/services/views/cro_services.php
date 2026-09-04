<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Conversion Rate Optimization (CRO)',
    'bc_desc' => 'Turn Traffic into Long-Term Paying Clients',
    'breadcrumbs' => [
        ['name' => 'Other Services', 'url' => site_url('other-services')],
        ['name' => 'CRO Services']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                    <h2>Maximize Value from Every Visitor with Data-Driven CRO</h2>
                    <p>Through user-journey analysis, heatmaps, UX optimization, and A/B testing, we turn existing visitors into valuable conversions and increase your customer lifetime value.</p>
                </div>
            </div>
        </div>
    </div>
</section>
