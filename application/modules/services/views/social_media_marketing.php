<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Social Media Marketing Vector Artwork SVG
ob_start(); ?>
<svg viewBox="30 40 840 535" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background gradients -->
    <radialGradient id="bgGlow" cx="50%" cy="48%" r="58%"><stop offset="0%" stop-color="#ffffff"/><stop offset="65%" stop-color="#ffffff"/><stop offset="100%" stop-color="#f8f8fa"/></radialGradient>
    <radialGradient id="blueGlow"><stop offset="0%" stop-color="#dff1ff" stop-opacity=".95"/><stop offset="100%" stop-color="#dff1ff" stop-opacity="0"/></radialGradient>
    <linearGradient id="phoneBack" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0f3e67"/><stop offset="100%" stop-color="#246ba4"/></linearGradient>
    <linearGradient id="phoneBody" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#edf6fc"/></linearGradient>
    <linearGradient id="screenBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#a8dcff"/><stop offset="100%" stop-color="#5ba9ec"/></linearGradient>
    <linearGradient id="redGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff6265"/><stop offset="100%" stop-color="#ef4048"/></linearGradient>
    <linearGradient id="orangeGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffbf4b"/><stop offset="100%" stop-color="#ff7a45"/></linearGradient>
    <linearGradient id="linkedinGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#168fd0"/><stop offset="100%" stop-color="#0066aa"/></linearGradient>
    <linearGradient id="facebookGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#3184e8"/><stop offset="100%" stop-color="#1665c0"/></linearGradient>
    <linearGradient id="instagramGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#7648d9"/><stop offset="55%" stop-color="#d94a91"/><stop offset="100%" stop-color="#ffb13c"/></linearGradient>
    <linearGradient id="tiktokGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#263747"/><stop offset="100%" stop-color="#111b28"/></linearGradient>
    <linearGradient id="darkIcon" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#34495c"/><stop offset="100%" stop-color="#1d2d3e"/></linearGradient>

    <!-- Shadows -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#3d78a5" flood-opacity=".18"/></filter>
    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="5" stdDeviation="5" flood-color="#3d78a5" flood-opacity=".18"/></filter>
    <filter id="softBlur"><feGaussianBlur stdDeviation="15"/></filter>
  </defs>

  <!-- BACKGROUND GLOWS -->
  <ellipse cx="410" cy="280" rx="290" ry="240" fill="url(#blueGlow)"/>
  <ellipse cx="650" cy="350" rx="190" ry="170" fill="#e8f5ff" opacity=".55" filter="url(#softBlur)"/>
  <ellipse cx="200" cy="330" rx="130" ry="150" fill="#f2f9ff" opacity=".8" filter="url(#softBlur)"/>

  <!-- CLOUDS -->
  <g opacity=".9">
    <circle cx="61" cy="219" r="25" fill="#d8efff"/><circle cx="82" cy="205" r="25" fill="#d8efff"/><circle cx="102" cy="220" r="20" fill="#d8efff"/>
    <rect x="42" y="218" width="80" height="17" rx="9" fill="#d8efff"/>
  </g>
  <g opacity=".9">
    <circle cx="664" cy="92" r="22" fill="#d4ecff"/><circle cx="687" cy="82" r="29" fill="#d4ecff"/><circle cx="714" cy="94" r="22" fill="#d4ecff"/>
    <rect x="645" y="94" width="91" height="17" rx="9" fill="#d4ecff"/>
  </g>

  <!-- DECORATIVE SOCIAL CHAT BUBBLES -->
  <g opacity=".5">
    <rect x="294" y="82" width="88" height="38" rx="15" fill="#e6f3fd"/>
    <circle cx="314" cy="101" r="5" fill="#bfdff5"/>
    <rect x="327" y="95" width="38" height="6" rx="3" fill="#c5deef"/>
    <rect x="327" y="105" width="25" height="5" rx="2.5" fill="#d2e6f3"/>
    <path d="M315 119 L306 130 L331 119" fill="#e6f3fd"/>
  </g>

  <!-- INSTAGRAM ICON -->
  <g transform="rotate(-9 221 160)" filter="url(#smallShadow)">
    <rect x="179" y="113" width="87" height="87" rx="20" fill="url(#instagramGrad)"/>
    <rect x="197" y="131" width="51" height="51" rx="15" fill="none" stroke="#ffffff" stroke-width="6"/>
    <circle cx="222.5" cy="156.5" r="12" fill="none" stroke="#ffffff" stroke-width="6"/>
    <circle cx="241" cy="139" r="4.5" fill="#ffffff"/>
  </g>

  <!-- FACEBOOK ICON -->
  <g transform="rotate(-7 186 267)" filter="url(#smallShadow)">
    <rect x="145" y="224" width="83" height="83" rx="18" fill="url(#facebookGrad)"/>
    <path d="M193 298 L193 271 L202 271 L204 260 L193 260 L193 254 C193 250 195 247 200 247 L205 247 L205 237 C202 236 199 236 196 236 C185 236 180 243 180 253 L180 260 L172 260 L172 271 L180 271 L180 298 Z" fill="#ffffff"/>
  </g>

  <!-- LINKEDIN ICON -->
  <g transform="rotate(-9 161 367)" filter="url(#smallShadow)">
    <rect x="119" y="330" width="76" height="76" rx="17" fill="url(#linkedinGrad)"/>
    <circle cx="139" cy="349" r="6" fill="#ffffff"/>
    <rect x="134" y="359" width="10" height="30" rx="2" fill="#ffffff"/>
    <path d="M151 359 H161 V364 C164 360 168 358 173 358 C184 358 187 365 187 376 V390 H176 V378 C176 373 175 368 170 368 C165 368 162 372 162 378 V390 H151 Z" fill="#ffffff"/>
  </g>

  <!-- RED DECORATIVE LINES LEFT -->
  <g stroke="#ff4d55" stroke-width="6" stroke-linecap="round">
    <line x1="143" y1="112" x2="156" y2="125"/>
    <line x1="128" y1="148" x2="148" y2="148"/>
    <line x1="144" y1="178" x2="132" y2="188"/>
    <line x1="242" y1="323" x2="238" y2="338"/>
    <line x1="224" y1="338" x2="219" y2="350"/>
  </g>

  <!-- MAIN PHONE BACK & BODY -->
  <g transform="rotate(6 390 335)" filter="url(#shadow)">
    <!-- Rear phone -->
    <rect x="280" y="127" width="216" height="402" rx="38" fill="url(#phoneBack)"/>
    <!-- right blue highlight -->
    <path d="M459 161 C478 172 486 187 486 208 L486 487 C486 505 476 516 462 523 L462 161 Z" fill="#347eae" opacity=".6"/>
    <!-- Main white phone -->
    <rect x="265" y="133" width="216" height="394" rx="36" fill="url(#phoneBody)" stroke="#123f66" stroke-width="7"/>
    <!-- Top notch -->
    <path d="M345 137 H404 C411 137 415 143 415 150 V158 H336 V150 C336 143 339 137 345 137 Z" fill="#113e64"/>
    <!-- Speaker -->
    <rect x="364" y="143" width="27" height="5" rx="3" fill="#527da0"/>
    <!-- Camera -->
    <circle cx="400" cy="147" r="3.5" fill="#6d9bc1"/>

    <!-- PHONE USER PROFILE -->
    <circle cx="296" cy="192" r="14" fill="#d8efff"/>
    <circle cx="296" cy="188" r="5" fill="#7db4de"/>
    <path d="M288 199 C290 194 302 194 304 199" fill="#7db4de"/>
    <rect x="318" y="183" width="65" height="7" rx="3.5" fill="#9fc5e1"/>
    <rect x="318" y="196" width="43" height="6" rx="3" fill="#c6ddeb"/>

    <!-- POST IMAGE -->
    <rect x="284" y="214" width="177" height="119" rx="9" fill="url(#screenBlue)"/>
    <path d="M288 318 L326 266 C331 259 338 259 344 267 L369 299 L394 275 C400 269 406 270 412 277 L455 318 Z" fill="#3787cb"/>
    <path d="M288 318 L335 279 L367 311 L394 286 L430 318 Z" fill="#3c8bd0" opacity=".75"/>
    <circle cx="420" cy="246" r="17" fill="#ffc83d"/>

    <!-- POST ACTIONS -->
    <path d="M295 348 C287 338 271 346 277 356 C282 364 295 372 295 372 C295 372 308 363 313 355 C319 345 303 338 295 348 Z" fill="#ff4d55"/>
    <path d="M323 349 C318 349 315 353 315 358 C315 363 320 367 325 367 L329 367 L335 372 L334 365 C337 363 339 361 339 357 C339 352 334 349 329 349 Z" fill="#b9d1e3"/>
    <path d="M350 351 L367 346 L360 363 L356 357 L350 351 Z" fill="#9dbbd1"/>
    <path d="M433 348 H443 V369 L438 365 L433 369 Z" fill="#d3e1ea"/>

    <!-- Small post lines -->
    <rect x="287" y="382" width="94" height="7" rx="3" fill="#c7dce9"/>
    <rect x="287" y="396" width="62" height="6" rx="3" fill="#dce8ef"/>

    <!-- Second post lines -->
    <rect x="287" y="420" width="160" height="8" rx="4" fill="#d9e8f1"/>
    <rect x="287" y="435" width="105" height="7" rx="3.5" fill="#e2edf3"/>

    <!-- PHONE BOTTOM NAVIGATION -->
    <path d="M286 473 L294 466 L302 473 V484 H296 V477 H292 V484 H286 Z" fill="#173e62"/>
    <circle cx="325" cy="476" r="7" fill="none" stroke="#a8bfd1" stroke-width="3"/>
    <line x1="330" y1="481" x2="335" y2="486" stroke="#a8bfd1" stroke-width="3" stroke-linecap="round"/>
    <circle cx="359" cy="476" r="8" fill="#9db8ca"/>
    <line x1="354" y1="476" x2="364" y2="476" stroke="#ffffff" stroke-width="2"/>
    <line x1="359" y1="471" x2="359" y2="481" stroke="#ffffff" stroke-width="2"/>
    <path d="M390 472 C386 467 378 470 380 476 C382 481 390 486 390 486 C390 486 398 481 400 476 C402 470 394 467 390 472 Z" fill="#9db8ca"/>
    <circle cx="428" cy="472" r="6" fill="#9db8ca"/>
    <path d="M417 486 C419 478 437 478 439 486" fill="#9db8ca"/>
  </g>

  <!-- HEART NOTIFICATION -->
  <g transform="rotate(7 535 92)" filter="url(#smallShadow)">
    <path d="M493 54 Q493 49 500 49 L561 49 Q572 49 572 60 L572 99 Q572 109 563 109 L539 109 L528 121 L528 109 L501 109 Q493 109 493 100 Z" fill="url(#redGrad)"/>
    <path d="M532 84 C526 79 516 73 516 65 C516 57 526 54 532 61 C538 54 548 57 548 65 C548 73 538 79 532 84 Z" fill="#ffffff"/>
  </g>

  <!-- X / TWITTER ICON -->
  <g filter="url(#smallShadow)">
    <rect x="571" y="138" width="61" height="61" rx="15" fill="url(#darkIcon)"/>
    <path d="M586 154 L599 154 L608 166 L618 154 H623 L610 169 L625 185 H612 L602 173 L592 185 H587 L600 170 Z" fill="#ffffff"/>
  </g>

  <!-- YOUTUBE ICON -->
  <g filter="url(#smallShadow)">
    <rect x="529" y="215" width="69" height="61" rx="17" fill="#ef484c"/>
    <path d="M550 231 Q550 225 556 225 H572 Q578 225 578 231 V260 Q578 266 572 266 H556 Q550 266 550 260 Z" fill="#ffffff" opacity=".95"/>
    <path d="M560 236 L560 255 L574 246 Z" fill="#ef484c"/>
  </g>

  <!-- TIKTOK ICON -->
  <g transform="rotate(6 538 328)" filter="url(#smallShadow)">
    <rect x="506" y="298" width="63" height="61" rx="17" fill="url(#tiktokGrad)"/>
    <path d="M539 314 V340 C539 347 534 351 528 351 C521 351 516 347 516 340 C516 334 521 329 527 329 C529 329 531 330 533 331 V323 C531 322 529 321 527 321 C516 321 508 329 508 340 C508 351 516 359 527 359 C538 359 547 351 547 340 V329 C551 332 556 334 561 334 V326 C554 326 548 322 546 316 C544 314 542 313 539 314 Z" fill="#ffffff"/>
    <path d="M541 315 V340 C541 347 536 352 530 352 C528 352 526 351 524 350 C526 354 530 357 535 357 C544 357 550 350 550 341 V329 C546 327 543 324 541 315 Z" fill="#35d6df" opacity=".9"/>
  </g>

  <!-- MEGAPHONE -->
  <g transform="rotate(-24 205 450)" filter="url(#shadow)">
    <path d="M165 435 H191 V510 Q191 518 183 518 H173 Q165 518 165 510 Z" fill="#e8474d"/>
    <path d="M183 410 L276 378 L276 457 L183 425 Z" fill="url(#redGrad)"/>
    <ellipse cx="277" cy="418" rx="17" ry="41" fill="#d93642"/>
    <ellipse cx="280" cy="418" rx="8" ry="27" fill="#a82f38"/>
    <path d="M178 408 Q166 408 166 418 Q166 428 178 428 Z" fill="#ff6468"/>
    <path d="M190 411 L268 387 L268 400 L190 424 Z" fill="#ff7478" opacity=".7"/>
  </g>

  <!-- SOUND / MARKETING LINES -->
  <g stroke="#ff5960" stroke-width="6" stroke-linecap="round">
    <line x1="302" y1="393" x2="313" y2="387"/>
    <line x1="299" y1="407" x2="314" y2="403"/>
    <line x1="302" y1="421" x2="316" y2="421"/>
  </g>

  <!-- RIGHT GROWTH ARROW -->
  <g stroke="#ff5c61" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path d="M601 301 L648 255 L684 274 L729 222"/>
    <path d="M704 226 L729 222 L723 247" stroke-width="8"/>
  </g>

  <!-- RIGHT BAR CHART -->
  <g>
    <rect x="600" y="322" width="25" height="21" rx="3" fill="#ffdddd"/>
    <rect x="637" y="298" width="25" height="45" rx="3" fill="#ff7377"/>
    <rect x="674" y="276" width="25" height="67" rx="3" fill="#ff696f"/>
    <rect x="711" y="250" width="25" height="93" rx="3" fill="#ff6268"/>
  </g>

  <!-- RIGHT ANALYTICS CARD -->
  <g filter="url(#shadow)">
    <rect x="506" y="373" width="234" height="132" rx="20" fill="#ffffff"/>
    <g stroke="#ff6267" stroke-width="5" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path d="M530 451 L553 430 L574 438 L598 416 L620 427 L651 395"/>
      <path d="M636 398 L651 395 L648 411"/>
    </g>
    <rect x="531" y="459" width="14" height="17" rx="2" fill="#ffd7d8"/>
    <rect x="553" y="450" width="14" height="26" rx="2" fill="#ff999c"/>
    <rect x="575" y="440" width="14" height="36" rx="2" fill="#ff777c"/>
    <rect x="597" y="428" width="14" height="48" rx="2" fill="#ff6268"/>
    <rect x="646" y="412" width="69" height="8" rx="4" fill="#dce7ef"/>
    <rect x="646" y="428" width="57" height="7" rx="3.5" fill="#e5edf2"/>
    <rect x="646" y="448" width="64" height="7" rx="3.5" fill="#dce7ef"/>
    <rect x="646" y="463" width="46" height="7" rx="3.5" fill="#e8eff3"/>
  </g>

  <!-- PLANTS - LEFT -->
  <g>
    <path d="M125 519 C102 496 106 473 116 462 C130 476 137 493 137 512 Z" fill="#52b978"/>
    <path d="M140 520 C131 490 139 465 154 454 C161 475 157 498 151 520 Z" fill="#31a968"/>
    <path d="M151 520 C158 490 177 475 190 475 C188 498 171 514 158 523 Z" fill="#54bd7b"/>
    <path d="M139 522 C140 499 143 480 151 459" stroke="#299c60" stroke-width="5" fill="none" stroke-linecap="round"/>
    <path d="M153 521 C164 500 174 489 187 478" stroke="#299c60" stroke-width="5" fill="none" stroke-linecap="round"/>
  </g>

  <!-- PLANTS - CENTER RIGHT -->
  <g>
    <path d="M469 530 C464 494 477 464 495 445 C507 474 493 507 483 530 Z" fill="#35ae6d"/>
    <path d="M485 531 C492 492 516 466 538 457 C538 489 515 516 495 531 Z" fill="#4ebd78"/>
    <path d="M466 531 C451 503 450 480 460 465 C477 482 479 506 475 529 Z" fill="#68c984"/>
  </g>

  <!-- PLANTS - RIGHT -->
  <g>
    <path d="M584 531 C568 504 574 474 590 456 C604 480 600 507 594 531 Z" fill="#45b874"/>
    <path d="M602 530 C600 495 617 467 635 452 C643 481 628 510 615 531 Z" fill="#32a967"/>
    <path d="M619 530 C631 493 654 474 674 470 C671 497 650 518 628 531 Z" fill="#55bf7b"/>
    <path d="M650 531 C666 499 692 484 715 485 C705 510 681 526 658 532 Z" fill="#3fae6d"/>
    <path d="M680 530 C697 503 718 493 737 495 C727 518 705 529 685 533 Z" fill="#51bc77"/>
  </g>

  <!-- GROUND SHADOW -->
  <ellipse cx="449" cy="542" rx="355" ry="22" fill="#d8edf9" opacity=".9"/>
  <ellipse cx="449" cy="541" rx="280" ry="13" fill="#c4e4f5" opacity=".45"/>

  <!-- SMALL DECORATIVE DOTS -->
  <circle cx="81" cy="317" r="8" fill="#ffdfe1"/>
  <circle cx="541" cy="163" r="7" fill="#ffe7e8"/>
  <circle cx="668" cy="170" r="8" fill="#ffe8e9"/>
  <circle cx="763" cy="337" r="7" fill="#ffdfe0"/>
  <circle cx="756" cy="376" r="5" fill="#e5f3fb"/>
