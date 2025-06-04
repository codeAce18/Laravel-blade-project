<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>会社詳細ページブログ</title>
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
                    <img src="{{ asset("/./assets/img/card_sp.png") }}" alt="card_sp" />
                    <div class="cards_top">
                        <div class="category flex">
                            <p>#アウトドアリビング</p>
                            <p>#住宅診断</p>
                            <p>#建築基準法</p>
                        </div>
                        <div class="content-title">
                            <p>
                                年間50棟限定の家づくり。大阪の狭小住宅、注文住宅を一人の設計担当者がトータルに家づくりについてサポート。
                            </p>
                        </div>
                        <p class="card_date">2025年10月00日</p>
                    </div>
                    <div class="cards_content">
                        <p>「理想の住まいづくりを叶えた家」</p>
                        <p>小松市にセミオーダーの新築戸建て住宅がまもなく完成します。</p>
                        <p>
                            「いつかはマイホームを…」という憧れに加えて、子どもが産まれたことがきっかけで、<br />家族で安心して暮らせる場所をつくりたいと思い、家づくりをスタート！
                        </p>
                        <p>
                            多くのハウスメーカーを見学する中で理想のイメージが見つからずにいたところ、お母様の「伊地知組さんを見に行ってみたら？」という一言で訪問。最初は大きな展示に驚いたものの、シンプルなデザインと、自分たちの希望を親身に聞いてくれる担当者の方の人柄に惹かれて決定。話しやすさが他社との大きな違いでした。
                        </p>
                        <p>
                            お部屋の一部に木目調の壁紙やヘリンボーン柄のアクセントを取り入れて、家の中にやさしい木のぬくもりをプラス。<br />ナチュラルな色合いと素材感にこだわったことで、どこにいてもほっと落ち着ける、癒しの空間に。<br />毎日を過ごす場所だからこそ、見た目の心地よさだけでなく、気持ちまでやわらぐような雰囲気に仕上がっています。
                        </p>
                        <p>
                            また、寝室と和室を1階に作ったのがポイント！<br />将来のことも考えつつ、家事がしやすい動線もこだわりました。<br />毎日の暮らしがラクになるって嬉しいですね。
                        </p>
                        <p>
                            無理のない家づくりをしたい、自分たちらしい家に住みたい、そんな方におすすめの見学会です。
                        </p>
                        <div class="episodes">
                            <p>■今回の見どころポイント！</p>
                            <div class="episode">
                                <p>✔︎開放感のある吹き抜けリビング</p>
                                <p>✔︎リビングとつながる和室</p>
                                <p>✔︎︎暮らしやすさを考えた家事動線</p>
                                <p>✔︎︎1階に寝室をレイアウト</p>
                            </div>
                        </div>
                        <div class="arcData">
                            <p>【建築データ】</p>
                            <p>敷地面積：９７．４坪</p>
                            <p>延床面積：３６．８坪</p>
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
            <img src="{{ asset("/./assets/img/ad_sp.png") }}" class="adSp" alt="adSp" />
            <div class="otherBlog">
                <div class="otherT flex col a-c j-c">
                    <p>その他のブログ</p>
                    <p>RELATED POST</p>
                </div>
                <div class="otherG">
                    <div class="other flex">
                        <div class="otherImg">
                            <img src="{{ asset("/./assets/img/other.png") }}" alt="realted" />
                        </div>
                        <div class="otherC">
                            <p>2025年10月00日</p>
                            <p> 4/26.27の内見会のご参加ありがとうございました！</p>
                        </div>
                    </div>
                    <div class="other flex">
                        <div class="otherImg">
                            <img src="{{ asset("/./assets/img/other.png") }}" alt="realted" />
                        </div>
                        <div class="otherC">
                            <p>2025年10月00日</p>
                            <p> 4/26.27の内見会のご参加ありがとうございました！</p>
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
                トップページ > コラム > カテゴリ名 > コラムタイトル
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>