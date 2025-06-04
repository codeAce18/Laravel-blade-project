<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>個別資料請求フォームページ</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="pageT">
                <p>資料請求フォーム</p>
            </div>
            <div class="cardG">
                <div class="cardGT">
                    <p>
                        <span>［必須］</span>以下よりお好みの資料を選択してください。（複数選択可）
                    </p>
                </div>
                <div class="card-container">
                    <div class="card">
                        <div class="card-label">商品カタログ</div>
                        <div class="card-title">
                            インダストリアル・ブルックリンスタイル
                        </div>
                        <div class="card-image">
                            <img src="{{ asset("/./assets/img/requestB.png") }}" alt="カタログ画像" />
                        </div>
                        <button class="card-btn selected">選択済み</button>
                    </div>
                    <div class="card">
                        <div class="card-label">商品カタログ</div>
                        <div class="card-title">
                            インダストリアル・ブルックリンスタイル
                        </div>
                        <div class="card-image">
                            <img src="{{ asset("/./assets/img/requestB.png") }}" alt="カタログ画像" />
                        </div>
                        <button class="card-btn">この資料を選択する</button>
                    </div>
                    <div class="card">
                        <div class="card-label">商品カタログ</div>
                        <div class="card-title">
                            インダストリアル・ブルックリンスタイル
                        </div>
                        <div class="card-image">
                            <img src="{{ asset("/./assets/img/requestB.png") }}" alt="カタログ画像" />
                        </div>
                        <button class="card-btn">この資料を選択する</button>
                    </div>
                    <div class="card">
                        <div class="card-label">商品カタログ</div>
                        <div class="card-title">
                            インダストリアル・ブルックリンスタイル
                        </div>
                        <div class="card-image">
                            <img src="{{ asset("/./assets/img/requestB.png") }}" alt="カタログ画像" />
                        </div>
                        <button class="card-btn">この資料を選択する</button>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="formT">
                    <p>お客様情報入力フォーム</p>
                </div>
                <form id="reservationForm">
                    <div class="form-group">
                        <label class="form-label flex">
                            <p>お名前</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="text" required />
                            <div class="hint">＊半角英数字のみ入力できます。</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>メールアドレス</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="email" required />
                            <div class="hint">＊半角英数字のみ入力できます。</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>電話番号</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC tel">
                            <input type="tel" pattern="[0-9]*" required />
                            <div class="hint">半角英数字のみ入力できます。</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>郵便番号</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC postCode">
                            <input type="tel" pattern="[0-9]*" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>市区町村</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="text" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>以降のご住所</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="text" required />
                        </div>
                    </div>
                    <!-- <button type="submit" class="submit-btn">送信する</button> -->
                </form>
            </div>
            <div class="form-wrapper second">
                <div class="formT">
                    <p>家づくりについて教えて下さい</p>
                </div>
                <form id="selectForm">
                    <div class="form-group">
                        <label class="form-label flex">
                            <p>ご予定は</p>
                        </label>
                        <div class="inputC">
                            <select id="plan" required>
                                <option value="">選択して下さい</option>
                                <option value="plan1">プラン1</option>
                                <option value="plan2">プラン2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>建設予定地はどこですか（市単位）</p>
                        </label>
                        <div class="inputC">
                            <div class="s_area">
                                <span>第1希望</span>
                                <select required>
                                    <option value="">選択して下さい</option>
                                    <option value="city1">市1</option>
                                    <option value="city2">市2</option>
                                </select>
                            </div>
                            <div class="s_area">
                                <span>第2希望</span>
                                <select>
                                    <option value="">選択して下さい</option>
                                    <option value="city1">市1</option>
                                    <option value="city2">市2</option>
                                </select>
                            </div>
                            <div class="s_area">
                                <span>第3希望</span>
                                <select>
                                    <option value="">選択して下さい</option>
                                    <option value="city1">市1</option>
                                    <option value="city2">市2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>予定時期はいつ頃ですか</p>
                        </label>
                        <div class="inputC">
                            <select id="schedule" required>
                                <option value="">選択して下さい</option>
                                <option value="soon">すぐに</option>
                                <option value="within1year">1年以内</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>ご予算は（土地代別）</p>
                        </label>
                        <div class="inputC postCode">
                            <select id="budget" required>
                                <option value="">選択して下さい</option>
                                <option value="budget1">1000万円以下</option>
                                <option value="budget2">1000万円以上</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>
                                利用規約・個人情報取り 扱いについて・個人情報
                                及び広告宣伝を含む電子 メールについての同意
                            </p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC privacy">
                            <label>
                                <input type="checkbox" id="agree" required />
                                同意します
                            </label>
                            <p>
                                利用規約・個人情報取り扱いについて・個人情報及び広告宣伝を含む電子メールについての同意<br />
                                利用規約・個人情報取り扱いについてを必ずお読みください。<br />
                                同規約等に同意いただいた場合は、本ページに表示の工務店・住宅メーカー等に対し本ページにご記載いただいた情報を提供します。<br />
                                <a href="{{ url("#") }}">個人情報及び広告・宣伝を含む電子メールについてへ</a>
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">送信内容確認</button>
                </form>
            </div>
        </div>
        <div class="bBar">新築・注文住宅サイト イエタッタ > 資料請求</div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>