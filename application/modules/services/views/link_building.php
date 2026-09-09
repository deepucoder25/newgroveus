<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// =========================================================================
// 1. HERO VECTOR SVG: LINK BUILDING & DIGITAL PR ARTWORK
// =========================================================================
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

  <!-- LARGE INTERLOCKED CHAIN LINKS -->
  <g stroke-linecap="round">
    <line x1="428" y1="262" x2="410" y2="250" stroke="#2B7FDE" stroke-width="5.5"/>
    <line x1="462" y1="240" x2="454" y2="222" stroke="#1D3E64" stroke-width="5.5"/>
    <line x1="532" y1="334" x2="550" y2="352" stroke="#1D3E64" stroke-width="5.5"/>
    <line x1="504" y1="344" x2="504" y2="365" stroke="#71B7F0" stroke-width="5"/>
    <line x1="565" y1="305" x2="585" y2="316" stroke="#71B7F0" stroke-width="5"/>
  </g>

  <!-- Blue Link (Bottom-Left) -->
  <g transform="translate(458, 328) rotate(-42)">
    <rect x="-44" y="-22" width="88" height="44" rx="22" fill="none" stroke="url(#linkBlue)" stroke-width="17.5"/>
    <path d="M-10 -22 H4" stroke="#165FA8" stroke-width="18" stroke-linecap="round" opacity=".55"/>
    <path d="M-10 22 H4" stroke="#165FA8" stroke-width="18" stroke-linecap="round" opacity=".55"/>
  </g>

  <!-- Red Link (Top-Right) -->
  <g transform="translate(506, 275) rotate(-42)">
    <rect x="-44" y="-22" width="88" height="44" rx="22" fill="none" stroke="url(#linkRed)" stroke-width="17.5"/>
    <path d="M-10 -22 H4" stroke="#B3151E" stroke-width="18" stroke-linecap="round" opacity=".55"/>
    <path d="M-10 22 H4" stroke="#B3151E" stroke-width="18" stroke-linecap="round" opacity=".55"/>
  </g>

  <!-- Overlapping Blue Loop -->
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

<!-- =========================================================================
     2. DYNAMIC HERO SLIDER COMPONENT
     ========================================================================= -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Link Building Services']
    ],
    'title' => 'Build Authority with <span class="text-danger-highlight">High-Impact Backlinks</span>',
    'description' => 'Supercharge your domain rating and organic search rankings with Google-compliant editorial backlinks, digital PR outreach, and high-trust contextual placements across top-tier industry publications.',
    'cta_text' => 'Get Authority Backlinks',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-link-45deg',
            'title' => '100% Editorial',
            'subtitle' => 'Contextual Links'
        ],
        [
            'icon' => 'bi bi-shield-check',
            'title' => 'DR 70+ Domains',
            'subtitle' => 'Real Organic Traffic'
        ],
        [
            'icon' => 'bi bi-award-fill',
            'title' => 'White-Hat PR',
            'subtitle' => 'Zero PBN Footprint'
        ]
    ],
    'svg' => $link_building_svg
]); ?>

<!-- =========================================================================
     INTERNAL CSS: LINK BUILDING BESPOKE STYLESHEET (ZERO INLINE STYLES)
     ========================================================================= -->
