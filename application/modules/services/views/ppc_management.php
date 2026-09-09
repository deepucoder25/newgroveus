<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// =========================================================================
// 1. HERO VECTOR SVG: PPC MANAGEMENT & PAID ADVERTISING ARTWORK
// =========================================================================
ob_start(); ?>
<svg viewBox="70 40 780 495" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <linearGradient id="ppcHeroBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="0.65" stop-color="#fffafa"/><stop offset="1%" stop-color="#fff0f1"/></linearGradient>
    <linearGradient id="ppcBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#123e63"/><stop offset="0.45" stop-color="#14558a"/><stop offset="1%" stop-color="#267fc1"/></linearGradient>
    <linearGradient id="ppcLaptop" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#344e64"/><stop offset="1%" stop-color="#172f45"/></linearGradient>
    <linearGradient id="ppcRed" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff4246"/><stop offset="1%" stop-color="#c91a25"/></linearGradient>
    <linearGradient id="ppcGold" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#ffd33f"/><stop offset="1%" stop-color="#f5a900"/></linearGradient>

    <radialGradient id="ppcPinkBlob"><stop offset="0%" stop-color="#ffe3e5"/><stop offset="1%" stop-color="#fff5f5"/></radialGradient>
    <radialGradient id="ppcBlueBlob"><stop offset="0%" stop-color="#dff3ff"/><stop offset="1%" stop-color="#c9eaff"/></radialGradient>

    <filter id="ppcShadow" x="-30%" y="-30%" width="160%" height="170%"><feDropShadow dx="0" dy="6" stdDeviation="8" flood-opacity=".16"/></filter>
    <filter id="ppcSmallShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="4" stdDeviation="5" flood-opacity=".12"/></filter>
  </defs>

  <!-- BACKGROUND BLOBS -->
  <circle cx="456" cy="167" r="122" fill="url(#ppcPinkBlob)" opacity=".85"/>
  <path d="M76 333 C73 277 112 230 166 214 C218 198 257 169 291 121 C326 73 380 43 431 48 C488 53 520 89 548 132 C578 177 613 201 672 201 C741 200 800 235 819 295 C840 360 801 423 742 447 C675 474 607 448 544 463 C472 480 402 474 340 456 C272 437 214 449 157 421 C106 397 80 370 76 333Z" fill="url(#ppcBlueBlob)" opacity=".82"/>

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
  <g filter="url(#ppcShadow)">
    <path d="M293 109 Q283 110 283 121 L285 166 Q286 177 297 178 L342 175 L354 191 L361 174 L399 171 Q410 170 410 159 L407 119 Q406 107 394 105Z" fill="url(#ppcRed)"/>
    <text x="347" y="157" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="40" font-weight="900" fill="#ffffff">PPC</text>
  </g>

  <!-- CURRENCY COIN -->
  <g filter="url(#ppcSmallShadow)">
    <circle cx="496" cy="163" r="39" fill="#ffcb36"/>
    <circle cx="496" cy="163" r="31" fill="#f7a600"/>
    <text x="496" y="176" text-anchor="middle" font-family="'Outfit', sans-serif" font-size="34" font-weight="900" fill="#ffffff">₹</text>
  </g>

  <!-- SMALL ANALYTICS ICON -->
  <g filter="url(#ppcSmallShadow)">
    <rect x="623" y="127" width="95" height="75" rx="9" fill="#ffffff"/>
    <path d="M647 167 L661 157" fill="none" stroke="#ee3439" stroke-width="5" stroke-linecap="round" opacity="0.35"/>
    <rect x="643" y="171" width="12" height="18" rx="2" fill="#ee3439"/>
    <rect x="661" y="157" width="12" height="32" rx="2" fill="#ed3439"/>
    <path d="M679 189 L679 153 Q683 152 685 147 L687 144 L691 144 L691 189 Z" fill="#e52c34"/>
  </g>

  <!-- LAPTOP OUTER & SCREEN -->
  <g filter="url(#ppcShadow)">
    <rect x="241" y="198" width="478" height="302" rx="13" fill="url(#ppcLaptop)"/>
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
  <text x="324" y="262" font-family="'Outfit', sans-serif" font-size="22" font-weight="700" fill="#334155">Google Ads</text>

  <!-- LIGHT HORIZONTAL DIVIDER -->
  <rect x="275" y="282" width="390" height="5" rx="3" fill="#edf3f7"/>

  <!-- AD RESULT 1 -->
  <rect x="286" y="304" width="39" height="33" rx="4" fill="#338ce3"/>
  <text x="305" y="327" text-anchor="middle" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#ffffff">Ad</text>
  <rect x="334" y="307" width="115" height="8" rx="4" fill="#3b91e4"/>
  <rect x="334" y="322" width="87" height="7" rx="4" fill="#4eb68b"/>
  <rect x="286" y="344" width="182" height="7" rx="4" fill="#dce8ef"/>
  <rect x="286" y="357" width="109" height="7" rx="4" fill="#58b894"/>
  <rect x="286" y="371" width="133" height="7" rx="4" fill="#dce8ef"/>

  <!-- AD RESULT 2 -->
  <rect x="286" y="405" width="39" height="32" rx="4" fill="#338ce3"/>
  <text x="305" y="427" text-anchor="middle" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#ffffff">Ad</text>
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
  <g filter="url(#ppcShadow)">
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
  <path d="M203 497 L756 497 L756 510 Q755 523 739 528 L218 528 Q203 523 202 510Z" fill="#45647d" filter="url(#ppcShadow)"/>
  <path d="M202 500 L756 500 L748 514 L214 514Z" fill="#3279b7"/>
  <path d="M430 499 L532 499 L526 508 L438 508Z" fill="#63839b"/>

  <!-- TARGET -->
  <g filter="url(#ppcSmallShadow)">
    <circle cx="742" cy="402" r="80" fill="#ed3238"/>
    <circle cx="742" cy="402" r="61" fill="#ffffff"/>
    <circle cx="742" cy="402" r="43" fill="#ed3238"/>
    <circle cx="742" cy="402" r="25" fill="#ffffff"/>
    <circle cx="742" cy="402" r="12" fill="#ed3238"/>
  </g>
  <g>
    <path d="M742 402 L825 312" fill="none" stroke="#173e62" stroke-width="8" stroke-linecap="round"/>
    <path d="M766 389 L742 402 L747 376 Z" fill="#173e62"/>
  </g>

  <!-- COINS -->
  <g filter="url(#ppcSmallShadow)">
    <ellipse cx="739" cy="438" rx="39" ry="11" fill="#e9a30d"/>
    <rect x="700" y="438" width="78" height="25" fill="url(#ppcGold)"/>
    <ellipse cx="739" cy="463" rx="39" ry="11" fill="#e7a20c"/>
  </g>
  <g filter="url(#ppcSmallShadow)">
    <ellipse cx="707" cy="453" rx="39" ry="11" fill="#e9a30d"/>
    <rect x="668" y="453" width="78" height="23" fill="url(#ppcGold)"/>
    <ellipse cx="707" cy="476" rx="39" ry="11" fill="#e9a20c"/>
    <ellipse cx="707" cy="453" rx="27" ry="6" fill="none" stroke="#ffd052" stroke-width="3"/>
  </g>

  <!-- GROUND SHADOW -->
  <ellipse cx="494" cy="531" rx="330" ry="13" fill="#d8eefc"/>
  <ellipse cx="494" cy="542" rx="250" ry="7" fill="#edf8ff"/>
