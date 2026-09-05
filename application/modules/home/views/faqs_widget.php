<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic business context with robust Canada-focused variables
$companyName = isset($company3) && !empty($company3) ? $company3 : 'NewGrove';
$companyPhone = isset($phone) && !empty($phone) ? $phone : '+1 (800) 555-0199';
$companyPhoneHtml = isset($phonehtml) && !empty($phonehtml) ? $phonehtml : 'tel:+18005550199';
$companyMail = isset($mail) && !empty($mail) ? $mail : 'contact@newgrove.ca';
$companyWhatsapp = isset($whatsapphtml) && !empty($whatsapphtml) ? $whatsapphtml : 'https://wa.me/18005550199';

// 6 Core Canadian Agency SEO & White-Label FAQs
$faqs = [
    [
        'badge' => 'SEO Strategy',
        'badge_color' => '#f26522',
        'icon' => 'bi-search',
        'question' => 'How does your Canadian SEO strategy differ from US/global campaigns?',
        'answer' => 'Canadian search optimization requires precise geo-targeting on <strong>Google.ca</strong>, strict <code>.ca</code> domain signal integration, local server latency optimization, and bilingual English/French keyword architecture. We tailor high-intent commercial keywords across top Canadian metropolitan hubs (Toronto, Vancouver, Montreal, Calgary, Ottawa) and acquire authoritative local backlinks to build regional domain authority.'
    ],
    [
        'badge' => 'White Label & NDAs',
        'badge_color' => '#0284c7',
        'icon' => 'bi-shield-check',
        'question' => 'Do you provide 100% confidential White-Label fulfillment and signed NDA agreements?',
        'answer' => 'Yes, all agency partnerships operate under strict non-disclosure agreements (NDAs). All client audits, keyword ranking portals, spreadsheets, and monthly performance deliverables are fully unbranded or custom-branded with your agency\'s logo and colors. Your clients will only ever see your brand as the expert agency.'
    ],
    [
        'badge' => 'Ranking Timeline',
        'badge_color' => '#00a651',
        'icon' => 'bi-graph-up-arrow',
        'question' => 'How fast can our Canadian business expect to see organic rank improvements?',
        'answer' => 'SEO is a compounding organic engine. Initial low-hanging technical wins, Core Web Vitals fixes, and Google Business Profile map-pack optimizations usually show ranking momentum within <strong>30 to 60 days</strong>. Substantial first-page commercial keyword dominance and high-converting traffic volume typically mature between <strong>3 to 6 months</strong>.'
    ],
    [
        'badge' => 'Pricing & Currency',
        'badge_color' => '#dc2626',
        'icon' => 'bi-currency-dollar',
        'question' => 'Are your pricing packages in Canadian Dollars (CAD) and compliant with CRA invoices?',
        'answer' => 'Yes, all package tiers and custom retainer quotes are estimated and billed in <strong>Canadian Dollars (CAD)</strong> to eliminate cross-border exchange volatility. We provide formal, CRA-compliant tax invoices with GST/HST registration details for straightforward business tax write-offs.'
    ],
    [
        'badge' => 'Bilingual SEO',
        'badge_color' => '#8b5cf6',
        'icon' => 'bi-translate',
        'question' => 'Can your team handle bilingual (English & French) Canadian SEO and content localization?',
        'answer' => 'Absolutely. We architect full bilingual SEO silos using valid <code>hreflang</code> tags, localized French-Canadian keyword clustering, and native French content optimization to help you capture lucrative market share in Quebec, Ottawa, and bilingual enterprise sectors.'
    ],
    [
        'badge' => 'Flexibility',
        'badge_color' => '#ea580c',
        'icon' => 'bi-calendar-check',
        'question' => 'Are there long-term lock-in contracts or can we cancel / upgrade anytime?',
        'answer' => 'We believe in earning your trust through continuous performance. All our Canadian SEO and white-label packages run on flexible <strong>month-to-month agreements</strong> with zero long-term lock-in contracts. You have total freedom to upgrade, scale down, or pause campaigns with a simple 14-day notice.'
    ]
];
?>

