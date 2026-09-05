<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';
?>

<!-- ========================================================================= -->
<!-- DYNAMIC 3-IN-1 PROCESS WORKFLOW WIDGET (SEO, WEB DESIGN, DIGITAL MARKETING) -->
<!-- ========================================================================= -->
<section class="seo-process-section py-5 position-relative" id="seoProcessSection" itemscope itemtype="https://schema.org/HowTo" aria-label="Our Methodologies & Processes">
    
    <div class="container py-2 py-lg-4">
        
        <!-- Section Header with Dynamic Text & 3 Interactive Switcher Buttons -->
        <header class="wl-header text-center mb-4 mb-md-5">
            
            <!-- Dynamic Header Info Block -->
            <div id="processHeaderMeta" class="mb-4">
                <!-- SEO Header (Default) -->
                <div class="process-header-content active" id="procHead_seo">
                    <div class="wl-badge-pill mb-2">
                        <i class="bi bi-patch-check-fill me-1" aria-hidden="true"></i> SEO Process &amp; Methodology
                    </div>
                    <h2 class="wl-main-title text-uppercase">
                        Our 5-Step Canadian SEO Process
                    </h2>
                    <p class="wl-main-subtitle mx-auto">
                        A data-driven, battle-tested methodology engineered to dominate Canadian search engines (Google.ca &amp; Bing) with sustainable top-tier rankings.
                    </p>
                </div>

                <!-- Web Design Header -->
                <div class="process-header-content" id="procHead_web">
                    <div class="wl-badge-pill wl-badge-pill-web mb-2">
                        <i class="bi bi-laptop me-1" aria-hidden="true"></i> Website Designing Process
                    </div>
                    <h2 class="wl-main-title text-uppercase">
                        Our 5-Step Website Designing Process
                    </h2>
                    <p class="wl-main-subtitle mx-auto">
                        A creative and strategic approach to build modern, responsive, and user-friendly websites that deliver real results.
                    </p>
                </div>

                <!-- Digital Marketing Header -->
                <div class="process-header-content" id="procHead_digital">
                    <div class="wl-badge-pill wl-badge-pill-digital mb-2">
                        <i class="bi bi-megaphone-fill me-1" aria-hidden="true"></i> Digital Marketing Process
                    </div>
                    <h2 class="wl-main-title text-uppercase">
                        Our 5-Step Digital Marketing Process
                    </h2>
                    <p class="wl-main-subtitle mx-auto">
                        A result-driven approach to grow your brand online, generate quality leads, and maximize your ROI.
                    </p>
                </div>
            </div>

            <!-- 3 Process Switcher Buttons (Positioned below Subtitle) -->
            <div class="process-switcher-tabs d-inline-flex flex-wrap justify-content-center gap-2 p-1 p-sm-2 rounded-pill shadow-sm">
                <button type="button" class="process-tab-btn active" data-process="seo" id="procTabSeo">
                    <i class="bi bi-search me-1"></i> SEO Process
                </button>
                <button type="button" class="process-tab-btn" data-process="web" id="procTabWeb">
                    <i class="bi bi-laptop me-1"></i> Website Design Process
                </button>
                <button type="button" class="process-tab-btn" data-process="digital" id="procTabDigital">
                    <i class="bi bi-megaphone-fill me-1"></i> Digital Marketing Process
                </button>
            </div>

        </header>

        <!-- Main Process Infographic Stage in Container -->
        <div class="seo-infographic-card mx-auto position-relative">
            
            <!-- 3D Circuit & Cylindrical Center Spine (Bottom -> Left -> Top -> Arrow) -->
            <svg class="seo-circuit-svg" viewBox="0 0 1000 1000" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <defs>
                    <filter id="spineDropShadow" x="-30%" y="-10%" width="160%" height="120%">
                        <feDropShadow dx="2" dy="3" stdDeviation="3" flood-color="#0f172a" flood-opacity="0.25"/>
                    </filter>
                </defs>
                <!-- Grey Dashed Loop Circuit -->
                <path d="M 500 970 L 25 970 L 25 25 L 500 25 L 500 45" stroke="#cbd5e1" stroke-width="7" stroke-dasharray="14 14" stroke-linecap="square" vector-effect="non-scaling-stroke"/>
                
                <!-- 3D Downward Top Arrow -->
                <g filter="url(#spineDropShadow)">
                    <polygon points="484,40 516,40 500,75" fill="#334155"/>
                    <path d="M486 42 L514 42" stroke="#94a3b8" stroke-width="2" opacity="0.8"/>
                </g>
                
                <!-- 3D Central Cylindrical Spine -->
                <line x1="500" y1="72" x2="500" y2="970" stroke="#1e293b" stroke-width="8" vector-effect="non-scaling-stroke" filter="url(#spineDropShadow)"/>
                
                <!-- 3D Bottom Concentric Terminal Ring -->
                <g filter="url(#spineDropShadow)">
                    <circle cx="500" cy="965" r="14" fill="#ffffff" stroke="#1e293b" stroke-width="4.5" vector-effect="non-scaling-stroke"/>
                    <circle cx="500" cy="965" r="6.5" fill="#1e293b" vector-effect="non-scaling-stroke"/>
                </g>
            </svg>

            <!-- ========================================================= -->
            <!-- PANE 1: SEO PROCESS WORKFLOW                              -->
            <!-- ========================================================= -->
            <div class="process-pane active" id="procPane_seo">
                <div class="seo-steps-container position-relative">
                    
                    <!-- STEP 01: TECHNICAL AUDIT -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">TECHNICAL AUDIT</h3>
                                    <p class="seo-step-desc m-0">
                                        A thorough website audit is done to determine the current state of the website, including Canadian geo-location signals, crawl architecture, Core Web Vitals, mobile UX performance, server response times, indexing health, and schema hierarchy.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <svg class="seo-step-svg" width="399" height="194" viewBox="0 0 399 194" xmlns="http://www.w3.org/2000/svg">
                                      <defs>
                                        <!-- SHADOWS -->
                                        <filter id="shadow" x="-30%" y="-30%" width="160%" height="180%">
                                          <feDropShadow dx="0" dy="5" stdDeviation="4" flood-color="#000000" flood-opacity="0.25"/>
                                        </filter>
                                        <filter id="softShadow" x="-30%" y="-30%" width="160%" height="180%">
                                          <feGaussianBlur stdDeviation="4"/>
                                        </filter>

                                        <!-- PENCIL GRADIENTS -->
                                        <linearGradient id="pencilBody" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#FFD52A"/>
                                          <stop offset="45%" stop-color="#FFB900"/>
                                          <stop offset="100%" stop-color="#E99A00"/>
                                        </linearGradient>
                                        <linearGradient id="pencilHighlight" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#FFF27A"/>
                                          <stop offset="100%" stop-color="#FFC000" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="eraser" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#FF4D71"/>
                                          <stop offset="45%" stop-color="#F0184B"/>
                                          <stop offset="100%" stop-color="#C90D39"/>
                                        </linearGradient>
                                        <linearGradient id="metal" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#DCE6EE"/>
                                          <stop offset="35%" stop-color="#8C9EAD"/>
                                          <stop offset="60%" stop-color="#EAF1F5"/>
                                          <stop offset="100%" stop-color="#667784"/>
                                        </linearGradient>
                                        <linearGradient id="wood" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#D9E0E5"/>
                                          <stop offset="100%" stop-color="#84929D"/>
                                        </linearGradient>

                                        <!-- RULER GRADIENT -->
                                        <linearGradient id="rulerBody" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#FF7A16"/>
                                          <stop offset="45%" stop-color="#FF5A00"/>
                                          <stop offset="100%" stop-color="#D83E00"/>
                                        </linearGradient>
                                        <linearGradient id="rulerHighlight" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#FFB06B"/>
                                          <stop offset="100%" stop-color="#FF6A00" stop-opacity="0"/>
                                        </linearGradient>

                                        <!-- BORDER GRADIENT -->
                                        <linearGradient id="borderOrange" x1="0" y1="0" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#FF6A00"/>
                                          <stop offset="50%" stop-color="#FF4E00"/>
                                          <stop offset="100%" stop-color="#FF6A00"/>
                                        </linearGradient>
                                      </defs>

                                      <!-- OUTER 3D DASHED FRAME -->
                                      <rect x="34" y="22" width="330" height="126" rx="3" fill="none" stroke="#000" stroke-opacity="0.08" stroke-width="7" filter="url(#softShadow)"/>
                                      <rect x="33" y="22" width="330" height="126" rx="3" fill="none" stroke="url(#borderOrange)" stroke-width="4" stroke-dasharray="10 7"/>

                                      <!-- 3D ORANGE NODES -->
                                      <g filter="url(#shadow)">
                                        <circle cx="33" cy="22" r="8" fill="#FF6400"/>
                                        <circle cx="31" cy="20" r="4" fill="#FF9A42" opacity="0.8"/>
                                      </g>
                                      <g filter="url(#shadow)">
                                        <circle cx="363" cy="22" r="8" fill="#FF6400"/>
                                        <circle cx="361" cy="20" r="4" fill="#FF9A42" opacity="0.8"/>
                                      </g>
                                      <g filter="url(#shadow)">
                                        <circle cx="33" cy="148" r="8" fill="#FF6400"/>
                                        <circle cx="31" cy="146" r="4" fill="#FF9A42" opacity="0.8"/>
                                      </g>
                                      <g filter="url(#shadow)">
                                        <circle cx="363" cy="148" r="8" fill="#FF6400"/>
                                        <circle cx="361" cy="146" r="4" fill="#FF9A42" opacity="0.8"/>
                                      </g>

                                      <!-- =========================
                                           PENCIL SHADOW
                                      ========================= -->
                                      <ellipse cx="194" cy="76"
                                               rx="136" ry="9"
                                               fill="#000"
                                               opacity="0.15"
                                               filter="url(#softShadow)"/>

                                      <!-- =========================
                                           PENCIL
                                      ========================= -->
                                      <g filter="url(#shadow)">

                                        <!-- =================================
                                             PENCIL YELLOW BODY
                                        ================================== -->
                                        <path d="
                                          M88 39
                                          H287
                                          Q290 39 290 43
                                          V65
                                          Q290 69 287 69
                                          H88
                                          Z"
                                          fill="url(#pencilBody)"/>

                                        <!-- Main body upper shine -->
                                        <path d="
                                          M89 40
                                          H286
                                          Q289 40 289 43
                                          V48
                                          H89
                                          Z"
                                          fill="#FFE45A"
                                          opacity="0.55"/>

                                        <!-- Main body lower 3D depth -->
                                        <path d="
                                          M88 61
                                          H290
                                          V65
                                          Q290 69 286 69
                                          H88
                                          Z"
                                          fill="#D98D00"
                                          opacity="0.35"/>

                                        <!-- =================================
                                             ERASER / STARTING CAP
                                             (CORRECTED)
                                        ================================== -->

                                        <!-- dark lower depth of eraser -->
                                        <path d="
                                          M61 40
                                          H89
                                          V69
                                          H62
                                          Q59 69 59 65
                                          V44
                                          Q59 40 61 40
                                          Z"
                                          fill="#C40D3C"/>

                                        <!-- main rounded eraser -->
                                        <path d="
                                          M64 39
                                          H90
                                          V69
                                          H64
                                          Q59 69 59 64
                                          V44
                                          Q59 39 64 39
                                          Z"
                                          fill="url(#eraser)"/>

                                        <!-- eraser bright upper highlight -->
                                        <path d="
                                          M64 40
                                          H88
                                          V46
                                          H64
                                          Q61 46 61 43
                                          Q61 40 64 40
                                          Z"
                                          fill="#FF6A88"
                                          opacity="0.75"/>

                                        <!-- eraser rounded left highlight -->
                                        <path d="
                                          M64 41
                                          Q61 41 61 45
                                          V61
                                          Q61 64 64 66
                                          V41
                                          Z"
                                          fill="#FF5378"
                                          opacity="0.65"/>

                                        <!-- eraser lower shadow -->
                                        <path d="
                                          M61 62
                                          Q61 67 65 68
                                          H90
                                          V69
                                          H64
                                          Q59 69 59 64
                                          V62
                                          Z"
                                          fill="#A90B35"
                                          opacity="0.5"/>

                                        <!-- =================================
                                             METAL PENCIL TIP
                                        ================================== -->

                                        <path d="M289 39
                                          L313 53.8
                                          L289 69
                                          Z"
                                          fill="url(#metal)"/>

                                        <!-- metal top reflection -->
                                        <path d="
                                          M289 39
                                          L313 53.8
                                          L289 50
                                          Z"
                                          fill="#F4F8FA"
                                          opacity="0.8"/>

                                        <!-- metal lower shadow -->
                                        <path d="
                                          M289 69
                                          L313 53.8
                                          L289 59
                                          Z"
                                          fill="#647683"
                                          opacity="0.65"/>

                                        <!-- =================================
                                             GRAPHITE TIP
                                        ================================== -->

                                        <path d="
                                          M313 53.8
                                          L327 53.8
                                          L313 58
                                          Z"
                                          fill="#26343D"/>

                                        <!-- graphite highlight -->
                                        <path d="
                                          M313 53.8
                                          L327 53.8
                                          L318 55.7
                                          Z"
                                          fill="#596873"
                                          opacity="0.8"/>

                                      </g>

                                      <!-- RULER SHADOW -->
                                      <ellipse cx="196" cy="126" rx="137" ry="9" fill="#000000" opacity="0.20" filter="url(#softShadow)"/>

                                      <!-- RULER -->
                                      <g filter="url(#shadow)">
                                        <rect x="59" y="86" width="274" height="43" rx="8" fill="url(#rulerBody)"/>
                                        <rect x="61" y="88" width="270" height="12" rx="6" fill="url(#rulerHighlight)" opacity="0.9"/>
                                        <path d="M59 119 Q59 129 68 129 H325 Q333 129 333 119 L330 121 Q328 125 322 125 H68 Q62 125 59 119Z" fill="#B93600" opacity="0.55"/>
                                        <circle cx="78" cy="106" r="9" fill="#B82F00" opacity="0.7"/>
                                        <circle cx="78" cy="105" r="8" fill="#F0F2F3"/>
                                        <circle cx="76" cy="103" r="3" fill="#FFFFFF" opacity="0.9"/>

                                        <!-- RULER MARKINGS -->
                                        <path d="M101 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M120 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M139 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M158 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M177 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M196 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M215 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M234 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M253 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M272 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M291 96 V110" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>

                                        <path d="M110 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M129 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M148 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M167 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M186 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M205 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M224 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M243 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M262 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M281 97 V105" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-orange"><span>01</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 02: STRATEGY -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <svg class="seo-step-svg" width="160" height="160" viewBox="0 0 361 362" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <!-- HEAD 3D GRADIENT -->
                                        <linearGradient id="headGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ff3b25"/>
                                          <stop offset="38%" stop-color="#f52e1c"/>
                                          <stop offset="72%" stop-color="#e52215"/>
                                          <stop offset="100%" stop-color="#c91b12"/>
                                        </linearGradient>

                                        <linearGradient id="headHighlight" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ff806f"/>
                                          <stop offset="45%" stop-color="#ff4936"/>
                                          <stop offset="100%" stop-color="#d91d12"/>
                                        </linearGradient>

                                        <!-- GEAR GRADIENT -->
                                        <linearGradient id="gearGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#52616d"/>
                                          <stop offset="35%" stop-color="#263540"/>
                                          <stop offset="70%" stop-color="#17232d"/>
                                          <stop offset="100%" stop-color="#0b141b"/>
                                        </linearGradient>

                                        <linearGradient id="gearTop" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#60717e"/>
                                          <stop offset="45%" stop-color="#33434f"/>
                                          <stop offset="100%" stop-color="#182630"/>
                                        </linearGradient>

                                        <!-- White gear hole -->
                                        <radialGradient id="holeGradient">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="70%" stop-color="#f4f4f4"/>
                                          <stop offset="100%" stop-color="#d9d9d9"/>
                                        </radialGradient>

                                        <!-- HEAD SHADOW -->
                                        <filter id="headShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="0" dy="9" stdDeviation="8" flood-color="#7b160e" flood-opacity="0.35"/>
                                        </filter>

                                        <!-- Gear shadow -->
                                        <filter id="gearShadow" x="-40%" y="-40%" width="180%" height="190%">
                                          <feDropShadow dx="3" dy="7" stdDeviation="4" flood-color="#071018" flood-opacity="0.55"/>
                                        </filter>

                                        <!-- Soft outer shadow -->
                                        <filter id="headSoftShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feGaussianBlur stdDeviation="5"/>
                                        </filter>

                                        <!-- GEAR SHAPE 10 TOOTH GEAR -->
                                        <path id="gearShape" d="M 0,-43 L 7,-43 L 10,-35 L 20,-32 L 27,-37 L 34,-30 L 29,-23 L 35,-14 L 44,-12 L 44,-2 L 36,1 L 34,11 L 40,18 L 34,26 L 25,22 L 17,30 L 18,40 L 8,43 L 3,34 L -7,35 L -13,43 L -22,39 L -20,29 L -29,23 L -38,26 L -43,17 L -35,11 L -38,1 L -46,-3 L -43,-13 L -33,-14 L -30,-24 L -37,-30 L -30,-38 L -21,-32 L -12,-36 L -10,-44 Z"/>
                                      </defs>

                                      <!-- SOFT GROUND SHADOW -->
                                      <ellipse cx="177" cy="313" rx="105" ry="13" fill="#7a7777" opacity="0.20" filter="url(#headSoftShadow)"/>

                                      <!-- MAIN HEAD LEFT-FACING PROFILE -->
                                      <g filter="url(#headShadow)">
                                        <!-- Dark red 3D extrusion -->
                                        <path d="
                                          M 258 309
                                          C 252 290 250 272 254 254
                                          C 258 230 271 208 283 186
                                          C 292 168 297 150 295 132
                                          C 292 98 276 72 250 56
                                          C 226 40 196 32 165 32
                                          C 133 32 104 42 82 60
                                          C 65 74 57 95 56 122
                                          C 56 138 60 148 57 158
                                          C 53 167 43 177 36 186
                                          C 33 190 35 194 40 196
                                          C 49 198 55 201 56 206
                                          C 57 212 50 216 52 222
                                          C 54 228 47 236 50 242
                                          C 54 249 68 253 82 255
                                          C 93 257 101 267 105 278
                                          L 115 309
                                          Z" fill="#b91d12"/>

                                        <!-- Main red face -->
                                        <path d="
                                          M 253 305
                                          C 247 286 245 268 249 250
                                          C 253 226 266 204 278 182
                                          C 287 164 292 146 290 128
                                          C 287 94 271 68 245 52
                                          C 221 36 191 28 160 28
                                          C 128 28 99 38 77 56
                                          C 60 70 52 91 51 118
                                          C 51 134 55 144 52 154
                                          C 48 163 38 173 31 182
                                          C 28 186 30 190 35 192
                                          C 44 194 50 197 51 202
                                          C 52 208 45 212 47 218
                                          C 49 224 42 232 45 238
                                          C 49 245 63 249 77 251
                                          C 88 253 96 263 100 274
                                          L 110 305
                                          Z" fill="url(#headGradient)"/>

                                        <!-- BRIGHT TOP/LEFT HEAD HIGHLIGHT -->
                                        <path d="
                                          M 56 148
                                          C 50 132 48 116 52 100
                                          C 57 79 71 61 91 49
                                          C 111 37 134 31 159 31
                                          C 191 31 221 40 243 56
                                          C 261 69 273 86 279 105
                                          C 267 86 253 72 235 62
                                          C 211 48 185 42 157 42
                                          C 128 42 102 48 82 62
                                          C 63 75 54 94 54 115
                                          C 54 128 58 140 64 150
                                          Z" fill="url(#headHighlight)" opacity="0.75"/>

                                        <!-- INNER RED DEPTH EDGE -->
                                        <path d="
                                          M 245 299
                                          C 239 278 238 258 242 239
                                          C 246 217 259 197 270 177
                                          C 279 160 282 146 280 130
                                          C 277 103 262 80 239 64
                                          C 216 49 188 42 158 42
                                          C 127 42 102 50 82 65"
                                          fill="none" stroke="#ff5743" stroke-width="5" stroke-linecap="round" opacity="0.55"/>

                                        <!-- FACE PROFILE HIGHLIGHT -->
                                        <path d="
                                          M 56 148
                                          C 52 157 42 168 35 177
                                          C 33 180 34 183 38 185
                                          C 45 187 50 190 51 195
                                          C 52 201 46 205 48 211
                                          C 50 217 44 224 47 229
                                          C 51 236 63 239 76 241"
                                          fill="none" stroke="#ff5945" stroke-width="4" stroke-linecap="round" opacity="0.8"/>
                                      </g>

                                      <!-- GEAR 1 — FRONT/LOWER GEAR -->
                                      <g transform="translate(148 168)" filter="url(#gearShadow)">
                                        <use href="#gearShape" transform="translate(2 7)" fill="#0b141b"/>
                                        <use href="#gearShape" fill="url(#gearGradient)" stroke="#111d26" stroke-width="3"/>
                                        <use href="#gearShape" transform="scale(0.88)" fill="url(#gearTop)" opacity="0.55"/>
                                        <circle cx="0" cy="0" r="18" fill="#172630" stroke="#0b141b" stroke-width="3"/>
                                        <circle cx="0" cy="0" r="12" fill="url(#holeGradient)"/>
                                        <circle cx="0" cy="0" r="12" fill="none" stroke="#9ea5a8" stroke-width="2" opacity="0.7"/>
                                        <path d="M -30 -7 C -27 -24 -14 -35 3 -38" fill="none" stroke="#71818c" stroke-width="3" stroke-linecap="round" opacity="0.65"/>
                                      </g>

                                      <!-- GEAR 2 — UPPER/RIGHT GEAR -->
                                      <g transform="translate(207 119) scale(0.88)" filter="url(#gearShadow)">
                                        <use href="#gearShape" transform="translate(2 7)" fill="#071118"/>
                                        <use href="#gearShape" fill="url(#gearGradient)" stroke="#101c25" stroke-width="3"/>
                                        <use href="#gearShape" transform="scale(0.88)" fill="url(#gearTop)" opacity="0.58"/>
                                        <circle cx="0" cy="0" r="18" fill="#172630" stroke="#0b141b" stroke-width="3"/>
                                        <circle cx="0" cy="0" r="12" fill="url(#holeGradient)"/>
                                        <circle cx="0" cy="0" r="12" fill="none" stroke="#a5abad" stroke-width="2" opacity="0.7"/>
                                        <path d="M -30 -7 C -27 -24 -14 -35 3 -38" fill="none" stroke="#71818c" stroke-width="3" stroke-linecap="round" opacity="0.65"/>
                                      </g>

                                      <!-- SMALL OVERLAP SHADOW BETWEEN GEARS -->
                                      <path d="M 171 143 C 181 143 188 149 193 157 C 195 161 195 166 192 170 C 188 162 182 156 174 153 Z" fill="#071017" opacity="0.65"/>

                                      <!-- FINAL HEAD BOTTOM HIGHLIGHT -->
                                      <path d="M 132 292 L 251 292" fill="none" stroke="#ff4936" stroke-width="3" stroke-linecap="round" opacity="0.45"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">STRATEGY</h3>
                                    <p class="seo-step-desc m-0">
                                        After gathering facts &amp; figures we will develop a unique strategy for your business, focusing on high-intent Canadian commercial keywords across top metropolitan hubs, competitor gap analysis, search intent mapping, and bilingual EN/FR growth opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-red"><span>02</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 03: ON PAGE -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">ON PAGE</h3>
                                    <p class="seo-step-desc m-0">
                                        Includes all tasks required to optimize the website according to search engine algorithms: structured heading hierarchy (H1-H4), metadata engineering, keyword clustering, internal linking silos, Schema.org microdata, image compression, and bilingual localization.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <svg class="seo-step-svg" width="160" height="160" viewBox="0 0 361 362" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <!-- BLUE MAIN GRADIENT -->
                                        <linearGradient id="blueMain" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#20c8ff"/>
                                          <stop offset="28%" stop-color="#09aef0"/>
                                          <stop offset="62%" stop-color="#008ee5"/>
                                          <stop offset="100%" stop-color="#006bc9"/>
                                        </linearGradient>

                                        <linearGradient id="blueDark" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#087fd1"/>
                                          <stop offset="55%" stop-color="#0065b8"/>
                                          <stop offset="100%" stop-color="#004d9b"/>
                                        </linearGradient>

                                        <linearGradient id="paperGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="55%" stop-color="#f7f9fb"/>
                                          <stop offset="100%" stop-color="#e7edf3"/>
                                        </linearGradient>

                                        <linearGradient id="paperBack" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="100%" stop-color="#e9eef4"/>
                                        </linearGradient>

                                        <!-- Pencil blue -->
                                        <linearGradient id="pencilBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#28d0ff"/>
                                          <stop offset="28%" stop-color="#08b5f4"/>
                                          <stop offset="65%" stop-color="#008fe3"/>
                                          <stop offset="100%" stop-color="#0068c5"/>
                                        </linearGradient>

                                        <!-- Yellow -->
                                        <linearGradient id="pencilYellowBand" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ffd52a"/>
                                          <stop offset="50%" stop-color="#ffbd00"/>
                                          <stop offset="100%" stop-color="#e99200"/>
                                        </linearGradient>

                                        <!-- Pencil tip -->
                                        <linearGradient id="woodTip" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#ffd36b"/>
                                          <stop offset="100%" stop-color="#e99b16"/>
                                        </linearGradient>

                                        <!-- Grey text -->
                                        <linearGradient id="textGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                          <stop offset="0%" stop-color="#8799ad"/>
                                          <stop offset="50%" stop-color="#637890"/>
                                          <stop offset="100%" stop-color="#40566d"/>
                                        </linearGradient>

                                        <!-- PAPER SHADOW -->
                                        <filter id="paperShadow" x="-30%" y="-30%" width="170%" height="180%">
                                          <feDropShadow dx="0" dy="8" stdDeviation="7" flood-color="#193c58" flood-opacity="0.38"/>
                                        </filter>

                                        <!-- Blue shadow -->
                                        <filter id="blueShadow" x="-30%" y="-30%" width="170%" height="180%">
                                          <feDropShadow dx="0" dy="7" stdDeviation="5" flood-color="#003e78" flood-opacity="0.55"/>
                                        </filter>

                                        <!-- Pencil shadow -->
                                        <filter id="pencilShadow" x="-30%" y="-30%" width="170%" height="180%">
                                          <feDropShadow dx="4" dy="7" stdDeviation="5" flood-color="#163b5c" flood-opacity="0.45"/>
                                        </filter>

                                        <!-- Soft shadow -->
                                        <filter id="docSoftBlur">
                                          <feGaussianBlur stdDeviation="6"/>
                                        </filter>

                                        <!-- PAPER CLIP / SMALL BLUE DETAIL -->
                                        <linearGradient id="smallBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#2bd3ff"/>
                                          <stop offset="100%" stop-color="#006dcc"/>
                                        </linearGradient>
                                      </defs>

                                      <!-- SOFT GROUND SHADOW -->
                                      <ellipse cx="159" cy="315" rx="126" ry="14" fill="#557080" opacity="0.18" filter="url(#docSoftBlur)"/>

                                      <!-- BACK DOCUMENT -->
                                      <!-- Back blue extrusion -->
                                      <path d="M 67 47 C 67 35 77 27 89 27 L 244 27 C 257 27 266 37 266 49 L 266 233 C 266 245 257 254 245 254 L 89 254 C 77 254 67 245 67 233 Z" fill="url(#blueDark)" filter="url(#blueShadow)"/>

                                      <!-- Back blue frame -->
                                      <path d="M 58 49 C 58 36 68 27 81 27 L 244 27 C 256 27 266 37 266 49 L 266 229 C 266 242 256 251 244 251 L 81 251 C 68 251 58 242 58 229 Z" fill="url(#blueMain)"/>

                                      <!-- Back paper -->
                                      <path d="M 69 53 C 69 46 75 40 82 40 L 241 40 C 247 40 253 46 253 53 L 253 225 C 253 232 247 238 240 238 L 82 238 C 75 238 69 232 69 225 Z" fill="url(#paperBack)"/>

                                      <!-- Back paper upper shine -->
                                      <path d="M 81 42 L 239 42 C 246 42 251 47 251 54 L 251 61 C 244 56 237 54 228 54 L 82 54 C 76 54 72 57 69 62 L 69 53 C 69 47 74 42 81 42 Z" fill="#ffffff" opacity="0.72"/>

                                      <!-- FRONT DOCUMENT -->
                                      <!-- Dark lower extrusion -->
                                      <path d="M 51 64 C 39 64 29 74 29 87 L 29 274 C 29 287 39 297 52 297 L 218 297 C 230 297 240 288 240 275 L 240 88 C 240 75 230 64 217 64 Z" fill="url(#blueDark)" filter="url(#blueShadow)"/>

                                      <!-- Main front blue frame -->
                                      <path d="M 49 52 C 37 52 28 62 28 75 L 28 273 C 28 286 38 296 51 296 L 217 296 C 230 296 240 286 240 273 L 240 76 C 240 62 230 52 217 52 Z" fill="url(#blueMain)"/>

                                      <!-- Blue frame highlight -->
                                      <path d="M 49 57 C 39 57 33 65 33 76 L 33 267 C 33 278 40 287 51 287 L 216 287 C 226 287 235 279 235 268 L 235 78" fill="none" stroke="#43d8ff" stroke-width="5" stroke-linecap="round" opacity="0.75"/>

                                      <!-- FRONT WHITE PAPER -->
                                      <path d="M 53 64 L 215 64 C 222 64 227 70 227 77 L 227 266 C 227 273 222 279 215 279 L 53 279 C 46 279 41 273 41 266 L 41 77 C 41 70 46 64 53 64 Z" fill="url(#paperGradient)"/>

                                      <!-- Paper inner upper highlight -->
                                      <path d="M 54 68 L 213 68 C 220 68 223 72 223 79 L 223 91 C 216 84 207 81 197 81 L 54 81 C 48 81 44 84 42 89 L 42 77 C 42 71 47 68 54 68 Z" fill="#ffffff" opacity="0.75"/>

                                      <!-- BLUE SQUARE / ICON -->
                                      <rect x="64" y="90" width="59" height="58" rx="7" fill="#006fc9" opacity="0.35" transform="translate(2 4)"/>
                                      <rect x="63" y="89" width="59" height="58" rx="7" fill="url(#blueMain)" filter="url(#blueShadow)"/>

                                      <!-- Square highlight -->
                                      <path d="M 70 94 L 113 94 C 116 94 119 97 119 100 L 119 105 C 107 101 94 100 78 102 C 73 103 68 106 64 110 L 64 99 C 64 96 67 94 70 94 Z" fill="#34d7ff" opacity="0.65"/>

                                      <!-- SMALL TEXT LINES - TOP RIGHT -->
                                      <rect x="135" y="91" width="76" height="9" rx="4.5" fill="#435d76" opacity="0.28" transform="translate(1 3)"/>
                                      <rect x="134" y="89" width="76" height="9" rx="4.5" fill="url(#textGradient)"/>
                                      <rect x="135" y="109" width="75" height="9" rx="4.5" fill="#71849a" opacity="0.35" transform="translate(1 3)"/>
                                      <rect x="134" y="107" width="75" height="9" rx="4.5" fill="url(#textGradient)"/>
                                      <rect x="134" y="125" width="76" height="9" rx="4.5" fill="url(#textGradient)" opacity="0.9"/>

                                      <!-- LONG TEXT LINES -->
                                      <g>
                                        <rect x="63" y="164" width="148" height="9" rx="4.5" fill="#435b73" opacity="0.30" transform="translate(1 3)"/>
                                        <rect x="62" y="162" width="149" height="9" rx="4.5" fill="url(#textGradient)"/>
                                        <rect x="63" y="186" width="147" height="9" rx="4.5" fill="#435b73" opacity="0.30" transform="translate(1 3)"/>
                                        <rect x="62" y="184" width="148" height="9" rx="4.5" fill="url(#textGradient)"/>
                                        <rect x="62" y="207" width="146" height="9" rx="4.5" fill="url(#textGradient)"/>
                                        <rect x="62" y="228" width="144" height="9" rx="4.5" fill="url(#textGradient)"/>
                                        <rect x="62" y="249" width="111" height="9" rx="4.5" fill="url(#textGradient)"/>
                                      </g>

                                      <!-- SMALL BLUE CURVE BEHIND PENCIL -->
                                      <path d="M 213 231 C 228 235 239 242 240 254 C 241 264 234 272 224 274" fill="none" stroke="#0063b6" stroke-width="8" stroke-linecap="round"/>
                                      <path d="M 214 230 C 228 234 236 241 237 252" fill="none" stroke="#2bd2ff" stroke-width="3" stroke-linecap="round" opacity="0.8"/>

                                      <!-- PENCIL -->
                                      <g transform="rotate(31 258 178)" filter="url(#pencilShadow)">
                                        <!-- Pencil dark extrusion -->
                                        <path d="M 245 86 C 245 79 250 74 257 74 L 273 74 C 280 74 285 79 285 86 L 285 226 L 265 252 L 245 226 Z" fill="#00579f" opacity="0.8"/>

                                        <!-- Main pencil body -->
                                        <rect x="242" y="69" width="40" height="161" rx="12" fill="url(#pencilBlue)"/>

                                        <!-- Pencil bright highlight -->
                                        <path d="M 248 82 C 248 76 252 73 257 73 L 262 73 L 262 215 C 262 220 259 224 255 227 L 250 230 L 250 83 Z" fill="#38d9ff" opacity="0.55"/>

                                        <!-- Pencil right-side shading -->
                                        <path d="M 270 73 L 276 73 C 280 73 282 77 282 82 L 282 226 L 274 236 L 270 230 Z" fill="#0068c5" opacity="0.55"/>

                                        <!-- YELLOW METAL BAND -->
                                        <path d="M 242 213 L 282 213 L 282 231 L 242 231 Z" fill="url(#pencilYellowBand)"/>
                                        <path d="M 246 214 L 255 214 L 255 230 L 246 230 Z" fill="#ffe24b" opacity="0.6"/>

                                        <!-- WOODEN PENCIL TIP -->
                                        <path d="M 242 230 L 282 230 L 262 260 Z" fill="url(#woodTip)"/>
                                        <path d="M 247 231 L 257 231 L 262 252 Z" fill="#ffe29a" opacity="0.65"/>

                                        <!-- Pencil graphite -->
                                        <path d="M 257 251 L 267 251 L 262 260 Z" fill="#39434a"/>
                                        <path d="M 259 253 L 264 253 L 262 258 Z" fill="#202a31"/>

                                        <!-- PENCIL TOP CAP -->
                                        <path d="M 242 82 C 242 74 250 68 262 68 C 273 68 282 74 282 82 L 282 91 C 274 86 266 84 256 84 C 250 84 246 86 242 91 Z" fill="url(#blueMain)"/>
                                        <path d="M 270 70 C 277 72 282 76 282 82 L 282 91 C 278 88 274 86 270 85 Z" fill="#ffbd00"/>
                                      </g>

                                      <!-- FINAL BLUE GLOW -->
                                      <path d="M 49 55 C 37 55 31 65 31 76 L 31 267" fill="none" stroke="#8beaff" stroke-width="2" stroke-linecap="round" opacity="0.65"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-cyan"><span>03</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 04: LINK BUILDING -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <svg class="seo-step-svg" width="160" height="150" viewBox="0 0 400 360" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <!-- OUTER BLUE 3D FRAME -->
                                        <radialGradient id="outerBlue" cx="35%" cy="25%" r="80%">
                                          <stop offset="0%" stop-color="#438cff"/>
                                          <stop offset="25%" stop-color="#2469e5"/>
                                          <stop offset="55%" stop-color="#0b45b5"/>
                                          <stop offset="82%" stop-color="#06368f"/>
                                          <stop offset="100%" stop-color="#022968"/>
                                        </radialGradient>

                                        <!-- Outer frame highlight -->
                                        <linearGradient id="frameHighlight" x1="20%" y1="0%" x2="80%" y2="100%">
                                          <stop offset="0%" stop-color="#72a8ff"/>
                                          <stop offset="30%" stop-color="#397df0"/>
                                          <stop offset="65%" stop-color="#1051c5"/>
                                          <stop offset="100%" stop-color="#06378e"/>
                                        </linearGradient>

                                        <!-- INNER RING -->
                                        <radialGradient id="innerRing" cx="40%" cy="30%" r="75%">
                                          <stop offset="0%" stop-color="#7bbdff"/>
                                          <stop offset="45%" stop-color="#3989ed"/>
                                          <stop offset="75%" stop-color="#1261c8"/>
                                          <stop offset="100%" stop-color="#08429a"/>
                                        </radialGradient>

                                        <!-- GLASS -->
                                        <radialGradient id="glass" cx="35%" cy="25%" r="80%">
                                          <stop offset="0%" stop-color="#a9ddff"/>
                                          <stop offset="35%" stop-color="#6ec2f5"/>
                                          <stop offset="70%" stop-color="#43a9ea"/>
                                          <stop offset="100%" stop-color="#2185d3"/>
                                        </radialGradient>

                                        <!-- Glass lower depth -->
                                        <linearGradient id="glassDepth" x1="0%" y1="0%" x2="0%" y2="100%">
                                          <stop offset="0%" stop-color="#c2eaff" stop-opacity="0.9"/>
                                          <stop offset="45%" stop-color="#73c8f5" stop-opacity="0.15"/>
                                          <stop offset="100%" stop-color="#0068bb" stop-opacity="0.55"/>
                                        </linearGradient>

                                        <!-- HANDLE -->
                                        <linearGradient id="handle" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#3f91ff"/>
                                          <stop offset="25%" stop-color="#1670e8"/>
                                          <stop offset="60%" stop-color="#0753bf"/>
                                          <stop offset="100%" stop-color="#033b91"/>
                                        </linearGradient>

                                        <linearGradient id="handleHighlight" x1="0%" y1="0%" x2="100%" y2="0%">
                                          <stop offset="0%" stop-color="#77b8ff" stop-opacity="0.9"/>
                                          <stop offset="55%" stop-color="#3b91f5" stop-opacity="0.55"/>
                                          <stop offset="100%" stop-color="#0c5ac7" stop-opacity="0"/>
                                        </linearGradient>

                                        <!-- SHADOWS -->
                                        <filter id="lensShadow" x="-40%" y="-40%" width="180%" height="190%">
                                          <feDropShadow dx="5" dy="10" stdDeviation="8" flood-color="#102d58" flood-opacity="0.42"/>
                                        </filter>

                                        <filter id="lensHandleShadow" x="-40%" y="-40%" width="180%" height="190%">
                                          <feDropShadow dx="4" dy="7" stdDeviation="5" flood-color="#0b2d58" flood-opacity="0.48"/>
                                        </filter>

                                        <filter id="lensSoftShadow">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>

                                      <!-- SOFT GROUND SHADOW -->
                                      <ellipse cx="187" cy="290" rx="120" ry="16" fill="#183c68" opacity="0.18" filter="url(#lensSoftShadow)"/>

                                      <!-- MAGNIFYING GLASS HANDLE BEHIND THE CIRCLE -->
                                      <g filter="url(#lensHandleShadow)">
                                        <!-- Handle dark 3D underside -->
                                        <path d="M 259 177 L 356 248 C 363 253 364 263 359 270 L 353 277 C 348 283 338 284 331 279 L 237 209 Z" fill="#02347d"/>

                                        <!-- Main handle -->
                                        <path d="M 255 169 L 350 240 C 357 245 358 255 353 262 L 347 269 C 342 275 333 276 326 271 L 230 200 Z" fill="url(#handle)"/>

                                        <!-- Handle top shine -->
                                        <path d="M 257 174 L 345 240 C 349 243 351 248 349 252 L 346 256 L 250 185 Z" fill="url(#handleHighlight)" opacity="0.9"/>

                                        <!-- Handle bright thin highlight -->
                                        <path d="M 264 178 L 344 238 C 347 240 348 243 347 246" fill="none" stroke="#75b9ff" stroke-width="4" stroke-linecap="round" opacity="0.65"/>
                                      </g>

                                      <!-- OUTER MAGNIFYING GLASS BODY -->
                                      <g filter="url(#lensShadow)">
                                        <!-- Dark blue 3D bottom extrusion -->
                                        <circle cx="169" cy="126" r="103" fill="#022c73" transform="translate(0 9)"/>

                                        <!-- Main outer blue body -->
                                        <circle cx="169" cy="126" r="103" fill="url(#outerBlue)"/>

                                        <!-- Outer bright bevel -->
                                        <circle cx="169" cy="126" r="94" fill="none" stroke="url(#frameHighlight)" stroke-width="14"/>

                                        <!-- Dark inner bevel -->
                                        <circle cx="169" cy="126" r="79" fill="#062f78"/>

                                        <!-- Inner blue ring -->
                                        <circle cx="169" cy="126" r="76" fill="url(#innerRing)"/>

                                        <!-- GLASS -->
                                        <circle cx="169" cy="126" r="65" fill="#0c5fb4" opacity="0.7"/>
                                        <circle cx="169" cy="126" r="63" fill="url(#glass)"/>

                                        <!-- Glass depth -->
                                        <circle cx="169" cy="126" r="60" fill="url(#glassDepth)" opacity="0.65"/>

                                        <!-- Glass lower blue edge -->
                                        <path d="M 115 137 C 121 168 145 188 173 188 C 204 188 229 165 233 134 C 228 164 202 182 173 182 C 144 182 121 164 115 137 Z" fill="#006bc0" opacity="0.35"/>

                                        <!-- GLASS WHITE REFLECTION -->
                                        <path d="M 131 91 C 143 77 159 70 176 70 C 195 70 211 81 220 96 C 222 100 220 105 216 106 C 212 108 208 105 206 101 C 199 91 188 85 176 84 C 161 84 149 90 139 101 C 136 104 131 103 129 99 C 127 96 128 93 131 91 Z" fill="#ffffff" opacity="0.82"/>

                                        <!-- Smaller reflection -->
                                        <path d="M 122 106 C 125 98 130 91 136 86" fill="none" stroke="#ffffff" stroke-width="6" stroke-linecap="round" opacity="0.75"/>

                                        <!-- Glass subtle highlight -->
                                        <ellipse cx="153" cy="108" rx="34" ry="27" fill="#ffffff" opacity="0.08"/>
                                      </g>

                                      <!-- FINAL OUTER RIM HIGHLIGHT -->
                                      <path d="M 95 85 C 111 55 138 35 171 32 C 203 30 232 42 251 64" fill="none" stroke="#78aaff" stroke-width="5" stroke-linecap="round" opacity="0.65"/>

                                      <!-- Lower rim subtle highlight -->
                                      <path d="M 91 164 C 108 192 137 211 169 212 C 200 212 228 197 246 174" fill="none" stroke="#0a55bd" stroke-width="5" stroke-linecap="round" opacity="0.65"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">LINK BUILDING</h3>
                                    <p class="seo-step-desc m-0">
                                        Off-page link building is about creating a high-authority backlink profile for your website. We engineer contextually relevant editorial backlinks from authoritative Canadian publishers, regional chambers of commerce, and niche blogs to skyrocket your domain rating.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-navy"><span>04</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 05: REPORTING & SCALING -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">REPORTING &amp; SCALING</h3>
                                    <p class="seo-step-desc m-0">
                                        Continuous improvement using 24/7 live Google.ca rank tracking, Looker Studio dashboards, conversion attribution analysis, Core Web Vitals maintenance, and scaling keyword campaigns to compound your inbound organic revenue.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <svg class="seo-step-svg" width="360" height="135" viewBox="0 0 581 215" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <!-- MAIN GREEN 3D GRADIENT -->
                                        <linearGradient id="green3D" x1="20%" y1="0%" x2="80%" y2="100%">
                                          <stop offset="0%" stop-color="#39f477"/>
                                          <stop offset="18%" stop-color="#17e65e"/>
                                          <stop offset="42%" stop-color="#05cc4d"/>
                                          <stop offset="68%" stop-color="#00ae3e"/>
                                          <stop offset="88%" stop-color="#008d34"/>
                                          <stop offset="100%" stop-color="#006e28"/>
                                        </linearGradient>

                                        <!-- BRIGHT GREEN TOP HIGHLIGHT -->
                                        <linearGradient id="greenShine" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#72ff9d"/>
                                          <stop offset="30%" stop-color="#39f477"/>
                                          <stop offset="65%" stop-color="#14dc5b"/>
                                          <stop offset="100%" stop-color="#08b848"/>
                                        </linearGradient>

                                        <!-- DARK GREEN 3D EXTRUSION -->
                                        <linearGradient id="greenDepth" x1="0%" y1="0%" x2="100%" y2="100%">
                                          <stop offset="0%" stop-color="#08ae40"/>
                                          <stop offset="45%" stop-color="#008a32"/>
                                          <stop offset="75%" stop-color="#006c27"/>
                                          <stop offset="100%" stop-color="#00511e"/>
                                        </linearGradient>

                                        <!-- NAVY TEXT -->
                                        <linearGradient id="navy" x1="0%" y1="0%" x2="0%" y2="100%">
                                          <stop offset="0%" stop-color="#18345c"/>
                                          <stop offset="55%" stop-color="#0b2548"/>
                                          <stop offset="100%" stop-color="#061a38"/>
                                        </linearGradient>

                                        <!-- GREEN TEXT -->
                                        <linearGradient id="textGreen5" x1="0%" y1="0%" x2="0%" y2="100%">
                                          <stop offset="0%" stop-color="#18e667"/>
                                          <stop offset="50%" stop-color="#08c950"/>
                                          <stop offset="100%" stop-color="#009e3c"/>
                                        </linearGradient>

                                        <!-- RING SHADOW -->
                                        <filter id="ringShadow" x="-30%" y="-30%" width="170%" height="190%">
                                          <feDropShadow dx="2" dy="7" stdDeviation="6" flood-color="#174b32" flood-opacity="0.48"/>
                                        </filter>

                                        <!-- SOFT FLOOR SHADOW -->
                                        <filter id="blurShadow">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>

                                        <!-- TEXT SHADOW -->
                                        <filter id="textShadow5" x="-10%" y="-20%" width="130%" height="150%">
                                          <feDropShadow dx="0" dy="1.5" stdDeviation="1.2" flood-color="#102a4d" flood-opacity="0.16"/>
                                        </filter>
                                      </defs>

                                      <!-- SOFT SHADOW UNDER RING -->
                                      <ellipse cx="105" cy="201" rx="91" ry="10" fill="#244c3b" opacity="0.23" filter="url(#blurShadow)"/>

                                      <!-- 3D GREEN PROGRESS RING -->
                                      <g filter="url(#ringShadow)">
                                        <!-- DARK 3D LOWER LAYER -->
                                        <circle cx="104" cy="112" r="78" fill="none" stroke="url(#greenDepth)" stroke-width="23" stroke-linecap="round" stroke-dasharray="467 41" transform="rotate(-82.5 104 112)"/>

                                        <!-- MAIN GREEN TUBE -->
                                        <circle cx="104" cy="105" r="78" fill="none" stroke="url(#green3D)" stroke-width="23" stroke-linecap="round" stroke-dasharray="467 41" transform="rotate(-82.5 104 105)"/>

                                        <!-- BRIGHT OUTER HIGHLIGHT -->
                                        <circle cx="104" cy="102" r="78" fill="none" stroke="url(#greenShine)" stroke-width="4" stroke-linecap="round" stroke-dasharray="467 41" transform="rotate(-82.5 104 102)" opacity="0.78"/>

                                        <!-- INNER DARK EDGE -->
                                        <circle cx="104" cy="105" r="67" fill="none" stroke="#007b2d" stroke-width="3" stroke-linecap="round" stroke-dasharray="467 41" transform="rotate(-82.5 104 105)" opacity="0.55"/>

                                        <!-- TOP SURFACE HIGHLIGHT -->
                                        <path d="M 115 28 C 133 30 148 39 159 51" fill="none" stroke="#64ff94" stroke-width="3" stroke-linecap="round" opacity="0.68"/>

                                        <!-- LEFT SIDE HIGHLIGHT -->
                                        <path d="M 32 62 C 22 80 19 100 23 119" fill="none" stroke="#42f47a" stroke-width="3" stroke-linecap="round" opacity="0.52"/>
                                      </g>

                                      <!-- CENTER WHITE AREA -->
                                      <circle cx="104" cy="105" r="66" fill="#ffffff"/>

                                      <!-- 95% CENTER TEXT -->
                                      <text x="104" y="123" text-anchor="middle" font-family="Plus Jakarta Sans, Inter, Arial, sans-serif" font-size="47" font-weight="700" letter-spacing="-2.5" fill="url(#navy)" filter="url(#textShadow5)">
                                        95%
                                      </text>

                                      <!-- RIGHT SIDE TEXT -->
                                      <text x="241" y="91" font-family="Plus Jakarta Sans, Inter, Arial, sans-serif" font-size="29" font-weight="600" letter-spacing="-0.9" fill="url(#navy)" filter="url(#textShadow5)">
                                        We won't stop till YOU
                                      </text>

                                      <!-- SECOND LINE - REACH -->
                                      <text x="241" y="139" font-family="Plus Jakarta Sans, Inter, Arial, sans-serif" font-size="35" font-weight="700" letter-spacing="-1.2" fill="url(#navy)" filter="url(#textShadow5)">
                                        reach
                                      </text>

                                      <!-- SECOND LINE - 100% -->
                                      <text x="341" y="139" font-family="Plus Jakarta Sans, Inter, Arial, sans-serif" font-size="35" font-weight="800" letter-spacing="-1.2" fill="url(#textGreen5)" filter="url(#textShadow5)">
                                        100%
                                      </text>

                                      <!-- SUBTLE GREEN TEXT HIGHLIGHT -->
                                      <path d="M 344 111 L 441 111" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" opacity="0.13"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-green"><span>05</span></div></div>
                    </div>

                </div>
            </div>

            <!-- ========================================================= -->
            <!-- PANE 2: WEBSITE DESIGNING PROCESS WORKFLOW               -->
            <!-- ========================================================= -->
            <div class="process-pane" id="procPane_web">
                <div class="seo-steps-container position-relative">
                                     <!-- STEP 01: DISCOVERY & REQUIREMENTS -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">DISCOVERY &amp; REQUIREMENTS</h3>
                                    <p class="seo-step-desc m-0">
                                        We discuss your business goals, target audience, and design preferences to understand your exact requirements and plan the project effectively.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Blue Clipboard + Checklist + Pencil SVG -->
                                    <svg class="seo-step-svg" width="165" height="145" viewBox="0 0 380 320" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="clipBoardBg" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#2589ff"/>
                                          <stop offset="45%" stop-color="#0e6fe6"/>
                                          <stop offset="100%" stop-color="#0249b3"/>
                                        </linearGradient>
                                        <linearGradient id="clipBoardDepth" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#0b54b8"/>
                                          <stop offset="100%" stop-color="#012f78"/>
                                        </linearGradient>
                                        <linearGradient id="clipClamp" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="50%" stop-color="#dce5f0"/>
                                          <stop offset="100%" stop-color="#9cb0c9"/>
                                        </linearGradient>
                                        <linearGradient id="paperGrad" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="100%" stop-color="#edf2f7"/>
                                        </linearGradient>
                                        <linearGradient id="checkGreen" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#34d399"/>
                                          <stop offset="100%" stop-color="#059669"/>
                                        </linearGradient>
                                        <linearGradient id="webPencilBody" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ffd52a"/>
                                          <stop offset="50%" stop-color="#ffb800"/>
                                          <stop offset="100%" stop-color="#d98200"/>
                                        </linearGradient>
                                        <filter id="clipShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="8" stdDeviation="6" flood-color="#0d2e5c" flood-opacity="0.35"/>
                                        </filter>
                                        <filter id="pencilFloatShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="4" dy="7" stdDeviation="4" flood-color="#143054" flood-opacity="0.45"/>
                                        </filter>
                                        <filter id="clipSoftFloor">
                                          <feGaussianBlur stdDeviation="6"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="180" cy="290" rx="130" ry="14" fill="#3b597a" opacity="0.2" filter="url(#clipSoftFloor)"/>
                                      
                                      <!-- Main 3D Clipboard Group -->
                                      <g filter="url(#clipShadow)">
                                        <!-- 3D Extrusion -->
                                        <rect x="70" y="32" width="200" height="245" rx="20" fill="url(#clipBoardDepth)"/>
                                        <!-- Main Board -->
                                        <rect x="70" y="24" width="200" height="245" rx="20" fill="url(#clipBoardBg)"/>
                                        <path d="M75 30 H265" stroke="#75b5ff" stroke-width="3" stroke-linecap="round" opacity="0.6"/>
                                        
                                        <!-- Paper Sheet -->
                                        <rect x="88" y="48" width="164" height="205" rx="10" fill="url(#paperGrad)"/>
                                        <path d="M92 52 H248" stroke="#ffffff" stroke-width="2" opacity="0.8"/>
                                        
                                        <!-- Top Metal Clamp -->
                                        <rect x="135" y="14" width="70" height="24" rx="6" fill="url(#clipClamp)"/>
                                        <circle cx="170" cy="24" r="5" fill="#0c6ee6"/>

                                        <!-- Checklist Item 1 -->
                                        <g transform="translate(102, 75)">
                                          <rect x="0" y="0" width="24" height="24" rx="6" fill="url(#checkGreen)"/>
                                          <path d="M6 12 L10 16 L18 8" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          <rect x="34" y="6" width="92" height="7" rx="3.5" fill="#94a3b8"/>
                                          <rect x="34" y="16" width="60" height="5" rx="2.5" fill="#cbd5e1"/>
                                        </g>

                                        <!-- Checklist Item 2 -->
                                        <g transform="translate(102, 120)">
                                          <rect x="0" y="0" width="24" height="24" rx="6" fill="url(#checkGreen)"/>
                                          <path d="M6 12 L10 16 L18 8" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          <rect x="34" y="6" width="92" height="7" rx="3.5" fill="#94a3b8"/>
                                          <rect x="34" y="16" width="70" height="5" rx="2.5" fill="#cbd5e1"/>
                                        </g>

                                        <!-- Checklist Item 3 -->
                                        <g transform="translate(102, 165)">
                                          <rect x="0" y="0" width="24" height="24" rx="6" fill="url(#checkGreen)"/>
                                          <path d="M6 12 L10 16 L18 8" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          <rect x="34" y="6" width="92" height="7" rx="3.5" fill="#94a3b8"/>
                                          <rect x="34" y="16" width="50" height="5" rx="2.5" fill="#cbd5e1"/>
                                        </g>
                                      </g>

                                      <!-- Angled 3D Pencil Writing on Clipboard -->
                                      <g transform="translate(230, 80) rotate(42)" filter="url(#pencilFloatShadow)">
                                        <rect x="0" y="0" width="20" height="95" rx="5" fill="url(#webPencilBody)"/>
                                        <path d="M2 2 H18" stroke="#fff38a" stroke-width="2" opacity="0.7"/>
                                        <path d="M0 95 L20 95 L10 116 Z" fill="#ffd494"/>
                                        <path d="M7 110 L13 110 L10 116 Z" fill="#2d3748"/>
                                        <!-- Eraser Top -->
                                        <rect x="0" y="-12" width="20" height="12" rx="3" fill="#f43f5e"/>
                                        <rect x="0" y="-3" width="20" height="4" fill="#cbd5e1"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-orange"><span>01</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 02: PLANNING & WIREFRAME -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <!-- 3D Browser Wireframe with Image Card & Text Skeletons -->
                                    <svg class="seo-step-svg" width="165" height="140" viewBox="0 0 380 280" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="wfBrowserBg" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="60%" stop-color="#f8fafc"/>
                                          <stop offset="100%" stop-color="#e2e8f0"/>
                                        </linearGradient>
                                        <linearGradient id="wfHeaderBlue" x1="0" y1="0" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="50%" stop-color="#0284c7"/>
                                          <stop offset="100%" stop-color="#0369a1"/>
                                        </linearGradient>
                                        <linearGradient id="wfImgCard" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#cbd5e1"/>
                                          <stop offset="100%" stop-color="#94a3b8"/>
                                        </linearGradient>
                                        <filter id="wfShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="0" dy="8" stdDeviation="7" flood-color="#475569" flood-opacity="0.32"/>
                                        </filter>
                                        <filter id="wfSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="190" cy="255" rx="140" ry="14" fill="#64748b" opacity="0.22" filter="url(#wfSoftFloor)"/>
                                      
                                      <g filter="url(#wfShadow)">
                                        <!-- 3D Window Extrusion -->
                                        <rect x="50" y="32" width="280" height="205" rx="16" fill="#94a3b8"/>
                                        <!-- Main Window -->
                                        <rect x="50" y="24" width="280" height="205" rx="16" fill="url(#wfBrowserBg)"/>
                                        
                                        <!-- Header Bar -->
                                        <path d="M50 40 C50 31 57 24 66 24 H314 C323 24 330 31 330 40 V56 H50 Z" fill="url(#wfHeaderBlue)"/>
                                        <!-- Header Dots -->
                                        <circle cx="72" cy="40" r="5" fill="#ffffff" opacity="0.9"/>
                                        <circle cx="87" cy="40" r="5" fill="#ffffff" opacity="0.6"/>
                                        <circle cx="102" cy="40" r="5" fill="#ffffff" opacity="0.6"/>
                                        
                                        <!-- Wireframe Image Card (Left) -->
                                        <rect x="74" y="78" width="105" height="85" rx="8" fill="url(#wfImgCard)"/>
                                        <!-- Mountains Landscape Icon in Card -->
                                        <polygon points="84,145 105,115 125,145" fill="#f8fafc" opacity="0.75"/>
                                        <polygon points="112,145 130,122 150,145" fill="#f8fafc" opacity="0.9"/>
                                        <circle cx="150" cy="100" r="8" fill="#f8fafc" opacity="0.85"/>

                                        <!-- Wireframe Text Skeletons (Right) -->
                                        <rect x="195" y="85" width="115" height="10" rx="5" fill="#94a3b8"/>
                                        <rect x="195" y="105" width="95" height="8" rx="4" fill="#cbd5e1"/>
                                        <rect x="195" y="122" width="105" height="8" rx="4" fill="#cbd5e1"/>
                                        <rect x="195" y="139" width="75" height="8" rx="4" fill="#cbd5e1"/>

                                        <!-- Bottom Full-Width Skeleton Line -->
                                        <rect x="74" y="182" width="236" height="10" rx="5" fill="#cbd5e1"/>
                                        <rect x="74" y="200" width="170" height="8" rx="4" fill="#e2e8f0"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">PLANNING &amp; WIREFRAME</h3>
                                    <p class="seo-step-desc m-0">
                                        We create a website structure and wireframe to outline the layout, features, and user journey before moving to the design stage.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-red"><span>02</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 03: DESIGN & DEVELOPMENT -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">DESIGN &amp; DEVELOPMENT</h3>
                                    <p class="seo-step-desc m-0">
                                        Our team creates a modern, responsive, and SEO-friendly design and develops it with clean, optimized code to ensure the best performance.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Blue Desktop Monitor with </> Code + Purple Gear -->
                                    <svg class="seo-step-svg" width="170" height="145" viewBox="0 0 380 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="monFrameBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="35%" stop-color="#0284c7"/>
                                          <stop offset="100%" stop-color="#034d94"/>
                                        </linearGradient>
                                        <linearGradient id="monScreenBg" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#0f172a"/>
                                          <stop offset="60%" stop-color="#034d94"/>
                                          <stop offset="100%" stop-color="#0284c7"/>
                                        </linearGradient>
                                        <linearGradient id="purpleGearGrad" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#c084fc"/>
                                          <stop offset="45%" stop-color="#9333ea"/>
                                          <stop offset="100%" stop-color="#6b21a8"/>
                                        </linearGradient>
                                        <filter id="monShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="8" stdDeviation="7" flood-color="#02295a" flood-opacity="0.38"/>
                                        </filter>
                                        <filter id="gearGlow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="3" dy="6" stdDeviation="5" flood-color="#4c1d95" flood-opacity="0.5"/>
                                        </filter>
                                        <filter id="monSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="190" cy="275" rx="130" ry="14" fill="#1e3a5f" opacity="0.22" filter="url(#monSoftFloor)"/>
                                      
                                      <g filter="url(#monShadow)">
                                        <!-- Monitor Stand Base -->
                                        <path d="M150 250 H230 L220 230 H160 Z" fill="#034d94"/>
                                        <rect x="140" y="248" width="100" height="12" rx="6" fill="url(#monFrameBlue)"/>
                                        <!-- Monitor Stand Neck -->
                                        <rect x="175" y="195" width="30" height="45" rx="4" fill="#034d94"/>

                                        <!-- Monitor Outer Bezel -->
                                        <rect x="45" y="32" width="290" height="185" rx="16" fill="url(#monFrameBlue)"/>
                                        <path d="M50 38 H330" stroke="#7dd3fc" stroke-width="2.5" opacity="0.7"/>
                                        
                                        <!-- Monitor Screen Area -->
                                        <rect x="58" y="44" width="264" height="155" rx="10" fill="url(#monScreenBg)"/>
                                        
                                        <!-- </> Code Symbol -->
                                        <!-- Left Bracket < -->
                                        <path d="M130 90 L95 122 L130 154" stroke="#ffffff" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
                                        <!-- Slash / -->
                                        <path d="M185 80 L155 164" stroke="#38bdf8" stroke-width="12" stroke-linecap="round"/>
                                        <!-- Right Bracket > -->
                                        <path d="M210 90 L245 122 L210 154" stroke="#ffffff" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
                                      </g>

                                      <!-- 3D Purple Gear (Bottom-Right Corner) -->
                                      <g transform="translate(290, 185)" filter="url(#gearGlow)">
                                        <circle cx="0" cy="0" r="38" fill="url(#purpleGearGrad)"/>
                                        <!-- 8 Gear Teeth -->
                                        <rect x="-8" y="-46" width="16" height="14" rx="3" fill="url(#purpleGearGrad)"/>
                                        <rect x="-8" y="32" width="16" height="14" rx="3" fill="url(#purpleGearGrad)"/>
                                        <rect x="-46" y="-8" width="14" height="16" rx="3" fill="url(#purpleGearGrad)"/>
                                        <rect x="32" y="-8" width="14" height="16" rx="3" fill="url(#purpleGearGrad)"/>
                                        <rect x="-35" y="-35" width="14" height="14" rx="3" fill="url(#purpleGearGrad)" transform="rotate(45 -28 -28)"/>
                                        <rect x="21" y="-35" width="14" height="14" rx="3" fill="url(#purpleGearGrad)" transform="rotate(45 28 -28)"/>
                                        <rect x="-35" y="21" width="14" height="14" rx="3" fill="url(#purpleGearGrad)" transform="rotate(45 -28 28)"/>
                                        <rect x="21" y="21" width="14" height="14" rx="3" fill="url(#purpleGearGrad)" transform="rotate(45 28 28)"/>
                                        <!-- Center Hole -->
                                        <circle cx="0" cy="0" r="16" fill="#3b0764"/>
                                        <circle cx="0" cy="0" r="11" fill="#f8fafc"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-cyan"><span>03</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 04: TESTING & LAUNCH -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <!-- 3D Browser Window with Blasting Rocket & Clouds -->
                                    <svg class="seo-step-svg" width="170" height="145" viewBox="0 0 380 290" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="lnchWndBg" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="100%" stop-color="#e2e8f0"/>
                                        </linearGradient>
                                        <linearGradient id="lnchRocketRed" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ff4d4d"/>
                                          <stop offset="50%" stop-color="#ef4444"/>
                                          <stop offset="100%" stop-color="#b91c1c"/>
                                        </linearGradient>
                                        <linearGradient id="lnchRocketBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="100%" stop-color="#0284c7"/>
                                        </linearGradient>
                                        <linearGradient id="lnchFire" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#fbbf24"/>
                                          <stop offset="100%" stop-color="#ea580c"/>
                                        </linearGradient>
                                        <filter id="lnchShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="8" stdDeviation="6" flood-color="#334155" flood-opacity="0.35"/>
                                        </filter>
                                        <filter id="lnchRocketShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="4" dy="8" stdDeviation="5" flood-color="#0f172a" flood-opacity="0.45"/>
                                        </filter>
                                        <filter id="lnchSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="190" cy="265" rx="135" ry="14" fill="#64748b" opacity="0.2" filter="url(#lnchSoftFloor)"/>
                                      
                                      <!-- Background Browser Window -->
                                      <g filter="url(#lnchShadow)">
                                        <rect x="55" y="45" width="270" height="180" rx="16" fill="url(#lnchWndBg)"/>
                                        <path d="M55 60 C55 51 62 45 71 45 H309 C318 45 325 51 325 60 V72 H55 Z" fill="#0284c7"/>
                                        <circle cx="75" cy="58" r="4.5" fill="#ffffff" opacity="0.9"/>
                                        <circle cx="90" cy="58" r="4.5" fill="#ffffff" opacity="0.6"/>
                                        <circle cx="105" cy="58" r="4.5" fill="#ffffff" opacity="0.6"/>
                                      </g>

                                      <!-- 3D Rocket Blasting Out of Browser -->
                                      <g transform="translate(195, 125) rotate(35)" filter="url(#lnchRocketShadow)">
                                        <!-- Thruster Flame -->
                                        <path d="M-10 65 Q0 100 0 105 Q0 100 10 65 Z" fill="url(#lnchFire)"/>
                                        <path d="M-5 65 Q0 85 0 90 Q0 85 5 65 Z" fill="#fef08a"/>

                                        <!-- Rocket Side Wings -->
                                        <path d="M-20 40 L-42 65 L-20 60 Z" fill="url(#lnchRocketBlue)"/>
                                        <path d="M20 40 L42 65 L20 60 Z" fill="url(#lnchRocketBlue)"/>

                                        <!-- Rocket Main Body -->
                                        <path d="M0 -55 C28 -15 30 35 20 65 H-20 C-30 35 -28 -15 0 -55 Z" fill="#ffffff"/>
                                        <!-- Red Nose Cone -->
                                        <path d="M0 -55 C16 -32 24 -10 25 0 H-25 C-24 -10 -16 -32 0 -55 Z" fill="url(#lnchRocketRed)"/>
                                        <!-- Body Highlight -->
                                        <path d="M-16 10 C-18 25 -16 45 -14 55" stroke="#f1f5f9" stroke-width="3" stroke-linecap="round"/>

                                        <!-- Glass Porthole Window -->
                                        <circle cx="0" cy="18" r="14" fill="#0284c7"/>
                                        <circle cx="0" cy="18" r="10" fill="#38bdf8"/>
                                        <circle cx="-3" cy="15" r="3" fill="#ffffff" opacity="0.8"/>
                                      </g>

                                      <!-- Smoke Puffs at Base -->
                                      <circle cx="150" cy="225" r="24" fill="#f1f5f9" filter="url(#lnchShadow)"/>
                                      <circle cx="180" cy="215" r="28" fill="#ffffff" filter="url(#lnchShadow)"/>
                                      <circle cx="215" cy="225" r="25" fill="#f1f5f9" filter="url(#lnchShadow)"/>
                                      <circle cx="170" cy="235" r="20" fill="#e2e8f0"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">TESTING &amp; LAUNCH</h3>
                                    <p class="seo-step-desc m-0">
                                        We rigorously test the website for functionality, speed, security, and cross-device compatibility before making it live.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-navy"><span>04</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 05: SUPPORT & GROWTH -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">SUPPORT &amp; GROWTH</h3>
                                    <p class="seo-step-desc m-0">
                                        After launch, we provide ongoing maintenance, updates, and optimization to keep your website secure, fast, and up-to-date.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Colorful Bar Chart + Green Upward Growth Arrow -->
                                    <svg class="seo-step-svg" width="165" height="140" viewBox="0 0 380 270" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="barBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="100%" stop-color="#0284c7"/>
                                        </linearGradient>
                                        <linearGradient id="barYellow" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#fde047"/>
                                          <stop offset="100%" stop-color="#eab308"/>
                                        </linearGradient>
                                        <linearGradient id="barOrange" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#fb923c"/>
                                          <stop offset="100%" stop-color="#ea580c"/>
                                        </linearGradient>
                                        <linearGradient id="arrowGreen" x1="0" y1="1" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#34d399"/>
                                          <stop offset="50%" stop-color="#10b981"/>
                                          <stop offset="100%" stop-color="#059669"/>
                                        </linearGradient>
                                        <filter id="chartBarShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="3" dy="8" stdDeviation="6" flood-color="#0f172a" flood-opacity="0.35"/>
                                        </filter>
                                        <filter id="arrowFloatShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="3" dy="8" stdDeviation="5" flood-color="#064e3b" flood-opacity="0.45"/>
                                        </filter>
                                        <filter id="barSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="190" cy="245" rx="140" ry="14" fill="#334155" opacity="0.2" filter="url(#barSoftFloor)"/>

                                      <!-- 3D Bar Columns -->
                                      <g filter="url(#chartBarShadow)">
                                        <!-- Bar 1 (Blue) -->
                                        <g transform="translate(85, 130)">
                                          <rect x="0" y="0" width="45" height="95" rx="8" fill="url(#barBlue)"/>
                                          <rect x="2" y="2" width="41" height="8" rx="4" fill="#bae6fd" opacity="0.6"/>
                                        </g>

                                        <!-- Bar 2 (Yellow) -->
                                        <g transform="translate(150, 85)">
                                          <rect x="0" y="0" width="45" height="140" rx="8" fill="url(#barYellow)"/>
                                          <rect x="2" y="2" width="41" height="8" rx="4" fill="#fef9c3" opacity="0.7"/>
                                        </g>

                                        <!-- Bar 3 (Orange) -->
                                        <g transform="translate(215, 45)">
                                          <rect x="0" y="0" width="45" height="180" rx="8" fill="url(#barOrange)"/>
                                          <rect x="2" y="2" width="41" height="8" rx="4" fill="#ffedd5" opacity="0.7"/>
                                        </g>
                                      </g>

                                      <!-- 3D Green Upward Soaring Trend Arrow -->
                                      <g filter="url(#arrowFloatShadow)">
                                        <path d="M70 190 Q170 140 280 40" fill="none" stroke="url(#arrowGreen)" stroke-width="20" stroke-linecap="round"/>
                                        <!-- Arrow Specular Glow -->
                                        <path d="M75 186 Q170 138 275 42" fill="none" stroke="#a7f3d0" stroke-width="6" stroke-linecap="round" opacity="0.75"/>
                                        <!-- 3D Arrowhead -->
                                        <polygon points="265,15 315,30 295,80" fill="url(#arrowGreen)"/>
                                        <polygon points="270,22 308,34 294,70" fill="#a7f3d0" opacity="0.4"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-green"><span>05</span></div></div>
                    </div>

                </div>
            </div>

            <!-- ========================================================= -->
            <!-- PANE 3: DIGITAL MARKETING PROCESS WORKFLOW               -->
            <!-- ========================================================= -->
            <div class="process-pane" id="procPane_digital">
                <div class="seo-steps-container position-relative">
                    
                    <!-- STEP 01: DISCOVERY & ANALYSIS -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">DISCOVERY &amp; ANALYSIS</h3>
                                    <p class="seo-step-desc m-0">
                                        We understand your business, target audience, competitors, and current online presence to identify opportunities and set clear goals.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Red-Header Analytics Browser Window with Bar Chart & Magnifying Glass -->
                                    <svg class="seo-step-svg" width="180" height="135" viewBox="0 0 392 234" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="dmWndBg" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="0.65%" stop-color="#f5f7fc"/>
                                          <stop offset="100%" stop-color="#dfe4ee"/>
                                        </linearGradient>
                                        <linearGradient id="dmRedHeader" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ff5b5b"/>
                                          <stop offset="0.45%" stop-color="#f52d25"/>
                                          <stop offset="100%" stop-color="#df160f"/>
                                        </linearGradient>
                                        <linearGradient id="dmBlueBar" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#1599ff"/>
                                          <stop offset="0.35%" stop-color="#0874e8"/>
                                          <stop offset="0.75%" stop-color="#004dcc"/>
                                          <stop offset="100%" stop-color="#00389e"/>
                                        </linearGradient>
                                        <linearGradient id="dmDarkBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#1d8fff"/>
                                          <stop offset="0.45%" stop-color="#075bd5"/>
                                          <stop offset="100%" stop-color="#00399e"/>
                                        </linearGradient>
                                        <linearGradient id="dmOrangeBar" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffbf27"/>
                                          <stop offset="100%" stop-color="#f27a00"/>
                                        </linearGradient>
                                        <linearGradient id="dmYellowBar" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffd83b"/>
                                          <stop offset="100%" stop-color="#f5a400"/>
                                        </linearGradient>
                                        <linearGradient id="dmBarRed" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ff5135"/>
                                          <stop offset="100%" stop-color="#e33113"/>
                                        </linearGradient>
                                        <radialGradient id="dmGlass">
                                          <stop offset="0%" stop-color="#57c8ff"/>
                                          <stop offset="0.45%" stop-color="#1688ec"/>
                                          <stop offset="0.8%" stop-color="#0861d3"/>
                                          <stop offset="100%" stop-color="#003ca4"/>
                                        </radialGradient>
                                        <linearGradient id="dmGlassHighlight" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ffffff" stop-opacity=".65"/>
                                          <stop offset=".45%" stop-color="#ffffff" stop-opacity=".12"/>
                                          <stop offset="100%" stop-color="#ffffff" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="dmLine" x1="0" y1="0" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#d6e0f5"/>
                                          <stop offset="100%" stop-color="#edf1f8"/>
                                        </linearGradient>
                                        <filter id="dmShadow" x="-20%" y="-20%" width="150%" height="160%">
                                          <feDropShadow dx="0" dy="7" stdDeviation="7" flood-color="#61708b" flood-opacity=".32"/>
                                        </filter>
                                        <filter id="dmSoftShadow" x="-30%" y="-30%" width="170%" height="180%">
                                          <feGaussianBlur stdDeviation="5"/>
                                        </filter>
                                        <filter id="dmGlassShadow" x="-30%" y="-30%" width="180%" height="180%">
                                          <feDropShadow dx="3" dy="6" stdDeviation="4" flood-color="#243c72" flood-opacity=".42"/>
                                        </filter>
                                      </defs>

                                      <ellipse cx="166" cy="211" rx="130" ry="13" fill="#64748b" opacity=".22" filter="url(#dmSoftShadow)"/>

                                      <g filter="url(#dmShadow)">
                                        <rect x="31" y="8" width="240" height="198" rx="16" fill="url(#dmWndBg)"/>
                                        <path d="M31 24 C31 15 37 8 47 8 H255 C265 8 271 15 271 24 V43 H31 Z" fill="url(#dmRedHeader)"/>
                                        <path d="M44 10 H257 C263 10 268 14 269 20 H33 C35 14 39 10 44 10Z" fill="#ff7770" opacity=".35"/>
                                        <circle cx="53" cy="25" r="6" fill="#e8f0fa" stroke="#c7d3e6" stroke-width="1"/>
                                        <circle cx="73" cy="25" r="6" fill="#ffd22e" stroke="#e3a900" stroke-width="1"/>
                                        <circle cx="93" cy="25" r="6" fill="#dce5f2" stroke="#bbc8db" stroke-width="1"/>

                                        <rect x="49" y="59" width="89" height="8" rx="4" fill="url(#dmLine)"/>
                                        <rect x="49" y="76" width="65" height="7" rx="3.5" fill="#d8e1f3"/>
                                        <rect x="49" y="91" width="54" height="7" rx="3.5" fill="#e0e6f2"/>

                                        <path d="M52 113 C68 111 73 105 83 105 C94 105 102 91 112 91 C120 91 125 72 139 68" fill="none" stroke="#5da7ef" stroke-width="4" stroke-linecap="round" opacity=".65"/>
                                        <path d="M52 116 C69 114 75 108 84 108 C95 108 103 95 113 95 C121 95 126 77 139 73" fill="none" stroke="#b6d9ff" stroke-width="2" stroke-linecap="round" opacity=".8"/>

                                        <rect x="48" y="136" width="17" height="52" rx="4" fill="url(#dmBlueBar)"/>
                                        <rect x="70" y="124" width="17" height="64" rx="4" fill="url(#dmBarRed)"/>
                                        <rect x="92" y="111" width="17" height="77" rx="4" fill="url(#dmOrangeBar)"/>
                                        <rect x="114" y="79" width="17" height="109" rx="4" fill="url(#dmYellowBar)"/>
                                        <rect x="136" y="128" width="17" height="60" rx="4" fill="url(#dmOrangeBar)"/>
                                        <rect x="158" y="142" width="17" height="46" rx="4" fill="url(#dmOrangeBar)"/>

                                        <path d="M51 140 V181" stroke="#6fc1ff" stroke-width="3" stroke-linecap="round" opacity=".45"/>
                                        <path d="M95 115 V177" stroke="#ffd36a" stroke-width="3" stroke-linecap="round" opacity=".35"/>
                                        <path d="M117 84 V174" stroke="#fff19a" stroke-width="3" stroke-linecap="round" opacity=".35"/>

                                        <rect x="166" y="57" width="69" height="8" rx="4" fill="#d8e1f2"/>
                                        <rect x="166" y="72" width="50" height="7" rx="3.5" fill="#e0e6f2"/>
                                        <rect x="166" y="87" width="63" height="7" rx="3.5" fill="#d9e2f2"/>
                                        <rect x="166" y="102" width="43" height="7" rx="3.5" fill="#e3e8f2"/>
                                        <rect x="166" y="171" width="63" height="8" rx="4" fill="#cdd7e8"/>
                                        <rect x="166" y="187" width="42" height="7" rx="3.5" fill="#dce3ee"/>
                                      </g>

                                      <g filter="url(#dmGlassShadow)" transform="rotate(-42 211 130)">
                                        <path d="M215 151 L215 203 C215 210 220 215 227 215 C234 215 239 210 239 203 L239 151 Z" fill="url(#dmDarkBlue)"/>
                                        <path d="M219 155 L219 201 C219 205 221 207 224 208 L224 157 Z" fill="#5eb8ff" opacity=".38"/>
                                        <circle cx="227" cy="119" r="46" fill="url(#dmDarkBlue)"/>
                                        <circle cx="227" cy="119" r="37" fill="#0753c7"/>
                                        <circle cx="227" cy="119" r="32" fill="url(#dmGlass)"/>
                                        <circle cx="227" cy="119" r="27" fill="#1597ed" opacity=".35"/>
                                        <path d="M207 105 C213 94 227 88 239 94 C230 95 217 101 210 113 C207 118 204 119 202 116 C201 113 203 109 207 105Z" fill="url(#dmGlassHighlight)"/>
                                        <ellipse cx="216" cy="102" rx="10" ry="5" fill="#ffffff" opacity=".28" transform="rotate(-25 216 102)"/>
                                        <path d="M198 106 C201 86 218 73 236 75" fill="none" stroke="#5db8ff" stroke-width="5" stroke-linecap="round" opacity=".5"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-orange"><span>01</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 02: STRATEGY & PLANNING -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <!-- 3D Red Target with Blue/Yellow Dart Bullseye -->
                                    <svg class="seo-step-svg" width="180" height="135" viewBox="0 0 557 370" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <radialGradient id="dmTgtRed" cx="35%" cy="25%" r="80%">
                                          <stop offset="0%" stop-color="#ff5b55"/>
                                          <stop offset=".35%" stop-color="#ff3029"/>
                                          <stop offset=".72%" stop-color="#ed1d17"/>
                                          <stop offset="100%" stop-color="#b70b08"/>
                                        </radialGradient>
                                        <radialGradient id="dmTgtWhite" cx="35%" cy="25%" r="85%">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset=".7%" stop-color="#f5f6fa"/>
                                          <stop offset="100%" stop-color="#d8dce5"/>
                                        </radialGradient>
                                        <linearGradient id="dmTgtBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#159cff"/>
                                          <stop offset=".28%" stop-color="#0877ed"/>
                                          <stop offset=".65%" stop-color="#0755ce"/>
                                          <stop offset="100%" stop-color="#003894"/>
                                        </linearGradient>
                                        <linearGradient id="dmTgtBlueShine" x1="0" y1="0" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#8edcff"/>
                                          <stop offset=".45%" stop-color="#54baff"/>
                                          <stop offset="100%" stop-color="#1680e9"/>
                                        </linearGradient>
                                        <linearGradient id="dmTgtYellow" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ffe85a"/>
                                          <stop offset=".35%" stop-color="#ffc51a"/>
                                          <stop offset=".75%" stop-color="#f39b00"/>
                                          <stop offset="100%" stop-color="#ce7100"/>
                                        </linearGradient>
                                        <linearGradient id="dmTgtSide" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#f42b24"/>
                                          <stop offset=".5%" stop-color="#d81812"/>
                                          <stop offset="100%" stop-color="#970804"/>
                                        </linearGradient>
                                        <filter id="dmTgtShadow" x="-30%" y="-30%" width="170%" height="180%">
                                          <feDropShadow dx="4" dy="13" stdDeviation="9" flood-color="#4c515b" flood-opacity=".38"/>
                                        </filter>
                                        <filter id="dmTgtDartShadow" x="-30%" y="-30%" width="180%" height="180%">
                                          <feDropShadow dx="3" dy="5" stdDeviation="3" flood-color="#24375e" flood-opacity=".45"/>
                                        </filter>
                                        <filter id="dmTgtBlur">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="246" cy="333" rx="165" ry="24" fill="#666b73" opacity=".25" filter="url(#dmTgtBlur)"/>
                                      <g filter="url(#dmTgtShadow)">
                                        <circle cx="245" cy="187" r="158" fill="url(#dmTgtSide)"/>
                                        <circle cx="245" cy="175" r="153" fill="url(#dmTgtRed)"/>
                                        <path d="M111 124 C132 76 182 45 235 42 C291 39 344 65 377 108" fill="none" stroke="#ff7772" stroke-width="9" stroke-linecap="round" opacity=".55"/>
                                        <circle cx="245" cy="175" r="109" fill="url(#dmTgtWhite)"/>
                                        <circle cx="245" cy="175" r="106" fill="none" stroke="#d4d8e1" stroke-width="4" opacity=".8"/>
                                        <circle cx="245" cy="175" r="76" fill="url(#dmTgtRed)"/>
                                        <path d="M188 147 C199 119 224 101 253 99" fill="none" stroke="#ff6560" stroke-width="6" stroke-linecap="round" opacity=".45"/>
                                        <circle cx="245" cy="175" r="44" fill="url(#dmTgtWhite)"/>
                                        <circle cx="245" cy="175" r="42" fill="none" stroke="#d5d9e2" stroke-width="3"/>
                                        <circle cx="245" cy="175" r="25" fill="url(#dmTgtRed)"/>
                                        <ellipse cx="238" cy="167" rx="10" ry="6" fill="#ff7770" opacity=".55" transform="rotate(-25 238 167)"/>
                                        <path d="M119 116 C145 68 193 45 242 44 C203 56 164 84 141 123 C130 142 124 160 121 180" fill="none" stroke="#fff" stroke-width="6" stroke-linecap="round" opacity=".17"/>
                                      </g>
                                      <g filter="url(#dmTgtDartShadow)">
                                        <path d="M382 66 L411 13 C414 7 422 7 424 13 L426 56 L402 86 Z" fill="url(#dmTgtYellow)"/>
                                        <path d="M393 62 L415 21 L417 55 Z" fill="#fff16d" opacity=".42"/>
                                        <path d="M399 76 L454 70 C461 69 464 76 459 81 L422 108 L391 96 Z" fill="url(#dmTgtYellow)"/>
                                        <path d="M411 80 L449 76 L422 96 Z" fill="#ffe867" opacity=".42"/>
                                        <path d="M244 174 C276 154 309 133 342 111 C364 96 388 80 407 65 L420 82 C394 100 370 116 347 132 C314 154 278 177 251 190 Z" fill="url(#dmTgtBlue)"/>
                                        <path d="M253 177 C286 156 323 131 356 109 C377 95 394 82 407 72" fill="none" stroke="url(#dmTgtBlueShine)" stroke-width="5" stroke-linecap="round" opacity=".75"/>
                                        <path d="M402 65 C411 54 425 44 437 41 C446 39 454 43 457 50 C461 58 456 66 448 73 C437 82 426 87 417 84 Z" fill="url(#dmTgtBlue)"/>
                                        <path d="M414 59 C422 50 434 45 444 47 C435 51 426 58 419 67 Z" fill="#63c5ff" opacity=".5"/>
                                        <ellipse cx="248" cy="178" rx="15" ry="10" fill="#003da8" opacity=".28"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">STRATEGY &amp; PLANNING</h3>
                                    <p class="seo-step-desc m-0">
                                        Based on insights, we create a customized digital marketing strategy including the right channels, content plan, and campaign structure to reach your business goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-red"><span>02</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 03: CAMPAIGN EXECUTION -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">CAMPAIGN EXECUTION</h3>
                                    <p class="seo-step-desc m-0">
                                        We implement SEO, social media, Google Ads, email marketing, and content marketing campaigns with a focus on engagement and conversions.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Red/White Megaphone + Floating Social Media Icons -->
                                    <svg class="seo-step-svg" width="180" height="145" viewBox="0 0 380 290" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="megaRed" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ff4d4d"/>
                                          <stop offset="45%" stop-color="#ef4444"/>
                                          <stop offset="100%" stop-color="#b91c1c"/>
                                        </linearGradient>
                                        <linearGradient id="megaYellowFlare" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#fde047"/>
                                          <stop offset="100%" stop-color="#d97706"/>
                                        </linearGradient>
                                        <linearGradient id="fbBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="100%" stop-color="#1877f2"/>
                                        </linearGradient>
                                        <linearGradient id="igGrad" x1="0" y1="1" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#f59e0b"/>
                                          <stop offset="50%" stop-color="#e1306c"/>
                                          <stop offset="100%" stop-color="#833ab4"/>
                                        </linearGradient>
                                        <linearGradient id="ytRed" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ff4d4d"/>
                                          <stop offset="100%" stop-color="#dc2626"/>
                                        </linearGradient>
                                        <filter id="megaShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="3" dy="8" stdDeviation="6" flood-color="#450a0a" flood-opacity="0.4"/>
                                        </filter>
                                        <filter id="socialShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="5" stdDeviation="4" flood-color="#0f172a" flood-opacity="0.35"/>
                                        </filter>
                                        <filter id="megaSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="180" cy="260" rx="135" ry="14" fill="#334155" opacity="0.2" filter="url(#megaSoftFloor)"/>

                                      <!-- 3D Megaphone Body -->
                                      <g transform="translate(135, 145) rotate(-22)" filter="url(#megaShadow)">
                                        <!-- Navy Handle -->
                                        <path d="M-40 25 L-25 75 C-25 82 -32 86 -38 84 L-52 40 Z" fill="#1e293b"/>
                                        <rect x="-42" y="24" width="22" height="10" rx="3" fill="#334155"/>

                                        <!-- Rear White Cylinder -->
                                        <rect x="-65" y="-22" width="30" height="44" rx="8" fill="#ffffff"/>
                                        <rect x="-68" y="-12" width="8" height="24" rx="3" fill="#ef4444"/>

                                        <!-- Red Megaphone Cone -->
                                        <path d="M-38 -20 L75 -65 L75 65 L-38 20 Z" fill="url(#megaRed)"/>
                                        <path d="M-36 -18 L70 -58" stroke="#ff8b8b" stroke-width="4" stroke-linecap="round" opacity="0.7"/>

                                        <!-- Front Cone Flare (Yellow/Orange Inner) -->
                                        <ellipse cx="75" cy="0" rx="16" ry="65" fill="url(#megaYellowFlare)"/>
                                        <ellipse cx="75" cy="0" rx="8" ry="45" fill="#78350f"/>
                                        <circle cx="75" cy="0" r="14" fill="#fde047"/>
                                      </g>

                                      <!-- Floating 3D Social Media Badges -->
                                      <!-- Facebook (Top Left) -->
                                      <g transform="translate(245, 45)" filter="url(#socialShadow)">
                                        <rect x="0" y="0" width="44" height="44" rx="12" fill="url(#fbBlue)"/>
                                        <text x="22" y="32" font-family="Plus Jakarta Sans, Arial, sans-serif" font-size="28" font-weight="800" fill="#ffffff" text-anchor="middle">f</text>
                                      </g>

                                      <!-- Instagram (Top Right) -->
                                      <g transform="translate(305, 55)" filter="url(#socialShadow)">
                                        <rect x="0" y="0" width="44" height="44" rx="12" fill="url(#igGrad)"/>
                                        <rect x="10" y="10" width="24" height="24" rx="7" fill="none" stroke="#ffffff" stroke-width="2.5"/>
                                        <circle cx="22" cy="22" r="6" fill="none" stroke="#ffffff" stroke-width="2.5"/>
                                        <circle cx="28" cy="16" r="1.5" fill="#ffffff"/>
                                      </g>

                                      <!-- YouTube (Bottom Left) -->
                                      <g transform="translate(255, 115)" filter="url(#socialShadow)">
                                        <rect x="0" y="0" width="44" height="44" rx="12" fill="url(#ytRed)"/>
                                        <polygon points="17,14 31,22 17,30" fill="#ffffff"/>
                                      </g>

                                      <!-- Thumbs Up / Like (Bottom Right) -->
                                      <g transform="translate(305, 150)" filter="url(#socialShadow)">
                                        <rect x="0" y="0" width="44" height="44" rx="12" fill="url(#fbBlue)"/>
                                        <path d="M14 26 V18 H18 L24 10 C25 10 26 12 25 14 L24 18 H30 C32 18 33 20 32 22 L30 28 C29 30 27 30 25 30 H18 Z" fill="#ffffff"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-cyan"><span>03</span></div></div>
                        <div class="seo-dashed-divider seo-divider-left" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 04: MONITOR & OPTIMIZE -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left order-2 order-md-1 pe-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-end">
                                    <!-- 3D Desktop Screen with 3D Bar Chart & Upward Trend Arrow -->
                                    <svg class="seo-step-svg" width="170" height="145" viewBox="0 0 380 290" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="scrFrame" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="100%" stop-color="#cbd5e1"/>
                                        </linearGradient>
                                        <linearGradient id="scrInner" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#f8fafc"/>
                                          <stop offset="100%" stop-color="#e2e8f0"/>
                                        </linearGradient>
                                        <linearGradient id="scrArrowGreen" x1="0" y1="1" x2="1" y2="0">
                                          <stop offset="0%" stop-color="#34d399"/>
                                          <stop offset="50%" stop-color="#10b981"/>
                                          <stop offset="100%" stop-color="#059669"/>
                                        </linearGradient>
                                        <filter id="scrShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="8" stdDeviation="6" flood-color="#334155" flood-opacity="0.32"/>
                                        </filter>
                                        <filter id="scrArrowShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="6" stdDeviation="5" flood-color="#064e3b" flood-opacity="0.45"/>
                                        </filter>
                                        <filter id="scrSoftFloor">
                                          <feGaussianBlur stdDeviation="7"/>
                                        </filter>
                                      </defs>
                                      <ellipse cx="190" cy="265" rx="135" ry="14" fill="#475569" opacity="0.2" filter="url(#scrSoftFloor)"/>

                                      <g filter="url(#scrShadow)">
                                        <!-- Stand Base -->
                                        <path d="M145 240 H235 L225 220 H155 Z" fill="#0284c7"/>
                                        <rect x="135" y="238" width="110" height="12" rx="6" fill="#38bdf8"/>
                                        <rect x="175" y="190" width="30" height="35" rx="3" fill="#0284c7"/>

                                        <!-- Monitor Outer Bezel (White/Silver Frame) -->
                                        <rect x="50" y="32" width="280" height="175" rx="16" fill="url(#scrFrame)"/>
                                        <!-- Screen Area -->
                                        <rect x="62" y="44" width="256" height="145" rx="10" fill="url(#scrInner)"/>

                                        <!-- Left Skeletons & Metric Lines -->
                                        <rect x="76" y="58" width="55" height="7" rx="3.5" fill="#94a3b8"/>
                                        <rect x="76" y="70" width="40" height="5" rx="2.5" fill="#cbd5e1"/>

                                        <!-- 4 Stepped 3D Bar Columns on Screen -->
                                        <!-- Bar 1 (Blue) -->
                                        <rect x="155" y="130" width="24" height="45" rx="4" fill="#0284c7"/>
                                        <!-- Bar 2 (Cyan) -->
                                        <rect x="188" y="108" width="24" height="67" rx="4" fill="#38bdf8"/>
                                        <!-- Bar 3 (Yellow) -->
                                        <rect x="221" y="85" width="24" height="90" rx="4" fill="#eab308"/>
                                        <!-- Bar 4 (Red) -->
                                        <rect x="254" y="62" width="24" height="113" rx="4" fill="#ef4444"/>
                                      </g>

                                      <!-- 3D Green Upward Trend Curve Arrow -->
                                      <g filter="url(#scrArrowShadow)">
                                        <path d="M140 145 Q200 110 270 45" fill="none" stroke="url(#scrArrowGreen)" stroke-width="14" stroke-linecap="round"/>
                                        <polygon points="260,25 298,36 284,72" fill="url(#scrArrowGreen)"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right order-1 order-md-2 text-start ps-md-5">
                                <div class="seo-step-text-wrap me-md-auto">
                                    <h3 class="seo-step-title">MONITOR &amp; OPTIMIZE</h3>
                                    <p class="seo-step-desc m-0">
                                        We continuously track performance, analyze key metrics, and optimize campaigns to improve results and ensure the best ROI.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-navy"><span>04</span></div></div>
                        <div class="seo-dashed-divider seo-divider-right" aria-hidden="true"></div>
                    </div>

                    <!-- STEP 05: GROW & SCALE -->
                    <div class="seo-step-block position-relative">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 col-12 seo-col-left text-start text-md-end pe-md-5">
                                <div class="seo-step-text-wrap ms-md-auto">
                                    <h3 class="seo-step-title">GROW &amp; SCALE</h3>
                                    <p class="seo-step-desc m-0">
                                        Once we achieve consistent results, we focus on scaling successful strategies to drive long-term brand growth and higher revenue.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 seo-col-right ps-md-5">
                                <div class="seo-step-visual-wrap d-flex align-items-center justify-content-center justify-content-md-start">
                                    <!-- 3D Space Rocket Blasting Off with Smoke Clouds -->
                                    <svg class="seo-step-svg" width="170" height="150" viewBox="0 0 380 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <defs>
                                        <linearGradient id="dmRktBody" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ffffff"/>
                                          <stop offset="60%" stop-color="#f1f5f9"/>
                                          <stop offset="100%" stop-color="#cbd5e1"/>
                                        </linearGradient>
                                        <linearGradient id="dmRktRed" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#ff4d4d"/>
                                          <stop offset="50%" stop-color="#ef4444"/>
                                          <stop offset="100%" stop-color="#b91c1c"/>
                                        </linearGradient>
                                        <linearGradient id="dmRktBlue" x1="0" y1="0" x2="1" y2="1">
                                          <stop offset="0%" stop-color="#38bdf8"/>
                                          <stop offset="100%" stop-color="#0284c7"/>
                                        </linearGradient>
                                        <linearGradient id="dmRktFire" x1="0" y1="0" x2="0" y2="1">
                                          <stop offset="0%" stop-color="#fde047"/>
                                          <stop offset="50%" stop-color="#f97316"/>
                                          <stop offset="100%" stop-color="#ef4444"/>
                                        </linearGradient>
                                        <filter id="dmRktShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="4" dy="10" stdDeviation="7" flood-color="#0f172a" flood-opacity="0.38"/>
                                        </filter>
                                        <filter id="dmCloudShadow" x="-30%" y="-30%" width="160%" height="170%">
                                          <feDropShadow dx="2" dy="6" stdDeviation="5" flood-color="#475569" flood-opacity="0.3"/>
                                        </filter>
                                        <filter id="dmRktFloor">
                                          <feGaussianBlur stdDeviation="8"/>
                                        </filter>
                                      </defs>
                                      
                                      <!-- Floor Shadow -->
                                      <ellipse cx="190" cy="275" rx="130" ry="14" fill="#334155" opacity="0.22" filter="url(#dmRktFloor)"/>

                                      <!-- 3D Rocket In Flight (Centered & Angled) -->
                                      <g transform="translate(195, 120) rotate(38)" filter="url(#dmRktShadow)">
                                        <!-- Thruster Flame Exhaust -->
                                        <path d="M-12 68 Q0 120 0 125 Q0 120 12 68 Z" fill="url(#dmRktFire)"/>
                                        <path d="M-6 68 Q0 98 0 102 Q0 98 6 68 Z" fill="#ffffff"/>

                                        <!-- Rocket Side Wings / Fins -->
                                        <path d="M-22 42 L-48 72 L-22 66 Z" fill="url(#dmRktBlue)"/>
                                        <path d="M22 42 L48 72 L22 66 Z" fill="url(#dmRktBlue)"/>

                                        <!-- Rocket Main Fuselage Body -->
                                        <path d="M0 -60 C32 -18 34 38 22 70 H-22 C-34 38 -32 -18 0 -60 Z" fill="url(#dmRktBody)"/>
                                        <!-- Red Nose Cone -->
                                        <path d="M0 -60 C18 -36 26 -12 28 0 H-28 C-26 -12 -18 -36 0 -60 Z" fill="url(#dmRktRed)"/>
                                        <path d="M-18 10 C-20 28 -18 48 -15 60" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" opacity="0.8"/>

                                        <!-- Glass Porthole Window -->
                                        <circle cx="0" cy="20" r="16" fill="#0284c7"/>
                                        <circle cx="0" cy="20" r="12" fill="#38bdf8"/>
                                        <circle cx="-4" cy="16" r="3.5" fill="#ffffff" opacity="0.85"/>
                                      </g>

                                      <!-- 3D Fluffy Smoke & Cloud Puffs at Launch Base -->
                                      <g filter="url(#dmCloudShadow)">
                                        <circle cx="125" cy="245" r="28" fill="#e2e8f0"/>
                                        <circle cx="155" cy="235" r="34" fill="#f8fafc"/>
                                        <circle cx="195" cy="225" r="38" fill="#ffffff"/>
                                        <circle cx="235" cy="235" r="34" fill="#f8fafc"/>
                                        <circle cx="265" cy="245" r="28" fill="#e2e8f0"/>
                                        <circle cx="180" cy="250" r="26" fill="#ffffff"/>
                                        <circle cx="215" cy="250" r="26" fill="#ffffff"/>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="seo-badge-center"><div class="seo-number-circle seo-bg-green"><span>05</span></div></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Lightweight Interactive Tabs Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.process-tab-btn');
    const headerContents = document.querySelectorAll('.process-header-content');
    const processPanes = document.querySelectorAll('.process-pane');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetProcess = this.getAttribute('data-process');

            // 1. Update Active State on Buttons
            tabButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // 2. Update Header Content via CSS classes
            headerContents.forEach(head => head.classList.remove('active'));
            const targetHead = document.getElementById('procHead_' + targetProcess);
            if (targetHead) {
                targetHead.classList.add('active');
            }

            // 3. Switch Process Panes via CSS classes
            processPanes.forEach(pane => pane.classList.remove('active'));
            const targetPane = document.getElementById('procPane_' + targetProcess);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });
});
</script>
