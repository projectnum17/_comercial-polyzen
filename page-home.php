<?php /* Template Name: Home Page */

get_header();
?>
<!-- intro start -->
    <main class="main">
        <section class="intro">
            <div class="video">
                <video preload="auto"  muted autoplay="autoplay" playsinline loop="loop" no-controls>
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/video/background.mp4" type="video/mp4" codecs="avc1.42E01E, mp4a.40.2">
                    
                </video>
                <div class="video-overlay"></div>
            </div>
            <div class="container">
                <div class="intro__wrapper">

                    <h1 class="intro__title"><?php echo get_field('section_1_title');?></h1>
                    <p class="intro__subtitle">
                        <?php echo get_field('section_1_description');?>
                    </p>
                </div>
            </div>
        </section>
        <!-- intro end -->

        <!-- pupils start -->
        <section class="pupils">
            <div class="pupils__wrapper">
                <div class="container">
                    <h2 class="pupils__title"><?php echo get_field('section_2_title');?></h2>
                </div>
            </div>
        </section>
        <div class="buttons">
            <div class="container">
                <a href="#!" class="button">Записатися на тренування</a>
            </div>
        </div>
        <!-- pupils end -->

        <!-- towards start -->
        <section class="towards">
            <img class="towards__bg" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/towards_bg.png" alt="">
            <div class="towards__wrapper">
                <div class="container">
                    <h3 class="towards__title"><?php echo get_field('section_towards_title');?></h3>
                    <p class="towards__subtitle"><?php echo get_field('section_towards_description');?></p>
                </div>
            </div>

            <!-- towards end -->

            <!-- cards start -->
            <div class="cards">
                <div class="container">
                    
                    
                        <?php if( have_rows('towards_card') ): ?>
                            <ul class="">
                            <div class="cards__block">
                                                <?php while( have_rows('towards_card') ): the_row(); 
                                                    // переменные
                                                    $image = get_sub_field('card_image');
                                                    $title = get_sub_field('card_title');
                                                    $description = get_sub_field('card_description');
                                                    ?>
                                                    <li class="cards__block-card">

                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                                            <div class="cards__block-card_text">
                                                                <h3 class="cards__block-card_text-title"><?php echo $title; ?></h3>
                                                                <p class="cards__block-card_text-descr"><?php echo $description; ?></p>
                                                            </div>
                                                            
                                                    </li>
                                                <?php endwhile; ?>
                            </div>
                            </ul>
                        <?php endif; ?>



                </div>
            </div>
        </section>
        <!-- cards end -->

        <!-- about -->
        <section class="about">
            <div class="container">
                <h3 class="about__title"><?php echo get_field('section_about_title');?></h3>
                <div class="about__cards">
                    <!-- 1 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title">Просторі та світлі зали!</h3>
                        <p class="about__cards-item_descr">
                            Три комфортні зали, розміром від 100 м2! Оснащені матами, килимками, потужною системою
                            кондиціювання та всім необхідним обладнанням для тренувань!
                        </p>
                    </div>
                    <!-- 1 -->

                    <!-- 2 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title"> Знання та досвід – наші сильні сторони!</h3>
                        <p class="about__cards-item_descr">
                            Усі тренери школи є багаторазовими чемпіонами та призерами як Українських так і
                            Європейських Чемпіонатів! Тренери є творцями авторських майстер-класів, марафонів та
                            програм тренувань!
                        </p>
                    </div>
                    <!-- 2 -->

                    <!-- 3 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title">Якість та комфорт!</h3>
                        <p class="about__cards-item_descr">
                            Наявність роздягальні з окремими шафками із замками, лаунж зони, кулера з питною водою.
                            Також у нас на стійці ви можете придбати все потрібне для занять.
                        </p>
                    </div>
                    <!-- 3 -->
                </div>
            </div>
        </section>
        <!-- about -->

        <!-- video -->
        <section class="video__section">
            <div class="container">
                <div class="video__wrapper">
                <div class="video__item"></div>
                    <iframe class="video__element" src="https://www.youtube.com/embed/qSA4-Vh1SUs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                </div>
                <div class="video__text">
                    <p><?php echo get_field('section_video_youtube');?></p>
                    <div class="buttons__wrapper">
                        <a href="#!" class="video__btn button">Записатися на тренування</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video -->

        <!-- proud -->
        <section class="proud">
            <div class="container">
                <div class="proud__wrapper">

                    <div class="pop__up" id="pop_up">
                        <div class="pop__up-container">
                            <div class="pop__up-body" id="pop__up_body">
                                <!-- Slideshow container -->
                                <div class="slideshow-container">


                                    <!-- TEST -->
                                    <?php 
                                    $images = get_field('section_proud_photo');
                                    $size = 'full'; // (thumbnail, medium, large, full или произвольный размер)

                                    if( $images ): ?>
                                        <ul>
                                            <?php foreach( $images as $image ): ?>
                                            <div class="mySlides fade">
                                                <li>
                                                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                                </li>
                                            </div>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <!-- TEST -->
                                    
                                    <!-- Next and previous buttons -->
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div>
                                <br>

                                <!-- The dots/circles -->
                                <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                                <div class="pop__up-close" id="pop_up_close">&#10006</div>
                            </div>
                        </div>
                    </div>

                    <h3 class="proud__title"><?php echo get_field('section_proud_title');?></h3>
                    <a href="#!" class="pround__link" id="open_pop_up">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/proud_img.webp" alt="Our proud" class="proud__image">
                    </a>
                </div>
            </div>
        </section>
        <!-- proud -->

        <!-- testimonials -->
        <section class="testimonials">
            <div class="container">

                <div class="testimonials__text">
                    <h3 class="testimonials__title"><?php echo get_field('section_testimonials_title');?></h3>
                    <p class="testimonials__descr"><?php echo get_field('section_testimonials_description');?></p>
                </div>



                <?php if( have_rows('testimonials_slider') ): ?>
                            <ul class="">
                            <div class="slider__wrapper">
                                <div class="image-slider swiper-container">
                                    <div class="image-slider__wrapper swiper-wrapper">
                                    <?php while( have_rows('testimonials_slider') ): the_row(); 
                                                    // переменные
                                                    $avatar = get_sub_field('testimonials_avatar');
                                                    $name = get_sub_field('testimonials_name');
                                                    $description = get_sub_field('testimonials_description');
                                                    ?>

                                                    <div class="image-slider__slide swiper-slide">
                                                        <div class="first-slide image-slider__block">
                                                            <li class="image-slider__block-test">

                                                                <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt'] ?>" />
                                                                <h3 class="image-slider__block-name"><?php echo $name; ?></h3>
                                                                <div class="image-slider__block-rating">
                                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                                                </div>
                                                                <p class="image-slider__block-descr"><?php echo $description; ?></p>

                                                            </li>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            </ul>
                <?php endif; ?>





            </div>
        </section>
        <!-- testimonials -->

        <section class="form">
            <div class="container">
                <h4 class="form__title"><?php echo get_field('section_form_title');?></h4>
            </div>

            <!-- modal -->
            <div class="overlay js-overlay-thank-you" id="overlay">
                <div class="popup js-thank-you" id="form-popup">
                    <div class="overlay_body">
                        <div class="popup-text">
                            <h4>Ми звʼяжемося з Вами найближчим часом!</h4>
                            <p>
                                А поки запрошуємо вас приєднатися до нашої сторінки
                                <span>
                                    <a target="_blank" href="https://instagram.com/pole_zen_school?igshid=ODM2MWFjZDg=">Instagram</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="overlay-close-btn" id="overlay-close"><span>x</span></div>
            </div>
            <!-- modal -->    

            <div class="form__wrapper" id="form">
                <div class="form__wrapper-contact">      
                    <?php the_content(); ?>
                </div>

            </div>
        </section>

        <!-- button popUp -->
                <div class="pop__up-button" id="popUpButton"> 
                    <div class="pop__up-button_container" id="pop__up-button">
                        <div class="pop__up-button_body" id="popUpBody">
                            <div class="form__wrapper-contact">      
                                <?php the_content(); ?>
                            </div>
                            <div class="pop__up-button_close" id="button_close"><span>x</span></div>
                        </div>
                    </div>
                </div>
        <!-- button popUp -->

    </main>
  

<?php
get_footer();
