<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// =========================================================================
// 1. HERO VECTOR SVG: SOCIAL MEDIA MARKETING & COMMUNITY ARTWORK
// =========================================================================
ob_start(); ?>
<svg viewBox="30 40 840 535" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <radialGradient id="bgGlow" cx="50%" cy="48%" r="58%"><stop offset="0%" stop-color="#ffffff"/><stop offset="65%" stop-color="#ffffff"/><stop offset="100%" stop-color="#f8f8fa"/></radialGradient>
    <radialGradient id="blueGlow"><stop offset="0%" stop-color="#dff1ff" stop-opacity=".95"/><stop offset="100%" stop-color="#dff1ff" stop-opacity="0"/></radialGradient>
    <linearGradient id="phoneBack" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0f3e67"/><stop offset="100%" stop-color="#246ba4"/></linearGradient>
    <linearGradient id="phoneBody" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ffffff"/><stop offset="100%" stop-color="#edf6fc"/></linearGradient>
    <linearGradient id="screenBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#a8dcff"/><stop offset="100%" stop-color="#5ba9ec"/></linearGradient>
    <linearGradient id="redGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff6265"/><stop offset="100%" stop-color="#ef4048"/></linearGradient>
    <linearGradient id="instagramGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#7648d9"/><stop offset="55%" stop-color="#d94a91"/><stop offset="100%" stop-color="#ffb13c"/></linearGradient>
    <linearGradient id="facebookGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#3184e8"/><stop offset="100%" stop-color="#1665c0"/></linearGradient>
    <linearGradient id="linkedinGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#168fd0"/><stop offset="100%" stop-color="#0066aa"/></linearGradient>
    <linearGradient id="tiktokGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#263747"/><stop offset="100%" stop-color="#111b28"/></linearGradient>
    <linearGradient id="darkIcon" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#34495c"/><stop offset="100%" stop-color="#1d2d3e"/></linearGradient>

    <filter id="shadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#3d78a5" flood-opacity=".18"/></filter>
    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="5" stdDeviation="5" flood-color="#3d78a5" flood-opacity=".18"/></filter>
    <filter id="softBlur"><feGaussianBlur stdDeviation="15"/></filter>
  </defs>

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

  <!-- MAIN PHONE BACK & BODY -->
  <g transform="rotate(6 390 335)" filter="url(#shadow)">
    <rect x="280" y="127" width="216" height="402" rx="38" fill="url(#phoneBack)"/>
    <path d="M459 161 C478 172 486 187 486 208 L486 487 C486 505 476 516 462 523 L462 161 Z" fill="#347eae" opacity=".6"/>
    <rect x="265" y="133" width="216" height="394" rx="36" fill="url(#phoneBody)" stroke="#123f66" stroke-width="7"/>
    <path d="M345 137 H404 C411 137 415 143 415 150 V158 H336 V150 C336 143 339 137 345 137 Z" fill="#113e64"/>
    <rect x="364" y="143" width="27" height="5" rx="3" fill="#527da0"/>
    <circle cx="400" cy="147" r="3.5" fill="#6d9bc1"/>

    <!-- PROFILE -->
    <circle cx="296" cy="192" r="14" fill="#d8efff"/>
    <circle cx="296" cy="188" r="5" fill="#7db4de"/>
    <path d="M288 199 C290 194 302 194 304 199" fill="#7db4de"/>
    <rect x="318" y="183" width="65" height="7" rx="3.5" fill="#9fc5e1"/>
    <rect x="318" y="196" width="43" height="6" rx="3" fill="#c6ddeb"/>

    <!-- POST IMAGE -->
    <rect x="284" y="214" width="177" height="119" rx="9" fill="url(#screenBlue)"/>
    <path d="M288 318 L326 266 C331 259 338 259 344 267 L369 299 L394 275 C400 269 406 270 412 277 L455 318 Z" fill="#3787cb"/>
    <circle cx="420" cy="246" r="17" fill="#ffc83d"/>

    <!-- POST ACTIONS -->
    <path d="M295 348 C287 338 271 346 277 356 C282 364 295 372 295 372 C295 372 308 363 313 355 C319 345 303 338 295 348 Z" fill="#ff4d55"/>
    <path d="M323 349 C318 349 315 353 315 358 C315 363 320 367 325 367 L329 367 L335 372 L334 365 C337 363 339 361 339 357 C339 352 334 349 329 349 Z" fill="#b9d1e3"/>
    <path d="M350 351 L367 346 L360 363 L356 357 L350 351 Z" fill="#9dbbd1"/>
    <path d="M433 348 H443 V369 L438 365 L433 369 Z" fill="#d3e1ea"/>

    <rect x="287" y="382" width="94" height="7" rx="3" fill="#c7dce9"/>
    <rect x="287" y="396" width="62" height="6" rx="3" fill="#dce8ef"/>
    <rect x="287" y="420" width="160" height="8" rx="4" fill="#d9e8f1"/>
    <rect x="287" y="435" width="105" height="7" rx="3.5" fill="#e2edf3"/>
  </g>

  <!-- HEART NOTIFICATION -->
  <g transform="rotate(7 535 92)" filter="url(#smallShadow)">
    <path d="M493 54 Q493 49 500 49 L561 49 Q572 49 572 60 L572 99 Q572 109 563 109 L539 109 L528 121 L528 109 L501 109 Q493 109 493 100 Z" fill="url(#redGrad)"/>
    <path d="M532 84 C526 79 516 73 516 65 C516 57 526 54 532 61 C538 54 548 57 548 65 C548 73 538 79 532 84 Z" fill="#ffffff"/>
  </g>

  <!-- YOUTUBE & TIKTOK ICONS -->
  <g filter="url(#smallShadow)">
    <rect x="529" y="215" width="69" height="61" rx="17" fill="#ef484c"/>
    <path d="M550 231 Q550 225 556 225 H572 Q578 225 578 231 V260 Q578 266 572 266 H556 Q550 266 550 260 Z" fill="#ffffff" opacity=".95"/>
    <path d="M560 236 L560 255 L574 246 Z" fill="#ef484c"/>
  </g>

  <g transform="rotate(6 538 328)" filter="url(#smallShadow)">
    <rect x="506" y="298" width="63" height="61" rx="17" fill="url(#tiktokGrad)"/>
    <path d="M539 314 V340 C539 347 534 351 528 351 C521 351 516 347 516 340 C516 334 521 329 527 329 C529 329 531 330 533 331 V323 C531 322 529 321 527 321 C516 321 508 329 508 340 C508 351 516 359 527 359 C538 359 547 351 547 340 V329 C551 332 556 334 561 334 V326 C554 326 548 322 546 316 C544 314 542 313 539 314 Z" fill="#ffffff"/>
  </g>

  <!-- MEGAPHONE -->
  <g transform="rotate(-24 205 450)" filter="url(#shadow)">
    <path d="M165 435 H191 V510 Q191 518 183 518 H173 Q165 518 165 510 Z" fill="#e8474d"/>
    <path d="M183 410 L276 378 L276 457 L183 425 Z" fill="url(#redGrad)"/>
    <ellipse cx="277" cy="418" rx="17" ry="41" fill="#d93642"/>
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
  </g>

  <!-- GROUND SHADOW -->
  <ellipse cx="449" cy="542" rx="355" ry="22" fill="#d8edf9" opacity=".9"/>
