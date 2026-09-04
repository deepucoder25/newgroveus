<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    // SEO Services
    function seoServices()
    {
        $data['title'] = "Professional SEO Services | " . $this->comp['company3'];
        $data['description'] = "Boost your organic rankings and traffic with expert SEO services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "seo_services";
        echo Modules::run('template/layout2', $data);
    }

    function localSeo()
    {
        $data['title'] = "Local SEO Services | " . $this->comp['company3'];
        $data['description'] = "Dominate local search results and Google Maps with targeted local SEO solutions by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "local_seo";
        echo Modules::run('template/layout2', $data);
    }

    function technicalSeo()
    {
        $data['title'] = "Technical SEO Audit & Optimization | " . $this->comp['company3'];
        $data['description'] = "Enhance website performance, crawlability, indexation, and Core Web Vitals with technical SEO by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "technical_seo";
        echo Modules::run('template/layout2', $data);
    }

    function ecommerceSeo()
    {
        $data['title'] = "E-Commerce SEO Services | " . $this->comp['company3'];
        $data['description'] = "Increase online store visibility, product rankings, and revenue with e-commerce SEO from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "ecommerce_seo";
        echo Modules::run('template/layout2', $data);
    }

    function onPageSeo()
    {
        $data['title'] = "On-Page SEO Optimization | " . $this->comp['company3'];
        $data['description'] = "Optimize content, meta tags, heading structures, and internal linking with on-page SEO services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "on_page_seo";
        echo Modules::run('template/layout2', $data);
    }

    function linkBuilding()
    {
        $data['title'] = "Link Building & Off-Page SEO Services | " . $this->comp['company3'];
        $data['description'] = "Build high-authority backlinks and strengthen domain authority with link building services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "link_building";
        echo Modules::run('template/layout2', $data);
    }

    function internationalSeo()
    {
        $data['title'] = "International SEO Services | " . $this->comp['company3'];
        $data['description'] = "Expand your global digital presence and reach international audiences with expert international SEO services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "international_seo";
        echo Modules::run('template/layout2', $data);
    }

    function whiteLabelSeo()
    {
        $data['title'] = "White Label SEO Services | " . $this->comp['company3'];
        $data['description'] = "Scale your agency with premium white label SEO solutions and turnkey client fulfillment by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "white_label_seo";
        echo Modules::run('template/layout2', $data);
    }

    function nationwideSeo()
    {
        $data['title'] = "Nationwide SEO Services | " . $this->comp['company3'];
        $data['description'] = "Rank nationwide across competitive search terms with tailored countrywide SEO campaigns by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "nationwide_seo";
        echo Modules::run('template/layout2', $data);
    }

    function enterpriseSeo()
    {
        $data['title'] = "Enterprise SEO Services | " . $this->comp['company3'];
        $data['description'] = "Scalable enterprise SEO solutions for large-scale websites and corporations by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "enterprise_seo";
        echo Modules::run('template/layout2', $data);
    }

    // Social Media Marketing
    function socialMediaMarketing()
    {
        $data['title'] = "Social Media Marketing Services | " . $this->comp['company3'];
        $data['description'] = "Grow your brand presence, engagement, and conversions across social platforms with " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "social_media_marketing";
        echo Modules::run('template/layout2', $data);
    }

    // Other Services
    function otherServices()
    {
        $data['title'] = "Digital Marketing Services | " . $this->comp['company3'];
        $data['description'] = "Comprehensive digital marketing and web solutions from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "other_services";
        echo Modules::run('template/layout2', $data);
    }

    function ppcManagement()
    {
        $data['title'] = "PPC Management Services | " . $this->comp['company3'];
        $data['description'] = "Maximize ROI with expert Google Ads, Meta Ads, and Paid Search campaign management by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "ppc_management";
        echo Modules::run('template/layout2', $data);
    }

    function webDevelopment()
    {
        $data['title'] = "Web Design & Development Services | " . $this->comp['company3'];
        $data['description'] = "Modern, high-converting, and responsive web design and development services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "web_development";
        echo Modules::run('template/layout2', $data);
    }

    function contentMarketing()
    {
        $data['title'] = "Content Marketing Services | " . $this->comp['company3'];
        $data['description'] = "Drive engagement and organic growth with high-quality content marketing strategies from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "content_marketing";
        echo Modules::run('template/layout2', $data);
    }

    function croServices()
    {
        $data['title'] = "Conversion Rate Optimization (CRO) | " . $this->comp['company3'];
        $data['description'] = "Turn website visitors into paying customers with conversion rate optimization by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "cro_services";
        echo Modules::run('template/layout2', $data);
    }

    function emailMarketing()
    {
        $data['title'] = "Email Marketing Automation Services | " . $this->comp['company3'];
        $data['description'] = "Nurture leads and drive repeat sales with targeted email marketing campaigns by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "email_marketing";
        echo Modules::run('template/layout2', $data);
    }

    // Packages
    function packages()
    {
        $data['title'] = "Packages & Pricing Plans | " . $this->comp['company3'];
        $data['description'] = "Explore transparent, affordable packages and pricing tailored to your business needs at " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "packages";
        echo Modules::run('template/layout2', $data);
    }
}
