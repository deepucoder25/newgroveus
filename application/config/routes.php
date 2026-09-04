<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

// Company Routes
$route['about-us'] = 'about/index';
$route['contact-us'] = 'contacts/index';
$route['faqs'] = 'about/faqs';
$route['photo-gallery'] = "gallery/photo_gallery";
$route['video-gallery'] = "gallery/video_gallery";
$route['testimonials'] = 'about/testimonials';
$route['reviews'] = 'reviews/index';
$route['about/submit_review'] = 'reviews/submit';
$route['blog/view'] = 'blog/view';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/([a-z0-9-]+)'] = 'blog/read/$1';
$route['blog'] = 'blog/view';
$route['privacy-policy'] = 'about/privacy';
$route['terms-and-conditions'] = 'about/terms';


// City Services Routes
$route["home-shifting-in-(:any)"] = "city_services/home_shifting/$1";
$route["office-shifting-in-(:any)"] = "city_services/office_shifting/$1";
$route["car-transport-in-(:any)"] = "city_services/car_transport/$1";
$route["bike-transport-in-(:any)"] = "city_services/bike_transport/$1";

// SEO Services Routes
$route["seo-services"] = "services/seoServices";
$route["local-seo"] = "services/localSeo";
$route["local-seo-services"] = "services/localSeo";
$route["international-seo-services"] = "services/internationalSeo";
$route["white-label-seo-services"] = "services/whiteLabelSeo";
$route["ecommerce-seo"] = "services/ecommerceSeo";
$route["ecommerce-seo-services"] = "services/ecommerceSeo";
$route["nationwide-seo-services"] = "services/nationwideSeo";
$route["link-building-services"] = "services/linkBuilding";
$route["linkbuilding-services"] = "services/linkBuilding";
$route["technical-seo"] = "services/technicalSeo";
$route["on-page-seo"] = "services/onPageSeo";
$route["enterprise-seo"] = "services/enterpriseSeo";

// Social Media Marketing Route
$route["social-media-marketing"] = "services/socialMediaMarketing";

// Other Services Routes
$route["services"] = "services/otherServices";
$route["all-services"] = "services/otherServices";
$route["other-services"] = "services/otherServices";
$route["ppc-management-services"] = "services/ppcManagement";
$route["web-development-services"] = "services/webDevelopment";
$route["content-marketing-services"] = "services/contentMarketing";
$route["cro-services"] = "services/croServices";
$route["email-marketing-services"] = "services/emailMarketing";

// Case Studies & Packages
$route["case-studies"] = "about/caseStudies";
$route["packages"] = "services/packages";

// Legacy Services Routes
$route["our-services"] = "services/index";
$route["home-relocation"] = "services/homeShifting";
$route["office-relocation"] = "services/office";
$route["bike-transportation"] = "services/bike";
$route["car-transportation"] = "services/car";
$route["packing-and-moving"] = "services/packingMoving";
$route["loading-unloading"] = "services/loadingUnloading";

// Legacy/Compatibility Routes
$route["storage-services"] = "services/storage";
$route["car-transportation-service"] = "services/car";
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";

// Branch/City Routes
$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["bihar"] = "packers_movers/state_services/bihar";
$route["delhi"] = "packers_movers/state_services/delhi";
$route["west-bengal"] = "packers_movers/state_services/west-bengal";
$route["gujarat"] = "packers_movers/state_services/gujarat";
$route["punjab"] = "packers_movers/state_services/punjab";
$route["maharashtra"] = "packers_movers/state_services/maharashtra";
$route["haryana"] = "packers_movers/state_services/haryana";
$route["rajasthan"] = "packers_movers/state_services/rajasthan";
$route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
$route["jharkhand"] = "packers_movers/state_services/jharkhand";
$route["assam"] = "packers_movers/state_services/assam";
$route["karnataka"] = "packers_movers/state_services/karnataka";
$route["bangalore"] = "packers_movers/state_services/bangalore";
$route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";
$route["(:any).htm"] = "home/error";
$route['translate_uri_dashes'] = FALSE;