<!-- ========================================================================= -->
<!-- CANADIAN SEO & WHITE LABEL FAQS SECTION (SPLIT DESIGN & SCHEMA.ORG)       -->
<!-- ========================================================================= -->
<section class="ca-faq-section py-5 position-relative" id="canadaFaqSection" itemscope itemtype="https://schema.org/FAQPage" aria-label="Frequently Asked Questions about Canadian SEO and White Label Services">
    
    <div class="container py-2 py-lg-4">
        
        <!-- Section Header (Standard wl- classes from services_info.php) -->
        <header class="wl-header text-center mb-4 mb-md-5">
            <div class="wl-badge-pill mb-2">
                <i class="bi bi-patch-question-fill me-1" aria-hidden="true"></i> Clarity &bull; Canadian Expertise &bull; FAQ
            </div>
            <h2 class="wl-main-title text-uppercase">
                Frequently Asked Questions
            </h2>
            <p class="wl-main-subtitle mx-auto">
                Clear, transparent answers about our Canadian SEO engineering, white-label partner fulfillment, CAD billing, and ranking timelines.
            </p>
        </header>

        <!-- Split Layout: Left Visual Showcase Design & Right 6 FAQs Stack -->
        <div class="row g-4 g-xl-5 align-items-stretch">
            
            <!-- ===================================================== -->
            <!-- LEFT COLUMN: LIGHT CANADIAN AGENCY DESIGN SHOWCASE CARD -->
            <!-- ===================================================== -->
            <div class="col-lg-5 col-12 d-flex">
                <div class="ca-faq-showcase-card ca-card-light w-100 p-4 p-xl-5 rounded-4 d-flex flex-column justify-content-between position-relative overflow-hidden shadow-sm">
                    
                    <!-- Aesthetic Light SVG Geometric Vector Background -->
                    <svg class="ca-showcase-bg-svg" viewBox="0 0 450 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <defs>
                            <linearGradient id="caSvgGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#0284c7" stop-opacity="0.12"/>
                                <stop offset="100%" stop-color="#38bdf8" stop-opacity="0.02"/>
                            </linearGradient>
                            <linearGradient id="caSvgGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#ea2d2d" stop-opacity="0.09"/>
                                <stop offset="100%" stop-color="#f97316" stop-opacity="0.02"/>
                            </linearGradient>
                            <pattern id="caGridDot" width="22" height="22" patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="1.2" fill="#64748b" fill-opacity="0.22"/>
                            </pattern>
                        </defs>
                        <!-- Subtle Dot Matrix Pattern -->
                        <rect width="100%" height="100%" fill="url(#caGridDot)" opacity="0.75"/>
                        <!-- Algorithmic Dashed Waves -->
                        <path d="M -40,110 Q 140,40 280,160 T 480,90" stroke="#0284c7" stroke-width="1.8" stroke-dasharray="5 5" opacity="0.35"/>
                        <path d="M -20,340 Q 160,270 300,410 T 500,370" stroke="#ea2d2d" stroke-width="1.8" stroke-dasharray="5 5" opacity="0.3"/>
                        <!-- Concentric Tech Rings Top Right -->
                        <circle cx="390" cy="70" r="130" stroke="url(#caSvgGrad1)" stroke-width="1.5"/>
                        <circle cx="390" cy="70" r="90" stroke="#38bdf8" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.4"/>
                        <circle cx="390" cy="70" r="45" fill="url(#caSvgGrad1)"/>
                        <!-- Concentric Tech Rings Bottom Left -->
                        <circle cx="50" cy="530" r="150" stroke="url(#caSvgGrad2)" stroke-width="1.5"/>
                        <circle cx="50" cy="530" r="100" stroke="#ea2d2d" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.35"/>
                    </svg>

                    <!-- Top Card Content -->
                    <div class="position-relative z-2">
                        
                        <!-- Canadian Live Indicator Pill -->
                        <div class="ca-live-badge-light d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                            <span class="pulse-dot"></span> Canadian Support Hub &bull; 24/7 Active
                        </div>

                        <h3 class="ca-showcase-title text-dark fw-bold mb-3">
                            Have Specific Questions About Your Canadian Rankings?
                        </h3>
                        
                        <p class="ca-showcase-desc text-muted mb-4">
                            Connect directly with our senior SEO architects and partnership directors in Toronto &amp; Vancouver for a tailored consultation.
                        </p>

                        <!-- Key Value Propositions List -->
                        <div class="ca-showcase-features d-flex flex-column gap-3 mb-4">
                            
                            <div class="ca-showcase-item ca-item-light d-flex align-items-center gap-3">
                                <div class="ca-showcase-icon-box ca-icon-green flex-shrink-0">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="ca-showcase-item-text">
                                    <strong class="text-dark d-block">100% Confidential White Label</strong>
                                    <span class="text-muted fs-8">Strict NDA with unbranded / custom client portals</span>
                                </div>
                            </div>

                            <div class="ca-showcase-item ca-item-light d-flex align-items-center gap-3">
                                <div class="ca-showcase-icon-box ca-icon-red flex-shrink-0">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ca-showcase-item-text">
                                    <strong class="text-dark d-block">Transparent CAD Billing</strong>
                                    <span class="text-muted fs-8">CRA-compliant tax invoices with zero lock-in contracts</span>
                                </div>
                            </div>

                            <div class="ca-showcase-item ca-item-light d-flex align-items-center gap-3">
                                <div class="ca-showcase-icon-box ca-icon-blue flex-shrink-0">
                                    <i class="bi bi-translate"></i>
                                </div>
                                <div class="ca-showcase-item-text">
                                    <strong class="text-dark d-block">Bilingual EN/FR SEO Architecture</strong>
                                    <span class="text-muted fs-8">Comprehensive Quebec &amp; federal bilingual coverage</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Bottom Action Buttons: Premium Contact Station -->
                    <div class="ca-contact-station position-relative z-2 mt-2">
                        <div class="d-flex flex-sm-nowrap flex-wrap gap-2 mb-2">
                            <!-- Direct Call Button -->
                            <a href="<?= htmlspecialchars($companyPhoneHtml) ?>" class="ca-cta-btn ca-btn-phone flex-grow-1 text-decoration-none d-flex align-items-center justify-content-center gap-2 py-2 px-3">
                                <span class="ca-cta-icon ca-cta-phone-icon d-flex align-items-center justify-content-center">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>
                                <span class="ca-cta-label">Call <?= htmlspecialchars($companyPhone) ?></span>
                            </a>
                            
                            <!-- WhatsApp Consultation -->
                            <a href="<?= htmlspecialchars($companyWhatsapp) ?>" target="_blank" rel="noopener noreferrer" class="ca-cta-btn ca-btn-wa text-decoration-none d-flex align-items-center justify-content-center gap-2 py-2 px-3">
                                <span class="ca-cta-icon ca-cta-wa-icon d-flex align-items-center justify-content-center">
                                    <i class="bi bi-whatsapp"></i>
                                </span>
                                <span class="ca-cta-label">WhatsApp</span>
                            </a>
                        </div>
                        
                        <!-- Direct Email Capsule -->
                        <div class="ca-email-capsule d-flex align-items-center justify-content-center gap-2 text-muted">
                            <i class="bi bi-envelope-check text-primary"></i>
                            <span class="fs-8 text-secondary">Need formal RFPs?</span>
                            <a href="mailto:<?= htmlspecialchars($companyMail) ?>" class="ca-email-link fs-8 fw-semibold">
                                <?= htmlspecialchars($companyMail) ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===================================================== -->
            <!-- RIGHT COLUMN: 6 FAQS ACCORDION STACK                  -->
            <!-- ===================================================== -->
            <div class="col-lg-7 col-12 d-flex flex-column justify-content-center">
                <div class="d-flex flex-column gap-3 ca-faq-accordion-stack w-100" id="caFaqAccordionContainer">
                    <?php foreach ($faqs as $index => $faq): 
                        $accordionId = "caFaqCollapse_" . $index;
                        $headingId = "caFaqHeading_" . $index;
                        $isOpen = ($index === 0); // Keep first FAQ open by default
                    ?>
                        <div class="ca-faq-col" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            
                            <div class="ca-faq-card <?= $isOpen ? 'active' : '' ?>">
                                
                                <!-- Question Header Trigger -->
                                <button type="button" 
                                        class="ca-faq-trigger w-100 d-flex align-items-center text-start <?= $isOpen ? '' : 'collapsed' ?>" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#<?= $accordionId ?>" 
                                        aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                        aria-controls="<?= $accordionId ?>"
                                        id="<?= $headingId ?>">
                                    
                                    <div class="ca-faq-title-wrap flex-grow-1 pe-3">
                                        <h3 class="ca-faq-question-text m-0" itemprop="name">
                                            <?= htmlspecialchars($faq['question']) ?>
                                        </h3>
                                    </div>

                                    <!-- Animated Chevron Toggle Button -->
                                    <div class="ca-faq-toggle-circle flex-shrink-0 ms-auto" aria-hidden="true">
                                        <i class="bi bi-chevron-down ca-faq-toggle-icon"></i>
                                    </div>
                                </button>

                                <!-- Answer Body (Schema.org acceptedAnswer) -->
                                <div id="<?= $accordionId ?>" 
                                     class="collapse <?= $isOpen ? 'show' : '' ?>" 
                                     aria-labelledby="<?= $headingId ?>"
                                     data-bs-parent="#caFaqAccordionContainer"
                                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="ca-faq-body">
                                        <div class="ca-faq-answer-inner" itemprop="text">
                                            <?= $faq['answer'] ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Lightweight Interactive Trigger Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const triggers = document.querySelectorAll('.ca-faq-trigger');
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const card = this.closest('.ca-faq-card');
            setTimeout(() => {
                if (!this.classList.contains('collapsed')) {
                    card.classList.add('active');
                } else {
                    card.classList.remove('active');
                }
            }, 100);
        });
    });
});
</script>
