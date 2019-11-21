<div class="w-100 bg-secondary border-top border-dark mt-5">          
    <div class="container">
        <div class="row">
            <div class="col py-3 text-center" style="color: white;">
                <h5><?php echo get_theme_mod('footer_title', 'Meu primeiro tema WordPress'); ?></h5>
                <p class="mb-0"><?php echo get_theme_mod('footer_text', 'Feito por Clayton Tavares'); ?></p>
            </div> 
        </div>
    </div>                  
</div>
    
<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>