<section class="seo-hero-slider py-3 py-lg-4 position-relative overflow-hidden" itemscope itemtype="https://schema.org/WPHeader">

  <!-- Ambient Studio Lighting & Energy Network Canvas -->
  <div class="seo-hero-bg-network" aria-hidden="true">
    <svg class="seo-bg-svg" viewBox="0 0 1920 980" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
      <defs>
        <!-- Primary Fiery Central Hotspot Glow -->
        <radialGradient id="heroCoreGlow" cx="62%" cy="40%" r="48%" fx="62%" fy="40%">
          <stop offset="0%" stop-color="#ff4a19" stop-opacity="0.38" />
          <stop offset="25%" stop-color="#e62d05" stop-opacity="0.22" />
          <stop offset="55%" stop-color="#801200" stop-opacity="0.08" />
          <stop offset="100%" stop-color="#06070a" stop-opacity="0" />
        </radialGradient>

        <!-- Right Side Ambient Glow -->
        <radialGradient id="heroRightGlow" cx="92%" cy="30%" r="38%">
          <stop offset="0%" stop-color="#ff6024" stop-opacity="0.22" />
          <stop offset="60%" stop-color="#06070a" stop-opacity="0" />
        </radialGradient>

        <!-- Bottom Studio Surface Reflection Glow -->
        <radialGradient id="heroFloorGlow" cx="68%" cy="92%" r="40%">
          <stop offset="0%" stop-color="#ff3e14" stop-opacity="0.35" />
          <stop offset="35%" stop-color="#cc2500" stop-opacity="0.14" />
          <stop offset="80%" stop-color="#06070a" stop-opacity="0" />
        </radialGradient>

        <!-- Multi-stage Laser Beam Gradient -->
        <linearGradient id="laserBeamMultiGrad" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#ff3314" stop-opacity="0.2" />
          <stop offset="20%" stop-color="#ff4a1c" stop-opacity="0.85" />
          <stop offset="55%" stop-color="#ff752e" stop-opacity="1" />
          <stop offset="85%" stop-color="#ffa652" stop-opacity="1" />
          <stop offset="100%" stop-color="#ffffff" stop-opacity="1" />
        </linearGradient>

        <!-- Laser Reflection Gradient on Floor -->
        <linearGradient id="laserFloorReflectGrad" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#ff3314" stop-opacity="0.0" />
          <stop offset="30%" stop-color="#ff4a19" stop-opacity="0.3" />
          <stop offset="70%" stop-color="#ff7026" stop-opacity="0.4" />
          <stop offset="100%" stop-color="#ffa652" stop-opacity="0.1" />
        </linearGradient>

        <!-- Refined Neon Light Filters -->
        <filter id="intenseLaserGlow" x="-60%" y="-60%" width="220%" height="220%">
          <feGaussianBlur stdDeviation="5" result="blur1" />
          <feGaussianBlur stdDeviation="1.5" result="blur2" />
          <feMerge>
            <feMergeNode in="blur1" />
            <feMergeNode in="blur2" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>

        <filter id="beaconNodeGlow" x="-80%" y="-80%" width="260%" height="260%">
          <feGaussianBlur stdDeviation="4" result="glow1" />
          <feMerge>
            <feMergeNode in="glow1" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
      </defs>

      <!-- Deep Charcoal Studio Ground -->
      <rect width="1920" height="980" fill="#06070a" />
      <rect width="1920" height="980" fill="url(#heroCoreGlow)" />
      <rect width="1920" height="980" fill="url(#heroRightGlow)" />
      <rect width="1920" height="980" fill="url(#heroFloorGlow)" />

      <!-- Isometric Studio Floor Grid -->
      <g opacity="0.16" stroke="#ff4a19" stroke-width="0.8">
        <line x1="520" y1="780" x2="1920" y2="780" />
        <line x1="450" y1="835" x2="1920" y2="835" />
        <line x1="370" y1="895" x2="1920" y2="895" />
        <line x1="280" y1="960" x2="1920" y2="960" />

        <line x1="1280" y1="620" x2="350" y2="980" />
        <line x1="1280" y1="620" x2="680" y2="980" />
        <line x1="1280" y1="620" x2="1020" y2="980" />
        <line x1="1280" y1="620" x2="1350" y2="980" />
        <line x1="1280" y1="620" x2="1680" y2="980" />
        <line x1="1280" y1="620" x2="1950" y2="980" />
      </g>
    </svg>
  </div>

  <div class="container-fluid px-3 px-md-5 position-relative z-2">
    <div class="row align-items-center hero-content-row gy-4 gy-lg-5">
      
      <!-- =========================================================
           LEFT COLUMN: Main SEO Heading, Paragraph & CTA
           ========================================================= -->
      <div class="col-12 col-xl-5 col-lg-5 hero-left-col pe-xl-4">
        
        <!-- Eyebrow Subtitle with Horizontal Trail Line -->
        <div class="hero-eyebrow-badge mb-3" itemprop="headline">
          <span>SEO THAT DRIVES REAL GROWTH</span>
        </div>

        <!-- Main Heading -->
        <h1 class="hero-main-heading mb-3" itemprop="name">
          Higher Visibility<br>
          <span class="hero-gradient-text">Real Results</span>
        </h1>

        <!-- Lead Paragraph Description -->
        <p class="hero-subtext mb-4" itemprop="description">
          We help your business get found, attract the right audience and grow with powerful SEO strategies.
        </p>

        <!-- CTA Action Buttons Group -->
        <div class="hero-cta-group d-flex align-items-center flex-wrap gap-3 mb-4 mb-lg-5">
          
          <!-- Primary Pill Button (Grow Your Business) -->
          <a href="<?= site_url('contact-us') ?>" class="hero-btn-primary d-inline-flex align-items-center gap-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <span class="hero-btn-label">Grow Your Business</span>
            <span class="hero-btn-arrow-circle">
              <svg viewBox="0 0 16 16" width="13" height="13" fill="currentColor">
                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
              </svg>
            </span>
          </a>

        </div>

        <!-- Metric Counter Stats Strip (Desktop View Inside Left Col) -->
        <div class="hero-stats-strip d-none d-lg-flex align-items-center pt-2">
          
          <!-- Stat 1 -->
          <div class="hero-stat-box">
            <div class="hero-stat-number">10K+</div>
            <div class="hero-stat-label">Keywords Ranked</div>
          </div>

          <div class="hero-stat-divider"></div>

          <!-- Stat 2 -->
          <div class="hero-stat-box">
            <div class="hero-stat-number">3X</div>
            <div class="hero-stat-label">Average Traffic Growth</div>
          </div>

          <div class="hero-stat-divider"></div>

          <!-- Stat 3 -->
          <div class="hero-stat-box">
            <div class="hero-stat-number">97%</div>
            <div class="hero-stat-label">Client Satisfaction</div>
          </div>

        </div>

      </div>


      <!-- =========================================================
           RIGHT COLUMN: 3D Studio Showcase, Synapses & Analytics HUD
           ========================================================= -->
      <div class="col-12 col-xl-7 col-lg-7 hero-right-col">
        <div class="hero-showcase-stage position-relative">

          <!-- Fiber Optic Glowing Curves (Behind Badges to Screen Hub) -->
          <svg class="hero-fiber-optic-svg" viewBox="0 0 320 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <linearGradient id="fiberLineGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#ffffff" stop-opacity="0.2"/>
                <stop offset="25%" stop-color="#ff4416" stop-opacity="0.8"/>
                <stop offset="80%" stop-color="#ff7a30" stop-opacity="0.95"/>
                <stop offset="100%" stop-color="#ffa552" stop-opacity="1"/>
              </linearGradient>

              <linearGradient id="fiberLineGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#ffffff" stop-opacity="0.15"/>
                <stop offset="35%" stop-color="#e62e05" stop-opacity="0.75"/>
                <stop offset="85%" stop-color="#ff6a24" stop-opacity="0.95"/>
                <stop offset="100%" stop-color="#ff9442" stop-opacity="1"/>
              </linearGradient>
            </defs>

            <!-- 5 Glowing Fiber Optic Primary Beziers -->
            <path d="M 120 48 C 150 48, 175 105, 195 130" stroke="url(#fiberLineGrad1)" stroke-width="2" filter="url(#intenseLaserGlow)" />
            <path d="M 126 90 C 152 90, 178 118, 195 134" stroke="url(#fiberLineGrad1)" stroke-width="2.2" filter="url(#intenseLaserGlow)" />
            <path d="M 132 135 C 158 135, 180 137, 195 138" stroke="url(#fiberLineGrad1)" stroke-width="2.6" filter="url(#intenseLaserGlow)" />
            <path d="M 126 180 C 152 180, 178 158, 195 142" stroke="url(#fiberLineGrad2)" stroke-width="2.2" filter="url(#intenseLaserGlow)" />
            <path d="M 120 225 C 150 225, 175 178, 195 146" stroke="url(#fiberLineGrad2)" stroke-width="2" filter="url(#intenseLaserGlow)" />

            <!-- Secondary Finer Synapse Strands -->
            <path d="M 120 48 C 145 60, 168 115, 195 130" stroke="#ff7a30" stroke-width="0.9" opacity="0.6" />
            <path d="M 126 90 C 148 100, 172 125, 195 134" stroke="#ffa552" stroke-width="1" opacity="0.7" />
            <path d="M 126 180 C 148 170, 172 150, 195 142" stroke="#ffa552" stroke-width="1" opacity="0.7" />
            <path d="M 120 225 C 145 210, 168 165, 195 146" stroke="#ff7a30" stroke-width="0.9" opacity="0.6" />

            <!-- Fiery Luminous Node Behind Monitor Bezel -->
            <circle cx="195" cy="138" r="12" fill="#ff4a19" opacity="0.4" filter="url(#intenseLaserGlow)" />
            <circle cx="195" cy="138" r="6" fill="#ffa652" filter="url(#intenseLaserGlow)" />
            <circle cx="195" cy="138" r="2.5" fill="#ffffff" />
          </svg>

          <!-- 1. Search Query Synapse Pills (Left Column) -->
          <div class="hero-search-synapses-wrap d-flex flex-column gap-3">
            
            <div class="search-synapse-pill synapse-1">
              <span class="search-pill-icon"><i class="bi bi-search"></i></span>
              <span class="search-pill-text">Business Growth</span>
            </div>

            <div class="search-synapse-pill synapse-2">
              <span class="search-pill-icon"><i class="bi bi-search"></i></span>
              <span class="search-pill-text">Digital Solution</span>
            </div>

            <div class="search-synapse-pill synapse-3">
              <span class="search-pill-icon"><i class="bi bi-search"></i></span>
              <span class="search-pill-text">SEO Services</span>
            </div>

            <div class="search-synapse-pill synapse-4">
              <span class="search-pill-icon"><i class="bi bi-search"></i></span>
              <span class="search-pill-text">Web Design</span>
            </div>

            <div class="search-synapse-pill synapse-5">
              <span class="search-pill-icon"><i class="bi bi-search"></i></span>
              <span class="search-pill-text">Marketing Strategy</span>
            </div>

          </div>


          <!-- 2. Central 3D Device Screen Presentation -->
          <div class="hero-main-device-wrapper">
            <div class="hero-main-device-frame">
              
              <!-- Screen Header Bar -->
              <div class="device-screen-topbar d-flex align-items-center justify-content-between px-3 py-2">
                <div class="d-flex align-items-center gap-2">
                  <span class="device-brand-logo">
                    <svg viewBox="0 0 16 16" width="12" height="12" fill="#ff4d20">
                      <polygon points="8,1 15,14 1,14" />
                    </svg>
                  </span>
                  <span class="device-brand-name">Your Website</span>
                </div>
                <div class="device-window-controls d-flex align-items-center gap-1">
                  <span class="device-ctrl-dot"></span>
                  <span class="device-ctrl-dot"></span>
                  <span class="device-ctrl-dot"></span>
                </div>
              </div>

              <!-- Inner Screen UI Body -->
              <div class="device-screen-inner">
                
                <!-- Realistic Scenic Landscape Art in Screen Background -->
                <div class="device-screen-art-bg" aria-hidden="true">
                  <svg viewBox="0 0 600 340" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" class="screen-art-svg">
                    <defs>
                      <linearGradient id="skyGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#090d14" />
                        <stop offset="60%" stop-color="#121824" />
                        <stop offset="100%" stop-color="#1a2334" />
                      </linearGradient>
                      <linearGradient id="mountainGrad1" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#1f293d" />
                        <stop offset="100%" stop-color="#0b0f17" />
                      </linearGradient>
                      <linearGradient id="mountainGrad2" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#161e2e" />
                        <stop offset="100%" stop-color="#080a10" />
                      </linearGradient>
                    </defs>

                    <rect width="600" height="340" fill="url(#skyGrad)" />

                    <!-- Background Mountains with atmospheric light -->
                    <path d="M0 340 L80 180 L160 230 L280 110 L380 210 L480 120 L600 220 L600 340 Z" fill="url(#mountainGrad1)" />
                    <!-- Foreground Mountains -->
                    <path d="M40 340 L170 190 L260 250 L390 135 L490 225 L600 150 L600 340 Z" fill="url(#mountainGrad2)" />
                    <!-- Mist overlay -->
                    <rect y="220" width="600" height="120" fill="url(#skyGrad)" opacity="0.65" />
                  </svg>
                </div>

                <!-- Screen Headline & Button Overlay -->
                <div class="device-screen-content position-relative z-2">
                  <div class="device-screen-heading mb-3" role="presentation">
                    Digital Solutions<br>
                    <span>for a Better Tomorrow</span>
                  </div>
                  
                  <a href="<?= site_url('services') ?>" class="device-screen-cta d-inline-flex align-items-center gap-2 text-decoration-none">
                    <span>Explore</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>

                  <!-- Mini Screen Feature Pods on Device -->
                  <div class="device-screen-pods d-flex gap-2">
                    <div class="device-mini-pod">
                      <div class="mini-pod-avatar"><i class="bi bi-person-fill"></i></div>
                      <div class="mini-pod-lines">
                        <span class="mini-line-1"></span>
                        <span class="mini-line-2"></span>
                      </div>
                    </div>
                    <div class="device-mini-pod">
                      <div class="mini-pod-avatar"><i class="bi bi-geo-alt-fill"></i></div>
                      <div class="mini-pod-lines">
                        <span class="mini-line-1"></span>
                        <span class="mini-line-2"></span>
                      </div>
                    </div>
                    <div class="device-mini-pod">
                      <div class="mini-pod-avatar"><i class="bi bi-credit-card-2-front-fill"></i></div>
                      <div class="mini-pod-lines">
                        <span class="mini-line-1"></span>
                        <span class="mini-line-2"></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>


          <!-- 3. Floating HUD Analytics Metric Cards (Right) -->
          <div class="hero-floating-metrics-group d-flex flex-column gap-3">
            
            <!-- Metric 1: Organic Traffic +278% -->
            <div class="metric-hud-card hud-card-1">
              <div class="hud-card-header d-flex align-items-center justify-content-between mb-1">
                <span class="hud-label">Organic Traffic</span>
                <span class="hud-more-dots">&bull;&bull;&bull;</span>
              </div>
              <div class="hud-metric-value">+278%</div>
              <div class="hud-chart-wrap">
                <svg viewBox="0 0 160 52" fill="none" class="hud-chart-svg" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient id="sparkGradOrganic" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#ff4a19" stop-opacity="0.6" />
                      <stop offset="50%" stop-color="#e62d05" stop-opacity="0.25" />
                      <stop offset="100%" stop-color="#801200" stop-opacity="0.0" />
                    </linearGradient>
                  </defs>
                  
                  <!-- Translucent Fiery Gradient Area Fill -->
                  <path d="M 0 50 C 15 48, 25 48, 35 46 C 45 44, 52 46, 62 42 C 72 38, 80 41, 92 35 C 105 28, 118 31, 130 20 C 140 12, 148 7, 154 3 L 154 52 L 0 52 Z" fill="url(#sparkGradOrganic)" />
                  
                  <!-- Glowing Orange Neon Trend Line with ripples -->
                  <path d="M 0 50 C 15 48, 25 48, 35 46 C 45 44, 52 46, 62 42 C 72 38, 80 41, 92 35 C 105 28, 118 31, 130 20 C 140 12, 148 7, 154 3" stroke="#ff4a19" stroke-width="2.6" stroke-linecap="round" filter="url(#intenseLaserGlow)" opacity="0.85" />
                  <path d="M 0 50 C 15 48, 25 48, 35 46 C 45 44, 52 46, 62 42 C 72 38, 80 41, 92 35 C 105 28, 118 31, 130 20 C 140 12, 148 7, 154 3" stroke="#ff722a" stroke-width="2.2" stroke-linecap="round" />
                  
                  <!-- Tiny Glowing Arrowhead at top right -->
                  <polygon points="144,3 155,2 154,13" fill="#ff4a19" />
                  <polygon points="146,4 154,3 153,11" fill="#ffffff" />
                </svg>
              </div>
            </div>

            <!-- Metric 2: Search Visibility +185% -->
            <div class="metric-hud-card hud-card-2">
              <div class="hud-card-header d-flex align-items-center justify-content-between">
                <span class="hud-label">Search Visibility</span>
                <span class="hud-more-dots">&bull;&bull;&bull;</span>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-1">
                <div class="hud-metric-value">+185%</div>
                <!-- Glowing Orange Bar Chart -->
                <div class="hud-bars-wrap d-flex align-items-end gap-1">
                  <span class="hud-bar bar-1"></span>
                  <span class="hud-bar bar-2"></span>
                  <span class="hud-bar bar-3"></span>
                  <span class="hud-bar bar-4"></span>
                </div>
              </div>
            </div>

            <!-- Metric 3: Conversions +121% -->
            <div class="metric-hud-card hud-card-3">
              <div class="hud-card-header d-flex align-items-center justify-content-between">
                <span class="hud-label">Conversions</span>
                <span class="hud-more-dots">&bull;&bull;&bull;</span>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <div class="hud-metric-value">+121%</div>
                <div class="hud-wave-indicator">
                  <svg viewBox="0 0 60 24" width="60" height="24" fill="none">
                    <path d="M0 18 Q15 22 30 12 T60 6" stroke="#ff4a1c" stroke-width="2.4" stroke-linecap="round" />
                  </svg>
                </div>
              </div>
            </div>

          </div>


          <!-- =========================================================
               4. BOTTOM 3D STEPPED PEDESTAL RACK & EXACT CURVEY S-WAVE LASER
               ========================================================= -->
          <div class="hero-bottom-milestones-stage position-absolute">
            
            <!-- Dark 3D Pedestal Stand Bar underneath cards -->
            <div class="milestones-pedestal-bar" aria-hidden="true"></div>

            <!-- Continuous Curvey S-Wave Glowing Laser Beam Lower Across Cards -->
            <svg class="milestone-laser-svg" viewBox="0 0 680 180" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
              
              <!-- Soft Laser Floor Reflection Glow (Light subtle aura) -->
              <path d="M 0 155 C 25 160, 40 154, 55 150 C 95 146, 130 148, 170 142 C 215 136, 250 138, 285 130 C 330 122, 365 124, 400 118 C 445 112, 480 110, 515 100 C 555 92, 595 68, 635 32" 
                    stroke="url(#laserFloorReflectGrad)" 
                    stroke-width="5" 
                    stroke-linecap="round" 
                    opacity="0.35" />

              <!-- Luminous Neon Amber Aura -->
              <path d="M 0 155 C 25 160, 40 154, 55 150 C 95 146, 130 148, 170 142 C 215 136, 250 138, 285 130 C 330 122, 365 124, 400 118 C 445 112, 480 110, 515 100 C 555 92, 595 68, 635 32" 
                    stroke="#ff5a24" 
                    stroke-width="2.6" 
                    stroke-linecap="round" 
                    filter="url(#intenseLaserGlow)" 
                    opacity="0.7" />

              <!-- Core Sleek High-Brightness Laser Thread -->
              <path d="M 0 155 C 25 160, 40 154, 55 150 C 95 146, 130 148, 170 142 C 215 136, 250 138, 285 130 C 330 122, 365 124, 400 118 C 445 112, 480 110, 515 100 C 555 92, 595 68, 635 32" 
                    stroke="url(#laserBeamMultiGrad)" 
                    stroke-width="1.6" 
                    stroke-linecap="round" />

              <!-- Glowing Rocket Arrow Head -->
              <g filter="url(#intenseLaserGlow)">
                <path d="M 616 33 L 635 32 L 633 51" stroke="#ff6426" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M 616 33 L 635 32 L 633 51" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </g>

              <!-- Glowing Circular Node Beacons -->
              <g filter="url(#beaconNodeGlow)">
                <!-- Beacon 1: Search -->
                <circle cx="55" cy="150" r="4.2" fill="#ff6424" />
                <!-- Beacon 2: Keywords -->
                <circle cx="170" cy="142" r="4.2" fill="#ff6424" />
                <!-- Beacon 3: Optimization -->
                <circle cx="285" cy="130" r="4.4" fill="#ff6424" />
                <!-- Beacon 4: Visibility -->
                <circle cx="400" cy="118" r="4.6" fill="#ff6424" />
                <!-- Beacon 5: Organic Traffic -->
                <circle cx="515" cy="100" r="5" fill="#ff6424" />
              </g>

              <!-- Pure White Center Dots -->
              <circle cx="55" cy="150" r="1.8" fill="#ffffff" />
              <circle cx="170" cy="142" r="1.8" fill="#ffffff" />
              <circle cx="285" cy="130" r="1.9" fill="#ffffff" />
              <circle cx="400" cy="118" r="1.9" fill="#ffffff" />
              <circle cx="515" cy="100" r="2.1" fill="#ffffff" />
            </svg>

            <!-- 6 Stepped Hardware Acrylic Cards -->
            <div class="milestones-cards-wrapper d-flex align-items-end justify-content-between">
              
              <!-- Card 1: Search (Shortest) -->
              <div class="milestone-card milestone-1">
                <div class="milestone-top-info">
                  <div class="milestone-icon"><i class="bi bi-search"></i></div>
                  <div class="milestone-name">Search</div>
                </div>
              </div>

              <!-- Card 2: Keywords (Taller) -->
              <div class="milestone-card milestone-2">
                <div class="milestone-top-info">
                  <div class="milestone-icon">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                      <rect x="3" y="12" width="4" height="9" rx="1.5" />
                      <rect x="10" y="7" width="4" height="14" rx="1.5" />
                      <rect x="17" y="3" width="4" height="18" rx="1.5" />
                    </svg>
                  </div>
                  <div class="milestone-name">Keywords</div>
                </div>
              </div>

              <!-- Card 3: Optimization (Taller) -->
              <div class="milestone-card milestone-3">
                <div class="milestone-top-info">
                  <div class="milestone-icon"><i class="bi bi-gear-wide-connected"></i></div>
                  <div class="milestone-name">Optimization</div>
                </div>
              </div>

              <!-- Card 4: Visibility (Taller) -->
              <div class="milestone-card milestone-4">
                <div class="milestone-top-info">
                  <div class="milestone-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                      <circle cx="12" cy="12" r="3" />
                    </svg>
                  </div>
                  <div class="milestone-name">Visibility</div>
                </div>
              </div>

              <!-- Card 5: Organic Traffic (Taller) -->
              <div class="milestone-card milestone-5">
                <div class="milestone-top-info">
                  <div class="milestone-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 3c-1.1 0-2 .9-2 2 0 1.6 1.4 3 2 4 .6-1 2-2.4 2-4 0-1.1-.9-2-2-2zm-5 6c-1.1 0-2 .9-2 2 0 1.6 1.4 3 2 4 .6-1 2-2.4 2-4 0-1.1-.9-2-2-2zm10 0c-1.1 0-2 .9-2 2 0 1.6 1.4 3 2 4 .6-1 2-2.4 2-4 0-1.1-.9-2-2-2zM4 17v2h16v-2c0-2.2-3.6-3.5-8-3.5s-8 1.3-8 3.5z"/>
                    </svg>
                  </div>
                  <div class="milestone-name">Organic Traffic</div>
                </div>
              </div>

              <!-- Card 6: Growth (Hero Tallest Card with Trending Icon in lower section) -->
              <div class="milestone-card milestone-growth">
                <div class="milestone-growth-bottom-info">
                  <div class="milestone-growth-icon">
                    <svg viewBox="0 0 40 40" width="46" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <!-- 3 Stepped Solid White Bars -->
                      <rect x="4" y="20" width="7.5" height="16" rx="2" fill="#ffffff" />
                      <rect x="15.5" y="13" width="7.5" height="23" rx="2" fill="#ffffff" />
                      <rect x="27" y="7" width="7.5" height="29" rx="2" fill="#ffffff" />
                      
                      <!-- Fiery Red-Orange Stepped Upward Trend Line -->
                      <path d="M 3 15 Q 8 11 12 7 Q 17 11 20 6 L 31 3" stroke="#ff4a19" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" />
                      
                      <!-- Solid Fiery Arrow Head -->
                      <polygon points="23,2 35,1 35,13" fill="#ff4a19" />
                    </svg>
                  </div>
                  <div class="milestone-name">Growth</div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>

      <!-- Metric Counter Stats Strip (Mobile View Underneath 3D Visual) -->
      <div class="col-12 d-flex d-lg-none hero-stats-mobile-row">
        <div class="hero-stats-strip w-100 d-flex align-items-center justify-content-between pt-3">
          
          <!-- Stat 1 -->
          <div class="hero-stat-box text-center">
            <div class="hero-stat-number">10K+</div>
            <div class="hero-stat-label">Keywords Ranked</div>
          </div>

          <div class="hero-stat-divider"></div>

          <!-- Stat 2 -->
          <div class="hero-stat-box text-center">
            <div class="hero-stat-number">3X</div>
            <div class="hero-stat-label">Average Traffic Growth</div>
          </div>

          <div class="hero-stat-divider"></div>

          <!-- Stat 3 -->
          <div class="hero-stat-box text-center">
            <div class="hero-stat-number">97%</div>
            <div class="hero-stat-label">Client Satisfaction</div>
          </div>

        </div>
      </div>

    </div>
  </div>

</section>
