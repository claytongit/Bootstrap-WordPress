<?php /* Template name: barra lateral a esquerda*/ ?>

<?php get_header(); ?>
        <div class="row">
        <?php get_sidebar(); ?>
            <div class="col">
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <h3 class="mb-3"><?php the_title(); ?></h3>
            <?php the_content(); ?>                
        </div>
        <?php endwhile; ?>
        <?php else:get_404_template(); endif; ?>
        </div>
    </div>
<?php get_footer(); ?>