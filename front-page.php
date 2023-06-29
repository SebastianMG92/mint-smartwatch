<?php
/*
 * Template Name: Home page template
 */
get_header();
?>

<main id="main" class="h-full min-h-screen flex flex-col">

    <div class="relative block grow">

        <?php if ( have_rows("sections") ) : 
            $iteration = 1;    
        ?>
            <?php while ( have_rows("sections") ) : the_row(); ?>

                <?php switch(get_row_layout()): 
                    case "hero": ?>
                    <section id="custom-template-<?php echo get_row_layout() . "-" . $iteration; ?>">
                        <?php get_template_part( 'template-parts/parts/section', 'hero'); ?>
                    </section>
                <?php endswitch; ?>

            <?php $iteration++; endwhile; // End of the loop. ?>
        <?php endif; ?>

    </div>

    <?php get_footer(); ?>
</main><!-- #main -->

<?php