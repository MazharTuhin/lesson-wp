<?php
$cta_title = get_theme_mod('cta_section_title', 'Take the next step toward your personal and professional goals with Lesson.');
$cta_description = get_theme_mod('cta_section_description', 'Take the next step toward. Join now to receive personalized and more recommendations from the full Coursera catalog.');
$cta_button_text = get_theme_mod('cta_button_text', 'Join Now');
$cta_button_link = get_theme_mod('cta_button_link', '#');
$cta_image = get_theme_mod('cta_image', get_template_directory_uri() . "/assets/images/cta-img.png");

?>

<section class="cta">
    <div class="container">
        <div class="cta-wrapper">
            <!----- text box ----->
            <div class="cta-text">
                <?php if($cta_title): ?>
                    <h3><?php echo esc_html($cta_title); ?></h3>
                <?php endif; ?>
                <?php if($cta_description): ?>
                    <p><?php echo esc_html($cta_description); ?></p>
                <?php endif; ?>
                
                <?php if($cta_button_text): ?>
                    <a href="<?php echo esc_url($cta_button_link); ?>" class="yellow-bg-btn join-now"><?php echo esc_html($cta_button_text); ?></a>
                <?php endif; ?>
            </div>

            <!----- img box ----->
            <div class="cta-img">
                <?php if($cta_image): ?>
                    <img src="<?php echo esc_url($cta_image); ?>" alt="CTA Image Banner">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>