</svg>
<?php $social_media_marketing_svg = ob_get_clean(); ?>

<!-- =========================================================================
     2. VECTOR ARTWORK 1: VIRAL REELS & SHORT-FORM CREATIVE ENGINE (LINE 1)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="smmArtShadow1" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <filter id="smmPhoneGlow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#E11D48" flood-opacity=".22"/>
    </filter>
    <linearGradient id="smmPhoneGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#1E293B"/>
    </linearGradient>
    <linearGradient id="smmInstaGradient" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#F59E0B"/>
      <stop offset="50%" stop-color="#EC4899"/>
      <stop offset="100%" stop-color="#8B5CF6"/>
    </linearGradient>
    <linearGradient id="smmRedGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#EF4444"/>
      <stop offset="100%" stop-color="#C91A25"/>
    </linearGradient>
    <pattern id="smmDots1" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Frame Background -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#smmDots1)"/>
  
  <!-- Soft Ambient Glow Orbs -->
  <circle cx="90" cy="90" r="75" fill="#FEE2E2" opacity=".5"/>
  <circle cx="530" cy="330" r="80" fill="#FCE7F3" opacity=".6"/>

  <!-- Left: Viral Mobile Reel Mockup (Card 1) -->
  <g transform="translate(40, 40)" filter="url(#smmPhoneGlow)">
    <rect width="235" height="340" rx="20" fill="url(#smmPhoneGrad)" stroke="rgba(255,255,255,0.15)" stroke-width="1.2"/>
    
    <!-- Video Preview Screen -->
    <rect x="12" y="12" width="211" height="190" rx="12" fill="url(#smmInstaGradient)"/>
    
    <!-- Floating Engagement Floating Badges -->
    <g transform="translate(175, 45)">
      <circle cx="18" cy="18" r="16" fill="rgba(0,0,0,0.5)"/>
      <path d="M 18 12 C 16 9 11 11 13 16 L 18 21 L 23 16 C 25 11 20 9 18 12 Z" fill="#EF4444"/>
      <text x="18" y="42" font-family="'Inter', sans-serif" font-size="9" font-weight="700" fill="#FFFFFF" text-anchor="middle">48.2k</text>

      <circle cx="18" cy="62" r="16" fill="rgba(0,0,0,0.5)"/>
      <path d="M 13 58 H 23 V 66 H 18 L 15 69 V 66 H 13 Z" fill="#38BDF8"/>
      <text x="18" y="86" font-family="'Inter', sans-serif" font-size="9" font-weight="700" fill="#FFFFFF" text-anchor="middle">2.4k</text>

      <circle cx="18" cy="106" r="16" fill="rgba(0,0,0,0.5)"/>
      <path d="M 13 104 L 21 98 L 19 112 L 17 106 Z" fill="#FACC15"/>
      <text x="18" y="130" font-family="'Inter', sans-serif" font-size="9" font-weight="700" fill="#FFFFFF" text-anchor="middle">14.1k</text>
    </g>

    <!-- User Header & Sound Tag -->
    <text x="24" y="222" font-family="'Outfit', sans-serif" font-size="13" font-weight="800" fill="#FFFFFF">@yourbrand &bull; Viral Reel</text>
    <text x="24" y="240" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#94A3B8">Trending Audio &bull; Original Hook</text>

    <!-- Stat Pill on Video -->
    <rect x="20" y="260" width="195" height="28" rx="8" fill="#090D16" stroke="#334155" stroke-width="0.8"/>
    <circle cx="32" cy="274" r="3.5" fill="#22C55E"/>
    <text x="42" y="278" font-family="'Inter', sans-serif" font-size="10.5" font-weight="700" fill="#F8FAFC">1.2M+ Organic Impressions</text>

    <!-- Profile Action Button -->
    <rect x="20" y="296" width="195" height="24" rx="6" fill="#C91A25"/>
    <text x="117" y="312" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#FFFFFF" text-anchor="middle">✓ Follow For Insights</text>
  </g>

  <!-- Right: 2 Dynamic Creator Cards -->
  <!-- Card 1: Multi-Format Asset Production -->
  <g transform="translate(305, 40)" filter="url(#smmArtShadow1)">
    <rect width="275" height="155" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="16" y="16" width="34" height="34" rx="9" fill="#FEE2E2"/>
    <path d="M 27 27 L 39 33 L 27 39 Z" fill="#C91A25"/>
    
    <text x="60" y="30" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">Creative Production</text>
    <text x="60" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Shorts, Carousels &amp; Stories</text>

    <rect x="16" y="60" width="243" height="36" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
    <text x="28" y="82" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">⚡ High-Converting Hooks Tested</text>
    <text x="247" y="82" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#2563EB" text-anchor="end">4.8x Lift</text>

    <line x1="16" y1="108" x2="259" y2="108" stroke="#F1F5F9" stroke-width="1"/>
    
    <circle cx="26" cy="128" r="4" fill="#16A34A"/>
    <text x="36" y="131" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#15803D">100% Brand Tone &amp; Aesthetic Match</text>
  </g>

  <!-- Card 2: Viral Distribution & Follower Multiplier -->
  <g transform="translate(305, 215)" filter="url(#smmArtShadow1)">
    <rect width="275" height="165" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="16" y="16" width="34" height="34" rx="9" fill="#EFF6FF"/>
    <path d="M 27 33 L 33 27 L 39 31 L 45 23" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
    
    <text x="60" y="30" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">Audience Growth Lift</text>
    <text x="60" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Monthly Active Followers</text>

    <text x="16" y="90" font-family="'Outfit', sans-serif" font-size="32" font-weight="900" fill="#C91A25">+340%</text>
    <text x="125" y="84" font-family="'Inter', sans-serif" font-size="11.5" font-weight="600" fill="#64748B">Engagement Surge</text>

    <rect x="16" y="106" width="243" height="6" rx="3" fill="#F1F5F9"/>
    <rect x="16" y="106" width="210" height="6" rx="3" fill="#C91A25"/>

    <rect x="16" y="124" width="243" height="28" rx="7" fill="#DCFCE7"/>
    <text x="137" y="142" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D" text-anchor="middle">★ Consistent Viral Reach</text>
  </g>
