<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Misa Omiya | PortfolioSite</title>
        <?php wp_head(); ?>
    </head>
    <body>

        <header class="header">
            <div class="header__inner">

                <div class="header__logo">
                    <a href="./index.html">M.Omiya</a>
                </div>

                <button type="button" class="header__hamburger js-hamburger" aria-label="メニューを開閉する">
                    <span class="header__hamburger-line"></span>
                    <span class="header__hamburger-line"></span>
                    <span class="header__hamburger-line"></span>
                </button>

                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item"><a href="./index.html" class="header__link js-nav-link">Top</a></li>
                        <li class="header__item"><a href="#created" class="header__link js-nav-link">Created</a></li>
                        <li class="header__item"><a href="#services" class="header__link js-nav-link">Services</a></li>
                        <li class="header__item">
                            <a href="#contact" class="btn header__btn js-nav-link">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </header>