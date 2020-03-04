<?php get_header(); ?>

    <main class="main">
        <div class="container">
            <div class="main_title">
            <?php the_field('main_title') ?>
            </div>
            <div class="main_text">
            <?php the_field('main_text') ?>
            </div>
            <div class="main_img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
            </div>
            <div class="progect">
                <div class="progect_title">
                    ПРОЕКТЫ ДОМОВ ИЗ БРУСА
                </div>
                <div class="progect_item">
                    <div class="progect_name">
                        ДОМ #1
                    </div>
                    <div class="progect_size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="Progect_area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="progect_prise">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="progect_img-item">
                        <img src="img/home1.jpg" alt="">
                    </div>
                    <div class="progect_img-item">
                        <img src="img/progect1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="progect">
                <div class="progect_title">
                    ПРОЕКТЫ ДОМОВ ИЗ БРУСА
                </div>
                <div class="progect_item">
                    <div class="progect_name">
                        ДОМ #2
                    </div>
                    <div class="progect_size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="Progect_area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="progect_prise">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="progect_img-item">
                        <img src="img/home2.jpg" alt="">
                    </div>
                    <div class="progect_img-item">
                        <img src="img/progect2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="progect">
                <div class="progect_title">
                    ПРОЕКТЫ ДОМОВ ИЗ БРУСА
                </div>
                <div class="progect_item">
                    <div class="progect_name">
                        ДОМ #3
                    </div>
                    <div class="progect_size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="Progect_area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="progect_prise">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="progect_img-item">
                        <img src="img/home3.jpg" alt="">
                    </div>
                    <div class="progect_img-item">
                        <img src="img/progect3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
            <div class="download">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/download.png" alt="">
                <a href="#">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
            </div>
        <div class="container">
            <div class="gallery">
                <div class="gallery_title">
                    ФОТОГРАФИИ НАШИХ РАБОТ
                </div>
                <div class="gallery_text">
                    некоторые фотографии построенных нами домов и бань из бруса
                </div>
                <div id="gallery_inner">
                <?php the_field('popup') ?>
                    <!--<a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
                    <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>-->
                </div>
            </div>
            <div class="main_img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
            </div>
        </div>
    </main>
    <?php get_footer(); ?>