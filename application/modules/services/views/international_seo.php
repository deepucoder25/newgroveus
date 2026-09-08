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

<!-- 3. International SEO Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Global Organic Growth with Multi-Country &amp; Multilingual SEO</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Drive organic traffic and revenue worldwide with localized hreflang optimization, ccTLD and subfolder architectures, geo-targeted keyword strategies, and global search engine compliance. We help you establish authority in international search engines including Google, Bing, Baidu, and Yandex.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Hreflang &amp; Geo-Targeting</h5>
                                <p class="small text-muted mb-0">Flawless language and regional targeting tags to ensure search engines show the right version to the right audience.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Multilingual Keyword Research</h5>
                                <p class="small text-muted mb-0">In-depth native language research to target culturally relevant search intents across diverse global regions.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">International Domain Architecture</h5>
                                <p class="small text-muted mb-0">Strategic guidance on ccTLDs, subdomains, and subdirectories tailored to your international growth roadmap.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
