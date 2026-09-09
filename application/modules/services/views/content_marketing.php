<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// =========================================================================
// 1. HERO VECTOR SVG: CONTENT MARKETING ARTWORK
// =========================================================================
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

  <!-- PENCIL / STYLUS -->
  <g transform="translate(532, 372) rotate(45)" filter="url(#softShadow)">
    <polygon points="-4,-7 4,-7 0,0" fill="#3d5362"/>
    <polygon points="-11,-18 11,-18 4,-7 -4,-7" fill="#e7bd87"/>
    <rect x="-11" y="-105" width="22" height="87" rx="3" fill="url(#brightBlue)"/>
    <rect x="-6" y="-100" width="5" height="78" rx="2.5" fill="#65b7f1"/>
    <rect x="-11" y="-120" width="22" height="15" rx="4.5" fill="#f04b52"/>
  </g>

  <!-- CHART CARD RIGHT -->
  <g filter="url(#shadow)">
    <rect x="685" y="228" width="125" height="118" rx="10" fill="#fff"/>
    <line x1="720" y1="288" x2="774" y2="242" stroke="#2582E2" stroke-width="5.5" stroke-linecap="round"/>
    <polygon points="786,233 768,241 777,252" fill="#2582E2"/>
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

<!-- =========================================================================
     2. VECTOR ARTWORK 1: TOPIC CLUSTERS & SEMANTIC PILLARS (LINE 1)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Soft Ambient Dropshadow -->
    <filter id="cmPillarShadow" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <filter id="cmMasterGlow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#C91A25" flood-opacity=".22"/>
    </filter>

    <!-- Color Gradients -->
    <linearGradient id="cmBgGrad" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#F8FAFC"/>
      <stop offset="100%" stop-color="#F1F5F9"/>
    </linearGradient>
    <linearGradient id="cmMasterDark" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#1E293B"/>
    </linearGradient>
    <linearGradient id="cmRedGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#EF4444"/>
      <stop offset="100%" stop-color="#C91A25"/>
    </linearGradient>
    <linearGradient id="cmLineGrad1" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#C91A25"/>
      <stop offset="100%" stop-color="#2563EB"/>
    </linearGradient>
    <linearGradient id="cmLineGrad2" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#C91A25"/>
      <stop offset="100%" stop-color="#7C3AED"/>
    </linearGradient>
    <linearGradient id="cmLineGrad3" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#C91A25"/>
      <stop offset="100%" stop-color="#EA580C"/>
    </linearGradient>

    <!-- Background Tech Grid Pattern -->
    <pattern id="cmGridDots" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Outer Frame -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="url(#cmBgGrad)" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#cmGridDots)"/>

  <!-- Soft Ambient Glow Orbs -->
  <circle cx="90" cy="80" r="70" fill="#FEE2E2" opacity=".45"/>
  <circle cx="530" cy="330" r="75" fill="#E0F2FE" opacity=".6"/>

  <!-- Connecting Curved Flow Paths -->
  <path d="M 260 115 C 260 148, 122 148, 122 178" fill="none" stroke="url(#cmLineGrad1)" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
  <path d="M 310 115 L 310 178" fill="none" stroke="url(#cmLineGrad2)" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
  <path d="M 360 115 C 360 148, 498 148, 498 178" fill="none" stroke="url(#cmLineGrad3)" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>

  <!-- Junction Glowing Dots -->
  <circle cx="122" cy="178" r="4" fill="#2563EB"/>
  <circle cx="310" cy="178" r="4" fill="#7C3AED"/>
  <circle cx="498" cy="178" r="4" fill="#EA580C"/>

  <!-- =========================================================================
       MASTER NODE: CORE PILLAR GUIDE (TOP CENTER)
       ========================================================================= -->
  <g transform="translate(195, 32)" filter="url(#cmMasterGlow)">
    <rect width="230" height="84" rx="16" fill="url(#cmMasterDark)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
    
    <!-- Top-Left Pillar Star Icon -->
    <rect x="14" y="14" width="30" height="30" rx="8" fill="url(#cmRedGrad)"/>
    <path d="M 29 20 L 31 24.5 L 36 25 L 32.5 28.5 L 33.5 33.5 L 29 31 L 24.5 33.5 L 25.5 28.5 L 22 25 L 27 24.5 Z" fill="#FFFFFF"/>

    <!-- Master Titles -->
    <text x="52" y="27" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#FFFFFF">Core Pillar Guide</text>
    <text x="52" y="42" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#38BDF8">5,000+ Word Semantic Hub</text>

    <!-- Authority Ranking Pill -->
    <rect x="14" y="52" width="202" height="20" rx="6" fill="#090D16" stroke="#334155" stroke-width="0.8"/>
    <circle cx="24" cy="62" r="3" fill="#22C55E"/>
    <text x="32" y="66" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#F8FAFC">#1 Organic Search Authority</text>
    <text x="208" y="66" font-family="'Inter', sans-serif" font-size="9.5" font-weight="700" fill="#38BDF8" text-anchor="end">Tier 1</text>
  </g>

  <!-- =========================================================================
       SUB-TOPIC CLUSTER 1: TECHNICAL GUIDE (LEFT)
       ========================================================================= -->
  <g transform="translate(35, 178)" filter="url(#cmPillarShadow)">
    <rect width="175" height="124" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Icon Box -->
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#EFF6FF"/>
    <path d="M 21 19 H 31 V 29 H 21 Z" fill="none" stroke="#2563EB" stroke-width="1.6" stroke-linejoin="round"/>
    <path d="M 24 23 H 28 M 24 26 H 27" stroke="#2563EB" stroke-width="1.4" stroke-linecap="round"/>

    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Technical Guide</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Sub-Topic Cluster</text>

    <!-- Status Tag -->
    <rect x="12" y="49" width="151" height="22" rx="6" fill="#DCFCE7" stroke="#BBF7D0" stroke-width="1"/>
    <path d="M 21 60 L 23 62 L 28 57" fill="none" stroke="#16A34A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#15803D">Internal Link Passed</text>

    <!-- Divider -->
    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>

    <!-- Bottom Stat -->
    <circle cx="18" cy="95" r="3" fill="#3B82F6"/>
    <text x="26" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Intent Keywords</text>
    <text x="163" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="800" fill="#2563EB" text-anchor="end">Top 3</text>
    
    <rect x="12" y="107" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="107" width="128" height="4" rx="2" fill="#3B82F6"/>
  </g>

  <!-- =========================================================================
       SUB-TOPIC CLUSTER 2: INDUSTRY REPORT (MIDDLE)
       ========================================================================= -->
  <g transform="translate(222.5, 178)" filter="url(#cmPillarShadow)">
    <rect width="175" height="124" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Icon Box -->
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#F5F3FF"/>
    <path d="M 18 31 V 26 M 22 31 V 21 M 26 31 V 17 M 30 31 V 23" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>

    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Industry Report</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Lead Magnet Asset</text>

    <!-- Status Tag -->
    <rect x="12" y="49" width="151" height="22" rx="6" fill="#EFF6FF" stroke="#BFDBFE" stroke-width="1"/>
    <path d="M 21 60 L 22.5 57 L 24 60 L 27 60 L 24.5 62 L 25.5 65 L 22.5 63 L 19.5 65 L 20.5 62 L 18 60 Z" fill="#2563EB"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#1D4ED8">Editorial PR Magnet</text>

    <!-- Divider -->
    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>

    <!-- Bottom Stat -->
    <circle cx="18" cy="95" r="3" fill="#7C3AED"/>
    <text x="26" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Backlinks Earned</text>
    <text x="163" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="800" fill="#7C3AED" text-anchor="end">340+ DR80</text>
    
    <rect x="12" y="107" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="107" width="138" height="4" rx="2" fill="#7C3AED"/>
  </g>

  <!-- =========================================================================
       SUB-TOPIC CLUSTER 3: CASE TEARDOWN (RIGHT)
       ========================================================================= -->
  <g transform="translate(410, 178)" filter="url(#cmPillarShadow)">
    <rect width="175" height="124" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Icon Box -->
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#FFF7ED"/>
    <path d="M 21 19 H 31 V 24 C 31 27 28 29 26 29 C 24 29 21 27 21 24 Z" fill="none" stroke="#EA580C" stroke-width="1.6"/>
    <path d="M 26 29 V 33 M 22 33 H 30" stroke="#EA580C" stroke-width="1.6" stroke-linecap="round"/>

    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Case Teardown</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Bottom-Funnel Asset</text>

    <!-- Status Tag -->
    <rect x="12" y="49" width="151" height="22" rx="6" fill="#FEF3C7" stroke="#FDE68A" stroke-width="1"/>
    <path d="M 24 55 L 21 61 H 25 L 23 66 L 28 59 H 24 Z" fill="#D97706"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#B45309">High Conversion Rate</text>

    <!-- Divider -->
    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>

    <!-- Bottom Stat -->
    <circle cx="18" cy="95" r="3" fill="#EA580C"/>
    <text x="26" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Demo Opt-In Rate</text>
    <text x="163" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="800" fill="#EA580C" text-anchor="end">24.8% Opt-In</text>
    
    <rect x="12" y="107" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="107" width="144" height="4" rx="2" fill="#EA580C"/>
  </g>

  <!-- =========================================================================
       BOTTOM FOUNDATION BAR: GOOGLE EEAT ARCHITECTURE
       ========================================================================= -->
  <g transform="translate(35, 320)" filter="url(#cmPillarShadow)">
    <rect width="550" height="64" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Shield Check Icon -->
    <rect x="14" y="14" width="36" height="36" rx="9" fill="url(#cmRedGrad)"/>
    <path d="M 32 20 L 39 23 V 28 C 39 34 32 38 32 38 C 32 38 25 34 25 28 V 23 Z" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linejoin="round"/>
    <path d="M 29 28 L 31 30 L 35 26" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>

    <!-- Text Details -->
    <text x="60" y="29" font-family="'Outfit', sans-serif" font-size="13.5" font-weight="800" fill="#0F172A">100% Google E-E-A-T Compliant Architecture</text>
    <text x="60" y="45" font-family="'Inter', sans-serif" font-size="11" font-weight="500" fill="#64748B">Contextual semantic mapping establishing unbeatable domain authority</text>

    <!-- Verified Badge Pill -->
    <rect x="424" y="18" width="112" height="28" rx="14" fill="#DCFCE7" stroke="#86EFAC" stroke-width="1"/>
    <path d="M 436 32 L 439 35 L 445 29" fill="none" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="451" y="36" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D">Verified EEAT</text>
  </g>
