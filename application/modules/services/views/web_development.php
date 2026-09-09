<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// =========================================================================
// 1. HERO VECTOR SVG: WEB DESIGN & FULL-STACK DEVELOPMENT WORKSTATION
// =========================================================================
ob_start(); ?>
<svg viewBox="70 40 780 495" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- Background Gradients -->
    <radialGradient id="pinkBlob"><stop offset="0%" stop-color="#ffe3e5"/><stop offset="100%" stop-color="#fff5f5"/></radialGradient>
    <radialGradient id="blueBlob"><stop offset="0%" stop-color="#dff3ff"/><stop offset="100%" stop-color="#c9eaff"/></radialGradient>
    <linearGradient id="mainBlue" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#123e63"/><stop offset="45%" stop-color="#14558a"/><stop offset="100%" stop-color="#267fc1"/></linearGradient>
    <linearGradient id="monitorFrame" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#344e64"/><stop offset="100%" stop-color="#172f45"/></linearGradient>
    <linearGradient id="red" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#ff4246"/><stop offset="100%" stop-color="#df2029"/></linearGradient>
    <linearGradient id="orange" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#ffd33f"/><stop offset="100%" stop-color="#f5a900"/></linearGradient>
    <linearGradient id="green" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#55b873"/><stop offset="100%" stop-color="#16864e"/></linearGradient>
    <linearGradient id="codeSky" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0f172a"/><stop offset="100%" stop-color="#1e293b"/></linearGradient>
    <linearGradient id="cyanGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#38bdf8"/><stop offset="100%" stop-color="#0284c7"/></linearGradient>

    <!-- Shadows -->
    <filter id="shadow" x="-30%" y="-30%" width="160%" height="170%"><feDropShadow dx="0" dy="6" stdDeviation="8" flood-opacity=".16"/></filter>
    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="160%"><feDropShadow dx="0" dy="4" stdDeviation="5" flood-opacity=".12"/></filter>
  </defs>

  <!-- BACKGROUND BLOBS -->
  <circle cx="456" cy="167" r="122" fill="url(#pinkBlob)" opacity=".85"/>
  <path d="M76 333 C73 277 112 230 166 214 C218 198 257 169 291 121 C326 73 380 43 431 48 C488 53 520 89 548 132 C578 177 613 201 672 201 C741 200 800 235 819 295 C840 360 801 423 742 447 C675 474 607 448 544 463 C472 480 402 474 340 456 C272 437 214 449 157 421 C106 397 80 370 76 333Z" fill="url(#blueBlob)" opacity=".82"/>

  <!-- CLOUDS -->
  <g fill="#c9e7fb">
    <circle cx="169" cy="222" r="12"/><circle cx="187" cy="212" r="19"/><circle cx="207" cy="221" r="15"/><circle cx="219" cy="231" r="10"/>
    <rect x="155" y="226" width="76" height="17" rx="9"/>
  </g>
  <g fill="#c9e7fb">
    <circle cx="678" cy="70" r="15"/><circle cx="700" cy="61" r="22"/><circle cx="723" cy="71" r="18"/><circle cx="739" cy="85" r="11"/>
    <rect x="660" y="83" width="102" height="20" rx="10"/>
  </g>

  <!-- LEFT FLOATING TECH STACK BADGES -->
  <!-- 1. Code Brackets Badge < / > -->
  <g filter="url(#shadow)">
    <rect x="130" y="90" width="75" height="50" rx="13" fill="url(#red)"/>
    <text x="167.5" y="126" text-anchor="middle" font-family="'Consolas', 'Courier New', monospace" font-size="28" font-weight="900" fill="#ffffff">&lt;/&gt;</text>
  </g>

  <!-- 2. HTML Badge -->
  <g filter="url(#smallShadow)">
    <rect x="95" y="155" width="72" height="52" rx="13" fill="#e44d26"/>
    <text x="131" y="191" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="22" font-weight="900" fill="#ffffff">HTML</text>
  </g>

  <!-- 3. JS Badge -->
  <g filter="url(#smallShadow)">
    <rect x="90" y="225" width="68" height="52" rx="13" fill="#f7df1e"/>
    <text x="124" y="263" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="26" font-weight="900" fill="#000000">JS</text>
  </g>

  <!-- 4. CSS Badge -->
  <g filter="url(#smallShadow)">
    <rect x="100" y="295" width="68" height="52" rx="13" fill="#264de4"/>
    <text x="134" y="332" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="24" font-weight="900" fill="#ffffff">CSS</text>
  </g>

  <!-- 5. PHP Badge -->
  <g filter="url(#smallShadow)">
    <rect x="145" y="365" width="72" height="52" rx="13" fill="#4f5b93"/>
    <text x="181" y="401" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="24" font-weight="900" fill="#ffffff">PHP</text>
  </g>

  <!-- CENTRAL WORKSTATION DESKTOP DISPLAY -->
  <!-- Stand Base & Neck -->
  <path d="M430 400 L470 400 L480 470 L420 470 Z" fill="#344e64"/>
  <ellipse cx="450" cy="470" rx="65" ry="12" fill="#1e3247" filter="url(#shadow)"/>
  <ellipse cx="450" cy="468" rx="55" ry="8" fill="#4a6882"/>

  <!-- Desktop Monitor Outer Body -->
  <g filter="url(#shadow)">
    <rect x="220" y="120" width="440" height="280" rx="14" fill="url(#monitorFrame)"/>
    <rect x="220" y="120" width="440" height="26" rx="14" fill="#344e63"/>
    <rect x="232" y="136" width="416" height="252" rx="6" fill="#ffffff"/>

    <!-- Camera Lens -->
    <circle cx="440" cy="128" r="2.5" fill="#6db8ed"/>
  </g>

  <!-- Browser Window Toolbar inside Monitor -->
  <g>
    <!-- Window Control Dots -->
    <circle cx="248" cy="148" r="4.5" fill="#ff5f56"/>
    <circle cx="260" cy="148" r="4.5" fill="#ffbd2e"/>
    <circle cx="272" cy="148" r="4.5" fill="#27c93f"/>
    <!-- URL Search Bar -->
    <rect x="290" y="141" width="345" height="14" rx="4" fill="#edf3f7"/>
    <circle cx="300" cy="148" r="3" fill="#22c55e"/>
    <text x="310" y="152" font-family="'Segoe UI', Arial, sans-serif" font-size="8.5" font-weight="600" fill="#64748b">https://groveus.com/web-development</text>
  </g>

  <!-- SPLIT SCREEN: LEFT CODE EDITOR & RIGHT LIVE UI -->
  <!-- Left Side: Dark Code Editor Pane -->
  <g>
    <rect x="232" y="162" width="190" height="226" fill="url(#codeSky)"/>
    <!-- Code Tab -->
    <rect x="232" y="162" width="75" height="16" fill="#0f172a"/>
    <text x="240" y="173" font-family="'Consolas', monospace" font-size="8" fill="#38bdf8">App.tsx</text>
    <rect x="307" y="162" width="75" height="16" fill="#1e293b"/>
    <text x="315" y="173" font-family="'Consolas', monospace" font-size="8" fill="#94a3b8">styles.css</text>

    <!-- Syntax Code Lines -->
    <g font-family="'Consolas', monospace" font-size="8.5" font-weight="bold">
      <text x="242" y="194" fill="#f43f5e">import <tspan fill="#38bdf8">React</tspan> from <tspan fill="#a3e635">'react'</tspan>;</text>
      <text x="242" y="210" fill="#f43f5e">function <tspan fill="#fbbf24">WebApp</tspan>() {</text>
      <text x="252" y="226" fill="#818cf8">const <tspan fill="#ffffff">[speed]</tspan> = <tspan fill="#38bdf8">100</tspan>;</text>
      <text x="252" y="242" fill="#f43f5e">return (</text>
      <text x="262" y="258" fill="#38bdf8">&lt;<tspan fill="#f43f5e">div</tspan> <tspan fill="#fbbf24">className</tspan>=<tspan fill="#a3e635">"hero"</tspan>&gt;</text>
      <text x="272" y="274" fill="#38bdf8">&lt;<tspan fill="#f43f5e">h1</tspan>&gt;<tspan fill="#ffffff">High Speed</tspan>&lt;/<tspan fill="#f43f5e">h1</tspan>&gt;</text>
      <text x="272" y="290" fill="#38bdf8">&lt;<tspan fill="#f43f5e">Button</tspan> <tspan fill="#fbbf24">fast</tspan>=<tspan fill="#38bdf8">{true}</tspan> /&gt;</text>
      <text x="262" y="306" fill="#38bdf8">&lt;/<tspan fill="#f43f5e">div</tspan>&gt;</text>
      <text x="252" y="322" fill="#f43f5e">);</text>
      <text x="242" y="338" fill="#f43f5e">}</text>
      <text x="242" y="354" fill="#f43f5e">export default <tspan fill="#fbbf24">WebApp</tspan>;</text>
    </g>
    <!-- Line numbers bar -->
    <g fill="#475569" font-family="'Consolas', monospace" font-size="7.5">
      <text x="236" y="194">1</text><text x="236" y="210">2</text><text x="236" y="226">3</text><text x="236" y="242">4</text><text x="236" y="258">5</text><text x="236" y="274">6</text><text x="236" y="290">7</text><text x="236" y="306">8</text><text x="236" y="322">9</text><text x="234" y="338">10</text><text x="234" y="354">11</text>
    </g>
  </g>

  <!-- Right Side: Live Website UI Preview Pane -->
  <g>
    <rect x="422" y="162" width="226" height="226" fill="#f8fafc"/>
    <line x1="422" y1="162" x2="422" y2="388" stroke="#cbd5e1" stroke-width="1"/>

    <!-- Mini Navbar -->
    <rect x="430" y="170" width="210" height="18" rx="4" fill="#ffffff" filter="url(#smallShadow)"/>
    <circle cx="440" cy="179" r="4" fill="#df2029"/>
    <rect x="448" y="177" width="30" height="4" rx="2" fill="#0f172a"/>
    <rect x="575" y="176" width="18" height="6" rx="3" fill="#94a3b8"/>
    <rect x="600" y="174" width="32" height="10" rx="3" fill="#df2029"/>

    <!-- Hero Banner Card -->
    <rect x="430" y="196" width="210" height="88" rx="8" fill="url(#mainBlue)"/>
    <rect x="440" y="210" width="80" height="8" rx="3" fill="#ffffff"/>
    <rect x="440" y="223" width="115" height="5" rx="2" fill="#93c5fd"/>
    <rect x="440" y="232" width="95" height="5" rx="2" fill="#93c5fd"/>
    <rect x="440" y="248" width="55" height="16" rx="4" fill="#ff4246"/>
    <circle cx="585" cy="235" r="26" fill="#ffffff" opacity="0.15"/>
    <path d="M570 248 L585 220 L600 248 Z" fill="#38bdf8"/>

    <!-- Card Grid (3 Columns) -->
    <rect x="430" y="292" width="65" height="84" rx="6" fill="#ffffff" filter="url(#smallShadow)"/>
    <circle cx="445" cy="308" r="8" fill="#e0f2fe"/>
    <rect x="438" y="324" width="48" height="5" rx="2" fill="#0f172a"/>
    <rect x="438" y="334" width="36" height="4" rx="2" fill="#94a3b8"/>

    <rect x="502" y="292" width="65" height="84" rx="6" fill="#ffffff" filter="url(#smallShadow)"/>
    <circle cx="517" cy="308" r="8" fill="#ffe4e6"/>
    <rect x="510" y="324" width="48" height="5" rx="2" fill="#0f172a"/>
    <rect x="510" y="334" width="36" height="4" rx="2" fill="#94a3b8"/>

    <rect x="575" y="292" width="65" height="84" rx="6" fill="#ffffff" filter="url(#smallShadow)"/>
    <circle cx="590" cy="308" r="8" fill="#fef3c7"/>
    <rect x="583" y="324" width="48" height="5" rx="2" fill="#0f172a"/>
    <rect x="583" y="334" width="36" height="4" rx="2" fill="#94a3b8"/>
  </g>

  <!-- RESPONSIVE MOBILE DEVICE (OVERLAPPING RIGHT) -->
  <g filter="url(#shadow)">
    <rect x="580" y="195" width="98" height="195" rx="18" fill="#183652"/>
    <rect x="585" y="202" width="88" height="181" rx="14" fill="#ffffff"/>
    <rect x="612" y="198" width="28" height="3" rx="1.5" fill="#335678"/>
    <!-- Mobile Hero UI -->
    <rect x="589" y="210" width="80" height="44" rx="5" fill="url(#mainBlue)"/>
    <rect x="594" y="218" width="45" height="5" rx="2" fill="#ffffff"/>
    <rect x="594" y="226" width="60" height="3" rx="1.5" fill="#93c5fd"/>
    <rect x="594" y="236" width="28" height="9" rx="2" fill="#ff4246"/>
    <!-- Mobile Feed Cards -->
    <rect x="589" y="260" width="80" height="32" rx="4" fill="#f1f5f9"/>
    <rect x="594" y="266" width="30" height="4" rx="2" fill="#0f172a"/>
    <rect x="594" y="274" width="50" height="3" rx="1.5" fill="#94a3b8"/>
    <rect x="589" y="298" width="80" height="32" rx="4" fill="#f1f5f9"/>
    <rect x="594" y="304" width="30" height="4" rx="2" fill="#0f172a"/>
    <rect x="594" y="312" width="50" height="3" rx="1.5" fill="#94a3b8"/>
    <!-- Mobile Bottom Navigation -->
    <rect x="585" y="365" width="88" height="18" fill="#ffffff"/>
    <circle cx="600" cy="374" r="2.5" fill="#0f172a"/><circle cx="620" cy="374" r="2.5" fill="#94a3b8"/><circle cx="640" cy="374" r="2.5" fill="#94a3b8"/><circle cx="660" cy="374" r="2.5" fill="#94a3b8"/>
  </g>

  <!-- TOP RIGHT PERFORMANCE SPEED BADGE (100% PageSpeed) -->
  <g filter="url(#shadow)">
    <rect x="590" y="85" width="130" height="60" rx="12" fill="#ffffff"/>
    <circle cx="620" cy="115" r="18" fill="#10b981"/>
    <path d="M612 115 L618 121 L628 109" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
    <text x="645" y="112" font-family="'Segoe UI', Arial, sans-serif" font-size="14" font-weight="900" fill="#0f172a">100%</text>
    <text x="645" y="126" font-family="'Segoe UI', Arial, sans-serif" font-size="9" font-weight="700" fill="#10b981">PageSpeed</text>
  </g>

  <!-- FLOATING ROCKET / UPTIME CARD (RIGHT) -->
  <g transform="translate(680, 235)" filter="url(#shadow)">
    <circle cx="28" cy="28" r="28" fill="url(#cyanGrad)"/>
    <!-- Rocket Icon -->
    <path d="M28 12 C35 15 40 22 40 32 L34 34 L31 29 L25 29 L22 34 L16 32 C16 22 21 15 28 12 Z" fill="#ffffff"/>
    <circle cx="28" cy="22" r="3" fill="#0284c7"/>
    <path d="M24 35 L28 42 L32 35 Z" fill="#ff4246"/>
  </g>

  <!-- PERFORMANCE GEAR (RIGHT) -->
  <g transform="translate(688, 315)" filter="url(#smallShadow)">
    <circle cx="24" cy="24" r="22" fill="url(#orange)"/>
    <circle cx="24" cy="24" r="10" fill="#ffffff"/>
    <path d="M21 0 H27 V8 H21 Z M21 40 H27 V48 H21 Z M0 21 H8 V27 H0 Z M40 21 H48 V27 H40 Z M6 6 L11 11 L7 15 L2 10 Z M37 37 L42 42 L38 46 L33 41 Z M41 6 L46 11 L42 15 L37 10 Z M6 41 L11 46 L7 50 L2 45 Z" fill="url(#orange)"/>
  </g>

  <!-- GROUND SHADOW -->
  <ellipse cx="450" cy="485" rx="320" ry="14" fill="#d8eefc"/>
  <ellipse cx="450" cy="495" rx="240" ry="8" fill="#edf8ff"/>
