<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define PPC Management Vector Artwork SVG
ob_start(); ?>
<svg viewBox="70 40 780 495" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background -->
    <linearGradient id="background" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="0.65" stop-color="#fffafa"/><stop offset="1%" stop-color="#fff0f1"/></linearGradient>
    <!-- Main Blue -->
    <linearGradient id="blue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#123e63"/><stop offset="0.45" stop-color="#14558a"/><stop offset="1%" stop-color="#267fc1"/></linearGradient>
    <!-- Laptop Frame -->
    <linearGradient id="laptop" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#344e64"/><stop offset="1%" stop-color="#172f45"/></linearGradient>
    <!-- Screen Blue -->
    <linearGradient id="screenBlue" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#1768b1"/><stop offset="1%" stop-color="#318de0"/></linearGradient>
    <!-- Red -->
    <linearGradient id="red" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff4246"/><stop offset="1%" stop-color="#df2029"/></linearGradient>
    <!-- Orange -->
    <linearGradient id="orange" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#ffd33f"/><stop offset="1%" stop-color="#f5a900"/></linearGradient>
    <!-- Green -->
    <linearGradient id="green" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#55b873"/><stop offset="1%" stop-color="#16864e"/></linearGradient>

    <!-- Radial Backgrounds -->
    <radialGradient id="pinkBlob"><stop offset="0%" stop-color="#ffe3e5"/><stop offset="1%" stop-color="#fff5f5"/></radialGradient>
    <radialGradient id="blueBlob"><stop offset="0%" stop-color="#dff3ff"/><stop offset="1%" stop-color="#c9eaff"/></radialGradient>

    <!-- Shadows -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="170%"><feDropShadow dx="0" dy="6" stdDeviation="8" flood-opacity=".16"/></filter>
    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="4" stdDeviation="5" flood-opacity=".12"/></filter>
  </defs>

  <!-- BACKGROUND BLOBS -->
  <circle cx="456" cy="167" r="122" fill="url(#pinkBlob)" opacity=".85"/>
  <path d="M76 333 C73 277 112 230 166 214 C218 198 257 169 291 121 C326 73 380 43 431 48 C488 53 520 89 548 132 C578 177 613 201 672 201 C741 200 800 235 819 295 C840 360 801 423 742 447 C675 474 607 448 544 463 C472 480 402 474 340 456 C272 437 214 449 157 421 C106 397 80 370 76 333Z" fill="url(#blueBlob)" opacity=".82"/>

  <!-- CLOUDS -->
  <g fill="#c9e7fb">
    <circle cx="169" cy="222" r="12"/><circle cx="187" cy="212" r="19"/><circle cx="207" cy="221" r="15"/><circle cx="219" cy="231" r="10"/>
    <rect x="155" y="226" width="76" height="17" rx="9"/>
  </g>
  <g fill="#c9e7fb">
    <circle cx="678" cy="70" r="15"/><circle cx="700" cy="61" r="22"/><circle cx="723" cy="71" r="18"/><circle cx="739" cy="85" r="11"/>
    <rect x="660" y="83" width="102" height="20" rx="10"/>
  </g>

  <!-- PPC BADGE -->
  <g filter="url(#shadow)">
    <path d="M293 109 Q283 110 283 121 L285 166 Q286 177 297 178 L342 175 L354 191 L361 174 L399 171 Q410 170 410 159 L407 119 Q406 107 394 105Z" fill="url(#red)"/>
    <text x="347" y="157" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-size="43" font-weight="800" fill="#ffffff">PPC</text>
  </g>

  <!-- RUPEE COIN -->
  <g filter="url(#smallShadow)">
    <circle cx="496" cy="163" r="39" fill="#ffcb36"/>
    <circle cx="496" cy="163" r="31" fill="#f7a600"/>
    <text x="496" y="175" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="36" font-weight="700" fill="#ffffff">₹</text>
  </g>

  <!-- SMALL ANALYTICS ICON -->
  <g filter="url(#smallShadow)">
    <rect x="623" y="127" width="95" height="75" rx="9" fill="#ffffff"/>
    <path d="M647 167 L661 157" fill="none" stroke="#ee3439" stroke-width="5" stroke-linecap="round" opacity="0.35"/>
    <rect x="643" y="171" width="12" height="18" rx="2" fill="#ee3439"/>
    <rect x="661" y="157" width="12" height="32" rx="2" fill="#ed3439"/>
    <path d="M679 189 L679 153 Q683 152 685 147 L687 144 L691 144 L691 189 Z" fill="#e52c34"/>
  </g>

  <!-- LAPTOP OUTER & SCREEN -->
  <g filter="url(#shadow)">
    <rect x="241" y="198" width="478" height="302" rx="13" fill="url(#laptop)"/>
    <rect x="241" y="198" width="478" height="25" rx="13" fill="#344e63"/>
    <rect x="258" y="216" width="444" height="264" rx="5" fill="#ffffff"/>
  </g>

  <!-- GOOGLE ADS HEADER -->
  <rect x="275" y="237" width="175" height="38" rx="5" fill="#ffffff"/>
  <g>
    <path d="M280 263 L291 240 Q294 234 300 235 Q306 236 309 242 L321 263 Q324 270 318 273 Q311 276 308 269 L299 251 L290 270 Q287 276 281 272 Q277 269 280 263Z" fill="#4285f4"/>
    <path d="M291 240 L280 263 Q277 270 282 273 Q288 276 292 270 L300 251Z" fill="#fbbc04"/>
    <circle cx="282" cy="267" r="9" fill="#0f9d58"/>
  </g>
  <text x="324" y="262" font-family="Arial, sans-serif" font-size="25" fill="#737a81">Google Ads</text>

  <!-- LIGHT HORIZONTAL DIVIDER -->
  <rect x="275" y="282" width="390" height="5" rx="3" fill="#edf3f7"/>

  <!-- AD RESULT 1 -->
  <rect x="286" y="304" width="39" height="33" rx="4" fill="#338ce3"/>
  <text x="305" y="328" text-anchor="middle" font-family="Arial, sans-serif" font-size="19" fill="#ffffff">Ad</text>
  <rect x="334" y="307" width="115" height="8" rx="4" fill="#3b91e4"/>
  <rect x="334" y="322" width="87" height="7" rx="4" fill="#4eb68b"/>
  <rect x="286" y="344" width="182" height="7" rx="4" fill="#dce8ef"/>
  <rect x="286" y="357" width="109" height="7" rx="4" fill="#58b894"/>
  <rect x="286" y="371" width="133" height="7" rx="4" fill="#dce8ef"/>

  <!-- AD RESULT 2 -->
  <rect x="286" y="405" width="39" height="32" rx="4" fill="#338ce3"/>
  <text x="305" y="428" text-anchor="middle" font-family="Arial, sans-serif" font-size="19" fill="#ffffff">Ad</text>
  <rect x="334" y="408" width="115" height="8" rx="4" fill="#398fe3"/>
  <rect x="334" y="423" width="86" height="7" rx="4" fill="#55b58b"/>
  <rect x="286" y="443" width="184" height="7" rx="4" fill="#dce8ef"/>
  <rect x="286" y="456" width="126" height="7" rx="4" fill="#dce8ef"/>

  <!-- RIGHT PAGE TEXT -->
  <g fill="#e1ebf1">
    <rect x="529" y="307" width="112" height="7" rx="4"/>
    <rect x="529" y="321" width="127" height="7" rx="4"/>
    <rect x="529" y="335" width="104" height="7" rx="4"/>
    <rect x="529" y="350" width="118" height="7" rx="4"/>
    <rect x="529" y="364" width="101" height="7" rx="4"/>
    <rect x="529" y="426" width="105" height="7" rx="4"/>
    <rect x="529" y="440" width="92" height="7" rx="4"/>
    <rect x="529" y="454" width="115" height="7" rx="4"/>
  </g>

  <!-- ANALYTICS POPUP ON SCREEN -->
  <g filter="url(#shadow)">
    <rect x="520" y="250" width="160" height="153" rx="8" fill="#ffffff"/>
    <path d="M545 344 L565 326 L585 334 L605 315 L628 288" fill="none" stroke="#ed3b3e" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M617 291 L639 276 L634 301" fill="none" stroke="#ed3b3e" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
    <rect x="543" y="361" width="19" height="22" rx="2" fill="#ee3439"/>
    <rect x="570" y="347" width="19" height="36" rx="2" fill="#ee3439"/>
    <rect x="597" y="328" width="19" height="55" rx="2" fill="#e93136"/>
    <rect x="624" y="312" width="19" height="71" rx="2" fill="#df272f"/>
  </g>

  <!-- CURSOR -->
  <g>
    <g stroke="#173f68" stroke-width="4" stroke-linecap="round">
      <path d="M449 375 L445 363"/><path d="M458 363 L458 352"/><path d="M470 367 L478 357"/><path d="M444 386 L432 385"/><path d="M472 390 L482 396"/>
    </g>
    <path d="M461 365 L501 398 L487 400 L497 419 L487 424 L477 405 L468 416Z" fill="#102d4c" stroke="#0d2945" stroke-width="2"/>
  </g>

  <!-- LAPTOP BASE -->
  <path d="M203 497 L756 497 L756 510 Q755 523 739 528 L218 528 Q203 523 202 510Z" fill="#45647d" filter="url(#shadow)"/>
  <path d="M202 500 L756 500 L748 514 L214 514Z" fill="#3279b7"/>
  <path d="M430 499 L532 499 L526 508 L438 508Z" fill="#63839b"/>

  <!-- TARGET -->
  <g filter="url(#smallShadow)">
    <circle cx="742" cy="402" r="80" fill="#ed3238"/>
    <circle cx="742" cy="402" r="61" fill="#ffffff"/>
    <circle cx="742" cy="402" r="43" fill="#ed3238"/>
    <circle cx="742" cy="402" r="25" fill="#ffffff"/>
    <circle cx="742" cy="402" r="12" fill="#ed3238"/>
  </g>
  <!-- Target arrow -->
  <g>
    <path d="M742 402 L825 312" fill="none" stroke="#173e62" stroke-width="8" stroke-linecap="round"/>
    <path d="M766 389 L742 402 L747 376 Z" fill="#173e62"/>
  </g>

  <!-- COINS -->
  <g filter="url(#smallShadow)">
    <ellipse cx="739" cy="438" rx="39" ry="11" fill="#e9a30d"/>
    <rect x="700" y="438" width="78" height="25" fill="url(#orange)"/>
    <ellipse cx="739" cy="463" rx="39" ry="11" fill="#e7a20c"/>
  </g>
  <g filter="url(#smallShadow)">
    <ellipse cx="707" cy="453" rx="39" ry="11" fill="#e9a30d"/>
    <rect x="668" y="453" width="78" height="23" fill="url(#orange)"/>
    <ellipse cx="707" cy="476" rx="39" ry="11" fill="#e9a20c"/>
    <ellipse cx="707" cy="453" rx="27" ry="6" fill="none" stroke="#ffd052" stroke-width="3"/>
  </g>

  <!-- GROUND SHADOW -->
  <ellipse cx="494" cy="531" rx="330" ry="13" fill="#d8eefc"/>
  <ellipse cx="494" cy="542" rx="250" ry="7" fill="#edf8ff"/>
