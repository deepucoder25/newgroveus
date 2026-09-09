<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define International SEO Vector Artwork SVG
ob_start(); ?>
<svg viewBox="0 0 832 627" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- =========================
         GRADIENTS
    ========================== -->
    <linearGradient id="globeBlue" x1="320" y1="120" x2="540" y2="330" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#48A5FF"/>
      <stop offset="0.55" stop-color="#287FEA"/>
      <stop offset="1" stop-color="#1769D2"/>
    </linearGradient>

    <linearGradient id="screenBlue" x1="220" y1="300" x2="630" y2="560" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#EAF6FF"/>
      <stop offset="1" stop-color="#CFE7F8"/>
    </linearGradient>

    <linearGradient id="laptopBody" x1="180" y1="540" x2="650" y2="585" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#9EC6E5"/>
      <stop offset="1" stop-color="#BBD8EC"/>
    </linearGradient>

    <linearGradient id="chartBlue" x1="550" y1="500" x2="650" y2="400" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#2588ED"/>
      <stop offset="1" stop-color="#318EF0"/>
    </linearGradient>

    <linearGradient id="redPin" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#F13A3E"/>
      <stop offset="1" stop-color="#D9272C"/>
    </linearGradient>

    <linearGradient id="plantGreen" x1="90" y1="400" x2="200" y2="520" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#48B968"/>
      <stop offset="1" stop-color="#269852"/>
    </linearGradient>

    <!-- =========================
         SHADOWS
    ========================== -->
    <filter id="softShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="7" stdDeviation="8" flood-color="#658AA8" flood-opacity=".18"/>
    </filter>

    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="3" stdDeviation="4" flood-color="#6C91AD" flood-opacity=".18"/>
    </filter>

    <!-- =========================
         CLIPS
    ========================== -->
    <clipPath id="globeClip">
      <circle cx="425" cy="258" r="111"/>
    </clipPath>

    <clipPath id="screenClip">
      <rect x="218" y="311" width="414" height="239" rx="7"/>
    </clipPath>

    <!-- Flag Pin Clips -->
    <clipPath id="usaPinClip">
      <circle cx="139" cy="192" r="14"/>
    </clipPath>
    <clipPath id="ukPinClip">
      <circle cx="257" cy="103" r="14"/>
    </clipPath>
    <clipPath id="germanyPinClip">
      <circle cx="596" cy="78" r="14"/>
    </clipPath>
    <clipPath id="francePinClip">
      <circle cx="726" cy="187" r="14"/>
    </clipPath>
    <clipPath id="ausPinClip">
      <circle cx="758" cy="319" r="14"/>
    </clipPath>
  </defs>

  <!-- =====================================================
       BACKGROUND SHAPES
  ====================================================== -->
  <!-- Soft blue organic glow background -->
  <path d="M38 398 C67 322 119 275 194 252 C271 229 294 167 359 125 C433 77 517 91 573 140 C632 191 694 203 748 250 C802 298 832 363 819 428 C804 507 719 560 625 558 C525 556 473 590 368 587 C255 584 91 541 38 398Z" fill="#F0F8FF"/>

  <!-- =====================================================
       WORLD MAP BACKGROUND
  ====================================================== -->
  <g opacity=".48" fill="#DCEFFC">
    <!-- North America -->
    <path d="M78 170 C108 139 151 119 193 120 L229 135 L220 156 L194 167 L179 191 L147 194 L126 220 L101 214 L95 191 L72 184Z"/>
    <!-- South America -->
    <path d="M205 232 L230 245 L243 280 L232 315 L215 347 L201 378 L183 359 L188 322 L177 291 L187 260Z"/>
    <!-- Europe -->
    <path d="M356 145 L383 132 L411 137 L429 150 L419 165 L391 165 L374 178 L353 167Z"/>
    <!-- Africa -->
    <path d="M380 190 L417 188 L443 211 L449 251 L432 294 L409 325 L386 294 L374 250 L365 217Z"/>
    <!-- Asia -->
    <path d="M425 141 L469 119 L518 125 L565 143 L604 165 L640 168 L671 193 L657 217 L614 212 L584 226 L546 211 L505 202 L471 181 L438 176Z"/>
    <!-- Australia -->
    <path d="M621 299 L657 292 L695 307 L710 331 L692 350 L654 351 L627 335Z"/>
    <!-- Greenland -->
    <path d="M265 72 L300 61 L335 73 L341 100 L314 119 L278 109Z"/>
  </g>

  <!-- =====================================================
       ROUTE CONNECTION LINES
  ====================================================== -->
  <g fill="none" stroke="#397FD7" stroke-width="2.5" stroke-dasharray="7 7" opacity=".82">
    <!-- USA to UK -->
    <path d="M139 205 C190 185 220 174 258 116"/>
    <!-- UK to center -->
    <path d="M258 116 C311 122 355 158 425 158"/>
    <!-- center to Germany -->
    <path d="M425 158 C477 119 537 99 595 87"/>
    <!-- center to France -->
    <path d="M425 158 C493 145 596 165 726 196"/>
    <!-- France to Australia -->
    <path d="M726 196 C755 251 765 286 758 333"/>
    <!-- USA to center -->
    <path d="M139 205 C240 209 306 188 425 158"/>
  </g>

  <!-- =====================================================
       BLUE GLOBE
  ====================================================== -->
  <circle cx="425" cy="258" r="111" fill="url(#globeBlue)" filter="url(#softShadow)"/>

  <!-- Simplified continents on Globe -->
  <g clip-path="url(#globeClip)" fill="#FFFFFF" opacity=".88">
    <!-- North America -->
    <path d="M326 174 L349 151 L379 146 L391 160 L378 174 L356 182 L348 202 L331 199Z"/>
    <!-- South America -->
    <path d="M376 228 L397 240 L405 265 L397 292 L382 320 L371 301 L376 276 L364 250Z"/>
    <!-- Europe -->
    <path d="M416 176 L434 166 L452 170 L459 181 L448 188 L430 186Z"/>
    <!-- Africa -->
    <path d="M421 191 L449 188 L464 205 L461 231 L447 260 L432 279 L417 254 L410 224Z"/>
    <!-- Asia -->
    <path d="M454 162 L485 148 L522 157 L552 174 L570 193 L555 207 L526 202 L506 214 L481 200 L459 190Z"/>
    <!-- Australia -->
    <path d="M518 253 L546 247 L564 258 L569 274 L550 283 L528 277Z"/>
    <!-- Greenland -->
    <path d="M390 119 L412 112 L432 121 L429 137 L407 142 L391 133Z"/>
  </g>

  <!-- Globe longitude/latitude grid -->
  <g fill="none" stroke="#74B7F4" stroke-width="1.5" opacity=".45">
    <ellipse cx="425" cy="258" rx="58" ry="111"/>
    <ellipse cx="425" cy="258" rx="111" ry="43"/>
    <ellipse cx="425" cy="258" rx="111" ry="78"/>
  </g>

  <!-- =====================================================
       LOCATION PINS WITH FLAGS
  ====================================================== -->

  <!-- USA PIN (Left) -->
  <g filter="url(#smallShadow)">
    <path d="M139 166 C124 166 113 177 113 192 C113 213 139 238 139 238 C139 238 165 213 165 192 C165 177 154 166 139 166Z" fill="url(#redPin)"/>
    <circle cx="139" cy="192" r="17" fill="#FFFFFF"/>
    <!-- USA Flag Content inside pin -->
    <g clip-path="url(#usaPinClip)">
      <rect x="123" y="176" width="32" height="32" fill="#FFFFFF"/>
      <path d="M123 178H155V181H123ZM123 184H155V187H123ZM123 190H155V193H123ZM123 196H155V199H123ZM123 202H155V205H123" fill="#E83439"/>
      <rect x="123" y="176" width="15" height="15" fill="#214B9A"/>
      <circle cx="127" cy="180" r="1" fill="#FFFFFF"/>
      <circle cx="134" cy="180" r="1" fill="#FFFFFF"/>
      <circle cx="130.5" cy="184" r="1" fill="#FFFFFF"/>
      <circle cx="127" cy="188" r="1" fill="#FFFFFF"/>
      <circle cx="134" cy="188" r="1" fill="#FFFFFF"/>
    </g>
  </g>

  <!-- UK PIN (Top-Left) -->
  <g filter="url(#smallShadow)">
    <path d="M257 77 C242 77 231 88 231 103 C231 124 257 148 257 148 C257 148 283 124 283 103 C283 88 272 77 257 77Z" fill="url(#redPin)"/>
    <circle cx="257" cy="103" r="17" fill="#FFFFFF"/>
    <g clip-path="url(#ukPinClip)">
      <circle cx="257" cy="103" r="14" fill="#012169"/>
      <!-- Saltires -->
      <path d="M243 89 L271 117 M271 89 L243 117" stroke="#FFFFFF" stroke-width="4.5"/>
      <path d="M243 89 L271 117 M271 89 L243 117" stroke="#C8102E" stroke-width="2"/>
      <!-- Cross -->
      <path d="M257 89 V117 M243 103 H271" stroke="#FFFFFF" stroke-width="6"/>
      <path d="M257 89 V117 M243 103 H271" stroke="#E83B3F" stroke-width="3.5"/>
    </g>
  </g>

  <!-- GERMANY PIN (Top-Right) -->
  <g filter="url(#smallShadow)">
    <path d="M596 52 C581 52 570 63 570 78 C570 99 596 124 596 124 C596 124 622 99 622 78 C622 63 611 52 596 52Z" fill="url(#redPin)"/>
    <circle cx="596" cy="78" r="17" fill="#FFFFFF"/>
    <g clip-path="url(#germanyPinClip)">
      <rect x="580" y="64" width="32" height="10" fill="#1D1D1D"/>
      <rect x="580" y="74" width="32" height="9" fill="#D72831"/>
      <rect x="580" y="83" width="32" height="10" fill="#F4C52B"/>
    </g>
  </g>

  <!-- FRANCE PIN (Right) -->
  <g filter="url(#smallShadow)">
    <path d="M726 161 C711 161 700 172 700 187 C700 208 726 232 726 232 C726 232 752 208 752 187 C752 172 741 161 726 161Z" fill="url(#redPin)"/>
    <circle cx="726" cy="187" r="17" fill="#FFFFFF"/>
    <g clip-path="url(#francePinClip)">
      <rect x="712" y="173" width="10" height="28" fill="#244B9A"/>
      <rect x="721" y="173" width="9" height="28" fill="#FFFFFF"/>
      <rect x="730" y="173" width="10" height="28" fill="#E52D32"/>
    </g>
  </g>

  <!-- AUSTRALIA PIN (Bottom-Right) -->
  <g filter="url(#smallShadow)">
    <path d="M758 293 C743 293 732 304 732 319 C732 340 758 365 758 365 C758 365 784 340 784 319 C784 304 773 293 758 293Z" fill="url(#redPin)"/>
    <circle cx="758" cy="319" r="17" fill="#FFFFFF"/>
    <g clip-path="url(#ausPinClip)">
      <circle cx="758" cy="319" r="14" fill="#012169"/>
      <!-- Mini Union Jack Canton -->
      <rect x="744" y="305" width="14" height="14" fill="#012169"/>
      <path d="M744 305 L758 319 M758 305 L744 319" stroke="#FFFFFF" stroke-width="2"/>
      <path d="M744 305 L758 319 M758 305 L744 319" stroke="#C8102E" stroke-width="0.8"/>
      <path d="M751 305 V319 M744 312 H758" stroke="#FFFFFF" stroke-width="3"/>
      <path d="M751 305 V319 M744 312 H758" stroke="#E83B3F" stroke-width="1.5"/>
      <!-- Stars -->
      <circle cx="750" cy="326" r="1.8" fill="#FFFFFF"/>
      <circle cx="766" cy="312" r="1.2" fill="#FFFFFF"/>
      <circle cx="769" cy="318" r="1.2" fill="#FFFFFF"/>
      <circle cx="765" cy="325" r="1.2" fill="#FFFFFF"/>
      <circle cx="762" cy="319" r="0.9" fill="#FFFFFF"/>
    </g>
  </g>

  <!-- CENTER GLOBE PIN -->
  <g filter="url(#smallShadow)">
    <path d="M425 121 C410 121 399 132 399 147 C399 168 425 193 425 193 C425 193 451 168 451 147 C451 132 440 121 425 121Z" fill="url(#redPin)"/>
    <circle cx="425" cy="147" r="17" fill="#FFFFFF"/>
    <circle cx="425" cy="147" r="7" fill="#E93236"/>
  </g>

  <!-- =====================================================
       PLANT
  ====================================================== -->
  <!-- stem -->
  <path d="M148 522 C147 483 150 448 157 414" fill="none" stroke="#277D50" stroke-width="4" stroke-linecap="round"/>
  <!-- left stem -->
  <path d="M151 480 C133 456 119 432 110 405" fill="none" stroke="#277D50" stroke-width="3" stroke-linecap="round"/>
  <!-- right stem -->
  <path d="M153 466 C177 446 193 423 199 399" fill="none" stroke="#277D50" stroke-width="3" stroke-linecap="round"/>

  <!-- left leaf -->
  <path d="M148 453 C119 450 94 433 81 405 C110 400 139 416 148 453Z" fill="url(#plantGreen)"/>
  <!-- big left leaf -->
  <path d="M151 431 C122 412 104 384 105 363 C132 370 151 391 151 431Z" fill="url(#plantGreen)"/>
  <!-- center leaf -->
  <path d="M153 426 C146 394 151 365 173 344 C187 373 178 405 153 426Z" fill="url(#plantGreen)"/>
  <!-- right leaf -->
  <path d="M158 459 C176 432 197 419 220 417 C211 443 190 458 158 459Z" fill="url(#plantGreen)"/>

  <!-- pot -->
  <path d="M119 516 H180 L171 567 C169 576 163 580 150 580 C137 580 130 576 128 567Z" fill="#FFFFFF" filter="url(#smallShadow)"/>
  <path d="M119 516 H180 L176 529 H123Z" fill="#D8E8F3"/>
  <path d="M128 553 C141 558 158 558 171 553 L168 570 C156 575 143 575 132 570Z" fill="#EEF6FB"/>

  <!-- =====================================================
       LAPTOP
  ====================================================== -->
  <!-- laptop outer screen -->
  <rect x="209" y="282" width="426" height="286" rx="16" fill="#304E6D" filter="url(#softShadow)"/>

  <!-- top bevel -->
  <rect x="217" y="291" width="410" height="267" rx="9" fill="#E8F2F9"/>

  <!-- screen -->
  <rect x="218" y="311" width="414" height="239" rx="7" fill="#FFFFFF"/>

  <!-- browser inner screen -->
  <g clip-path="url(#screenClip)">
    <!-- browser top strip -->
    <rect x="218" y="311" width="414" height="32" fill="#F1F6F9"/>
    <!-- browser window circles -->
    <circle cx="238" cy="327" r="4" fill="#ED6D70"/>
    <circle cx="251" cy="327" r="4" fill="#F1BF63"/>
    <circle cx="264" cy="327" r="4" fill="#6CC68A"/>

    <!-- search box -->
    <rect x="263" y="337" width="335" height="45" rx="22" fill="#FFFFFF" stroke="#DDECF7" stroke-width="2" filter="url(#smallShadow)"/>

    <!-- Multi-color Google G Icon -->
    <g transform="translate(275 351) scale(0.82)">
      <path d="M19.6 10.2 C19.6 9.5 19.5 8.8 19.4 8.2 L10 8.2 L10 12.1 L15.4 12.1 C15.1 13.5 14.3 14.7 13 15.5 L13 18.3 L16.9 18.3 C19.1 16.3 20.4 13.5 19.6 10.2 Z" fill="#4285F4"/>
      <path d="M10 20 C12.7 20 15 19.1 16.9 17.4 L13 14.4 C12.2 15 11.2 15.3 10 15.3 C7.4 15.3 5.2 13.5 4.4 11.1 L0.4 11.1 L0.4 14.2 C2.3 18 6.4 20 10 20 Z" fill="#34A853"/>
      <path d="M4.4 11.1 C4 9.9 4 8.6 4.4 7.4 L4.4 4.3 L0.4 4.3 C-0.9 6.8 -0.9 9.7 0.4 12.2 L4.4 11.1 Z" fill="#FBBC05"/>
      <path d="M10 4.7 C11.4 4.7 12.8 5.2 13.8 6.2 L17 3 C15.1 1.2 12.6 0.1 10 0.1 C6.4 0.1 2.3 2.1 0.4 5.9 L4.4 9 C5.2 6.6 7.4 4.7 10 4.7 Z" fill="#EA4335"/>
    </g>

    <text x="303" y="365" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="500" fill="#71869B">Global Search...</text>

    <!-- search icon -->
    <circle cx="575" cy="358" r="6.5" fill="none" stroke="#318CF1" stroke-width="2.5"/>
    <line x1="580" y1="363" x2="586" y2="369" stroke="#318CF1" stroke-width="2.5" stroke-linecap="round"/>

    <!-- SEO result lines 1 -->
    <rect x="267" y="389" width="163" height="9" rx="4.5" fill="#2F8DF0"/>
    <rect x="267" y="407" width="99" height="8" rx="4" fill="#76C89D"/>
    <rect x="371" y="407" width="89" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="424" width="104" height="8" rx="4" fill="#64B98D"/>
    <rect x="376" y="424" width="104" height="8" rx="4" fill="#D9E5EC"/>
    <rect x="267" y="442" width="154" height="8" rx="4" fill="#D5E2EB"/>

    <!-- SEO result lines 2 -->
    <rect x="267" y="467" width="163" height="9" rx="4.5" fill="#2F8DF0"/>
    <rect x="267" y="485" width="99" height="8" rx="4" fill="#76C89D"/>
    <rect x="371" y="485" width="90" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="502" width="105" height="8" rx="4" fill="#64B98D"/>
    <rect x="378" y="502" width="96" height="8" rx="4" fill="#D5E2EB"/>
    <rect x="267" y="519" width="151" height="8" rx="4" fill="#D9E5EC"/>
  </g>

  <!-- laptop camera -->
  <circle cx="422" cy="289" r="3" fill="#1D3953"/>

  <!-- laptop bottom base -->
  <path d="M183 558 H662 L670 574 C671 577 667 580 663 580 H189 C184 580 181 576 183 558Z" fill="url(#laptopBody)" filter="url(#smallShadow)"/>

  <!-- trackpad -->
  <path d="M389 559 H455 L449 569 H395Z" fill="#7EA9C9" opacity=".65"/>

  <!-- =====================================================
       FLOATING SEO CHART CARD
  ====================================================== -->
  <g filter="url(#softShadow)">
    <!-- card background -->
    <rect x="538" y="387" width="137" height="118" rx="12" fill="#FFFFFF" stroke="#EBF3F9" stroke-width="1.5"/>

    <!-- graph trend line -->
    <path d="M560 458 L585 437 L606 449 L635 421 L653 403" fill="none" stroke="#55A4F3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>

    <!-- arrow head -->
    <path d="M637 403 L654 401 L652 418" fill="none" stroke="#2685EB" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>

    <!-- growth bars -->
    <rect x="561" y="472" width="15" height="16" rx="2" fill="url(#chartBlue)"/>
    <rect x="586" y="459" width="15" height="29" rx="2" fill="url(#chartBlue)"/>
    <rect x="611" y="445" width="15" height="43" rx="2" fill="url(#chartBlue)"/>
    <rect x="636" y="431" width="15" height="57" rx="2" fill="url(#chartBlue)"/>
  </g>

  <!-- =====================================================
       GROUND BASE SHADOW
  ====================================================== -->
  <ellipse cx="425" cy="589" rx="352" ry="17" fill="#DDEFFC"/>
  <ellipse cx="425" cy="589" rx="255" ry="9" fill="#C9E3F4" opacity=".65"/>
