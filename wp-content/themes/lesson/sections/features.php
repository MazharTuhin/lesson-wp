<?php 
$features_title = get_theme_mod('features_section_title', 'Learner outcomes through our awesome platform');
$features_description = get_theme_mod('features_section_description', '87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career. Lesson Impact Report (2022)');
$features_sub_description = get_theme_mod('features_section_sub_description', 'Lesson Impact Report (2025)');
$features_button_text = get_theme_mod('features_button_text', 'Sign Up');
$features_button_link = get_theme_mod('features_button_link', '#');
$features_image_1 = get_theme_mod('features_image_1', get_template_directory_uri() . '/assets/images/features-img-1.png');
$features_image_2 = get_theme_mod('features_image_2', get_template_directory_uri() . '/assets/images/features-img-2.png');

?>

<section class="features">
    <div class="container">
        <div class="features-wrapper">
            <!----- img box ----->
            <div class="features-img">
                <?php if ($features_image_1): ?>
                    <img class="img-1" src="<?php echo esc_url($features_image_1); ?>" alt="Features Image">
                <?php endif; ?>
                <?php if ($features_image_2): ?>
                    <img class="img-2" src="<?php echo esc_url($features_image_2); ?>" alt="Features Image">
                <?php endif; ?>
            </div>

            <!----- text box ----->
            <div class="features-text">
                <?php if ($features_title): ?>
                    <h3><?php echo esc_html($features_title); ?></h3>
                <?php endif; ?>
                <?php if ($features_description): ?>
                    <p><?php echo esc_html($features_description); ?></p>
                    <span><?php echo esc_html($features_sub_description); ?></span>
                <?php endif; ?>

                <?php if($features_button_text): ?>
                    <a href="<?php echo esc_url($features_button_link); ?>" class="yellow-bg-btn sign-up">
                        <?php echo esc_html($features_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>