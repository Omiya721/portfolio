<?php get_header(); ?>

    <article class="project-detail">

        <section class="project-detail__intro">
            <div class="project-detail__hero">
                <img src="./img/created1.png" alt="AIチャットボット導入LP" class="project-detail__hero-img">
            </div>
            <h1 class="project-detail__title">【自主制作】AIチャットボット導入LP</h1>
            <div class="scroll-line scroll-line--title js-scroll-line"></div>
            <p class="project-detail__lead">デザインデータをもとに、保守性を考慮したコーディングとWordPress実装を担当しました。</p>

            <div class="column__buttons project-links">
                <a href="https://example.com" class="btn btn--primary" target="_blank">実際のサイトを見る</a>
                <a href="https://github.com/..." class="btn btn--secondary" target="_blank">GitHubでコードを見る</a>
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
                            コーディング、WordPress構築、運用設計
                            <small>Design: <a href="https://www.figma.com/community/file/1220421382277658314/btob" target="_blank" rel="noopener noreferrer">acoco1102様（BtoB ランディングページ ワイヤーフレーム）</a></small>
                        </dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">制作期間</dt>
                        <dd class="project-summary__desc">9日間</dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">課題</dt>
                        <dd class="project-summary__desc">非エンジニアも管理画面から運用や修正を行えるよう制作</dd>
                    </div>
                    <div class="project-summary__item">
                        <dt class="project-summary__term">解決策</dt>
                        <dd class="project-summary__desc">ACF Blocksを利用し、管理画面からレイアウトが組めるカスタムブロックを実装。ブロック単位での追加や編集を可能に。</dd>
                    </div>
                </dl>
            </section>

            <section class="project-feature">
                <h2 class="project-feature__section-title">Features</h2>
                <div class="scroll-line js-scroll-line"></div>

                <div class="project-media-text">
                    <figure class="project-media-text__media">
                        <a href="./img/chatbot-lp-admin-panel.png" 
                            class="js-lightbox"
                            target="_blank">
                            <img src="./img/chatbot-lp-admin-panel.png" alt="管理画面の編集UI">
                        </a>
                    </figure>
    
                    <div class="project-media-text__content">
                        <h3 class="project-media-text__title">誰でも直感的に更新できる管理画面</h3>
                        <p class="project-media-text__desc">
                            ACF Blocksを活用し、管理画面から直接コンテンツを編集できるよう構築しました。<br>
                            プレビューを確認せずとも、管理画面上のレイアウトで直感的に更新が可能です。
                        </p>
                    </div>
                </div>

                <div class="project-media-text">
                    <figure class="project-media-text__media">
                        <a href="./img/chatbot-lp-admin-panel.png" 
                            class="js-lightbox" 
                            target="_blank">
                            <img src="./img/chatbot-lp-admin-panel.png" alt="管理画面の編集UI">
                        </a>
                    </figure>
    
                    <div class="project-media-text__content">
                        <h3 class="project-media-text__title">誰でも直感的に更新できる管理画面</h3>
                        <p class="project-media-text__desc">
                            ACF Blocksを活用し、管理画面から直接コンテンツを編集できるよう構築しました。<br>
                            プレビューを確認せずとも、管理画面上のレイアウトで直感的に更新が可能です。
                        </p>
                    </div>
                </div>
            </section>

            <section class="project-tech">
                <h2 class="project-tech__section-title">Tech Stack</h2>
                <div class="scroll-line js-scroll-line"></div>
                
                <ul class="tech-list">
                    <li class="tech-list__item">
                        <span class="tech-list__category">Frontend</span>
                        <span class="tech-list__name">HTML5 / Sass / JavaScript</span>
                    </li>
                    <li class="tech-list__item">
                        <span class="tech-list__category">CMS</span>
                        <span class="tech-list__name">WordPress / PHP / ACF Blocks</span>
                    </li>
                    <li class="tech-list__item">
                        <span class="tech-list__category">Tools</span>
                        <span class="tech-list__name">VSCode / GitHub / Figma</span>
                    </li>
                </ul>
            </section>

            <section class="project-detail__cta">
                <h2 class="project-detail__cta-title">このプロジェクトの詳細を確認する</h2>
                <div class="column__buttons project-links">
                    <a href="https://example.com" class="btn btn--primary" target="_blank">実際のサイトを見る</a>
                    <a href="https://github.com/..." class="btn btn--secondary" target="_blank">GitHubでコードを見る</a>
                </div>
            </section>
            
        </div>

    </article>

<?php get_footer(); ?>