<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Link Building Vector Artwork SVG
ob_start(); ?>
<svg viewBox="80 25 750 490" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background Gradient -->
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#F7FCFF"/><stop offset="100%" stop-color="#E5F3FF"/></linearGradient>

    <!-- Browser Header Gradient -->
    <linearGradient id="browserTop" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#3289DF"/><stop offset="100%" stop-color="#1674D4"/></linearGradient>

    <!-- Blue Link Gradient -->
    <linearGradient id="linkBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#247BCB"/><stop offset="100%" stop-color="#0B61B7"/></linearGradient>

    <!-- Red Link Gradient -->
    <linearGradient id="linkRed" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#FF5055"/><stop offset="100%" stop-color="#E5222B"/></linearGradient>

  <!-- Drop Shadows -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="170%"><feDropShadow dx="0" dy="6" stdDeviation="7" flood-color="#4C83AA" flood-opacity=".18"/></filter>
    <filter id="softShadow" x="-30%" y="-30%" width="160%" height="170%"><feDropShadow dx="0" dy="4" stdDeviation="5" flood-color="#5292C5" flood-opacity=".15"/></filter>
  </defs>

  <!-- BACKGROUND SOFT BLOB -->
  <path d="M142 338 C129 281 175 244 229 220 C280 198 287 137 337 82 C386 28 452 5 502 27 C554 50 565 113 611 151 C657 189 729 183 772 228 C814 273 807 352 780 404 C750 461 686 472 619 469 C546 466 501 491 423 490 C342 488 255 483 194 446 C158 424 146 385 142 338Z" fill="url(#bg)"/>

  <!-- CLOUDS -->
  <g fill="#CFEAFF" opacity=".95">
    <path d="M544 78 C544 67 553 58 565 58 C568 46 579 39 591 39 C606 39 617 49 619 62 C630 61 639 68 640 79 Z"/>
    <path d="M91 261 C91 249 101 239 113 239 C116 228 126 222 137 222 C151 222 162 232 164 245 C174 245 183 252 183 263 Z"/>
  </g>

  <!-- DOTTED CONNECTIONS -->
  <g fill="none" stroke="#4A9EF0" stroke-width="3" stroke-dasharray="7 7" stroke-linecap="round">
    <path d="M300 148 C340 148 383 143 392 183 C396 201 383 216 371 227"/>
    <path d="M603 231 C629 225 633 211 629 198 C626 184 637 174 655 174"/>
    <path d="M602 301 C642 301 683 301 690 272 C697 243 688 215 671 198"/>
    <path d="M548 304 C590 302 615 303 640 319 C659 331 668 350 671 370"/>
  </g>

  <!-- TOP LEFT MINI BROWSER -->
  <g filter="url(#shadow)">
    <rect x="141" y="103" width="161" height="102" rx="9" fill="#FFFFFF"/>
    <path d="M141 112 Q141 103 150 103 H293 Q302 103 302 112 V122 H141Z" fill="url(#browserTop)"/>
    <circle cx="153" cy="112" r="4" fill="#DDEFFF"/><circle cx="166" cy="112" r="4" fill="#DDEFFF"/><circle cx="179" cy="112" r="4" fill="#DDEFFF"/>
    <rect x="155" y="139" width="45" height="45" rx="5" fill="#E8F4FD"/>
    <g transform="translate(178 161) rotate(-45)">
      <rect x="-19" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
      <rect x="-6" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
    </g>
    <rect x="211" y="140" width="77" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="211" y="157" width="77" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="211" y="174" width="61" height="10" rx="5" fill="#E3EBF1"/>
  </g>

  <!-- TOP RIGHT MINI BROWSER -->
  <g filter="url(#shadow)">
    <rect x="656" y="130" width="162" height="103" rx="9" fill="#FFFFFF"/>
    <path d="M656 139 Q656 130 665 130 H809 Q818 130 818 139 V149 H656Z" fill="url(#browserTop)"/>
    <circle cx="668" cy="139" r="4" fill="#DDEFFF"/><circle cx="681" cy="139" r="4" fill="#DDEFFF"/><circle cx="694" cy="139" r="4" fill="#DDEFFF"/>
    <rect x="670" y="168" width="45" height="45" rx="5" fill="#E8F4FD"/>
    <g transform="translate(693 190) rotate(-45)">
      <rect x="-19" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
      <rect x="-6" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
    </g>
    <rect x="726" y="169" width="76" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="726" y="186" width="76" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="726" y="203" width="59" height="10" rx="5" fill="#E3EBF1"/>
  </g>

  <!-- RIGHT LOWER MINI BROWSER -->
  <g filter="url(#shadow)">
    <rect x="584" y="349" width="165" height="105" rx="9" fill="#FFFFFF"/>
    <path d="M584 358 Q584 349 593 349 H740 Q749 349 749 358 V369 H584Z" fill="url(#browserTop)"/>
    <circle cx="596" cy="358" r="4" fill="#DDEFFF"/><circle cx="609" cy="358" r="4" fill="#DDEFFF"/><circle cx="622" cy="358" r="4" fill="#DDEFFF"/>
    <rect x="599" y="387" width="45" height="45" rx="5" fill="#E8F4FD"/>
    <g transform="translate(622 409) rotate(-45)">
      <rect x="-19" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
      <rect x="-6" y="-6" width="25" height="12" rx="6" fill="none" stroke="#174F82" stroke-width="6"/>
    </g>
    <rect x="655" y="388" width="78" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="655" y="405" width="78" height="10" rx="5" fill="#E3EBF1"/>
    <rect x="655" y="422" width="58" height="10" rx="5" fill="#E3EBF1"/>
  </g>

  <!-- CENTRAL MAIN BROWSER -->
  <g filter="url(#shadow)">
    <rect x="283" y="193" width="319" height="250" rx="12" fill="#FFFFFF"/>
    <path d="M283 205 Q283 193 295 193 H590 Q602 193 602 205 V220 H283Z" fill="url(#browserTop)"/>
    <circle cx="298" cy="207" r="5" fill="#DDF0FF"/><circle cx="315" cy="207" r="5" fill="#DDF0FF"/><circle cx="332" cy="207" r="5" fill="#DDF0FF"/>
    <!-- Content Image Placeholder (Top-Left) -->
    <rect x="307" y="244" width="64" height="60" rx="7" fill="#E2F1FD"/>
    <path d="M307 292 L328 266 L348 292 Z" fill="#ADCFF1"/>
    <path d="M336 292 L352 272 L371 292 Z" fill="#91BDE7"/>
    <circle cx="350" cy="259" r="6" fill="#FFFFFF"/>

    <!-- Placeholder lines under image (Left side) -->
    <rect x="307" y="318" width="68" height="8" rx="4" fill="#E8EEF5"/>
    <rect x="307" y="334" width="88" height="8" rx="4" fill="#E8EEF5"/>
    <rect x="307" y="350" width="55" height="8" rx="4" fill="#E8EEF5"/>

    <!-- Bottom full-width placeholder lines -->
    <rect x="307" y="375" width="268" height="9" rx="4.5" fill="#E4ECF4"/>
    <rect x="307" y="392" width="122" height="9" rx="4.5" fill="#A8D3F9"/>
  </g>

  <!-- =====================================================
       LARGE INTERLOCKED CHAIN LINKS (MATCHING SCREENSHOT)
  ====================================================== -->
  <!-- Radiating Spark / Action Lines -->
  <g stroke-linecap="round">
    <!-- Top-Left Rays -->
    <line x1="428" y1="262" x2="410" y2="250" stroke="#2B7FDE" stroke-width="5.5"/>
    <line x1="462" y1="240" x2="454" y2="222" stroke="#1D3E64" stroke-width="5.5"/>
    <!-- Bottom-Right Rays -->
    <line x1="532" y1="334" x2="550" y2="352" stroke="#1D3E64" stroke-width="5.5"/>
    <line x1="504" y1="344" x2="504" y2="365" stroke="#71B7F0" stroke-width="5"/>
    <line x1="565" y1="305" x2="585" y2="316" stroke="#71B7F0" stroke-width="5"/>
  </g>

  <!-- Blue Link (Bottom-Left) -->
  <g transform="translate(458, 328) rotate(-42)">
    <rect x="-44" y="-22" width="88" height="44" rx="22" fill="none" stroke="url(#linkBlue)" stroke-width="17.5"/>
    <!-- Shadow / Cuff Accents on straight sides -->
    <path d="M-10 -22 H4" stroke="#165FA8" stroke-width="18" stroke-linecap="round" opacity=".55"/>
    <path d="M-10 22 H4" stroke="#165FA8" stroke-width="18" stroke-linecap="round" opacity=".55"/>
  </g>

  <!-- Red Link (Top-Right) -->
  <g transform="translate(506, 275) rotate(-42)">
    <rect x="-44" y="-22" width="88" height="44" rx="22" fill="none" stroke="url(#linkRed)" stroke-width="17.5"/>
    <!-- Shadow / Cuff Accents on straight sides -->
    <path d="M-10 -22 H4" stroke="#B3151E" stroke-width="18" stroke-linecap="round" opacity=".55"/>
    <path d="M-10 22 H4" stroke="#B3151E" stroke-width="18" stroke-linecap="round" opacity=".55"/>
  </g>

  <!-- Overlapping Blue Loop (Seamless 3D chain hook) -->
  <g transform="translate(458, 328) rotate(-42)">
    <path d="M-15 -22 H22 C34.15 -22 44 -12.15 44 0" fill="none" stroke="url(#linkBlue)" stroke-width="17.5" stroke-linecap="butt"/>
    <path d="M-10 -22 H4" stroke="#165FA8" stroke-width="18" stroke-linecap="round" opacity=".55"/>
  </g>

  <!-- LEFT SEO GROWTH GRAPH -->
  <g>
    <rect x="164" y="435" width="26" height="31" rx="4" fill="#71B7F1"/>
    <rect x="200" y="418" width="27" height="48" rx="4" fill="#4999E7"/>
    <rect x="235" y="395" width="27" height="71" rx="4" fill="#2E88DF"/>
    <path d="M163 416 C190 407 216 389 238 364 L258 345" fill="none" stroke="#EA3037" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M244 349 L260 343 L258 361" fill="none" stroke="#EA3037" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
  </g>

  <!-- BOTTOM GROUND SHADOWS -->
  <ellipse cx="509" cy="486" rx="302" ry="10" fill="#CDEAFF"/>
  <ellipse cx="514" cy="502" rx="285" ry="17" fill="#E4F4FE" opacity=".85"/>
  <ellipse cx="516" cy="500" rx="217" ry="8" fill="#C7E5F7" opacity=".6"/>
