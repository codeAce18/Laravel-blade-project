<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>Forth</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="content">
                <div class="contentE">
                    <p class="contentET">
                        モデルハウスのご予約希望を受付いたしました。
                    </p>
                    <p>
                        この度は、イエタッタ石川を通じて住宅イベントにご予約いただき、誠にありがとうございます。ご入力いただいたメールアドレス宛に、ご予約内容の確認メールを自動送信いたしましたので、ご確認ください。この後、
                        住宅会社の担当者より改めてご連絡させていただき、その連絡をもって来場予約の受付完了
                        となります。
                    </p>
                    <p>
                        しばらくお待ちいただきますようお願い申し上げます。<br />当日を楽しみにお待ちください。
                    </p>
                </div>

            </div>
            <div class="blogG">
                <div class="blogT">こちらのモデルハウスも一緒に見学しませんか？</div>
                <div class="blog flex">
                    <div class="imgS">
                        <div class="slider">
                            <img src="{{ asset("/./assets/img/blog.png") }}" class="active" alt="" />
                            <img src="{{ asset("/./assets/img/slide02.png") }}" alt="" />
                            <img src="{{ asset("/./assets/img/slide03.png") }}" alt="" />
                        </div>
                        <div class="dots">
                            <span class="active" data-index="0"></span>
                            <span data-index="1"></span>
                            <span data-index="2"></span>
                        </div>
                    </div>
                    <div class="blogE flex col j-b">
                        <div class="hStyle">受け継がれる家【CONNECT-STYLE】</div>
                        <div class="bTxt">
                            <p>
                                これからの住宅とは何か。
                                使用エネルギーを抑え、自然環境に配慮した家。 災害等から家族
                                を守ることの出来る家。
                                そして、いつまでも暮らしやすく、長く愛される家。 こ
                            </p>
                        </div>
                        <div class="blogInfo">
                            <p>住所：石川県能美市福島町へ136</p>
                            <div class="blogInfo_t flex a-c">
                                <p>営業時間：10:00〜17:00</p>
                                <p>定休日：　-</p>
                            </div>
                        </div>
                        <a href="{{ url("#") }}" class="bDetail flex a-c j-c">
                            <p>もっと詳しく見る</p>
                            <img src="{{ asset("/./assets/img/bMore_icon.png") }}" alt="bMore_i" />
                        </a>
                    </div>
                </div>
                <div class="blog flex">
                    <div class="imgS">
                        <div class="slider">
                            <img src="{{ asset("/./assets/img/blog.png") }}" class="active" alt="" />
                            <img src="{{ asset("/./assets/img/slide02.png") }}" alt="" />
                            <img src="{{ asset("/./assets/img/slide03.png") }}" alt="" />
                        </div>
                        <div class="dots">
                            <span class="active" data-index="0"></span>
                            <span data-index="1"></span>
                            <span data-index="2"></span>
                        </div>
                    </div>
                    <div class="blogE flex col j-b">
                        <div class="hStyle">受け継がれる家【CONNECT-STYLE】</div>
                        <div class="bTxt">
                            <p>
                                これからの住宅とは何か。
                                使用エネルギーを抑え、自然環境に配慮した家。 災害等から家族
                                を守ることの出来る家。
                                そして、いつまでも暮らしやすく、長く愛される家。 こ
                            </p>
                        </div>
                        <div class="blogInfo">
                            <p>住所：石川県能美市福島町へ136</p>
                            <div class="blogInfo_t flex a-c">
                                <p>営業時間：10:00〜17:00</p>
                                <p>定休日：　-</p>
                            </div>
                        </div>
                        <a href="{{ url("#") }}" class="bDetail flex a-c j-c">
                            <p>もっと詳しく見る</p>
                            <img src="{{ asset("/./assets/img/bMore_icon.png") }}" alt="bMore_i" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="blogG_sp">
                <h2>こちらのモデルハウスも一緒に見学しませんか？</h2>
                <div class="blogG_sp-content">
                    <p class="blogG_sp-title">
                        《木造で魅せる》標準仕様が体感できる3階建て見学ツアー＆ライフスケッチでこんな家…
                    </p>
                    <div class="blogG_sp-images">
                        <img src="{{ asset("/./assets/img/blog_sp1.png") }}" alt="外観" />
                        <img src="{{ asset("/./assets/img/blog_sp2.png") }}" alt="内装1" />
                        <img src="{{ asset("/./assets/img/blog_sp3.png") }}" alt="内装2" />
                    </div>
                    <p class="blogG_sp-location">
                        <strong>所在地</strong>　奈良県奈良市八条4丁目638-1<br />
                        株式会社ハウスメーカー
                    </p>
                </div>
                <div class="blogG_sp-content">
                    <p class="blogG_sp-title">
                        《木造で魅せる》標準仕様が体感できる3階建て見学ツアー＆ライフスケッチでこんな家…
                    </p>
                    <div class="blogG_sp-images">
                        <img src="{{ asset("/./assets/img/b_sp2-1.png") }}" alt="外観" />
                        <img src="{{ asset("/./assets/img/b_sp2-2.png") }}" alt="内装1" />
                        <img src="{{ asset("/./assets/img/b_sp2-3.png") }}" alt="内装2" />
                    </div>
                    <p class="blogG_sp-location">
                        <strong>所在地</strong>　奈良県奈良市八条4丁目638-1<br />
                        株式会社ハウスメーカー
                    </p>
                </div>
                <div class="blogG_sp-content">
                    <p class="blogG_sp-title">
                        《木造で魅せる》標準仕様が体感できる3階建て見学ツアー＆ライフスケッチでこんな家…
                    </p>
                    <div class="blogG_sp-images">
                        <img src="{{ asset("/./assets/img/b_sp3-1.png") }}" alt="外観" />
                        <img src="{{ asset("/./assets/img/b_sp3-2.png") }}" alt="内装1" />
                        <img src="{{ asset("/./assets/img/b_sp3-3.png") }}" alt="内装2" />
                    </div>
                    <p class="blogG_sp-location">
                        <strong>所在地</strong>　奈良県奈良市八条4丁目638-1<br />
                        株式会社ハウスメーカー
                    </p>
                </div>
            </div>
            <div class="btnG flex a-c j-c">
                <a href="{{ url("#") }}" class="flex a-c j-c">モデルハウス一覧に戻る</a>
            </div>
        </div>
        <div class="bBar">新築・注文住宅サイト イエタッタ > モデルハウス予約完了</div>
    </main>
    @include('components.header')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>