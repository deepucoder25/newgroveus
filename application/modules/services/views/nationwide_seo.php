<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. Define Nationwide SEO Vector Artwork SVG
ob_start(); ?>
<svg viewBox="0 0 762 550" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
  <defs>
    <!-- ==============================
         GRADIENTS
    =============================== -->
    <linearGradient id="indiaBlue" x1="150" y1="70" x2="540" y2="440" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#69B3FF"/><stop offset="0.55" stop-color="#4599F2"/><stop offset="1" stop-color="#277DDA"/>
    </linearGradient>

    <linearGradient id="pinRed" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#F33C42"/><stop offset="1" stop-color="#D9232B"/>
    </linearGradient>

    <linearGradient id="laptopBlue" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#345A7C"/><stop offset="1" stop-color="#193A59"/>
    </linearGradient>

    <linearGradient id="chartBlue" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0" stop-color="#3E9BF5"/><stop offset="1" stop-color="#1975DD"/>
    </linearGradient>

    <linearGradient id="plantGreen" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#55BD70"/><stop offset="1" stop-color="#218B4D"/>
    </linearGradient>

    <linearGradient id="mapPaper" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#E7F6FF"/><stop offset="1" stop-color="#BBDFF5"/>
    </linearGradient>

    <!-- 3D Realistic Pin Gradients -->
    <linearGradient id="pin3dFront" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#FF5252"/><stop offset="35%" stop-color="#EF233C"/><stop offset="80%" stop-color="#D90429"/><stop offset="100%" stop-color="#B2001F"/>
    </linearGradient>

    <linearGradient id="pin3dSide" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#C9182B"/><stop offset="50%" stop-color="#9E0C17"/><stop offset="100%" stop-color="#73050D"/>
    </linearGradient>

    <linearGradient id="pin3dInnerHole" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#66040A"/><stop offset="45%" stop-color="#9E0C17"/><stop offset="100%" stop-color="#FF6B6B"/>
    </linearGradient>

    <linearGradient id="pin3dInnerSide" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#7A080F"/><stop offset="100%" stop-color="#A8131C"/>
    </linearGradient>

    <!-- 3D Map Accordion Gradients -->
    <linearGradient id="mapFold1" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#FFFFFF"/><stop offset="100%" stop-color="#E2F1FC"/></linearGradient>
    <linearGradient id="mapFold2" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#D5E9F8"/><stop offset="100%" stop-color="#C2DFF4"/></linearGradient>
    <linearGradient id="mapFold3" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#FFFFFF"/><stop offset="100%" stop-color="#E2F1FC"/></linearGradient>
    <linearGradient id="mapFold4" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#D5E9F8"/><stop offset="100%" stop-color="#C2DFF4"/></linearGradient>

    <!-- ==============================
         SHADOWS
    =============================== -->
    <filter id="cardShadow" x="-30%" y="-30%" width="160%" height="170%">
      <feDropShadow dx="0" dy="5" stdDeviation="7" flood-color="#527995" flood-opacity=".18"/>
    </filter>
    <filter id="objectShadow" x="-30%" y="-30%" width="160%" height="170%">
      <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#426B87" flood-opacity=".20"/>
    </filter>
    <filter id="smallShadow" x="-30%" y="-30%" width="160%" height="170%">
      <feDropShadow dx="0" dy="3" stdDeviation="4" flood-color="#426B87" flood-opacity=".16"/>
    </filter>

    <!-- ==============================
         INDIA MAP CLIP
    =============================== -->
    <clipPath id="indiaClip">
      <path d="M245 45 L270 58 L287 49 L309 65 L323 84 L345 96 L365 119 L393 133 L407 153 L437 161 L453 177 L478 180 L494 196 L519 205 L529 226 L514 243 L494 250 L486 270 L472 283 L460 308 L444 326 L431 349 L419 375 L399 398 L383 420 L368 438 L351 425 L336 404 L320 389 L301 373 L284 357 L266 347 L248 330 L230 312 L215 295 L202 275 L187 258 L174 239 L157 224 L145 205 L151 185 L166 173 L174 154 L190 141 L199 122 L211 107 L220 89 L232 74 Z"/>
    </clipPath>
  </defs>

  <!-- BACKGROUND -->
  <rect width="762" height="550" fill="#FFFFFF"/>
  <path d="M40 373 C60 290 112 239 185 215 C250 194 267 130 328 91 C399 46 486 54 544 96 C612 145 685 153 733 216 C780 279 778 353 738 411 C687 485 590 491 506 480 C411 468 340 500 247 489 C148 477 63 441 40 373Z" fill="#F3FAFF"/>

  <!-- VERY LIGHT WORLD MAP -->
  <g fill="#E2F2FC" opacity=".58">
    <path d="M42 135 L70 104 L110 91 L147 101 L172 124 L163 148 L140 157 L128 181 L96 181 L76 198 L54 183 L61 157 L42 148Z"/>
    <path d="M167 215 L194 229 L201 260 L190 299 L174 335 L155 360 L142 329 L147 297 L137 267 L148 240Z"/>
    <path d="M323 108 L351 94 L378 99 L394 113 L382 128 L355 128 L338 139 L317 127Z"/>
    <path d="M342 149 L378 146 L401 166 L405 204 L391 246 L369 281 L347 257 L335 219 L326 178Z"/>
    <path d="M385 100 L430 82 L477 89 L517 104 L551 122 L592 125 L623 145 L615 169 L580 174 L552 189 L511 176 L477 182 L443 164 L410 151 L388 132Z"/>
    <path d="M580 276 L620 267 L656 280 L673 305 L655 325 L618 326 L588 312Z"/>
  </g>

  <!-- DOTTED ROUTE LINES -->
  <g fill="none" stroke="#4B9CF3" stroke-width="2" stroke-dasharray="6 6" stroke-linecap="round" opacity=".85">
    <path d="M213 119 C270 117 293 126 317 163"/>
    <path d="M317 163 C363 104 417 102 491 105"/>
    <path d="M420 177 C477 160 527 174 579 202"/>
    <path d="M282 238 C335 215 381 213 427 228"/>
    <path d="M193 203 C222 213 249 233 276 253"/>
  </g>

  <!-- INDIA MAP -->
  <g filter="url(#objectShadow)">
    <path d="M245 45 L270 58 L287 49 L309 65 L323 84 L345 96 L365 119 L393 133 L407 153 L437 161 L453 177 L478 180 L494 196 L519 205 L529 226 L514 243 L494 250 L486 270 L472 283 L460 308 L444 326 L431 349 L419 375 L399 398 L383 420 L368 438 L351 425 L336 404 L320 389 L301 373 L284 357 L266 347 L248 330 L230 312 L215 295 L202 275 L187 258 L174 239 L157 224 L145 205 L151 185 L166 173 L174 154 L190 141 L199 122 L211 107 L220 89 L232 74 Z" fill="url(#indiaBlue)" stroke="#65B0F8" stroke-width="2"/>
    <!-- State Lines -->
    <g clip-path="url(#indiaClip)" fill="none" stroke="#B9DDFA" stroke-width="1.3" opacity=".95">
      <path d="M190 143 L260 145 L322 135 L387 146 L450 165 L505 183"/>
      <path d="M166 177 L235 182 L303 173 L365 184 L426 190 L487 207"/>
      <path d="M154 210 L220 215 L284 209 L346 218 L411 226 L480 235"/>
      <path d="M176 241 L238 244 L301 239 L362 249 L427 257 L478 267"/>
      <path d="M194 274 L252 270 L315 278 L373 282 L444 292"/>
      <path d="M218 306 L276 299 L335 311 L394 315 L451 310"/>
      <path d="M245 338 L300 329 L351 343 L407 339"/>
      <path d="M282 370 L328 356 L376 369 L415 360"/>
      <path d="M232 73 L246 130 L238 184 L249 238 L247 291 L263 344"/>
      <path d="M274 55 L282 112 L275 168 L287 220 L281 279 L297 355"/>
      <path d="M316 70 L310 125 L320 180 L311 232 L327 290 L319 388"/>
      <path d="M356 101 L351 145 L365 197 L353 250 L369 305 L356 424"/>
      <path d="M397 134 L391 181 L405 224 L393 275 L411 330 L383 411"/>
      <path d="M437 162 L430 207 L445 251 L429 300 L445 337"/>
      <path d="M474 181 L462 221 L475 261 L460 302"/>
    </g>
  </g>

  <!-- LEFT INFORMATION CARD (LOCAL SEARCH VISIBILITY) -->
  <g filter="url(#cardShadow)">
    <rect x="52" y="88" width="183" height="62" rx="13" fill="#FFFFFF"/>
    <circle cx="84" cy="119" r="17" fill="#E72E35"/>
    <circle cx="81" cy="116" r="7" fill="none" stroke="#FFFFFF" stroke-width="3"/>
    <line x1="86" y1="121" x2="93" y2="128" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
    <text x="112" y="112" font-family="Arial, Helvetica, sans-serif" font-size="13" font-weight="600" fill="#173D63">Local</text>
    <text x="112" y="130" font-family="Arial, Helvetica, sans-serif" font-size="13" font-weight="600" fill="#173D63">Search Visibility</text>
  </g>

  <!-- HIGHER RANKINGS CARD -->
  <g filter="url(#cardShadow)">
    <rect x="496" y="69" width="159" height="62" rx="12" fill="#FFFFFF"/>
    <rect x="514" y="104" width="7" height="14" rx="2" fill="url(#pinRed)"/>
    <rect x="524" y="96" width="7" height="22" rx="2" fill="url(#pinRed)"/>
    <rect x="534" y="87" width="7" height="31" rx="2" fill="url(#pinRed)"/>
    <path d="M511 103 L520 93 L528 97 L541 78" fill="none" stroke="url(#pinRed)" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
    <polygon points="546,74 534,77 540,83" fill="url(#pinRed)"/>
    <text x="554" y="94" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="700" fill="#173D63">Higher</text>
    <text x="554" y="113" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="700" fill="#173D63">Rankings</text>
  </g>

  <!-- PAN INDIA CARD -->
  <g filter="url(#cardShadow)">
    <rect x="555" y="191" width="158" height="62" rx="12" fill="#FFFFFF"/>
    <path d="M587 204 C579 204 573 211 573 219 C573 230 587 243 587 243 C587 243 601 230 601 219 C601 211 595 204 587 204Z" fill="url(#pinRed)"/>
    <circle cx="587" cy="218" r="5" fill="#FFFFFF"/>
    <text x="620" y="217" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="600" fill="#173D63">Pan India</text>
    <text x="620" y="236" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="600" fill="#173D63">Coverage</text>
  </g>

  <!-- MAP LOCATION PINS -->
  <!-- Rajasthan -->
  <g filter="url(#cardShadow)">
    <path d="M187 193 C179 193 173 200 173 209 C173 221 187 234 187 234 C187 234 201 221 201 209 C201 200 195 193 187 193Z" fill="url(#pinRed)"/>
    <circle cx="187" cy="208" r="5" fill="#FFFFFF"/>
  </g>
  <!-- Delhi / North -->
  <g filter="url(#cardShadow)">
    <path d="M285 128 C277 128 271 135 271 144 C271 156 285 169 285 169 C285 169 299 156 299 144 C299 135 293 128 285 128Z" fill="url(#pinRed)"/>
    <circle cx="285" cy="143" r="5" fill="#FFFFFF"/>
  </g>
  <!-- West/Central -->
  <g filter="url(#cardShadow)">
    <path d="M258 255 C250 255 244 262 244 271 C244 283 258 296 258 296 C258 296 272 283 272 271 C272 262 266 255 258 255Z" fill="url(#pinRed)"/>
    <circle cx="258" cy="270" r="5" fill="#FFFFFF"/>
  </g>
  <!-- Central India -->
  <g filter="url(#cardShadow)">
    <path d="M334 211 C326 211 320 218 320 227 C320 239 334 252 334 252 C334 252 348 239 348 227 C348 218 342 211 334 211Z" fill="url(#pinRed)"/>
    <circle cx="334" cy="226" r="5" fill="#FFFFFF"/>
  </g>
  <!-- East -->
  <g filter="url(#cardShadow)">
    <path d="M432 157 C424 157 418 164 418 173 C418 185 432 198 432 198 C432 198 446 185 446 173 C446 164 440 157 432 157Z" fill="url(#pinRed)"/>
    <circle cx="432" cy="172" r="5" fill="#FFFFFF"/>
  </g>

  <!-- 3D FOLDED ROAD MAP & 3D LOCATION PIN (SCALED DOWN) -->
  <g transform="translate(52, 98) scale(0.78)">
    <g filter="url(#objectShadow)">
      <polygon points="65,482 128,450 116,508 52,538" fill="url(#mapFold1)" stroke="#FFFFFF" stroke-width="3.5" stroke-linejoin="round"/>
      <polygon points="68,485 100,470 95,496 62,510" fill="#4ADE80" opacity=".85"/>
      <polygon points="102,468 125,456 120,480 97,492" fill="#60A5FA" opacity=".85"/>
      <polygon points="60,514 92,500 88,524 55,535" fill="#3B82F6" opacity=".85"/>
      <path d="M65,483 Q95,495 116,507" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round"/>
      <path d="M100,470 L90,522" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>

      <polygon points="128,450 192,476 179,534 116,508" fill="url(#mapFold2)" stroke="#FFFFFF" stroke-width="3.5" stroke-linejoin="round"/>
      <polygon points="130,453 162,465 156,492 124,478" fill="#3B82F6" opacity=".85"/>
      <polygon points="165,467 189,476 182,503 158,494" fill="#22C55E" opacity=".85"/>
      <polygon points="122,482 153,495 147,522 118,506" fill="#60A5FA" opacity=".85"/>
      <polygon points="155,497 180,505 174,531 149,522" fill="#86EFAC" opacity=".85"/>
      <path d="M128,452 Q158,485 179,533" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round"/>
      <path d="M125,478 Q155,492 188,477" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
      <path d="M148,522 L180,504" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>

      <polygon points="192,476 256,444 243,502 179,534" fill="url(#mapFold3)" stroke="#FFFFFF" stroke-width="3.5" stroke-linejoin="round"/>
      <polygon points="195,478 226,462 220,490 189,504" fill="#22C55E" opacity=".85"/>
      <polygon points="228,460 252,448 246,475 222,487" fill="#60A5FA" opacity=".85"/>
      <polygon points="187,508 217,493 211,519 181,532" fill="#3B82F6" opacity=".85"/>
      <polygon points="219,492 243,478 237,504 213,517" fill="#4ADE80" opacity=".85"/>
      <path d="M189,504 Q220,488 255,446" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round"/>
      <path d="M194,478 Q225,492 242,501" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
      <path d="M225,462 L212,518" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>

      <polygon points="256,444 318,470 305,526 243,502" fill="url(#mapFold4)" stroke="#FFFFFF" stroke-width="3.5" stroke-linejoin="round"/>
      <polygon points="258,447 288,459 282,485 252,472" fill="#3B82F6" opacity=".85"/>
      <polygon points="290,461 315,471 308,497 284,486" fill="#86EFAC" opacity=".85"/>
      <polygon points="250,476 279,488 273,514 245,501" fill="#4ADE80" opacity=".85"/>
      <polygon points="281,490 306,499 300,523 275,513" fill="#60A5FA" opacity=".85"/>
      <path d="M256,446 Q285,482 305,524" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round"/>
      <path d="M252,472 Q280,487 314,472" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>

      <line x1="128" y1="450" x2="116" y2="508" stroke="#1E293B" stroke-width="1.8" opacity=".2"/>
      <line x1="192" y1="476" x2="179" y2="534" stroke="#1E293B" stroke-width="2.2" opacity=".28"/>
      <line x1="256" y1="444" x2="243" y2="502" stroke="#1E293B" stroke-width="1.8" opacity=".2"/>
    </g>

    <!-- 3D Large Pin -->
    <g filter="url(#objectShadow)">
      <ellipse cx="206" cy="488" rx="24" ry="7" fill="#0F172A" opacity=".35"/>
      <ellipse cx="206" cy="488" rx="14" ry="4" fill="#0F172A" opacity=".5"/>
      <path d="M206 488 C206 488 254 445 254 402 C254 366 230 338 202 338 L211 341 C242 343 267 371 267 407 C267 449 214 492 211 492 Z" fill="url(#pin3dSide)"/>
      <path d="M202 370 C184 370 170 384 170 402 C170 410 173 417 178 423 L185 425 C179 419 176 411 176 402 C176 387 188 374 205 374 Z" fill="url(#pin3dInnerHole)"/>
      <path d="M202 434 C220 434 234 420 234 402 C234 394 231 387 226 381 L219 379 C225 385 228 393 228 402 C228 417 216 430 199 430 Z" fill="url(#pin3dInnerSide)"/>
      <path d="M202 338 C166 338 138 366 138 402 C138 442 202 488 202 488 C202 488 266 442 266 402 C266 366 238 338 202 338 Z M202 370 C220 370 234 384 234 402 C234 420 220 434 202 434 C184 434 170 420 170 402 C170 384 184 370 202 370 Z" fill="url(#pin3dFront)" fill-rule="evenodd"/>
      <path d="M152 388 C149 370 166 348 188 343" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round" opacity=".55"/>
      <path d="M196 342 C216 343 234 353 246 368" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" opacity=".4"/>
      <path d="M186 428 C204 433 222 422 227 406" fill="none" stroke="#FFB3B6" stroke-width="2.8" stroke-linecap="round" opacity=".8"/>
    </g>
  </g>

  <!-- LAPTOP -->
  <rect x="302" y="294" width="330" height="226" rx="12" fill="url(#laptopBlue)" filter="url(#objectShadow)"/>
  <rect x="311" y="303" width="312" height="202" rx="5" fill="#E9F3F9"/>
  <rect x="318" y="311" width="298" height="188" rx="3" fill="#FFFFFF"/>
  <circle cx="467" cy="300" r="2.5" fill="#183B58"/>

  <!-- Google Search Bar -->
  <rect x="333" y="329" width="267" height="40" rx="20" fill="#FFFFFF" stroke="#DDECF6" stroke-width="2" filter="url(#smallShadow)"/>
  <g transform="translate(347 338)">
    <path d="M20 10 H10 V16 H15 C14 19 12 21 9 21 C5 21 2 18 2 14 C2 10 5 7 9 7 C11 7 13 8 15 10 L19 6 C16 3 13 2 9 2 C3 2 -2 7 -2 14 C-2 21 3 26 9 26 C16 26 21 21 21 15 C21 13 21 11 20 10Z" fill="#4285F4" transform="scale(.68)"/>
  </g>
  <text x="373" y="354" font-family="Arial, Helvetica, sans-serif" font-size="14" fill="#607C94">Your Business</text>
  <circle cx="588" cy="348" r="7" fill="none" stroke="#2789EF" stroke-width="2.7"/>
  <line x1="593" y1="353" x2="599" y2="359" stroke="#2789EF" stroke-width="2.7" stroke-linecap="round"/>

  <!-- Search Result Preview Lines -->
  <rect x="342" y="381" width="122" height="8" rx="4" fill="#2F8FF1"/>
  <rect x="342" y="398" width="68" height="7" rx="3.5" fill="#67BE91"/>
  <rect x="416" y="398" width="83" height="7" rx="3.5" fill="#D5E3EC"/>
  <rect x="342" y="414" width="151" height="7" rx="3.5" fill="#D9E5ED"/>
  <rect x="342" y="444" width="111" height="8" rx="4" fill="#318EF0"/>
  <rect x="342" y="461" width="68" height="7" rx="3.5" fill="#69BE92"/>
  <rect x="416" y="461" width="81" height="7" rx="3.5" fill="#D5E2EB"/>
  <rect x="342" y="477" width="146" height="7" rx="3.5" fill="#D9E5ED"/>

  <!-- Laptop Base -->
  <path d="M280 500 H650 L683 535 C686 538 682 541 677 541 H245 C240 541 237 537 241 534 Z" fill="#A8CBE4" filter="url(#smallShadow)"/>
  <path d="M306 504 H625 L646 526 H285Z" fill="#244864"/>
  <g stroke="#62819A" stroke-width="2" opacity=".65">
    <path d="M320 510 H613"/><path d="M312 516 H620"/><path d="M306 522 H627"/>
  </g>
  <path d="M417 507 H500 L492 522 H425Z" fill="#55758D" opacity=".75"/>

  <!-- Floating SEO Chart on Screen -->
  <g filter="url(#cardShadow)">
    <rect x="522" y="379" width="99" height="88" rx="9" fill="#FFFFFF"/>
    <rect x="536" y="435" width="11" height="21" rx="2" fill="url(#chartBlue)"/>
    <rect x="553" y="423" width="11" height="33" rx="2" fill="url(#chartBlue)"/>
    <rect x="570" y="410" width="11" height="46" rx="2" fill="url(#chartBlue)"/>
    <rect x="587" y="395" width="11" height="61" rx="2" fill="url(#chartBlue)"/>
    <path d="M533 426 L551 414 L563 421 L579 405 L601 389" fill="none" stroke="#5AA9F5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M592 390 L602 388 L600 399" fill="none" stroke="#2380E6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
  </g>

  <!-- Large Growth Graph on Far Right -->
  <g>
    <rect x="638" y="402" width="12" height="52" rx="2" fill="url(#chartBlue)"/>
    <rect x="663" y="387" width="12" height="67" rx="2" fill="url(#chartBlue)"/>
    <rect x="688" y="368" width="12" height="86" rx="2" fill="url(#chartBlue)"/>
    <rect x="713" y="350" width="12" height="104" rx="2" fill="url(#chartBlue)"/>
    <path d="M623 418 L650 399 L669 407 L695 385 L724 354" fill="none" stroke="#E52D34" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M708 354 L728 349 L724 369" fill="none" stroke="#E52D34" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
  </g>

  <!-- Ground Shadows -->
  <ellipse cx="391" cy="536" rx="326" ry="10" fill="#DDEFF9"/>
  <ellipse cx="454" cy="538" rx="210" ry="6" fill="#C9E4F4" opacity=".7"/>
