
<?php

$pageTitle = "Arinoz Technologies Pvt Ltd | Cloud Hosting Services | Pune, Maharashtra, India";

$pageDescription = "Arinoz Technologies provides professional cloud hosting services including shared hosting, VPS hosting, dedicated servers and managed cloud infrastructure.";

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
                Cloud &amp; Hosting Services
            </h1>

            <ul class="page-breadcrumb">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="our-services.php">Services</a>
                </li>

                <li>
                    Cloud &amp; Hosting Services
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
                    Cloud &amp; Hosting Services Solutions
                </h1>

                <p>
                    We provide reliable, secure and scalable cloud and
                    hosting solutions that keep your websites, applications
                    and data online and performing at their best. From
                    shared hosting to fully managed cloud infrastructure,
                    our team delivers hosting solutions tailored to your
                    specific business requirements.
                </p>

                <p>
                    Whether you need website hosting, cloud server
                    management or a complete migration to the cloud, we
                    focus on creating a fast, secure and reliable digital
                    environment across all of your platforms.
                </p>

                <p>
                    Our cloud and hosting approach combines modern hosting
                    technologies, proven cloud architecture, proactive
                    monitoring and strong security practices to build
                    infrastructure that is easy to manage, monitor and
                    scale with your business.
                </p>

                <p>
                    We help businesses choose the right hosting environment,
                    improve website performance and maintain dependable access
                    to their systems as their online operations grow.
                </p>
                


                <!-- =================================================
                     CLOUD & HOSTING SERVICES
                ================================================== -->
<!-- 
                <div class="service_features">

                    <h3>
                        Our Cloud &amp; Hosting Services
                    </h3>

                    <ul class="features_list">

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Web Hosting Services</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Cloud Server Setup &amp; Management</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Cloud Migration Services</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>VPS &amp; Dedicated Server Hosting</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Server Security &amp; Monitoring</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Backup &amp; Disaster Recovery</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Domain &amp; DNS Management</span>
                        </li>

                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>24/7 Server Maintenance &amp; Support</span>
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

                $text1 = 'We analyze your traffic patterns, application needs and budget before recommending a hosting or cloud setup.';
                $text2 = 'Engineered for tomorrow — cloud infrastructure designed to handle traffic spikes, new services, and rapid business growth.';
                $text3 = 'Rigorous security standards, regular backups, uptime monitoring, and performance optimization built into every phase.';
                $text4 = 'Dedicated post-deployment support, server monitoring, performance tuning, and continuous enhancements to keep your infrastructure ahead.';

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

<?php include 'components/Timeline2.php'; ?>

<!-- END  DEVELOPMENT PROCESS-section -->


<!-- =========================================================
     OUR EXPERTISE
========================================================= -->

<?php

$expertiseHeading = "Cloud Computing & Hosting Services";

$expertiseDescription =
    'We deliver secure, high-availability cloud and hosting environments that
                combine performance, automation and cost control to keep your
                business online and running smoothly.';

$expertiseItems = [
    [
        'icon' => 'fa-solid fa-cloud',
        'title' => 'Cloud Infrastructure',
        'description' => 'Scalable cloud environments on AWS, Azure and Google Cloud
                            designed around your performance and budget needs.',
    ],
    [
        'icon' => 'fa-solid fa-server',
        'title' => 'Hosting Solutions',
        'description' => 'Fast and reliable hosting for websites, web applications and
                            APIs with high uptime and easy scaling.',
    ],
    [
        'icon' => 'fa-solid fa-cloud-arrow-up',
        'title' => 'Cloud Migration',
        'description' => 'Smooth migration of applications, databases and servers to
                            the cloud with minimal downtime and no data loss.',
    ],
    [
        'icon' => 'fa-solid fa-shield-halved',
        'title' => 'Security & Backup',
        'description' => 'Firewalls, access control, SSL, encrypted backups and
                            disaster recovery plans to protect your data.',
    ],
    [
        'icon' => 'fa-solid fa-gauge-high',
        'title' => 'Monitoring & Support',
        'description' => 'Round-the-clock monitoring, performance tuning, patching
                            and technical support for your cloud environment.',
    ],
];

include 'components/our-expertise.php'; ?>


<!-- =========================================================
     FAQ SECTION
========================================================= -->

<?php

$title = 'Cloud & Hosting Services FAQs';
$desc = 'Find answers to common questions about our cloud, hosting and server management services.';
$helpTitle = 'Need help choosing the right hosting setup?';
$helpDescription = 'Share your traffic, applications and budget with our team.';
$helpLink = '#';
$list = [
    [
        'question' => 'What Types Of Hosting Do You Offer?',
        'answer' => 'We offer shared hosting, VPS hosting, dedicated servers and fully managed cloud hosting based on your traffic, performance and budget requirements.'
    ],
    [
        'question' => 'Can You Migrate My Website Or Application To The Cloud?',
        'answer' => 'Yes. We handle end-to-end cloud migration, moving your website, application and data with minimal downtime and no loss of functionality.'
    ],
    [
        'question' => 'Which Cloud Platforms And Technologies Do You Work With?',
        'answer' => 'We work with suitable platforms based on project requirements, including AWS, Google Cloud, Microsoft Azure, DigitalOcean and Linux/Windows server environments.'
    ],
    [
        'question' => 'Do You Provide Server Security And Backups?',
        'answer' => 'Yes. We provide server hardening, firewall configuration, uptime monitoring, regular backups and disaster recovery planning to keep your data safe.'
    ],
    [
        'question' => 'Do You Provide Ongoing Server Maintenance And Support?',
        'answer' => 'Yes. We provide 24/7 server monitoring, software updates, security patches, performance improvements and technical support after your setup is live.'
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