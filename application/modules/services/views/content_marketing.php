<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Content Marketing Vector Artwork SVG
ob_start(); ?>
<svg viewBox="75 40 780 475" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background Blue -->
    <linearGradient id="bgBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#e8f6ff"/><stop offset="100%" stop-color="#d5edff"/></linearGradient>
    <!-- Main Blue -->
    <linearGradient id="blue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#1762a9"/><stop offset="100%" stop-color="#238ee9"/></linearGradient>
    <!-- Bright Blue -->
    <linearGradient id="brightBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#2789e5"/><stop offset="100%" stop-color="#63b9f5"/></linearGradient>
    <!-- Red -->
    <linearGradient id="red" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff3c3c"/><stop offset="100%" stop-color="#ed252b"/></linearGradient>
  <!-- Shadows -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="7" stdDeviation="8" flood-opacity=".13"/></filter>
    <filter id="softShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="4" stdDeviation="5" flood-opacity=".10"/></filter>
  </defs>

  <!-- BACKGROUND SOFT BLOB -->
  <path d="M88 319 C108 260 170 229 225 201 C286 171 313 80 390 46 C462 14 515 66 550 127 C588 194 630 204 706 198 C775 192 831 235 847 302 C862 365 819 423 755 444 C692 465 602 447 537 469 C457 497 387 497 318 470 C255 446 202 452 150 424 C93 393 75 358 88 319Z" fill="url(#bgBlue)"/>

  <!-- CLOUD LEFT -->
  <g fill="#c9e8ff">
    <circle cx="101" cy="185" r="13"/><circle cx="119" cy="174" r="18"/><circle cx="137" cy="184" r="14"/>
    <rect x="82" y="183" width="74" height="20" rx="10"/>
  </g>

  <!-- CLOUD TOP RIGHT -->
  <g fill="#c8e7ff">
    <circle cx="568" cy="72" r="14"/><circle cx="585" cy="61" r="17"/><circle cx="604" cy="72" r="13"/><circle cx="617" cy="84" r="9"/>
    <rect x="555" y="80" width="78" height="19" rx="10"/>
  </g>

  <!-- SOCIAL HEART NOTIFICATION -->
  <g filter="url(#softShadow)">
    <rect x="240" y="105" width="72" height="54" rx="10" fill="url(#blue)"/>
    <path d="M267 158 L276 174 L286 158Z" fill="#1978ca"/>
    <path d="M276 147 C272 143 259 135 259 126 C259 117 271 115 276 122 C281 115 293 117 293 126 C293 135 280 143 276 147Z" fill="#fff"/>
  </g>

  <!-- MEGAPHONE -->
  <g transform="rotate(-12 450 135)" filter="url(#softShadow)">
    <path d="M432 151 L445 194 Q449 201 456 197 L464 194 L450 150Z" fill="#1763a9"/>
    <rect x="389" y="119" width="37" height="38" rx="8" fill="#1262a9"/>
    <path d="M417 119 L469 107 L486 165 L421 157Z" fill="url(#red)"/>
    <path d="M469 107 L478 105 Q485 105 487 112 L496 160 Q498 168 491 170 L486 171Z" fill="#15599b"/>
  </g>
  <!-- Sound lines -->
  <g stroke="#2d86d9" stroke-width="5" stroke-linecap="round">
    <path d="M493 99 L499 89"/><path d="M503 117 L514 114"/><path d="M502 133 L514 137"/>
  </g>

  <!-- VIDEO CARD LEFT -->
  <g filter="url(#shadow)">
    <rect x="129" y="217" width="139" height="127" rx="9" fill="#fff"/>
    <rect x="129" y="217" width="139" height="20" rx="9" fill="url(#blue)"/>
    <rect x="129" y="227" width="139" height="10" fill="url(#blue)"/>
    <circle cx="142" cy="226" r="3" fill="#fff"/><circle cx="153" cy="226" r="3" fill="#fff"/><circle cx="164" cy="226" r="3" fill="#fff"/>
    <circle cx="236" cy="226" r="3" fill="#fff"/><circle cx="246" cy="226" r="3" fill="#fff"/><circle cx="256" cy="226" r="3" fill="#fff"/>
    <rect x="157" y="247" width="81" height="46" rx="6" fill="#f83236"/>
    <path d="M190 257 L190 278 L207 268Z" fill="#fff"/>
    <rect x="145" y="302" width="108" height="6" rx="3" fill="#dcebf6"/>
    <rect x="145" y="316" width="80" height="6" rx="3" fill="#dcebf6"/>
    <rect x="145" y="329" width="53" height="6" rx="3" fill="#dcebf6"/>
  </g>

  <!-- LAPTOP -->
  <rect x="283" y="197" width="348" height="260" rx="12" fill="#123f75" filter="url(#shadow)"/>
  <rect x="283" y="197" width="348" height="260" rx="12" fill="url(#blue)"/>
  <rect x="296" y="211" width="322" height="231" rx="5" fill="#fff"/>
  <rect x="308" y="222" width="298" height="207" rx="5" fill="#f9fcff"/>
  <rect x="321" y="228" width="273" height="200" rx="5" fill="#fff" filter="url(#softShadow)"/>

  <!-- DOCUMENT CONTENT -->
  <!-- T Icon -->
  <rect x="345" y="240" width="58" height="55" rx="6" fill="#f23838"/>
  <text x="374" y="282" text-anchor="middle" font-family="Georgia, serif" font-size="43" font-weight="bold" fill="#fff">T</text>

  <!-- Document Lines -->
  <g fill="#dce9f4">
    <rect x="419" y="241" width="153" height="7" rx="4"/>
    <rect x="419" y="255" width="139" height="7" rx="4"/>
    <rect x="419" y="269" width="153" height="7" rx="4"/>
    <rect x="419" y="283" width="128" height="7" rx="4"/>
    <rect x="344" y="307" width="216" height="7" rx="4"/>
    <rect x="344" y="322" width="192" height="7" rx="4"/>
    <rect x="344" y="337" width="206" height="7" rx="4"/>
    <rect x="344" y="352" width="187" height="7" rx="4"/>
  </g>

  <!-- Image Placeholder -->
  <rect x="464" y="307" width="86" height="68" rx="6" fill="#a9dcfb"/>
  <path d="M467 367 L493 334 L510 352 L525 333 L548 367Z" fill="#5caee9"/>
  <path d="M490 367 L522 339 L550 367Z" fill="#2789d6"/>
  <circle cx="523" cy="326" r="8" fill="#fff"/>

  <!-- Additional Document Lines -->
  <g fill="#dce9f4">
    <rect x="344" y="373" width="118" height="7" rx="4"/>
    <rect x="344" y="388" width="190" height="7" rx="4"/>
    <rect x="344" y="403" width="174" height="7" rx="4"/>
  </g>

  <!-- Laptop Camera -->
  <circle cx="457" cy="203" r="2.5" fill="#6db8ed"/>

  <!-- LAPTOP BASE -->
  <path d="M248 454 L664 454 L683 473 Q687 479 676 480 L238 480 Q228 480 234 473Z" fill="url(#blue)" filter="url(#shadow)"/>
  <path d="M413 457 L502 457 L495 465 L421 465Z" fill="#dcefff"/>

  <!-- PENCIL / STYLUS (POINTING DOWN-LEFT TOWARDS CONTENT) -->
  <g transform="translate(532, 372) rotate(45)" filter="url(#softShadow)">
    <polygon points="-4,-7 4,-7 0,0" fill="#3d5362"/>
    <polygon points="-11,-18 11,-18 4,-7 -4,-7" fill="#e7bd87"/>
    <rect x="-11" y="-105" width="22" height="87" rx="3" fill="url(#brightBlue)"/>
    <rect x="-6" y="-100" width="5" height="78" rx="2.5" fill="#65b7f1"/>
    <rect x="-11" y="-120" width="22" height="15" rx="4.5" fill="#f04b52"/>
  </g>

  <!-- CHART CARD RIGHT (MATCHING SCREENSHOT) -->
  <g filter="url(#shadow)">
    <rect x="685" y="228" width="125" height="118" rx="10" fill="#fff"/>
    <!-- Upward Trend Arrow -->
    <line x1="720" y1="288" x2="774" y2="242" stroke="#2582E2" stroke-width="5.5" stroke-linecap="round"/>
    <polygon points="786,233 768,241 777,252" fill="#2582E2"/>
    <!-- 4 Ascending Blue Bars -->
    <rect x="702" y="312" width="18" height="20" rx="3.5" fill="#2883E5"/>
    <rect x="727" y="296" width="18" height="36" rx="3.5" fill="#2883E5"/>
    <rect x="752" y="278" width="18" height="54" rx="3.5" fill="#2883E5"/>
    <rect x="777" y="258" width="18" height="74" rx="3.5" fill="#2883E5"/>
  </g>

  <!-- MESSAGE BOX -->
  <g filter="url(#shadow)">
    <rect x="621" y="142" width="136" height="68" rx="10" fill="url(#blue)"/>
    <path d="M640 207 L640 227 L658 208Z" fill="#1767ad"/>
    <g stroke="#fff" stroke-width="5" stroke-linecap="round">
      <path d="M642 161 L737 161"/><path d="M642 175 L737 175"/><path d="M642 189 L721 189"/>
    </g>
  </g>

  <!-- CHECKLIST CALENDAR -->
  <g filter="url(#shadow)">
    <path d="M638 354 Q638 348 645 348 L758 355 L748 488 L629 481Z" fill="#fff"/>
    <path d="M748 355 L775 376 L764 486 L748 488Z" fill="#1769b5"/>
    <g fill="none" stroke="#1769b5" stroke-width="5" stroke-linecap="round">
      <path d="M665 364 C660 350 671 347 675 360"/>
      <path d="M681 365 C676 351 687 348 691 361"/>
      <path d="M697 366 C692 352 703 349 707 362"/>
      <path d="M713 367 C708 353 719 350 723 363"/>
      <path d="M729 368 C724 354 735 351 739 364"/>
    </g>
    <!-- Red Checkmarks -->
    <g fill="none" stroke="#ff3c3c" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
      <path d="M649 399 L655 405 L666 393"/>
      <path d="M649 429 L655 435 L666 423"/>
      <path d="M649 459 L655 465 L666 453"/>
    </g>
    <!-- Checklist Lines -->
    <g fill="#dce9f4">
      <rect x="675" y="396" width="62" height="6" rx="3"/>
      <rect x="675" y="410" width="51" height="6" rx="3"/>
      <rect x="675" y="426" width="64" height="6" rx="3"/>
      <rect x="675" y="440" width="52" height="6" rx="3"/>
      <rect x="675" y="456" width="58" height="6" rx="3"/>
    </g>
  </g>

  <!-- GROUND SHADOWS -->
  <ellipse cx="480" cy="491" rx="355" ry="13" fill="#d9efff"/>
  <ellipse cx="482" cy="505" rx="250" ry="8" fill="#edf8ff"/>
