<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>Third</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="content flex col a-c">
                <p class="tableT">
                    下記入力内容で間違いがないかご確認ください。よろしければ送信してください。
                </p>
                <div class="table">
                    <table>
                        <tr>
                            <th>イベント内容</th>
                            <td>
                                イベントタイトルがはいります。<br />
                                開催社名：会社名がはいります
                            </td>
                        </tr>
                        <tr>
                            <th>希望日時</th>
                            <td>2025年10月10日　10:30</td>
                        </tr>
                        <tr>
                            <th>お名前</th>
                            <td>名前がはいります</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>メールアドレスがはいります</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>電話番号がはいります</td>
                        </tr>
                        <tr>
                            <th>伝えておきたいこと</th>
                            <td>
                                テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="btnG flex col a-c">
                    <a href="{{ url("#") }}">上記に同意の上、送信する</a>
                    <a href="{{ url("#") }}">入力画面に戻る</a>
                </div>
            </div>
        </div>
        <div class="bBar">新築・注文住宅サイト イエタッタ > イベント確認画面</div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>