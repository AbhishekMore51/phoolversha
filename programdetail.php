<?php

session_start();
include('libraries/config.php');

$navigation = "program";

/*= Set Relative Path if not default =*/
$relative_path = "../";

?>

<!DOCTYPE html>
<html lang="en-IN">

<head>
    <title>Program Detail | Phool Versha Foundation</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" /> -->

    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" href="<?php echo $relative_path; ?>images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="img/x-icon" href="<?php echo $relative_path; ?>images/favicon.ico">

    <link rel="alternate" href="#" hreflang="x-default" />

    <?php
    include('includes/css.php');
    ?>

</head>

<body>
    <div class="main">

        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>

        <!-- Main Block -->
        <div class="main-content">
            <div class="programdetail">

                <!-- Block 1 Start -->
                <div class="block-1 pd-24">
                    <div class="container">
                        <div class="inner-container">
                            <div class="inner">
                                <div class="inner-content">
                                    <div class="image-block-1 pdB-45">
                                        <img src="<?php echo $relative_path; ?>images/detail.jpg" alt="">
                                    </div>
                                    <div class="head-block-1">
                                        <h2 class="h2">
                                            Activity title / Activity title /Activity title Extra line
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block 1 End -->

                <!-- Block 2 Start -->
                <div class="block-2 pdB-35">
                    <div class="container">
                        <div class="inner-container">
                            <div class="inner">
                                <div class="inner-content">
                                    <div class="block">
                                        <img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-01">
                                        <img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-02">
                                        <img src="<?php echo $relative_path; ?>images/icons/flower-3.png" alt="" class="img-03">
                                        <div class="block-21">
                                            <div class="list-block">
                                                <ul>
                                                    <li class="pdB-24">
                                                        <p class="p5">
                                                            Introduction
                                                        </p>
                                                    </li>
                                                    <li class="option pdB-24">
                                                        <p class="p5">
                                                            Header 1
                                                        </p>
                                                    </li>
                                                    <li class="option pdB-24">
                                                        <p class="p5">
                                                            Header 2
                                                        </p>
                                                    </li>
                                                    <li class="option pdB-24">
                                                        <p class="p5">
                                                            Summary
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="divide"></div>
                                            <div class="buttons">
                                                <div class="btn copy">
                                                    <a href="#">
                                                        <img src="<?php echo $relative_path; ?>images/copy.png" alt="" class="img-0">
                                                        <p class="p5">
                                                            Copy Link
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <img src="<?php echo $relative_path; ?>images/social/facebook.png" alt="" class="img-0">
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <img src="<?php echo $relative_path; ?>images/social/twitter.png" alt="" class="img-0">
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <img src="<?php echo $relative_path; ?>images/social/linkedin.png" alt="" class="img-0">
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <img src="<?php echo $relative_path; ?>images/social/instagram.png" alt="" class="img-0">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-22">
                                            <div class="block-221 pdB-45">
                                                <div class="text-block-1 pdB-24">
                                                    <p class="p5">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices
                                                        praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc
                                                        at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in
                                                        ultricies vel fringilla. Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent
                                                        amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat
                                                        consequat purus.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="block-221 pdB-45">
                                                <div class="head-block-1 pdB-24">
                                                    <h2 class="h3">
                                                        Header 1
                                                    </h2>
                                                </div>
                                                <div class="text-block-1 pdB-24">
                                                    <p class="p5">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices
                                                        praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc
                                                        at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in
                                                        ultricies vel fringilla. Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent
                                                        amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat
                                                        consequat purus.
                                                    </p>
                                                </div>
                                                <div class="list-block">
                                                    <ul>
                                                        <li class="pdB-14">
                                                            <p class="p5">
                                                                <span>&#8226;</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </p>
                                                        </li>
                                                        <li class="pdB-14">
                                                            <p class="p5">
                                                                <span>&#8226;</span> Donec ullamcorper mattis lorem non.
                                                            </p>
                                                        </li>
                                                        <li class="pdB-14">
                                                            <p class="p5">
                                                                <span>&#8226;</span> Ultrices praesent amet ipsum justo massa.
                                                            </p>
                                                        </li>
                                                        <li class="pdB-14">
                                                            <p class="p5">
                                                                <span>&#8226;</span> Eu dolor aliquet risus gravida nunc at feugiat consequat purus.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="block-221 pdB-45">
                                                <div class="head-block-1 pdB-24">
                                                    <h2 class="h3">
                                                        Header 2
                                                    </h2>
                                                </div>
                                                <div class="text-block-1 pdB-24">
                                                    <p class="p5">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices
                                                        praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc
                                                        at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in
                                                        ultricies vel fringilla. Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent
                                                        amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat
                                                        consequat purus.
                                                    </p>
                                                </div>
                                                <div class="image-block-1 pdB-35">
                                                    <img src="<?php echo $relative_path; ?>images/detail.jpg" alt="">
                                                    <div class="text-block-2 pdT-7">
                                                        <p class="p5">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="quote-block">
                                                    <div class="text-block-3">
                                                        <p class="p4 pdB-24 big">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                            ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo
                                                            massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus.
                                                        </p>
                                                        <p class="p5">
                                                            — Paris Washington, CEO & Founder
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="block-221 pdB-45">
                                                <div class="head-block-1 pdB-24">
                                                    <h2 class="h3">
                                                        Summary
                                                    </h2>
                                                </div>
                                                <div class="summary">
                                                    <div class="text-block-4">
                                                        <p class="p5 pdB-24">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Donec ullamcorper mattis lorem non. Ultrices praesent amet
                                                            ipsum justo massa. Eu dolor aliquet risus gravida nunc at
                                                            feugiat consequat purus.
                                                        </p>
                                                        <p class="p5">
                                                            Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                            ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo
                                                            massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block 2 End -->

                <!-- Other Programs Start -->
                <div class="block-3 pdB-35">
                    <div class="container">
                        <div class="inner-container">
                            <div class="inner">
                                <div class="inner-content">
                                    <div class="head-block-1">
                                        <h2 class="h2">
                                            Other programs
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Other Programs End -->

                <!-- Slider Block start -->
                <div class="block-4">
                    <div class="slider-block">
                        <ul class="slider-center">
                            <li class="slick-li">
                                <div class="image-block-1 pdB-24">
                                    <img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt=" Image 2">
                                </div>
                                <div class="text-block-1">
                                    <p class="p4">
                                        Activity 1
                                    </p>
                                </div>
                                <div class="text-block-2 pd-14">
                                    <p class="p5">
                                        At Phool Versha, we're making a difference now. From providing
                                        essential medical care in remote villages to e
                                    </p>
                                </div>
                                <div class="btn-block">
                                    <a href="<?php echo $relative_path; ?>program/programdetail" class="p5">
                                        Read More
                                    </a>
                                </div>
                            </li>
                            <li class="slick-li">
                                <div class="image-block-1 pdB-24">
                                    <img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt=" Image 2">
                                </div>
                                <div class="text-block-1">
                                    <p class="p4">
                                        Activity 1
                                    </p>
                                </div>
                                <div class="text-block-2 pd-14">
                                    <p class="p5">
                                        At Phool Versha, we're making a difference now. From providing
                                        essential medical care in remote villages to e
                                    </p>
                                </div>
                                <div class="btn-block">
                                    <a href="<?php echo $relative_path; ?>program/programdetail" class="p5">
                                        Read More
                                    </a>
                                </div>
                            </li>
                            <li class="slick-li">
                                <div class="image-block-1 pdB-24">
                                    <img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt=" Image 2">
                                </div>
                                <div class="text-block-1">
                                    <p class="p4">
                                        Activity 1
                                    </p>
                                </div>
                                <div class="text-block-2 pd-14">
                                    <p class="p5">
                                        At Phool Versha, we're making a difference now. From providing
                                        essential medical care in remote villages to e
                                    </p>
                                </div>
                                <div class="btn-block">
                                    <a href="<?php echo $relative_path; ?>program/programdetail" class="p5">
                                        Read More
                                    </a>
                                </div>
                            </li>
                            <li class="slick-li">
                                <div class="image-block-1 pdB-24">
                                    <img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt=" Image 2">
                                </div>
                                <div class="text-block-1">
                                    <p class="p4">
                                        Activity 1
                                    </p>
                                </div>
                                <div class="text-block-2 pd-14">
                                    <p class="p5">
                                        At Phool Versha, we're making a difference now. From providing
                                        essential medical care in remote villages to e
                                    </p>
                                </div>
                                <div class="btn-block">
                                    <a href="<?php echo $relative_path; ?>program/programdetail" class="p5">
                                        Read More
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Slider Block end -->

            </div>
        </div>

        <!-- Footer -->
        <?php
        include('includes/footer.php');
        ?>

    </div>

    <?php
    include('includes/js.php');
    ?>

    <script>
        /*= Page Variables =*/
        /* ========== */

        /*= Page Specific Functions that loads on DOC LOAD AND ON WINDOW RESIZE =*/
        function page_load_functions() {}

        /*= Page Specific Functions that loads on DOC READY AND ON WINDOW RESIZE =*/
        function page_ready_functions() {}

        /*= Page Specific Functions that loads ONLY on DOC LOAD =*/
        $(window).load(function() {});

        /*= Page Specific Functions that loads ONLY on DOC READY =*/
        $(function() {
            $('.slider-center').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        });
    </script>

</body>

</html>