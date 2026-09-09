<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Local SEO Vector Artwork SVG
ob_start(); ?>
<svg viewBox="75 110 785 555" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background blue glow -->
    <radialGradient id="blueGlow" cx="50%" cy="50%" r="70%">
      <stop offset="0%" stop-color="#E9F5FF"/>
      <stop offset="100%" stop-color="#DCEEFF"/>
    </radialGradient>

    <!-- Card shadow -->
    <filter id="cardShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="8" stdDeviation="10" flood-color="#8DA8C0" flood-opacity=".18"/>
    </filter>

    <!-- Soft shadow -->
    <filter id="softShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="6" stdDeviation="7" flood-color="#7C9DB8" flood-opacity=".15"/>
    </filter>

    <!-- Store shadow -->
    <filter id="storeShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="7" stdDeviation="8" flood-color="#7895AA" flood-opacity=".18"/>
    </filter>

    <!-- Clip for map -->
    <clipPath id="mapClip">
      <rect x="209" y="275" width="351" height="137" rx="17"/>
    </clipPath>

    <!-- Map gradient -->
    <linearGradient id="mapBg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#F8FAFC"/>
      <stop offset="100%" stop-color="#E9F0F5"/>
    </linearGradient>

    <!-- Store glass -->
    <linearGradient id="glass" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#BFE4FF"/>
      <stop offset="100%" stop-color="#78B9E9"/>
    </linearGradient>

    <!-- Ground -->
    <linearGradient id="ground" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#BBD8EF"/>
      <stop offset="100%" stop-color="#D5E9F7"/>
    </linearGradient>
  </defs>

  <!-- Main abstract blue background -->
  <path d="M122 459 C94 397 136 344 202 327 C256 313 306 289 338 237 C370 185 430 115 502 124 C574 132 591 194 630 239 C669 284 738 279 789 324 C845 373 847 460 810 526 C774 588 702 603 620 586 C539 569 472 595 395 605 C308 617 163 590 122 459 Z" fill="url(#blueGlow)"/>

  <!-- CLOUDS -->
  <g opacity=".82">
    <circle cx="108" cy="280" r="19" fill="#D7EBFB"/>
    <circle cx="130" cy="267" r="27" fill="#D7EBFB"/>
    <circle cx="153" cy="282" r="18" fill="#D7EBFB"/>
    <rect x="88" y="280" width="82" height="17" rx="8.5" fill="#D7EBFB"/>
  </g>
  <g opacity=".85">
    <circle cx="588" cy="141" r="17" fill="#D7EBFB"/>
    <circle cx="608" cy="134" r="23" fill="#D7EBFB"/>
    <circle cx="632" cy="145" r="16" fill="#D7EBFB"/>
    <rect x="570" y="145" width="91" height="15" rx="7.5" fill="#D7EBFB"/>
  </g>
  <g opacity=".78">
    <circle cx="716" cy="230" r="17" fill="#D7EBFB"/>
    <circle cx="739" cy="219" r="25" fill="#D7EBFB"/>
    <circle cx="765" cy="232" r="18" fill="#D7EBFB"/>
    <rect x="699" y="231" width="93" height="14" rx="7" fill="#D7EBFB"/>
  </g>

  <!-- SEARCH / BUSINESS CARD -->
  <rect x="182" y="182" width="405" height="447" rx="27" fill="#FFFFFF" stroke="#B7D7F0" stroke-width="5" filter="url(#cardShadow)"/>
  <rect x="199" y="200" width="371" height="411" rx="25" fill="#FFFFFF"/>
  <rect x="207" y="209" width="356" height="48" rx="24" fill="#FFFFFF" stroke="#E5EDF4" stroke-width="2" filter="url(#softShadow)"/>

  <!-- Google G Icon -->
  <g transform="translate(224, 222) scale(0.95)">
    <path d="M19.6 10.2 C19.6 9.5 19.5 8.8 19.4 8.2 L10 8.2 L10 12.1 L15.4 12.1 C15.1 13.5 14.3 14.7 13 15.5 L13 18.3 L16.9 18.3 C19.1 16.3 20.4 13.5 19.6 10.2 Z" fill="#4285F4"/>
    <path d="M10 20 C12.7 20 15 19.1 16.9 17.4 L13 14.4 C12.2 15 11.2 15.3 10 15.3 C7.4 15.3 5.2 13.5 4.4 11.1 L0.4 11.1 L0.4 14.2 C2.3 18 6.4 20 10 20 Z" fill="#34A853"/>
    <path d="M4.4 11.1 C4 9.9 4 8.6 4.4 7.4 L4.4 4.3 L0.4 4.3 C-0.9 6.8 -0.9 9.7 0.4 12.2 L4.4 11.1 Z" fill="#FBBC05"/>
    <path d="M10 4.7 C11.4 4.7 12.8 5.2 13.8 6.2 L17 3 C15.1 1.2 12.6 0.1 10 0.1 C6.4 0.1 2.3 2.1 0.4 5.9 L4.4 9 C5.2 6.6 7.4 4.7 10 4.7 Z" fill="#EA4335"/>
  </g>
  <text x="260" y="240" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="16" font-weight="500" fill="#50657D">Local Business</text>
  <g transform="translate(528 222)">
    <circle cx="9" cy="9" r="7.5" fill="none" stroke="#4285F4" stroke-width="2.6"/>
    <line x1="14.5" y1="14.5" x2="20" y2="20" stroke="#4285F4" stroke-width="2.6" stroke-linecap="round"/>
  </g>

  <!-- MAP -->
  <rect x="209" y="275" width="351" height="137" rx="17" fill="url(#mapBg)" filter="url(#softShadow)"/>
  <g clip-path="url(#mapClip)">
    <path d="M190 300 L235 270 L285 275 L330 315 L300 345 L250 334 L210 362 L190 350 Z" fill="#B9DDF4"/>
    <path d="M274 267 L320 267 L348 293 L326 319 L293 307 Z" fill="#9BD9BC"/>
    <path d="M464 277 L520 270 L580 310 L560 350 L507 337 L478 308 Z" fill="#A7DEC1"/>
    <path d="M215 374 L255 348 L301 365 L281 417 L218 417 Z" fill="#A6DDBD"/>
    <path d="M198 285 L347 420" fill="none" stroke="#FFFFFF" stroke-width="12" opacity=".95"/>
    <path d="M245 265 L390 422" fill="none" stroke="#FFFFFF" stroke-width="10" opacity=".95"/>
    <path d="M330 265 L455 421" fill="none" stroke="#FFFFFF" stroke-width="12" opacity=".95"/>
    <path d="M425 265 L560 380" fill="none" stroke="#FFFFFF" stroke-width="10" opacity=".95"/>
    <path d="M210 350 L560 350" fill="none" stroke="#FFFFFF" stroke-width="8" opacity=".95"/>
    <path d="M250 395 L540 285" fill="none" stroke="#FFFFFF" stroke-width="7" opacity=".9"/>
    <path d="M210 325 L560 325" fill="none" stroke="#E8EDF1" stroke-width="3"/>
    <path d="M370 275 L370 412" fill="none" stroke="#E8EDF1" stroke-width="4"/>
  </g>

  <!-- LOCATION PIN -->
  <g filter="url(#softShadow)">
    <path d="M374 292 C355 292 343 305 343 323 C343 347 374 374 374 374 C374 374 405 347 405 323 C405 305 393 292 374 292 Z" fill="#E52B2F"/>
    <circle cx="374" cy="320" r="10" fill="#FFFFFF"/>
  </g>

  <!-- BUSINESS LISTING -->
  <g transform="translate(217 435)">
    <rect x="4" y="23" width="55" height="39" rx="2" fill="#FFFFFF" stroke="#CFDCE5" stroke-width="2"/>
    <path d="M0 23 L5 9 H58 L63 23 Z" fill="#EDEDED"/>
    <path d="M1 22 H62 V33 C58 37 53 37 49 33 C45 37 40 37 36 33 C32 37 27 37 23 33 C19 37 14 37 10 33 C6 37 2 36 1 33 Z" fill="#E94345"/>
    <path d="M12 11 L18 11 L21 23 H13 Z" fill="#FFFFFF"/>
    <path d="M27 11 L33 11 L34 23 H26 Z" fill="#FFFFFF"/>
    <path d="M42 11 L48 11 L47 23 H39 Z" fill="#FFFFFF"/>
    <rect x="34" y="40" width="14" height="22" fill="#6DB5E5"/>
    <circle cx="37" cy="51" r="1.7" fill="#FFFFFF"/>
    <rect x="1" y="61" width="62" height="4" rx="2" fill="#B8C8D4"/>
  </g>
  <rect x="293" y="433" width="120" height="10" rx="5" fill="#67B1F0"/>
  <rect x="293" y="455" width="105" height="9" rx="4.5" fill="#DDE5EB"/>
  <rect x="293" y="475" width="76" height="9" rx="4.5" fill="#DDE5EB"/>

  <!-- 5 STARS RATING -->
  <g transform="translate(434 454)" fill="#FFB800">
    <path d="M8 0 L10 5 L16 5 L11 9 L13 15 L8 11 L3 15 L5 9 L0 5 L6 5 Z"/>
    <path d="M29 0 L31 5 L37 5 L32 9 L34 15 L29 11 L24 15 L26 9 L21 5 L27 5 Z"/>
    <path d="M50 0 L52 5 L58 5 L53 9 L55 15 L50 11 L45 15 L47 9 L42 5 L48 5 Z"/>
    <path d="M71 0 L73 5 L79 5 L74 9 L76 15 L71 11 L66 15 L68 9 L63 5 L69 5 Z"/>
    <path d="M92 0 L94 5 L100 5 L95 9 L97 15 L92 11 L87 15 L89 9 L84 5 L90 5 Z"/>
  </g>
  <line x1="217" y1="504" x2="552" y2="504" stroke="#E6EDF2" stroke-width="2"/>

  <!-- ADDRESS ROWS -->
  <g transform="translate(218 518)">
    <path d="M10 0 C4 0 0 5 0 11 C0 18 10 29 10 29 C10 29 20 18 20 11 C20 5 16 0 10 0 Z" fill="#D2DEE8"/>
    <circle cx="10" cy="10" r="3.5" fill="#FFFFFF"/>
  </g>
  <rect x="258" y="522" width="156" height="9" rx="4.5" fill="#DFE7ED"/>
  <rect x="258" y="541" width="105" height="9" rx="4.5" fill="#E5EBF0"/>

  <g transform="translate(218 566)">
    <path d="M10 0 C4 0 0 5 0 11 C0 18 10 29 10 29 C10 29 20 18 20 11 C20 5 16 0 10 0 Z" fill="#D2DEE8"/>
    <circle cx="10" cy="10" r="3.5" fill="#FFFFFF"/>
  </g>
  <rect x="258" y="570" width="151" height="9" rx="4.5" fill="#DFE7ED"/>
  <rect x="258" y="589" width="95" height="9" rx="4.5" fill="#E5EBF0"/>

  <!-- BUSINESS STORE (FRONT-RIGHT 3D SHOP) -->
  <g filter="url(#storeShadow)">
    <g>
      <circle cx="760" cy="585" r="29" fill="#63B85A"/>
      <circle cx="785" cy="570" r="25" fill="#72C261"/>
      <circle cx="802" cy="594" r="28" fill="#56AD50"/>
      <circle cx="518" cy="595" r="28" fill="#62B957"/>
      <circle cx="542" cy="574" r="24" fill="#73C666"/>
      <circle cx="562" cy="596" r="27" fill="#55AC4E"/>
    </g>
    <path d="M551 479 H781 V625 H551 Z" fill="#FFFFFF"/>
    <rect x="558" y="423" width="220" height="14" rx="4" fill="#40566A"/>
    <path d="M563 435 H774 L790 479 C790 498 778 508 762 508 C748 508 739 499 736 486 C733 499 724 508 710 508 C696 508 687 499 684 486 C681 499 672 508 658 508 C644 508 635 499 632 486 C629 499 620 508 606 508 C592 508 583 499 580 486 C577 499 568 508 554 508 C541 508 533 498 533 483 Z" fill="#E94B4D"/>
    <path d="M579 435 L605 435 L596 492 C590 499 582 499 576 492 Z" fill="#FFFFFF"/>
    <path d="M632 435 L657 435 L655 495 C648 501 640 498 635 491 Z" fill="#FFFFFF"/>
    <path d="M684 435 L709 435 L715 492 C709 499 700 500 694 494 Z" fill="#FFFFFF"/>
    <path d="M736 435 L761 435 L775 490 C768 499 759 500 752 492 Z" fill="#FFFFFF"/>
    <rect x="576" y="521" width="101" height="70" fill="#49677D"/>
    <rect x="582" y="526" width="89" height="59" fill="url(#glass)"/>
    <path d="M584 575 L630 527 H650 L600 585 H584 Z" fill="#D9F0FF" opacity=".35"/>
    <line x1="626" y1="526" x2="626" y2="585" stroke="#FFFFFF" stroke-width="4"/>
    <line x1="582" y1="555" x2="671" y2="555" stroke="#FFFFFF" stroke-width="4"/>
    <rect x="694" y="520" width="49" height="105" fill="#49677D"/>
    <rect x="700" y="526" width="37" height="93" fill="#79B9E5"/>
    <path d="M702 560 L730 528 H737 V545 L705 580 H702 Z" fill="#D9F0FF" opacity=".35"/>
    <circle cx="707" cy="576" r="3" fill="#FFFFFF"/>
  </g>

  <!-- GROWTH CHART & ARROW -->
  <g filter="url(#softShadow)">
    <rect x="643" y="386" width="21" height="34" rx="3" fill="#E84A4C"/>
    <rect x="675" y="366" width="21" height="54" rx="3" fill="#E84A4C"/>
    <rect x="707" y="342" width="21" height="78" rx="3" fill="#E84A4C"/>
    <path d="M618 389 L657 350 L690 360 L730 332" fill="none" stroke="#E84A4C" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"/>
    <polygon points="752,310 716,320 742,346" fill="#E84A4C"/>
  </g>

  <!-- GROUND BASE -->
  <ellipse cx="529" cy="640" rx="310" ry="17" fill="#E5F1F9"/>
  <rect x="128" y="619" width="723" height="10" rx="5" fill="url(#ground)"/>
  <ellipse cx="530" cy="628" rx="265" ry="11" fill="#D8EBF7" opacity=".65"/>
