<?php get_header(); ?>

    <article class="project-detail">

        <section class="project-detail__intro">
            <div class="project-detail__hero">
                <?php 
                    $img = get_field('img');
                    if( !empty($img) ): 
                ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" class="project-detail__hero-img">
                <?php endif; ?>
            </div>
            <h1 class="project-detail__title"><?php echo esc_html(get_field('title')); ?></h1>
            <div class="scroll-line scroll-line--title js-scroll-line"></div>
            <p class="project-detail__lead"><?php echo wp_kses_post(get_field('lead')); ?></p>

            <div class="column__buttons project-links">
                <?php if ($github = get_field('github_url')) : ?>
                    <a href="<?php echo esc_url($github); ?>" target="_blank" class="btn btn--primary">GitHubでコードを見る</a>
                <?php endif; ?>
                <?php if ($site = get_field('site_url')) : ?>
                    <a href="<?php echo esc_url($site); ?>" target="_blank" class="btn btn--secondary">実際のサイトを見る</a>
                <?php endif; ?>
            </div>
        </section>

        <div class="project-detail__body">

            <section class="project-summary">
                <h2 class="project-summary__section-title">Overview</h2>
                <div class="scroll-line js-scroll-line"></div>
                <dl class="project-summary__list">
                    <div class="project-summary__item">
                        <dt class="project-summary__term">担当範囲</dt>
                        <dd class="project-summary__desc">
                            <?php echo esc_html(get_field('charge')); ?>
                            <?php if ($design = get_field('design')) : ?>
                                <small>Design: <a href="<?php echo esc_url(get_field('design_credits')); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($design); ?></a></small>
                            <?php endif; ?>
                        </dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">制作期間</dt>
                        <dd class="project-summary__desc"><?php echo esc_html(get_field('period')); ?></dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">課題</dt>
                        <dd class="project-summary__desc"><?php echo wp_kses_post(get_field('assignment')); ?></dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">解決策</dt>
                        <dd class="project-summary__desc"><?php echo wp_kses_post(get_field('solution')); ?></dd>
                    </div>
                </dl>
            </section>

            <section class="project-feature">
                <h2 class="project-feature__section-title">Features</h2>
                <div class="scroll-line js-scroll-line"></div>

                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <?php if(get_field('feature_' . $i . '_img')): ?>
                        <?php get_template_part('template-parts/content', 'feature', [
                            'img'   => get_field('feature_' . $i . '_img'),
                            'title' => get_field('feature_' . $i . '_title'),
                            'desc'  => get_field('feature_' . $i . '_desc'),
                        ]); ?>
                    <?php endif; ?>
                <?php endfor; ?>

            </section>

            <section class="project-tech">
                <h2 class="project-tech__section-title">Tech Stack</h2>
                <div class="scroll-line js-scroll-line"></div>
                
                <ul class="tech-list">
                    <?php if ($frontend = get_field('frontend')) : ?>
                        <li class="tech-list__item">
                            <span class="tech-list__category">Frontend</span>
                            <span class="tech-list__name"><?php echo esc_html($frontend); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if ($cms = get_field('cms')) : ?>
                        <li class="tech-list__item">
                            <span class="tech-list__category">CMS</span>
                            <span class="tech-list__name"><?php echo esc_html($cms); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if ($tools = get_field('tools')) : ?>
                        <li class="tech-list__item">
                            <span class="tech-list__category">Tools</span>
                            <span class="tech-list__name"><?php echo esc_html($tools); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>
            </section>

            <section class="project-detail__cta">
                <h2 class="project-detail__cta-title">このプロジェクトの詳細を確認する</h2>
                
                <div class="column__buttons project-links">
                    <?php if ($github = get_field('github_url')) : ?>
                        <a href="<?php echo esc_url($github); ?>" target="_blank" class="btn btn--primary">GitHubでコードを見る</a>
                    <?php endif; ?>
                    <?php if ($site = get_field('site_url')) : ?>
                        <a href="<?php echo esc_url($site); ?>" target="_blank" class="btn btn--secondary">実際のサイトを見る</a>
                    <?php endif; ?>
                </div>
            </section>
            
        </div>

    </article>

<?php get_footer(); ?>