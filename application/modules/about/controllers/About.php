<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our <?= $experience ?> Years Legacy, infrastructure, expert team, mission, and vision in the packing and moving industry.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about packing and shifting charges, transit insurance, delivery timeline, tracking, and restricted items at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " home shifting, vehicle transportation, and office relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function caseStudies()
    {
        $data['title'] = "Case Studies & Client Success Stories | " . $this->comp['company3'];
        $data['description'] = "Explore proven case studies and real-world results achieved by " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "case_studies";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | Transparent Data Protection | " . $this->comp['company3'];
        $data['description'] = "Learn how " . $this->comp['company3'] . " collects, safeguards, and processes personal data. Our Privacy Policy ensures complete compliance with global data protection standards (GDPR, DPDP Act 2023) and SSL security.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | Service Agreement & Policies | " . $this->comp['company3'];
        $data['description'] = "Read the official Terms and Conditions governing digital solutions, web development, SEO, and marketing services delivered by " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

