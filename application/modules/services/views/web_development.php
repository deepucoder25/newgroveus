<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Web Design & Development Vector Artwork SVG
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

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Web Design & Development']
    ],
    'title' => 'Web Design & <span class="text-danger-highlight">Development</span>',
    'description' => 'Crafting fast, responsive, and high-converting custom websites tailored to your brand. From corporate websites to advanced web applications, we engineer scalable digital solutions.',
    'cta_text' => 'Build Your Website',
    'cta_icon' => 'bi bi-arrow-right',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-phone',
            'title' => '100% Responsive',
            'subtitle' => 'Mobile-First Design'
        ],
        [
            'icon' => 'bi bi-lightning-charge',
            'title' => 'Ultra Fast Speed',
            'subtitle' => 'Sub-Second Load Times'
        ]
    ],
    'svg' => $web_development_svg
]); ?>

<!-- 3. Web Design & Development Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Custom, Fast, and High-Converting Digital Web Solutions</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Your website is the digital front door to your business. We design and build modern, mobile-first, and lightning-fast web applications engineered to captivate visitors, maximize conversion rates, and seamlessly scale alongside your commercial growth.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Modern UI/UX Design</h5>
                                <p class="small text-muted mb-0">Intuitive user journeys, responsive layouts, and interactive interfaces crafted to engage and convert.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Full-Stack Development</h5>
                                <p class="small text-muted mb-0">Robust backend architectures, headless CMS integrations, and high-performance custom frontend applications.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Speed & Technical SEO</h5>
                                <p class="small text-muted mb-0">Optimized for Core Web Vitals, sub-second load speeds, clean schema markup, and search crawlability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
