<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic business context with Canada-focused variables
$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';
?>

<!-- ========================================================================= -->
<!-- CANADIAN SEO PROCESS WORKFLOW WIDGET (PIXEL-PERFECT TIMELINE & SCHEMA)   -->
<!-- ========================================================================= -->
<section class="seo-process-section py-5 position-relative" id="seoProcessSection" itemscope itemtype="https://schema.org/HowTo" aria-label="Our Canadian SEO Process & Methodology">
    
    <!-- Meta Schema for Search Engines -->
    <meta itemprop="name" content="Proven 5-Step Canadian SEO & Ranking Process - <?= htmlspecialchars($companyName) ?>">
    <meta itemprop="description" content="Our structured 5-stage search engine optimization methodology for Canadian businesses: Technical Audit, Strategy, On-Page SEO, Off-Page Link Building, and Continuous ROI Improvement.">

    <div class="container py-2 py-lg-4">
        
        <!-- Section Header (Exact same classes from services_info.php) -->
        <header class="wl-header text-center mb-4 mb-md-5">
            <div class="wl-badge-pill mb-2">
                <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i> SEO Process &amp; Methodology
            </div>
            <h2 class="wl-main-title text-uppercase">
                Our 5-Step Canadian SEO Process
            </h2>
            <p class="wl-main-subtitle mx-auto">
                A data-driven, battle-tested methodology engineered to dominate Canadian search engines (Google.ca &amp; Bing) with sustainable top-tier rankings.
            </p>
        </header>

        <!-- Main Process Infographic Stage in Container (Full Width) -->
        <div class="seo-infographic-card mx-auto position-relative">
            
            <!-- Complete Grey Dashed Loop Circuit (Bottom -> Left -> Top -> Arrow to 01) -->
            <svg class="seo-circuit-svg" viewBox="0 0 1000 1000" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <!-- Grey Dashed Bracket Circuit Line -->
                <path d="M 500 970 L 25 970 L 25 25 L 500 25 L 500 45" stroke="#cbd5e1" stroke-width="7" stroke-dasharray="14 14" stroke-linecap="square" vector-effect="non-scaling-stroke"/>
                <!-- Top Arrow Head -->
                <polygon points="488,45 512,45 500,75" fill="#94a3b8"/>
                <!-- Central Solid Spine Line -->
                <line x1="500" y1="75" x2="500" y2="970" stroke="#334155" stroke-width="6" vector-effect="non-scaling-stroke"/>
                <!-- Bottom Terminal Node (Outer Circle + Inner Small Circle) -->
                <circle cx="500" cy="965" r="13" fill="#ffffff" stroke="#334155" stroke-width="3.5" vector-effect="non-scaling-stroke"/>
                <circle cx="500" cy="965" r="6" fill="#334155" vector-effect="non-scaling-stroke"/>
            </svg>

            <!-- 5 Process Steps Rows Container -->
            <div class="seo-steps-container position-relative">
                
                <!-- ========================================== -->
                <!-- STEP 01: TECHNICAL AUDIT                   -->
                <!-- ========================================== -->
                <div class="seo-step-block position-relative" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                    <meta itemprop="position" content="1">
                    
                    <div class="row g-0 align-items-center">
                        <!-- Left Side: Content Text -->
                        <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                            <div class="seo-step-text-wrap ms-md-auto">
                                <h3 class="seo-step-title" itemprop="name">TECHNICAL AUDIT</h3>
                                <p class="seo-step-desc m-0" itemprop="text">
                                    A thorough website audit is done to determine the current state of the website, including Canadian geo-location signals, crawl architecture, Core Web Vitals, mobile UX performance, server response times, indexing health, and schema hierarchy.
                                </p>
                            </div>
                        </div>

                        <!-- Right Side: Visual Illustration (Ruler & Pencil) -->
                        <div class="col-md-6 col-12 seo-col-right ps-md-5">
                            <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                <svg class="seo-step-svg" width="240" height="100" viewBox="0 0 180 75" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- Dashed Selection Box -->
                                    <rect x="5" y="5" width="170" height="65" rx="3" stroke="#ea580c" stroke-width="1.8" stroke-dasharray="5 5" fill="none"/>
                                    <circle cx="5" cy="5" r="3.5" fill="#ea580c"/>
                                    <circle cx="175" cy="5" r="3.5" fill="#ea580c"/>
                                    <circle cx="5" cy="70" r="3.5" fill="#ea580c"/>
                                    <circle cx="175" cy="70" r="3.5" fill="#ea580c"/>
                                    
                                    <!-- Yellow Pencil -->
                                    <rect x="20" y="16" width="120" height="10" rx="2" fill="#f59e0b"/>
                                    <path d="M140 16L154 21L140 26V16Z" fill="#d97706"/>
                                    <path d="M150 20L154 21L150 22V20Z" fill="#1e293b"/>
                                    <rect x="20" y="16" width="14" height="10" rx="1" fill="#f43f5e"/>

                                    <!-- Metric Ruler -->
                                    <rect x="20" y="38" width="140" height="18" rx="3" fill="#ea580c"/>
                                    <circle cx="28" cy="47" r="3.5" fill="#ffffff"/>
                                    <!-- Ruler Ticks -->
                                    <line x1="40" y1="38" x2="40" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="50" y1="38" x2="50" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                    <line x1="60" y1="38" x2="60" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="70" y1="38" x2="70" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                    <line x1="80" y1="38" x2="80" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="90" y1="38" x2="90" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                    <line x1="100" y1="38" x2="100" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="110" y1="38" x2="110" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                    <line x1="120" y1="38" x2="120" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="130" y1="38" x2="130" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                    <line x1="140" y1="38" x2="140" y2="47" stroke="#ffffff" stroke-width="1.5"/>
                                    <line x1="150" y1="38" x2="150" y2="43" stroke="#ffffff" stroke-width="1.2"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Center Badge: 01 (Orange) -->
                    <div class="seo-badge-center">
                        <div class="seo-number-circle seo-bg-orange" aria-label="Step 01">
                            <span>01</span>
                        </div>
                    </div>

                    <!-- Red Dashed Horizontal Line (Left Side) -->
                    <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                </div>

                <!-- ========================================== -->
                <!-- STEP 02: STRATEGY                          -->
                <!-- ========================================== -->
                <div class="seo-step-block position-relative" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                    <meta itemprop="position" content="2">

                    <div class="row g-0 align-items-center">
                        <!-- Left Side: Visual Illustration (Head with Gears) -->
                        <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                            <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                <svg class="seo-step-svg" width="135" height="142" viewBox="0 0 328 346" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- Head Silhouette & Inner Opening -->
                                    <g id="head" fill="#DC6654">
                                        <path id="head-silhouette" d="M 95.0,28.0 L 77.0,41.0 L 68.0,51.0 L 61.0,62.0 L 57.0,74.0 L 54.0,79.0 L 53.0,86.0 L 51.0,89.0 L 50.0,95.0 L 48.0,98.0 L 46.0,108.0 L 44.0,112.0 L 44.0,122.0 L 46.0,126.0 L 46.0,129.0 L 48.0,132.0 L 48.0,140.0 L 47.0,143.0 L 36.0,158.0 L 35.0,161.0 L 29.0,168.0 L 28.0,171.0 L 25.0,174.0 L 21.0,181.0 L 21.0,187.0 L 26.0,194.0 L 39.0,200.0 L 38.0,216.0 L 42.0,221.0 L 43.0,224.0 L 43.0,228.0 L 42.0,229.0 L 43.0,230.0 L 43.0,233.0 L 45.0,235.0 L 47.0,240.0 L 46.0,265.0 L 48.0,269.0 L 53.0,274.0 L 61.0,278.0 L 66.0,278.0 L 71.0,280.0 L 81.0,280.0 L 82.0,281.0 L 96.0,281.0 L 106.0,285.0 L 110.0,290.0 L 111.0,293.0 L 112.0,308.0 L 113.0,309.0 L 114.0,316.0 L 115.0,318.0 L 117.0,319.0 L 157.0,319.0 L 158.0,318.0 L 257.0,318.0 L 259.0,315.0 L 255.0,307.0 L 254.0,300.0 L 251.0,293.0 L 250.0,276.0 L 249.0,275.0 L 249.0,254.0 L 250.0,253.0 L 251.0,239.0 L 253.0,235.0 L 255.0,225.0 L 262.0,210.0 L 262.0,208.0 L 264.0,206.0 L 272.0,191.0 L 275.0,188.0 L 286.0,166.0 L 287.0,160.0 L 290.0,153.0 L 291.0,142.0 L 292.0,141.0 L 292.0,117.0 L 290.0,110.0 L 290.0,104.0 L 286.0,93.0 L 286.0,90.0 L 283.0,85.0 L 283.0,82.0 L 275.0,65.0 L 261.0,46.0 L 243.0,31.0 L 228.0,23.0 L 207.0,16.0 L 195.0,15.0 L 188.0,13.0 L 142.0,12.0 L 141.0,13.0 L 134.0,13.0 L 133.0,14.0 L 119.0,17.0 Z" />
                                        <path id="head-inner-opening" fill="#FFFFFF" d="M 225.0,39.0 L 223.0,39.0 L 217.0,35.0 L 213.0,35.0 L 206.0,32.0 L 200.0,31.0 L 195.0,28.0 L 179.0,27.0 L 178.0,26.0 L 163.0,26.0 L 162.0,27.0 L 153.0,27.0 L 152.0,28.0 L 142.0,28.0 L 137.0,31.0 L 130.0,32.0 L 126.0,35.0 L 123.0,35.0 L 119.0,38.0 L 114.0,39.0 L 112.0,42.0 L 108.0,43.0 L 107.0,45.0 L 98.0,50.0 L 87.0,61.0 L 87.0,63.0 L 84.0,64.0 L 83.0,68.0 L 80.0,71.0 L 80.0,73.0 L 73.0,85.0 L 72.0,92.0 L 70.0,96.0 L 70.0,103.0 L 69.0,104.0 L 70.0,123.0 L 73.0,130.0 L 73.0,137.0 L 76.0,141.0 L 77.0,145.0 L 80.0,147.0 L 80.0,150.0 L 83.0,152.0 L 84.0,156.0 L 98.0,170.0 L 98.0,172.0 L 98.0,169.0 L 91.0,159.0 L 91.0,155.0 L 98.0,148.0 L 102.0,147.0 L 103.0,139.0 L 102.0,136.0 L 98.0,135.0 L 92.0,130.0 L 91.0,124.0 L 98.0,114.0 L 100.0,108.0 L 105.0,103.0 L 111.0,103.0 L 114.0,104.0 L 117.0,107.0 L 122.0,107.0 L 127.0,103.0 L 127.0,91.0 L 132.0,87.0 L 154.0,87.0 L 160.0,93.0 L 160.0,103.0 L 165.0,107.0 L 167.0,107.0 L 167.0,98.0 L 168.0,96.0 L 177.0,89.0 L 176.0,87.0 L 177.0,79.0 L 172.0,77.0 L 167.0,70.0 L 167.0,67.0 L 170.0,63.0 L 175.0,60.0 L 185.0,61.0 L 192.0,54.0 L 191.0,42.0 L 199.0,36.0 L 205.0,39.0 L 208.0,42.0 L 209.0,46.0 L 222.0,46.0 Z" />
                                    </g>

                                    <!-- Lower Light Gear -->
                                    <g id="gear-lower" fill="#6F706C">
                                        <path id="gear-lower-body" d="M 134.0,89.0 L 131.0,90.0 L 128.0,94.0 L 128.0,104.0 L 125.0,106.0 L 124.0,108.0 L 117.0,109.0 L 111.0,105.0 L 105.0,105.0 L 103.0,109.0 L 100.0,112.0 L 100.0,114.0 L 96.0,121.0 L 93.0,125.0 L 94.0,129.0 L 98.0,133.0 L 102.0,134.0 L 104.0,136.0 L 105.0,144.0 L 104.0,147.0 L 102.0,149.0 L 100.0,149.0 L 97.0,151.0 L 93.0,156.0 L 93.0,158.0 L 97.0,164.0 L 97.0,168.0 L 96.0,169.0 L 93.0,169.0 L 96.0,170.0 L 97.0,173.0 L 102.0,177.0 L 106.0,178.0 L 110.0,183.0 L 116.0,186.0 L 111.0,183.0 L 111.0,179.0 L 118.0,174.0 L 123.0,174.0 L 129.0,179.0 L 129.0,189.0 L 128.0,190.0 L 125.0,190.0 L 127.0,191.0 L 135.0,190.0 L 136.0,193.0 L 140.0,195.0 L 149.0,196.0 L 155.0,194.0 L 158.0,191.0 L 159.0,189.0 L 159.0,179.0 L 162.0,177.0 L 163.0,175.0 L 165.0,174.0 L 171.0,174.0 L 174.0,177.0 L 177.0,178.0 L 181.0,178.0 L 183.0,177.0 L 186.0,173.0 L 187.0,169.0 L 190.0,166.0 L 190.0,164.0 L 194.0,157.0 L 193.0,153.0 L 183.0,146.0 L 182.0,143.0 L 183.0,135.0 L 188.0,131.0 L 191.0,130.0 L 200.0,131.0 L 204.0,128.0 L 202.0,122.0 L 193.0,106.0 L 184.0,97.0 L 177.0,92.0 L 173.0,94.0 L 169.0,98.0 L 168.0,100.0 L 169.0,101.0 L 169.0,107.0 L 168.0,108.0 L 163.0,108.0 L 158.0,103.0 L 158.0,92.0 L 153.0,89.0 Z" />
                                        <circle id="gear-lower-hole" cx="145" cy="143" r="15.5" fill="#FFFFFF" stroke="#6F706C" stroke-width="4" />
                                        <circle id="gear-lower-center-hole" cx="145" cy="143" r="6.5" fill="#FFFFFF" />
                                    </g>

                                    <!-- Upper Dark Gear -->
                                    <g id="gear-upper" fill="#4A4948">
                                        <path id="gear-upper-body" d="M 199.0,42.0 L 197.0,43.0 L 195.0,46.0 L 197.0,51.0 L 197.0,55.0 L 186.0,66.0 L 180.0,66.0 L 177.0,64.0 L 172.0,68.0 L 173.0,71.0 L 181.0,77.0 L 181.0,92.0 L 172.0,99.0 L 173.0,102.0 L 173.0,110.0 L 168.0,113.0 L 171.0,119.0 L 182.0,130.0 L 186.0,129.0 L 189.0,126.0 L 194.0,126.0 L 199.0,128.0 L 203.0,124.0 L 204.0,121.0 L 206.0,119.0 L 221.0,119.0 L 225.0,123.0 L 226.0,126.0 L 228.0,128.0 L 231.0,129.0 L 234.0,126.0 L 233.0,115.0 L 238.0,111.0 L 244.0,104.0 L 248.0,104.0 L 252.0,106.0 L 257.0,104.0 L 257.0,100.0 L 249.0,94.0 L 249.0,78.0 L 256.0,73.0 L 253.0,71.0 L 253.0,66.0 L 251.0,67.0 L 244.0,67.0 L 242.0,64.0 L 235.0,58.0 L 234.0,56.0 L 234.0,52.0 L 236.0,47.0 L 233.0,47.0 L 230.0,43.0 L 227.0,45.0 L 226.0,49.0 L 222.0,52.0 L 209.0,52.0 L 204.0,47.0 L 203.0,44.0 Z" />
                                        <circle id="gear-upper-hole" cx="215" cy="86" r="20.5" fill="#FFFFFF" />
                                    </g>

                                    <!-- Ground Shadow -->
                                    <path id="ground-shadow" fill="#E9E9E9" d="M 0 287 C 25 278, 55 276, 83 286 C 108 294, 128 311, 154 319 C 137 330, 104 333, 72 330 C 40 326, 16 314, 0 304 Z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Right Side: Content Text -->
                        <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 ps-md-5">
                            <div class="seo-step-text-wrap me-md-auto">
                                <h3 class="seo-step-title" itemprop="name">STRATEGY</h3>
                                <p class="seo-step-desc m-0" itemprop="text">
                                    After gathering facts &amp; figures we will develop a unique strategy for your business, focusing on high-intent Canadian commercial keywords across top metropolitan hubs, competitor gap analysis, search intent mapping, and bilingual EN/FR growth opportunities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Badge: 02 (Red) -->
                    <div class="seo-badge-center">
                        <div class="seo-number-circle seo-bg-red" aria-label="Step 02">
                            <span>02</span>
                        </div>
                    </div>

                    <!-- Red Dashed Horizontal Line (Right Side) -->
                    <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                </div>

                <!-- ========================================== -->
                <!-- STEP 03: ON PAGE                           -->
                <!-- ========================================== -->
                <div class="seo-step-block position-relative" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                    <meta itemprop="position" content="3">

                    <div class="row g-0 align-items-center">
                        <!-- Left Side: Content Text -->
                        <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                            <div class="seo-step-text-wrap ms-md-auto">
                                <h3 class="seo-step-title" itemprop="name">ON PAGE</h3>
                                <p class="seo-step-desc m-0" itemprop="text">
                                    Includes all tasks required to optimize the website according to search engine algorithms: structured heading hierarchy (H1-H4), metadata engineering, keyword clustering, internal linking silos, Schema.org microdata, image compression, and bilingual localization.
                                </p>
                            </div>
                        </div>

                        <!-- Right Side: Visual Illustration (Document & Pen) -->
                        <div class="col-md-6 col-12 seo-col-right ps-md-5">
                            <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                <svg class="seo-step-svg" width="185" height="130" viewBox="0 0 140 95" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- Back Page -->
                                    <rect x="28" y="8" width="62" height="78" rx="6" fill="#e0f2fe" stroke="#38bdf8" stroke-width="3"/>
                                    <!-- Front White Page -->
                                    <rect x="20" y="15" width="62" height="72" rx="6" fill="#ffffff" stroke="#0284c7" stroke-width="3"/>
                                    
                                    <!-- Doc Content -->
                                    <rect x="28" y="25" width="20" height="15" rx="2" fill="#38bdf8"/>
                                    <line x1="52" y1="27" x2="74" y2="27" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="52" y1="33" x2="69" y2="33" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="52" y1="39" x2="74" y2="39" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="48" x2="74" y2="48" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="54" x2="74" y2="54" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="60" x2="74" y2="60" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="66" x2="62" y2="66" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="72" x2="70" y2="72" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round"/>

                                    <!-- Blue Stylus Pen -->
                                    <g transform="rotate(35 95 60)">
                                        <rect x="90" y="32" width="11" height="42" rx="3" fill="#38bdf8" stroke="#0284c7" stroke-width="2"/>
                                        <path d="M90 74L95.5 84L101 74H90Z" fill="#f59e0b"/>
                                        <circle cx="95.5" cy="82" r="1.5" fill="#0f172a"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Center Badge: 03 (Teal / Blue) -->
                    <div class="seo-badge-center">
                        <div class="seo-number-circle seo-bg-blue" aria-label="Step 03">
                            <span>03</span>
                        </div>
                    </div>

                    <!-- Red Dashed Horizontal Line (Left Side) -->
                    <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                </div>

                <!-- ========================================== -->
                <!-- STEP 04: OFF PAGE                          -->
                <!-- ========================================== -->
                <div class="seo-step-block position-relative" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                    <meta itemprop="position" content="4">

                    <div class="row g-0 align-items-center">
                        <!-- Left Side: Visual Illustration (Magnifying Glass) -->
                        <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                            <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                <svg class="seo-step-svg" width="155" height="135" viewBox="0 0 110 95" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- Magnifying Glass Lens -->
                                    <circle cx="52" cy="42" r="26" stroke="#1e3a8a" stroke-width="5" fill="#f8fafc"/>
                                    <circle cx="52" cy="42" r="20" stroke="#93c5fd" stroke-width="1.8" fill="#eff6ff"/>
                                    <path d="M42 32C46 28 52 28 56 30" stroke="#60a5fa" stroke-width="2.5" stroke-linecap="round"/>
                                    <!-- Handle -->
                                    <line x1="72" y1="62" x2="95" y2="85" stroke="#1e3a8a" stroke-width="8" stroke-linecap="round"/>
                                    <line x1="78" y1="68" x2="91" y2="81" stroke="#3b82f6" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Right Side: Content Text -->
                        <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 ps-md-5">
                            <div class="seo-step-text-wrap me-md-auto">
                                <h3 class="seo-step-title" itemprop="name">OFF PAGE</h3>
                                <p class="seo-step-desc m-0" itemprop="text">
                                    Includes link building process to boost up the results in search engines: acquiring authoritative Canadian (.CA) domain backlinks, digital PR outreach, Canadian local business directory citations, unlinked brand reclamation, and domain authority amplification.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Badge: 04 (Navy Blue) -->
                    <div class="seo-badge-center">
                        <div class="seo-number-circle seo-bg-navy" aria-label="Step 04">
                            <span>04</span>
                        </div>
                    </div>

                    <!-- Red Dashed Horizontal Line (Right Side) -->
                    <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                </div>

                <!-- ========================================== -->
                <!-- STEP 05: IMPROVE                           -->
                <!-- ========================================== -->
                <div class="seo-step-block position-relative" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
                    <meta itemprop="position" content="5">

                    <div class="row g-0 align-items-center">
                        <!-- Left Side: Content Text -->
                        <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                            <div class="seo-step-text-wrap ms-md-auto">
                                <h3 class="seo-step-title" itemprop="name">IMPROVE</h3>
                                <p class="seo-step-desc m-0" itemprop="text">
                                    Refine &amp; Improve to achieve the highest possible ROI through real-time rank monitoring on Google.ca and Bing, algorithmic health diagnostics, conversion rate optimization (CRO), heatmapping analysis, and iterative performance sprints.
                                </p>
                            </div>
                        </div>

                        <!-- Right Side: Visual Progress Ring & 100% Target Text -->
                        <div class="col-md-6 col-12 seo-col-right ps-md-5">
                            <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start flex-wrap gap-3">
                                <!-- 95% Circular Radial Progress SVG -->
                                <div class="seo-radial-progress flex-shrink-0">
                                    <svg width="96" height="96" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <circle cx="40" cy="40" r="32" stroke="#e2e8f0" stroke-width="7"/>
                                        <circle cx="40" cy="40" r="32" stroke="#00a651" stroke-width="7" stroke-dasharray="201" stroke-dashoffset="10" stroke-linecap="round" transform="rotate(-90 40 40)"/>
                                        <text x="40" y="47" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="20" font-weight="900" fill="#0f172a">95%</text>
                                    </svg>
                                </div>
                                <div class="seo-guarantee-text">
                                    <p class="m-0 seo-guarantee-lead">We won't stop till YOU</p>
                                    <p class="m-0 seo-guarantee-target">reach <strong>100%</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Center Badge: 05 (Green) -->
                    <div class="seo-badge-center">
                        <div class="seo-number-circle seo-bg-green" aria-label="Step 05">
                            <span>05</span>
                        </div>
                    </div>

                    <!-- Red Dashed Horizontal Line (Left Side) -->
                    <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                </div>

            </div>

        </div>

    </div>
</section>
