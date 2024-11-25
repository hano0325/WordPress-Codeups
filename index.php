<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <!-- meta情報 -->
    <title>CodeUps</title>
    <meta name="description" content="" />
    <meta name="keywords" content="Codeups" />
    <!-- ogp -->
    <meta property="og:title" content="Codeups" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <link rel="”icon”" href="./assets/images/common/iruka.jpg" />

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&display=swap"
        rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- JavaScript -->
    <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script defer src="./assets/js/jquery.inview.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="./assets/js/script.js"></script>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <a href="index.html">
                    <img src="./assets/images/common/CodeUps.svg" alt="Codeups" /></a>
            </div>
            <button class="header__hamburger hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="header__nav-items">
                <li class="header__nav-item">
                    <a href="campaign.html" class="header__nav-link"><span>campaign</span>キャンペーン</a>
                </li>
                <li class="header__nav-item">
                    <a href="about.html" class="header__nav-link"><span>about us</span>私たちについて</a>
                </li>
                <li class="header__nav-item">
                    <a href="information.html" class="header__nav-link"><span>information</span>ダイビング情報</a>
                </li>
                <li class="header__nav-item">
                    <a href="blog.html" class="header__nav-link"><span>blog</span>ブログ</a>
                </li>
                <li class="header__nav-item">
                    <a href="voice.html" class="header__nav-link"><span>voice</span>お客様の声</a>
                </li>
                <li class="header__nav-item">
                    <a href="price.html" class="header__nav-link"><span>price</span>料金一覧</a>
                </li>
                <li class="header__nav-item">
                    <a href="faq.html" class="header__nav-link header__nav-link--large"><span>faq</span>よくある質問</a>
                </li>
                <li class="header__nav-item">
                    <a href="contact.html" class="header__nav-link"><span>contact</span>お問い合わせ</a>
                </li>
            </ul>
            <nav class="header__drawer drawer js-drawer">
                <div class="drawer__inner">
                    <div class="drawer__logo">
                        <a href="index.html">
                            <img src="./assets/images/common/CodeUps.svg" alt="Codeups" /></a>
                    </div>
                    <button class="drawer__hamburger hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="drawer__menu menu">
                    <div class="menu__nav-inner">
                        <div class="menu__nav-items">
                            <div class="menu__nav-container-first">
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="campaign.html">キャンペーン</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">ライセンス取得</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">貸切体験ダイビング</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">ナイトダイビング</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="about.html">私たちについて</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="information.html">ダイビング情報</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="information.html?tab=tab01">ライセンス講習</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="information.html?tab=tab03">体験ダイビング</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="information.html?tab=tab02">ファンダイビング</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="blog.html">ブログ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu__nav-container-second">
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="voice.html">お客様の声</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="price.html">料金一覧</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">ライセンス講習</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">体験ダイビング</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="#">ファンダイビング</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="faq.html">よくある質問</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="privacy.html">プライバシー<br class="u-mobile" />ポリシー</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="terms.html">利用規約</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="site.html">サイトマップ</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="contact.html">お問い合わせ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="mv" class="mv">
        <div class="mv__inner">
            <div class="mv__slider swiper js-mv-swiper">
                <div class="mv__wrapper swiper-wrapper">
                    <div class="mv__slide swiper-slide">
                        <picture>
                            <source srcset="./assets/images/common/mv-1-pc.jpg" media="(min-width: 768px)" />
                            <img src="./assets/images/common/mv-1-sp.jpg" alt="海の中に亀がいる写真" />
                        </picture>
                    </div>
                    <div class="mv__slide swiper-slide">
                        <picture>
                            <source srcset="./assets/images/common/mv-2-pc.jpg" media="(min-width: 768px)" />
                            <img src="./assets/images/common/mv-2-sp.jpg" alt="海の中で亀とダイバー2人がいる写真" />
                        </picture>
                    </div>
                    <div class="mv__slide swiper-slide">
                        <picture>
                            <source srcset="./assets/images/common/mv-3-pc.jpg" media="(min-width: 768px)" />
                            <img src="./assets/images/common/mv-3-sp.jpg" alt="海と空のが写っている写真" />
                        </picture>
                    </div>
                    <div class="mv__slide swiper-slide">
                        <picture>
                            <source srcset="./assets/images/common/mv-4-pc.jpg" media="(min-width: 768px)" />
                            <img src="./assets/images/common/mv-4-sp.jpg" alt="海と砂が広がっている写真" />
                        </picture>
                    </div>
                </div>
                <div class="mv__title">
                    <h1 class="mv__title-main">diving</h1>
                    <p class="mv__title-sub">into the ocean</p>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section class="campaign campaign-layout">
            <div class="campaign__inner inner">
                <div class="campaign__title title">
                    <p class="title__main">Campaign</p>
                    <h2 class="title__sub">キャンペーン</h2>
                </div>
                <div class="campaign__container">
                    <div class="campaign__swiper swiper js-campaign-swiper">
                        <div class="campaign__wrapper swiper-wrapper">
                            <div class="campaign__slide swiper-slide">
                                <img src="./assets/images/common/campaign1.jpg" alt="海の中に複数の魚がいる写真" />
                                <div class="campaign__container-text text-container">
                                    <div class="campaign__text-box text-box">
                                        <p class="campaign__text-box-maintitle text-box-maintitle">
                                            ライセンス講習
                                        </p>
                                        <p class="campaign__text-box-subtitle text-box-subtitle">
                                            ライセンス講習
                                        </p>
                                    </div>
                                    <div class="campaign__money">
                                        <p class="campaign__money-title">
                                            全部コミコミ(お一人様)
                                        </p>
                                        <div class="campaign__fee">
                                            <p class="campaign__discount">¥56,000</p>
                                            <p class="campaign__main">¥46,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="campaign__slide swiper-slide">
                                <img src="./assets/images/common/campaign2.jpg" alt="青い海に船と山が映っている写真" />
                                <div class="campaign__container-text text-container">
                                    <div class="campaign__text-box text-box">
                                        <p class="campaign__text-box-maintitle text-box-maintitle">
                                            体験ダイビング
                                        </p>
                                        <p class="campaign__text-box-subtitle text-box-subtitle">
                                            貸切体験ダイビング
                                        </p>
                                    </div>
                                    <div class="campaign__money">
                                        <p class="campaign__money-title">
                                            全部コミコミ(お一人様)
                                        </p>
                                        <div class="campaign__fee">
                                            <p class="campaign__discount">¥24,000</p>
                                            <p class="campaign__main">¥18,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="campaign__slide swiper-slide">
                                <img src="./assets/images/common/campaign3.jpg" alt="暗い海の中にクラゲが複数匹いる写真" />
                                <div class="campaign__container-text text-container">
                                    <div class="campaign__text-box text-box">
                                        <p class="campaign__text-box-maintitle text-box-maintitle">
                                            体験ダイビング
                                        </p>
                                        <p class="campaign__text-box-subtitle text-box-subtitle">
                                            ナイトダイビング
                                        </p>
                                    </div>
                                    <div class="campaign__money">
                                        <p class="campaign__money-title">
                                            全部コミコミ(お一人様)
                                        </p>
                                        <div class="campaign__fee">
                                            <p class="campaign__discount">¥10,000</p>
                                            <p class="campaign__main">¥8,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="campaign__slide swiper-slide">
                                <img src="./assets/images/common/campaign4.jpg" alt="海面上にダイバーが複数人いる写真" />
                                <div class="campaign__container-text text-container">
                                    <div class="campaign__text-box text-box">
                                        <p class="campaign__text-box-maintitle text-box-maintitle">
                                            ファンダイビング
                                        </p>
                                        <p class="campaign__text-box-subtitle text-box-subtitle">
                                            貸切ファンダイビング
                                        </p>
                                    </div>
                                    <div class="campaign__money">
                                        <p class="campaign__money-title">全部コミコミ(お一人様)</p>
                                        <div class="campaign__fee">
                                            <p class="campaign__discount">¥20,000</p>
                                            <p class="campaign__main">¥16,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="campaign__button">
                    <a href="campaign.html" class="button">
                        <div class="button__container">
                            <p>View more</p>
                            <img src="./assets/images/common/Vector.png" alt="矢印" class="button__arrow" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="campaign__button-container">
                <div class="campaign__button-next swiper-button-next"></div>
                <div class="campaign__button-prev swiper-button-prev"></div>
            </div>
        </section>
        <section class="dive dive-layout">
            <div class="dive__inner inner">
                <div class="dive__title title">
                    <p class="title__main">About us</p>
                    <h2 class="title__sub">私たちについて</h2>
                </div>
                <div class="dive__img-container">
                    <div class="dive__img-main">
                        <img src="./assets/images/common/ocean2.jpg" alt="海の中に黄色い魚が二匹いる写真" />
                    </div>
                    <div class="dive__img-sub">
                        <img src="./assets/images/common/ocean1.jpg" alt="沖縄の屋根" />
                    </div>
                </div>
                <div class="dive__text-container">
                    <div class="dive__text-container-title">
                        Dive into<br />
                        the Ocean
                    </div>
                    <div class="dive__container-sub">
                        <p class="dive__container-subtext">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入り
                        </p>
                        <div class="dive__container-subbutton">
                            <a href="about.html" class="button button--transparent">
                                <div class="button__container">
                                    <p>View more</p>
                                    <img src="./assets/images/common/Vector.png" alt="矢印" class="button__arrow" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="license license-layout">
            <div class="license__inner inner">
                <div class="license__title-main title">
                    <p class="title__main">Information</p>
                    <h2 class="title__sub">ダイビング情報</h2>
                </div>
                <div class="license__container">
                    <div class="license__img colorbox">
                        <div class="color"></div>
                        <img src="./assets/images/common/license.jpg" alt="海の中に黄色の魚と稚魚がいる写真" />
                    </div>
                    <div class="license__text-container">
                        <p class="license__title-sub">ライセンス講習</p>
                        <p class="license__text text">
                            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                        </p>
                        <div class="license__button">
                            <a href="information.html" class="button">
                                <div class="button__container">
                                    <p>View more</p>
                                    <img src="./assets/images/common/Vector.png" alt="矢印" class="button__arrow" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog blog-layout">
            <div class="blog__inner inner">
                <div class="blog__title title">
                    <p class="title__main title__main--white">Blog</p>
                    <h2 class="title__sub title__sub--white">ブログ</h2>
                </div>
                <ul class="blog__cards cards">
                    <li class="cards__card card">
                        <a href="blog.html" class="card__container">
                            <div class="card__content">
                                <img src="./assets/images/common/blog1.jpg" alt="ピンクの珊瑚と海" />
                            </div>
                            <div class="card__block">
                                <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                                <p class="card__block-title">ライセンス取得</p>
                                <p class="card__block-subtext">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります<br />
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="cards__card card">
                        <a href="#" class="card__container">
                            <div class="card__content">
                                <img src="./assets/images/common/blog-2.jpg" alt="ピンクの珊瑚と海" />
                            </div>
                            <div class="card__block">
                                <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                                <p class="card__block-title">ライセンス取得</p>
                                <p class="card__block-subtext">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="cards__card card">
                        <a href="#" class="card__container">
                            <div class="card__content">
                                <img src="./assets/images/common/blog-3.jpg" alt="ピンクの珊瑚と海" />
                            </div>
                            <div class="card__block">
                                <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                                <p class="card__block-title">ライセンス取得</p>
                                <p class="card__block-subtext">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="blog__button">
                    <a href="blog.html" class="button">
                        <div class="button__container">
                            <p>View more</p>
                            <img src="./assets/images/common/Vector.png" alt="" class="button__arrow" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="voice voice-layout">
            <div class="voice__inner inner">
                <div class="voice__title-main title">
                    <p class="title__main">Voice</p>
                    <h2 class="title__sub">お客様の声</h2>
                </div>
                <ul class="voice__cards cards-voice">
                    <li class="cards-voice__card card-voice">
                        <div class="card-voice__container">
                            <div class="card-voice__container-text">
                                <div class="card-voice__text-box text-box">
                                    <p class="card-voice__profile">20代(女性)</p>
                                    <p class="card-voice__text-box-maintitle text-box-maintitle">
                                        ライセンス講習
                                    </p>
                                    <p class="card-voice__text-box-subtitle text-box-subtitle">
                                        ここにタイトルが入ります。ここにタイトル
                                    </p>
                                </div>
                                <div class="card-voice__content colorbox">
                                    <div class="color"></div>
                                    <img src="./assets/images/common/voice.jpg" alt="麦わら帽子を被った女性の写真" />
                                </div>
                            </div>
                            <p class="card-voice__block-subtext">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="cards-voice__card card-voice">
                        <div class="card-voice__container">
                            <div class="card-voice__container-text">
                                <div class="card-voice__text-box text-box">
                                    <p class="card-voice__profile">30代(男性)</p>
                                    <p class="card-voice__text-box-maintitle text-box-maintitle">
                                        ファンダイビング
                                    </p>
                                    <p class="card-voice__text-box-subtitle text-box-subtitle">
                                        ここにタイトルが入ります。ここにタイトル
                                    </p>
                                </div>
                                <div class="card-voice__content colorbox">
                                    <div class="color"></div>
                                    <img src="./assets/images/common/voice-2.jpg" alt="サムズアップをしている黒シャツを着ている男性の写真" />
                                </div>
                            </div>
                            <p class="card-voice__block-subtext">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="voice__button">
                    <a href="voice.html" class="button">
                        <div class="button__container">
                            <p>View more</p>
                            <img src="./assets/images/common/Vector.png" alt="矢印" class="button__arrow" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="price price-layout">
            <div class="price__inner inner">
                <div class="price__title-main title">
                    <p class="title__main">Price</p>
                    <h2 class="title__sub">料金一覧</h2>
                </div>
                <div class="price__container">
                    <div class="price__content colorbox">
                        <div class="color"></div>
                        <picture>
                            <source srcset="./assets/images/common/price-pc.jpg" media="(min-width: 768px)" />
                            <img src="./assets/images/common/price-sp.jpg" alt="海の中に橙色の亀が写真" />
                        </picture>
                    </div>
                    <ul class="price__items">
                        <li class="price__item">
                            <div class="price__item-container">
                                <p class="price__item-title">ライセンス講習</p>
                                <div class="price__item-container-sub">
                                    <div class="price__item-content">
                                        <p class="price__item-event">
                                            オープンウォーターダイバーコース
                                        </p>
                                        <p class="price__item-price">¥50,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">
                                            アドバンスドオープンウォーターコース
                                        </p>
                                        <p class="price__item-price">¥60,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">レスキュー+EFRコース</p>
                                        <p class="price__item-price">¥70,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="price__item">
                            <div class="price__item-container">
                                <p class="price__item-title">体験ダイビング</p>
                                <div class="price__item-container-sub">
                                    <div class="price__item-content">
                                        <p class="price__item-event">
                                            ビーチ体験ダイビング(半日)
                                        </p>
                                        <p class="price__item-price">¥7,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">ビーチ体験ダイビング(1日)</p>
                                        <p class="price__item-price">¥14,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">
                                            ボート体験ダイビング(半日)
                                        </p>
                                        <p class="price__item-price">¥10,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">ボート体験ダイビング(1日)</p>
                                        <p class="price__item-price">¥18,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="price__item">
                            <div class="price__item-container">
                                <p class="price__item-title">ファンダイビング</p>
                                <div class="price__item-container-sub">
                                    <div class="price__item-content">
                                        <p class="price__item-event">ビーチダイビング(2ダイブ)</p>
                                        <p class="price__item-price">¥14,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">ボートダイビング(2ダイブ)</p>
                                        <p class="price__item-price">¥18,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">
                                            スペシャルダイビング(2ダイブ)
                                        </p>
                                        <p class="price__item-price">¥24,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">ナイトダイビング(1ダイブ)</p>
                                        <p class="price__item-price">¥10,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="price__item">
                            <div class="price__item-container">
                                <p class="price__item-title">スペシャルダイビング</p>
                                <div class="price__item-container-sub">
                                    <div class="price__item-content">
                                        <p class="price__item-event">貸切ダイビング(2ダイブ)</p>
                                        <p class="price__item-price">¥24,000</p>
                                    </div>
                                    <div class="price__item-content">
                                        <p class="price__item-event">1日ダイビング(3ダイブ)</p>
                                        <p class="price__item-price">¥32,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="price__button">
                    <a href="#" class="button">
                        <div class="button__container">
                            <p>View more</p>
                            <img src="./assets/images/common/Vector.png" alt="矢印" class="button__arrow" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="contact contact-layout">
            <div class="contact__inner inner">
                <div class="contact__card">
                    <div class="contact__container">
                        <div class="contact__container-main">
                            <div class="contact__title-img">
                                <img src="./assets/images/common/CodeUps-img.png" alt="Codeups" />
                            </div>
                            <div class="contact__address-container">
                                <ul class="contact__address">
                                    <li class="contact__address-item">沖縄県那覇市1-1</li>
                                    <li class="contact__address-item">TEL:0120-000-0000</li>
                                    <li class="contact__address-item">営業時間:8:30-19:00</li>
                                    <li class="contact__address-item">定休日:毎週火曜日</li>
                                </ul>
                                <div class="contact__map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.085776856419!2d-157.89591742652453!3d21.347111580383007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006f441fbd3ef9%3A0x19d1808be9dbf05!2z5pel56uL44Gu5qi577yIVGhlIEhpdGFjaGkgVHJlZe-8iQ!5e0!3m2!1sja!2sjp!4v1724830564067!5m2!1sja!2sjp"
                                        width="273" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.085776856419!2d-157.89591742652453!3d21.347111580383007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006f441fbd3ef9%3A0x19d1808be9dbf05!2z5pel56uL44Gu5qi577yIVGhlIEhpdGFjaGkgVHJlZe-8iQ!5e0!3m2!1sja!2sjp!4v1724830564067!5m2!1sja!2sjp"
                                        width="295" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="contact__container-sub">
                            <div class="contact__title title">
                                <h2 class="title__main title__main--large">Contact</h2>
                                <p class="title__sub title__sub--shadow">お問い合わせ</p>
                            </div>
                            <div class="contact__form-container">
                                <p class="contact__form-text">ご予約・お問い合わせはコチラ</p>
                                <div class="contact__form-button">
                                    <a href="contact.html" class="button">
                                        <div class="button__container">
                                            <p>Contact us</p>
                                            <img src="./assets/images/common/Vector.png" alt="矢印"
                                                class="button__arrow" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="cycle-button js-page-top"></div>
    </main>
    <footer class="footer footer-layout">
        <div class="footer__nav-inner inner">
            <div class="footer__nav-container">
                <div class="footer__logo-container">
                    <p class="footer__logo">
                        <a href="#">
                            <img src="./assets/images/common/CodeUps-logo-light.svg" alt="Codeups" />
                        </a>
                    </p>
                    <ul class="footer__sns-button-items">
                        <li class="footer__sns-button-item">
                            <a href="https://www.facebook.com/" target="_blank"><img
                                    src="./assets/images/common/FacebookLogo.svg" alt="facebookのアイコン" /></a>
                        </li>
                        <li class="footer__sns-button-item">
                            <a href="https://www.instagram.com/" target="_blank"><img
                                    src="./assets/images/common/InstagramLogo.svg" alt="Instagramのアイコン" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__menu menu">
            <div class="menu__nav-inner">
                <div class="menu__nav-items">
                    <div class="menu__nav-container-first">
                        <div class="menu__nav-content">
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="campaign.html">キャンペーン</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">ライセンス取得</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">貸切体験ダイビング</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">ナイトダイビング</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="about.html">私たちについて</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu__nav-content">
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="information.html">ダイビング情報</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="information.html?tab=tab01">ライセンス講習</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="information.html?tab=tab03">体験ダイビング</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="information.html?tab=tab02">ファンダイビング</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="blog.html">ブログ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu__nav-container-second">
                        <div class="menu__nav-content">
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="voice.html">お客様の声</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="price.html">料金一覧</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">ライセンス講習</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">体験ダイビング</a>
                                </li>
                                <li class="menu__nav-item-sub">
                                    <a href="#">ファンダイビング</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu__nav-content">
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="faq.html">よくある質問</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="privacy.html">プライバシー<br class="u-mobile" />ポリシー</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="terms.html">利用規約</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="site.html">サイトマップ</a>
                                </li>
                            </ul>
                            <ul class="menu__nav-item">
                                <li class="menu__nav-item-main">
                                    <a href="contact.html">お問い合わせ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">
                Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
            </p>
        </div>
    </footer>
</body>

</html>