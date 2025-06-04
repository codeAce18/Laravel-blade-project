<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>各一覧03</title>
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
                    <button>イベント予約する</button>
                </div>
            </div>
            <div class="signComSp">
                <p>株式会社SAMPLE COMPANY サンプルカンパニー 野々市</p>
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
            <div class="blogG">
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
                        <div class="hStyle flex j-b">
                            <p>
                                『地球品質』～自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                        <div class="statusG flex">
                            <div class="status">間取り図あり</div>
                        </div>
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
                        </div>
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
                        <div class="hStyle flex j-b">
                            <p>
                                『地球品質』～自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                        <div class="statusG flex">
                            <div class="status">間取り図あり</div>
                        </div>
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
                        </div>
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
                        <div class="hStyle flex j-b">
                            <p>
                                『地球品質』～自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                        <div class="statusG flex">
                            <div class="status">間取り図あり</div>
                        </div>
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardG_sp">
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <p>中庭のあるコの字型の平屋『和音の家』</p>
                        </div>
                        <div class="topR_sp flex a-c j-c">
                            <img src="{{ asset("/./assets/img/bookmark.png") }}" alt="" />
                        </div>
                    </div>
                    <div class="cardImgG flex">
                        <img src="{{ asset("/./assets/img/blog_sp01.png") }}" alt="left" />
                        <img src="{{ asset("/./assets/img/blog_sp02.png") }}" alt="right" />
                    </div>
                    <div class="card-content flex col j-b">
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <p>中庭のあるコの字型の平屋『和音の家』</p>
                        </div>
                        <div class="topR_sp flex a-c j-c">
                            <img src="{{ asset("/./assets/img/bookmark.png") }}" alt="" />
                        </div>
                    </div>
                    <div class="cardImgG flex">
                        <img src="{{ asset("/./assets/img/blog_sp01.png") }}" alt="left" />
                        <img src="{{ asset("/./assets/img/blog_sp02.png") }}" alt="right" />
                    </div>
                    <div class="card-content flex col j-b">
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <p>中庭のあるコの字型の平屋『和音の家』</p>
                        </div>
                        <div class="topR_sp flex a-c j-c">
                            <img src="{{ asset("/./assets/img/bookmark.png") }}" alt="" />
                        </div>
                    </div>
                    <div class="cardImgG flex">
                        <img src="{{ asset("/./assets/img/blog_sp01.png") }}" alt="left" />
                        <img src="{{ asset("/./assets/img/blog_sp02.png") }}" alt="right" />
                    </div>
                    <div class="card-content flex col j-b">
                        <div class="priceG flex a-b">
                            <p>
                                参考坪営価
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                        </div>
                        <div class="bTxt flex">
                            <p>構造<span>平屋</span></p>
                            <p>間取り<span>3LDK</span></p>
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
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>