<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define White Label SEO Vector Artwork SVG
ob_start(); ?>
<svg viewBox="0 0 832 627" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- =========================
         GRADIENTS
    ========================== -->
    <linearGradient id="wlScreenBlue" x1="220" y1="300" x2="630" y2="560" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#EAF6FF"/>
      <stop offset="1" stop-color="#CFE7F8"/>
    </linearGradient>

    <linearGradient id="wlLaptopBody" x1="180" y1="540" x2="650" y2="585" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#9EC6E5"/>
      <stop offset="1" stop-color="#BBD8EC"/>
    </linearGradient>

    <linearGradient id="wlChartBlue" x1="550" y1="500" x2="650" y2="400" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#2588ED"/>
      <stop offset="1" stop-color="#318EF0"/>
    </linearGradient>

    <linearGradient id="wlPlantGreen" x1="90" y1="400" x2="200" y2="520" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#48B968"/>
      <stop offset="1" stop-color="#269852"/>
    </linearGradient>

    <linearGradient id="wlLensGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#FFFFFF"/>
      <stop offset="70%" stop-color="#E0F2FE"/>
      <stop offset="100%" stop-color="#BAE6FD"/>
    </linearGradient>

    <linearGradient id="wlHandleGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#2563EB"/>
      <stop offset="100%" stop-color="#1D4ED8"/>
    </linearGradient>

    <!-- =========================
         SHADOWS
    ========================== -->
    <filter id="wlSoftShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="7" stdDeviation="8" flood-color="#658AA8" flood-opacity=".18"/>
    </filter>

    <filter id="wlCardShadow" x="-20%" y="-20%" width="150%" height="150%">
      <feDropShadow dx="0" dy="6" stdDeviation="9" flood-color="#7C9DB8" flood-opacity=".22"/>
    </filter>

    <filter id="wlSmallShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="3" stdDeviation="4" flood-color="#6C91AD" flood-opacity=".18"/>
    </filter>

    <!-- =========================
         SCREEN CLIP
    ========================== -->
    <clipPath id="wlScreenClip">
      <rect x="218" y="311" width="414" height="239" rx="7"/>
    </clipPath>
  </defs>

  <!-- =====================================================
       BACKGROUND SHAPES
  ====================================================== -->
  <!-- Ambient organic glow -->
  <path d="M38 398 C67 322 119 275 194 252 C271 229 294 167 359 125 C433 77 517 91 573 140 C632 191 694 203 748 250 C802 298 832 363 819 428 C804 507 719 560 625 558 C525 556 473 590 368 587 C255 584 91 541 38 398Z" fill="#F0F8FF"/>

  <!-- =====================================================
       WORLD MAP BACKGROUND
  ====================================================== -->
  <g opacity=".48" fill="#DCEFFC">
    <path d="M78 170 C108 139 151 119 193 120 L229 135 L220 156 L194 167 L179 191 L147 194 L126 220 L101 214 L95 191 L72 184Z"/>
    <path d="M205 232 L230 245 L243 280 L232 315 L215 347 L201 378 L183 359 L188 322 L177 291 L187 260Z"/>
    <path d="M356 145 L383 132 L411 137 L429 150 L419 165 L391 165 L374 178 L353 167Z"/>
    <path d="M380 190 L417 188 L443 211 L449 251 L432 294 L409 325 L386 294 L374 250 L365 217Z"/>
    <path d="M425 141 L469 119 L518 125 L565 143 L604 165 L640 168 L671 193 L657 217 L614 212 L584 226 L546 211 L505 202 L471 181 L438 176Z"/>
    <path d="M621 299 L657 292 L695 307 L710 331 L692 350 L654 351 L627 335Z"/>
    <path d="M265 72 L300 61 L335 73 L341 100 L314 119 L278 109Z"/>
  </g>

  <!-- =====================================================
       CURVED DASHED CONNECTOR LINES
  ====================================================== -->
  <g fill="none" stroke="#397FD7" stroke-width="2.5" stroke-dasharray="6 6" opacity=".75">
    <!-- To Higher Rankings -->
    <path d="M380 300 Q260 250 205 200"/>
    <!-- To More Traffic -->
    <path d="M425 290 Q425 190 425 145"/>
    <!-- To Happier Clients -->
    <path d="M470 300 Q580 250 645 205"/>
    <!-- To Doc Link Icon -->
    <path d="M225 350 Q170 340 145 340"/>
    <!-- To Settings Gear -->
    <path d="M625 360 Q690 350 710 355"/>
  </g>

  <!-- =====================================================
       FLOATING BENEFIT BADGES
  ====================================================== -->
  
  <!-- 1. HIGHER RANKINGS BADGE (Left) -->
  <g transform="translate(130, 155)" filter="url(#wlCardShadow)">
    <rect width="135" height="56" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Bullseye Target Icon -->
    <g transform="translate(15, 14)">
      <circle cx="14" cy="14" r="13" fill="none" stroke="#E11D48" stroke-width="2.8"/>
      <circle cx="14" cy="14" r="8" fill="none" stroke="#E11D48" stroke-width="2.2"/>
      <circle cx="14" cy="14" r="3.5" fill="#E11D48"/>
      <!-- Small Arrow Pointer -->
      <path d="M22 6 L27 1 M27 1 L22 1 M27 1 L27 6" stroke="#E11D48" stroke-width="2" stroke-linecap="round"/>
    </g>
    <!-- Text -->
    <text x="50" y="27" font-family="'Inter', Arial, sans-serif" font-size="12" font-weight="700" fill="#0F172A">Higher</text>
    <text x="50" y="42" font-family="'Inter', Arial, sans-serif" font-size="11" font-weight="500" fill="#64748B">Rankings</text>
  </g>

  <!-- 2. MORE TRAFFIC BADGE (Top Center) -->
  <g transform="translate(355, 60)" filter="url(#wlCardShadow)">
    <rect width="135" height="56" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Rising Chart with Red Arrow -->
    <g transform="translate(14, 13)">
      <rect x="2" y="16" width="6" height="12" rx="1.5" fill="#3B82F6"/>
      <rect x="10" y="11" width="6" height="17" rx="1.5" fill="#2563EB"/>
      <rect x="18" y="5" width="6" height="23" rx="1.5" fill="#1D4ED8"/>
      <!-- Upward Red Trend Arrow -->
      <path d="M0 16 L12 6 L26 0" fill="none" stroke="#E11D48" stroke-width="2.5" stroke-linecap="round"/>
      <polygon points="28,-3 22,0 26,4" fill="#E11D48"/>
    </g>
    <!-- Text -->
    <text x="50" y="27" font-family="'Inter', Arial, sans-serif" font-size="12" font-weight="700" fill="#0F172A">More</text>
    <text x="50" y="42" font-family="'Inter', Arial, sans-serif" font-size="11" font-weight="500" fill="#64748B">Traffic</text>
  </g>

  <!-- 3. HAPPIER CLIENTS BADGE (Right) -->
  <g transform="translate(585, 160)" filter="url(#wlCardShadow)">
    <rect width="135" height="56" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- 3 People / Clients Icon -->
    <g transform="translate(14, 15)">
      <!-- Left Person -->
      <circle cx="8" cy="8" r="4.5" fill="#E11D48"/>
      <path d="M2 22 C2 17 6 15 8 15 C10 15 14 17 14 22 Z" fill="#E11D48"/>
      <!-- Center Main Person -->
      <circle cx="16" cy="7" r="5" fill="#BE123C"/>
      <path d="M9 22 C9 16 13 14 16 14 C19 14 23 16 23 22 Z" fill="#BE123C"/>
      <!-- Right Person -->
      <circle cx="24" cy="8" r="4.5" fill="#E11D48"/>
      <path d="M18 22 C18 17 22 15 24 15 C26 15 30 17 30 22 Z" fill="#E11D48"/>
    </g>
    <!-- Text -->
    <text x="52" y="27" font-family="'Inter', Arial, sans-serif" font-size="12" font-weight="700" fill="#0F172A">Happier</text>
    <text x="52" y="42" font-family="'Inter', Arial, sans-serif" font-size="11" font-weight="500" fill="#64748B">Clients</text>
  </g>

  <!-- 4. FLOATING DOC WITH LINK (Left Side) -->
  <g transform="translate(122, 305)" filter="url(#wlSmallShadow)">
    <rect width="46" height="54" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Doc Lines -->
    <line x1="10" y1="12" x2="28" y2="12" stroke="#93C5FD" stroke-width="2.5" stroke-linecap="round"/>
    <line x1="10" y1="19" x2="36" y2="19" stroke="#BFDBFE" stroke-width="2" stroke-linecap="round"/>
    <line x1="10" y1="25" x2="36" y2="25" stroke="#BFDBFE" stroke-width="2" stroke-linecap="round"/>
    <line x1="10" y1="31" x2="24" y2="31" stroke="#BFDBFE" stroke-width="2" stroke-linecap="round"/>
    <!-- Red Link Badge Attached -->
    <g transform="translate(24, 32)">
      <circle cx="12" cy="12" r="12" fill="#E11D48"/>
      <!-- Chain Link Icon -->
      <g stroke="#FFFFFF" stroke-width="2" fill="none" stroke-linecap="round">
        <path d="M9 15 L7 17 C5 19 8 22 10 20 L12 18" transform="translate(2, -2) scale(0.75)"/>
        <path d="M15 9 L17 7 C19 5 22 8 20 10 L18 12" transform="translate(2, -2) scale(0.75)"/>
        <line x1="10" y1="14" x2="14" y2="10"/>
      </g>
    </g>
  </g>

  <!-- 5. FLOATING SETTINGS GEAR (Right Side) -->
  <g transform="translate(700, 335)" filter="url(#wlSmallShadow)">
    <circle cx="18" cy="18" r="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
    <!-- Blue Gear Icon -->
    <g transform="translate(18, 18)">
      <path d="M-3 -12 H3 L4 -8 C6 -7 7 -6 9 -4 L12 -6 L15 -2 L12 1 C12 2 12 3 12 4 L15 7 L12 11 L9 9 C7 11 6 12 4 13 L3 16 H-3 L-4 13 C-6 12 -7 11 -9 9 L-12 11 L-15 7 L-12 4 C-12 3 -12 2 -12 1 L-15 -2 L-12 -6 L-9 -4 C-7 -6 -6 -7 -4 -8 Z" fill="#2563EB"/>
      <circle cx="0" cy="0" r="4.5" fill="#FFFFFF"/>
    </g>
  </g>

  <!-- =====================================================
       PLANT (LEFT OF LAPTOP)
  ====================================================== -->
  <!-- Stem & Leaves -->
  <path d="M148 522 C147 483 150 448 157 414" fill="none" stroke="#277D50" stroke-width="4" stroke-linecap="round"/>
  <path d="M151 480 C133 456 119 432 110 405" fill="none" stroke="#277D50" stroke-width="3" stroke-linecap="round"/>
  <path d="M153 466 C177 446 193 423 199 399" fill="none" stroke="#277D50" stroke-width="3" stroke-linecap="round"/>

  <path d="M148 453 C119 450 94 433 81 405 C110 400 139 416 148 453Z" fill="url(#wlPlantGreen)"/>
  <path d="M151 431 C122 412 104 384 105 363 C132 370 151 391 151 431Z" fill="url(#wlPlantGreen)"/>
  <path d="M153 426 C146 394 151 365 173 344 C187 373 178 405 153 426Z" fill="url(#wlPlantGreen)"/>
  <path d="M158 459 C176 432 197 419 220 417 C211 443 190 458 158 459Z" fill="url(#wlPlantGreen)"/>

  <!-- Pot -->
  <path d="M119 516 H180 L171 567 C169 576 163 580 150 580 C137 580 130 576 128 567Z" fill="#FFFFFF" filter="url(#wlSmallShadow)"/>
  <path d="M119 516 H180 L176 529 H123Z" fill="#D8E8F3"/>
  <path d="M128 553 C141 558 158 558 171 553 L168 570 C156 575 143 575 132 570Z" fill="#EEF6FB"/>

  <!-- =====================================================
       LAPTOP WITH BRAND SEARCH
  ====================================================== -->
  <!-- Laptop Outer Screen Lid -->
  <rect x="209" y="282" width="426" height="286" rx="16" fill="#304E6D" filter="url(#wlSoftShadow)"/>

  <!-- Bevel -->
  <rect x="217" y="291" width="410" height="267" rx="9" fill="#E8F2F9"/>

  <!-- Screen Surface -->
  <rect x="218" y="311" width="414" height="239" rx="7" fill="#FFFFFF"/>

  <!-- Inner Display Content -->
  <g clip-path="url(#wlScreenClip)">
    <!-- Browser Strip -->
    <rect x="218" y="311" width="414" height="32" fill="#F1F6F9"/>
    <circle cx="238" cy="327" r="4" fill="#ED6D70"/>
    <circle cx="251" cy="327" r="4" fill="#F1BF63"/>
    <circle cx="264" cy="327" r="4" fill="#6CC68A"/>

    <!-- Search Box -->
    <rect x="263" y="337" width="335" height="45" rx="22" fill="#FFFFFF" stroke="#DDECF7" stroke-width="2" filter="url(#wlSmallShadow)"/>

    <!-- Google G Icon -->
    <g transform="translate(275 351) scale(0.82)">
      <path d="M19.6 10.2 C19.6 9.5 19.5 8.8 19.4 8.2 L10 8.2 L10 12.1 L15.4 12.1 C15.1 13.5 14.3 14.7 13 15.5 L13 18.3 L16.9 18.3 C19.1 16.3 20.4 13.5 19.6 10.2 Z" fill="#4285F4"/>
      <path d="M10 20 C12.7 20 15 19.1 16.9 17.4 L13 14.4 C12.2 15 11.2 15.3 10 15.3 C7.4 15.3 5.2 13.5 4.4 11.1 L0.4 11.1 L0.4 14.2 C2.3 18 6.4 20 10 20 Z" fill="#34A853"/>
      <path d="M4.4 11.1 C4 9.9 4 8.6 4.4 7.4 L4.4 4.3 L0.4 4.3 C-0.9 6.8 -0.9 9.7 0.4 12.2 L4.4 11.1 Z" fill="#FBBC05"/>
      <path d="M10 4.7 C11.4 4.7 12.8 5.2 13.8 6.2 L17 3 C15.1 1.2 12.6 0.1 10 0.1 C6.4 0.1 2.3 2.1 0.4 5.9 L4.4 9 C5.2 6.6 7.4 4.7 10 4.7 Z" fill="#EA4335"/>
    </g>

    <!-- Search Text: Your Brand -->
    <text x="303" y="365" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="600" fill="#475569">Your Brand</text>

    <!-- Search Icon -->
    <circle cx="575" cy="358" r="6.5" fill="none" stroke="#318CF1" stroke-width="2.5"/>
    <line x1="580" y1="363" x2="586" y2="369" stroke="#318CF1" stroke-width="2.5" stroke-linecap="round"/>

    <!-- Search Result Item 1 -->
    <rect x="267" y="389" width="163" height="9" rx="4.5" fill="#2F8DF0"/>
    <rect x="267" y="407" width="99" height="8" rx="4" fill="#76C89D"/>
    <rect x="371" y="407" width="89" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="424" width="104" height="8" rx="4" fill="#64B98D"/>
    <rect x="376" y="424" width="104" height="8" rx="4" fill="#D9E5EC"/>
    <rect x="267" y="442" width="154" height="8" rx="4" fill="#D5E2EB"/>

    <!-- Search Result Item 2 -->
    <rect x="267" y="467" width="163" height="9" rx="4.5" fill="#2F8DF0"/>
    <rect x="267" y="485" width="99" height="8" rx="4" fill="#76C89D"/>
    <rect x="371" y="485" width="90" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="502" width="105" height="8" rx="4" fill="#64B98D"/>
    <rect x="378" y="502" width="96" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="519" width="151" height="8" rx="4" fill="#D9E5EC"/>
  </g>

  <!-- Laptop Camera -->
  <circle cx="422" cy="289" r="3" fill="#1D3953"/>

  <!-- Laptop Base -->
  <path d="M183 558 H662 L670 574 C671 577 667 580 663 580 H189 C184 580 181 576 183 558Z" fill="url(#wlLaptopBody)" filter="url(#wlSmallShadow)"/>
  <path d="M389 559 H455 L449 569 H395Z" fill="#7EA9C9" opacity=".65"/>

  <!-- =====================================================
       FLOATING SEO METRIC CARD
  ====================================================== -->
  <g filter="url(#wlSoftShadow)">
    <rect x="538" y="387" width="137" height="118" rx="12" fill="#FFFFFF" stroke="#EBF3F9" stroke-width="1.5"/>
    <!-- Trend Line -->
    <path d="M560 458 L585 437 L606 449 L635 421 L653 403" fill="none" stroke="#55A4F3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    <!-- Arrow -->
    <path d="M637 403 L654 401 L652 418" fill="none" stroke="#2685EB" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    <!-- Bars -->
    <rect x="561" y="472" width="15" height="16" rx="2" fill="url(#wlChartBlue)"/>
    <rect x="586" y="459" width="15" height="29" rx="2" fill="url(#wlChartBlue)"/>
    <rect x="611" y="445" width="15" height="43" rx="2" fill="url(#wlChartBlue)"/>
    <rect x="636" y="431" width="15" height="57" rx="2" fill="url(#wlChartBlue)"/>
  </g>

  <!-- =====================================================
       MAGNIFYING GLASS WITH "SEO" TEXT (FRONT RIGHT)
  ====================================================== -->
  <g transform="translate(600, 395)" filter="url(#wlCardShadow)">
    <!-- Handle -->
    <path d="M68 68 L104 104 C108 108 114 108 118 104 C122 100 122 94 118 90 L82 54 Z" fill="url(#wlHandleGrad)"/>
    <path d="M96 96 L108 108 C111 111 115 111 118 108 C121 105 121 101 118 98 L106 86 Z" fill="#1E40AF"/>

    <!-- Outer Rim -->
    <circle cx="45" cy="45" r="44" fill="none" stroke="#2563EB" stroke-width="11"/>
    
    <!-- Inner Lens Surface -->
    <circle cx="45" cy="45" r="39" fill="url(#wlLensGrad)"/>
    
    <!-- Lens Reflection Arc -->
    <path d="M20 22 C32 14 55 14 68 24 C64 26 35 24 20 22 Z" fill="#FFFFFF" opacity=".6"/>

    <!-- Big "SEO" Text inside lens -->
    <text x="45" y="55" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="25" font-weight="900" fill="#1E3A8A" text-anchor="middle" letter-spacing="1">SEO</text>
  </g>

  <!-- =====================================================
       GROUND SHADOWS
  ====================================================== -->
  <ellipse cx="425" cy="589" rx="352" ry="17" fill="#DDEFFC"/>
  <ellipse cx="425" cy="589" rx="255" ry="9" fill="#C9E3F4" opacity=".65"/>
