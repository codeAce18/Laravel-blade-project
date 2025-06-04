<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>会社詳細ページトップ</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="signCom">
                <p>理想の住まいづくりを叶えた家</p>
                <div class="tipG flex">
                    <p>電話</p>
                    <p>06-6621-6896</p>
                </div>
                <div class="bookBtn flex">
                    <button>イベント予約する</button>
                    <button>イベント予約する</button>
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
                <div class="blogSort sp flex a-c">
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
                        <button class="sortRect flex a-c j-c">
                            土地・建売<br />100件
                        </button>
                        <button class="sortRect flex a-c j-c">ブログ<br />100件</button>
                        <button class="sortRect flex a-c j-c">公式サイト</button>
                    </div>
                </div>
                <div class="houseE flex col">
                    <p class="houseET">
                        1995年設立、これまでも、これからも。お客様に選ばれる満足度No.1の住宅会社を目指して
                    </p>
                    <p>
                        点ではなく、線としてお客様の人生に関わり、「感動ある人生」のスケッチをお客様と共に描く。何気ない毎日、暮らしに寄り添う存在であり続けます。設計だけ、施工だけではなく、その両方を誠実に行い、それぞれの専門家がトー...
                    </p>
                    <button>すべてみる ▼</button>
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
            </div>
            <div class="blog-event">
                <!-- Blog Section -->
                <section class="blog-section">
                    <div class="section-header">
                        <span class="section-title">ブログ</span>
                        <button class="view-all-btn">一覧を見る</button>
                    </div>
                    <ul class="blog-list">
                        <li>
                            <div class="blog-date">2025/03/04</div>
                            <div class="blog-title">ありがとうございました！</div>
                        </li>
                        <li>
                            <div class="blog-date">2025/03/05</div>
                            <div class="blog-title">お疲れ様でした！</div>
                        </li>
                        <li>
                            <div class="blog-date">2025/03/06</div>
                            <div class="blog-title">お会いできて嬉しいです！</div>
                        </li>
                        <li>
                            <div class="blog-date">2025/03/07</div>
                            <div class="blog-title">次回を楽しみにしています！</div>
                        </li>
                        <li>
                            <div class="blog-date">2025/03/08</div>
                            <div class="blog-title">ご協力ありがとうございました！</div>
                        </li>
                    </ul>
                </section>

                <!-- Event Section -->
                <section class="event-section">
                    <div class="section-header">
                        <span class="section-title">イベント情報</span>
                        <button class="view-all-btn">一覧を見る</button>
                    </div>
                    <div class="event-list">
                        <div class="event-card">
                            <img src="{{ asset("/./assets/img/blogSp03.png") }}" alt="event" class="event-img" />
                            <div class="event-info">
                                <div class="event-title">
                                    自宅で聴けるオンライン勉強会　～ＦＰ編～
                                </div>
                                <div class="event-tags">
                                    <span class="tag online">オンライン</span>
                                    <span class="tag reserve">予約必要です</span>
                                </div>
                                <div class="event-detail">
                                    開催日　2023/01/27 ～ 2023/03/31
                                </div>
                                <div class="event-detail">
                                    開催地　奈良県奈良市4丁目3-6T3G8-1
                                </div>
                                <div class="event-detail">
                                    株式会社ハウスメーカーハウスメーカ
                                </div>
                            </div>
                        </div>
                        <div class="event-card">
                            <img src="{{ asset("/./assets/img/blogSp03.png") }}" alt="event" class="event-img" />
                            <div class="event-info">
                                <div class="event-title">
                                    自宅で聴けるオンライン勉強会　～ＦＰ編～
                                </div>
                                <div class="event-tags">
                                    <span class="tag online">オンライン</span>
                                    <span class="tag reserve">予約必要です</span>
                                </div>
                                <div class="event-detail">
                                    開催日　2023/01/27 ～ 2023/03/31
                                </div>
                                <div class="event-detail">
                                    開催地　奈良県奈良市4丁目3-6T3G8-1
                                </div>
                                <div class="event-detail">
                                    株式会社ハウスメーカーハウスメーカ
                                </div>
                            </div>
                        </div>
                        <div class="event-card">
                            <img src="{{ asset("/./assets/img/blogSp03.png") }}" alt="event" class="event-img" />
                            <div class="event-info">
                                <div class="event-title">
                                    自宅で聴けるオンライン勉強会　～ＦＰ編～
                                </div>
                                <div class="event-tags">
                                    <span class="tag online">オンライン</span>
                                    <span class="tag reserve">予約必要です</span>
                                </div>
                                <div class="event-detail">
                                    開催日　2023/01/27 ～ 2023/03/31
                                </div>
                                <div class="event-detail">
                                    開催地　奈良県奈良市4丁目3-6T3G8-1
                                </div>
                                <div class="event-detail">
                                    株式会社ハウスメーカーハウスメーカ
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="feature flex col a-c">
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
                <div class="f_BtnG">
                    <div class="featureBtn flex col a-c j-c">
                        <a href="{{ url("#") }}">来場予約をする</a>
                    </div>
                    <div class="f_btnB flex j-b">
                        <a href="{{ url("#") }}">LINEで質問する</a>
                        <a href="{{ url("#") }}">お気に入りに追加</a>
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
            <div class="content flex j-b">
                <div class="infoG">
                    <div class="event_info">
                        <p class="event_infoT">会社情報</p>
                        <div class="e_dataG">
                            <div class="e_data flex a-c">
                                <p>社名</p>
                                <p>株式会社 伊地知組｜＃お客様の想いを形に</p>
                            </div>
                            <div class="e_data flex a-c">
                                <p>会社所在地</p>
                                <p>石川県小松市吉竹町よ38-2</p>
                            </div>
                            <div class="e_data flex">
                                <p>施工対応エリア</p>
                                <p>
                                    加賀市 小松市 能美市・川北町 白山市 野々市市 金沢市
                                    かほく市・内灘町・津幡町 羽咋市・宝達志水町・志賀町
                                    七尾市・中能登町 輪島市・穴水町・能登町 珠洲市
                                </p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>電話番号</p>
                                <p>0761-24-5800</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>Fax</p>
                                <p>0761-24-5803</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>URL</p>
                                <p>この会社のホームページへ</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>E-mail</p>
                                <p>info@xxxx.com</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>営業時間</p>
                                <p>9:00〜18:00</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>定休日</p>
                                <p>年中無休（年末年始・夏季休業）</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>取扱工法</p>
                                <p>木造軸組 2x4、2x6</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>参考坪単価</p>
                                <p>50万〜80万円台</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>保証体制</p>
                                <p>
                                    短期保証：引き渡しから2年以内(短期保証基準記載の保証期間内)<br />
                                    長期保証：引渡しから10年間　JIO((株)日本住宅保証検査機構)
                                </p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>アフターメンテ</p>
                                <p>定期点検あり</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>会社設立</p>
                                <p>平成24年1月24日</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>資本金</p>
                                <p>300万円</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>代表者</p>
                                <p>伊地知大輔</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>従業員数</p>
                                <p>5</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>建設許可番号</p>
                                <p>石川県知事 許可（般-28）第17565号 建築工事業</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>SNS</p>
                                <p>石川県知事 許可（般-28）第17565号 建築工事業</p>
                            </div>
                        </div>
                    </div>
                    <div class="event_info">
                        <p class="event_infoT">支店情報</p>
                        <div class="e_dataG">
                            <div class="e_data flex a-c">
                                <p>支店名</p>
                                <p>昭和町駅前支店</p>
                            </div>
                            <div class="e_data flex a-c">
                                <p>住所</p>
                                <p>大阪市阿倍野区昭和町2-1-27橋本ビル2F・3F・4F</p>
                            </div>
                            <div class="e_data flex">
                                <p>電話番号</p>
                                <p>06-6624-5180</p>
                            </div>
                            <div class="e_data flex">
                                <p>URL</p>
                                <p>この会社のホームページへ</p>
                            </div>
                            <div class="e_data flex">
                                <p>E-mail</p>
                                <p>info@ietatta.com</p>
                            </div>
                            <div class="e_data flex">
                                <p>営業時間</p>
                                <p>10：00〜17：00</p>
                            </div>
                            <div class="e_data flex">
                                <p>定休日</p>
                                <p>水曜日・盆・年末年始</p>
                            </div>
                            <div class="e_data flex">
                                <p>所在時MAP</p>
                                <p>水曜日・盆・年末年始</p>
                            </div>
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
                <div class="intro_info">
                    <p class="event_infoT">スタッフ紹介</p>
                    <div class="p_dataG">
                        <div class="personal_info">
                            <div class="personal flex">
                                <div class="p_data">
                                    <p>
                                        後悔しない楽しいお家づくりの１歩目をお手伝いさせて下さい。
                                    </p>
                                    <p>経理部</p>
                                    <p>山田 花子</p>
                                </div>
                                <img src="{{ asset("/./assets/img/personal.png") }}" class="p_photo" alt="personal" />
                            </div>
                            <p>
                                はじめまして。◯◯◯◯◯◯◯です。前職で工務店勤務をしており女性目線のお家づくりに携わってきた経験を活かし、まずは何から始めたらいいのか？というところから、ご縁を大切にお客様とお話していきたいと思っています。お気軽にお越し下さい。
                            </p>
                        </div>
                        <div class="e_dataG">
                            <div class="e_data flex a-c">
                                <p>出身地</p>
                                <p>大阪府堺市生まれ　奈良県天理市育ち</p>
                            </div>
                            <div class="e_data flex a-c">
                                <p>星座・血液型</p>
                                <p>獅子座・A型</p>
                            </div>
                            <div class="e_data flex">
                                <p>趣味・楽しみ</p>
                                <p>イタリアン・スイーツ・コーヒー（ブラックで夏でもHOT！）</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなこと</p>
                                <p>棟上げを見る事（建築現場など）・自己肯定感を高める方法</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなスポーツ</p>
                                <p>ゴルフ・YouTube動画の10分ヨガ</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>主な業務担当</p>
                                <p>おうちづくりについての問題解決とご提案</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_dataG">
                        <div class="personal_info">
                            <div class="personal flex">
                                <div class="p_data">
                                    <p>お客様の夢を形にするために、共に歩んでいきましょう。</p>
                                    <p>設計部</p>
                                    <p>佐藤 太郎</p>
                                </div>
                                <img src="{{ asset("/./assets/img/personal.png") }}" class="p_photo" alt="personal" />
                            </div>
                            <p>
                                こんにちは。私は佐藤太郎です。建築設計の分野で10年以上の経験があります。お客様のライフスタイルに合った、理想的なお家の設計をお手伝いします。どんな小さな疑問でもお気軽にご相談ください。
                            </p>
                        </div>
                        <div class="e_dataG">
                            <div class="e_data flex a-c">
                                <p>出身地</p>
                                <p>東京都八王子市</p>
                            </div>
                            <div class="e_data flex a-c">
                                <p>星座・血液型</p>
                                <p>天秤座・O型</p>
                            </div>
                            <div class="e_data flex">
                                <p>趣味・楽しみ</p>
                                <p>映画鑑賞・音楽演奏・旅行</p>
                            </div>
                            <div class="e_data flex">
                                <p>好きな食べ物</p>
                                <p>和食・焼肉・フルーツ</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなこと</p>
                                <p>デザインに関する本を読むこと・新しい技術を学ぶこと</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなスポーツ</p>
                                <p>サッカー・ランニング</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>主な業務担当</p>
                                <p>新築・リフォームの設計</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_dataG">
                        <div class="personal_info">
                            <div class="personal flex">
                                <div class="p_data">
                                    <p>安全で快適な住まいづくりをお手伝いします。</p>
                                    <p>施工部</p>
                                    <p>鈴木 一郎</p>
                                </div>
                                <img src="{{ asset("/./assets/img/personal.png") }}" class="p_photo" alt="personal" />
                            </div>
                            <p>
                                はじめまして。鈴木一郎と申します。私たちのチームは施工管理の専門家で、10年以上の実績があります。お客様のニーズに合わせた施工を心掛け、期待以上の仕上がりを提供できるよう努めています。
                            </p>
                        </div>
                        <div class="e_dataG">
                            <div class="e_data flex a-c">
                                <p>出身地</p>
                                <p>神奈川県横浜市</p>
                            </div>
                            <div class="e_data flex a-c">
                                <p>星座・血液型</p>
                                <p>蠍座・B型</p>
                            </div>
                            <div class="e_data flex">
                                <p>趣味・楽しみ</p>
                                <p>DIY・アウトドア・読書</p>
                            </div>
                            <div class="e_data flex">
                                <p>好きな食べ物</p>
                                <p>寿司・ラーメン・焼き鳥</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなこと</p>
                                <p>新しい技術を試すこと・家族との時間</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>好きなスポーツ</p>
                                <p>野球・テニス</p>
                            </div>
                            <div class="e_data flex j-b">
                                <p>主な業務担当</p>
                                <p>施工と現場管理</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="mapT">会社所在地MAP</div>
                <img src="{{ asset("/./assets/img/map.png") }}" alt="Google Map" />
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