</svg>
<?php $web_development_svg = ob_get_clean(); ?>

<!-- =========================================================================
     2. VECTOR ARTWORK 1: MODERN FULL-STACK FRAMEWORK & COMPILER ENGINE (LINE 1)
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="webArtShadow1" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="10" flood-color="#0F172A" flood-opacity=".08"/>
    </filter>
    <filter id="webTerminalGlow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#0284C7" flood-opacity=".20"/>
    </filter>
    <linearGradient id="webIdeGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#1E293B"/>
    </linearGradient>
    <linearGradient id="webReactGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#38BDF8"/>
      <stop offset="100%" stop-color="#0284C7"/>
    </linearGradient>
    <pattern id="webDots1" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Frame Background -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#webDots1)"/>
  
  <circle cx="90" cy="90" r="75" fill="#E0F2FE" opacity=".6"/>
  <circle cx="530" cy="330" r="80" fill="#FEE2E2" opacity=".45"/>

  <!-- Left: Live IDE / Modern Code Architecture Terminal -->
  <g transform="translate(35, 40)" filter="url(#webTerminalGlow)">
    <rect width="265" height="340" rx="18" fill="url(#webIdeGrad)" stroke="rgba(255,255,255,0.12)" stroke-width="1.2"/>
    
    <!-- Top Terminal Bar -->
    <rect width="265" height="34" rx="18" fill="#090D16"/>
    <circle cx="18" cy="17" r="4.5" fill="#EF4444"/>
    <circle cx="32" cy="17" r="4.5" fill="#F59E0B"/>
    <circle cx="46" cy="17" r="4.5" fill="#10B981"/>
    <text x="132" y="21" font-family="'JetBrains Mono', 'Consolas', monospace" font-size="10.5" font-weight="700" fill="#94A3B8" text-anchor="middle">ServerApp.tsx &bull; Next.js 15</text>

    <!-- Syntax Code Lines -->
    <g transform="translate(18, 52)" font-family="'JetBrains Mono', 'Consolas', monospace" font-size="9.5" font-weight="600">
      <text x="0" y="14" fill="#F43F5E">import <tspan fill="#38BDF8">{ SSR, EdgeCache }</tspan> <tspan fill="#F43F5E">from</tspan> <tspan fill="#A3E635">'@groveus/core'</tspan>;</text>
      
      <text x="0" y="38" fill="#818CF8">export async function <tspan fill="#FBBF24">generatePage</tspan>() {</text>
      <text x="12" y="58" fill="#F43F5E">const <tspan fill="#FFFFFF">data</tspan> = <tspan fill="#F43F5E">await</tspan> <tspan fill="#38BDF8">fetchEdgeAPI</tspan>();</text>
      
      <text x="12" y="78" fill="#F43F5E">return (</text>
      <text x="24" y="98" fill="#38BDF8">&lt;<tspan fill="#F43F5E">DynamicLayout</tspan> <tspan fill="#FBBF24">fastMode</tspan>=<tspan fill="#A3E635">{true}</tspan>&gt;</text>
      <text x="36" y="118" fill="#38BDF8">&lt;<tspan fill="#F43F5E">HeadlessContent</tspan> <tspan fill="#FBBF24">source</tspan>=<tspan fill="#FFFFFF">{data}</tspan> /&gt;</text>
      <text x="24" y="138" fill="#38BDF8">&lt;/<tspan fill="#F43F5E">DynamicLayout</tspan>&gt;</text>
      <text x="12" y="158" fill="#F43F5E">);</text>
      <text x="0" y="178" fill="#818CF8">}</text>
    </g>

    <!-- Live Compilation Status Banner -->
    <g transform="translate(16, 250)">
      <rect width="233" height="34" rx="8" fill="#090D16" stroke="#334155" stroke-width="0.8"/>
      <circle cx="16" cy="17" r="4" fill="#22C55E"/>
      <text x="28" y="21" font-family="'Inter', sans-serif" font-size="10.5" font-weight="700" fill="#F8FAFC">⚡ Compiled in 18ms (Zero Errors)</text>
    </g>

    <!-- Build Success Pill -->
    <g transform="translate(16, 294)">
      <rect width="233" height="28" rx="7" fill="#C91A25"/>
      <text x="116" y="18" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#FFFFFF" text-anchor="middle">✓ Production Ready Build</text>
    </g>
  </g>

  <!-- Right: 2 Dynamic Engineering Cards -->
  <!-- Card 1: API & Microservices Latency -->
  <g transform="translate(320, 40)" filter="url(#webArtShadow1)">
    <rect width="265" height="155" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="16" y="16" width="34" height="34" rx="9" fill="#E0F2FE"/>
    <path d="M 25 33 L 33 25 L 41 33 M 33 25 V 41" fill="none" stroke="#0284C7" stroke-width="2.2" stroke-linecap="round"/>
    
    <text x="60" y="30" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">API &amp; Headless Core</text>
    <text x="60" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">GraphQL &bull; REST &bull; Webhooks</text>

    <rect x="16" y="60" width="233" height="36" rx="8" fill="#F8FAFC" stroke="#E2E8F0"/>
    <text x="28" y="82" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#1E293B">⚡ Edge Endpoint Latency</text>
    <text x="237" y="82" font-family="'Inter', sans-serif" font-size="11" font-weight="800" fill="#16A34A" text-anchor="end">&lt; 24ms</text>

    <line x1="16" y1="108" x2="249" y2="108" stroke="#F1F5F9" stroke-width="1"/>
    
    <circle cx="26" cy="128" r="4" fill="#16A34A"/>
    <text x="36" y="131" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#15803D">100% Type-Safe TypeScript Architecture</text>
  </g>

  <!-- Card 2: 99+ Core Web Vitals Guaranteed -->
  <g transform="translate(320, 215)" filter="url(#webArtShadow1)">
    <rect width="265" height="165" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="16" y="16" width="34" height="34" rx="9" fill="#FEE2E2"/>
    <path d="M 27 33 L 33 27 L 39 31 L 45 23" fill="none" stroke="#C91A25" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
    
    <text x="60" y="30" font-family="'Outfit', sans-serif" font-size="15" font-weight="800" fill="#0F172A">PageSpeed Performance</text>
    <text x="60" y="44" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#64748B">Core Web Vitals Metric</text>

    <text x="16" y="90" font-family="'Outfit', sans-serif" font-size="32" font-weight="900" fill="#16A34A">99/100</text>
    <text x="145" y="84" font-family="'Inter', sans-serif" font-size="11.5" font-weight="600" fill="#64748B">Sub-Second LCP</text>

    <rect x="16" y="106" width="233" height="6" rx="3" fill="#F1F5F9"/>
    <rect x="16" y="106" width="228" height="6" rx="3" fill="#16A34A"/>

    <rect x="16" y="124" width="233" height="28" rx="7" fill="#DCFCE7"/>
    <text x="132" y="142" font-family="'Inter', sans-serif" font-size="10.5" font-weight="800" fill="#15803D" text-anchor="middle">★ Google Search Priority Ranking</text>
  </g>