<div class="lb-page-wrap">

    <!-- =========================================================================
         SECTION 1: 3 CORE PILLARS OF HIGH-AUTHORITY BACKLINKS
         ========================================================================= -->
    <section class="lb-section lb-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="lb-badge">
                        <i class="bi bi-shield-check"></i> Quality Standards
                    </div>
                    <h2 class="lb-heading">
                        The Anatomy of a <span class="lb-highlight">High-Impact Backlink</span>
                    </h2>
                    <p class="lb-lead lb-lead-center">
                        Not all backlinks are created equal. We focus exclusively on natural, high-trust contextual placements that pass real ranking authority and protect your domain against search algorithm shifts.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Pillar 1: Contextual Editorial Relevance -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-pillar-card">
                        <div class="lb-pillar-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <h3 class="lb-pillar-title">Contextual Relevance</h3>
                        <p class="lb-pillar-desc">
                            Links embedded naturally within high-quality, comprehensive editorial articles that match your specific industry niche and target audience intent.
                        </p>
                        <ul class="lb-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> In-Content Natural Link Embeds</li>
                            <li><i class="bi bi-check-circle-fill"></i> 1,000+ Word Editorial Quality</li>
                            <li><i class="bi bi-check-circle-fill"></i> Topical Clustering Alignment</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2: Real Traffic & Domain Authority -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-pillar-card">
                        <div class="lb-pillar-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="lb-pillar-title">Real Organic Traffic</h3>
                        <p class="lb-pillar-desc">
                            We vet every hosting domain to ensure it possesses genuine organic traffic (10,000+ monthly visitors), high Domain Rating (DR 60–85+), and healthy indexation.
                        </p>
                        <ul class="lb-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Verified Live Google Traffic</li>
                            <li><i class="bi bi-check-circle-fill"></i> DR 60 to DR 85+ Authority Sites</li>
                            <li><i class="bi bi-check-circle-fill"></i> Zero Artificial Spam Networks</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: Anchor Text Calibration -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-pillar-card">
                        <div class="lb-pillar-icon">
                            <i class="bi bi-bezier2"></i>
                        </div>
                        <h3 class="lb-pillar-title">Natural Anchor Calibration</h3>
                        <p class="lb-pillar-desc">
                            Balanced distribution of branded, topical, partial-match, and naked URL anchors designed to look completely organic and prevent over-optimization penalties.
                        </p>
                        <ul class="lb-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Branded &amp; Topical Anchor Balance</li>
                            <li><i class="bi bi-check-circle-fill"></i> Google Penguin Algorithmic Safety</li>
                            <li><i class="bi bi-check-circle-fill"></i> Target URL Deep-Link Mapping</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: 6 HIGH-PERFORMANCE LINK BUILDING METHODOLOGIES
         ========================================================================= -->
    <section class="lb-section lb-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="lb-badge">
                        <i class="bi bi-gear-wide-connected"></i> Proven Strategies
                    </div>
                    <h2 class="lb-heading">
                        Enterprise Link Acquisition <span class="lb-highlight">Methodologies</span>
                    </h2>
                    <p class="lb-lead lb-lead-center">
                        A multi-channel manual outreach framework that secures permanent, do-follow authority links from high-tier digital publications and industry authorities.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Method 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <span class="lb-method-tag">High Authority</span>
                        </div>
                        <h3 class="lb-method-title">Data-Driven Digital PR</h3>
                        <p class="lb-method-desc">
                            Crafting original industry surveys, market data reports, and proprietary infographics that journalists and national publications actively cite and link to.
                        </p>
                    </div>
                </div>

                <!-- Method 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <span class="lb-method-tag">Niche Editorial</span>
                        </div>
                        <h3 class="lb-method-title">Guest Editorial Outreach</h3>
                        <p class="lb-method-desc">
                            Authoring thought-leadership articles published on respected, relevant industry blogs and news portals with permanent contextual backlinks.
                        </p>
                    </div>
                </div>

                <!-- Method 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-building-fill-up"></i>
                            </div>
                            <span class="lb-method-tag">Content Scaling</span>
                        </div>
                        <h3 class="lb-method-title">Skyscraper Reclamation</h3>
                        <p class="lb-method-desc">
                            Identifying outdated top-ranking content in your vertical, producing vastly superior resources, and reaching out to sites linking to outdated competitors.
                        </p>
                    </div>
                </div>

                <!-- Method 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-link-45deg"></i>
                            </div>
                            <span class="lb-method-tag">Technical Fix</span>
                        </div>
                        <h3 class="lb-method-title">Broken Link Reclamation</h3>
                        <p class="lb-method-desc">
                            Finding 404 dead links on prominent resource hubs and offering your relevant live content as the superior replacement URL to webmasters.
                        </p>
                    </div>
                </div>

                <!-- Method 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <span class="lb-method-tag">Fast Wins</span>
                        </div>
                        <h3 class="lb-method-title">Unlinked Brand Mentions</h3>
                        <p class="lb-method-desc">
                            Scanning news outlets, podcasts, and blogs for existing brand mentions of your company and converting them into clickable, do-follow links.
                        </p>
                    </div>
                </div>

                <!-- Method 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="lb-method-card">
                        <div class="lb-method-header">
                            <div class="lb-method-icon">
                                <i class="bi bi-mic-fill"></i>
                            </div>
                            <span class="lb-method-tag">Brand Entity</span>
                        </div>
                        <h3 class="lb-method-title">Executive Thought Leadership</h3>
                        <p class="lb-method-desc">
                            Positioning your founders and leadership team for expert commentary, podcast guesting, and industry roundups that yield powerful Tier-1 citations.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: WHITE-HAT SAFETY VS TOXIC LINK TRAPS (2-COLUMN COMPARISON)
         ========================================================================= -->
    <section class="lb-section lb-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="lb-badge">
                        <i class="bi bi-shield-lock-fill"></i> Quality Assurance
                    </div>
                    <h2 class="lb-heading">
                        White-Hat Authority vs <span class="lb-highlight">Toxic Link Traps</span>
                    </h2>
                    <p class="lb-lead lb-lead-center">
                        Our transparent, Google-compliant link building protects your brand from algorithmic penalties while ensuring sustainable long-term authority growth.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Safe White-Hat Box -->
                <div class="col-12 col-lg-6">
                    <div class="lb-compare-box lb-box-safe">
                        <span class="lb-compare-tag lb-tag-safe">
                            <i class="bi bi-check-circle-fill"></i> The Groveus Standard
                        </span>
                        <h3 class="lb-compare-title">What We Build For You</h3>
                        <p class="lb-compare-desc">
                            100% manual, high-trust outreach campaigns on established websites with real organic readers, verified traffic, and natural editorial standards.
                        </p>
                        
                        <ul class="lb-compare-list">
                            <li>
                                <i class="bi bi-check-circle-fill lb-icon-safe"></i>
                                <span><strong>Real Editorial Domains:</strong> Verified organic traffic (>10,000 monthly Google visitors).</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill lb-icon-safe"></i>
                                <span><strong>100% Manual Outreach:</strong> Human-to-human relationship building with editors and journalists.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill lb-icon-safe"></i>
                                <span><strong>Natural Anchor Ratios:</strong> Safe combination of brand, generic, and topical target anchors.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill lb-icon-safe"></i>
                                <span><strong>Permanent In-Content Placement:</strong> Guaranteed link longevity within indexable body copy.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill lb-icon-safe"></i>
                                <span><strong>Pre-Approval Workflow:</strong> Full visibility and approval rights on target domains before publishing.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Toxic Trap Box -->
                <div class="col-12 col-lg-6">
                    <div class="lb-compare-box lb-box-unsafe">
                        <span class="lb-compare-tag lb-tag-unsafe">
                            <i class="bi bi-x-circle-fill"></i> What We Never Do
                        </span>
                        <h3 class="lb-compare-title">Toxic Traps That Risk Penalties</h3>
                        <p class="lb-compare-desc">
                            Low-cost link vendors use black-hat networks and automated scripts that trigger algorithmic link spam penalties and tank your search visibility.
                        </p>
                        
                        <ul class="lb-compare-list">
                            <li>
                                <i class="bi bi-x-circle-fill lb-icon-unsafe"></i>
                                <span><strong>Private Blog Networks (PBNs):</strong> Artificial link webs designed solely to manipulate PageRank.</span>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill lb-icon-unsafe"></i>
                                <span><strong>Automated Spam Software:</strong> Auto-generated forum, comment, or directory link blasts.</span>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill lb-icon-unsafe"></i>
                                <span><strong>Zero-Traffic Link Farms:</strong> Sites created solely to sell guest posts with zero actual human readership.</span>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill lb-icon-unsafe"></i>
                                <span><strong>Over-Optimized Exact Anchors:</strong> Keyword stuffing that triggers Google Penguin algorithmic filters.</span>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill lb-icon-unsafe"></i>
                                <span><strong>Hidden or Sidebar Links:</strong> Manipulative non-contextual link schemes that Google devalues.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: PROVEN AUTHORITY GROWTH METRICS BAR
         ========================================================================= -->
    <section class="lb-section lb-bg-alt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lb-metrics-box">
                        <div class="row g-4 text-center">
                            <div class="col-6 col-lg-3">
                                <div class="lb-metric-num">DR 75+</div>
                                <div class="lb-metric-label">Average Domain Rating</div>
                                <p class="lb-metric-desc">High-authority placement domains verified via Ahrefs and Semrush</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="lb-metric-num">100%</div>
                                <div class="lb-metric-label">Editorial Do-Follow</div>
                                <p class="lb-metric-desc">Contextually embedded links passing maximum link equity and PageRank</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="lb-metric-num">50K+</div>
                                <div class="lb-metric-label">Average Monthly Traffic</div>
                                <p class="lb-metric-desc">Real human readers on host publications driving referral visits</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="lb-metric-num">0%</div>
                                <div class="lb-metric-label">PBN / Spam Risk</div>
                                <p class="lb-metric-desc">100% white-hat safety with permanent indexation and link monitoring</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: LINK BUILDING FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ========================================================================= -->
    <section class="lb-section lb-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="lb-badge">
                        <i class="bi bi-question-circle-fill"></i> Got Questions?
                    </div>
                    <h2 class="lb-heading">
                        Link Building <span class="lb-highlight">Frequently Asked Questions</span>
                    </h2>
                    <p class="lb-lead lb-lead-center">
                        Clear answers on how our link building outreach works, quality standards, and ranking impact.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion lb-accordion" id="linkBuildingFaq">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Are all the backlinks you build permanent and do-follow?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#linkBuildingFaq">
                                <div class="accordion-body">
                                    Yes. We build permanent, in-content contextual do-follow backlinks. We also monitor your active link profile continuously to ensure link longevity and replace any lost links within our guarantee window.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can we pre-approve the websites and content before links go live?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#linkBuildingFaq">
                                <div class="accordion-body">
                                    Absolutely. We provide full transparency. You have complete review and approval rights over target publications, content drafts, and anchor text pairings before any outreach is published.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you protect our website from Google link penalties?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#linkBuildingFaq">
                                <div class="accordion-body">
                                    We strictly adhere to Google Search Essentials (Webmaster Guidelines). We never use automated link software, PBNs, or low-quality link farms. Every link is earned through genuine editorial contribution on real, indexed websites with real organic traffic.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How quickly do high-authority backlinks improve our search rankings?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#linkBuildingFaq">
                                <div class="accordion-body">
                                    Once indexed by Googlebot, high-authority editorial links typically start passing link equity and boosting target keyword positions within 3 to 8 weeks. Combined with solid on-page SEO, link velocity produces compounding organic ranking gains over 3 to 6 months.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
