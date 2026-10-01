<?php
$text1 = $text1 ?? '';
$text2 = $text2 ?? '';
$text3 = $text3 ?? '';
$text4 = $text4 ?? '';
?>



<div class="why_choose_sec">

    <div class="sec-title-small">

        <h3>
            Built Around Your Business Goals
        </h3>

    </div>


    <div class="choose_grid">

        <!-- BOX 01 -->

        <div class="choose_card">

            <div class="choose_card_header">

                <div class="choose_icon_box">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h4>
                    Business-Focused Solutions
                </h4>

                <span class="choose_num">
                    01
                </span>

            </div>

            <p><?= htmlspecialchars($text1) ?></p>

        </div>


        <!-- BOX 02 -->

        <div class="choose_card">

            <div class="choose_card_header">

                <div class="choose_icon_box">
                    <i class="fa-solid fa-sitemap"></i>
                </div>

                <h4>
                    Scalable Architecture
                </h4>

                <span class="choose_num">
                    02
                </span>

            </div>

            <p>
                <?= htmlspecialchars($text2) ?>
            </p>

        </div>


        <!-- BOX 03 -->

        <div class="choose_card">

            <div class="choose_card_header">

                <div class="choose_icon_box">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <h4>
                    Quality &amp; Security First
                </h4>

                <span class="choose_num">
                    03
                </span>

            </div>

            <p>
                <?= htmlspecialchars($text3) ?>
            </p>

        </div>


        <!-- BOX 04 -->

        <div class="choose_card">

            <div class="choose_card_header">

                <div class="choose_icon_box">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <h4>
                    Long-Term Support
                </h4>

                <span class="choose_num">
                    04
                </span>

            </div>

            <p>
                <?= htmlspecialchars($text4) ?>
            </p>

        </div>

    </div>

</div>