</svg>
<?php $web_artwork_1 = ob_get_clean(); ?>

<!-- =========================================================================
     3. VECTOR ARTWORK 2: CENTRALIZED CLOUD CORE & 4-SATELLITE TOPOLOGY
     ========================================================================= -->
<?php ob_start(); ?>
<svg viewBox="0 0 620 420" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <filter id="webArtShadow2" x="-15%" y="-15%" width="130%" height="130%">
      <feDropShadow dx="0" dy="6" stdDeviation="9" flood-color="#0F172A" flood-opacity=".07"/>
    </filter>
    <filter id="webCoreCenterGlow" x="-25%" y="-25%" width="150%" height="150%">
      <feDropShadow dx="0" dy="8" stdDeviation="14" flood-color="#C91A25" flood-opacity=".25"/>
    </filter>
    <linearGradient id="webCenterCoreGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#090D16"/>
      <stop offset="100%" stop-color="#1E293B"/>
    </linearGradient>
    <linearGradient id="webNodeGrad1" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="100%" stop-color="#F8FAFC"/>
    </linearGradient>
    <pattern id="webDots2" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1.2" fill="#94A3B8" opacity="0.3"/>
    </pattern>
  </defs>

  <!-- Frame Background -->
  <rect x="15" y="15" width="590" height="390" rx="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
  <rect x="16" y="16" width="588" height="388" rx="21" fill="url(#webDots2)"/>

  <!-- Ambient Glow Orbs -->
  <circle cx="310" cy="208" r="110" fill="#FEE2E2" opacity=".35"/>
  <circle cx="90" cy="90" r="65" fill="#E0F2FE" opacity=".5"/>
  <circle cx="530" cy="90" r="65" fill="#DCFCE7" opacity=".4"/>
  <circle cx="90" cy="330" r="65" fill="#FEF3C7" opacity=".4"/>
  <circle cx="530" cy="330" r="65" fill="#E0E7FF" opacity=".5"/>

  <!-- =======================================================================
       TOP TELEMETRY COMMAND RIBBON
       ======================================================================= -->
  <g transform="translate(26, 22)" filter="url(#webArtShadow2)">
    <rect width="568" height="36" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <circle cx="18" cy="18" r="4.5" fill="#22C55E"/>
    <text x="30" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0F172A">Cloud Architecture Topology</text>
    
    <circle cx="215" cy="18" r="2.5" fill="#38BDF8"/>
    <text x="225" y="22" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">320+ Edge PoPs</text>

    <circle cx="345" cy="18" r="2.5" fill="#F59E0B"/>
    <text x="355" y="22" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">Latency: &lt; 14ms</text>

    <rect x="465" y="5" width="95" height="26" rx="6" fill="#F0FDF4" stroke="#BBF7D0"/>
    <text x="512" y="22" font-family="'JetBrains Mono', monospace" font-size="10" font-weight="800" fill="#15803D" text-anchor="middle">99.99% SLA</text>
  </g>

  <!-- =======================================================================
       CONNECTED PIPELINE ARTERIES & PULSE CHEVRONS
       ======================================================================= -->
  <g stroke="#CBD5E1" stroke-width="1.8" stroke-dasharray="4 4" fill="none">
    <!-- Top-Left to Center -->
    <path d="M 198 118 C 248 118, 252 190, 275 200"/>
    <!-- Top-Right to Center -->
    <path d="M 422 118 C 372 118, 368 190, 345 200"/>
    <!-- Bottom-Left to Center -->
    <path d="M 198 298 C 248 298, 252 226, 275 216"/>
    <!-- Bottom-Right to Center -->
    <path d="M 422 298 C 372 298, 368 226, 345 216"/>
  </g>

  <!-- Artery Directional Chevrons -->
  <polygon points="248,138 256,143 250,148" fill="#0284C7"/>
  <polygon points="372,138 364,143 370,148" fill="#16A34A"/>
  <polygon points="248,278 256,273 250,268" fill="#F59E0B"/>
  <polygon points="372,278 364,273 370,268" fill="#6366F1"/>

  <!-- =======================================================================
       SATELLITE 1 (TOP-LEFT): TRAFFIC INGRESS & EDGE SECURITY
       ======================================================================= -->
  <g transform="translate(26, 72)" filter="url(#webArtShadow2)">
    <rect width="172" height="92" rx="14" fill="url(#webNodeGrad1)" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="10" width="28" height="28" rx="7" fill="#E0F2FE"/>
    <path d="M 26 17 L 33 20 V 26 C 33 31, 26 33, 26 33 C 26 33, 19 31, 19 26 V 20 Z" fill="none" stroke="#0284C7" stroke-width="1.8"/>
    
    <text x="46" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0F172A">Traffic Ingress</text>
    <text x="46" y="34" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#64748B">Cloudflare Anycast</text>

    <line x1="12" y1="44" x2="160" y2="44" stroke="#F1F5F9" stroke-width="1"/>

    <g transform="translate(12, 52)">
      <rect width="70" height="26" rx="5" fill="#F0FDF4" stroke="#BBF7D0"/>
      <text x="35" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#15803D" text-anchor="middle">&lt; 14ms TTFB</text>

      <rect x="78" width="70" height="26" rx="5" fill="#EFF6FF" stroke="#BFDBFE"/>
      <text x="113" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#1D4ED8" text-anchor="middle">TLS 1.3 &bull; WAF</text>
    </g>
  </g>

  <!-- =======================================================================
       SATELLITE 2 (TOP-RIGHT): AUTOMATED CI/CD & ZERO DOWNTIME DEPLOY
       ======================================================================= -->
  <g transform="translate(422, 72)" filter="url(#webArtShadow2)">
    <rect width="172" height="92" rx="14" fill="url(#webNodeGrad1)" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="10" width="28" height="28" rx="7" fill="#DCFCE7"/>
    <path d="M 23 18 L 31 24 L 23 30 Z" fill="#16A34A"/>
    
    <text x="46" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0F172A">Automated CI/CD</text>
    <text x="46" y="34" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#64748B">Git &rarr; Docker Rollout</text>

    <line x1="12" y1="44" x2="160" y2="44" stroke="#F1F5F9" stroke-width="1"/>

    <g transform="translate(12, 52)">
      <rect width="70" height="26" rx="5" fill="#F8FAFC" stroke="#E2E8F0"/>
      <text x="35" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#334155" text-anchor="middle">Build: 18s</text>

      <rect x="78" width="70" height="26" rx="5" fill="#F0FDF4" stroke="#BBF7D0"/>
      <text x="113" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#15803D" text-anchor="middle">✓ Zero Down</text>
    </g>
  </g>

  <!-- =======================================================================
       SATELLITE 3 (BOTTOM-LEFT): FRONTEND EDGE ENGINE (SSR & NEXT.JS)
       ======================================================================= -->
  <g transform="translate(26, 252)" filter="url(#webArtShadow2)">
    <rect width="172" height="92" rx="14" fill="url(#webNodeGrad1)" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="10" width="28" height="28" rx="7" fill="#FEF3C7"/>
    <path d="M 21 19 L 26 24 L 21 29 M 29 29 H 33" stroke="#D97706" stroke-width="2" stroke-linecap="round" fill="none"/>
    
    <text x="46" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0F172A">SSR Frontend Edge</text>
    <text x="46" y="34" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#64748B">Next.js 15 &bull; React 19</text>

    <line x1="12" y1="44" x2="160" y2="44" stroke="#F1F5F9" stroke-width="1"/>

    <g transform="translate(12, 52)">
      <rect width="70" height="26" rx="5" fill="#F0FDF4" stroke="#BBF7D0"/>
      <text x="35" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="800" fill="#15803D" text-anchor="middle">99/100 Vitals</text>

      <rect x="78" width="70" height="26" rx="5" fill="#FEF3C7" stroke="#FDE68A"/>
      <text x="113" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#B45309" text-anchor="middle">0.4s LCP</text>
    </g>
  </g>

  <!-- =======================================================================
       SATELLITE 4 (BOTTOM-RIGHT): DISTRIBUTED DATA MESH & CACHE
       ======================================================================= -->
  <g transform="translate(422, 252)" filter="url(#webArtShadow2)">
    <rect width="172" height="92" rx="14" fill="url(#webNodeGrad1)" stroke="#E2E8F0" stroke-width="1.2"/>
    
    <rect x="12" y="10" width="28" height="28" rx="7" fill="#E0E7FF"/>
    <path d="M 21 19 C 21 17 31 17 31 19 C 31 21 21 21 21 19 Z M 21 23 C 21 25 31 25 31 23 M 21 27 C 21 29 31 29 31 27" fill="none" stroke="#4F46E5" stroke-width="1.8"/>
    
    <text x="46" y="22" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#0F172A">Data &amp; Cache Mesh</text>
    <text x="46" y="34" font-family="'Inter', sans-serif" font-size="9.5" font-weight="600" fill="#64748B">PostgreSQL &bull; Redis</text>

    <line x1="12" y1="44" x2="160" y2="44" stroke="#F1F5F9" stroke-width="1"/>

    <g transform="translate(12, 52)">
      <rect width="70" height="26" rx="5" fill="#EFF6FF" stroke="#BFDBFE"/>
      <text x="35" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#1D4ED8" text-anchor="middle">&lt; 1ms Cache</text>

      <rect x="78" width="70" height="26" rx="5" fill="#F0FDF4" stroke="#BBF7D0"/>
      <text x="113" y="17" font-family="'JetBrains Mono', monospace" font-size="8.5" font-weight="700" fill="#15803D" text-anchor="middle">Auto-Sync</text>
    </g>
  </g>

  <!-- =======================================================================
       CENTER HERO: GROVEUS APP CORE ENGINE CLOUD HUB
       ======================================================================= -->
  <!-- Top Floating Badge (Above Circle with safe gap) -->
  <g transform="translate(230, 118)" filter="url(#webArtShadow2)">
    <rect width="160" height="24" rx="12" fill="#0F172A" stroke="#334155"/>
    <circle cx="14" cy="12" r="3.5" fill="#22C55E"/>
    <text x="88" y="16" font-family="'Outfit', sans-serif" font-size="10" font-weight="800" fill="#FFFFFF" text-anchor="middle">100k+ Concurrency Hub</text>
  </g>

  <!-- Center Circle Engine -->
  <g transform="translate(310, 208)">
    <!-- Outer Orbital Rings -->
    <circle r="60" fill="none" stroke="#CBD5E1" stroke-width="1.2" stroke-dasharray="5 4"/>
    <circle r="50" fill="#FEE2E2" opacity=".3"/>

    <!-- Orbital Ping Nodes -->
    <circle cx="0" cy="-60" r="4" fill="#0284C7"/>
    <circle cx="60" cy="0" r="4" fill="#16A34A"/>
    <circle cx="0" cy="60" r="4" fill="#6366F1"/>
    <circle cx="-60" cy="0" r="4" fill="#F59E0B"/>

    <!-- Central Core Hub Chassis -->
    <circle r="42" fill="url(#webCenterCoreGrad)" stroke="#334155" stroke-width="2" filter="url(#webCoreCenterGlow)"/>
    
    <!-- Central Pulsing Logo / Icon -->
    <circle cx="0" cy="-15" r="3.5" fill="#C91A25"/>
    <path d="M -11 -4 L 0 -11 L 11 -4 L 11 7 L 0 13 L -11 7 Z" fill="none" stroke="#FFFFFF" stroke-width="1.6"/>
    <path d="M -11 -4 L 0 2 L 11 -4 M 0 2 V 13" fill="none" stroke="#38BDF8" stroke-width="1.4"/>
    
    <text x="0" y="22" font-family="'Outfit', sans-serif" font-size="9.5" font-weight="900" fill="#FFFFFF" text-anchor="middle">APP CORE</text>
    <text x="0" y="32" font-family="'JetBrains Mono', monospace" font-size="7.5" font-weight="700" fill="#22C55E" text-anchor="middle">AUTO-SCALE</text>
  </g>

  <!-- Bottom Floating Badge (Below Circle with safe gap) -->
  <g transform="translate(230, 274)" filter="url(#webArtShadow2)">
    <rect width="160" height="24" rx="12" fill="#C91A25"/>
    <text x="80" y="16" font-family="'Outfit', sans-serif" font-size="10" font-weight="800" fill="#FFFFFF" text-anchor="middle">⚡ Zero Cold Starts Engine</text>
  </g>

  <!-- =======================================================================
       BOTTOM SECURITY & COMPLIANCE FOOTER RIBBON
       ======================================================================= -->
  <g transform="translate(26, 360)" filter="url(#webArtShadow2)">
    <rect width="568" height="36" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
    <circle cx="18" cy="18" r="4" fill="#16A34A"/>
    <text x="30" y="22" font-family="'Outfit', sans-serif" font-size="11" font-weight="800" fill="#0F172A">Enterprise SLA Security:</text>
    <text x="172" y="22" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#475569">SOC2 Type II &bull; 256-Bit SSL Encryption &bull; Multi-Region Failover</text>
    <rect x="480" y="5" width="80" height="26" rx="6" fill="#DCFCE7"/>
    <text x="520" y="22" font-family="'JetBrains Mono', monospace" font-size="10" font-weight="800" fill="#15803D" text-anchor="middle">✓ Verified</text>
  </g>
