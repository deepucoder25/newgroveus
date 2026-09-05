<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic business context if provided, with robust SEO fallbacks
$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';
$companyExperience = isset($experience) && !empty($experience) ? $experience : '10+';
$companyLocation = isset($addressRegion) && !empty($addressRegion) ? $addressRegion : 'USA & Global';
$bgImageUrl = base_url('assets/images/about/about-presentation.jpg');
?>

<!-- ========================================================================= -->
<!-- ABOUT US PRESENTATION SHOWCASE SECTION (SEO OPTIMIZED & FULLY RESPONSIVE) -->
<!-- ========================================================================= -->
<section class="about-presentation-section" id="aboutUsSection" itemscope itemtype="https://schema.org/AboutPage" aria-label="About Our Presentation Design Services">
    <div class="container py-4 py-lg-5">
        
        <!-- Presentation Slide Container with Background Image & Subtle Translucent Overlay -->
        <div class="about-presentation-card shadow position-relative" style="--about-bg-img: url('<?= $bgImageUrl ?>');">
            
            <!-- Soft Translucent Gradient Backdrop (Balances Background Visibility & Text Legibility) -->
            <div class="about-white-backdrop" aria-hidden="true"></div>

            <div class="row g-0 position-relative about-card-content align-items-stretch">
                
                <!-- Left Column: Background Image Showcase & 'About Us' Badge -->
                <div class="col-lg-5 col-12 position-relative about-left-area">
                    <div class="about-title-banner" role="heading" aria-level="2">
                        <h2 class="about-banner-heading m-0" itemprop="headline">About Us</h2>
                    </div>
                </div>

                <!-- Right Column: Content with Feature Nodes on Soft-Veiled Image -->
                <div class="col-lg-7 col-12 position-relative about-right-area">
                    
                    <div class="about-features-container">
                        
                        <!-- Feature Item 1: Multi-Industry Custom Designs -->
                        <article class="about-feature-row d-flex align-items-center" itemscope itemtype="https://schema.org/ListItem">
                            <div class="about-icon-node-wrap flex-shrink-0">
                                <div class="about-icon-circle" title="Multi-Industry Specialization">
                                    <!-- Network / Collaboration Hub SVG Icon -->
                                    <svg class="about-node-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <!-- Central Node with Avatar -->
                                        <circle cx="32" cy="32" r="12" stroke="white" stroke-width="2.5" fill="rgba(255,255,255,0.15)"/>
                                        <circle cx="32" cy="28" r="4" fill="white"/>
                                        <path d="M24 38.5C24 34.5 27.5 33 32 33C36.5 33 40 34.5 40 38.5" stroke="white" stroke-width="2" stroke-linecap="round" fill="none"/>
                                        
                                        <!-- Radial Satellite Nodes -->
                                        <line x1="32" y1="20" x2="32" y2="10" stroke="white" stroke-width="2"/>
                                        <circle cx="32" cy="7" r="4.5" fill="white"/>

                                        <line x1="41" y1="23.5" x2="49" y2="16.5" stroke="white" stroke-width="2"/>
                                        <circle cx="51.5" cy="14" r="4.5" fill="white"/>

                                        <line x1="44" y1="32" x2="54" y2="32" stroke="white" stroke-width="2"/>
                                        <circle cx="56.5" cy="32" r="4.5" fill="white"/>

                                        <line x1="41" y1="40.5" x2="49" y2="47.5" stroke="white" stroke-width="2"/>
                                        <circle cx="51.5" cy="50" r="4.5" fill="white"/>

                                        <line x1="23" y1="40.5" x2="15" y2="47.5" stroke="white" stroke-width="2"/>
                                        <circle cx="12.5" cy="50" r="4.5" fill="white"/>

                                        <line x1="20" y1="32" x2="10" y2="32" stroke="white" stroke-width="2"/>
                                        <circle cx="7.5" cy="32" r="4.5" fill="white"/>

                                        <line x1="23" y1="23.5" x2="15" y2="16.5" stroke="white" stroke-width="2"/>
                                        <circle cx="12.5" cy="14" r="4.5" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="about-feature-text-block">
                                <p class="about-feature-text m-0" itemprop="description">
                                    We serve industries that are in need of custom presentation designs. Our clients include companies from the medical, marketing, finance, and creative fields.
                                </p>
                            </div>
                        </article>

                        <!-- Feature Item 2: Visual Impact & Audience Reach -->
                        <article class="about-feature-row d-flex align-items-center" itemscope itemtype="https://schema.org/ListItem">
                            <div class="about-icon-node-wrap flex-shrink-0">
                                <div class="about-icon-circle" title="Global Presentation Impact">
                                    <!-- Globe in Hand SVG Icon -->
                                    <svg class="about-node-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <!-- Globe with Longitude/Latitude Grid -->
                                        <circle cx="36" cy="24" r="13" stroke="white" stroke-width="2.5" fill="rgba(255,255,255,0.12)"/>
                                        <ellipse cx="36" cy="24" rx="6.5" ry="13" stroke="white" stroke-width="2"/>
                                        <line x1="23" y1="24" x2="49" y2="24" stroke="white" stroke-width="2"/>
                                        <path d="M25.5 17C29 18.5 43 18.5 46.5 17" stroke="white" stroke-width="1.8"/>
                                        <path d="M25.5 31C29 29.5 43 29.5 46.5 31" stroke="white" stroke-width="1.8"/>
                                        
                                        <!-- Hand Support Below -->
                                        <path d="M12 45C16 43 22 41 28 41C34 41 42 42.5 49 46C51.5 47.2 54 45 52.5 42.5C50 38.5 42 37 36 37C32 37 25 39 19 41.5L12 45Z" fill="white"/>
                                        <path d="M12 45L17 50C22 55 31 56 38 53L48 48" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="about-feature-text-block">
                                <p class="about-feature-text m-0" itemprop="description">
                                    Our presentation design services aim to help clients reach a bigger audience through visually-appealing PowerPoint decks.
                                </p>
                            </div>
                        </article>

                        <!-- Feature Item 3: Reliable Slide Systems -->
                        <article class="about-feature-row d-flex align-items-center" itemscope itemtype="https://schema.org/ListItem">
                            <div class="about-icon-node-wrap flex-shrink-0">
                                <div class="about-icon-circle" title="PowerPoint Presentation Specialists">
                                    <!-- Laptop Screen with Presentation Chart SVG Icon -->
                                    <svg class="about-node-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <!-- Laptop Screen Base -->
                                        <rect x="15" y="16" width="34" height="24" rx="2.5" stroke="white" stroke-width="2.5" fill="rgba(255,255,255,0.12)"/>
                                        
                                        <!-- Laptop Base / Trackpad -->
                                        <path d="M9 44H55C56 44 56.5 45 55.5 46L52 49H12L8.5 46C7.5 45 8 44 9 44Z" fill="white"/>
                                        <rect x="27" y="45" width="10" height="2" rx="1" fill="#8da83b"/>
                                        
                                        <!-- Pie Chart inside Display -->
                                        <circle cx="32" cy="28" r="7" stroke="white" stroke-width="2" fill="none"/>
                                        <path d="M32 28L32 21C35.8 21 39 24.1 39 28H32Z" fill="white"/>
                                        <line x1="32" y1="28" x2="26.5" y2="32.5" stroke="white" stroke-width="1.8"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="about-feature-text-block">
                                <p class="about-feature-text m-0" itemprop="description">
                                    As PowerPoint experts, we are committed to providing slide designs that clients can rely on. We also provide presentation assistance.
                                </p>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