</svg>
<?php $white_label_seo_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'White Label SEO Services']
    ],
    'title' => 'White Label SEO <span class="text-danger-highlight">Services</span>',
    'description' => 'Scale your agency with our white label SEO services. We deliver high-quality, result-driven SEO, so you can focus on your clients while we handle the rankings.',
    'cta_text' => 'Grow Your Agency Today',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-shield-check',
            'title' => '100%',
            'subtitle' => 'White Label'
        ],
        [
            'icon' => 'bi bi-bar-chart-line-fill',
            'title' => 'Proven',
            'subtitle' => 'SEO Results'
        ],
        [
            'icon' => 'bi bi-headset',
            'title' => 'Dedicated',
            'subtitle' => 'Support'
        ]
    ],
    'svg' => $white_label_seo_svg
]); ?>

<!-- 3. White Label SEO Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Turnkey SEO Fulfillment for Agencies &amp; Growth Partners</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Deliver award-winning search engine optimization campaigns to your clients under your own brand. We handle technical audits, on-page optimization, content strategy, and high-authority link building while you focus on client relationships and sales.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">100% Unbranded Reporting</h5>
                                <p class="small text-muted mb-0">Custom client dashboards and monthly white-labeled PDF reports carrying your agency logo and branding.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Confidential &amp; Strict NDAs</h5>
                                <p class="small text-muted mb-0">Complete client confidentiality protected with bilateral non-disclosure agreements across all deliverables.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Dedicated Account Manager</h5>
                                <p class="small text-muted mb-0">Direct access to experienced SEO strategists supporting your pitches, audits, and campaign delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
