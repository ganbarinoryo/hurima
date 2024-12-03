<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/address.css') }}" />
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                <img src="{{ asset('images/logo.png') }}" alt="コーチテック" >
            </a>
        </div>
    </header>

        <div class="flex__address-form__heading">
            <h1>住所の変更</h1>
        </div>

    <div class="flex__address__content">

    <form action="">

        <div class="form__group">
            <div class="form__group-content">
                <h2>郵便番号</h2>
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
                <h2>住所</h2>
                <div class="form__input--text">
                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="@error('address') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <h2>建物名</h2>
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