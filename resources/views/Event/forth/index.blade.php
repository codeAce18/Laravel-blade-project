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
                    <p class="contentET">イベントのご予約希望を受付いたしました。</p>
                    <p>
                        この度は、イエタッタ石川を通じて住宅イベントにご予約いただき、誠にありがとうございます。ご入力いただいたメールアドレス宛に、ご予約内容の確認メールを自動送信いたしましたので、ご確認ください。この後、
                        住宅会社の担当者より改めてご連絡させていただき、その連絡をもって来場予約の受付完了
                        となります。
                    </p>
                    <p>
                        しばらくお待ちいただきますようお願い申し上げます。イベント当日を楽しみにお待ちください。
                    </p>
                </div>
                <div class="btnG flex a-c j-c">
                    <a href="{{ url("#") }}" class="flex a-c j-c">トップページに戻る</a>
                </div>
            </div>
        </div>
        <div class="bBar">新築・注文住宅サイト イエタッタ > イベント確認画面</div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>