</svg>
<?php $web_artwork_2 = ob_get_clean(); ?>

<!-- =========================================================================
     4. DYNAMIC HERO SLIDER COMPONENT
     ========================================================================= -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Web Design & Development']
    ],
    'title' => 'Engineered for Speed, <span class="text-danger-highlight">Built for Conversions</span>',
    'description' => 'We design, engineer, and deploy high-performance custom websites and scalable web applications. From intuitive UI/UX and headless architectures to sub-second load speeds and bulletproof cloud security, we build digital platforms that drive revenue.',
    'cta_text' => 'Build Your Web Platform',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-code-slash',
            'title' => 'Custom Full-Stack',
            'subtitle' => 'React, Next.js & PHP/Laravel'
        ],
        [
            'icon' => 'bi bi-lightning-charge-fill',
            'title' => 'Sub-Second Speed',
            'subtitle' => '99+ Core Web Vitals'
        ]
    ],
    'svg' => $web_development_svg
]); ?>

<!-- =========================================================================
     INTERNAL CSS: WEB DEVELOPMENT BESPOKE STYLESHEET (ZERO INLINE STYLES)
     ========================================================================= -->
<div class="webdev-page-wrap">

    <!-- =========================================================================
         LINE 1 (ALTERNATING ROW 1): CONTENT (LEFT) + FULL-STACK SVG (RIGHT)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-white">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Content Column (Left) -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-badge">
                        <i class="bi bi-code-slash"></i> Custom Full-Stack Engineering
                    </div>
                    <h2 class="webdev-heading">
                        Engineered for Speed, Scalability &amp; <span class="webdev-highlight">High Conversions</span>
                    </h2>
                    <p class="webdev-lead">
                        Your website is the primary growth engine of your digital business. We reject bloated page builders and slow templates. Our full-stack engineers craft modern, mobile-first web platforms with clean TypeScript, Next.js, React, and robust backend APIs built to scale effortlessly.
                    </p>
                    <ul class="webdev-check-list">
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Custom Full-Stack Web Development &amp; Modern Frameworks</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Sub-Second Page Load Speeds with 99+ Core Web Vitals Score</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Headless CMS &amp; Microservice API Architecture (GraphQL / REST)</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Intuitive UI/UX Design Engineered to Maximize Sales &amp; Leads</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="webdev-btn">
                        <span>Start Your Project</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 1 (Right) -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-svg-box">
                        <?= $web_artwork_1 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         LINE 2 (ALTERNATING ROW 2): CLOUD SECURITY SVG (LEFT) + CONTENT (RIGHT)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-alt">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5 flex-lg-row-reverse">
                
                <!-- Content Column (Right on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-badge">
                        <i class="bi bi-cloud-check-fill"></i> Enterprise Cloud &amp; Security
                    </div>
                    <h2 class="webdev-heading">
                        Cloud Architecture, Automated CI/CD &amp; <span class="webdev-highlight">Zero Downtime</span>
                    </h2>
                    <p class="webdev-lead">
                        Modern web applications demand 24/7 reliability, automated deployment pipelines, and bulletproof security. We deploy edge-cached cloud environments on AWS, Vercel, and Docker with automated DDoS protection, SSL encryption, and multi-region database replication.
                    </p>
                    <ul class="webdev-check-list">
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Automated GitHub CI/CD Deployment with Zero-Downtime Rollouts</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Global Edge CDN Distribution with 320+ Point-of-Presence Nodes</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Enterprise Security Hardening, 256-Bit SSL &amp; Cloudflare DDoS Defense</span>
                        </li>
                        <li class="webdev-check-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Database Query Optimization, Redis In-Memory Caching &amp; Auto-Scaling</span>
                        </li>
                    </ul>
                    <a href="<?= site_url('contact-us') ?>" class="webdev-btn">
                        <span>Scale Your Infrastructure</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- SVG Artwork 2 (Left on Desktop) -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-svg-box">
                        <?= $web_artwork_2 ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: CORE ENGINEERING PILLARS (3-CARD STRATEGY)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="webdev-badge">
                        <i class="bi bi-cpu-fill"></i> Engineering Capabilities
                    </div>
                    <h2 class="webdev-heading">
                        Full-Cycle Web <span class="webdev-highlight">Engineering Suite</span>
                    </h2>
                    <p class="webdev-lead webdev-lead-center">
                        From dynamic SaaS applications to high-volume headless e-commerce and enterprise portals, we provide complete end-to-end development services.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Pillar 1: Custom Web App & SaaS -->
                <div class="col-12 col-lg-4">
                    <div class="webdev-pillar-card">
                        <div class="webdev-pillar-header">
                            <div class="webdev-pillar-icon">
                                <i class="bi bi-window-fullscreen"></i>
                            </div>
                            <span class="webdev-pillar-tag">Custom SaaS</span>
                        </div>
                        <h3 class="webdev-pillar-title">Custom SaaS &amp; Web Apps</h3>
                        <p class="webdev-pillar-desc">
                            Bespoke web applications engineered with Next.js, React, Node, and Laravel. We build modular, extensible software tailored to complex business requirements.
                        </p>
                        <ul class="webdev-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Single Page Applications (SPA)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Secure Auth &amp; Multi-Tenant Roles</li>
                            <li><i class="bi bi-check-circle-fill"></i> Real-Time WebSocket Dashboards</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2: Headless CMS & eCommerce -->
                <div class="col-12 col-lg-4">
                    <div class="webdev-pillar-card">
                        <div class="webdev-pillar-header">
                            <div class="webdev-pillar-icon">
                                <i class="bi bi-cart-check-fill"></i>
                            </div>
                            <span class="webdev-pillar-tag">High Velocity</span>
                        </div>
                        <h3 class="webdev-pillar-title">Headless CMS &amp; Commerce</h3>
                        <p class="webdev-pillar-desc">
                            Decoupled frontend architectures powered by WordPress VIP, Strapi, Shopify Plus, and custom GraphQL APIs delivering blazing-fast page loads.
                        </p>
                        <ul class="webdev-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> Headless Shopify &amp; WooCommerce</li>
                            <li><i class="bi bi-check-circle-fill"></i> Omnichannel Content Repositories</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sub-Second Catalog Navigation</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: API & Cloud Architecture -->
                <div class="col-12 col-lg-4">
                    <div class="webdev-pillar-card">
                        <div class="webdev-pillar-header">
                            <div class="webdev-pillar-icon">
                                <i class="bi bi-hdd-network-fill"></i>
                            </div>
                            <span class="webdev-pillar-tag">Cloud Ready</span>
                        </div>
                        <h3 class="webdev-pillar-title">Cloud APIs &amp; DevOps</h3>
                        <p class="webdev-pillar-desc">
                            High-concurrency microservices, automated CI/CD container pipelines, edge caching, and 24/7 server monitoring ensuring 99.99% operational uptime.
                        </p>
                        <ul class="webdev-pillar-list">
                            <li><i class="bi bi-check-circle-fill"></i> RESTful &amp; GraphQL API Hubs</li>
                            <li><i class="bi bi-check-circle-fill"></i> Docker, Kubernetes &amp; AWS ECS</li>
                            <li><i class="bi bi-check-circle-fill"></i> Redis In-Memory Performance Caching</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MODERN TECH STACK ECOSYSTEM (6-CARD DESIGNER GRID)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="webdev-badge">
                        <i class="bi bi-grid-fill"></i> Modern Technologies
                    </div>
                    <h2 class="webdev-heading">
                        Our Proven <span class="webdev-highlight">Technology Stack</span>
                    </h2>
                    <p class="webdev-lead webdev-lead-center">
                        We leverage industry-standard languages, modern frameworks, and cloud ecosystems to build future-proof web software.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Stack 1: Modern Frontend -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-filetype-tsx"></i>
                        </div>
                        <h3 class="webdev-stack-title">Next.js, React &amp; TypeScript</h3>
                        <p class="webdev-stack-desc">
                            Server-side rendering (SSR), static site generation (SSG), and type-safe component libraries delivering instantaneous page transitions.
                        </p>
                    </div>
                </div>

                <!-- Stack 2: Scalable Backend -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-filetype-php"></i>
                        </div>
                        <h3 class="webdev-stack-title">PHP, Laravel &amp; Node.js</h3>
                        <p class="webdev-stack-desc">
                            Clean MVC architectures, high-performance REST APIs, queue workers, and automated background jobs engineered for heavy workloads.
                        </p>
                    </div>
                </div>

                <!-- Stack 3: High-Performance Databases -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-database-fill-check"></i>
                        </div>
                        <h3 class="webdev-stack-title">MySQL, PostgreSQL &amp; Redis</h3>
                        <p class="webdev-stack-desc">
                            Normalized relational database schemas, automated indexing, point-in-time backups, and sub-millisecond in-memory Redis caching.
                        </p>
                    </div>
                </div>

                <!-- Stack 4: Headless & Custom CMS -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-wordpress"></i>
                        </div>
                        <h3 class="webdev-stack-title">WordPress VIP &amp; Strapi CMS</h3>
                        <p class="webdev-stack-desc">
                            Custom Gutenberg block builders, headless content APIs, flexible taxonomy systems, and intuitive admin editing experiences for marketing teams.
                        </p>
                    </div>
                </div>

                <!-- Stack 5: Cloud DevOps & CI/CD -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                        </div>
                        <h3 class="webdev-stack-title">AWS, Vercel &amp; Docker DevOps</h3>
                        <p class="webdev-stack-desc">
                            Automated GitHub Actions deployments, containerized microservices, multi-region failover, and zero-downtime rolling updates.
                        </p>
                    </div>
                </div>

                <!-- Stack 6: Speed & Core Web Vitals -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="webdev-stack-card">
                        <div class="webdev-stack-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3 class="webdev-stack-title">99+ Google Core Web Vitals</h3>
                        <p class="webdev-stack-desc">
                            Critical CSS inlining, WebP image compression, minimal DOM depth, and tree-shaken JavaScript bundles ranking higher on Google.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: 5-STAGE DEVELOPMENT LIFECYCLE (STEPPER)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-white">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="webdev-badge">
                        <i class="bi bi-diagram-3-fill"></i> Structured Workflow
                    </div>
                    <h2 class="webdev-heading">
                        Our 5-Stage Web <span class="webdev-highlight">Development Lifecycle</span>
                    </h2>
                    <p class="webdev-lead webdev-lead-center">
                        From discovery and prototype wireframing to full-stack code reviews and production launch, every project is delivered on schedule.
                    </p>
                </div>
            </div>

            <div class="row g-3 g-lg-4">
                
                <!-- Stage 1 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="webdev-step-card">
                        <div class="webdev-step-num">01</div>
                        <h3 class="webdev-step-title">Architecture Audit</h3>
                        <p class="webdev-step-desc">Analyzing technical specs, user personas, database schemas, and selecting the optimal technology stack.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="webdev-step-card">
                        <div class="webdev-step-num">02</div>
                        <h3 class="webdev-step-title">Figma UI/UX</h3>
                        <p class="webdev-step-desc">Designing interactive wireframes, custom design systems, and responsive desktop/mobile prototypes.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="webdev-step-card">
                        <div class="webdev-step-num">03</div>
                        <h3 class="webdev-step-title">Full-Stack Sprint</h3>
                        <p class="webdev-step-desc">Coding clean, modular frontend components and robust backend APIs in 2-week agile sprint cycles.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="webdev-step-card">
                        <div class="webdev-step-num">04</div>
                        <h3 class="webdev-step-title">QA &amp; Security</h3>
                        <p class="webdev-step-desc">Executing cross-browser testing, Core Web Vitals speed tuning, penetration tests, and accessibility checks.</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="webdev-step-card">
                        <div class="webdev-step-num">05</div>
                        <h3 class="webdev-step-title">CI/CD Deploy</h3>
                        <p class="webdev-step-desc">Configuring production DNS, cloud SSL certificates, edge caching, and providing 24/7 SLA maintenance support.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: QUALITY COMPARISON (ENGINEERED CODE VS BLOATED THEME BUILDERS)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="webdev-badge">
                        <i class="bi bi-shield-check"></i> Quality Standard
                    </div>
                    <h2 class="webdev-heading">
                        Groveus Engineered Code <span class="webdev-highlight">vs Bloated Templates</span>
                    </h2>
                    <p class="webdev-lead webdev-lead-center">
                        Why generic drag-and-drop themes fail under load, and how our custom engineered software delivers lasting competitive advantages.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <!-- Generic Unsafe Box -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-compare-card webdev-card-unsafe">
                        <span class="webdev-compare-tag webdev-tag-danger">
                            <i class="bi bi-x-circle-fill"></i> Generic Agency / Bloated Theme Builders
                        </span>
                        <h3 class="webdev-compare-heading">Slow, Fragile &amp; Unmaintainable</h3>
                        <ul class="webdev-compare-items">
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Sluggish 5s+ Page Load Times</span>
                                    Overloaded with 50+ third-party plugins and heavy CSS scripts that destroy Google Core Web Vitals.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Vulnerable Spaghetti Code</span>
                                    Unsecured theme patches and outdated plugins prone to database injections and malware attacks.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Zero Custom Scalability</span>
                                    Inability to integrate custom enterprise APIs, complex databases, or multi-tenant user portals.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-x-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Poor Mobile Conversion UX</span>
                                    Broken responsive layouts and clunky forms that frustrate visitors and lose high-value customers.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Groveus Safe Box -->
                <div class="col-12 col-lg-6">
                    <div class="webdev-compare-card webdev-card-safe">
                        <span class="webdev-compare-tag webdev-tag-success">
                            <i class="bi bi-check-circle-fill"></i> The Groveus Engineering Standard
                        </span>
                        <h3 class="webdev-compare-heading">Blazing Fast, Scalable &amp; Secure</h3>
                        <ul class="webdev-compare-items">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Sub-Second Load Times (99+ PageSpeed)</span>
                                    Handcrafted semantic code, minimal asset payloads, and edge CDN distribution for instant loads.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Enterprise Cloud Security &amp; 99.99% Uptime</span>
                                    Built-in SSL, sanitized database queries, Cloudflare DDoS defense, and automated daily backups.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Modular Headless &amp; API Architecture</span>
                                    Custom GraphQL/REST endpoints that seamlessly connect your CRM, payment gateways, and ERP software.
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <div>
                                    <span class="webdev-compare-item-bold">Conversion-Focused Mobile-First UI/UX</span>
                                    Frictionless checkout flows, intuitive navigation, and high-converting layouts driving real revenue.
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
    <!-- =========================================================================
         SECTION 7: WEB DEVELOPMENT FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ========================================================================= -->
    <section class="webdev-section webdev-bg-alt">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="webdev-badge">
                        <i class="bi bi-question-circle-fill"></i> Clear Answers
                    </div>
                    <h2 class="webdev-heading">
                        Web Development <span class="webdev-highlight">FAQs</span>
                    </h2>
                    <p class="webdev-lead webdev-lead-center">
                        Common questions regarding our engineering technology stack, project delivery timelines, and ongoing cloud maintenance.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion webdev-accordion" id="webdevFaqAccordion">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="webdevHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#webdevCollapseOne" aria-expanded="true" aria-controls="webdevCollapseOne">
                                    Do you build custom web applications or use pre-made WordPress themes?
                                </button>
                            </h3>
                            <div id="webdevCollapseOne" class="accordion-collapse collapse show" aria-labelledby="webdevHeadingOne" data-bs-parent="#webdevFaqAccordion">
                                <div class="accordion-body">
                                    We build 100% custom web platforms engineered specifically for your business goals. While we build enterprise WordPress solutions, we develop bespoke Gutenberg blocks and headless API architectures rather than installing slow, bloated third-party themes. For custom web applications and SaaS, we utilize modern frameworks including Next.js, React, TypeScript, Node.js, and Laravel.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="webdevHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webdevCollapseTwo" aria-expanded="false" aria-controls="webdevCollapseTwo">
                                    How do you ensure sub-second page load speeds and 99+ Core Web Vitals?
                                </button>
                            </h3>
                            <div id="webdevCollapseTwo" class="accordion-collapse collapse" aria-labelledby="webdevHeadingTwo" data-bs-parent="#webdevFaqAccordion">
                                <div class="accordion-body">
                                    Speed is built into our core engineering workflow. We employ server-side rendering (SSR), critical CSS inlining, automated WebP/AVIF image transcoding, minimal DOM depth, Redis caching, and global edge CDN caching. Every single line of code is optimized to pass Google Core Web Vitals (LCP &lt; 1.2s, CLS &lt; 0.05, INP &lt; 50ms).
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="webdevHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webdevCollapseThree" aria-expanded="false" aria-controls="webdevCollapseThree">
                                    Who owns the source code and Intellectual Property (IP) once the project is finished?
                                </button>
                            </h3>
                            <div id="webdevCollapseThree" class="accordion-collapse collapse" aria-labelledby="webdevHeadingThree" data-bs-parent="#webdevFaqAccordion">
                                <div class="accordion-body">
                                    You have 100% full ownership of all source code, design assets, database repositories, and deployment configurations upon project completion. We transfer complete GitHub repository access, cloud credentials, and technical documentation with zero vendor lock-in.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="webdevHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webdevCollapseFour" aria-expanded="false" aria-controls="webdevCollapseFour">
                                    Do you provide post-launch maintenance, cloud monitoring, and security SLA support?
                                </button>
                            </h3>
                            <div id="webdevCollapseFour" class="accordion-collapse collapse" aria-labelledby="webdevHeadingFour" data-bs-parent="#webdevFaqAccordion">
                                <div class="accordion-body">
                                    Yes. We provide comprehensive post-launch SLA support packages including 24/7 server uptime monitoring, automated security patches, cloud database backups, feature enhancements, and continuous Core Web Vitals performance tuning to keep your web platform operating at peak efficiency.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
