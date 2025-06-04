<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>各一覧06</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="signCom">
                <p>株式会社桝田工務店</p>
                <div class="tipG flex">
                    <p>電話</p>
                    <p>06-6621-6896</p>
                </div>
                <div class="bookBtn flex">
                    <button>
                        カタログを<br />
                        請求する（無料）
                    </button>
                    <button>お気に入りに追加</button>
                </div>
            </div>
            <div class="signComSp">
                <p>株式会社SAMPLE COMPANY サンプルカンパニー 野々市</p>
            </div>
            <div class="slideG flex">
                <div class="slideBar">
                    <div class="slider-container">
                        <img id="mainImage" class="main-image" src="{{ asset("/./assets/img/slide_main.png") }}"
                            alt="Main Image" />
                        <div class="arrow left flex a-c j-c" onclick="prevSlide()">
                            &#10094;
                        </div>
                        <div class="arrow right flex a-c j-c" onclick="nextSlide()">
                            &#10095;
                        </div>
                        <div class="image-count" id="imageCount">1/8</div>
                    </div>
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail-row" id="thumbnails"></div>
                    </div>
                </div>
            </div>
            <div class="blogSort pc flex a-c">
                <div class="bLeft flex">
                    <button class="sortRect flex a-c j-c">会社情報</button>
                    <button class="sortRect flex a-c j-c">イベント<br />100件</button>
                    <button class="sortRect flex a-c j-c">施工事例<br />100件</button>
                    <button class="sortRect flex a-c j-c">
                        モデルハウス<br />100件
                    </button>
                    <button class="sortRect flex a-c j-c">
                        リフォーム<br />リノベーション<br />100件
                    </button>
                    <button class="sortRect flex a-c j-c">土地・建売<br />100件</button>
                    <button class="sortRect flex a-c j-c">ブログ<br />100件</button>
                    <button class="sortRect flex a-c j-c">公式サイト</button>
                </div>
            </div>
            <div class="cardG flex j-b">
                <div class="cards">
                    <div class="card flex j-b">
                        <div class="imgC">
                            <img src="{{ asset("/./assets/img/card.png") }}" alt="card" />
                        </div>
                        <div class="cardC">
                            <p class="cardT">
                                【家づくりお役立ち情報】 子育てファミリーに嬉しい仕様や
                                設備についてご紹介いたします。
                            </p>
                            <p>2025/05/15</p>
                            <p>
                                昨日からの大雪で、久しぶりの雪道での運転で緊張しました。
                                そんな中グループ会社が、毎回除雪作業をしてくれます。
                                本当に、有り難いですね。
                            </p>
                        </div>
                    </div>
                    <div class="card flex j-b">
                        <div class="imgC">
                            <img src="{{ asset("/./assets/img/card.png") }}" alt="card" />
                        </div>
                        <div class="cardC">
                            <p class="cardT">
                                【家づくりお役立ち情報】 子育てファミリーに嬉しい仕様や
                                設備についてご紹介いたします。
                            </p>
                            <p>2025/05/15</p>
                            <p>
                                昨日からの大雪で、久しぶりの雪道での運転で緊張しました。
                                そんな中グループ会社が、毎回除雪作業をしてくれます。
                                本当に、有り難いですね。
                            </p>
                        </div>
                    </div>
                    <div class="card flex j-b">
                        <div class="imgC">
                            <img src="{{ asset("/./assets/img/card.png") }}" alt="card" />
                        </div>
                        <div class="cardC">
                            <p class="cardT">
                                【家づくりお役立ち情報】 子育てファミリーに嬉しい仕様や
                                設備についてご紹介いたします。
                            </p>
                            <p>2025/05/15</p>
                            <p>
                                昨日からの大雪で、久しぶりの雪道での運転で緊張しました。
                                そんな中グループ会社が、毎回除雪作業をしてくれます。
                                本当に、有り難いですね。
                            </p>
                        </div>
                    </div>
                    <div class="card flex j-b">
                        <div class="imgC">
                            <img src="{{ asset("/./assets/img/card.png") }}" alt="card" />
                        </div>
                        <div class="cardC">
                            <p class="cardT">
                                【家づくりお役立ち情報】 子育てファミリーに嬉しい仕様や
                                設備についてご紹介いたします。
                            </p>
                            <p>2025/05/15</p>
                            <p>
                                昨日からの大雪で、久しぶりの雪道での運転で緊張しました。
                                そんな中グループ会社が、毎回除雪作業をしてくれます。
                                本当に、有り難いですね。
                            </p>
                        </div>
                    </div>
                    <div class="card flex j-b">
                        <div class="imgC">
                            <img src="{{ asset("/./assets/img/card.png") }}" alt="card" />
                        </div>
                        <div class="cardC">
                            <p class="cardT">
                                【家づくりお役立ち情報】 子育てファミリーに嬉しい仕様や
                                設備についてご紹介いたします。
                            </p>
                            <p>2025/05/15</p>
                            <p>
                                昨日からの大雪で、久しぶりの雪道での運転で緊張しました。
                                そんな中グループ会社が、毎回除雪作業をしてくれます。
                                本当に、有り難いですね。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cardListG">
                    <div class="cardList">
                        <p class="cardListT">カテゴリー</p>
                        <div class="list_C">
                            <p>助成金のこと</p>
                            <p>お客様の声</p>
                        </div>
                    </div>
                    <div class="cardList">
                        <p class="cardListT">アーカイブ</p>
                        <div class="list_C">
                            <p>2025年05月</p>
                            <p>2025年04月</p>
                            <p>2025年03月</p>
                            <p>2025年02月</p>
                            <p>2025年01月</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogSort flex a-c">
                <div class="bLeft flex">
                    <button class="sortRect flex a-c j-c">会社情報</button>
                    <button class="sortRect flex a-c j-c">イベント<br />100件</button>
                    <button class="sortRect flex a-c j-c">施工事例<br />100件</button>
                    <button class="sortRect flex a-c j-c">
                        モデルハウス<br />100件
                    </button>
                    <button class="sortRect flex a-c j-c">
                        リフォーム<br />リノベーション<br />100件
                    </button>
                    <button class="sortRect flex a-c j-c">土地・建売<br />100件</button>
                    <button class="sortRect flex a-c j-c">ブログ<br />100件</button>
                    <button class="sortRect flex a-c j-c">公式サイト</button>
                </div>
            </div>
            <div class="b_history">
                <div class="b_historyT flex a-c j-b">
                    <p>閲覧履歴</p>
                    <a href="{{ url("#") }}">
                        <img src="{{ asset("/./assets/img/arrow.png") }}" alt="arrow" />
                    </a>
                </div>
                <div class="h_slide flex">
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                    <div class="slideBlock">
                        <img src="{{ asset("/./assets/img/h_slide.png") }}" alt="h_slide" />
                        <p>子育て世代に最適～緑を感じる穏やかな街並み…</p>
                    </div>
                </div>
            </div>
            <div class="btnG flex a-c j-b">
                <button>
                    電話で<br />
                    問い合わせる
                </button>
                <button>イベント予約する</button>
                <button>LINEで質問する</button>
                <button>お気に入りに追加</button>
            </div>
            <div class="footer_txt">
                <ul>
                    <li>
                        価格は物件の代金総額を表示しており、消費税が課税される場合は税込み価格です。
                        （1000円未満は切り上げ。）
                    </li>
                    <li>
                        写真に写っている、またはパース（絵）や間取り図に描かれている家具や車などは、特にコメントがない場合、販売価格に含まれません。
                    </li>
                    <li>敷地権利が定期借地権のものは価格に権利金を含みます。</li>
                    <li>建築条件付き土地価格には、建物価格は含まれません。</li>
                    <li>
                        物件情報は、原則として情報提供日の２日前に最終確認した情報です。
                    </li>
                    <li>
                        完成予想図はいずれも外構、植栽、外観等実際のものとは多少異なることがあります。
                    </li>
                    <li>
                        建築条件付き土地とは、その土地に建築する建物の建築請負契約が一定期間内に成立することを条件として売買される土地を指します。建築請負契約の成立に向けて、土地購入者と施工会社との間で建物の設計プランを協議するため、購入者が希望する建物の設計に関する十分な交渉期間が設定されます。この交渉期間内に希望を満たすプランが実現できるかどうかを確認し、契約の可否を判断します。なお、この期間はおおむね3ヶ月程度とされています。もし購入者が納得のいくプランを得られず、建築請負契約が成立しなかった場合には、土地売買契約は白紙となり、土地代金や手付金など、契約にかかった費用は名目に関係なく全額返金されます。
                    </li>
                    <li>
                        建築条件土地の情報内に掲載されている、建物プラン例は、土地購入者の設計プランの参考の一例であって、プランの採用可否は任意です。
                    </li>
                </ul>
            </div>
            <div class="sideBar_sp">
                新築・注文住宅サイト イエタッタ > 石川県の工務店・ハウスメーカーを探す
                > 株式会社桝田工務店
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>