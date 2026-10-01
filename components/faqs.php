<?php
$title = $title ?? "";
$desc = $desc ?? "";
$helpTitle = $helpTitle ?? "Need help defining the right scope?";
$helpDescription = $helpDescription ?? "Share your users, services and current operating process with our team.";
$helpLink = $helpLink ?? "tel:+919028155454";

$list = $list ??  [];

?>


<section class="faq_sec">

    <div class="auto-container">


        <!-- =================================================
             FAQ TITLE
        ================================================== -->

        <div class="sec-title">

            <span class="sub-title">
                Frequently Asked Questions
            </span>

            <h2>
                <?= htmlspecialchars($title) ?>
            </h2>
            <p class="faq_desc">
                <?= $desc ?>
            </p>

        </div>


        <!-- =================================================
             FAQ HELP BOX
        ================================================== -->

        <div class="help_box">

            <div class="faq_help_icon">

                <i class="fa fa-headphones"></i>

            </div>


            <div class="faq_help_text">

                <h4><?= htmlspecialchars($helpTitle) ?></h4>

                <p><?= htmlspecialchars($helpDescription) ?></p>

            </div>


            <a href="<?= htmlspecialchars($helpLink) ?>"
                class="theme-btn btn-style-one faq_connect_btn">

                <span class="btn-title">
                    Let's Connect
                </span>

            </a>

        </div>


        <!-- =================================================
             FAQ ACCORDION
        ================================================== -->

        <div class="row">

            <div class="col">

                <ul class="accordion-box wow fadeInRight animated">


                    <!-- FAQ 01 -->

                    <?php foreach ($list as $item): ?>
                        <li class="accordion block">

                            <div class="acc-btn">

                                <?= $item['question'] ?>
                                <div class="icon fa fa-plus"></div>

                            </div>


                            <div class="acc-content">

                                <div class="content">

                                    <div class="text">
                                        <?= $item['answer'] ?>


                                    </div>

                                </div>

                            </div>

                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>

        </div>

    </div>

</section>