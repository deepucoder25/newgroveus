<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define E-Commerce SEO Vector Artwork SVG
ob_start(); ?>
<svg viewBox="0 0 846 542" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- =========================
         GRADIENTS
    ========================== -->
    <linearGradient id="red" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#F12E35"/>
      <stop offset="1" stop-color="#D9232A"/>
    </linearGradient>

    <linearGradient id="blue" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#3D9BFF"/>
      <stop offset="1" stop-color="#126FE0"/>
    </linearGradient>

    <linearGradient id="screen" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0" stop-color="#FFFFFF"/>
      <stop offset="1" stop-color="#F4FAFF"/>
    </linearGradient>

    <linearGradient id="green" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#53B96C"/>
      <stop offset="1" stop-color="#168B4D"/>
    </linearGradient>

    <linearGradient id="glass" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#DDF2FF"/>
      <stop offset="1" stop-color="#B6DDF7"/>
    </linearGradient>

    <!-- =========================
         SHADOW
    ========================== -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="5" stdDeviation="7" flood-color="#6086A4" flood-opacity=".20"/>
    </filter>

    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%">
      <feDropShadow dx="0" dy="3" stdDeviation="4" flood-color="#557B9A" flood-opacity=".16"/>
    </filter>

    <!-- =========================
         WORLD MAP CLIP
    ========================== -->
    <clipPath id="mapClip">
      <rect x="65" y="37" width="760" height="430" rx="20"/>
    </clipPath>
  </defs>

  <!-- =====================================================
       BACKGROUND
  ====================================================== -->
  <!-- soft blue background -->
  <path d="M57 349 C70 271 127 220 202 197 C277 174 291 111 355 76 C426 38 510 50 567 94 C625 138 686 151 749 195 C808 237 837 303 823 364 C807 436 732 476 638 472 C535 468 467 501 366 497 C248 493 81 450 57 349Z" fill="#F1F9FF"/>

  <!-- =====================================================
       WORLD MAP
  ====================================================== -->
  <g fill="#DDF0FC" opacity=".78" clip-path="url(#mapClip)">
    <!-- North America -->
    <path d="M71 124 L101 93 L145 79 L185 87 L217 104 L238 128 L217 143 L193 143 L181 169 L151 181 L126 171 L105 190 L80 177 L87 152 L68 142Z"/>
    <!-- Central America -->
    <path d="M212 172 L236 182 L248 202 L238 214 L218 203Z"/>
    <!-- South America -->
    <path d="M238 205 L270 224 L278 259 L268 294 L249 330 L228 354 L211 326 L218 295 L204 264 L215 232Z"/>
    <!-- Greenland -->
    <path d="M272 47 L315 36 L357 47 L368 74 L339 95 L296 88 L273 70Z"/>
    <!-- Europe -->
    <path d="M386 112 L414 95 L447 99 L463 116 L451 132 L420 131 L402 143 L380 133Z"/>
    <!-- Africa -->
    <path d="M405 151 L442 148 L467 169 L470 208 L454 249 L429 284 L405 258 L393 219 L384 180Z"/>
    <!-- Asia -->
    <path d="M451 105 L494 88 L544 94 L583 109 L619 128 L661 128 L699 150 L691 176 L657 180 L626 194 L584 181 L549 187 L517 169 L478 155 L453 137Z"/>
    <!-- India -->
    <path d="M531 173 L551 181 L546 211 L530 225 L519 204Z"/>
    <!-- Australia -->
    <path d="M626 275 L669 267 L706 281 L722 308 L705 329 L665 330 L633 314Z"/>
    <!-- Japan -->
    <path d="M711 177 L720 188 L715 201 L705 194Z"/>
  </g>

  <!-- =====================================================
       DOTTED GLOBAL ROUTES
  ====================================================== -->
  <g fill="none" stroke="#3F93F5" stroke-width="2.4" stroke-dasharray="6 7" stroke-linecap="round" opacity=".82">
    <!-- left card to center -->
    <path d="M278 137 C329 133 363 157 406 188"/>
    <!-- center to sales -->
    <path d="M446 174 C479 127 532 101 570 98"/>
    <!-- center to revenue -->
    <path d="M460 189 C540 174 633 171 684 192"/>
    <!-- small tag to laptop -->
    <path d="M177 245 C214 249 239 268 260 293"/>
    <!-- route behind globe -->
    <path d="M104 250 C195 205 274 194 343 219"/>
    <!-- right route -->
    <path d="M577 237 C625 214 688 218 742 235"/>
  </g>

  <!-- =====================================================
       LEFT "RANK HIGHER" CARD
  ====================================================== -->
  <g filter="url(#shadow)">
    <rect x="147" y="88" width="176" height="68" rx="14" fill="#FFFFFF"/>
    <!-- target icon -->
    <circle cx="180" cy="122" r="18" fill="none" stroke="#E62D33" stroke-width="5"/>
    <circle cx="180" cy="122" r="10" fill="none" stroke="#E62D33" stroke-width="4"/>
    <circle cx="180" cy="122" r="4" fill="#E62D33"/>
    <!-- arrow -->
    <path d="M180 122 L193 109" stroke="#E62D33" stroke-width="5" stroke-linecap="round"/>
    <path d="M188 109 H194 V115" fill="none" stroke="#E62D33" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>

    <text x="216" y="117" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="600" fill="#163B63">Rank Higher</text>
    <text x="216" y="136" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="600" fill="#163B63">on Search</text>
  </g>

  <!-- =====================================================
       DRIVE MORE SALES CARD
  ====================================================== -->
  <g filter="url(#shadow)">
    <rect x="534" y="59" width="174" height="67" rx="13" fill="#FFFFFF"/>
    <!-- cart icon -->
    <path d="M554 78 H563 L568 98 H589" fill="none" stroke="#E62D33" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M566 83 H592 L588 94 H569 Z" fill="#E62D33"/>
    <circle cx="572" cy="103" r="4" fill="#E62D33"/>
    <circle cx="587" cy="103" r="4" fill="#E62D33"/>

    <text x="608" y="88" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="600" fill="#163B63">Drive More</text>
    <text x="608" y="107" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="15" font-weight="600" fill="#163B63">Sales</text>
  </g>

  <!-- =====================================================
       INCREASE REVENUE CARD
  ====================================================== -->
  <g filter="url(#shadow)">
    <rect x="679" y="154" width="158" height="67" rx="13" fill="#FFFFFF"/>
    <!-- bars -->
    <rect x="696" y="194" width="8" height="13" rx="1" fill="#E52D34"/>
    <rect x="709" y="186" width="8" height="21" rx="1" fill="#E52D34"/>
    <rect x="722" y="175" width="8" height="32" rx="1" fill="#E52D34"/>

    <text x="749" y="183" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="14" font-weight="600" fill="#163B63">Increase</text>
    <text x="749" y="202" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="14" font-weight="600" fill="#163B63">Revenue</text>
  </g>

  <!-- =====================================================
       SMALL TAG CARD
  ====================================================== -->
  <g filter="url(#shadow)">
    <rect x="116" y="213" width="63" height="64" rx="12" fill="#FFFFFF"/>
    <!-- tag -->
    <path d="M132 235 L148 224 L162 227 L164 241 L148 254 Z" fill="#E62D33"/>
    <circle cx="155" cy="232" r="2.5" fill="#FFFFFF"/>
    <path d="M140 242 L149 235" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
    <path d="M139 238 L143 246" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
  </g>

  <!-- =====================================================
       CENTER LOCATION PIN
  ====================================================== -->
  <g filter="url(#smallShadow)">
    <path d="M433 126 C417 126 406 138 406 154 C406 176 433 202 433 202 C433 202 460 176 460 154 C460 138 449 126 433 126Z" fill="url(#red)"/>
    <circle cx="433" cy="153" r="10" fill="#FFFFFF"/>
  </g>

  <!-- =====================================================
       PLANTS BEHIND LAPTOP
  ====================================================== -->
  <!-- left plant stems -->
  <g fill="none" stroke="#23834F" stroke-width="4" stroke-linecap="round">
    <path d="M175 376 C166 338 160 312 157 281"/>
    <path d="M175 372 C185 337 199 310 214 286"/>
    <path d="M174 363 C151 339 135 323 123 303"/>
  </g>

  <!-- left leaves -->
  <g fill="url(#green)">
    <path d="M158 328 C132 319 117 300 116 279 C140 286 157 302 158 328Z"/>
    <path d="M159 311 C141 286 141 258 151 240 C169 260 169 285 159 311Z"/>
    <path d="M173 341 C177 310 193 287 216 276 C216 304 199 329 173 341Z"/>
    <path d="M166 354 C141 348 121 335 106 317 C131 314 154 326 166 354Z"/>
  </g>

  <!-- right plant -->
  <g fill="none" stroke="#23834F" stroke-width="4" stroke-linecap="round">
    <path d="M648 375 C652 335 664 299 682 270"/>
    <path d="M650 356 C676 331 697 310 710 284"/>
  </g>

  <g fill="url(#green)">
    <path d="M655 333 C631 309 627 282 635 258 C655 277 662 304 655 333Z"/>
    <path d="M665 320 C675 287 693 263 718 251 C718 281 698 306 665 320Z"/>
    <path d="M658 351 C685 336 710 333 733 341 C712 358 684 363 658 351Z"/>
  </g>

  <!-- =====================================================
       LAPTOP
  ====================================================== -->
  <!-- laptop frame -->
  <rect x="249" y="214" width="369" height="269" rx="14" fill="#294765" filter="url(#shadow)"/>

  <!-- top screen -->
  <rect x="258" y="223" width="351" height="244" rx="7" fill="url(#screen)"/>

  <!-- browser top -->
  <rect x="258" y="223" width="351" height="29" rx="7" fill="#EAF1F6"/>

  <!-- browser circles -->
  <circle cx="272" cy="237" r="4" fill="#E75A5F"/>
  <circle cx="285" cy="237" r="4" fill="#F2BF65"/>
  <circle cx="298" cy="237" r="4" fill="#63C989"/>

  <!-- =====================================================
       SEARCH BAR
  ====================================================== -->
  <rect x="291" y="265" width="281" height="34" rx="9" fill="#FFFFFF" stroke="#DCEAF4" stroke-width="2"/>
  <rect x="305" y="278" width="76" height="6" rx="3" fill="#D7E7F1"/>

  <!-- search button -->
  <rect x="539" y="265" width="34" height="34" rx="7" fill="#E62D33"/>
  <circle cx="554" cy="279" r="6" fill="none" stroke="#FFFFFF" stroke-width="2.5"/>
  <line x1="559" y1="284" x2="565" y2="289" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>

  <!-- =====================================================
       PRODUCT CARDS
  ====================================================== -->
  <!-- card 1 -->
  <rect x="291" y="315" width="62" height="76" rx="5" fill="#F2F8FD"/>
  <path d="M306 356 C313 351 315 339 320 334 L331 344 L337 352 L334 359 H311 C306 359 304 358 306 356Z" fill="#E93136"/>
  <path d="M315 343 L326 351" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
  <path d="M318 340 L329 348" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>

  <!-- card 2 -->
  <rect x="366" y="315" width="62" height="76" rx="5" fill="#F2F8FD"/>
  <path d="M381 351 C381 334 412 334 412 351" fill="none" stroke="#2489EE" stroke-width="6" stroke-linecap="round"/>
  <rect x="378" y="348" width="8" height="19" rx="4" fill="#176FD4"/>
  <rect x="407" y="348" width="8" height="19" rx="4" fill="#176FD4"/>

  <!-- card 3 -->
  <rect x="440" y="315" width="62" height="76" rx="5" fill="#F2F8FD"/>
  <path d="M454 345 H487 L490 368 C490 372 487 374 483 374 H458 C454 374 452 371 452 368Z" fill="#E93136"/>
  <path d="M461 345 C461 334 480 334 480 345" fill="none" stroke="#E93136" stroke-width="4" stroke-linecap="round"/>
  <circle cx="471" cy="355" r="2" fill="#FFFFFF"/>

  <!-- card 4 -->
  <rect x="515" y="315" width="62" height="76" rx="5" fill="#F2F8FD"/>
  <path d="M530 339 L540 334 L546 340 L553 334 L564 339 L558 351 L554 348 V372 H538 V348 L534 351Z" fill="#287FE3"/>

  <!-- PRODUCT TEXT LINES -->
  <g fill="#D2E2EC">
    <rect x="292" y="396" width="43" height="5" rx="2.5"/>
    <rect x="292" y="427" width="49" height="5" rx="2.5"/>

    <rect x="367" y="396" width="43" height="5" rx="2.5"/>
    <rect x="367" y="427" width="49" height="5" rx="2.5"/>

    <rect x="441" y="396" width="43" height="5" rx="2.5"/>
    <rect x="441" y="427" width="49" height="5" rx="2.5"/>

    <rect x="516" y="396" width="43" height="5" rx="2.5"/>
    <rect x="516" y="427" width="49" height="5" rx="2.5"/>
  </g>

  <!-- PRODUCT STARS -->
  <g fill="#F6A900" font-family="'Inter', Arial, sans-serif" font-size="11">
    <text x="292" y="411">★★★★</text>
    <text x="367" y="411">★★★★</text>
    <text x="441" y="411">★★★★</text>
    <text x="516" y="411">★★★★</text>
  </g>

  <!-- LAPTOP BASE -->
  <path d="M234 467 H630 L652 493 C655 497 651 501 646 501 H216 C211 501 208 497 212 493 Z" fill="#A9CCE5" filter="url(#smallShadow)"/>
  <path d="M393 470 H469 L462 482 H400Z" fill="#83ADD0" opacity=".65"/>

  <!-- =====================================================
       SHOPPING CART
  ====================================================== -->
  <g filter="url(#smallShadow)">
    <path d="M108 374 H126 L137 429" fill="none" stroke="url(#red)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M125 394 H267 L249 462 H143 Z" fill="none" stroke="url(#red)" stroke-width="8" stroke-linejoin="round"/>
    <path d="M132 417 H260" stroke="#E52D33" stroke-width="7" stroke-linecap="round"/>
    <path d="M138 440 H254" stroke="#E52D33" stroke-width="7" stroke-linecap="round"/>
    <path d="M157 396 L168 460" stroke="#E52D33" stroke-width="6" stroke-linecap="round"/>
    <path d="M190 396 L197 460" stroke="#E52D33" stroke-width="6" stroke-linecap="round"/>
    <path d="M224 396 L225 460" stroke="#E52D33" stroke-width="6" stroke-linecap="round"/>
    <path d="M144 463 H250" stroke="#E52D33" stroke-width="8" stroke-linecap="round"/>
    <circle cx="163" cy="488" r="12" fill="#23425E"/>
    <circle cx="163" cy="488" r="5" fill="#FFFFFF"/>
    <circle cx="237" cy="488" r="12" fill="#23425E"/>
    <circle cx="237" cy="488" r="5" fill="#FFFFFF"/>
  </g>

  <!-- SHOPPING BAG INSIDE CART -->
  <path d="M177 360 H226 L232 399 H171 Z" fill="#F2B62B"/>
  <path d="M187 360 C187 344 215 344 215 360" fill="none" stroke="#D96B27" stroke-width="5" stroke-linecap="round"/>

  <!-- =====================================================
       FLOATING SEO CHART CARD
  ====================================================== -->
  <g filter="url(#shadow)">
    <rect x="578" y="333" width="166" height="138" rx="11" fill="#FFFFFF"/>
    <rect x="595" y="421" width="17" height="30" rx="2" fill="url(#blue)"/>
    <rect x="620" y="405" width="17" height="46" rx="2" fill="url(#blue)"/>
    <rect x="645" y="386" width="17" height="65" rx="2" fill="url(#blue)"/>
    <path d="M592 411 L619 389 L641 402 L671 377 L717 346" fill="none" stroke="#54A7F5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M704 348 L720 345 L717 362" fill="none" stroke="#247FE4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
  </g>

  <!-- =====================================================
       SEO MAGNIFYING GLASS
  ====================================================== -->
  <g filter="url(#shadow)">
    <circle cx="719" cy="424" r="49" fill="#FFFFFF" stroke="#173C62" stroke-width="9"/>
    <circle cx="719" cy="424" r="38" fill="#EAF7FF"/>
    <text x="719" y="435" text-anchor="middle" font-family="'Inter', Arial, Helvetica, sans-serif" font-size="31" font-weight="700" fill="#173C62">SEO</text>
    <path d="M755 460 L798 503" stroke="#D9232A" stroke-width="15" stroke-linecap="round"/>
    <path d="M755 460 L798 503" stroke="#F04448" stroke-width="9" stroke-linecap="round"/>
  </g>

  <!-- =====================================================
       GROUND SHADOW
  ====================================================== -->
  <ellipse cx="423" cy="503" rx="325" ry="12" fill="#DDEFFA"/>
  <ellipse cx="424" cy="503" rx="230" ry="7" fill="#C8E4F5" opacity=".7"/>