</svg>
<?php $smm_artwork_1 = ob_get_clean(); ?>

<!-- =========================================================================
     3. VECTOR ARTWORK 2: SOCIAL LISTENING & COMMUNITY DASHBOARD (LINE 2)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="smmArtShadow2" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <pattern id="smmDots2" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Frame Background -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#smmDots2)"/>

  <circle cx="510" cy="90" r="75" fill="#FEE2E2" opacity=".45"/>
  <circle cx="100" cy="330" r="80" fill="#E0F2FE" opacity=".6"/>

  <!-- Left Main Card: Multi-Channel Sentiment Command Center -->
  <g transform="translate(35, 35)" filter="url(#smmArtShadow2)">
    <rect width="245" height="350" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <g transform="translate(86, 22)">
      <circle cx="36" cy="36" r="34" fill="#FEE2E2"/>
      <path d="M 28 36 C 28 30 44 30 44 36 M 32 30 A 2 2 0 1 1 32 31 M 40 30 A 2 2 0 1 1 40 31" fill="none" stroke="#C91A25" stroke-width="3" stroke-linecap="round"/>
    </g>

    <text x="122" y="116" font-family="'Outfit', sans-serif" font-size="16" font-weight="900" fill="#0F172A" text-anchor="middle">Community Sentiment</text>
    <text x="122" y="160" font-family="'Outfit', sans-serif" font-size="44" font-weight="900" fill="#16A34A" text-anchor="middle">98.4%</text>
    <text x="122" y="184" font-family="'Inter', sans-serif" font-size="11.5" font-weight="700" fill="#0F172A" text-anchor="middle">Positive Brand Affinity</text>

    <!-- Sentiment Indicators -->
    <g transform="translate(18, 208)">
      <text x="0" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">DM Response Time</text>
      <text x="209" y="10" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">&lt; 15 Mins</text>
      <rect x="0" y="18" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="18" width="195" height="6" rx="3" fill="#16A34A"/>

      <text x="0" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#475569">Inbound Lead Attribution</text>
      <text x="209" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#0F172A" text-anchor="end">32.8%</text>
      <rect x="0" y="52" width="209" height="6" rx="3" fill="#F1F5F9"/>
      <rect x="0" y="52" width="175" height="6" rx="3" fill="#C91A25"/>
    </g>

    <rect x="18" y="295" width="209" height="32" rx="8" fill="#F0FDF4" stroke="#BBF7D0" stroke-width="1"/>
    <path d="M 28 311 L 32 315 L 38 307" fill="none" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="44" y="315" font-family="'Inter', sans-serif" font-size="10.5" font-weight="700" fill="#15803D">24/7 Reputation Monitoring</text>
  </g>

  <!-- Right Top Card: Social Channel Badges -->
  <g transform="translate(300, 35)" filter="url(#smmArtShadow2)">
    <rect width="285" height="160" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">Omnichannel Presence</text>
    
    <g transform="translate(16, 44)">
      <!-- Channel 1: Instagram -->
      <rect width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <rect x="14" y="14" width="14" height="14" rx="4" fill="none" stroke="#D946EF" stroke-width="1.8"/>
      <circle cx="21" cy="21" r="3.5" fill="none" stroke="#D946EF" stroke-width="1.8"/>
      <text x="36" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">Instagram</text>
      
      <!-- Channel 2: LinkedIn -->
      <rect x="130" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 144 16 H 154 V 26 H 144 Z M 147 23 V 20 M 151 23 V 21" fill="none" stroke="#0A66C2" stroke-width="1.4" stroke-linecap="round"/>
      <text x="160" y="25" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">LinkedIn</text>

      <!-- Channel 3: YouTube -->
      <rect y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 14 62 C 14 59, 32 59, 32 62 C 32 65, 32 73, 32 76 C 32 79, 14 79, 14 76 Z M 21 65 L 26 69 L 21 73 Z" fill="#FF0000"/>
      <text x="38" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">YouTube</text>
      
      <!-- Channel 4: X / Twitter -->
      <rect x="130" y="52" width="120" height="42" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
      <path d="M 145 64 L 151 72 M 151 64 L 145 72" stroke="#0F172A" stroke-width="2" stroke-linecap="round"/>
      <text x="160" y="77" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">X / Twitter</text>
    </g>
  </g>

  <!-- Right Bottom Card: Engagement Lift -->
  <g transform="translate(300, 215)" filter="url(#smmArtShadow2)">
    <rect width="285" height="170" rx="18" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <text x="18" y="28" font-family="'Outfit', sans-serif" font-size="14.5" font-weight="800" fill="#0F172A">Engaged Community Growth</text>
    
    <text x="18" y="62" font-family="'Outfit', sans-serif" font-size="30" font-weight="900" fill="#C91A25">+520%</text>
    <text x="122" y="58" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Qualified Engagements</text>

    <!-- Subtle Background Grid Lines -->
    <line x1="18" y1="92" x2="267" y2="92" stroke="#F8FAFC" stroke-width="1"/>
    <line x1="18" y1="118" x2="267" y2="118" stroke="#F1F5F9" stroke-width="1"/>
    <line x1="18" y1="144" x2="267" y2="144" stroke="#E2E8F0" stroke-width="1"/>

    <!-- 4 Elegant Gradient Growth Bars with Data Values -->
    <g transform="translate(18, 76)">
      <!-- Bar 1: Month 1 -->
      <rect x="0" y="42" width="22" height="26" rx="5" fill="#FEE2E2"/>
      <!-- Bar 2: Month 2 -->
      <rect x="30" y="30" width="22" height="38" rx="5" fill="#FCA5A5"/>
      <!-- Bar 3: Month 3 -->
      <rect x="60" y="16" width="22" height="52" rx="5" fill="#EF4444"/>
      <!-- Bar 4: Month 4 (Peak) -->
      <rect x="90" y="0" width="22" height="68" rx="5" fill="#C91A25"/>

      <!-- Smooth Trending Spline Line -->
      <path d="M 11 46 Q 38 36, 68 22 T 101 6" fill="none" stroke="#991B1B" stroke-width="2.5" stroke-linecap="round"/>
      <!-- Data Point Dots -->
      <circle cx="11" cy="46" r="3" fill="#FFFFFF" stroke="#991B1B" stroke-width="1.8"/>
      <circle cx="41" cy="36" r="3" fill="#FFFFFF" stroke="#991B1B" stroke-width="1.8"/>
      <circle cx="71" cy="22" r="3" fill="#FFFFFF" stroke="#991B1B" stroke-width="1.8"/>
      <circle cx="101" cy="6" r="3.8" fill="#FFFFFF" stroke="#C91A25" stroke-width="2.2"/>
    </g>
    
    <!-- Verified Growth Pill on Right with Proper Fit -->
    <g transform="translate(138, 88)">
      <rect width="128" height="52" rx="10" fill="#F0FDF4" stroke="#BBF7D0" stroke-width="1"/>
      <path d="M 14 26 L 22 18 M 22 18 L 22 24 M 22 18 L 16 18" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <text x="28" y="24" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#15803D">Viral Trajectory</text>
      <text x="14" y="40" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#166534">★ Active Tribe</text>
    </g>
  </g>
