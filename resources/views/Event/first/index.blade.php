<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>Top Page</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="signCom">
                <p>株式会社ハウスイズム</p>
                <p>理想の住まいづくりを叶えた家</p>
                <div class="ring flex a-c">
                    <img src="{{ asset("/./assets/img/ring.png") }}" alt="ring" />
                    <p>能美市中町</p>
                </div>
                <div class="tipG flex a-c">
                    <div class="tip">完成見学会</div>
                    <div class="tip">予約特典あり</div>
                </div>
                <button class="bookBtn">イベント予約する</button>
            </div>
            <div class="signComSp">
                <p>株式会社SAMPLE COMPANY サンプルカンパニー 野々市</p>
                <p>平屋を繋ぐ2世帯住宅</p>
                <div class="tipG flex a-c">
                    <div class="tip">完成見学会</div>
                    <div class="tip">予約特典あり</div>
                </div>
            </div>
            <div class="slideG flex">
                <div class="intro">
                    <p class="introT">
                        年間50棟限定の家づくり。大阪の狭小住宅、注文住宅を一人の設計担当者がトータルに家づくりについてサポート。
                    </p>
                    <div class="context flex col">
                        <p>「理想の住まいづくりを叶えた家」</p>
                        <p>小松市にセミオーダーの新築戸建て住宅がまもなく完成します。</p>
                        <p>
                            「いつかはマイホームを…」という憧れに加えて、子どもが産まれたことがきっかけで、<br />家族で安心して暮らせる場所をつくりたいと思い、家づくりをスタート！
                        </p>
                        <p>
                            多くのハウスメーカーを見学する中で理想のイメージが見つからずにいたところ、お母様の「伊地知組さんを見に行ってみたら？」という一言で訪問。<br />最初は大きな展示に驚いたものの、シンプルなデザインと、自分たちの希望を親
                        </p>
                    </div>
                </div>
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
                <div class="houseE flex col">
                    <p class="houseET">ここちの家　平屋＆2階建て</p>
                    <p>
                        「温度を守る」「体を守る」「家計を守る」「環境を守る」「命を守る」5つの「守る」を備えたモデルハウスです。これから先もずっと大切な時間を守るためのたくさんの想いをかたちに。
                    </p>
                    <button>すべてみる ▼</button>
                </div>
            </div>
            <div class="content">
                <div class="event_info">
                    <p class="event_infoT">イベント情報</p>
                    <div class="e_dataG">
                        <div class="e_data flex a-c">
                            <p>期間</p>
                            <p>2025/04/30 〜 2025/07/30</p>
                        </div>
                        <div class="e_data flex a-c">
                            <p>時間</p>
                            <p>10:00〜16:00</p>
                        </div>
                        <div class="e_data flex">
                            <p>場所</p>
                            <p>石川県金沢市</p>
                        </div>
                        <div class="e_data flex j-b">
                            <p>注意事項</p>
                            <p>
                                当日のご予約はお電話のみ受け付けております。別のサイトからもイベント予約を受付しておりますので、ご予約が重なる可能性がございます。その際は個別にご連絡させていただきます。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="calendarC">
                    <div class="calendar-container" id="calendar-container">
                        <div class="calendar flex col a-c" id="calendarWrapper">
                            <div class="calendar-header">
                                <button class="mBtn flex j-c a-c" id="prevMonthBtn">
                                    &lt;
                                </button>
                                <div class="dateG flex a-b">
                                    <p id="calendarYear">2025.</p>
                                    <p id="calendarMonth">8</p>
                                    <p>月</p>
                                </div>

                                <button class="mBtn flex j-c a-c" id="nextMonthBtn">
                                    &gt;
                                </button>
                                <button id="todayBtn">今日</button>
                            </div>
                            <div class="calendar-grid" id="calendarGrid"></div>
                        </div>
                        <div class="time-select" id="timePanel">
                            <h2>見学希望日を選んでください</h2>
                            <div class="date-selector">
                                <div class="date-box selected saturday">
                                    <div class="month-day">
                                        <p class="month" id="selectedDateText"></p>
                                        <div class="sdayG flex a-b">
                                            <p class="sday blue" id="selectedtimeText"></p>
                                            <p class="blue">日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="date-box sunday">
                                    <div class="month-day">
                                        <p class="month" id="selectedNextDateText"></p>
                                        <div class="sdayG flex a-b">
                                            <p class="sday red" id="selectedNexttimeText"></p>
                                            <p class="red">日</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>見学時間を選んでください</h2>
                            <div class="time-selector">
                                <div class="time-slot selected">09:00〜12:00</div>
                                <div class="time-slot">15:00〜16:00</div>
                                <div class="time-slot">16:00〜17:00</div>
                                <a href="{{ url("#") }}" class="submit-btn" id="backToCalendarBtn">
                                    予約へ進む
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vrb">
                    <div class="vrbT flex j-c a-c">来場・予約特典</div>
                    <img src="{{ asset("/./assets/img/vrb.png") }}" alt="vrb" />
                    <div class="vrb_txt">
                        <p>
                            イエタッタ10周年特別感謝企画<br />
                            「新築お祝いキャンペーン」
                        </p>
                        <p>
                            いまならイベントを予約して参加するともれなく「Amazonギフトカード最大5000円分（先着200名
                            様）」をプレゼント！
                        </p>
                    </div>
                </div>
                <div class="recom">
                    <div class="recomT">こんな方におすすめ!</div>
                    <div class="checkG">
                        <div class="checkB flex a-c">
                            <img src="{{ asset("/./assets/img/check.png") }}" alt="checkbox" />
                            <p>家のデザインや間取りについてアイデアを集めている。</p>
                        </div>
                        <div class="checkB flex a-c">
                            <img src="{{ asset("/./assets/img/check.png") }}" alt="checkbox" />
                            <p>二世帯住宅に興味がある。</p>
                        </div>
                        <div class="checkB flex a-c">
                            <img src="{{ asset("/./assets/img/check.png") }}" alt="checkbox" />
                            <p>お手入れしやすい住設機器について、情報収集している。</p>
                        </div>
                        <div class="checkB flex a-c">
                            <img src="{{ asset("/./assets/img/check.png") }}" alt="checkbox" />
                            <p>おしゃれで耐震性の高い家に住みたい。</p>
                        </div>
                        <div class="checkB flex a-c">
                            <img src="{{ asset("/./assets/img/check.png") }}" alt="checkbox" />
                            <p>
                                GX志向型住宅の補助金を使って、高性能なお家をお得に建てたい。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btnG flex a-c j-b">
                    <button>
                        電話で<br />
                        問い合わせる
                    </button>
                    <button>イベント予約する</button>
                </div>
                <div class="eventDetail">
                    <div class="eventDetailT">イベント詳細情報</div>
                    <div class="detailImg">
                        <img src="{{ asset("/./assets/img/LDK.png") }}" alt="LDK" />
                        <div class="imgE">
                            <p>リビング・ダイニング</p>
                            <p>リビングダイニングは白を基調に。</p>
                        </div>
                    </div>
                    <div class="detailImg">
                        <img src="{{ asset("/./assets/img/リビング・ダイニング.png") }}" alt="" />
                        <div class="imgE">
                            <p>リビング・ダイニング</p>
                            <p>リビングダイニングは白を基調に。</p>
                        </div>
                    </div>
                </div>
                <div class="event_info">
                    <p class="event_infoT">イベント情報</p>
                    <div class="e_dataG">
                        <div class="e_data flex a-c">
                            <p>期間</p>
                            <p>2025/04/30 〜 2025/07/30</p>
                        </div>
                        <div class="e_data flex a-c">
                            <p>時間</p>
                            <p>10:00〜16:00</p>
                        </div>
                        <div class="e_data flex">
                            <p>場所</p>
                            <p>◯◯県〇〇市●●●●</p>
                        </div>
                        <div class="e_data flex j-b">
                            <p>注意事項</p>
                            <p>
                                当日のご予約はお電話のみ受け付けております。別のサイトからもイベント予約を受付しておりますので、ご予約が重なる可能性がございます。その際は個別にご連絡させていただきます。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btnG flex a-c j-b">
                    <button>
                        電話で<br />
                        問い合わせる
                    </button>
                    <button>イベント予約する</button>
                </div>
                <div class="vrb">
                    <div class="vrbT flex j-c a-c">来場・予約特典</div>
                    <img src="{{ asset("/./assets/img/vrb.png") }}" alt="vrb" />
                    <div class="vrb_txt">
                        <p>
                            イエタッタ10周年特別感謝企画<br />
                            「新築お祝いキャンペーン」
                        </p>
                        <p>
                            いまならイベントを予約して参加するともれなく「Amazonギフトカード最大5000円分（先着200名
                            様）」をプレゼント！
                        </p>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="mapT">イベントMAP</div>
                <img src="{{ asset("/./assets/img/map.png") }}" alt="Google Map" />
                <div class="mapBtn flex j-c a-c">地図アプリで見る</div>
            </div>
            <div class="blogG">
                <div class="blogT">開催中のイベント情報</div>
                <div class="blog flex">
                    <div class="imgS">
                        <img src="{{ asset("/./assets/img/List.png") }}" alt="blog_List" />
                    </div>
                    <div class="blogE">
                        <div class="blogName flex a-c">
                            <div class="bName">モデルハウス</div>
                            <div class="bDate">2025/05/17 ～ 2025/05/18</div>
                        </div>
                        <div class="hStyle">受け継がれる家【CONNECT-STYLE】</div>
                        <div class="bTxt">
                            <p>
                                これからの住宅とは何か。
                                使用エネルギーを抑え、自然環境に配慮した家。 災害等から家族
                                を守ることの出来る家。
                                そして、いつまでも暮らしやすく、長く愛される家。 こ
                            </p>
                            <p>会場：石川県能美市福島町へ136</p>
                        </div>
                        <div class="bStateG flex a-c">
                            <div class="bState flex a-c j-c">予約必要です</div>
                            <div class="bState flex a-c j-c">キッズスペースあり</div>
                        </div>
                        <a href="{{ url("#") }}" class="bDetail flex a-c j-c">
                            <p>もっと詳しく見る</p>
                            <img src="{{ asset("/./assets/img/bMore_icon.png") }}" alt="bMore_i" />
                        </a>
                    </div>
                </div>
                <div class="blog flex">
                    <div class="imgS">
                        <img src="{{ asset("/./assets/img/List.png") }}" alt="blog_List" />
                    </div>
                    <div class="blogE">
                        <div class="blogName flex a-c">
                            <div class="bName">モデルハウス</div>
                            <div class="bDate">2025/05/17 ～ 2025/05/18</div>
                        </div>
                        <div class="hStyle">受け継がれる家【CONNECT-STYLE】</div>
                        <div class="bTxt">
                            <p>
                                これからの住宅とは何か。
                                使用エネルギーを抑え、自然環境に配慮した家。 災害等から家族
                                を守ることの出来る家。
                                そして、いつまでも暮らしやすく、長く愛される家。 こ
                            </p>
                            <p>会場：石川県能美市福島町へ136</p>
                        </div>
                        <div class="bStateG flex a-c">
                            <div class="bState flex a-c j-c">予約必要です</div>
                            <div class="bState flex a-c j-c">キッズスペースあり</div>
                        </div>
                        <a href="{{ url("#") }}" class="bDetail flex a-c j-c">
                            <p>もっと詳しく見る</p>
                            <img src="{{ asset("/./assets/img/bMore_icon.png") }}" alt="bMore_i" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="blogG_sp">
                <div class="blogG_spT">開催中のイベント情報</div>
                <div class="blogList_sp flex col">
                    <div class="blogSp flex a-c">
                        <div class="bImg_sp">
                            <img src="{{ asset("/./assets/img/blogSp01.png") }}" alt="blogSp01" />
                        </div>
                        <div class="blogSp_E">
                            <p class="blogSp_ET">
                                《木造で魅せる》標準仕様が体感できる3階建て見学ツアー
                            </p>
                            <div class="bState_sp">完成見学会</div>
                            <div class="b_infoG flex col">
                                <div class="b_info flex a-c">
                                    <p>開催日</p>
                                    <p>～ 2023/03/31</p>
                                </div>
                                <div class="b_info flex a-c">
                                    <p>開催地</p>
                                    <p>奈良県奈良市八条4丁目638-1</p>
                                </div>
                                <p>株式会社ハウスメーカーハウスメーカ</p>
                            </div>
                        </div>
                    </div>
                    <div class="blogSp flex a-c">
                        <div class="bImg_sp">
                            <img src="{{ asset("/./assets/img/blogSp02.png") }}" alt="blogSp02" />
                        </div>
                        <div class="blogSp_E">
                            <p class="blogSp_ET">
                                《木造で魅せる》標準仕様が体感できる3階建て見学ツアー
                            </p>
                            <div class="bState_sp">完成見学会</div>
                            <div class="b_infoG flex col">
                                <div class="b_info flex a-c">
                                    <p>開催日</p>
                                    <p>～ 2023/03/31</p>
                                </div>
                                <div class="b_info flex a-c">
                                    <p>開催地</p>
                                    <p>奈良県奈良市八条4丁目638-1</p>
                                </div>
                                <p>株式会社ハウスメーカーハウスメーカ</p>
                            </div>
                        </div>
                    </div>
                    <div class="blogSp flex a-c">
                        <div class="bImg_sp">
                            <img src="{{ asset("/./assets/img/blogSp03.png") }}" alt="blogSp03" />
                        </div>
                        <div class="blogSp_E">
                            <p class="blogSp_ET">
                                《木造で魅せる》標準仕様が体感できる3階建て見学ツアー
                            </p>
                            <div class="bState_sp">完成見学会</div>
                            <div class="b_infoG flex col">
                                <div class="b_info flex a-c">
                                    <p>開催日</p>
                                    <p>～ 2023/03/31</p>
                                </div>
                                <div class="b_info flex a-c">
                                    <p>開催地</p>
                                    <p>奈良県奈良市八条4丁目638-1</p>
                                </div>
                                <p>株式会社ハウスメーカーハウスメーカ</p>
                            </div>
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
                新築・注文住宅サイト イエタッタ > 石川県の住宅イベントへ行く >
                株式会社桝田工務店 > 中庭のある家~閉鎖的・開放的を実現する~
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>