</svg>
<?php $local_seo_svg = ob_get_clean(); ?>

<!-- 2. Render Dynamic Hero Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Local SEO Services']
    ],
    'title' => 'Get More Local <span class="text-danger-highlight">Customers Online</span>',
    'description' => 'Improve your local search rankings, attract more nearby customers and grow your business with our result-driven local SEO services.',
    'cta_text' => 'Boost Your Local Visibility',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-search',
            'title' => 'Higher',
            'subtitle' => 'Local Rankings'
        ],
        [
            'icon' => 'bi bi-people-fill',
            'title' => 'More',
            'subtitle' => 'Local Customers'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Increased',
            'subtitle' => 'Business Growth'
        ]
    ],
    'svg' => $local_seo_svg
]); ?>
<div class="lseo-page-wrap">

    <!-- =========================================================
         SECTION 1: Core Value Pillars (6-Grid Feature Cards)
         ========================================================= -->
    <section class="lseo-section lseo-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="lseo-eyebrow">
                    <i class="bi bi-geo-alt-fill"></i> Dominate Local Search
                </div>
                <h2 class="lseo-title">
                    Targeted Strategies to Win Your <span class="lseo-title-highlight">Local Market</span>
                </h2>
                <p class="lseo-subtitle">
                    Over 80% of local searches on mobile lead to an in-store visit or call within 24 hours. We position your business directly in front of ready-to-buy nearby customers.
                </p>
            </div>

            <div class="row g-4">
                <!-- Card 1: Google Map 3-Pack -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-map-fill"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">High-Intent Traffic</span>
                                    <h3 class="lseo-card-title">Google 3-Pack Ranking</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Dominate the top 3 Google Maps listings where more than 70% of local search clicks concentrate, ensuring maximum call and navigation intent.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Google Maps Pin Placement</li>
                            <li><i class="bi bi-check-circle-fill"></i> Proximity &amp; Prominence Calibration</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Google Business Profile -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">Profile Authority</span>
                                    <h3 class="lseo-card-title">GBP Optimization</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Complete audit and optimization of your Google Business Profile with verified categories, geo-tagged photography, Q&amp;As, and weekly posts.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Category &amp; Keyword Alignment</li>
                            <li><i class="bi bi-check-circle-fill"></i> Geotagged Visuals &amp; Weekly Updates</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: NAP & Citation Building -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">100% Accuracy</span>
                                    <h3 class="lseo-card-title">NAP Citation Sync</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Build and standardize your business Name, Address, and Phone across 100+ trusted local directories, mapping platforms, and data aggregators.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> 100+ Tier-1 Directory Networks</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duplicate &amp; Error Removal</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4: Geo-Targeted Landing Pages -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">Hyper-Local Reach</span>
                                    <h3 class="lseo-card-title">Geo-Targeted Pages</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Create localized service area landing pages customized with localized keywords, street-level relevance, embedded maps, and local testimonials.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> City &amp; Suburb Targeted Landing Pages</li>
                            <li><i class="bi bi-check-circle-fill"></i> Embedded Maps &amp; Schema Data</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 5: Review & Reputation Growth -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">5-Star Trust</span>
                                    <h3 class="lseo-card-title">Review Management</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Implement proven automated feedback funnels to consistently generate genuine 5-star Google reviews and professionally handle customer sentiment.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Automated Review Funnels &amp; QR Codes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customer Sentiment Strategy</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 6: Local Backlinks & Community Authority -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-card">
                        <div>
                            <div class="lseo-card-header">
                                <div class="lseo-icon-box">
                                    <i class="bi bi-link-45deg"></i>
                                </div>
                                <div class="lseo-card-title-wrap">
                                    <span class="lseo-card-tag">Domain Power</span>
                                    <h3 class="lseo-card-title">Local Link Signals</h3>
                                </div>
                            </div>
                            <p class="lseo-card-desc">
                                Earn high-authority local backlinks from neighborhood business associations, regional publications, chambers of commerce, and local sponsorships.
                            </p>
                        </div>
                        <ul class="lseo-card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Chamber of Commerce Links</li>
                            <li><i class="bi bi-check-circle-fill"></i> Regional Editorial Outreach</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         SECTION 2: Proven 5-Step Local SEO Process Roadmap
         ========================================================= -->
    <section class="lseo-section lseo-section-alt">
        <div class="container">
            <div class="text-center mb-5">
                <div class="lseo-eyebrow">
                    <i class="bi bi-lightning-charge-fill"></i> Proven Workflow
                </div>
                <h2 class="lseo-title">
                    Our 5-Step <span class="lseo-title-highlight">Local SEO Roadmap</span>
                </h2>
                <p class="lseo-subtitle">
                    A clear, methodical path engineered to take your local business from invisible to top-ranked across local maps and neighborhood search queries.
                </p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="lseo-process-card">
                        <span class="lseo-step-badge">STEP 01</span>
                        <div class="lseo-process-icon"><i class="bi bi-search"></i></div>
                        <h3 class="lseo-process-title">Local Audit</h3>
                        <p class="lseo-process-desc">Comprehensive analysis of local competitors, proximity signals, keyword volume, and existing citation health.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="lseo-process-card">
                        <span class="lseo-step-badge">STEP 02</span>
                        <div class="lseo-process-icon"><i class="bi bi-pin-map"></i></div>
                        <h3 class="lseo-process-title">GBP Optimization</h3>
                        <p class="lseo-process-desc">Claiming, verifying, and meticulously configuring all primary/secondary categories, attributes, and geo-data.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="lseo-process-card">
                        <span class="lseo-step-badge">STEP 03</span>
                        <div class="lseo-process-icon"><i class="bi bi-journals"></i></div>
                        <h3 class="lseo-process-title">Citation Cleanup</h3>
                        <p class="lseo-process-desc">Resolving duplicate listings, incorrect phone numbers, and outdated addresses across all global aggregators.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="lseo-process-card">
                        <span class="lseo-step-badge">STEP 04</span>
                        <div class="lseo-process-icon"><i class="bi bi-code-slash"></i></div>
                        <h3 class="lseo-process-title">Local Schema</h3>
                        <p class="lseo-process-desc">Embedding LocalBusiness JSON-LD markup, city landing pages, and location-rich on-page metadata.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="lseo-process-card">
                        <span class="lseo-step-badge">STEP 05</span>
                        <div class="lseo-process-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h3 class="lseo-process-title">Track &amp; Scale</h3>
                        <p class="lseo-process-desc">Continuous geo-grid tracking, monthly conversion auditing, review cultivation, and localized link outreach.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         SECTION 3: KPI Metrics Highlight Banner
         ========================================================= -->
    <section class="lseo-section lseo-section-light pt-0">
        <div class="container">
            <div class="lseo-stats-banner">
                <div class="row g-4 align-items-center">
                    <div class="col-6 col-md-3">
                        <div class="lseo-stat-box">
                            <div class="lseo-stat-num">94%</div>
                            <div class="lseo-stat-label">3-Pack Win Rate</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="lseo-stat-box">
                            <div class="lseo-stat-num">3.8X</div>
                            <div class="lseo-stat-label">Avg Call Increase</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="lseo-stat-box">
                            <div class="lseo-stat-num">100+</div>
                            <div class="lseo-stat-label">Citations Synced</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="lseo-stat-box">
                            <div class="lseo-stat-num">10K+</div>
                            <div class="lseo-stat-label">Keywords Ranked</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         SECTION 4: What's Included (Deliverables Checklist)
         ========================================================= -->
    <section class="lseo-section lseo-section-alt">
        <div class="container">
            <div class="text-center mb-5">
                <div class="lseo-eyebrow">
                    <i class="bi bi-box-seam"></i> Complete Deliverables
                </div>
                <h2 class="lseo-title">
                    Everything Included in Our <span class="lseo-title-highlight">Local SEO Service</span>
                </h2>
                <p class="lseo-subtitle">
                    Zero guesswork. We handle every single technical, directory, and on-page element required for local market leadership.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">Google 3-Pack Optimization</h3>
                            <p class="lseo-deliverable-text">Complete configuration of business description, services, products, and operational attributes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">NAP Consistency Audit</h3>
                            <p class="lseo-deliverable-text">100% verification that your phone, name, and address match exactly across all mapping networks.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">Local Schema (JSON-LD)</h3>
                            <p class="lseo-deliverable-text">Structured data integration with precise coordinates, opening hours, pricing, and service taxonomy.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">Location Landing Pages</h3>
                            <p class="lseo-deliverable-text">High-converting neighborhood &amp; city pages with locally relevant headers, content, and map embeds.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">Review Generation System</h3>
                            <p class="lseo-deliverable-text">Automated direct review links and QR strategies to boost customer review frequency &amp; rating score.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lseo-deliverable-item">
                        <div class="lseo-check-icon"><i class="bi bi-check-lg"></i></div>
                        <div>
                            <h3 class="lseo-deliverable-heading">Geo-Grid Rank Heatmaps</h3>
                            <p class="lseo-deliverable-text">Visual monthly tracking showing exact map rankings block-by-block and mile-by-mile around your location.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         SECTION 5: Industries We Help Dominate Locally
         ========================================================= -->
    <section class="lseo-section lseo-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="lseo-eyebrow">
                    <i class="bi bi-buildings"></i> Sector Expertise
                </div>
                <h2 class="lseo-title">
                    Industries We Supercharge with <span class="lseo-title-highlight">Local SEO</span>
                </h2>
                <p class="lseo-subtitle">
                    Proven local ranking formulas tailored to the specific search habits and buyer intent of your industry.
                </p>
            </div>

            <div class="row g-3 g-md-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-hospital"></i></div>
                        <h3 class="lseo-ind-title">Healthcare</h3>
                        <p class="lseo-ind-desc">Clinics, Dentists &amp; Doctors</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-tools"></i></div>
                        <h3 class="lseo-ind-title">Home Services</h3>
                        <p class="lseo-ind-desc">Plumbing, HVAC &amp; Roofing</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-briefcase"></i></div>
                        <h3 class="lseo-ind-title">Legal &amp; Law</h3>
                        <p class="lseo-ind-desc">Attorneys &amp; Law Firms</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-house-door"></i></div>
                        <h3 class="lseo-ind-title">Real Estate</h3>
                        <p class="lseo-ind-desc">Brokers, Agents &amp; Rentals</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-cup-hot"></i></div>
                        <h3 class="lseo-ind-title">Hospitality</h3>
                        <p class="lseo-ind-desc">Restaurants &amp; Cafes</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="lseo-industry-card">
                        <div class="lseo-ind-icon"><i class="bi bi-bag-check"></i></div>
                        <h3 class="lseo-ind-title">Retail Stores</h3>
                        <p class="lseo-ind-desc">Local Shops &amp; Boutiques</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         SECTION 6: Frequently Asked Questions (Accordion)
         ========================================================= -->
    <section class="lseo-section lseo-section-alt">
        <div class="container">
            <div class="text-center mb-5">
                <div class="lseo-eyebrow">
                    <i class="bi bi-question-circle-fill"></i> Got Questions?
                </div>
                <h2 class="lseo-title">
                    Frequently Asked <span class="lseo-title-highlight">Questions</span>
                </h2>
                <p class="lseo-subtitle">
                    Common questions regarding local SEO timelines, ranking factors, and multi-location setups.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion lseo-accordion" id="localSeoFaqAccordion">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How long does it take to see results from Local SEO?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#localSeoFaqAccordion">
                                <div class="accordion-body">
                                    Most local businesses start noticing increased impressions and local search visibility within 30 to 60 days following GBP optimization and citation alignment. Highly competitive metropolitan areas typically reach solid Google 3-Pack rankings within 3 to 6 months.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    What is the Google Map 3-Pack and why is it crucial?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#localSeoFaqAccordion">
                                <div class="accordion-body">
                                    The Google 3-Pack is the boxed section appearing at the top of Google search results that showcases 3 local businesses with interactive map pins, reviews, phone numbers, and driving directions. Over 70% of high-intent clicks go directly to these 3 spots.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What if my business has multiple branches or locations?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#localSeoFaqAccordion">
                                <div class="accordion-body">
                                    We build dedicated, geocoded landing pages for each location, configure separate Google Business Profiles under an organized location group, and establish distinct NAP citations so each branch dominates its specific territory without cannibalization.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeadFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    How does NAP consistency affect my local rankings?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#localSeoFaqAccordion">
                                <div class="accordion-body">
                                    NAP (Name, Address, Phone number) consistency provides Google's search algorithms with trust and verification. When your information matches across major directories, search engines feel confident recommending your business to nearby searchers.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