</svg>
<?php $ppc_management_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'PPC Management Services']
    ],
    'title' => 'PPC Management, <span class="text-danger-highlight">More Clicks, Better Results</span>',
    'description' => 'Get targeted traffic and higher conversions with data-driven PPC strategies. We manage your ad campaigns across platforms to maximize ROI and grow your business faster.',
    'cta_text' => 'Launch Your PPC Campaign',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-bullseye',
            'title' => 'Targeted Audience',
            'subtitle' => 'Reach the Right People'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Better ROI',
            'subtitle' => 'Get More Conversions'
        ]
    ],
    'svg' => $ppc_management_svg
]); ?>

<!-- 3. PPC Management Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Maximize Return on Ad Spend with Precision Paid Search & Social Ads</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Turn ad spend into reliable revenue. We develop, manage, and optimize high-converting paid search (Google Ads, Bing Ads), paid social (Meta Ads, LinkedIn Ads, YouTube Ads), and retargeting funnels that deliver immediate, profitable inbound customer acquisition.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Google Search & Shopping</h5>
                                <p class="small text-muted mb-0">Dominate top search placements for commercial-intent keywords with tight negative keyword filtration.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Targeted Social Ads</h5>
                                <p class="small text-muted mb-0">Reach high-value decision-makers and consumers across Facebook, Instagram, LinkedIn, and YouTube.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Conversion Rate & ROI Tracking</h5>
                                <p class="small text-muted mb-0">End-to-end pixel and server-side tracking to continuously optimize Cost Per Lead (CPL) and ROAS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