</svg>
<?php $content_marketing_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Content Marketing Services']
    ],
    'title' => 'Powerful Content, <span class="text-danger-highlight">Real Business Growth</span>',
    'description' => 'Engaging and valuable content helps you attract, engage and convert your audience. Our content marketing services are designed to build your brand, boost credibility and drive long-term results.',
    'cta_text' => 'Create Compelling Content',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-file-earmark-text-fill',
            'title' => 'Engaging Content',
            'subtitle' => 'That Connects'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Higher Engagement',
            'subtitle' => 'Across Platforms'
        ],
        [
            'icon' => 'bi bi-shield-check',
            'title' => 'Stronger Brand',
            'subtitle' => 'Authority & Trust'
        ]
    ],
    'svg' => $content_marketing_svg
]); ?>

<!-- 3. Content Marketing Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Engage Audiences & Drive Conversions with High-Impact Content</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Content is the cornerstone of search rankings, brand authority, and customer trust. We craft comprehensive content marketing strategies, including keyword-driven articles, interactive media, lead magnets, and case studies that resonate with your target demographics and fuel long-term organic customer acquisition.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">SEO Article Production</h5>
                                <p class="small text-muted mb-0">High-ranking blog posts, comprehensive ultimate guides, and data-backed thought leadership.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Visual & Multi-Media Content</h5>
                                <p class="small text-muted mb-0">Infographics, video scripting, interactive calculators, and carousel assets for maximum shareability.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Editorial Calendar Management</h5>
                                <p class="small text-muted mb-0">Consistent, strategic publishing cadences with full workflow oversight from ideation to distribution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