</svg>
<?php $ppc_management_svg = ob_get_clean(); ?>

<!-- =========================================================================
     2. VECTOR ARTWORK 1: GOOGLE SEARCH & SMART BIDDING ENGINE (LINE 1)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="ppcArtShadow1" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <filter id="ppcHeroGlow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#C91A25" flood-opacity=".22"/>
    </filter>
    <linearGradient id="ppcGradDark" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#1E293B"/>
    </linearGradient>
    <linearGradient id="ppcGradRed" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#EF4444"/>
      <stop offset="100%" stop-color="#C91A25"/>
    </linearGradient>
    <pattern id="ppcDots1" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Canvas Container -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#ppcDots1)"/>
  
  <!-- Ambient Soft Orbs -->
  <circle cx="90" cy="90" r="75" fill="#FEE2E2" opacity=".5"/>
  <circle cx="530" cy="330" r="80" fill="#DBEAFE" opacity=".6"/>

  <!-- Top Hero Card: Precision Search Auction Dominance -->
  <g transform="translate(35, 35)" filter="url(#ppcHeroGlow)">
    <rect width="550" height="96" rx="16" fill="url(#ppcGradDark)" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
    
    <!-- Google Ads Search Icon Box -->
    <rect x="16" y="16" width="40" height="40" rx="10" fill="url(#ppcGradRed)"/>
    <path d="M 28 36 L 36 24 M 44 36 L 36 24" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
    <circle cx="36" cy="40" r="3" fill="#FFFFFF"/>

    <text x="68" y="34" font-family="'Outfit', sans-serif" font-size="16" font-weight="800" fill="#FFFFFF">Google Search &amp; Performance Max Engine</text>
    <text x="68" y="50" font-family="'Inter', sans-serif" font-size="11.5" font-weight="600" fill="#38BDF8">Intent-Driven Keyword Auction &amp; Target CPA Bidding</text>

    <!-- Top Indicators Strip -->
    <rect x="16" y="66" width="518" height="20" rx="6" fill="#0B132B" stroke="#334155" stroke-width="0.8"/>
    <circle cx="28" cy="76" r="3" fill="#22C55E"/>
    <text x="36" y="80" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#F8FAFC">Quality Score: 10/10</text>
    <text x="210" y="80" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#38BDF8">Avg Ad Rank: #1 Top of Page</text>
    <text x="400" y="80" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#4ADE80">Cost Per Click: -42% Saved</text>
  </g>

  <!-- 3 Performance Engine Cluster Cards -->
  <!-- Card 1: Negative Keyword Fortress -->
  <g transform="translate(35, 148)" filter="url(#ppcArtShadow1)">
    <rect width="175" height="152" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#EFF6FF"/>
    <path d="M 21 21 L 31 31 M 31 21 L 21 31" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
    
    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Negative Filtration</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Zero Waste Protocol</text>

    <rect x="12" y="49" width="151" height="22" rx="6" fill="#DCFCE7" stroke="#BBF7D0" stroke-width="1"/>
    <path d="M 21 60 L 23 62 L 28 57" fill="none" stroke="#16A34A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#15803D">99.4% Intent Precision</text>

    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>
    
    <text x="14" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Budget Protected</text>
    <text x="161" y="98" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#2563EB" text-anchor="end">100% Focused</text>

    <rect x="12" y="108" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="108" width="135" height="4" rx="2" fill="#2563EB"/>

    <text x="14" y="132" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#94A3B8">Filtered Irrelevant Clicks</text>
  </g>

  <!-- Card 2: Ad Copy & A/B Creative Testing -->
  <g transform="translate(222.5, 148)" filter="url(#ppcArtShadow1)">
    <rect width="175" height="152" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#F5F3FF"/>
    <path d="M 18 31 V 26 M 22 31 V 21 M 26 31 V 17 M 30 31 V 23" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
    
    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Ad Copy Testing</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Responsive Search Ads</text>

    <rect x="12" y="49" width="151" height="22" rx="6" fill="#EFF6FF" stroke="#BFDBFE" stroke-width="1"/>
    <path d="M 21 60 L 22.5 57 L 24 60 L 27 60 L 24.5 62 L 25.5 65 L 22.5 63 L 19.5 65 L 20.5 62 L 18 60 Z" fill="#2563EB"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#1D4ED8">CTR Jump: +68%</text>

    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>
    
    <text x="14" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Headlines Tested</text>
    <text x="161" y="98" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#7C3AED" text-anchor="end">15 Assets</text>

    <rect x="12" y="108" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="108" width="142" height="4" rx="2" fill="#7C3AED"/>

    <text x="14" y="132" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#94A3B8">Winning Hook Deployed</text>
  </g>

  <!-- Card 3: Landing Page CRO Boost -->
  <g transform="translate(410, 148)" filter="url(#ppcArtShadow1)">
    <rect width="175" height="152" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="12" width="28" height="28" rx="7" fill="#FEF2F2"/>
    <path d="M 21 21 L 26 29 L 31 17" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    
    <text x="46" y="25" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#0F172A">Landing Page CRO</text>
    <text x="46" y="38" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Conversion Funnels</text>

    <rect x="12" y="49" width="151" height="22" rx="6" fill="#FEF3C7" stroke="#FDE68A" stroke-width="1"/>
    <path d="M 24 55 L 21 61 H 25 L 23 66 L 28 59 H 24 Z" fill="#D97706"/>
    <text x="33" y="64" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#B45309">Conv Rate: 14.8%</text>

    <line x1="12" y1="81" x2="163" y2="81" stroke="#F1F5F9" stroke-width="1"/>
    
    <text x="14" y="98" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">Speed Benchmark</text>
    <text x="161" y="98" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#DC2626" text-anchor="end">0.8s Load</text>

    <rect x="12" y="108" width="151" height="4" rx="2" fill="#F1F5F9"/>
    <rect x="12" y="108" width="148" height="4" rx="2" fill="#DC2626"/>

    <text x="14" y="132" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#94A3B8">Ultra-High Intent Capture</text>
  </g>

  <!-- Bottom Proof Bar: Google Premier Partner Certified -->
  <g transform="translate(35, 318)" filter="url(#ppcArtShadow1)">
    <rect width="550" height="64" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="14" y="14" width="36" height="36" rx="9" fill="url(#ppcGradRed)"/>
    <path d="M 32 20 L 39 23 V 28 C 39 34 32 38 32 38 C 32 38 25 34 25 28 V 23 Z" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linejoin="round"/>
    <path d="M 29 28 L 31 30 L 35 26" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>

    <text x="60" y="29" font-family="'Outfit', sans-serif" font-size="13.5" font-weight="800" fill="#0F172A">Certified Google Ads &amp; Paid Search Management</text>
    <text x="60" y="45" font-family="'Inter', sans-serif" font-size="11" font-weight="500" fill="#64748B">Audited ad architectures ensuring maximum ROAS across every dollar spent</text>

    <rect x="424" y="18" width="112" height="28" rx="14" fill="#DCFCE7" stroke="#86EFAC" stroke-width="1"/>
    <path d="M 436 32 L 439 35 L 445 29" fill="none" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="451" y="36" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D">Verified ROAS</text>
  </g>
