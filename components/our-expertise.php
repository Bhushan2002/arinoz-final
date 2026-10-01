<?php

    $expertiseHeading = $expertiseHeading ?? "Expertise Heading";
    $expertiseDescription = $expertiseDescription ?? "Expertise Description";
    $expertiseItems = $expertiseItems ?? [];
?>


<section class="services-section-three">
    <div class="auto-container">

        <div class="sec-title text-center">
            <span class="sub-title">Our Expertise</span>
            <h2><?= htmlspecialchars($expertiseHeading) ?></h2>
            <p><?= htmlspecialchars($expertiseDescription) ?></p>
        </div>

        <div class="outer-box">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 justify-content-center">


            <?php foreach ($expertiseItems as $item): ?>
                <div class="service-block-three col wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <i class="icon <?= htmlspecialchars($item['icon']) ?>"></i>
                        <h4 class="title"><a href="#">
                        <?= htmlspecialchars($item['title']) ?></a></h4>
                        <div class="text"><?= htmlspecialchars($item['description']) ?></div>
                    </div>
                </div>

            <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>