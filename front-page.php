<?php get_header(); ?>

    <!-- ヒーローここから -->
    <section class="hero">

        <div class="hero__inner">
            <div class="hero__content">
    
                <h1 class="hero__title js-fadein-hero">ブロックエディタ対応LPから既存HTMLのテーマ化まで<br>幅広く対応するWordPress実装</h1>
    
                <p class="hero__text js-fadein-hero">
                    ACF Blocksを用いたコンポーネント開発(ブロックエディタ対応)や、<br>
                    ACF/CPTを使用したクラシックなサイト構築、既存HTMLからのWordPress化など、<br>
                    ご要望の仕様に合わせて丁寧にコーディングいたします。
                </p>
    
                <div class="column__buttons js-fadein-hero">
                    <a href="#services" class="btn btn--secondary">Services</a>
                    <a href="#contact" class="btn btn--primary">Contact</a>
                </div>

            </div>
        </div>

    </section>
    <!-- ヒーローここまで -->

    <!-- 制作物ここから -->
    <section class="created">

        <div class="created__inner">

            <h2 class="created__title">Created</h2>
            <div class="scroll-line js-scroll-line"></div>

            <div class="created__list">

            <?php
                $args = array(
                    'post_type'      => 'created', // カスタム投稿タイプ名
                    'posts_per_page' => -1,        // 全件表示
                    'orderby'        => 'date',    // 日付順
                    'order'          => 'DESC'     // 新しい順
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); 
            ?>
    
                <div class="created__item card">
                    <div class="card__inner-box">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card__img-wrapper">
                                <?php 
                                    $img = get_field('img');
                                    if( !empty($img) ): 
                                ?>
                                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" class="project-main-img">
                                <?php endif; ?>
                            </div>
                            <h3 class="card__title"><?php echo esc_html(get_field('title')); ?></h3>
                            <p class="card__text">
                                <?php echo wp_kses_post(get_field('text')); ?>
                            </p>
                            <p class="card__tech"><?php echo esc_html(get_field('tech')); ?></p>
                        </a>

                        <div class="card__links">
                            <?php if ($github = get_field('github_url')) : ?>
                                <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" class="card__link-icon">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            <?php endif; ?>

                            <?php if ($site = get_field('site_url')) : ?>
                                <a href="<?php echo esc_url($site); ?>" target="_blank" rel="noopener noreferrer" class="card__link-icon">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>まだ制作実績はありません。</p>';
                endif;
                ?>

            </div>
        </div>
    </section>
    <!-- 制作物ここまで -->

    <!-- できることここから -->
    <section class="services">

        <div class="services__inner">

            <h2 class="services__title">Services</h2>
            <div class="scroll-line js-scroll-line"></div>

            <p class="services__lead">
                コーディング・WordPress実装のパートナーとして、以下の業務に対応しております。<br>
                丁寧な確認と迅速な連絡を心がけておりますので、まずはお気軽にご相談ください。
            </p>

            <ul class="services__list">

                <?php
                    $args = array(
                        'post_type'      => 'services', // カスタム投稿タイプ名
                        'posts_per_page' => -1,        // 全件表示
                        'orderby'        => 'date',    // 日付順
                        'order'          => 'DESC'     // 新しい順
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); 
                ?>
                    <li class="services__item">
                        <strong class="services__term"><?php echo esc_html(get_field('services__title')); ?></strong>
                        <p class="services__description">（<?php echo wp_kses_post(get_field('services__description')); ?>）</p>
                    </li>
                <?php 
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
    
            </ul>

        </div>
    </section>
    <!-- できることここまで -->

    <!-- お問い合わせフォームここから -->
    <section id="contact" class="contact">

        <div class="contact__inner">

            <h2 class="contact__title">Contact</h2>
            <div class="scroll-line js-scroll-line"></div>

            <form action="" method="post" class="contact__form form">
                <div class="form__wrapper">
    
                    <div class="form__column">
        
                        <div class="form__field">
                            <label for="name" class="form__label">お名前</label>
                            <input type="text" id="name" name="name" placeholder="山田 太郎" class="form__input" required>
                        </div>
        
                        <div class="form__field">
                            <label for="email" class="form__label">メールアドレス</label>
                            <input type="email" id="email" name="email" placeholder="example@example.com" class="form__input" required>
                        </div>
        
                    </div>

                    <div class="form__column">
                        <div class="form__field form__field--textarea">
                            <label for="message" class="form__label">お問い合わせ内容</label>
                            <textarea id="message" name="message" placeholder="ご相談内容をご記入ください" class="form__textarea" required></textarea>
                        </div>
                    </div>

                </div>

                <div class="form__submit-area">
                    <button type="submit" class="btn btn--primary form__submit-btn">Submit</button>
                </div>

            </form>

        </div>
    </section>
    <!-- お問い合わせフォームここまで -->

<?php get_footer(); ?>