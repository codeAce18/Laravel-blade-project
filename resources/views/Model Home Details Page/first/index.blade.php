<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>Model House Detail</title>
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
                    <p class="houseET">
                        1995年設立、これまでも、これからも。お客様に選ばれる満足度No.1の住宅会社を目指して
                    </p>
                    <p>
                        点ではなく、線としてお客様の人生に関わり、「感動ある人生」のスケッチをお客様と共に描く。何気ない毎日、暮らしに寄り添う存在であり続けます。設計だけ、施工だけではなく、その両方を誠実に行い、それぞれの専門家がトータ
                    </p>
                    <button>すべてみる ▼</button>
                    <div class="btnG flex a-c j-b">
                        <button>
                            電話で<br />
                            問い合わせる
                        </button>
                        <button>イベント予約する</button>
                    </div>
                </div>
            </div>
            <div class="content">
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
                <div class="feature">
                    <div class="featureT">物件の特長</div>
                    <div class="toggle-wrapper" data-default-open="false" data-open-label="[閉じる▲]"
                        data-close-label="[もっと見る▼]">
                        <div class="toggle-header">
                            <p>
                                連続受賞中！ハウスオブザイヤーインエナジー（特別優秀賞・省エネ住宅特別優良企業賞W受賞）
                            </p>
                            <img src="{{ asset("/./assets/img/feature_intro.png") }}" alt="House image" />
                        </div>

                        <div class="toggle-content-wrapper">
                            <div class="toggle-content">
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            1995年設立、これまでも、これからも。お客様に選ばれる満足度No.1の住宅会社を目指して
                                        </p>
                                        <p>
                                            点ではなく、線としてお客様の人生に関わり、「感動ある人生」のスケッチをお客様と共に描く。何気ない毎日、暮らしに寄り添う存在であり続けます。設計だけ、施工だけではなく、その両方を誠実に行い、それぞれの専門家がトータルサポートします。
                                            また、一般的によく実施されているファイナンシャルプランナーではなく、住宅資金の専門家がお客様のライフプランを立てます。第三者の立場で行ってくれるので、セカンドオピニオンとして利用される方も。家づくりで最も重要視される資金計画は専門家にご相談いただきます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>デッドスペースの量を全て計算してみませんか？</p>
                                        <p>
                                            狭小住宅はいかにデッドスペースを有効活用するかにかかっています。普段使わないスペースを収納などに利用することによって空間の使用率を上げ、生活空間をより有効に広げることができます。主に、小屋裏収納、壁面収納、階段下などのスペースを有効活用します。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            上に空間が広がっていると、ついつい上に視線がいき、広いと感じることはありませんか？
                                        </p>
                                        <p>
                                            「吹き抜け」と「勾配天井」で上下の空間の見せ方を工夫することによって、部屋を視覚的に広く見せることが可能です。タテ（上下方向）への広がりをプラスして、“空間”を感じさせるのが吹き抜けです。リビングや階段などに吹き抜けを設けて光を採り込めば、視線が自然と上部へと誘導され、開放感たっぷりの明るい空間をつくることができます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toggle-button flex"></div>
                    </div>
                    <div class="toggle-wrapper" data-default-open="false" data-open-label="[閉じる▲]"
                        data-close-label="[もっと見る▼]">
                        <div class="toggle-header">
                            <p>
                                連続受賞中！ハウスオブザイヤーインエナジー（特別優秀賞・省エネ住宅特別優良企業賞W受賞）
                            </p>
                            <img src="{{ asset("/./assets/img/feature_intro.png") }}" alt="House image" />
                        </div>

                        <div class="toggle-content-wrapper">
                            <div class="toggle-content">
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            1995年設立、これまでも、これからも。お客様に選ばれる満足度No.1の住宅会社を目指して
                                        </p>
                                        <p>
                                            点ではなく、線としてお客様の人生に関わり、「感動ある人生」のスケッチをお客様と共に描く。何気ない毎日、暮らしに寄り添う存在であり続けます。設計だけ、施工だけではなく、その両方を誠実に行い、それぞれの専門家がトータルサポートします。
                                            また、一般的によく実施されているファイナンシャルプランナーではなく、住宅資金の専門家がお客様のライフプランを立てます。第三者の立場で行ってくれるので、セカンドオピニオンとして利用される方も。家づくりで最も重要視される資金計画は専門家にご相談いただきます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>デッドスペースの量を全て計算してみませんか？</p>
                                        <p>
                                            狭小住宅はいかにデッドスペースを有効活用するかにかかっています。普段使わないスペースを収納などに利用することによって空間の使用率を上げ、生活空間をより有効に広げることができます。主に、小屋裏収納、壁面収納、階段下などのスペースを有効活用します。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            上に空間が広がっていると、ついつい上に視線がいき、広いと感じることはありませんか？
                                        </p>
                                        <p>
                                            「吹き抜け」と「勾配天井」で上下の空間の見せ方を工夫することによって、部屋を視覚的に広く見せることが可能です。タテ（上下方向）への広がりをプラスして、“空間”を感じさせるのが吹き抜けです。リビングや階段などに吹き抜けを設けて光を採り込めば、視線が自然と上部へと誘導され、開放感たっぷりの明るい空間をつくることができます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toggle-button flex"></div>
                    </div>
                    <div class="toggle-wrapper" data-default-open="false" data-open-label="[閉じる▲]"
                        data-close-label="[もっと見る▼]">
                        <div class="toggle-header">
                            <p>
                                連続受賞中！ハウスオブザイヤーインエナジー（特別優秀賞・省エネ住宅特別優良企業賞W受賞）
                            </p>
                            <img src="{{ asset("/./assets/img/feature_intro.png") }}" alt="House image" />
                        </div>

                        <div class="toggle-content-wrapper">
                            <div class="toggle-content">
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            1995年設立、これまでも、これからも。お客様に選ばれる満足度No.1の住宅会社を目指して
                                        </p>
                                        <p>
                                            点ではなく、線としてお客様の人生に関わり、「感動ある人生」のスケッチをお客様と共に描く。何気ない毎日、暮らしに寄り添う存在であり続けます。設計だけ、施工だけではなく、その両方を誠実に行い、それぞれの専門家がトータルサポートします。
                                            また、一般的によく実施されているファイナンシャルプランナーではなく、住宅資金の専門家がお客様のライフプランを立てます。第三者の立場で行ってくれるので、セカンドオピニオンとして利用される方も。家づくりで最も重要視される資金計画は専門家にご相談いただきます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>デッドスペースの量を全て計算してみませんか？</p>
                                        <p>
                                            狭小住宅はいかにデッドスペースを有効活用するかにかかっています。普段使わないスペースを収納などに利用することによって空間の使用率を上げ、生活空間をより有効に広げることができます。主に、小屋裏収納、壁面収納、階段下などのスペースを有効活用します。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                                <div class="featureC_gp flex j-b">
                                    <div class="featureTxt">
                                        <p>
                                            上に空間が広がっていると、ついつい上に視線がいき、広いと感じることはありませんか？
                                        </p>
                                        <p>
                                            「吹き抜け」と「勾配天井」で上下の空間の見せ方を工夫することによって、部屋を視覚的に広く見せることが可能です。タテ（上下方向）への広がりをプラスして、“空間”を感じさせるのが吹き抜けです。リビングや階段などに吹き抜けを設けて光を採り込めば、視線が自然と上部へと誘導され、開放感たっぷりの明るい空間をつくることができます。
                                        </p>
                                    </div>
                                    <div class="featureImg">
                                        <img src="{{ asset("/./assets/img/feature.png") }}" alt="House photo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toggle-button flex"></div>
                    </div>
                    <div class="featureBtn flex a-c j-c">
                        <a href="{{ url("#") }}">来場予約をする</a>
                    </div>
                    <div class="btnG flex a-c j-b">
                        <button>
                            電話で<br />
                            問い合わせる
                        </button>
                        <button>イベント予約する</button>
                    </div>
                </div>
                <div class="arrangement">
                    <div class="arrangementT flex a-c">
                        <p>間取り</p>
                        <p>3LDK</p>
                    </div>
                    <div class="plan">
                        <div class="plan_num">１階</div>
                        <div class="planImg">
                            <img src="{{ asset("/./assets/img/arrangement.png") }}" alt="planImg" />
                        </div>
                        <p>※参考プラン図ですので、実際とは異なります。</p>
                        <img src="{{ asset("/./assets/img/arrangement 01.png") }}" class="arr_sp"
                            alt="arrangement 01" />
                        <img src="{{ asset("/./assets/img/arrangement 02.png") }}" class="arr_sp"
                            alt="arrangement 02" />
                    </div>
                </div>
                <div class="gallery">
                    <p class="galleryT">ギャラリー</p>
                    <div class="galleryC top_line">
                        <img src="{{ asset("/./assets/img/gallery01.png") }}" alt="gallery01" />
                        <p>愛車と海を眺められるLDK</p>
                        <p>
                            リビングにはガレージを眺められるショーケースを設け、愛車のある暮らしを満喫できる空
                            間に。日常の暮らしとは異なるひとときを過ごせる住宅に仕上がりました。
                        </p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery02.png") }}" alt="gallery01" />
                        <p>バスルームからも海が見えます</p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery03.png") }}" alt="gallery01" />
                        <p>最高のロケーション</p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery04.png") }}" alt="gallery01" />
                        <p>シンプルな平屋建て</p>
                        <p>
                            週末を楽しむセカンドハウスとして建てた住宅。山々の緑、海の青など、ロケーションが素晴
                            らしく、春になれば前面道路の桜の木が満開になるなど、季節折々の景観が楽しめるのも魅力
                            のひとつです。一見平屋のように見えますが、反対側は独立柱によって構成されるピロティ形
                            式となっていることから、浮遊感を創出しています。
                        </p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery05.png") }}" alt="gallery05" />
                        <p>セカンドハウスにふさわしいリゾート感</p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery06.png") }}" alt="gallery06" />
                        <p>海外風のバスルーム</p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery07.png") }}" alt="gallery07" />
                        <p>LDK</p>
                    </div>
                    <div class="galleryC">
                        <img src="{{ asset("/./assets/img/gallery08.png") }}" alt="gallery08" />
                        <p>ガレージ</p>
                    </div>
                </div>
                <div class="event_info">
                    <p class="event_infoT">物件情報</p>
                    <div class="e_dataG">
                        <div class="e_data flex a-c">
                            <p>場所</p>
                            <p>大阪府守口市河原町5-10</p>
                        </div>
                        <div class="e_data flex a-c">
                            <p>営業時間</p>
                            <p>10:00〜18:00</p>
                        </div>
                        <div class="e_data flex">
                            <p>電話</p>
                            <p>0120-004-046</p>
                        </div>
                        <div class="e_data flex">
                            <p>駐車場</p>
                            <p>駐車場あり</p>
                        </div>
                        <div class="e_data flex j-b">
                            <p>備考</p>
                            <p>
                                [公共機関でお越しの場合] 京阪電鉄「守口市駅」下車　徒歩3分
                                [お車でお越しの場合] カーナビコード 1533857*52
                                ◆京阪百貨店守口店駐車場をご利用ください。
                                駐車場ご利用の方は、入庫の際に発行される駐車券をご持参いただき、スタッフにお申し出下さい。
                                駐車サービス券をお渡しさせていただきます。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="featureBtn mb-20 flex a-c j-c">
                    <a href="{{ url("#") }}">来場予約をする</a>
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
                <div class="mapT">モデルハウスMAP</div>
                <img src="{{ asset("/./assets/img/map.png") }}" alt="Google Map" />
                <div class="mapBtn flex j-c a-c">地図アプリで見る</div>
            </div>
            <div class="blogG">
                <div class="blogT">開催中のイベント情報</div>
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
                <h2>モデルハウス・展示場情報</h2>
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
                <div class="btnG flex a-c j-b">
                    <button>
                        電話で<br />
                        問い合わせる
                    </button>
                    <button>イベント予約する</button>
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