</svg>
<?php $link_building_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Link Building Services']
    ],
    'title' => 'Build Stronger Links, <span class="text-danger-highlight">Boost Your Rankings</span>',
    'description' => 'Get high-quality backlinks from trusted websites and improve your domain authority, drive more traffic and achieve long-term SEO success.',
    'cta_text' => 'Grow Your Authority',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-link-45deg',
            'title' => 'High-Quality Links',
            'subtitle' => 'From Trusted Sources'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Better Rankings',
            'subtitle' => 'On Search Engines'
        ],
        [
            'icon' => 'bi bi-shield-check',
            'title' => 'Stronger Authority',
            'subtitle' => 'For Long-Term Growth'
        ]
    ],
    'svg' => $link_building_svg
]); ?>

<!-- 3. Link Building Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Accelerate Search Visibility with High-Authority Backlink Acquisition</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Search engines evaluate the quality, relevance, and credibility of the websites linking to you. We execute manual outreach, editorial placements, digital PR campaigns, and niche-specific link acquisition strategies that elevate your Domain Authority and drive steady organic keyword growth.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Editorial Digital PR</h5>
                                <p class="small text-muted mb-0">Secure organic editorial backlinks from trusted, high-DA news sites and leading industry publications.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Niche-Relevant Outreach</h5>
                                <p class="small text-muted mb-0">100% manual, contextually relevant link building tailored strictly to your industry vertical.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Safe White-Hat Strategy</h5>
                                <p class="small text-muted mb-0">Google-compliant link profiles designed for long-term algorithmic safety and permanent gains.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
