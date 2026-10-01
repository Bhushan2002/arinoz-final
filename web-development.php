<?php

$pageTitle = "Arinoz Technologies Pvt Ltd | Web Development Services | Pune, Maharashtra, India";

$pageDescription = "Arinoz Technologies provides professional web development services including responsive websites, business websites, e-commerce platforms and custom web applications.";

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
                Web Design &amp; Development
            </h1>

            <ul class="page-breadcrumb">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="our-services.php">Services</a>
                </li>

                <li>
                    Web Design &amp; Development
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
                    Web Design &amp; Development Solutions
                </h1>
                <p>
                    We design modern, responsive and high-performance websites in order to help businesses build a strong online presence; whether it is a simple business website or a more complex web application, our team provides solutions that are tailored to your particular business needs.
                </p>

                <p>
                    If you need a new website, an e-commerce platform or a custom web application, our specialty is in producing fast, secure and user-friendly digital experiences which function smoothly on desktop, tablet and mobile devices.
                </p>

                <p>
                    The way in which we approach web development involves the use of modern technologies, responsive design, clean coding practices and a scalable architecture so that the websites we create are easy for users to use, simple to maintain and capable of growing alongside your business.
                </p>

                <p>
                    From planning and design to development, testing and launch, we work closely with you to deliver a reliable website that supports your goals, engages your audience and creates lasting value for your business.
                </p>

                <!-- =================================================
                     WEB DEVELOPMENT SERVICES
                ================================================== -->

                <!-- <div class="service_features">

                    <h3>
                        Our Web Development Services
                    </h3>

                    <ul class="features_list">

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Business Website Development</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Custom Web Application Development</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>E-Commerce Website Development</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Responsive Web Design</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>CMS Website Development</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Website Redesign &amp; Modernization</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>API Integration</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Website Maintenance &amp; Support</span>
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

                $text1 = 'We analyze your business objectives, target audience, and industry workflows before writing a single line of code.';
                $text2 = 'Engineered for tomorrow — applications designed to handle high traffic volumes, new features, and rapid business expansion.';
                $text3 = 'Rigorous security standards, code audits, cross-browser testing, and performance optimization built into every phase.';
                $text4 = 'Dedicated post-launch support, performance tuning, and continuous enhancements to keep your web assets ahead.';

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
<?php include "components/Timeline2.php" ?>

<!-- END  DEVELOPMENT PROCESS-section -->


<!-- =========================================================
     OUR EXPERTISE
========================================================= -->

<?php

$expertiseHeading = 'Web Development & Design Services';
$expertiseDescription = 'We create modern, responsive and user-friendly websites that combine attractive design, seamless functionality and high performance to help businesses build a strong digital presence.';
$expertiseItems = [
    ['icon' => 'flaticon-business-002-graph', 'title' => 'Web Design', 'description' => 'Creative and responsive website designs focused on usability, branding and engaging user experiences.'],
    ['icon' => 'flaticon-business-010-startup', 'title' => 'Web Development', 'description' => 'High-performance websites and web applications built with modern and scalable technologies.'],
    ['icon' => 'flaticon-business-030-settings', 'title' => 'E-Commerce Development', 'description' => 'Secure and responsive online stores designed to provide smooth shopping experiences and support business growth.'],
    ['icon' => 'flaticon-business-045-stationery', 'title' => 'Custom Web Applications', 'description' => 'Powerful and scalable web applications developed to streamline business processes and meet specific business requirements.'],
    ['icon' => 'flaticon-business-054-graph', 'title' => 'Website Maintenance', 'description' => 'Ongoing updates, performance optimization, security improvements and technical support for your website.'],
];

include 'components/our-expertise.php'; ?>


<!-- =========================================================
     FAQ SECTION
========================================================= -->
<?php

$title = "Web Design & Development FAQs";
$desc = "Find answers to common questions about our web design, development process, technologies and website services.";
$list = [
    [
        'question' => "What Types Of Websites Do You Develop?",
        'answer' => "We develop business websites,
                                        corporate websites, landing pages,
                                        e-commerce websites, custom web
                                        applications and other responsive
                                        web solutions based on your business
                                        requirements."
    ],
    [
        'question' => "Will My Website Work On Mobile And Tablet Devices?",
        'answer' => "Yes. We build responsive websites
                                    that adapt to different screen sizes,
                                    including desktops, tablets and
                                    smartphones, to provide a consistent
                                    user experience across devices."
    ],
    [
        'question' => "Which Technologies Do You Use For Web Development?
",
        'answer' => "
                                    We use suitable technologies based
                                    on project requirements, including
                                    HTML, CSS, JavaScript, React, Next.js,
                                    Node.js, PHP, databases and other
                                    suitable frameworks and tools."
    ],
    [
        'question' => "Can You Redesign Or Improve An Existing Website?",
        'answer' => "                                    Yes. We can redesign existing websites
                                    to improve their visual appearance,
                                    responsiveness, usability, performance
                                    and overall user experience while
                                    preserving important business
                                    functionality."
    ],
    [
        'question' => " Do You Provide Website Maintenance And Support?",
        'answer' => "Yes. We provide ongoing website
                                    maintenance, content updates, bug fixes,
                                    performance improvements, security
                                    updates and technical support after
                                    the website is launched.
"
    ],


];
include 'components/faqs.php'; ?>

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