</svg>
<?php $ppc_artwork_1 = ob_get_clean(); ?>

<!-- =========================================================================
     3. VECTOR ARTWORK 2: MULTI-CHANNEL SOCIAL & RETARGETING MATRIX (LINE 2)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="ppcArtShadow2" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <linearGradient id="ppcGradRed2" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#EF4444"/>
      <stop offset="100%" stop-color="#C91A25"/>
    </linearGradient>
    <pattern id="ppcDots2" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Outer Frame -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#ppcDots2)"/>

  <!-- Ambient Glow -->
  <circle cx="510" cy="90" r="75" fill="#FEE2E2" opacity=".45"/>
  <circle cx="100" cy="330" r="80" fill="#E0F2FE" opacity=".6"/>

  <!-- Left Main Card: Multi-Channel Return on Ad Spend (ROAS) -->
  <g transform="translate(35, 35)" filter="url(#ppcArtShadow2)">
    <rect width="245" height="350" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <!-- Icon Circle -->
    <g transform="translate(86, 22)">
      <circle cx="36" cy="36" r="34" fill="#FEE2E2"/>
      <path d="M 36 22 L 40 30 L 49 31 L 42 37 L 44 46 L 36 41 L 28 46 L 30 37 L 23 31 L 32 30 Z" fill="#C91A25"/>
    </g>

    <text x="122" y="116" font-family="'Outfit', sans-serif" font-size="16" font-weight="900" fill="#0F172A" text-anchor="middle">Multi-Channel ROAS</text>
    <text x="122" y="160" font-family="'Outfit', sans-serif" font-size="44" font-weight="900" fill="#C91A25" text-anchor="middle">4.8x</text>
    <text x="122" y="184" font-family="'Inter', sans-serif" font-size="11.5" font-weight="700" fill="#16A34A" text-anchor="middle">Average Portfolio Return</text>

    <!-- ROAS KPI Progress Bars -->
    <g transform="translate(18, 208)">
      <text x="0" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">Target Cost Per Lead</text>
      <text x="209" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">-38% CPA</text>
      <rect x="0" y="18" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="18" width="180" height="6" rx="3" fill="#C91A25"/>

      <text x="0" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">Retargeting Opt-In</text>
      <text x="209" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">28.6%</text>
      <rect x="0" y="52" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="52" width="192" height="6" rx="3" fill="#16A34A"/>
    </g>

    <rect x="18" y="295" width="209" height="32" rx="8" fill="#F0FDF4" stroke="#BBF7D0" stroke-width="1"/>
    <path d="M 28 311 L 32 315 L 38 307" fill="none" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="44" y="315" font-family="'Inter', sans-serif" font-size="10.5" font-weight="700" fill="#15803D">Full Multi-Touch Attribution</text>
  </g>

  <!-- Right Top Card: Cross-Platform Ad Network Badges -->
  <g transform="translate(300, 35)" filter="url(#ppcArtShadow2)">
    <rect width="285" height="160" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">Cross-Platform Channels</text>
    
    <g transform="translate(16, 44)">
      <!-- Channel 1: Meta Ads -->
      <rect width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 16 21 C 18 16, 22 16, 24 21 C 26 16, 30 16, 32 21 C 30 26, 26 26, 24 21 C 22 26, 18 26, 16 21 Z" fill="#2563EB"/>
      <text x="38" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Meta Ads</text>
      
      <!-- Channel 2: LinkedIn Ads -->
      <rect x="130" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 144 16 H 154 V 26 H 144 Z M 147 23 V 20 M 151 23 V 21" fill="none" stroke="#0A66C2" stroke-width="1.4" stroke-linecap="round"/>
      <text x="160" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">LinkedIn B2B</text>

      <!-- Channel 3: YouTube Video -->
      <rect y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 14 62 C 14 59, 32 59, 32 62 C 32 65, 32 73, 32 76 C 32 79, 14 79, 14 76 Z M 21 65 L 26 69 L 21 73 Z" fill="#FF0000"/>
      <text x="38" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">YouTube Ads</text>
      
      <!-- Channel 4: Retargeting -->
      <rect x="130" y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 144 68 A 5 5 0 1 1 154 68 M 154 64 V 68 H 150" fill="none" stroke="#7C3AED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <text x="160" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Retargeting</text>
    </g>
  </g>

  <!-- Right Bottom Card: Monthly Paid Pipeline Lift -->
  <g transform="translate(300, 215)" filter="url(#ppcArtShadow2)">
    <rect width="285" height="170" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#0F172A">Predictable Revenue Scaling</text>
    
    <text x="18" y="62" font-family="'Outfit', sans-serif" font-size="32" font-weight="900" fill="#C91A25">+380%</text>
    <text x="125" y="58" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Inbound Sales Revenue</text>

    <!-- Growth Graph Bars -->
    <g transform="translate(18, 80)">
      <rect x="0" y="38" width="26" height="26" rx="4" fill="#FEE2E2"/>
      <rect x="36" y="28" width="26" height="36" rx="4" fill="#FCA5A5"/>
      <rect x="72" y="16" width="26" height="48" rx="4" fill="#EF4444"/>
      <rect x="108" y="0" width="26" height="64" rx="4" fill="#C91A25"/>
      <path d="M 13 36 L 49 26 L 85 14 L 121 0" fill="none" stroke="#991B1B" stroke-width="3" stroke-linecap="round"/>
    </g>
    
    <rect x="156" y="105" width="116" height="26" rx="13" fill="#DCFCE7"/>
    <text x="214" y="122" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D" text-anchor="middle">★ Scalable Growth</text>
  </g>
