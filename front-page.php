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
    
                <a href="./single.html" class="created__item card">
                    <div class="card__inner-box">
                        <div class="card__img-wrapper">
                            <img src="./img/created1.png" alt="AIチャットボット導入LPのモックアップ" class="card__img">
                        </div>
                        <h3 class="card__title">【自主制作】AIチャットボット導入LP</h3>
                        <p class="card__text">
                            AIチャットボットの導入を促すBtoB向けのサービスLPです。<br>
                            クライアント側での自由なページ運用を想定し、ACF Blocksを用いた高度なブロックエディタ化を実装しています。<br>
                            各セクションをカスタムブロック化しているため、専門知識がなくても管理画面から直感的にコンテンツの追加や並び替え、文言の修正が可能です。
                        </p>
                        <p class="card__tech">WordPress / ACF Blocks / HTML / CSS</p>
                        <div class="card__links">
                            <span data-link="#" class="card__link-icon js-sns-link">
                                <i class="fa-brands fa-github"></i>
                            </span>
                            <span data-link="#" class="card__link-icon js-sns-link">
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                    </div>
                </a>

                <a href="./single.html" class="created__item card">
                    <div class="card__inner-box">
                        <div class="card__img-wrapper">
                            <img src="./img/created2.png" alt="地域密着型 不動産会社HPのモックアップ" class="card__img">
                        </div>
                        <h3 class="card__title">【自主制作】地域密着型 不動産会社HP</h3>
                        <p class="card__text">
                            HTMLテンプレートをベースにWordPress化したサイトです。<br>
                            カスタム投稿タイプとタクソノミーを実装し、各条件に応じた物件一覧を動的に出力。<br>
                            さらにSCFの繰り返し機能を用いた複数画像登録や、ACFによる条件分岐など、HTMLの知識がないクライアントでも迷わずに入稿できる実用的な管理画面を設計しました。
                        </p>
                        <p class="card__tech">WordPress / CPT / Taxonomy / SCF / ACF / PHP</p>
                        <div class="card__links">
                            <span data-link="#" class="card__link-icon js-sns-link">
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                    </div>
                </a>

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
    
                <li class="services__item">
                    <strong class="services__term">WordPressテーマ化</strong>
                    <p class="services__description">（既存HTMLやデザインデータからのオリジナルテーマ構築、クラシックエディタでのACF/CPT実装に対応します。）</p>
                </li>

                <li class="services__item">
                    <strong class="services__term">ブロックエディタ対応</strong>
                    <p class="services__description">（ACF Blocksを活用し、クライアント様側でセクションの並び替えや編集が直感的に行えるLP・ページを構築します。）</p>
                </li>

                <li class="services__item">
                    <strong class="services__term">レスポンシブ実装</strong>
                    <p class="services__description">（スマートフォンやタブレットなど、どの端末から見てもデザインが崩れない、見やすく扱いやすいコーディングを行います。）</p>
                </li>
    
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