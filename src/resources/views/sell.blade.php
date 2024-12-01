<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}" />
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                <img src="{{ asset('images/logo.png') }}" alt="コーチテック" >
            </a>
        </div>
    </header>

        <div class="flex__sell-form__heading">
            <h1>商品の出品</h1>
        </div>

    <div class="flex__sell__content">

    <form action="">

        <div class="form__group">
            <div class="form__group-content">
                <p>商品画像</p>
                <div class="form__input--img">
                <!-- ファイル選択用のカスタムラベル -->
                    <input class="input--img"type="file" id="product_image" name="product_image" accept="image/*" class="@error('product_image') is-invalid @enderror" hidden/>
                <label for="product_image" class="file-label">画像を選択する</label>
                </div>
                <div class="form__error">
                <!-- バリデーション追加してから記述 -->
                </div>
            </div>
        </div>


        <h2>商品の詳細</h2>

        <div class="form__group">
            <div class="form__group-content">
                <p>カテゴリー</p>
                <div class="form__input--text">
                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" class="@error('postal_code') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <p>商品の状態</p>
                <div class="form__input--text">
                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="@error('address') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <h2>商品名と説明</h2>

        <div class="form__group">
            <div class="form__group-content">
                <p>商品名</p>
                <div class="form__input--text">
                    <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" class="@error('building_name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <p>説明文</p>
                <div class="form__input--text">
                    <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" class="@error('building_name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <h2>販売価格</h2>

        <div class="form__group">
            <div class="form__group-content">
                <p>販売価格</p>
                <div class="form__input--text">
                    <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" class="@error('building_name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する
            </button>
        </div>

    </form>
    </div><!--register__contentの終わり-->
</body>
</html>