</svg>
<?php $cm_artwork_1 = ob_get_clean(); ?>

<!-- =========================================================================
     3. VECTOR ARTWORK 2: MULTI-CHANNEL CONTENT AMPLIFICATION (LINE 2)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="cmAmpShadow" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <linearGradient id="cmAmpBg" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#F8FAFC"/>
      <stop offset="100%" stop-color="#F1F5F9"/>
    </linearGradient>
    <linearGradient id="cmAmpRed" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#EF4444"/>
      <stop offset="100%" stop-color="#C91A25"/>
    </linearGradient>
    <pattern id="cmAmpGrid" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Outer Frame -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="url(#cmAmpBg)" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#cmAmpGrid)"/>

  <!-- Ambient Glow Orbs -->
  <circle cx="510" cy="90" r="70" fill="#FEE2E2" opacity=".45"/>
  <circle cx="100" cy="330" r="75" fill="#E0F2FE" opacity=".6"/>

  <!-- Main Pipeline Card (Left) -->
  <g transform="translate(35, 35)" filter="url(#cmAmpShadow)">
    <rect width="245" height="350" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Rocket Icon Container -->
    <g transform="translate(86, 22)">
      <circle cx="36" cy="36" r="34" fill="#FEE2E2"/>
      <path d="M 43 23 C 33 23 27 31 26 39 C 31 39 37 38 41 34 C 41 38 40 44 40 49 C 48 48 56 42 56 32 C 56 26 50 23 43 23 Z" fill="#C91A25"/>
      <circle cx="44" cy="30" r="3" fill="#FFFFFF"/>
      <path d="M 28 41 L 22 47 M 32 45 L 26 51" stroke="#EF4444" stroke-width="2" stroke-linecap="round"/>
    </g>

    <text x="122" y="116" font-family="'Outfit', sans-serif" font-size="16" font-weight="900" fill="#0F172A" text-anchor="middle">Inbound Pipeline Lift</text>
    <text x="122" y="160" font-family="'Outfit', sans-serif" font-size="44" font-weight="900" fill="#C91A25" text-anchor="middle">4.2x</text>
    <text x="122" y="184" font-family="'Inter', sans-serif" font-size="11.5" font-weight="700" fill="#16A34A" text-anchor="middle">Qualified Sales Opportunities</text>

    <!-- Authority Indicators -->
    <g transform="translate(18, 208)">
      <text x="0" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">MQL Conversion Rate</text>
      <text x="209" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">18.4%</text>
      <rect x="0" y="18" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="18" width="176" height="6" rx="3" fill="#C91A25"/>

      <text x="0" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">Organic Read Retention</text>
      <text x="209" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">4m 28s</text>
      <rect x="0" y="52" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="52" width="194" height="6" rx="3" fill="#16A34A"/>
    </g>

    <rect x="18" y="295" width="209" height="32" rx="8" fill="#F0FDF4" stroke="#BBF7D0" stroke-width="1"/>
    <path d="M 28 311 L 32 315 L 38 307" fill="none" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="44" y="315" font-family="'Inter', sans-serif" font-size="10.5" font-weight="700" fill="#15803D">Automated MQL Attribution</text>
  </g>

  <!-- Right Top: Multi-Channel Amplification Badges -->
  <g transform="translate(300, 35)" filter="url(#cmAmpShadow)">
    <rect width="285" height="160" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">Multi-Channel Amplification</text>
    
    <g transform="translate(16, 44)">
      <!-- Channel 1: Newsletters -->
      <rect width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 14 16 H 26 V 26 H 14 Z M 14 16 L 20 21 L 26 16" fill="none" stroke="#2563EB" stroke-width="1.4" stroke-linejoin="round"/>
      <text x="32" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Newsletters</text>
      
      <!-- Channel 2: Social Feeds -->
      <rect x="130" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 144 15 H 154 V 27 H 144 Z M 149 24 A 0.5 0.5 0 0 0 149 25" fill="none" stroke="#7C3AED" stroke-width="1.4" stroke-linejoin="round"/>
      <text x="162" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Social Feeds</text>

      <!-- Channel 3: Podcasts -->
      <rect y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 20 63 V 68 M 16 66 C 16 70 24 70 24 66 M 18 71 H 22" stroke="#DC2626" stroke-width="1.4" stroke-linecap="round"/>
      <text x="32" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Podcasts</text>
      
      <!-- Channel 4: Digital PR -->
      <rect x="130" y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 144 64 H 156 M 144 68 H 152 M 144 72 H 156" stroke="#059669" stroke-width="1.4" stroke-linecap="round"/>
      <text x="162" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Digital PR</text>
    </g>
  </g>

  <!-- Right Bottom: Monthly Organic Traffic Growth -->
  <g transform="translate(300, 215)" filter="url(#cmAmpShadow)">
    <rect width="285" height="170" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#0F172A">Compounding Traffic Lift</text>
    
    <text x="18" y="62" font-family="'Outfit', sans-serif" font-size="32" font-weight="900" fill="#C91A25">+420%</text>
    <text x="125" y="58" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Annual Organic Visits</text>

    <!-- Growth Graph Bars -->
    <g transform="translate(18, 80)">
      <rect x="0" y="38" width="26" height="26" rx="4" fill="#FEE2E2"/>
      <rect x="36" y="28" width="26" height="36" rx="4" fill="#FCA5A5"/>
      <rect x="72" y="16" width="26" height="48" rx="4" fill="#EF4444"/>
      <rect x="108" y="0" width="26" height="64" rx="4" fill="#C91A25"/>
      <path d="M 13 36 L 49 26 L 85 14 L 121 0" fill="none" stroke="#991B1B" stroke-width="3" stroke-linecap="round"/>
    </g>
    
    <rect x="160" y="105" width="110" height="26" rx="13" fill="#DCFCE7"/>
    <text x="215" y="122" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D" text-anchor="middle">★ High ROI</text>
  </g>