</svg>
<?php $smm_artwork_2 = ob_get_clean(); ?>

<!-- =========================================================================
     4. DYNAMIC HERO SLIDER COMPONENT
     ========================================================================= -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Social Media Marketing']
    ],
    'title' => 'Engage Audiences, <span class="text-danger-highlight">Build Authentic Brand Loyalty</span>',
    'description' => 'Turn passive scrollers into passionate brand advocates. We engineer high-impact viral reels, bespoke carousel stories, active community nurturing, and creator-led social campaigns that drive genuine engagement and customer acquisition.',
    'cta_text' => 'Scale Your Social Brand',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-instagram',
            'title' => 'Viral Content',
            'subtitle' => 'Reels & Short-Form Video'
        ],
        [
            'icon' => 'bi bi-people-fill',
            'title' => 'Active Community',
            'subtitle' => '24/7 Engagement & DMs'
        ]
    ],
    'svg' => $social_media_marketing_svg
]); ?>

<!-- =========================================================================
     INTERNAL CSS: SOCIAL MEDIA MARKETING BESPOKE STYLESHEET (ZERO INLINE STYLES)
     ========================================================================= -->
<div class="smm-page-wrap">

    <!-- =========================================================================
         LINE 1 (ALTERNATING ROW 1): CONTENT (LEFT) + VIRAL CREATIVE SVG (RIGHT)
         ========================================================================= -->
    <section class="smm-section smm-bg-white">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Content Column (Left) -->
                <div class="col-12 col-lg-6">
                    <div class="smm-badge">
                        <i class="bi bi-camera-reels-fill"></i> Viral Creative Engine
                    </div>
                    <h2 class="smm-heading">
                        Ignite Brand Visibility with <span class="smm-highlight">Short-Form Video &amp; Reels</span>
                    </h2>
                    <p class="smm-lead">
                        Social algorithms prioritize dynamic, short-form storytelling. We script, design, and produce viral Instagram Reels, TikToks, and YouTube Shorts engineered with scroll-stopping visual hooks that captivate audiences and drive massive organic reach.
                    </p>
                    <ul class="smm-check-list">
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>High-Engagement Short-Form Video &amp; Reel Scripting</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Multi-Slide Interactive Carousels &amp; Infographic Stories</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Trending Audio Tracking &amp; Viral Cultural Wave Hijacking</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Bespoke Visual Brand Identity &amp; Aesthetic Color Consistency</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="smm-btn">
                        <span>Launch Viral Content</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 1 (Right) -->
                <div class="col-12 col-lg-6">
                    <div class="smm-svg-box">
                        <?= $smm_artwork_1 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         LINE 2 (ALTERNATING ROW 2): COMMUNITY LISTENING SVG (LEFT) + CONTENT (RIGHT)
         ========================================================================= -->
    <section class="smm-section smm-bg-alt">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5 flex-lg-row-reverse">
                
                <!-- Content Column (Right on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="smm-badge">
                        <i class="bi bi-chat-heart-fill"></i> Community &amp; Loyalty
                    </div>
                    <h2 class="smm-heading">
                        Cultivate Loyal Advocates through <span class="smm-highlight">Active Community Management</span>
                    </h2>
                    <p class="smm-lead">
                        True brand loyalty is built in the comments and direct messages. Our dedicated community managers monitor brand sentiment, reply to customer inquiries in real time, and spark meaningful conversations that transform casual followers into paying clients.
                    </p>
                    <ul class="smm-check-list">
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>24/7 Social Listening, Brand Sentiment &amp; Crisis Monitoring</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Direct Message (DM) Lead Qualification &amp; Customer Support</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Micro-Influencer Discovery &amp; Collaborative Shoutouts</span>
                        </li>
                        <li class="smm-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Data-Driven Attribution Tracking Direct Revenue from Social Channels</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="smm-btn">
                        <span>Grow Your Community</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 2 (Left on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="smm-svg-box">
                        <?= $smm_artwork_2 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: CORE SOCIAL PILLARS (3-CARD STRATEGY)
         ========================================================================= -->
    <section class="smm-section smm-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="smm-badge">
                        <i class="bi bi-funnel-fill"></i> Strategic Growth
                    </div>
                    <h2 class="smm-heading">
                        Full-Funnel Social <span class="smm-highlight">Marketing Engine</span>
                    </h2>
                    <p class="smm-lead smm-lead-center">
                        Our integrated approach combines organic creativity, active community building, and performance-driven paid social to maximize your brand reach.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Pillar 1: Organic Content -->
                <div class="col-12 col-lg-4">
                    <div class="smm-pillar-card">
                        <div class="smm-pillar-header">
                            <div class="smm-pillar-icon">
                                <i class="bi bi-play-circle-fill"></i>
                            </div>
                            <span class="smm-pillar-tag">Viral Reach</span>
                        </div>
                        <h3 class="smm-pillar-title">Organic Viral Content</h3>
                        <p class="smm-pillar-desc">
                            High-volume reels, aesthetic carousel posts, and engaging stories designed to dominate explore pages and algorithmic feeds.
                        </p>
                        <ul class="smm-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Weekly Multi-Slide Carousels</li>
                            <li><i class="bi bi-check-circle-fill"></i> Short-Form Reels &amp; TikToks</li>
                            <li><i class="bi bi-check-circle-fill"></i> Custom Branded Story Templates</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2: Community & Reputation -->
                <div class="col-12 col-lg-4">
                    <div class="smm-pillar-card">
                        <div class="smm-pillar-header">
                            <div class="smm-pillar-icon">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>
                            <span class="smm-pillar-tag">Engagement</span>
                        </div>
                        <h3 class="smm-pillar-title">Community &amp; DMs</h3>
                        <p class="smm-pillar-desc">
                            Real-time engagement, comment moderation, and automated DM qualification funnels that nurture relationships.
                        </p>
                        <ul class="smm-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Rapid DM Inbound Response</li>
                            <li><i class="bi bi-check-circle-fill"></i> Active Comment Conversations</li>
                            <li><i class="bi bi-check-circle-fill"></i> Brand Sentiment Protection</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: Creator Partnerships -->
                <div class="col-12 col-lg-4">
                    <div class="smm-pillar-card">
                        <div class="smm-pillar-header">
                            <div class="smm-pillar-icon">
                                <i class="bi bi-stars"></i>
                            </div>
                            <span class="smm-pillar-tag">Authority</span>
                        </div>
                        <h3 class="smm-pillar-title">Creator &amp; Influencer PR</h3>
                        <p class="smm-pillar-desc">
                            Pairing your brand with authentic niche creators to unlock pre-built trust and drive massive referral traffic.
                        </p>
                        <ul class="smm-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Micro-Influencer Outreach</li>
                            <li><i class="bi bi-check-circle-fill"></i> Co-Branded Video Collaborations</li>
                            <li><i class="bi bi-check-circle-fill"></i> Performance UGC Campaigns</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MULTI-CHANNEL SOCIAL ECOSYSTEM (6-CARD DESIGNER GRID)
         ========================================================================= -->
    <section class="smm-section smm-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="smm-badge">
                        <i class="bi bi-grid-fill"></i> Platform Mastery
                    </div>
                    <h2 class="smm-heading">
                        Multi-Platform Social <span class="smm-highlight">Ecosystem</span>
                    </h2>
                    <p class="smm-lead smm-lead-center">
                        Every social channel has a unique algorithm and audience culture. We tailor your voice specifically for each network.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Format 1: Instagram -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <h3 class="smm-format-title">Instagram Growth &amp; Reels</h3>
                        <p class="smm-format-desc">
                            Aesthetic feed curation, high-velocity short-form reels, interactive stories, and DM automation driving consistent customer acquisition.
                        </p>
                    </div>
                </div>

                <!-- Format 2: LinkedIn -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-linkedin"></i>
                        </div>
                        <h3 class="smm-format-title">LinkedIn Thought Leadership</h3>
                        <p class="smm-format-desc">
                            Executive branding, B2B company page growth, and insightful PDF carousels establishing undeniable industry authority.
                        </p>
                    </div>
                </div>

                <!-- Format 3: YouTube -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-youtube"></i>
                        </div>
                        <h3 class="smm-format-title">YouTube Shorts &amp; Video</h3>
                        <p class="smm-format-desc">
                            Optimized video thumbnails, viral YouTube Shorts, and high-retention long-form videos ranking in both YouTube and Google search.
                        </p>
                    </div>
                </div>

                <!-- Format 4: Facebook -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <h3 class="smm-format-title">Facebook Community Hubs</h3>
                        <p class="smm-format-desc">
                            Nurturing active private groups, local customer reviews, and high-converting video broadcasts for targeted demographics.
                        </p>
                    </div>
                </div>

                <!-- Format 5: TikTok -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-tiktok"></i>
                        </div>
                        <h3 class="smm-format-title">TikTok Trend Engine</h3>
                        <p class="smm-format-desc">
                            Fast-paced, authentic native TikTok videos capitalizing on cultural trends, humor, and user-generated content (UGC).
                        </p>
                    </div>
                </div>

                <!-- Format 6: X / Twitter -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="smm-format-card">
                        <div class="smm-format-icon">
                            <i class="bi bi-twitter-x"></i>
                        </div>
                        <h3 class="smm-format-title">X (Twitter) Viral Threads</h3>
                        <p class="smm-format-desc">
                            Engaging viral tweet threads, real-time industry commentary, and founder storytelling sparking active community discussions.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: 5-STAGE SOCIAL MEDIA LIFECYCLE (STEPPER)
         ========================================================================= -->
    <section class="smm-section smm-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="smm-badge">
                        <i class="bi bi-diagram-3-fill"></i> Proven Process
                    </div>
                    <h2 class="smm-heading">
                        Our 5-Stage Social <span class="smm-highlight">Growth Framework</span>
                    </h2>
                    <p class="smm-lead smm-lead-center">
                        From audience persona mapping to real-time analytics, every post is engineered for maximum algorithmic visibility and community engagement.
                    </p>
                </div>
            </div>

            <div class="row g-3 g-lg-4">
                
                <!-- Stage 1 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="smm-step-card">
                        <div class="smm-step-num">01</div>
                        <h3 class="smm-step-title">Brand Tone Audit</h3>
                        <p class="smm-step-desc">Auditing past social performance, competitor tactics, and defining your unique brand persona.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="smm-step-card">
                        <div class="smm-step-num">02</div>
                        <h3 class="smm-step-title">Content Calendar</h3>
                        <p class="smm-step-desc">Designing a 30-day multi-channel roadmap mixing educational, viral, and commercial posts.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="smm-step-card">
                        <div class="smm-step-num">03</div>
                        <h3 class="smm-step-title">Media Production</h3>
                        <p class="smm-step-desc">Editing custom reels, designing graphic carousels, and writing captivating captions.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="smm-step-card">
                        <div class="smm-step-num">04</div>
                        <h3 class="smm-step-title">Publish &amp; Engage</h3>
                        <p class="smm-step-desc">Scheduling posts at peak times and driving real-time comments, shares, and DM chats.</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="smm-step-card">
                        <div class="smm-step-num">05</div>
                        <h3 class="smm-step-title">Analytics &amp; Scale</h3>
                        <p class="smm-step-desc">Reviewing monthly reach, follower conversions, and doubling down on top-performing hooks.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: GENUINE ENGAGEMENT VS STALE CORPORATE POSTING (2-CARD COMPARISON)
         ========================================================================= -->
    <section class="smm-section smm-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="smm-badge">
                        <i class="bi bi-shield-check"></i> Quality Standard
                    </div>
                    <h2 class="smm-heading">
                        Groveus Social Engine <span class="smm-highlight">vs Generic Posting</span>
                    </h2>
                    <p class="smm-lead smm-lead-center">
                        Why generic stock image posting generates zero engagement, and how our human-led creative drives authentic business growth.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Generic Box -->
                <div class="col-12 col-lg-6">
                    <div class="smm-compare-card smm-card-unsafe">
                        <span class="smm-compare-tag smm-tag-danger">
                            <i class="bi bi-x-circle-fill"></i> Generic Agency / Stale Social
                        </span>
                        <h3 class="smm-compare-heading">Ghost Town Feeds &amp; Zero ROI</h3>
                        <ul class="smm-compare-items">
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Generic Stock Graphics</span>
                                    Boring, uninspired Canva templates that get scrolled past within milliseconds.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Zero Video Content</span>
                                    Completely missing out on the 80%+ algorithmic preference for short-form video reels.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Ignored DMs &amp; Comments</span>
                                    Failing to respond to potential customer inquiries, killing warm sales opportunities.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Fake Follower Traps</span>
                                    Buying vanity bots that ruin algorithmic reach and destroy genuine engagement metrics.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Groveus Box -->
                <div class="col-12 col-lg-6">
                    <div class="smm-compare-card smm-card-safe">
                        <span class="smm-compare-tag smm-tag-success">
                            <i class="bi bi-check-circle-fill"></i> The Groveus Viral Protocol
                        </span>
                        <h3 class="smm-compare-heading">High Engagement &amp; Active Tribe</h3>
                        <ul class="smm-compare-items">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Custom Viral Short-Form Video</span>
                                    High-retention Reels, TikToks, and Shorts with proven hook-retain-reward structures.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Bespoke Carousel Storytelling</span>
                                    Multi-slide value-packed visual carousels that generate massive saves and shares.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">Proactive 24/7 DM &amp; Comment Nurturing</span>
                                    Rapid human replies turning engaged followers directly into booked sales calls.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="smm-compare-item-bold">100% Organic, Targeted Follower Growth</span>
                                    Building an authentic community of real customers who actively buy and champion your brand.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 7: CLIENT REVIEWS & SOCIAL PROOF CARDS (SIDE-SCROLL CAROUSEL)
         ========================================================================= -->
    <section class="smm-section smm-bg-white">
        <div class="container">
            
            <div class="smm-reviews-header-flex">
                <div>
                    <div class="smm-badge">
                        <i class="bi bi-star-fill"></i> Client Reviews &amp; Social Proof
                    </div>
                    <h2 class="smm-heading mb-1">
                        Trusted by High-Growth <span class="smm-highlight">Brands &amp; Creators</span>
                    </h2>
                    <p class="smm-lead mb-0">
                        See how our viral short-form video, active community nurturing, and multi-channel strategies deliver measurable ROI.
                    </p>
                </div>
                <!-- Navigation Buttons -->
                <div class="smm-reviews-nav-btns">
                    <button type="button" class="smm-nav-btn" id="smmReviewPrev" aria-label="Previous Review">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button type="button" class="smm-nav-btn" id="smmReviewNext" aria-label="Next Review">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div class="smm-reviews-wrapper">
                <div class="smm-reviews-track" id="smmReviewsTrack">
                    
                    <!-- Review 1: Instagram D2C -->
                    <div class="smm-review-card-item">
                        <div class="smm-review-card">
                            <div>
                                <div class="smm-review-top">
                                    <div class="smm-review-stars">★★★★★</div>
                                    <span class="smm-review-platform"><i class="bi bi-instagram"></i> Instagram Growth</span>
                                </div>
                                <div class="smm-review-metric">
                                    <i class="bi bi-graph-up-arrow"></i> +480% Viral Video Reach &bull; 125k Followers
                                </div>
                                <p class="smm-review-quote">
                                    "Groveus completely revitalized our Instagram presence. Their custom-scripted Reels and aesthetic carousel posts regularly hit the Explore page, resulting in over 125k new followers and a direct 3.8x surge in Shopify sales within 5 months."
                                </p>
                            </div>
                            <div class="smm-review-author">
                                <div class="smm-review-avatar">SM</div>
                                <div>
                                    <h3 class="smm-review-name">Sophia Montgomery <i class="bi bi-check-circle-fill" title="Verified Client"></i></h3>
                                    <p class="smm-review-role">Head of Marketing, LuxeGlow Cosmetics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2: LinkedIn B2B -->
                    <div class="smm-review-card-item">
                        <div class="smm-review-card">
                            <div>
                                <div class="smm-review-top">
                                    <div class="smm-review-stars">★★★★★</div>
                                    <span class="smm-review-platform"><i class="bi bi-linkedin"></i> LinkedIn B2B</span>
                                </div>
                                <div class="smm-review-metric">
                                    <i class="bi bi-briefcase-fill"></i> 42+ Inbound Demo Bookings / mo
                                </div>
                                <p class="smm-review-quote">
                                    "Their executive branding and visual PDF carousels positioned our founder as a top industry authority on LinkedIn. We now generate over 40 high-ticket demo requests every month organically from warm social DMs."
                                </p>
                            </div>
                            <div class="smm-review-author">
                                <div class="smm-review-avatar smm-av-blue">AS</div>
                                <div>
                                    <h3 class="smm-review-name">Aarav Singhania <i class="bi bi-check-circle-fill" title="Verified Client"></i></h3>
                                    <p class="smm-review-role">Co-Founder &amp; CEO, CloudPulse Tech</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3: YouTube Shorts & Long Form -->
                    <div class="smm-review-card-item">
                        <div class="smm-review-card">
                            <div>
                                <div class="smm-review-top">
                                    <div class="smm-review-stars">★★★★★</div>
                                    <span class="smm-review-platform"><i class="bi bi-youtube"></i> YouTube Shorts</span>
                                </div>
                                <div class="smm-review-metric">
                                    <i class="bi bi-fire"></i> 2.4M+ Video Views &bull; 24% Engagement
                                </div>
                                <p class="smm-review-quote">
                                    "The content production quality is unbeatable. They handle our weekly video edits, trending audio matching, and 24/7 community comments with zero hassle. Our social engagement and customer retention have never been higher."
                                </p>
                            </div>
                            <div class="smm-review-author">
                                <div class="smm-review-avatar smm-av-purple">JV</div>
                                <div>
                                    <h3 class="smm-review-name">Jessica Vance <i class="bi bi-check-circle-fill" title="Verified Client"></i></h3>
                                    <p class="smm-review-role">Creative Director, AeroFit Apparel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4: TikTok Viral UGC -->
                    <div class="smm-review-card-item">
                        <div class="smm-review-card">
                            <div>
                                <div class="smm-review-top">
                                    <div class="smm-review-stars">★★★★★</div>
                                    <span class="smm-review-platform"><i class="bi bi-tiktok"></i> TikTok Viral UGC</span>
                                </div>
                                <div class="smm-review-metric">
                                    <i class="bi bi-lightning-charge-fill"></i> +610% UGC Impressions &bull; #1 in Category
                                </div>
                                <p class="smm-review-quote">
                                    "Our TikTok was dead until Groveus took over. They orchestrated high-energy creator challenges and native trend hooks that blew our brand viral across Gen Z audiences. Invaluable team!"
                                </p>
                            </div>
                            <div class="smm-review-author">
                                <div class="smm-review-avatar smm-av-green">LH</div>
                                <div>
                                    <h3 class="smm-review-name">Liam Henderson <i class="bi bi-check-circle-fill" title="Verified Client"></i></h3>
                                    <p class="smm-review-role">Growth Lead, VibeWave Beverages</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5: Facebook Community & Local Authority -->
                    <div class="smm-review-card-item">
                        <div class="smm-review-card">
                            <div>
                                <div class="smm-review-top">
                                    <div class="smm-review-stars">★★★★★</div>
                                    <span class="smm-review-platform"><i class="bi bi-facebook"></i> Facebook Groups</span>
                                </div>
                                <div class="smm-review-metric">
                                    <i class="bi bi-people-fill"></i> 18k Active Members &bull; 4.9 Rating
                                </div>
                                <p class="smm-review-quote">
                                    "They built an engaged VIP Facebook group from scratch. Response times to inquiries dropped to under 10 minutes, generating massive word-of-mouth trust and monthly recurring clients."
                                </p>
                            </div>
                            <div class="smm-review-author">
                                <div class="smm-review-avatar smm-av-dark">ER</div>
                                <div>
                                    <h3 class="smm-review-name">Elena Rostova <i class="bi bi-check-circle-fill" title="Verified Client"></i></h3>
                                    <p class="smm-review-role">Managing Director, PeakHealth Clinics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Mobile Swipe Hint -->
                <div class="smm-scroll-hint">
                    <i class="bi bi-arrow-left-right"></i> Scroll sideways to view more reviews
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 8: SOCIAL MEDIA FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ========================================================================= -->
    <section class="smm-section smm-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="smm-badge">
                        <i class="bi bi-question-circle-fill"></i> Clear Answers
                    </div>
                    <h2 class="smm-heading">
                        Social Media Marketing <span class="smm-highlight">FAQs</span>
                    </h2>
                    <p class="smm-lead smm-lead-center">
                        Common questions about our content review process, posting schedules, and how we measure real business ROI.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion smm-accordion" id="socialMediaFaq">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="smmHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#smmCollapseOne" aria-expanded="true" aria-controls="smmCollapseOne">
                                    Do we get to approve the content before it goes live on our social accounts?
                                </button>
                            </h3>
                            <div id="smmCollapseOne" class="accordion-collapse collapse show" aria-labelledby="smmHeadingOne" data-bs-parent="#socialMediaFaq">
                                <div class="accordion-body">
                                    Yes, 100%. We provide a full monthly visual content calendar in advance detailing every reel, carousel graphic, caption, and hashtag set for your review. Nothing is published to your live social accounts without your explicit sign-off and approval.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="smmHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#smmCollapseTwo" aria-expanded="false" aria-controls="smmCollapseTwo">
                                    Which social media platforms are best suited for my business?
                                </button>
                            </h3>
                            <div id="smmCollapseTwo" class="accordion-collapse collapse" aria-labelledby="smmHeadingTwo" data-bs-parent="#socialMediaFaq">
                                <div class="accordion-body">
                                    Platform selection depends on your target customer. For B2B and enterprise brands, LinkedIn and YouTube deliver the highest-ticket executive leads. For lifestyle, retail, eCommerce, and D2C brands, Instagram, TikTok, and Facebook drive the strongest visual engagement and direct consumer sales. We analyze your customer demographics to select the most profitable platform mix.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="smmHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#smmCollapseThree" aria-expanded="false" aria-controls="smmCollapseThree">
                                    How do you capture our brand tone and industry expertise?
                                </button>
                            </h3>
                            <div id="smmCollapseThree" class="accordion-collapse collapse" aria-labelledby="smmHeadingThree" data-bs-parent="#socialMediaFaq">
                                <div class="accordion-body">
                                    During our Brand Discovery Phase, we audit your existing marketing materials, visual guidelines, and competitor positioning. We create a comprehensive Brand Voice &amp; Tone Guide that specifies your color palette, typography, terminology, and engagement rules to ensure every post authentically reflects your company.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="smmHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#smmCollapseFour" aria-expanded="false" aria-controls="smmCollapseFour">
                                    How do you measure real business return on investment (ROI) from social media?
                                </button>
                            </h3>
                            <div id="smmCollapseFour" class="accordion-collapse collapse" aria-labelledby="smmHeadingFour" data-bs-parent="#socialMediaFaq">
                                <div class="accordion-body">
                                    We go far beyond superficial follower counts. We track website referral traffic in Google Analytics 4, link-in-bio click-through rates, direct message lead inquiries, assisted conversion paths, and customer acquisition costs to demonstrate tangible business revenue generated by your social presence.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('smmReviewsTrack');
    const prevBtn = document.getElementById('smmReviewPrev');
    const nextBtn = document.getElementById('smmReviewNext');

    if (track && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', function () {
            const scrollAmount = track.clientWidth * 0.8;
            track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', function () {
            const scrollAmount = track.clientWidth * 0.8;
            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }
});
</script>