</svg>
<?php $ppc_artwork_2 = ob_get_clean(); ?>

<!-- =========================================================================
     4. DYNAMIC HERO SLIDER COMPONENT
     ========================================================================= -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'PPC Management Services']
    ],
    'title' => 'High-Intent Clicks, <span class="text-danger-highlight">Profitable Revenue</span>',
    'description' => 'Transform paid ad spend into a predictable revenue engine. Our certified PPC specialists engineer hyper-targeted Google Search, Performance Max, Meta, and LinkedIn ad funnels with tight negative filtration, high-converting ad copy, and multi-touch attribution to maximize your ROAS.',
    'cta_text' => 'Launch Profitable Campaigns',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-google',
            'title' => 'Google Certified',
            'subtitle' => 'Premier Ad Specialists'
        ],
        [
            'icon' => 'bi bi-graph-up-arrow',
            'title' => '4.8x Average ROAS',
            'subtitle' => 'Maximized Ad Spend'
        ],
        [
            'icon' => 'bi bi-funnel-fill',
            'title' => 'Full-Funnel Reach',
            'subtitle' => 'Search, Social & Display'
        ]
    ],
    'svg' => $ppc_management_svg
]); ?>

<!-- =========================================================================
     INTERNAL CSS: PPC MANAGEMENT BESPOKE STYLESHEET (ZERO INLINE STYLES)
     ========================================================================= -->