</svg>
<?php $cm_artwork_2 = ob_get_clean(); ?>

<!-- =========================================================================
     4. DYNAMIC HERO SLIDER COMPONENT
     ========================================================================= -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Content Marketing Services']
    ],
    'title' => 'Compelling Stories, <span class="text-danger-highlight">Scalable Revenue</span>',
    'description' => 'Transform your brand into an authoritative industry voice. Our full-funnel content marketing engine combines deep search intent research, subject-matter expert storytelling, and strategic multi-channel amplification to turn readers into loyal paying customers.',
    'cta_text' => 'Scale Your Content Engine',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-file-earmark-richtext-fill',
            'title' => 'Search-Optimized',
            'subtitle' => 'High-Ranking Articles'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'title' => 'Full-Funnel Reach',
            'subtitle' => 'TOFU, MOFU, BOFU'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => 'Higher Conversion',
            'subtitle' => 'Targeted Lead Magnets'
        ]
    ],
    'svg' => $content_marketing_svg
]); ?>

<!-- =========================================================================
     INTERNAL CSS: CONTENT MARKETING BESPOKE STYLESHEET (ZERO INLINE STYLES)
     ========================================================================= -->
<div class="cm-page-wrap">

    <!-- =========================================================================
         LINE 1 (ALTERNATING ROW 1): CONTENT (LEFT) + TOPIC CLUSTERS SVG (RIGHT)
         ========================================================================= -->
    <section class="cm-section cm-bg-white">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Content Column (Left) -->
                <div class="col-12 col-lg-6">
                    <div class="cm-badge">
                        <i class="bi bi-diagram-3-fill"></i> Topic Cluster &amp; Pillar Hubs
                    </div>
                    <h2 class="cm-heading">
                        Establish Authority with <span class="cm-highlight">Semantic Pillar Clusters</span>
                    </h2>
                    <p class="cm-lead">
                        Search algorithms evaluate topical authority, not just individual keywords. We architect comprehensive pillar guides interconnecting focused sub-topic clusters that pass link equity, dominate entire search categories, and keep prospects deeply engaged on your site.
                    </p>
                    <ul class="cm-check-list">
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Deep Semantic Keyword Intent &amp; Entity Mapping</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>High-Value Pillar Pages Anchoring Supporting Cluster Articles</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Strategic Internal Link Flow Driving PageRank to Core Offerings</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>100% Google EEAT (Experience, Expertise, Authoritativeness, Trust)</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="cm-btn">
                        <span>Launch Pillar Strategy</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 1 (Right) -->
                <div class="col-12 col-lg-6">
                    <div class="cm-svg-box">
                        <?= $cm_artwork_1 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         LINE 2 (ALTERNATING ROW 2): AMPLIFICATION SVG (LEFT) + CONTENT (RIGHT)
         ========================================================================= -->
    <section class="cm-section cm-bg-alt">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5 flex-lg-row-reverse">
                
                <!-- Content Column (Right on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="cm-badge">
                        <i class="bi bi-rocket-takeoff-fill"></i> Multi-Channel Distribution
                    </div>
                    <h2 class="cm-heading">
                        Amplify Content Reach &amp; <span class="cm-highlight">Accelerate Lead Inflow</span>
                    </h2>
                    <p class="cm-lead">
                        Creating stellar content is only half the battle. Our multi-channel distribution engine broadcasts your assets across email broadcasts, executive social feeds, niche industry communities, and digital PR outlets to generate an immediate, compounding pipeline of qualified leads.
                    </p>
                    <ul class="cm-check-list">
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Multi-Touchpoint Social &amp; Email Newsletter Syndication</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Automated Lead Magnet Delivery &amp; MQL Nurture Workflows</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Data-Backed Industry Reports Generating High-DR PR Backlinks</span>
                        </li>
                        <li class="cm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Closed-Loop Analytics Tracking Direct Revenue &amp; Pipeline Growth</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="cm-btn">
                        <span>Amplify Your Content</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 2 (Left on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="cm-svg-box">
                        <?= $cm_artwork_2 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: FULL-FUNNEL CONTENT ARCHITECTURE (TOFU / MOFU / BOFU)
         ========================================================================= -->
    <section class="cm-section cm-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="cm-badge">
                        <i class="bi bi-funnel-fill"></i> Strategic Funnel
                    </div>
                    <h2 class="cm-heading">
                        Full-Funnel Content <span class="cm-highlight">Marketing Engine</span>
                    </h2>
                    <p class="cm-lead cm-lead-center">
                        We develop targeted content mapped precisely to every step of your customer's buyer journey, transforming initial search impressions into qualified sales opportunities.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- TOFU Card -->
                <div class="col-12 col-lg-4">
                    <div class="cm-funnel-card">
                        <div class="cm-funnel-header">
                            <div class="cm-funnel-icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <span class="cm-funnel-stage">Top of Funnel</span>
                        </div>
                        <h3 class="cm-funnel-title">Awareness &amp; Search Reach</h3>
                        <p class="cm-funnel-desc">
                            Capturing high-volume informational search traffic and educating broad audiences through comprehensive topic clusters and authoritative guides.
                        </p>
                        <ul class="cm-funnel-list">
                            <li><i class="bi bi-check-circle-fill"></i> SEO Ultimate Guides &amp; How-To Articles</li>
                            <li><i class="bi bi-check-circle-fill"></i> Industry Data Infographics &amp; Trends</li>
                            <li><i class="bi bi-check-circle-fill"></i> Explainer Videos &amp; Thought Leadership</li>
                        </ul>
                    </div>
                </div>

                <!-- MOFU Card -->
                <div class="col-12 col-lg-4">
                    <div class="cm-funnel-card">
                        <div class="cm-funnel-header">
                            <div class="cm-funnel-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <span class="cm-funnel-stage">Middle of Funnel</span>
                        </div>
                        <h3 class="cm-funnel-title">Consideration &amp; Lead Capture</h3>
                        <p class="cm-funnel-desc">
                            Nurturing interested prospects with high-value downloadable resources, comparison frameworks, and actionable solutions that prove your expertise.
                        </p>
                        <ul class="cm-funnel-list">
                            <li><i class="bi bi-check-circle-fill"></i> Gated Whitepapers &amp; In-Depth eBooks</li>
                            <li><i class="bi bi-check-circle-fill"></i> Product vs Product Comparison Matrix</li>
                            <li><i class="bi bi-check-circle-fill"></i> Interactive Assessment Tools &amp; Templates</li>
                        </ul>
                    </div>
                </div>

                <!-- BOFU Card -->
                <div class="col-12 col-lg-4">
                    <div class="cm-funnel-card">
                        <div class="cm-funnel-header">
                            <div class="cm-funnel-icon">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <span class="cm-funnel-stage">Bottom of Funnel</span>
                        </div>
                        <h3 class="cm-funnel-title">Decision &amp; Direct Revenue</h3>
                        <p class="cm-funnel-desc">
                            Overcoming final objections and converting high-intent buyers with compelling evidence, verified ROI breakdowns, and clear conversion paths.
                        </p>
                        <ul class="cm-funnel-list">
                            <li><i class="bi bi-check-circle-fill"></i> Deep-Dive Customer Case Studies</li>
                            <li><i class="bi bi-check-circle-fill"></i> Interactive ROI &amp; Cost Calculators</li>
                            <li><i class="bi bi-check-circle-fill"></i> High-Converting Demo &amp; Service Pages</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MULTI-FORMAT CONTENT ECOSYSTEM (6-CARD GRID)
         ========================================================================= -->
    <section class="cm-section cm-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="cm-badge">
                        <i class="bi bi-grid-fill"></i> Asset Formats
                    </div>
                    <h2 class="cm-heading">
                        Multi-Format Content <span class="cm-highlight">Ecosystem</span>
                    </h2>
                    <p class="cm-lead cm-lead-center">
                        Our seasoned copywriters, technical researchers, and digital designers produce rich, engaging multi-channel assets tailored to your brand voice.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Format 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <h3 class="cm-format-title">Long-Form SEO Articles</h3>
                        <p class="cm-format-desc">
                            Deep-dive semantic blog posts and pillar guides built on rigorous keyword research, EEAT editorial standards, and structured schema markup.
                        </p>
                    </div>
                </div>

                <!-- Format 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <h3 class="cm-format-title">Lead Magnets &amp; Whitepapers</h3>
                        <p class="cm-format-desc">
                            High-value gated downloadable assets, technical whitepapers, and industry benchmarks that capture high-intent executive email leads.
                        </p>
                    </div>
                </div>

                <!-- Format 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <h3 class="cm-format-title">Customer Case Studies</h3>
                        <p class="cm-format-desc">
                            Data-rich client success stories that clearly demonstrate before-and-after results, strategic implementation, and measurable business ROI.
                        </p>
                    </div>
                </div>

                <!-- Format 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-bar-chart-steps"></i>
                        </div>
                        <h3 class="cm-format-title">Infographics &amp; Visual Media</h3>
                        <p class="cm-format-desc">
                            Custom branded charts, process diagrams, and visual carousels engineered for maximum engagement, social shares, and editorial PR backlinks.
                        </p>
                    </div>
                </div>

                <!-- Format 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-camera-video-fill"></i>
                        </div>
                        <h3 class="cm-format-title">Video Scripts &amp; Interactive Media</h3>
                        <p class="cm-format-desc">
                            Compelling short and long-form video scripts, interactive quiz modules, and podcast narrative structures that keep audiences glued to your brand.
                        </p>
                    </div>
                </div>

                <!-- Format 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cm-format-card">
                        <div class="cm-format-icon">
                            <i class="bi bi-envelope-paper-heart-fill"></i>
                        </div>
                        <h3 class="cm-format-title">Email Nurture Sequences</h3>
                        <p class="cm-format-desc">
                            Automated drip workflows, product launch announcements, and weekly thought-leadership digests that maintain active customer relationships.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: 5-STAGE EDITORIAL PRODUCTION LIFECYCLE (STEPPER)
         ========================================================================= -->
    <section class="cm-section cm-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="cm-badge">
                        <i class="bi bi-diagram-3-fill"></i> End-to-End Workflow
                    </div>
                    <h2 class="cm-heading">
                        Our 5-Stage Editorial <span class="cm-highlight">Production Lifecycle</span>
                    </h2>
                    <p class="cm-lead cm-lead-center">
                        From initial audience intent research to strategic multi-channel amplification, every piece of content follows our rigorous quality assurance framework.
                    </p>
                </div>
            </div>

            <div class="row g-3 g-lg-4">
                
                <!-- Stage 1 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="cm-step-card">
                        <div class="cm-step-num">01</div>
                        <h3 class="cm-step-title">Intent Research</h3>
                        <p class="cm-step-desc">Mapping high-intent buyer pain points, search queries, and competitor content gaps.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="cm-step-card">
                        <div class="cm-step-num">02</div>
                        <h3 class="cm-step-title">Topic Architecture</h3>
                        <p class="cm-step-desc">Structuring topic clusters, editorial calendars, and internal linking roadmaps.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="cm-step-card">
                        <div class="cm-step-num">03</div>
                        <h3 class="cm-step-title">Expert Writing</h3>
                        <p class="cm-step-desc">Crafting original, engaging copy backed by real industry data and human storytelling.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="cm-step-card">
                        <div class="cm-step-num">04</div>
                        <h3 class="cm-step-title">Multi-Channel Push</h3>
                        <p class="cm-step-desc">Amplifying content across search engines, email broadcasts, and social channels.</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="cm-step-card">
                        <div class="cm-step-num">05</div>
                        <h3 class="cm-step-title">Revenue Tracking</h3>
                        <p class="cm-step-desc">Analyzing keyword rankings, lead attribution, and continuous optimization cycles.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: CONTENT ROI & BUSINESS IMPACT METRICS
         ========================================================================= -->
    <section class="cm-section cm-bg-alt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cm-metrics-box">
                        <div class="row g-4 text-center">
                            <div class="col-6 col-lg-3">
                                <div class="cm-metric-num">3.5x</div>
                                <div class="cm-metric-label">More Leads Generated</div>
                                <p class="cm-metric-desc">Than traditional outbound marketing at a fraction of the total acquisition cost</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="cm-metric-num">+420%</div>
                                <div class="cm-metric-label">Organic Search Growth</div>
                                <p class="cm-metric-desc">Average compounding organic traffic gains across our partner websites</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="cm-metric-num">100%</div>
                                <div class="cm-metric-label">Human-Led Editorial</div>
                                <p class="cm-metric-desc">Expert-written, deeply researched content strictly adhering to Google EEAT guidelines</p>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="cm-metric-num">70%+</div>
                                <div class="cm-metric-label">Lower Cost Per Lead</div>
                                <p class="cm-metric-desc">Compared to paid digital ads over a 12-month compounding timeline</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 7: CONTENT MARKETING FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ========================================================================= -->
    <section class="cm-section cm-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="cm-badge">
                        <i class="bi bi-question-circle-fill"></i> Clear Answers
                    </div>
                    <h2 class="cm-heading">
                        Content Marketing <span class="cm-highlight">Frequently Asked Questions</span>
                    </h2>
                    <p class="cm-lead cm-lead-center">
                        Explore key questions on how our content creation workflow functions, our editorial standards, and how we measure real business ROI.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion cm-accordion" id="contentMarketingFaq">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do you capture our exact brand tone and technical industry voice?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#contentMarketingFaq">
                                <div class="accordion-body">
                                    We start with a thorough Brand Tone &amp; Style Discovery session where we audit your existing marketing collateral, interview your internal subject-matter experts, and establish clear editorial guidelines. Every piece of content is crafted by specialized writers with domain experience and reviewed before publication.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do you measure the direct business ROI of content marketing?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#contentMarketingFaq">
                                <div class="accordion-body">
                                    We track full-funnel attribution metrics including organic keyword ranking growth, session duration, scroll depth, downloadable lead magnet conversions, assisted conversion paths in Google Analytics 4, and direct marketing qualified leads (MQLs) generated by specific topic clusters.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How does content marketing integrate with SEO and lead generation?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#contentMarketingFaq">
                                <div class="accordion-body">
                                    Content and SEO work together symbiotically. High-quality content provides the semantic depth and internal link equity necessary to rank for high-intent keywords, while strategically placed calls-to-action, lead magnets, and case studies capture that traffic and guide visitors directly into your sales pipeline.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is the recommended publishing frequency for noticeable organic growth?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#contentMarketingFaq">
                                <div class="accordion-body">
                                    Quality always beats sheer quantity. For most B2B and enterprise brands, publishing 4 to 8 deeply researched, authoritative pillar articles per month—accompanied by supporting social assets, email newsletters, and downloadable resources—delivers compounding search visibility and steady lead generation.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
