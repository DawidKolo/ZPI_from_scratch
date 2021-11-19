<?php 
/* Template Name: General Template */



?>

<?php get_header(); ?>
<img src="<?php header_image(); ?>" heigth="<?php echo get_custom_header()->heigth; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="content-area">
    <main>


        <section class="middle-area">
            <div class="container">


                <div class="general-template">
                    <?php 
                            if ( have_posts() ) :

                         /* Start the Loop */ 
                                while ( have_posts() ) : the_post(); 
                        ?>

                    <article>
                        <h2><?php the_title(); ?></h2>

                        <p><?php the_content(); ?></p>

                    </article>

                    <p>This page template is the same on all selected pages</p>

                    <?php endwhile; ?>

                    <?php else : ?>



                    <?php endif; ?>
                </div>

            </div>

        </section>

    </main>
</div>
<?php get_footer(); ?>