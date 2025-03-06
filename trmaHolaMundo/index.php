<?php get_header()?>
    <p>Hola Mundo</p>

    <?php 
        if(have_posts()): 
            while(have_posts()): the_post():
    ?>

                <p><?php the_title()?></p>

    <?php             
            endwhile;
        else:
            __('pito', 'Por mick');
        endif;?>

<?php get_footer(); ?>