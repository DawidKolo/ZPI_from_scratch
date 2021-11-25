<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">Slide</div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">services</div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-3" h-100><?php get_sidebar('home'); ?></aside>
                    <div class="news col-md-9">news
                        <p>test</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="map">
            <div class="container">
                <div class="row">Map</div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>