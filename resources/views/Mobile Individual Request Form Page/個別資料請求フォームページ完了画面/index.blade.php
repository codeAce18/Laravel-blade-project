<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>個別資料請求フォームページ完了画面</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="content">
                <div class="contentE">
                    <p class="contentET">資料請求ありがとうございました！</p>
                    <p>
                        ご入力いただいたメールアドレス宛に確認メール（自動送信）が送信されます。
                    </p>
                    <p>
                        お返事は出来る限り早急に対応いたしますが、お時間を頂くことがございます。　※お急ぎの場合は、恐れ入りますがお電話にてご連絡をお願いいたします。　万が一確認メールが3日以上経っても届かない場合は、情報が正しく送信されていない可能性がございますので、お手数をお掛けしますが、下記までご連絡下さい。
                    </p>
                    <p>■お問い合わせ窓口　　株式会社 MiraieCompany　Tel.076-220-7793</p>
                </div>
                <div class="btnG flex a-c j-c">
                    <a href="{{ url("#") }}" class="flex a-c j-c">トップページに戻る</a>
                </div>
            </div>
        </div>
        <div class="bBar">新築・注文住宅サイト イエタッタ > イベント予約完了</div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>