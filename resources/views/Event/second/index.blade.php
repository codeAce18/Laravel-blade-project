<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>Hope Date Book</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="form-wrapper">
                <form id="reservationForm">
                    <div class="form-group">
                        <label class="form-label flex a-c">
                            <p>時間帯を選んでください。</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="custom-select-wrapper">
                            <div class="custom-select" id="customSelect">
                                選択してください
                            </div>
                            <div class="custom-options" id="customOptions">
                                <div class="custom-option">09:00〜12:00</div>
                                <div class="custom-option">15:00〜16:00</div>
                                <div class="custom-option">16:00〜17:00</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex a-c">
                            <p>お名前</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <input type="text" required />
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>メールアドレス</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="email" required />
                            <div class="hint">半角英数字のみ入力できます。</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>電話番号</p>
                            <span class="required-badge">必須</span>
                        </label>
                        <div class="inputC">
                            <input type="tel" pattern="[0-9]*" required />
                            <div class="hint">半角英数字のみ入力できます。</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label flex">
                            <p>伝えておきたいこと</p>
                            <span class="optional-badge">任意</span>
                        </label>
                        <textarea></textarea>
                    </div>

                    <!-- <button type="submit" class="submit-btn">送信する</button> -->
                </form>
            </div>
            <div class="privacy">
                <p class="privacyT">
                    利用規約・個人情報取り扱いについて・<br />
                    個人情報及び広告宣伝を含む電子メールについての同意
                </p>
                <p>詳しくは利用規約および個人情報保護方針をご覧ください。</p>
                <p>
                    同規約等に同意いただいた場合は、本ページに表示の工務店・住宅メーカー等に対し本ページに記載いただいた情報を提供します。
                </p>
                <div class="accordion-wrapper">
                    <button class="accordion-header" onclick="toggleAccordion()">
                        個人情報及び広告・宣伝を含む電子メールについて
                        <span id="chevron" class="accordion-chevron">▾</span>
                    </button>
                    <div id="accordionContent" class="accordion-content">
                        <ul>
                            <li>
                                本サービスで資料請求、問い合わせ、イベント予約、モデルハウス等の見学予約、土地・建売情報への問い合わせ（以下、総称して「資料請求等」といいます。）をしていただいたユーザーに対し、本サービス上で選択した資料請求等先のハウスメーカー、工務店、その他各種事業者（以下、「住宅会社等」といいます。）よりユーザーにとって、役立つ情報の広告・宣伝・告知などを内容とする電子メール（特定電子メール）、電話、ダイレクトメール、ハガキ等にて連絡が届く場合がございます。あらかじめご了承ください。
                            </li>
                            <li>
                                株式会社
                                MiraieCompanyは、資料請求等をしていただいたユーザーの皆様からお預かりした個人情報を、ユーザーの皆様が本サービス上で選択した資料請求等の住宅会社に提供いたします。必須項目に不備があった場合、住宅会社等からの各サービスを受けられない場合がございますので、あらかじめご了承ください。
                            </li>
                            <li>
                                資料請求等をしていただいたユーザーの皆様からお預かりした個人情報は、住宅会社等において、資料送付及びこれに付随する連絡・頂いたお問い合わせへの回答・各種イベントのご案内・関連物件または実例のお知らせ等の目的で利用・管理・保管されます。
                            </li>
                            <li>
                                株式会社
                                MiraieCompanyは本サービスを円滑に遂行するため、お預かりした個人情報を一定期間保管し、住所・氏名などが不明瞭な場合には株式会社
                                MiraieCompanyから確認のご連絡をさせていただくことがございます。イエタッタにおける個人情報の取扱い、ならびに開示、訂正・利用停止についてはイエタッタのプライバシーポリシーをご覧ください。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btnG flex col a-c">
                <a href="{{ url("#") }}">上記に同意の上確認に進む</a>
                <a href="{{ url("#") }}">戻る</a>
            </div>
            <div class="process">
                <div class="processT flex a-c j-c">ご予約完了までの流れ</div>
                <div class="processE">
                    <p>イエタッタと開催会社へメールが送信されます。</p>
                    <p>イエタッタより自動返信メールが届きます。</p>
                    <p>※この時点では、まだ予約は完了していません！</p>
                    <p>開催会社より、メールまたはお電話にてご連絡が届きます。</p>
                    <p>
                        ※既に予約多数等により、予約日時のご変更をお願いする場合もございますので予めご了承くだ
                        さい。
                    </p>
                    <p>
                        開催会社と予約日の確認が取れた時点でご予約が成立し完了となります。
                    </p>
                </div>
            </div>
        </div>
        <div class="bBar">
            新築・注文住宅サイト イエタッタ > イベント予約フォーム
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>