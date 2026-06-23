<div class="project-media-text">
    <figure class="project-media-text__media">
        <a href="<?php echo esc_url($args['img']['url']); ?>" class="js-lightbox" target="_blank">
            <img src="<?php echo esc_url($args['img']['url']); ?>" alt="<?php echo esc_attr($args['img']['alt']); ?>">
        </a>
    </figure>
    <div class="project-media-text__content">
        <h3 class="project-media-text__title"><?php echo esc_html($args['title']); ?></h3>
        <p class="project-media-text__desc"><?php echo wp_kses_post($args['desc']); ?></p>
    </div>
</div>