<?php

$pageTitle = 'Arinoz Technologies Pvt Ltd | Search Engine Optimization (SEO) Services | Pune, Maharashtra, India';

$pageDescription = 'Arinoz Technologies provides professional SEO services including keyword research, technical audits, on-page optimization, content strategy and monthly reporting.';

include 'header.php';

?>


<!-- =========================================================
     PAGE TITLE
========================================================= -->

<section class="page-title"
    style="background-image: url('images/background/banner1.jpg');">

    <div class="auto-container">

        <div class="title-outer">

            <h1 class="title">
                Search Engine Optimization (SEO)
            </h1>

            <ul class="page-breadcrumb">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="our-services.php">Services</a>
                </li>

                <li>
                    Search Engine Optimization (SEO)
                </li>

            </ul>

        </div>

    </div>

</section>


<!-- =========================================================
     SERVICE DETAILS
========================================================= -->

<section class="service_details_sec">

    <div class="auto-container">

        <div class="service_details_row">

            <!-- =================================================
                 LEFT SIDEBAR
            ================================================== -->

            <aside class="service_sidebar">

                <?php include "Sidebar.php"; ?>

            </aside>


            <!-- =================================================
                 RIGHT MAIN CONTENT
            ================================================== -->

            <div class="service_content">

                <!-- =================================================
                     INTRODUCTION
                ================================================== -->

                <h1 class="title">
                    Search Engine Optimization (SEO) Solutions
                </h1>

                <p>
                    We help businesses improve their search visibility and
                    drive qualified organic traffic through comprehensive
                    SEO strategies. From technical audits to keyword
                    research, our team delivers SEO solutions tailored to
                    your specific business requirements.
                </p>

                <p>
                    Whether you need on-page optimization, technical SEO
                    fixes or a complete content strategy, we focus on
                    creating sustainable, search-engine-friendly
                    optimizations that improve your visibility across
                    all major search engines.
                </p>

                <p>
                    Our SEO approach combines in-depth keyword research,
                    technical audits, content optimization and continuous
                    performance tracking to build a search presence that
                    is easy to maintain and grow with your business.
                </p>

                <p>
                    We also help you identify the right opportunities for
                    long-term growth by aligning your SEO strategy with
                    user intent, competitive analysis and measurable
                    business goals.
                </p>

                <!-- =================================================
                     SEO SERVICES
                ================================================== -->

                <!-- <div class="service_features">

                    <h3>
                        Our SEO Services
                    </h3>

                    <ul class="features_list">

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Keyword Research &amp; Strategy</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>On-Page SEO Optimization</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Technical SEO Audits</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Off-Page SEO &amp; Link Building</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Local SEO Optimization</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Content Optimization</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>SEO Performance Reporting</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Ongoing SEO Maintenance &amp; Support</span>
                        </li>

                    </ul>

                </div> -->


                <!-- =================================================
                     CONSULTATION BUTTON
                ================================================== -->

                <div class="btn-box mt-5">

                    <a href="tel:+919028155454"
                        class="consultation-btn">

                        <i class="fa fa-phone"></i>

                        <span>
                            Connect With Us
                        </span>

                    </a>

                </div>


                <!-- =================================================
                     WHY CHOOSE US
                ================================================== -->

                <?php

                $text1 = 'We analyze your industry, competitors and target keywords before building your SEO strategy.';
                $text2 = 'Engineered for tomorrow — SEO strategies built to adapt to algorithm updates, new keywords, and business growth.';
                $text3 = 'Rigorous technical audits, white-hat practices, and performance tracking built into every phase.';
                $text4 = 'Dedicated ongoing optimization, monthly reporting, and continuous enhancements to keep your rankings ahead.';

                include "components/why-choose-us.php";
                ?>

            </div>
            <!-- END service_content -->

        </div>
        <!-- END service_details_row -->

    </div>
    <!-- END auto-container -->

</section>
<!-- END service_details_sec -->


<!-- =========================================================
     DEVELOPMENT PROCESS
========================================================= -->

<!-- =========================================================
     DEVELOPMENT PROCESS
========================================================= -->

<?php include 'components/Timeline2.php'; ?>

<!-- END  DEVELOPMENT PROCESS-section -->

<!-- END  DEVELOPMENT PROCESS-section -->


<!-- =========================================================
     OUR EXPERTISE
========================================================= -->

<?php 

$expertiseHeading = 'SEO & Organic Growth Services';
$expertiseDescription = 'We combine research, technical expertise and quality content to improve your search visibility, attract the right audience and turn organic traffic into real business results.';
$expertiseItems = [
    ['icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'Keyword Research & Strategy', 'description' => 'Finding the search terms your customers use and building a clear plan to rank for the ones that matter most.'],
    ['icon' => 'fa-solid fa-file-pen', 'title' => 'On-Page SEO', 'description' => 'Optimizing titles, meta tags, headings, content and internal links so search engines understand and rank your pages.'],
    ['icon' => 'fa-solid fa-gauge-high', 'title' => 'Technical SEO', 'description' => 'Improving site speed, mobile-friendliness, crawlability and structured data to give your website a strong foundation.'],
    ['icon' => 'fa-solid fa-link', 'title' => 'Link Building', 'description' => 'Earning quality backlinks from relevant websites to build authority and improve your search rankings.'],
    ['icon' => 'fa-solid fa-chart-line', 'title' => 'Reporting & Analytics', 'description' => 'Clear monthly reports on rankings, traffic and conversions so you can see the results of your SEO investment.'],
];
include 'components/our-expertise.php'; ?>


<!-- =========================================================
     FAQ SECTION
========================================================= -->

<?php

$title = 'Search Engine Optimization (SEO) FAQs';
$desc = 'Find answers to common questions about our SEO strategy, process and reporting.';
$helpTitle = 'Need help improving your search rankings?';
$helpDescription = 'Share your website, industry and target keywords with our team.';
$list = [
    [
        'question' => 'How Long Does SEO Take To Show Results?',
        'answer' => 'SEO is a gradual process. Most websites start seeing meaningful improvements within a few months, depending on competition, industry and the current state of the website.'
    ],
    [
        'question' => 'Do You Provide Both On-Page And Off-Page SEO?',
        'answer' => 'Yes. We handle on-page optimization, technical SEO and off-page activities such as link building to improve your overall search performance.'
    ],
    [
        'question' => 'Which Tools Do You Use For SEO?',
        'answer' => 'We use suitable tools based on project requirements, including Google Search Console, Google Analytics, SEMrush, Ahrefs and other suitable SEO tools.'
    ],
    [
        'question' => 'Can You Improve Rankings For My Existing Website?',
        'answer' => 'Yes. We audit your existing website and implement on-page, technical and content improvements to help raise its rankings and organic visibility.'
    ],
    [
        'question' => 'Do You Provide Monthly SEO Reports?',
        'answer' => 'Yes. We provide regular reporting on keyword rankings, organic traffic and overall SEO performance so you can track progress over time.'
    ],
];

include 'components/faqs.php';
?>
<!-- END faq_sec -->


<!-- =========================================================
     CLIENTS
========================================================= -->

<?php include 'clients.php'; ?>


<!-- =========================================================
     FLOATING CONTACT BUTTON
========================================================= -->

<a class="web-contact-float"
    href="our-services.php#contact-form"
    aria-label="Contact us"
    title="Contact us"> 

    <i class="fa fa-phone" aria-hidden="true"></i> 

</a>


<!-- =========================================================
     FOOTER
========================================================= -->

<?php include 'footer.php'; ?>