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
                <img src="" alt="コーチテック" >
            </a>
        </div>
    </header>

    <div class="register__content">

        <div class="register-form__heading">
            <h2>会員登録</h2>
        </div>

    <form action="">

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" class="@error('name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" class="@error('email') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="パスワード" value="" class="@error('password') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password_confirmation" placeholder="確認パスワード" value="" class="@error('password_confirmation') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録
            </button>
        </div>

        <div class="form__login-link">
            <p>アカウントをお持ちの方はこちらから<br><a href="">ログイン</a>
            </p>
        </div>

    </form>
    </div><!--register__contentの終わり-->

    <footer><footer>
    
</body>
</html>