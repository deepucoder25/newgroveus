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
                <pattern id="termsBcDots" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.1" fill="#64748b" fill-opacity="0.16" />
                </pattern>
                <pattern id="termsBcGrid" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#cbd5e1" stroke-width="0.75" stroke-opacity="0.25" stroke-dasharray="4 4" />
                </pattern>
                <linearGradient id="termsSweepBlue" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#0284c7" stop-opacity="0.16" />
                    <stop offset="60%" stop-color="#ffffff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#termsBcDots)" />
            <rect width="100%" height="100%" fill="url(#termsBcGrid)" />
            <path d="M-50,45 C280,110 680,-10 1120,60 C1520,120 1820,15 2120,40" fill="none" stroke="url(#termsSweepBlue)" stroke-width="1.6" />
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-4">
            
            <div class="col-12 col-lg-8">
                <!-- Breadcrumbs Pill -->
                <div class="legal-pill-wrap mb-3">
                    <?php $this->load->view('about/dynamic_breadcrumbs', [
                        'bc_h1' => 'Terms &amp; Conditions',
                        'bc_desc' => "Terms of Service and contractual guidelines governing digital services at " . $company3 . ".",
                        'breadcrumbs' => [
                            ['name' => 'Terms & Conditions']
                        ]
                    ]); ?>
                </div>

                <!-- Main Hero Heading -->
                <h1 class="legal-hero-title">
                    Terms &amp; Conditions &amp; <span class="legal-title-highlight">Service Agreement</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="legal-hero-desc">
                    These Terms &amp; Conditions govern the delivery of professional digital solutions, web design, custom engineering, search engine optimization (SEO), and consulting services provided by <?= $company3 ?>.
                </p>

                <!-- Version & Last Updated Meta Badges -->
                <div class="legal-hero-meta">
                    <span class="legal-meta-badge legal-meta-badge-success">
                        <i class="bi bi-file-earmark-check-fill"></i>
                        <span>Standard Agency Service Agreement</span>
                    </span>
                    <span class="legal-meta-badge">
                        <i class="bi bi-calendar-check"></i>
                        <span>Effective: September 2026</span>
                    </span>
                    <span class="legal-meta-badge">
                        <i class="bi bi-award-fill"></i>
                        <span>Edition 2.4</span>
                    </span>
                </div>
            </div>

            <!-- Right Column Quick Trust Badges -->
            <div class="col-12 col-lg-4 d-flex justify-content-lg-end align-items-center">
                <div class="d-flex flex-column gap-2 w-100 align-items-lg-end">
                    <div class="legal-trust-pill">
                        <span class="cnt-status-dot cnt-dot-green"></span>
                        <span>100% IP &amp; Code Ownership</span>
                    </div>
                    <div class="legal-trust-pill legal-trust-pill-blue">
                        <i class="bi bi-shield-check"></i>
                        <span>Mutual Non-Disclosure (NDA)</span>
                    </div>
                    <div class="legal-trust-pill legal-trust-pill-amber">
                        <i class="bi bi-clock-history"></i>
                        <span>Guaranteed 30-Day Bug Warranty</span>
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
                        <span>Terms Navigation</span>
                    </h3>
                    
                    <nav class="legal-toc-nav" id="legalToc">
                        <a href="#terms-acceptance" class="legal-toc-link active">
                            <span class="legal-toc-num">01</span>
                            <span>Acceptance &amp; Scope</span>
                        </a>
                        <a href="#terms-proposals" class="legal-toc-link">
                            <span class="legal-toc-num">02</span>
                            <span>Proposals &amp; Scopes (SOW)</span>
                        </a>
                        <a href="#terms-obligations" class="legal-toc-link">
                            <span class="legal-toc-num">03</span>
                            <span>Client Obligations</span>
                        </a>
                        <a href="#terms-payments" class="legal-toc-link">
                            <span class="legal-toc-num">04</span>
                            <span>Payment Milestones &amp; Tax</span>
                        </a>
                        <a href="#terms-ip" class="legal-toc-link">
                            <span class="legal-toc-num">05</span>
                            <span>Intellectual Property</span>
                        </a>
                        <a href="#terms-nda" class="legal-toc-link">
                            <span class="legal-toc-num">06</span>
                            <span>NDA &amp; Confidentiality</span>
                        </a>
                        <a href="#terms-warranty" class="legal-toc-link">
                            <span class="legal-toc-num">07</span>
                            <span>Warranty &amp; Disclaimers</span>
                        </a>
                        <a href="#terms-liability" class="legal-toc-link">
                            <span class="legal-toc-num">08</span>
                            <span>Limitation of Liability</span>
                        </a>
                        <a href="#terms-termination" class="legal-toc-link">
                            <span class="legal-toc-num">09</span>
                            <span>Termination &amp; Pauses</span>
                        </a>
                        <a href="#terms-governing" class="legal-toc-link">
                            <span class="legal-toc-num">10</span>
                            <span>Governing Law &amp; Jurisdiction</span>
                        </a>
                    </nav>

                    <!-- Client Support Quick Widget -->
                    <div class="legal-dpo-widget">
                        <div class="legal-dpo-header">
                            <i class="bi bi-headset"></i>
                            <span>Contracts &amp; Legal Desk</span>
                        </div>
                        <p class="legal-dpo-desc">
                            Need custom SLA agreements, enterprise NDAs, or contract clarifications? Reach our legal operations desk directly.
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
                
                <!-- Section 1: Acceptance & Scope -->
                <article class="legal-card" id="terms-acceptance">
                    <div class="legal-card-header">
                        <div class="legal-card-number">01</div>
                        <h2 class="legal-card-title">Acceptance of Terms &amp; Scope of Services</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            These Terms and Conditions ("Agreement") constitute a legally binding contract between <strong><?= $company3 ?></strong> ("Company", "we", "our", or "us") and the individual or enterprise entity ("Client", "you", or "your") purchasing digital services, including but not limited to:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Web Engineering &amp; UI/UX Design:</strong> Custom web development, e-commerce solutions, web application design, and API integrations.</li>
                            <li><strong>Search Engine Optimization (SEO):</strong> Technical SEO audits, on-page optimization, national/local search campaigns, and content strategies.</li>
                            <li><strong>Digital Marketing &amp; PPC Advertising:</strong> Paid search campaigns, social media marketing, and conversion rate optimization (CRO).</li>
                            <li><strong>Maintenance &amp; Support:</strong> Ongoing server maintenance, security patches, and performance optimizations.</li>
                        </ul>
                        <p>
                            By signing an official Proposal, approving a Statement of Work (SOW), executing an invoice payment, or utilizing our digital deliverables, you explicitly confirm your unconditional agreement to these terms.
                        </p>
                    </div>
                </article>

                <!-- Section 2: Proposals & SOWs -->
                <article class="legal-card" id="terms-proposals">
                    <div class="legal-card-header">
                        <div class="legal-card-number">02</div>
                        <h2 class="legal-card-title">Proposals, Quotes &amp; Scopes of Work (SOW)</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            All formal engagements begin with an official Statement of Work (SOW) or digital proposal outlining project architecture, sprint timelines, deliverables, and cost matrices:
                        </p>
                        <ul class="legal-bullet-list legal-bullet-list-blue">
                            <li><strong>Quote Validity:</strong> Written quotations remain valid for thirty (30) calendar days from issuance unless specified otherwise.</li>
                            <li><strong>Revision Cycles:</strong> Standard project scopes include up to two (2) consolidated rounds of feedback and revisions during each milestone phase.</li>
                            <li><strong>Scope Modifications ("Change Requests"):</strong> Any features, technical requirements, or structural modifications exceeding the agreed SOW will be documented as a formal Change Order and billed at standard agency hourly rates.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 3: Client Obligations -->
                <article class="legal-card" id="terms-obligations">
                    <div class="legal-card-header">
                        <div class="legal-card-number">03</div>
                        <h2 class="legal-card-title">Client Obligations &amp; Asset Provision</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Timely and successful project completion relies on mutual collaboration. As the Client, you agree to:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Asset Delivery:</strong> Provide necessary brand collateral, high-resolution logos, copy, server credentials, and domain DNS access within agreed sprint schedules.</li>
                            <li><strong>Timely Feedback:</strong> Review design mockups and staging deployments promptly (typically within 3 to 5 business days) to prevent timeline delays.</li>
                            <li><strong>Ownership Representations:</strong> Guarantee that all text, imagery, trademarks, and third-party media supplied to <?= $company3 ?> are fully licensed and do not infringe on any third-party copyrights.</li>
                        </ul>
                        <div class="legal-callout legal-callout-amber">
                            <div class="legal-callout-title">
                                <i class="bi bi-clock-history text-warning"></i>
                                <span>Project Inactivity Notice</span>
                            </div>
                            <p>
                                If a project is halted for more than thirty (30) consecutive days due to missing client assets or unresponsiveness, <?= $company3 ?> reserves the right to invoice for work completed to date and reschedule project resumption based on developer availability.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Payment Milestones & Invoicing -->
                <article class="legal-card" id="terms-payments">
                    <div class="legal-card-header">
                        <div class="legal-card-number">04</div>
                        <h2 class="legal-card-title">Payment Milestones, Invoicing &amp; Taxes</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Professional digital development projects are structured under milestone-based disbursements:
                        </p>

                        <div class="legal-table-responsive">
                            <table class="legal-table">
                                <thead>
                                    <tr>
                                        <th>Milestone Stage</th>
                                        <th>Disbursement Structure</th>
                                        <th>Deliverable Trigger</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Milestone 1 (Mobilization)</strong></td>
                                        <td>50% Advance Deposit</td>
                                        <td>Sprint initiation, wireframing, architecture setup</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Milestone 2 (Staging Review)</strong></td>
                                        <td>30% Progress Payment</td>
                                        <td>Full staging demo approval, feature completion</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Milestone 3 (Final Release)</strong></td>
                                        <td>20% Final Settlement</td>
                                        <td>Production server migration, source code release</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="mt-3">
                            <strong>Payment Terms &amp; Taxes:</strong> All invoices are due on a <strong>Net-7</strong> or <strong>Net-15</strong> basis. Invoices are subject to applicable statutory taxes (including 18% GST in India). Payments may be settled via direct NEFT/RTGS, UPI, Stripe, or secure credit card gateway.
                        </p>
                    </div>
                </article>

                <!-- Section 5: Intellectual Property -->
                <article class="legal-card" id="terms-ip">
                    <div class="legal-card-header">
                        <div class="legal-card-number">05</div>
                        <h2 class="legal-card-title">Intellectual Property &amp; Code Ownership</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            We maintain transparent and client-first intellectual property policies:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Complete Code Transfer:</strong> Upon 100% full and final payment of all project invoices, all custom written source code, tailored design mockups, and databases created specifically for the Client become the exclusive property of the Client.</li>
                            <li><strong>Pre-Existing Agency Tools:</strong> <?= $company3 ?> retains proprietary rights over our pre-existing developer libraries, modular boilerplates, and deployment scripts incorporated into the project. The Client receives a perpetual, non-exclusive, royalty-free license to use such libraries.</li>
                            <li><strong>Portfolio Attribution:</strong> Unless a formal NDA explicitly prohibits it, <?= $company3 ?> reserves the right to showcase the completed project in our public portfolio and case study archives.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 6: NDA & Confidentiality -->
                <article class="legal-card" id="terms-nda">
                    <div class="legal-card-header">
                        <div class="legal-card-number">06</div>
                        <h2 class="legal-card-title">Non-Disclosure &amp; Confidentiality</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Both parties agree to treat all business plans, customer databases, technical architectures, pricing frameworks, and non-public source code as strictly confidential. Neither party shall disclose such proprietary information to any third party without prior written consent, except where required by law.
                        </p>
                        <div class="legal-callout legal-callout-green">
                            <div class="legal-callout-title">
                                <i class="bi bi-shield-lock-fill text-success"></i>
                                <span>Enterprise NDA Standards</span>
                            </div>
                            <p>
                                All engineers, strategists, and sub-contractors engaged by <?= $company3 ?> are bound by comprehensive, legally enforceable Non-Disclosure Agreements.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Warranty & Disclaimers -->
                <article class="legal-card" id="terms-warranty">
                    <div class="legal-card-header">
                        <div class="legal-card-number">07</div>
                        <h2 class="legal-card-title">Warranty, SLAs &amp; Disclaimers</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            We stand firmly behind the quality of our engineering:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>30-Day Post-Launch Bug Warranty:</strong> <?= $company3 ?> provides a complimentary thirty (30) day warranty starting from live production launch to rectify any functional defects or code errors arising from our original development scope.</li>
                            <li><strong>SEO &amp; Algorithm Disclaimers:</strong> While we execute industry-leading, white-hat SEO best practices, the Client acknowledges that third-party search engines (e.g. Google, Bing) constantly update ranking algorithms. No agency can guarantee specific rank placement (#1 position) on third-party search platforms.</li>
                            <li><strong>Third-Party Dependencies:</strong> We are not liable for disruptions resulting from external third-party API downtime, domain registrar outages, third-party plugin updates, or external web host failures.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 8: Limitation of Liability -->
                <article class="legal-card" id="terms-liability">
                    <div class="legal-card-header">
                        <div class="legal-card-number">08</div>
                        <h2 class="legal-card-title">Limitation of Liability</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            To the maximum extent permitted by applicable law, in no event shall <?= $company3 ?>, its directors, employees, or partners be liable for any indirect, incidental, consequential, or punitive damages (including loss of profits, data corruption, or business interruption) arising out of or in connection with our services.
                        </p>
                        <p>
                            The total aggregate liability of the Company under any claim shall not exceed the total fees paid by the Client to <?= $company3 ?> for the specific project or service in dispute during the preceding six (6) months.
                        </p>
                    </div>
                </article>

                <!-- Section 9: Termination & Project Cancellation -->
                <article class="legal-card" id="terms-termination">
                    <div class="legal-card-header">
                        <div class="legal-card-number">09</div>
                        <h2 class="legal-card-title">Project Termination &amp; Cancellation</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            Either party may terminate an ongoing engagement with a written notice of fourteen (14) calendar days under the following guidelines:
                        </p>
                        <ul class="legal-bullet-list">
                            <li><strong>Client Cancellation:</strong> In the event of project termination by the Client, the Client shall pay for all completed milestones and pro-rated work-in-progress up to the date of cancellation. Non-refundable advance deposits cover initial mobilization costs.</li>
                            <li><strong>Asset Release upon Settlement:</strong> All working files, designs, and database dumps completed up to the date of termination will be handed over to the Client upon full clearance of outstanding dues.</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 10: Governing Law & Jurisdiction -->
                <article class="legal-card" id="terms-governing">
                    <div class="legal-card-header">
                        <div class="legal-card-number">10</div>
                        <h2 class="legal-card-title">Governing Law &amp; Dispute Resolution</h2>
                    </div>
                    <div class="legal-card-body">
                        <p>
                            This Agreement shall be construed and governed in accordance with the laws of <strong>India</strong>. In the event of any legal dispute, controversy, or claim arising out of this Agreement:
                        </p>
                        <ul class="legal-bullet-list legal-bullet-list-blue">
                            <li><strong>Amicable Negotiation:</strong> Both parties shall first attempt to resolve the matter in good faith through executive consultation within thirty (30) days.</li>
                            <li><strong>Arbitration:</strong> Any unresolved dispute shall be referred to arbitration in accordance with the Arbitration and Conciliation Act, 1996.</li>
                            <li><strong>Jurisdiction:</strong> The competent courts situated in <strong>Mumbai / Thane, Maharashtra, India</strong> shall have exclusive jurisdiction over all matters related to this Agreement.</li>
                        </ul>

                        <div class="p-4 bg-light rounded-4 border mt-4">
                            <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-geo-alt-fill me-2 text-danger"></i>Corporate Legal Headquarters</h4>
                            <div class="d-flex flex-column gap-2 text-secondary small">
                                <div><strong class="text-dark">Company:</strong> <?= $company3 ?></div>
                                <div><strong class="text-dark">Registered Office:</strong> <?= $address ?></div>
                                <div><strong class="text-dark">Official Contact Email:</strong> <a href="<?= $mailhtml ?>" class="text-danger text-decoration-none fw-bold"><?= $mail ?></a></div>
                                <div><strong class="text-dark">Direct Consultation Phone:</strong> <a <?= $phonehtml ?> class="text-dark text-decoration-none fw-bold"><?= $phone ?></a></div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </div>
</section>