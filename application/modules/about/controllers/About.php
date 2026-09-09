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

