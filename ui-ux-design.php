<?php

$pageTitle = 'Arinoz Technologies Pvt Ltd | UI/UX Design Services | Pune, Maharashtra, India';

$pageDescription = 'Arinoz Technologies provides professional UI/UX design services including user research, wireframing, prototyping, website and mobile app design and UI/UX redesign.';

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
                UI/UX Design
            </h1>

            <ul class="page-breadcrumb">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="our-services.php">Services</a>
                </li>

                <li>
                    UI/UX Design
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
                    UI/UX Design Solutions
                </h1>

                <p>
                    We design intuitive, visually engaging user interfaces
                    and experiences that help businesses connect with their
                    users. From wireframes to fully polished visual designs,
                    our team delivers UI/UX solutions tailored to your
                    specific business requirements.
                </p>

                <p>
                    Whether you need a website UI, a mobile app UI/UX design
                    or a complete redesign, we focus on creating clear,
                    accessible and user-friendly experiences that work
                    seamlessly across desktop, tablet and mobile devices.
                </p>

                <p>
                    Our UI/UX design approach combines user research, modern
                    design tools, clean visual hierarchy and iterative
                    testing to build interfaces that are easy to use,
                    navigate and grow with your business.
                </p>

                <p>
                    We blend strategy, aesthetics and usability to create
                    experiences that not only look polished but also support
                    conversion, customer trust and long-term brand growth.
                </p>

                <!-- =================================================
                     UI/UX DESIGN SERVICES
                ================================================== -->

                <!-- <div class="service_features">

                    <h3>
                        Our UI/UX Design Services
                    </h3>

                    <ul class="features_list">

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>User Research &amp; Analysis</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Wireframing &amp; Prototyping</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Website UI/UX Design</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Mobile App UI/UX Design</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Interaction Design</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Usability Testing</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Design System Development</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>UI/UX Redesign &amp; Optimization</span>
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

                $text1 = 'We analyze your users, business goals and industry standards before sketching a single screen.';
                $text2 = 'Engineered for tomorrow — design systems built to scale across new pages, features, and products.';
                $text3 = 'Rigorous usability testing, accessibility checks, cross-device reviews, and visual consistency built into every phase.';
                $text4 = 'Dedicated post-launch support, design refinements, and continuous enhancements to keep your product ahead.';

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
$expertiseHeading = 'UI/UX Design & Research Services';
$expertiseDescription = 'We create user-centered designs that combine clear structure, appealing visuals and smooth interaction to help businesses deliver experiences their users enjoy.';
$expertiseItems = [
    ['icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'User Research', 'description' => 'Understanding your users, their goals and pain points to base every design decision on real insight.'],
    ['icon' => 'fa-solid fa-object-group', 'title' => 'Wireframing & Prototyping', 'description' => 'Structured layouts and clickable prototypes that let you test flows and ideas before development begins.'],
    ['icon' => 'fa-solid fa-palette', 'title' => 'Visual & UI Design', 'description' => 'Polished, on-brand interfaces with consistent typography, color and components across every screen.'],
    ['icon' => 'fa-solid fa-mobile-screen-button', 'title' => 'Web & Mobile App Design', 'description' => 'Responsive, touch-friendly designs for websites, web applications and mobile apps on every screen size.'],
    ['icon' => 'fa-solid fa-clipboard-check', 'title' => 'Usability Testing', 'description' => 'Testing and design audits that find friction points and improve ease of use, accessibility and conversion.'],
];
include 'components/our-expertise.php'; ?>


<!-- =========================================================
     FAQ SECTION
========================================================= -->

<?php

$title = 'UI/UX Design FAQs';
$desc = 'Find answers to common questions about our UI/UX design process, tools and deliverables.';
$helpTitle = 'Need help planning your design project?';
$helpDescription = 'Share your users, platforms and business goals with our team.';
$list = [
    [
        'question' => 'What Is The Difference Between UI And UX Design?',
        'answer' => 'UI design focuses on the visual look of your product, while UX design focuses on how users move through and experience it. We handle both together to create a cohesive product.'
    ],
    [
        'question' => 'Do You Design For Websites And Mobile Apps?',
        'answer' => 'Yes. We design UI/UX for websites, web applications and mobile apps, adapting each design to the platform and devices your users rely on.'
    ],
    [
        'question' => 'Which Tools Do You Use For UI/UX Design?',
        'answer' => 'We use suitable tools based on project requirements, including Figma, Adobe XD, Sketch and other suitable design and prototyping tools.'
    ],
    [
        'question' => 'Can You Redesign Our Existing Website Or App?',
        'answer' => 'Yes. We can redesign existing websites and apps to improve their visual appeal, usability and overall user experience while preserving important business functionality.'
    ],
    [
        'question' => 'Do You Provide Wireframes And Prototypes Before Final Design?',
        'answer' => 'Yes. We create wireframes and interactive prototypes so you can review and give feedback on the structure and flow before we move into final visual design.'
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