</svg>
<?php $nationwide_seo_svg = ob_get_clean(); ?>

<!-- 2. Render Reusable Dynamic Slider Component -->
<?php $this->load->view('services/dynamic_slider_services', [
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Nationwide SEO Services']
    ],
    'title' => 'Nationwide <span class="text-danger-highlight">SEO Services</span>',
    'description' => 'No matter where you are, we\'re here to help. Our nationwide SEO services ensure your business gets found across every city and region in India with local expertise and proven strategies.',
    'cta_text' => 'Grow Your Business Nationwide',
    'cta_url' => site_url('contact-us'),
    'highlights' => [
        [
            'icon' => 'bi bi-geo-alt-fill',
            'title' => 'All India',
            'subtitle' => 'Coverage'
        ],
        [
            'icon' => 'bi bi-bar-chart-line-fill',
            'title' => 'Local SEO',
            'subtitle' => 'Expertise'
        ],
        [
            'icon' => 'bi bi-shield-check',
            'title' => 'Better',
            'subtitle' => 'Search Rankings'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'title' => 'More',
            'subtitle' => 'Business Leads'
        ]
    ],
    'svg' => $nationwide_seo_svg
]); ?>

<!-- 3. Nationwide SEO Details Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="service-main-content bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h2 class="fw-bold mb-3">Scale Beyond City Boundaries with Countrywide Search Dominance</h2>
                    <p class="text-muted leading-relaxed mb-4">
                        Capture high-intent enterprise, multi-location, and commercial searches across the entire nation. We engineer scalable site structures, high-authority backlink profiles, regional keyword hubs, and content architectures that position your brand as a top national industry leader.
                    </p>
                    <div class="row g-4 mt-2">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Pan-India Geo Strategy</h5>
                                <p class="small text-muted mb-0">Target state-wise and city-wise commercial queries across Tier-1, Tier-2, and Tier-3 markets.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">High-Authority Digital PR</h5>
                                <p class="small text-muted mb-0">Build dominant national domain authority through editorial backlinks and top-tier publication features.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                                <h5 class="fw-bold mb-1">Enterprise Keyword Silos</h5>
                                <p class="small text-muted mb-0">Dominate competitive high-volume commercial keywords with robust content pillar architectures.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
