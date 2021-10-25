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
                        <aside class="sidebar col-md-3">sidebar</aside>
                        <div class="news col-md-9">news
                        <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                        <article>
                            <h2><?php the_title(); ?></h2>
                            
                            <p><?php the_content(); ?></p>
                            
                        </article>

    
  
                        <?php endwhile; ?>

                        <?php else : ?>



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