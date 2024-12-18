<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
</head>
<body>
    
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                <img src="{{ asset('images/logo.png') }}" alt="コーチテック" >
            </a>
            
            <!-- 検索バー -->
            <div class="search-bar">
                <input type="text" placeholder="なにをお探しですか？" class="search-input">
            </div>

            <!-- ナビゲーションメニュー -->
            <nav class="nav">
                <a href="#" class="nav__link__login">ログイン</a>
                <a href="#" class="nav__link__register">会員登録</a>
                <a href="" class="nav__link__sell">出品</a>
            </nav>

        </div>
    </header>

    <main class="main-content">
        <section class="tabs">
            <a class="tab active" href="">おすすめ</a>
            <a class="tab" href="">マイリスト</a>
        </section>

        <section class="products">

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名1</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名2</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名3</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名4</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名5</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名6</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名7</p>
                <p>価格</p>
            </div>

            <div class="product-item">
                <img src="" alt="商品画像">
                <p>商品名8</p>
                <p>価格</p>
            </div>
        </section>
    
</body>
</html>