</svg>
<?php $social_media_marketing_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Social Media Marketing']
    ],
    'title' => 'Social Media <span class="text-danger-highlight">Marketing</span>',
    'description' => 'Build your brand, engage your audience and drive real results with strategic social media marketing. We create, manage and optimize your social presence for maximum reach and growth.',
    'cta_text' => 'Boost Your Social Presence',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-bullseye',
            'title' => 'Targeted',
            'subtitle' => 'Audience Reach'
        ],
        [
            'icon' => 'bi bi-people',
            'title' => 'Higher',
            'subtitle' => 'Engagement'
        ],
        [
            'icon' => 'bi bi-bar-chart-line',
            'title' => 'Brand',
            'subtitle' => 'Awareness'
        ],
        [
            'icon' => 'bi bi-rocket-takeoff',
            'title' => 'Better',
            'subtitle' => 'ROI'
        ]
    ],
    'svg' => $social_media_marketing_svg
]); ?>

<!-- 3. Social Media Marketing Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Amplify Your Brand Voice & Drive Authentic Community Engagement</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Turn followers into lifelong brand advocates. We craft data-driven content calendars, run high-converting social campaigns, and manage multi-channel communities across Instagram, Facebook, LinkedIn, YouTube, and X to maximize visibility and revenue.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Strategic Content Creation</h5>
                                <p class="small text-muted mb-0">High-impact reels, carousel graphics, and persuasive copywriting tailored to each social network's unique audience.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Paid Social Advertising</h5>
                                <p class="small text-muted mb-0">Precision-targeted paid social campaigns that reach high-value buyer personas and deliver measurable ROAS.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Community Management & Growth</h5>
                                <p class="small text-muted mb-0">Active reputation monitoring, direct engagement, and influencer outreach to build strong brand trust.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
