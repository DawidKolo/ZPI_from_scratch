<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" heigth="<?php echo get_custom_header()->heigth; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

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
                    <aside class="sidebar col-md-3">sidebar</aside>
                    <div class="news col-md-9">
                        <?php 
                            if ( have_posts() ) :

                         /* Start the Loop */ 
                                while ( have_posts() ) : the_post(); 
                        

                        get_template_part('template-parts/content', get_post_format());



                        endwhile; 

                        else : ?>



                        <?php endif; ?>
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