</svg>
<?php $international_seo_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'International SEO Services']
    ],
    'title' => 'Expand Your Reach <span class="text-danger-highlight">Globally</span>',
    'description' => 'Get found in new markets with our international SEO services. We help your business rank higher across countries and reach the right audience worldwide.',
    'cta_text' => 'Grow Your Global Presence',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-globe2',
            'title' => 'Target',
            'subtitle' => 'International Markets'
        ],
        [
            'icon' => 'bi bi-bar-chart-line-fill',
            'title' => 'Multilingual',
            'subtitle' => 'SEO Strategies'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Higher Global',
            'subtitle' => 'Rankings'
        ]
    ],
    'svg' => $international_seo_svg
]); ?>
<div class="iseo-page-wrap">

    <!-- =========================================================================
         SECTION 1: Multi-Language & Hreflang Architecture (SVG Left / Content Right)
         ========================================================================= -->
    <section class="iseo-feature-section iseo-bg-white">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Left: Col-6 Vector SVG Artwork -->
                <div class="col-12 col-lg-6">
                    <div class="iseo-artwork-wrapper">
                        <svg class="iseo-artwork-svg" viewBox="0 0 640 460" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <linearGradient id="s1GlobeBg" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#3b82f6"/>
                                    <stop offset="50%" stop-color="#2563eb"/>
                                    <stop offset="100%" stop-color="#1d4ed8"/>
                                </linearGradient>
                                <linearGradient id="s1CardGrad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#0f172a"/>
                                    <stop offset="100%" stop-color="#1e293b"/>
                                </linearGradient>
                                <filter id="s1Drop" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#0f172a" flood-opacity="0.14"/>
                                </filter>
                                <filter id="s1SoftGlow" x="-30%" y="-30%" width="160%" height="160%">
                                    <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#3b82f6" flood-opacity="0.18"/>
                                </filter>
                                <clipPath id="s1GlobeClip">
                                    <circle cx="190" cy="220" r="105"/>
                                </clipPath>
                            </defs>

                            <!-- Ambient Glow Backdrop -->
                            <rect x="20" y="20" width="600" height="420" rx="20" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1.5"/>
                            <circle cx="190" cy="220" r="140" fill="#e0f2fe" opacity="0.6"/>

                            <!-- ================= LEFT: 3D GLOBE WITH REGIONAL PIN HUBS ================= -->
                            <!-- Connecting Curved Orbit Rings -->
                            <ellipse cx="190" cy="220" rx="135" ry="135" fill="none" stroke="#93c5fd" stroke-width="1.8" stroke-dasharray="6 6" opacity="0.75"/>
                            <path d="M190 85 C 310 100, 360 180, 360 220" fill="none" stroke="#60a5fa" stroke-width="2" stroke-dasharray="4 4"/>
                            <path d="M190 355 C 310 340, 360 260, 360 220" fill="none" stroke="#60a5fa" stroke-width="2" stroke-dasharray="4 4"/>

                            <!-- Main Globe Sphere -->
                            <circle cx="190" cy="220" r="105" fill="url(#s1GlobeBg)" filter="url(#s1SoftGlow)"/>

                            <!-- Detailed Vector Continents inside Globe -->
                            <g clip-path="url(#s1GlobeClip)" fill="#ffffff" opacity="0.88">
                                <!-- North America -->
                                <path d="M100 150 Q130 130 160 145 Q180 170 160 190 Q130 200 110 180 Z"/>
                                <!-- South America -->
                                <path d="M140 215 Q170 225 180 255 Q165 290 145 285 Q130 250 140 215 Z"/>
                                <!-- Europe -->
                                <path d="M190 140 Q225 135 240 155 Q230 175 205 170 Z"/>
                                <!-- Africa -->
                                <path d="M195 180 Q235 180 245 220 Q230 265 205 255 Q190 220 195 180 Z"/>
                                <!-- Asia -->
                                <path d="M235 135 Q285 140 290 180 Q265 200 245 175 Z"/>
                            </g>

                            <!-- Globe Latitude/Longitude Grid -->
                            <g fill="none" stroke="#93c5fd" stroke-width="1.4" opacity="0.45">
                                <ellipse cx="190" cy="220" rx="55" ry="105"/>
                                <ellipse cx="190" cy="220" rx="105" ry="38"/>
                                <ellipse cx="190" cy="220" rx="105" ry="72"/>
                            </g>

                            <!-- Country Pins on Orbit -->
                            <!-- US (en-US) -->
                            <g transform="translate(65, 80)" filter="url(#s1Drop)">
                                <rect width="96" height="34" rx="17" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="17" cy="17" r="10" fill="#1e3a8a"/>
                                <path d="M11 17 H23 M17 11 V23" stroke="#ffffff" stroke-width="2"/>
                                <path d="M11 17 H23 M17 11 V23" stroke="#c91a25" stroke-width="1.2"/>
                                <text x="34" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0f172a">en-US</text>
                            </g>

                            <!-- UK (en-GB) -->
                            <g transform="translate(225, 65)" filter="url(#s1Drop)">
                                <rect width="96" height="34" rx="17" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="17" cy="17" r="10" fill="#012169"/>
                                <path d="M9 9 L25 25 M25 9 L9 25" stroke="#ffffff" stroke-width="2.5"/>
                                <path d="M9 9 L25 25 M25 9 L9 25" stroke="#c8102e" stroke-width="1.2"/>
                                <path d="M17 7 V27 M7 17 H27" stroke="#ffffff" stroke-width="3.5"/>
                                <path d="M17 7 V27 M7 17 H27" stroke="#c8102e" stroke-width="2"/>
                                <text x="34" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0f172a">en-GB</text>
                            </g>

                            <!-- Germany (de-DE) -->
                            <g transform="translate(35, 230)" filter="url(#s1Drop)">
                                <rect width="96" height="34" rx="17" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="17" cy="17" r="10" fill="#1e293b"/>
                                <path d="M7 17 H27" stroke="#ef4444" stroke-width="4"/>
                                <path d="M7 21 H27" stroke="#eab308" stroke-width="3"/>
                                <text x="34" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0f172a">de-DE</text>
                            </g>

                            <!-- France (fr-FR) -->
                            <g transform="translate(240, 240)" filter="url(#s1Drop)">
                                <rect width="96" height="34" rx="17" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="17" cy="17" r="10" fill="#ffffff" stroke="#e2e8f0"/>
                                <rect x="9" y="8" width="5" height="18" fill="#2563eb"/>
                                <rect x="19" y="8" width="6" height="18" fill="#ef4444"/>
                                <text x="34" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0f172a">fr-FR</text>
                            </g>

                            <!-- Spain (es-ES) -->
                            <g transform="translate(130, 350)" filter="url(#s1Drop)">
                                <rect width="96" height="34" rx="17" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="17" cy="17" r="10" fill="#f59e0b"/>
                                <rect x="8" y="14" width="18" height="6" fill="#ef4444"/>
                                <text x="34" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0f172a">es-ES</text>
                            </g>

                            <!-- ================= RIGHT: FLOATING HREFLANG CODE & URL ROUTING CARD ================= -->
                            <!-- Domain Architecture Card -->
                            <g transform="translate(340, 55)" filter="url(#s1Drop)">
                                <rect width="265" height="150" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <rect x="0" y="0" width="265" height="38" rx="14" fill="#f8fafc"/>
                                <rect x="0" y="26" width="265" height="12" fill="#f8fafc"/>
                                <line x1="0" y1="38" x2="265" y2="38" stroke="#e2e8f0" stroke-width="1"/>
                                
                                <circle cx="18" cy="19" r="4" fill="#ef4444"/>
                                <circle cx="30" cy="19" r="4" fill="#f59e0b"/>
                                <circle cx="42" cy="19" r="4" fill="#10b981"/>
                                <text x="56" y="23" font-family="'Outfit', sans-serif" font-size="12" font-weight="700" fill="#334155">Global Domain Structure</text>

                                <!-- Row 1: ccTLD -->
                                <g transform="translate(14, 52)">
                                    <rect width="18" height="18" rx="4" fill="#fee2e2"/>
                                    <path d="M5 9 L8 12 L13 6" stroke="#c91a25" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <text x="26" y="14" font-family="monospace" font-size="11.5" font-weight="700" fill="#0f172a">brand.de</text>
                                    <text x="175" y="14" font-family="'Outfit', sans-serif" font-size="10.5" font-weight="600" fill="#64748b">ccTLD</text>
                                </g>

                                <!-- Row 2: Subfolder -->
                                <g transform="translate(14, 82)">
                                    <rect width="18" height="18" rx="4" fill="#dcfce7"/>
                                    <path d="M5 9 L8 12 L13 6" stroke="#16a34a" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <text x="26" y="14" font-family="monospace" font-size="11.5" font-weight="700" fill="#0f172a">brand.com/es/</text>
                                    <text x="175" y="14" font-family="'Outfit', sans-serif" font-size="10.5" font-weight="600" fill="#64748b">Subfolder</text>
                                </g>

                                <!-- Row 3: Subdomain -->
                                <g transform="translate(14, 112)">
                                    <rect width="18" height="18" rx="4" fill="#e0f2fe"/>
                                    <path d="M5 9 L8 12 L13 6" stroke="#0284c7" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <text x="26" y="14" font-family="monospace" font-size="11.5" font-weight="700" fill="#0f172a">fr.brand.com</text>
                                    <text x="175" y="14" font-family="'Outfit', sans-serif" font-size="10.5" font-weight="600" fill="#64748b">Subdomain</text>
                                </g>
                            </g>

                            <!-- Hreflang XML Validator Card -->
                            <g transform="translate(340, 225)" filter="url(#s1Drop)">
                                <rect width="265" height="175" rx="14" fill="url(#s1CardGrad)" stroke="#334155" stroke-width="1.5"/>
                                <rect x="0" y="0" width="265" height="34" rx="14" fill="#1e293b"/>
                                <rect x="0" y="24" width="265" height="10" fill="#1e293b"/>
                                <line x1="0" y1="34" x2="265" y2="34" stroke="#334155" stroke-width="1"/>
                                
                                <circle cx="16" cy="17" r="3.5" fill="#ef4444"/>
                                <circle cx="27" cy="17" r="3.5" fill="#f59e0b"/>
                                <circle cx="38" cy="17" r="3.5" fill="#10b981"/>
                                <text x="50" y="21" font-family="monospace" font-size="11" fill="#94a3b8">hreflang-tags.xml</text>

                                <!-- Code lines -->
                                <g font-family="monospace" font-size="10.5">
                                    <text x="14" y="54" fill="#f43f5e">&lt;link <tspan fill="#38bdf8">rel=</tspan><tspan fill="#a7f3d0">"alternate"</tspan></text>
                                    <text x="24" y="70" fill="#38bdf8">hreflang=<tspan fill="#fde047">"en-US"</tspan> <tspan fill="#94a3b8">href=</tspan><tspan fill="#cbd5e1">"..."</tspan>&gt;</text>

                                    <text x="14" y="94" fill="#f43f5e">&lt;link <tspan fill="#38bdf8">rel=</tspan><tspan fill="#a7f3d0">"alternate"</tspan></text>
                                    <text x="24" y="110" fill="#38bdf8">hreflang=<tspan fill="#fde047">"de-DE"</tspan> <tspan fill="#94a3b8">href=</tspan><tspan fill="#cbd5e1">"..."</tspan>&gt;</text>

                                    <text x="14" y="134" fill="#f43f5e">&lt;link <tspan fill="#38bdf8">rel=</tspan><tspan fill="#a7f3d0">"alternate"</tspan></text>
                                    <text x="24" y="150" fill="#38bdf8">hreflang=<tspan fill="#fde047">"x-default"</tspan> <tspan fill="#94a3b8">href=</tspan><tspan fill="#cbd5e1">"..."</tspan>&gt;</text>
                                </g>

                                <rect x="14" y="158" width="237" height="1" fill="#334155"/>
                            </g>
                        </svg>
                    </div>
                </div>

                <!-- Right: Col-6 Detailed Content -->
                <div class="col-12 col-lg-6 ps-lg-4">
                    <div class="iseo-badge">
                        <i class="bi bi-diagram-3-fill"></i> Multi-Regional Architecture
                    </div>
                    <h2 class="iseo-heading">
                        Flawless <span class="iseo-highlight">Hreflang Implementation</span> &amp; Global Domain Architecture
                    </h2>
                    <p class="iseo-lead">
                        Serving the correct language and currency to visitors worldwide prevents costly ranking cannibalization. We structure your international URLs with precision tags to guarantee search engines route every regional searcher to their designated localized experience.
                    </p>
                    
                    <ul class="iseo-checklist">
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Bi-Directional Hreflang Tagging:</strong> Error-free language and regional ISO code annotations preventing duplicate content penalties.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>ccTLD, Subdomain &amp; Subfolder Strategy:</strong> Strategic domain roadmap choosing between <code>.de</code>, <code>es.site.com</code>, or <code>site.com/fr/</code>.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>x-Default Global Fallback Routing:</strong> Seamless fallback mapping ensuring unmatched geographical queries land on the optimal master page.
                            </div>
                        </li>
                    </ul>

                    <div class="iseo-mini-highlight">
                        <div class="iseo-mini-title">
                            <i class="bi bi-shield-check"></i> Zero Cannibalization Guarantee
                        </div>
                        <p class="iseo-mini-text">
                            Eliminate cross-region competition between your UK, US, Australian, and European pages with localized canonical mapping.
                        </p>
                    </div>

                    <a href="<?= site_url('contact-us') ?>" class="iseo-content-btn">
                        <span>Consult Global SEO Strategists</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: Native-Language Keyword Strategy (Content Left / SVG Right)
         ========================================================================= -->
    <section class="iseo-feature-section iseo-bg-alt">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Left: Col-6 Detailed Content (order-lg-1) -->
                <div class="col-12 col-lg-6 order-2 order-lg-1 pe-lg-4">
                    <div class="iseo-badge">
                        <i class="bi bi-translate"></i> Native Search Intent
                    </div>
                    <h2 class="iseo-heading">
                        Native-Language <span class="iseo-highlight">Keyword Research</span> &amp; Search Intent Localization
                    </h2>
                    <p class="iseo-lead">
                        Direct machine translation misses the cultural nuances, idioms, and local search behaviors of native shoppers. We perform exhaustive in-country keyword discovery to capture genuine commercial search volume across international search engines.
                    </p>
                    
                    <ul class="iseo-checklist">
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Transcreation vs. Direct Translation:</strong> Adapting page copy, metadata, and CTA triggers for native consumer psychology and dialect.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Multi-Engine Optimization:</strong> Winning top positions beyond Google on region-dominant engines like Baidu, Yandex, Bing, and Naver.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Localized Search Volumetrics:</strong> Pinpointing high-converting transactional terms unique to specific countries and language zones.
                            </div>
                        </li>
                    </ul>

                    <div class="iseo-mini-highlight">
                        <div class="iseo-mini-title">
                            <i class="bi bi-search-heart"></i> Cultural Search Intent Alignment
                        </div>
                        <p class="iseo-mini-text">
                            Target local slang, colloquial shopping keywords, and region-specific product naming conventions to dramatically boost organic click-through rates.
                        </p>
                    </div>

                    <a href="<?= site_url('contact-us') ?>" class="iseo-content-btn">
                        <span>Get Multilingual Keyword Audit</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Col-6 Vector SVG Artwork (order-lg-2) -->
                <div class="col-12 col-lg-6 order-1 order-lg-2 ps-lg-4">
                    <div class="iseo-artwork-wrapper">
                        <svg class="iseo-artwork-svg" viewBox="0 0 640 460" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <linearGradient id="s2RedGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#c91a25"/>
                                    <stop offset="100%" stop-color="#991b1b"/>
                                </linearGradient>
                                <linearGradient id="s2BlueChart" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#3b82f6"/>
                                    <stop offset="100%" stop-color="#1d4ed8"/>
                                </linearGradient>
                                <filter id="s2Drop" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#0f172a" flood-opacity="0.12"/>
                                </filter>
                            </defs>

                            <!-- Background Container -->
                            <rect x="20" y="20" width="600" height="420" rx="20" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1.5"/>

                            <!-- Top Search Input Bar (Multilingual Query) -->
                            <g transform="translate(45, 45)" filter="url(#s2Drop)">
                                <rect width="550" height="60" rx="30" fill="#ffffff" stroke="#e2e8f0" stroke-width="2"/>
                                
                                <!-- Google G Badge -->
                                <circle cx="32" cy="30" r="16" fill="#4285f4"/>
                                <text x="32" y="36" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="16" font-weight="900" fill="#ffffff">G</text>

                                <text x="60" y="35" font-family="'Outfit', sans-serif" font-size="15" font-weight="600" fill="#0f172a">"Industrial Automation Equipment"</text>
                                
                                <g transform="translate(435, 12)">
                                    <rect width="100" height="36" rx="18" fill="url(#s2RedGrad)"/>
                                    <text x="50" y="23" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="700" fill="#ffffff">Transcreated</text>
                                </g>
                            </g>

                            <!-- Dual Search Engine Comparison Cards -->
                            <!-- Card 1: Google International (English) -->
                            <g transform="translate(45, 125)" filter="url(#s2Drop)">
                                <rect width="265" height="150" rx="16" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <rect x="0" y="0" width="265" height="38" rx="16" fill="#eff6ff"/>
                                <rect x="0" y="26" width="265" height="12" fill="#eff6ff"/>
                                <line x1="0" y1="38" x2="265" y2="38" stroke="#dbeafe" stroke-width="1"/>

                                <circle cx="20" cy="19" r="10" fill="#2563eb"/>
                                <text x="20" y="23" text-anchor="middle" font-family="sans-serif" font-size="10" font-weight="900" fill="#ffffff">EN</text>
                                <text x="38" y="23" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#1e3a8a">English (US/UK) Query</text>

                                <rect x="14" y="52" width="237" height="36" rx="8" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1"/>
                                <text x="26" y="74" font-family="'Outfit', sans-serif" font-size="12" font-weight="600" fill="#334155">enterprise automation saas</text>
                                <text x="225" y="74" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="900" fill="#16a34a">#1</text>

                                <rect x="14" y="98" width="237" height="36" rx="8" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1"/>
                                <text x="26" y="120" font-family="'Outfit', sans-serif" font-size="12" font-weight="600" fill="#334155">b2b factory robotics platform</text>
                                <text x="225" y="120" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="900" fill="#16a34a">#1</text>
                            </g>

                            <!-- Card 2: Yandex & Baidu (Native Regional) -->
                            <g transform="translate(330, 125)" filter="url(#s2Drop)">
                                <rect width="265" height="150" rx="16" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <rect x="0" y="0" width="265" height="38" rx="16" fill="#fef2f2"/>
                                <rect x="0" y="26" width="265" height="12" fill="#fef2f2"/>
                                <line x1="0" y1="38" x2="265" y2="38" stroke="#fee2e2" stroke-width="1"/>

                                <circle cx="20" cy="19" r="10" fill="#c91a25"/>
                                <text x="20" y="23" text-anchor="middle" font-family="sans-serif" font-size="10" font-weight="900" fill="#ffffff">DE</text>
                                <text x="38" y="23" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#991b1b">German Native Intent</text>

                                <rect x="14" y="52" width="237" height="36" rx="8" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1"/>
                                <text x="26" y="74" font-family="'Outfit', sans-serif" font-size="12" font-weight="600" fill="#334155">industrieautomatisierung software</text>
                                <text x="225" y="74" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="900" fill="#16a34a">#1</text>

                                <rect x="14" y="98" width="237" height="36" rx="8" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1"/>
                                <text x="26" y="120" font-family="'Outfit', sans-serif" font-size="12" font-weight="600" fill="#334155">robotik steuerung anlagen</text>
                                <text x="225" y="120" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="900" fill="#16a34a">#2</text>
                            </g>

                            <!-- Bottom Growth Analytics Card -->
                            <g transform="translate(45, 295)" filter="url(#s2Drop)">
                                <rect width="550" height="125" rx="16" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <text x="24" y="30" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#0f172a">Cross-Border Organic Search Velocity</text>
                                <g transform="translate(440, 14)">
                                    <rect width="85" height="24" rx="12" fill="#dcfce7"/>
                                    <text x="42" y="16" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="800" fill="#16a34a">+284% YoY</text>
                                </g>

                                <!-- Grid -->
                                <line x1="24" y1="48" x2="526" y2="48" stroke="#f1f5f9" stroke-width="1.5"/>
                                <line x1="24" y1="78" x2="526" y2="78" stroke="#f1f5f9" stroke-width="1.5"/>
                                <line x1="24" y1="108" x2="526" y2="108" stroke="#f1f5f9" stroke-width="1.5"/>

                                <!-- Trend line -->
                                <path d="M40 105 L130 92 L220 96 L310 68 L400 52 L500 28" fill="none" stroke="#c91a25" stroke-width="3.5" stroke-linecap="round"/>
                                <path d="M40 105 L130 92 L220 96 L310 68 L400 52 L500 28 L500 115 L40 115 Z" fill="#fee2e2" opacity="0.35"/>

                                <circle cx="130" cy="92" r="4" fill="#c91a25"/>
                                <circle cx="220" cy="96" r="4" fill="#c91a25"/>
                                <circle cx="310" cy="68" r="4" fill="#c91a25"/>
                                <circle cx="400" cy="52" r="4" fill="#c91a25"/>
                                <circle cx="500" cy="28" r="6" fill="#c91a25" stroke="#ffffff" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: Global Technical SEO & Ultra-Fast Edge CDN (SVG Left / Content Right)
         ========================================================================= -->
    <section class="iseo-feature-section iseo-bg-white">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Left: Col-6 Vector SVG Artwork -->
                <div class="col-12 col-lg-6">
                    <div class="iseo-artwork-wrapper">
                        <svg class="iseo-artwork-svg" viewBox="0 0 640 460" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <linearGradient id="s3HudGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#0f172a"/>
                                    <stop offset="100%" stop-color="#1e293b"/>
                                </linearGradient>
                                <filter id="s3Drop" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#0f172a" flood-opacity="0.12"/>
                                </filter>
                            </defs>

                            <!-- Backplate -->
                            <rect x="20" y="20" width="600" height="420" rx="20" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1.5"/>

                            <!-- Top Performance HUD Banner -->
                            <g transform="translate(45, 45)" filter="url(#s3Drop)">
                                <rect width="550" height="95" rx="16" fill="url(#s3HudGrad)" stroke="#334155" stroke-width="1.5"/>
                                <circle cx="28" cy="26" r="8" fill="#10b981"/>
                                <text x="46" y="30" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#ffffff">Global Core Web Vitals Status</text>
                                
                                <g transform="translate(450, 14)">
                                    <rect width="80" height="24" rx="12" fill="#065f46"/>
                                    <text x="40" y="16" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="800" fill="#34d399">100 / 100</text>
                                </g>

                                <!-- Performance Scores -->
                                <g transform="translate(24, 55)">
                                    <!-- LCP -->
                                    <g transform="translate(0, 0)">
                                        <text x="0" y="10" font-family="'Outfit', sans-serif" font-size="11" font-weight="600" fill="#94a3b8">LCP (Global Avg)</text>
                                        <text x="0" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#34d399">0.74s</text>
                                    </g>
                                    <!-- INP -->
                                    <g transform="translate(180, 0)">
                                        <text x="0" y="10" font-family="'Outfit', sans-serif" font-size="11" font-weight="600" fill="#94a3b8">INP (Responsiveness)</text>
                                        <text x="0" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#34d399">14ms</text>
                                    </g>
                                    <!-- CLS -->
                                    <g transform="translate(360, 0)">
                                        <text x="0" y="10" font-family="'Outfit', sans-serif" font-size="11" font-weight="600" fill="#94a3b8">CLS (Visual Shift)</text>
                                        <text x="0" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#34d399">0.000</text>
                                    </g>
                                </g>
                            </g>

                            <!-- Middle: Worldwide Edge Routing Network Map -->
                            <!-- Fiber lines -->
                            <g fill="none" stroke="#cbd5e1" stroke-width="2.5" stroke-dasharray="6 6">
                                <path d="M120 220 Q 280 170 420 210"/>
                                <path d="M420 210 Q 520 250 510 320"/>
                                <path d="M120 220 Q 220 330 330 330"/>
                                <path d="M330 330 Q 430 350 510 320"/>
                            </g>

                            <!-- Node 1: US-East Edge -->
                            <g transform="translate(115, 210)" filter="url(#s3Drop)">
                                <circle cx="20" cy="20" r="18" fill="#fee2e2"/>
                                <circle cx="20" cy="20" r="10" fill="#c91a25"/>
                                <circle cx="20" cy="20" r="4" fill="#ffffff"/>
                                <text x="20" y="50" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="800" fill="#0f172a">US-East Edge</text>
                                <text x="20" y="64" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="10" font-weight="700" fill="#16a34a">22ms TTFB</text>
                            </g>

                            <!-- Node 2: EU-Central Edge -->
                            <g transform="translate(390, 195)" filter="url(#s3Drop)">
                                <circle cx="20" cy="20" r="18" fill="#dbeafe"/>
                                <circle cx="20" cy="20" r="10" fill="#2563eb"/>
                                <circle cx="20" cy="20" r="4" fill="#ffffff"/>
                                <text x="20" y="50" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="800" fill="#0f172a">EU-Central Edge</text>
                                <text x="20" y="64" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="10" font-weight="700" fill="#16a34a">16ms TTFB</text>
                            </g>

                            <!-- Node 3: AP-South Edge -->
                            <g transform="translate(485, 290)" filter="url(#s3Drop)">
                                <circle cx="20" cy="20" r="18" fill="#dcfce7"/>
                                <circle cx="20" cy="20" r="10" fill="#16a34a"/>
                                <circle cx="20" cy="20" r="4" fill="#ffffff"/>
                                <text x="20" y="50" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="800" fill="#0f172a">AP-South Edge</text>
                                <text x="20" y="64" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="10" font-weight="700" fill="#16a34a">28ms TTFB</text>
                            </g>

                            <!-- Node 4: SA-East Edge -->
                            <g transform="translate(260, 305)" filter="url(#s3Drop)">
                                <circle cx="18" cy="18" r="15" fill="#fef3c7"/>
                                <circle cx="18" cy="18" r="8" fill="#d97706"/>
                                <circle cx="18" cy="18" r="3.5" fill="#ffffff"/>
                                <text x="18" y="44" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="10.5" font-weight="800" fill="#0f172a">SA-East</text>
                                <text x="18" y="57" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="9.5" font-weight="700" fill="#16a34a">34ms</text>
                            </g>

                            <!-- Bottom Badges: Sitemap Crawl & CDN Cache Hit -->
                            <g transform="translate(45, 365)" filter="url(#s3Drop)">
                                <rect width="260" height="55" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="28" r="14" fill="#fee2e2"/>
                                <path d="M22 28 L26 32 L34 23" fill="none" stroke="#c91a25" stroke-width="2.5" stroke-linecap="round"/>
                                <text x="50" y="25" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="800" fill="#0f172a">Global Crawl Budget</text>
                                <text x="50" y="42" font-family="'Outfit', sans-serif" font-size="11" font-weight="600" fill="#64748b">100% Sitemaps Indexed</text>
                            </g>

                            <g transform="translate(335, 365)" filter="url(#s3Drop)">
                                <rect width="260" height="55" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="28" r="14" fill="#dcfce7"/>
                                <path d="M22 28 L26 32 L34 23" fill="none" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round"/>
                                <text x="50" y="25" font-family="'Outfit', sans-serif" font-size="12.5" font-weight="800" fill="#0f172a">Edge CDN Cache Ratio</text>
                                <text x="50" y="42" font-family="'Outfit', sans-serif" font-size="11" font-weight="700" fill="#16a34a">99.98% Instant Hit</text>
                            </g>
                        </svg>
                    </div>
                </div>

                <!-- Right: Col-6 Detailed Content -->
                <div class="col-12 col-lg-6 ps-lg-4">
                    <div class="iseo-badge">
                        <i class="bi bi-cpu-fill"></i> Global Performance
                    </div>
                    <h2 class="iseo-heading">
                        Ultra-Fast <span class="iseo-highlight">Edge CDN Performance</span> &amp; International Crawl Optimization
                    </h2>
                    <p class="iseo-lead">
                        Server response latency across continents directly dictates global bounce rates and crawl efficiency. We configure edge server networks, optimize dynamic geo-routing, and streamline international XML sitemaps for instant page rendering anywhere on earth.
                    </p>
                    
                    <ul class="iseo-checklist">
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Global Edge Caching &amp; CDN Setup:</strong> Sub-second Time to First Byte (TTFB) globally via Cloudflare Enterprise and AWS CloudFront.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>International Crawl Budget Preservation:</strong> Efficient sitemap architecture ensuring Googlebot and regional spiders index multi-country updates instantly.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Geo-IP &amp; Cookie Consent Compliance:</strong> Seamless GDPR, CCPA, and regional cookie handling without blocking search engine bots.
                            </div>
                        </li>
                    </ul>

                    <div class="iseo-mini-highlight">
                        <div class="iseo-mini-title">
                            <i class="bi bi-lightning-charge-fill"></i> Sub-Second Global Core Web Vitals
                        </div>
                        <p class="iseo-mini-text">
                            Pass all Core Web Vitals metrics across mobile and desktop connections regardless of whether your client is in London, Tokyo, Sydney, or New York.
                        </p>
                    </div>

                    <a href="<?= site_url('contact-us') ?>" class="iseo-content-btn">
                        <span>Optimize International Site Speed</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: International Digital PR & Geo-Targeted Authority (Content Left / SVG Right)
         ========================================================================= -->
    <section class="iseo-feature-section iseo-bg-alt">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Left: Col-6 Detailed Content (order-lg-1) -->
                <div class="col-12 col-lg-6 order-2 order-lg-1 pe-lg-4">
                    <div class="iseo-badge">
                        <i class="bi bi-globe-americas"></i> Cross-Border Authority
                    </div>
                    <h2 class="iseo-heading">
                        Cross-Border <span class="iseo-highlight">Digital PR &amp; Geo-Targeted</span> Link Acquisition
                    </h2>
                    <p class="iseo-lead">
                        Rankings in competitive international markets require localized domain authority. We secure tier-1 editorial mentions and country-specific backlinks (.co.uk, .de, .com.au, .ca, .fr) that establish undeniable trustworthiness in regional search algorithms.
                    </p>
                    
                    <ul class="iseo-checklist">
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Country-Code TLD Backlinks:</strong> Acquiring authoritative in-country backlinks that signal strong regional market relevance.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>International Digital PR Campaigns:</strong> Data-driven press outreach and journalistic placements across leading global publications.
                            </div>
                        </li>
                        <li class="iseo-check-item">
                            <span class="iseo-check-icon"><i class="bi bi-check-lg"></i></span>
                            <div>
                                <strong>Global Entity &amp; Knowledge Graph Authority:</strong> Establishing verified brand entities across international business directories and Wikidata.
                            </div>
                        </li>
                    </ul>

                    <div class="iseo-mini-highlight">
                        <div class="iseo-mini-title">
                            <i class="bi bi-award-fill"></i> High Domain Rating (DR 70+) Placements
                        </div>
                        <p class="iseo-mini-text">
                            Strict 100% white-hat outreach to verified international publications—zero private blog networks, pure organic authority.
                        </p>
                    </div>

                    <a href="<?= site_url('contact-us') ?>" class="iseo-content-btn">
                        <span>Acquire Global Authority Backlinks</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Col-6 Vector SVG Artwork (order-lg-2) -->
                <div class="col-12 col-lg-6 order-1 order-lg-2 ps-lg-4">
                    <div class="iseo-artwork-wrapper">
                        <svg class="iseo-artwork-svg" viewBox="0 0 640 460" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <linearGradient id="s4ShieldGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#c91a25"/>
                                    <stop offset="100%" stop-color="#881337"/>
                                </linearGradient>
                                <filter id="s4Drop" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#0f172a" flood-opacity="0.14"/>
                                </filter>
                            </defs>

                            <!-- Backplate -->
                            <rect x="20" y="20" width="600" height="420" rx="20" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1.5"/>

                            <!-- Interconnecting Authority Link Lines -->
                            <g stroke="#fda4af" stroke-width="2.5" stroke-dasharray="6 6">
                                <line x1="320" y1="210" x2="140" y2="105"/>
                                <line x1="320" y1="210" x2="500" y2="105"/>
                                <line x1="320" y1="210" x2="140" y2="335"/>
                                <line x1="320" y1="210" x2="500" y2="335"/>
                            </g>

                            <!-- Center Global Authority Shield -->
                            <g transform="translate(245, 130)" filter="url(#s4Drop)">
                                <path d="M75 0 L150 35 V100 C150 148 75 180 75 180 C75 180 0 148 0 100 V35 Z" fill="url(#s4ShieldGrad)"/>
                                <circle cx="75" cy="80" r="38" fill="#ffffff" opacity="0.18"/>
                                <path d="M56 80 L69 93 L96 66" fill="none" stroke="#ffffff" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="75" y="136" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="15" font-weight="900" fill="#ffffff" letter-spacing="1">DR 85+</text>
                                <text x="75" y="152" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="10.5" font-weight="700" fill="#fecdd3" letter-spacing="0.5">GLOBAL TRUST</text>
                            </g>

                            <!-- 4 Multi-Country Publication Cards -->
                            <!-- Card 1: UK Tier-1 Press (.co.uk) -->
                            <g transform="translate(45, 75)" filter="url(#s4Drop)">
                                <rect width="190" height="65" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="32" r="14" fill="#1e3a8a"/>
                                <text x="28" y="37" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="900" fill="#ffffff">UK</text>
                                <text x="52" y="28" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0f172a">London Daily News</text>
                                <text x="52" y="46" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="700" fill="#16a34a">DR 91 • Editorial</text>
                            </g>

                            <!-- Card 2: German Tech Media (.de) -->
                            <g transform="translate(405, 75)" filter="url(#s4Drop)">
                                <rect width="190" height="65" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="32" r="14" fill="#1e293b"/>
                                <text x="28" y="37" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="900" fill="#fbbf24">DE</text>
                                <text x="52" y="28" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0f172a">Berlin Tech Mag</text>
                                <text x="52" y="46" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="700" fill="#16a34a">DR 89 • Editorial</text>
                            </g>

                            <!-- Card 3: Australia Business (.com.au) -->
                            <g transform="translate(45, 305)" filter="url(#s4Drop)">
                                <rect width="190" height="65" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="32" r="14" fill="#0284c7"/>
                                <text x="28" y="37" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="900" fill="#ffffff">AU</text>
                                <text x="52" y="28" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0f172a">Sydney Business</text>
                                <text x="52" y="46" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="700" fill="#16a34a">DR 87 • Editorial</text>
                            </g>

                            <!-- Card 4: US Enterprise (.com) -->
                            <g transform="translate(405, 305)" filter="url(#s4Drop)">
                                <rect width="190" height="65" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1.5"/>
                                <circle cx="28" cy="32" r="14" fill="#c91a25"/>
                                <text x="28" y="37" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="11" font-weight="900" fill="#ffffff">US</text>
                                <text x="52" y="28" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0f172a">Global Forbes Hub</text>
                                <text x="52" y="46" font-family="'Outfit', sans-serif" font-size="11.5" font-weight="700" fill="#16a34a">DR 95 • Editorial</text>
                            </g>

                            <!-- Bottom Pill Badge -->
                            <g transform="translate(210, 360)" filter="url(#s4Drop)">
                                <rect width="220" height="46" rx="23" fill="#0f172a" stroke="#334155" stroke-width="1.5"/>
                                <circle cx="22" cy="23" r="7" fill="#22c55e"/>
                                <text x="38" y="28" font-family="'Outfit', sans-serif" font-size="12" font-weight="700" fill="#ffffff">100% White-Hat PR Links</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

