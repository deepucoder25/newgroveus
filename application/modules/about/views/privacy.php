<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     1. HERO BREADCRUMB BANNER WITH AMBIENT BACKGROUND
     ========================================================================= -->
<section class="legal-hero-section position-relative overflow-hidden">
    <!-- Ambient SVG Vector Background -->
    <div class="legal-ambient-bg" aria-hidden="true">
        <div class="legal-orb legal-orb-left"></div>
        <div class="legal-orb legal-orb-right"></div>
        
        <svg class="position-absolute w-100 h-100" style="top:0; left:0; pointer-events:none;" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="legalBcDots" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="legalBcGrid" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.25" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="legalSweepRed" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#c91a25" stop-opacity="0.15" />
                    <stop offset="60%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#legalBcDots)" />
            <rect width="100%" height="100%" fill="url(#legalBcGrid)" />
            <path d="M-50,45 C280,110 680,-10 1120,60 C1520,120 1820,15 2120,40" fill="none" stroke="url(#legalSweepRed)" stroke-width="1.6" />
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-4">
            
            <div class="col-12 col-lg-8">
                <!-- Breadcrumbs Pill -->
                <div class="legal-pill-wrap mb-3">
                    <?php $this->load->view('about/dynamic_breadcrumbs', [
                        'bc_h1' => 'Privacy Policy',
                        'bc_desc' => "Learn how " . (!empty($company3) ? $company3 : 'Groveus') . " protects your privacy and safeguards your personal data.",
                        'breadcrumbs' => [
                            ['name' => 'Privacy Policy']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="legal-hero-title">
                    Privacy Policy &amp; <span class="legal-title-highlight">Data Protection</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="legal-hero-desc">
                    At <?= !empty($company3) ? $company3 : 'Groveus Informatics' ?>, we prioritize transparency, data integrity, and strict confidentiality. This policy details how we collect, process, store, and safeguard your personal and enterprise information.
                </p>

                <!-- Version & Last Updated Meta Badges -->
                <div class="legal-hero-meta">
                    <span class="legal-meta-badge legal-meta-badge-success">
                        <i class="bi bi-shield-fill-check"></i>
                        <span>DPDP Act (India) &amp; GDPR Compliant</span>
                    </span>
                    <span class="legal-meta-badge">
                        <i class="bi bi-calendar-check"></i>
                        <span>Last Updated: September 2026</span>
                    </span>
                    <span class="legal-meta-badge">
                        <i class="bi bi-file-earmark-lock-fill"></i>
                        <span>Version 2.4</span>
                    </span>
                </div>
            </div>

            <!-- Right Column Quick Trust Badges -->
            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="d-flex flex-column gap-2 w-100 align-items-lg-end">
                    <div class="legal-trust-pill">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span>Zero Data Selling Policy</span>
                    </div>
                    <div class="legal-trust-pill legal-trust-pill-blue">
                        <i class="bi bi-lock-fill"></i>
                        <span>256-Bit SSL End-to-End Encryption</span>
                    </div>
                    <div class="legal-trust-pill legal-trust-pill-amber">
                        <i class="bi bi-shield-shaded"></i>
                        <span>Enterprise NDA Protected</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     2. MAIN CONTENT SECTION WITH STICKY TOC & STRUCTURED CARDS
     ========================================================================= -->
<section class="legal-main-section">
    <div class="container position-relative z-2">
        <div class="row g-4 g-lg-5">
            
            <!-- Left Sticky Navigation Sidebar -->
            <div class="col-12 col-lg-4">
                <div class="legal-toc-card">
                    <h3 class="legal-toc-title">
                        <i class="bi bi-list-nested"></i>
                        <span>Policy Navigation</span>
                    </h3>
                    
                    <nav class="legal-toc-nav" id="legalToc">
                        <a href="#sec-scope" class="legal-toc-link active">
                            <span class="legal-toc-num">01</span>
                            <span>Scope &amp; Overview</span>
                        </a>
                        <a href="#sec-collection" class="legal-toc-link">
                            <span class="legal-toc-num">02</span>
                            <span>Information We Collect</span>
                        </a>
                        <a href="#sec-legal-basis" class="legal-toc-link">
                            <span class="legal-toc-num">03</span>
                            <span>Legal Basis for Processing</span>
                        </a>
                        <a href="#sec-usage" class="legal-toc-link">
                            <span class="legal-toc-num">04</span>
                            <span>How We Use Your Data</span>
                        </a>
                        <a href="#sec-cookies" class="legal-toc-link">
                            <span class="legal-toc-num">05</span>
                            <span>Cookies &amp; Tracking Tech</span>
                        </a>
                        <a href="#sec-sharing" class="legal-toc-link">
                            <span class="legal-toc-num">06</span>
                            <span>Third-Party Subprocessors</span>
                        </a>
                        <a href="#sec-security" class="legal-toc-link">
                            <span class="legal-toc-num">07</span>
                            <span>Security &amp; Retention</span>
                        </a>
                        <a href="#sec-rights" class="legal-toc-link">
                            <span class="legal-toc-num">08</span>
                            <span>Your Privacy Rights</span>
                        </a>
                        <a href="#sec-transfers" class="legal-toc-link">
                            <span class="legal-toc-num">09</span>
                            <span>International Transfers</span>
                        </a>
                        <a href="#sec-contact" class="legal-toc-link">
                            <span class="legal-toc-num">10</span>
                            <span>Grievance &amp; DPO Contact</span>
                        </a>
                    </nav>

                    <!-- DPO Quick Widget -->
                    <div class="legal-dpo-widget">
                        <div class="legal-dpo-header">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Privacy Grievance Officer</span>
                        </div>
                        <p class="legal-dpo-desc">
                            Have questions or wish to exercise your data access or erasure rights? Contact our Data Protection Desk directly.
                        </p>
                        <a href="<?= $mailhtml ?>" class="legal-dpo-link">
                            <i class="bi bi-envelope-fill"></i>
                            <span><?= $mail ?></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Main Content Area -->
            <div class="col-12 col-lg-8">
                
                <!-- Section 1: Scope & Overview -->
                <article class="legal-card" id="sec-scope">
                    <div class="legal-card-header">
                        <div class="legal-card-number">01</div>
                        <h2 class="legal-card-title">Scope &amp; Overview</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            This Privacy Policy outlines the practices and policies of <strong><?= !empty($company3) ? $company3 : 'Groveus Informatics' ?></strong> ("Company", "we", "us", or "our") regarding the collection, use, disclosure, and protection of personal data received from visitors, prospective clients, and active enterprise partners utilizing our website (<?= site_url() ?>) and our digital services (Web Development, Custom Software Engineering, SEO Strategy, and Digital Growth Marketing).
                        </p>
                        <p>
                            By accessing our website, submitting an inquiry, requesting an audit, or entering into a contractual engagement with <?= !empty($company3) ? $company3 : 'Groveus' ?>, you acknowledge that you have read, understood, and consented to the practices described in this document.
                        </p>
                        <div class="legal-callout legal-callout-green">
                            <div class="legal-callout-title">
                                <i class="bi bi-shield-check text-success"></i>
                                <span>Core Privacy Principle</span>
                            </div>
                            <p>
                                We never sell, monetize, rent, or trade your personal or business data to third-party advertisers or data brokers under any circumstances.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Section 2: Information We Collect -->
                <article class="legal-card" id="sec-collection">
                    <div class="legal-card-header">
                        <div class="legal-card-number">02</div>
                        <h2 class="legal-card-title">Information We Collect</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            We collect only the minimum necessary information required to deliver high-quality technical proposals, communicate project deliverables, and maintain secure digital operations:
                        </p>
                        
                        <h4 class="h6 fw-bold text-dark mt-3 mb-2">A. Information You Provide Directly:</h4>
                        <ul class="legal-bullet-list">
                            <li><strong>Contact Details:</strong> Your full name, professional email address, direct phone number, and physical office location.</li>
                            <li><strong>Business &amp; Project Specifications:</strong> Company name, website URL, target market requirements, technical briefs, and RFPs shared via our contact or proposal forms.</li>
                            <li><strong>Communications:</strong> Records of email correspondence, live strategy calls, meeting transcripts, and WhatsApp support exchanges.</li>
                        </ul>

                        <h4 class="h6 fw-bold text-dark mt-4 mb-2">B. Information Collected Automatically:</h4>
                        <ul class="legal-bullet-list legal-bullet-list-blue">
                            <li><strong>Device &amp; Telemetry Data:</strong> IP address, browser type and version, operating system, screen resolution, and preferred language settings.</li>
                            <li><strong>Usage &amp; Interaction Metrics:</strong> Pages visited, dwell time, navigation paths, referring URLs, and interaction with UI components.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 3: Legal Basis for Processing -->
                <article class="legal-card" id="sec-legal-basis">
                    <div class="legal-card-header">
                        <div class="legal-card-number">03</div>
                        <h2 class="legal-card-title">Legal Basis for Processing (GDPR &amp; DPDP Act)</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Under applicable global data protection frameworks, including the <strong>Digital Personal Data Protection (DPDP) Act 2023 (India)</strong> and the <strong>General Data Protection Regulation (EU GDPR)</strong>, we process your information on the following lawful grounds:
                        </p>
                        
                        <div class="legal-table-responsive">
                            <table class="legal-table">
                                <thead>
                                    <tr>
                                        <th>Legal Ground</th>
                                        <th>Applicable Scenario</th>
                                        <th>Examples</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Contractual Necessity</strong></td>
                                        <td>Fulfilling service agreements &amp; Statements of Work (SOW)</td>
                                        <td>Software delivery, website deployment, invoice generation</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Legitimate Interests</strong></td>
                                        <td>Enhancing system security &amp; optimizing digital performance</td>
                                        <td>Preventing DDoS attacks, analyzing traffic performance, fraud detection</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Consent</strong></td>
                                        <td>Voluntary opt-in submissions &amp; communications</td>
                                        <td>Submitting the contact form, requesting a customized SEO audit</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Legal Obligation</strong></td>
                                        <td>Compliance with statutory laws &amp; financial mandates</td>
                                        <td>GST reporting, financial audits, dispute resolutions</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>

                <!-- Section 4: How We Use Your Data -->
                <article class="legal-card" id="sec-usage">
                    <div class="legal-card-header">
                        <div class="legal-card-number">04</div>
                        <h2 class="legal-card-title">How We Utilize Your Data</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Your information is strictly utilized to power your digital growth and streamline communication:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Tailored Proposal Generation:</strong> Analyzing your technical requirements to prepare accurate architectural blueprints, budget scopes, and timelines.</li>
                            <li><strong>Project Execution &amp; Collaboration:</strong> Coordinating sprint deliverables, sharing staging server previews, and providing ongoing technical support.</li>
                            <li><strong>System Performance &amp; Security:</strong> Monitoring platform uptime, preventing unauthorized access, and securing API endpoints.</li>
                            <li><strong>Legal &amp; Financial Governance:</strong> Fulfilling tax obligations, processing client invoicing, and upholding contractual obligations.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 5: Cookies & Tracking Technologies -->
                <article class="legal-card" id="sec-cookies">
                    <div class="legal-card-header">
                        <div class="legal-card-number">05</div>
                        <h2 class="legal-card-title">Cookies &amp; Tracking Technologies</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            We employ essential first-party session cookies and privacy-respecting analytics tools to ensure seamless browsing, maintain session security, and understand aggregate visitor behaviors:
                        </p>
                        <ul class="legal-bullet-list legal-bullet-list-blue">
                            <li><strong>Strictly Necessary Cookies:</strong> Required for fundamental site navigation, CSRF token security, and form transmissions.</li>
                            <li><strong>Performance &amp; Analytics Cookies:</strong> Anonymous aggregated telemetry (e.g. Google Analytics 4) with IP anonymization enabled to analyze traffic trends.</li>
                        </ul>
                        <div class="legal-callout legal-callout-amber">
                            <div class="legal-callout-title">
                                <i class="bi bi-gear-fill text-warning"></i>
                                <span>Managing Your Cookie Preferences</span>
                            </div>
                            <p>
                                You can configure your browser to decline all non-essential cookies, delete stored cookies, or notify you when a cookie is issued. Doing so will not restrict your access to core website content.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Section 6: Third-Party Subprocessors -->
                <article class="legal-card" id="sec-sharing">
                    <div class="legal-card-header">
                        <div class="legal-card-number">06</div>
                        <h2 class="legal-card-title">Data Sharing &amp; Subprocessors</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            We engage select, enterprise-grade subprocessors strictly to maintain infrastructure and facilitate service delivery. All subprocessors are bound by stringent <strong>Data Processing Agreements (DPAs)</strong> and confidentiality obligations:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Cloud Infrastructure:</strong> Secure tier-4 enterprise cloud servers (AWS / DigitalOcean / Cloudflare) featuring automated DDoS mitigation and hardware firewalls.</li>
                            <li><strong>Payment Processors:</strong> PCI-DSS compliant payment gateways (Razorpay, Stripe) for secure invoice settlements. We never store credit card or CVV details on our servers.</li>
                            <li><strong>Communication Channels:</strong> Transactional email relays and WhatsApp Business APIs utilized solely for direct milestone communication.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 7: Security & Data Retention -->
                <article class="legal-card" id="sec-security">
                    <div class="legal-card-header">
                        <div class="legal-card-number">07</div>
                        <h2 class="legal-card-title">Storage, Security &amp; Data Retention</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            <?= !empty($company3) ? $company3 : 'Groveus' ?> maintains a robust defense-in-depth security infrastructure designed to safeguard data against unauthorized alteration, theft, or interception:
                        </p>
                        <div class="row g-3 my-2">
                            <div class="col-12 col-sm-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="fw-bold text-dark mb-1"><i class="bi bi-shield-lock-fill text-danger me-1"></i> In-Transit Encryption</div>
                                    <div class="small text-secondary">All traffic is encrypted using modern TLS 1.3 protocol and 256-bit SHA-256 SSL certificates.</div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="fw-bold text-dark mb-1"><i class="bi bi-hdd-network-fill text-primary me-1"></i> At-Rest Security</div>
                                    <div class="small text-secondary">Databases are stored in encrypted volumes protected with AES-256 multi-layer security keys.</div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">
                            <strong>Retention Periods:</strong> We retain business inquiry records only for as long as necessary to fulfill project requirements, provide post-launch warranties, or comply with financial retention statutes (typically up to 7 years for financial ledgers).
                        </p>
                    </div>
                </article>

                <!-- Section 8: Your Privacy Rights -->
                <article class="legal-card" id="sec-rights">
                    <div class="legal-card-header">
                        <div class="legal-card-number">08</div>
                        <h2 class="legal-card-title">Your Legal Privacy Rights</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Regardless of your geographical location, you are entitled to exercise comprehensive data protection rights over your information:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Right of Access &amp; Confirmation:</strong> Request a complete summary of all personal data held about you.</li>
                            <li><strong>Right to Rectification:</strong> Request prompt correction of incomplete, inaccurate, or outdated records.</li>
                            <li><strong>Right to Erasure ("Right to be Forgotten"):</strong> Request complete deletion of your personal data where retention is no longer legally necessary.</li>
                            <li><strong>Right to Restrict or Object:</strong> Restrict or object to specific processing channels at any time.</li>
                            <li><strong>Right to Data Portability:</strong> Receive your data in a structured, commonly used, and machine-readable format (JSON/CSV).</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 9: International Transfers & Minors -->
                <article class="legal-card" id="sec-transfers">
                    <div class="legal-card-header">
                        <div class="legal-card-number">09</div>
                        <h2 class="legal-card-title">International Data Transfers &amp; Minors</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            As a global digital solutions provider, data may occasionally be processed across international cloud regions. Where cross-border transfers occur, we implement European Commission Standard Contractual Clauses (SCCs) and robust technical safeguards to ensure parity with local data protection regulations.
                        </p>
                        <p>
                            <strong>Protection of Minors:</strong> Our digital platforms and enterprise consulting solutions are designed solely for individuals aged 18 and older. We do not knowingly solicit or collect data from children.
                        </p>
                    </div>
                </article>

                <!-- Section 10: Grievance Officer & Contact -->
                <article class="legal-card" id="sec-contact">
                    <div class="legal-card-header">
                        <div class="legal-card-number">10</div>
                        <h2 class="legal-card-title">Grievance Officer &amp; Contact Information</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            For inquiries, data requests, or formal grievance notifications, please reach out to our designated Data Protection Desk:
                        </p>
                        <div class="p-4 bg-light rounded-4 border mt-3">
                            <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-building me-2 text-danger"></i><?= $company3 ?></h4>
                            <div class="d-flex flex-column gap-2 text-secondary small">
                                <div><strong class="text-dark">Office Address:</strong> <?= $address ?></div>
                                <div><strong class="text-dark">Official Email:</strong> <a href="<?= $mailhtml ?>" class="text-danger text-decoration-none fw-bold"><?= $mail ?></a></div>
                                <div><strong class="text-dark">Direct Consultation Phone:</strong> <a href="<?= $phonehtml ?>" class="text-dark text-decoration-none fw-bold"><?= $phone ?></a></div>
                                <div><strong class="text-dark">Response SLA:</strong> Official response provided within 24 to 48 business hours.</div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </div>
</section>