</svg>
<?php $ecommerce_seo_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'E-Commerce SEO Services']
    ],
    'title' => 'E-Commerce <span class="text-danger-highlight">SEO</span>',
    'description' => 'Boost your online store\'s visibility and drive more sales with our expert e-commerce SEO services. We optimize your product pages, category pages and content to bring you higher rankings and better revenue.',
    'cta_text' => 'Grow Your Online Store',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'More',
            'subtitle' => 'Organic Traffic'
        ],
        [
            'icon' => 'bi bi-bag-heart-fill',
            'title' => 'Higher',
            'subtitle' => 'Conversions'
        ],
        [
            'icon' => 'bi bi-tags-fill',
            'title' => 'Better',
            'subtitle' => 'Product Rankings'
        ]
    ],
    'svg' => $ecommerce_seo_svg
]); ?>

<!-- 3. E-Commerce SEO Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Turn Product Searches into Consistent Store Revenue</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Capture ready-to-buy shoppers actively looking for your products on Google. We optimize category hierarchies, product schema data, faceted navigation, site speed, and internal linking to drive qualified buyers directly into your checkout funnel.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Product Page Schema &amp; Rich Snippets</h5>
                                <p class="small text-muted mb-0">Display star ratings, pricing, in-stock status, and reviews directly on Google search results.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Category &amp; Taxonomy Architecture</h5>
                                <p class="small text-muted mb-0">High-converting category structure designed to dominate competitive high-volume commercial keywords.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Faceted Navigation &amp; Crawl Budget</h5>
                                <p class="small text-muted mb-0">Canonicalization and index control preventing duplicate content across filters, colors, and sizes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
