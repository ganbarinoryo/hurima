<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                <img src="{{ asset('images/logo.png') }}" alt="コーチテック" >
            </a>
        </div>
    </header>

        <div class="flex__register-form__heading">
            <h1>会員登録</h1>
        </div>

    <div class="flex__register__content">

    <form action="">

        <div class="form__group">
            <div class="form__group-content">
                <p>メールアドレス</p>
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <p>パスワード</p>
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録する
            </button>
        </div>

        <div class="flex__form__login-link">
            <a href="">ログインはこちら</a>
        </div>

    </form>
    </div><!--register__contentの終わり-->

    <footer><footer>
    
</body>
</html>