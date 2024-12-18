<!--商品詳細ページ-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}" />
</head>
<body>
<!--ヘッダー-->
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

<!--商品詳細-->
<main>
<!--商品画像-->
    <div class="item__image">
        <img src="" alt="商品画像">
    </div>
<!--商品内容-->
    <div class="item__detail">

        <h1>商品名</h1>
        <p class="brand_name">ブランド名</p>
        <p class="price">¥10,000(値段)</p>

        <div class="form__button">
            <button class="form__button-submit" type="submit">購入する
            </button>
        </div>

        <h2>商品説明</h2>
        <div class="form__input--description">
                    <textarea 
                    id="product_description" 
                    name="product_description" 
                    class="textarea--description @error('product_description') is-invalid @enderror" 
                    rows="5">
                    </textarea>
                    </div>

        <div class="item__data">
            <h2>商品の情報</h2>
                <div class="item__category">
                    <h3>カテゴリー</h3>
                    <p>洋服</p>
                    <p>メンズ</p>
                </div>
                <div class="item__condition">
                    <h3>商品の状態</h3>
                    <p>良好</p>
                </div>
        </div>
    </div>
</main>
    
</body>
</html>