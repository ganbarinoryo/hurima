<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
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
                <a href="#" class="nav__link__logout">ログアウト</a>
                <a href="#" class="nav__link__mypage">マイページ</a>
                <a href="" class="nav__link__sell">出品</a>
            </nav>

        </div>
    </header>

        <div class="flex__profile-form__heading">
            <h1>プロフィール設定</h1>
        </div>

    <div class="flex__profile__content">

    <form action="">

        <div class="form__group">
    <div class="form__group-content">
        <div class="form__input--icon">
            <!-- 商品画像表示エリア（画像が選択されるとここに表示される） -->
            <div class="icon">
                <img id="image-icon" src="" alt="選択された画像" style="display: none;"/> <!-- 初期状態は非表示 -->
            </div>
            <!-- 画像選択ボタン -->
            <div class="image-upload">
                <input type="file" id="product_image" name="product_image" accept="image/*" class="file-input" />
                <label for="product_image" class="file-label">
                    画像を選択する
                </label>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーションエラーメッセージ -->
        </div>
    </div>
</div>



        <div class="form__group">
            <div class="form__group-content">
                <h2>ユーザー名</h2>
                <div class="form__input--text__user_name">
                    <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" class="@error('user_name') is-invalid @enderror"/>
                </div>
                <div class="form__error">
                <!--バリデーション追加してから記述-->
                </div>
            </div>
        </div>

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

    <!-- JavaScriptコード -->
    <script>
        document.getElementById('product_image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            // 画像が選ばれた場合
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    // 画像が選ばれた場合、imgタグに画像を設定
                    const imgElement = document.getElementById('image-icon');
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'inline'; // 画像を表示
                };

                reader.readAsDataURL(file); // 画像ファイルを読み込む
            }
        });
    </script>

</body>
</html>