<div class="ppc-page-wrap">

    <!-- =========================================================================
         LINE 1 (ALTERNATING ROW 1): CONTENT (LEFT) + GOOGLE SEARCH ADS SVG (RIGHT)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-white">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Content Column (Left) -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-badge">
                        <i class="bi bi-google"></i> Google Ads &amp; Search Precision
                    </div>
                    <h2 class="ppc-heading">
                        Capture High-Intent Buyers with <span class="ppc-highlight">Precision Paid Search</span>
                    </h2>
                    <p class="ppc-lead">
                        Stop burning ad spend on irrelevant clicks. Our certified Google Ads specialists architect tightly grouped ad campaigns, negative keyword fortresses, and high-converting ad copy that capture commercial-intent searches at the lowest possible Cost Per Acquisition.
                    </p>
                    <ul class="ppc-check-list">
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Laser-Targeted Commercial &amp; Transactional Keyword Architecture</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Proactive Negative Keyword Filtration Eliminating Wasted Spend</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Smart AI Bidding Strategies (Target CPA, Target ROAS &amp; Max Conv)</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>High Quality Score Ad Optimization Delivering Top-of-Page Placement</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="ppc-btn">
                        <span>Launch Search Campaign</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 1 (Right) -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-svg-box">
                        <?= $ppc_artwork_1 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         LINE 2 (ALTERNATING ROW 2): SOCIAL & RETARGETING SVG (LEFT) + CONTENT (RIGHT)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-alt">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5 flex-lg-row-reverse">
                
                <!-- Content Column (Right on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-badge">
                        <i class="bi bi-share-fill"></i> Multi-Channel Social &amp; Display
                    </div>
                    <h2 class="ppc-heading">
                        Scale Pipeline with <span class="ppc-highlight">Targeted Paid Social &amp; Retargeting</span>
                    </h2>
                    <p class="ppc-lead">
                        Engage your ideal customers across Meta (Facebook &amp; Instagram), LinkedIn, and YouTube. We build dynamic retargeting funnels that re-engage lost website visitors, nurture middle-of-funnel prospects, and turn one-time shoppers into repeat brand advocates.
                    </p>
                    <ul class="ppc-check-list">
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>B2B LinkedIn Account-Based Marketing (ABM) Decision-Maker Targeting</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>High-Converting Meta Ads Creative, Video Carousels &amp; Lead Forms</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Cross-Device Dynamic Retargeting Capturing Lost Cart &amp; Page Visitors</span>
                        </li>
                        <li class="ppc-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Closed-Loop Server-Side Tracking (CAPI) &amp; Transparent Attribution</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="ppc-btn">
                        <span>Scale Social Ads</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 2 (Left on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-svg-box">
                        <?= $ppc_artwork_2 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: FULL-FUNNEL PAID CHANNELS (3-CARD STRATEGY)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="ppc-badge">
                        <i class="bi bi-funnel-fill"></i> Full-Funnel Architecture
                    </div>
                    <h2 class="ppc-heading">
                        Engineered for <span class="ppc-highlight">Maximum Return on Ad Spend</span>
                    </h2>
                    <p class="ppc-lead ppc-lead-center">
                        Our multi-stage paid advertising framework systematically moves prospects from initial awareness to high-converting purchase decisions.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Channel 1: Paid Search -->
                <div class="col-12 col-lg-4">
                    <div class="ppc-channel-card">
                        <div class="ppc-channel-header">
                            <div class="ppc-channel-icon">
                                <i class="bi bi-search"></i>
                            </div>
                            <span class="ppc-channel-tag">Top-of-Page Search</span>
                        </div>
                        <h3 class="ppc-channel-title">High-Intent Google Search</h3>
                        <p class="ppc-channel-desc">
                            Intercepting prospects actively searching for your products and services with tightly targeted ads and maximized Quality Scores.
                        </p>
                        <ul class="ppc-channel-list">
                            <li><i class="bi bi-check-circle-fill"></i> Commercial &amp; Transactional Keywords</li>
                            <li><i class="bi bi-check-circle-fill"></i> Robust Negative Keyword Filtration</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dynamic Responsive Search Ads (RSA)</li>
                        </ul>
                    </div>
                </div>

                <!-- Channel 2: Social Ads -->
                <div class="col-12 col-lg-4">
                    <div class="ppc-channel-card">
                        <div class="ppc-channel-header">
                            <div class="ppc-channel-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <span class="ppc-channel-tag">Audience Scaling</span>
                        </div>
                        <h3 class="ppc-channel-title">Targeted Social Ads</h3>
                        <p class="ppc-channel-desc">
                            Reaching verified decision-makers on LinkedIn and high-intent consumers on Meta with thumb-stopping creative and direct lead forms.
                        </p>
                        <ul class="ppc-channel-list">
                            <li><i class="bi bi-check-circle-fill"></i> Meta Video Carousels &amp; Lead Ads</li>
                            <li><i class="bi bi-check-circle-fill"></i> LinkedIn Job Title &amp; Industry Filters</li>
                            <li><i class="bi bi-check-circle-fill"></i> Custom Lookalike Audience Modeling</li>
                        </ul>
                    </div>
                </div>

                <!-- Channel 3: Retargeting & Shopping -->
                <div class="col-12 col-lg-4">
                    <div class="ppc-channel-card">
                        <div class="ppc-channel-header">
                            <div class="ppc-channel-icon">
                                <i class="bi bi-cart-check-fill"></i>
                            </div>
                            <span class="ppc-channel-tag">Revenue Maximization</span>
                        </div>
                        <h3 class="ppc-channel-title">Shopping &amp; Retargeting</h3>
                        <p class="ppc-channel-desc">
                            Re-capturing abandoned shopping carts and high-value landing page visitors with dynamic product ads and irresistible offers.
                        </p>
                        <ul class="ppc-channel-list">
                            <li><i class="bi bi-check-circle-fill"></i> Performance Max (PMax) Feed Sync</li>
                            <li><i class="bi bi-check-circle-fill"></i> Cross-Device Retargeting Sequences</li>
                            <li><i class="bi bi-check-circle-fill"></i> Real-Time Inventory &amp; Price Updates</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MULTI-CHANNEL PPC ECOSYSTEM (6-CARD DESIGNER GRID)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="ppc-badge">
                        <i class="bi bi-grid-fill"></i> Campaign Channels
                    </div>
                    <h2 class="ppc-heading">
                        Comprehensive Paid Media <span class="ppc-highlight">Ecosystem</span>
                    </h2>
                    <p class="ppc-lead ppc-lead-center">
                        We manage, test, and optimize paid campaigns across all premier ad platforms to ensure maximum market share and consistent revenue.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Format 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-google"></i>
                        </div>
                        <h3 class="ppc-format-title">Google Search &amp; Display</h3>
                        <p class="ppc-format-desc">
                            High-intent search ads combined with visually engaging Google Display Network banner campaigns reaching over 90% of global internet users.
                        </p>
                    </div>
                </div>

                <!-- Format 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-meta"></i>
                        </div>
                        <h3 class="ppc-format-title">Meta (Facebook &amp; Instagram) Ads</h3>
                        <p class="ppc-format-desc">
                            Custom demographic, behavioral, and interest-based audience targeting delivering high-converting video and carousel ads directly into feeds.
                        </p>
                    </div>
                </div>

                <!-- Format 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-linkedin"></i>
                        </div>
                        <h3 class="ppc-format-title">LinkedIn B2B Advertising</h3>
                        <p class="ppc-format-desc">
                            Precision ABM targeting by company size, job title, seniority, and industry to generate high-ticket B2B sales meetings and qualified MQLs.
                        </p>
                    </div>
                </div>

                <!-- Format 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-youtube"></i>
                        </div>
                        <h3 class="ppc-format-title">YouTube Video Ads</h3>
                        <p class="ppc-format-desc">
                            Skippable in-stream and non-skippable bumper video ads that build deep brand recall, explain complex value propositions, and drive instant action.
                        </p>
                    </div>
                </div>

                <!-- Format 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-bag-check-fill"></i>
                        </div>
                        <h3 class="ppc-format-title">Google Shopping &amp; PMax</h3>
                        <p class="ppc-format-desc">
                            Optimized product feeds, custom merchant center labels, and Performance Max automation driving high-margin eCommerce transactions.
                        </p>
                    </div>
                </div>

                <!-- Format 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ppc-format-card">
                        <div class="ppc-format-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3 class="ppc-format-title">Remarketing &amp; Dynamic Retargeting</h3>
                        <p class="ppc-format-desc">
                            Sequential re-engagement funnels targeting previous visitors across search, social, and apps to close remaining high-value conversions.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: 5-STAGE PPC MANAGEMENT LIFECYCLE (STEPPER)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="ppc-badge">
                        <i class="bi bi-diagram-3-fill"></i> End-to-End Execution
                    </div>
                    <h2 class="ppc-heading">
                        Our 5-Stage PPC <span class="ppc-highlight">Management Lifecycle</span>
                    </h2>
                    <p class="ppc-lead ppc-lead-center">
                        From initial historical account audit to AI-driven bid optimization, our disciplined workflow ensures peak performance at every step.
                    </p>
                </div>
            </div>

            <div class="row g-3 g-lg-4">
                
                <!-- Stage 1 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="ppc-step-card">
                        <div class="ppc-step-num">01</div>
                        <h3 class="ppc-step-title">Account Audit</h3>
                        <p class="ppc-step-desc">Deep-dive analysis of search query reports, wasted spend, quality scores, and conversion tracking.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="ppc-step-card">
                        <div class="ppc-step-num">02</div>
                        <h3 class="ppc-step-title">Structure &amp; Intent</h3>
                        <p class="ppc-step-desc">Rebuilding tight single-intent ad groups (STAG), negative keyword lists, and custom audience segments.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="ppc-step-card">
                        <div class="ppc-step-num">03</div>
                        <h3 class="ppc-step-title">Creative &amp; CRO</h3>
                        <p class="ppc-step-desc">Crafting high-CTR ad copy, engaging visual assets, and high-converting dedicated landing page funnels.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="ppc-step-card">
                        <div class="ppc-step-num">04</div>
                        <h3 class="ppc-step-title">Smart Bidding</h3>
                        <p class="ppc-step-desc">Deploying target CPA and ROAS bidding algorithms to secure top ad placements at the lowest cost.</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="ppc-step-card">
                        <div class="ppc-step-num">05</div>
                        <h3 class="ppc-step-title">Scale &amp; Attrib</h3>
                        <p class="ppc-step-desc">Continuous budget scaling, cross-channel attribution modeling, and weekly transparent KPI reporting.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: PERFORMANCE PROTECTION VS TOXIC PPC TRAPS (2-CARD COMPARISON)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="ppc-badge">
                        <i class="bi bi-shield-check"></i> Quality &amp; Budget Protection
                    </div>
                    <h2 class="ppc-heading">
                        Groveus Precision Engine <span class="ppc-highlight">vs Standard PPC Traps</span>
                    </h2>
                    <p class="ppc-lead ppc-lead-center">
                        Avoid costly broad-match bleeding and generic agency practices that burn through ad spend with zero real sales ROI.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Unsafe Box -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-compare-card ppc-card-unsafe">
                        <span class="ppc-compare-tag ppc-tag-danger">
                            <i class="bi bi-x-circle-fill"></i> Common Agency / DIY Pitfalls
                        </span>
                        <h3 class="ppc-compare-heading">Wasted Spend &amp; Low Intent</h3>
                        <ul class="ppc-compare-items">
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Broad Match Keyword Bleed</span>
                                    Paying top dollar for unrelated search queries that never convert into actual leads or sales.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Generic Homepage Destinations</span>
                                    Sending paid traffic to general homepages with no message match, causing high bounce rates.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Vanity Metric Reporting</span>
                                    Reporting on impressions and superficial clicks while ignoring Cost Per Acquisition and real ROI.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Ignored Click Fraud &amp; Bot Traffic</span>
                                    Zero negative IP or bot exclusion rules, allowing competitor and click-farm budget draining.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Safe Box -->
                <div class="col-12 col-lg-6">
                    <div class="ppc-compare-card ppc-card-safe">
                        <span class="ppc-compare-tag ppc-tag-success">
                            <i class="bi bi-check-circle-fill"></i> The Groveus High-ROAS Protocol
                        </span>
                        <h3 class="ppc-compare-heading">Precision Targeting &amp; Direct Revenue</h3>
                        <ul class="ppc-compare-items">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Single-Intent Keyword Architecture</span>
                                    Laser-focused commercial and transactional keywords with 10/10 Quality Score ad copy.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Dedicated High-Converting Landing Funnels</span>
                                    Sub-second load times, 1-to-1 search query match, and frictionless mobile conversion paths.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Server-Side CAPI &amp; Revenue Attribution</span>
                                    Full multi-touch attribution of calls, demo bookings, form fills, and actual closed revenue.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="ppc-compare-item-bold">Daily Negative Keyword Scrubbing</span>
                                    Proactive daily search query audits ensuring 100% of your budget is focused on genuine buyers.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 7: PPC FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ========================================================================= -->
    <section class="ppc-section ppc-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="ppc-badge">
                        <i class="bi bi-question-circle-fill"></i> Clear Answers
                    </div>
                    <h2 class="ppc-heading">
                        PPC Management <span class="ppc-highlight">Frequently Asked Questions</span>
                    </h2>
                    <p class="ppc-lead ppc-lead-center">
                        Explore key answers regarding budget allocation, timeline to profitability, tracking setup, and management workflows.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion ppc-accordion" id="ppcManagementFaq">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="ppcHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ppcCollapseOne" aria-expanded="true" aria-controls="ppcCollapseOne">
                                    How quickly can we expect to see results from paid search &amp; social ads?
                                </button>
                            </h3>
                            <div id="ppcCollapseOne" class="accordion-collapse collapse show" aria-labelledby="ppcHeadingOne" data-bs-parent="#ppcManagementFaq">
                                <div class="accordion-body">
                                    Unlike organic SEO which compounds over months, paid search and social ads start driving qualified traffic within 24 to 48 hours of campaign launch. During the initial 2 to 4 weeks, we aggressively test ad hooks, cull non-converting search terms, and refine audience targeting to rapidly scale your Return on Ad Spend (ROAS).
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="ppcHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ppcCollapseTwo" aria-expanded="false" aria-controls="ppcCollapseTwo">
                                    Do I pay the ad platforms directly or through your agency?
                                </button>
                            </h3>
                            <div id="ppcCollapseTwo" class="accordion-collapse collapse" aria-labelledby="ppcHeadingTwo" data-bs-parent="#ppcManagementFaq">
                                <div class="accordion-body">
                                    You maintain 100% ownership and direct billing of your ad accounts (Google Ads, Meta Ads Manager, LinkedIn Campaign Manager). You pay the ad platforms directly with your credit card or invoicing, while our agency charges a transparent monthly management fee. You retain all historical data and campaign ownership at all times.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="ppcHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ppcCollapseThree" aria-expanded="false" aria-controls="ppcCollapseThree">
                                    How do you prevent click fraud and wasted ad spend?
                                </button>
                            </h3>
                            <div id="ppcCollapseThree" class="accordion-collapse collapse" aria-labelledby="ppcHeadingThree" data-bs-parent="#ppcManagementFaq">
                                <div class="accordion-body">
                                    We implement a comprehensive multi-layered defense strategy: aggressive negative keyword list scrubbing, IP exclusion rules, strict geographic radius targeting (preventing out-of-market clicks), bot filtration, and device-level bid adjustments to ensure every single dollar is invested in genuine buyers.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="ppcHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ppcCollapseFour" aria-expanded="false" aria-controls="ppcCollapseFour">
                                    How do you track and verify real conversions and revenue?
                                </button>
                            </h3>
                            <div id="ppcCollapseFour" class="accordion-collapse collapse" aria-labelledby="ppcHeadingFour" data-bs-parent="#ppcManagementFaq">
                                <div class="accordion-body">
                                    We configure advanced server-side conversion tracking (Google Tag Manager, Meta Conversions API / CAPI, Google Analytics 4, and CRM offline conversion imports). This ensures accurate attribution of phone calls, form fills, demo bookings, and closed sales without signal loss from browser cookie blockers.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
