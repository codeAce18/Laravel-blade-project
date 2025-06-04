<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>会社一覧ページ</title>
</head>

<body>
    @include('components.header')
    <main>
        <div class="container">
            <div class="sPanel">
                <div class="sMsg">
                    <div class="sMsgT flex a-c">
                        小松市で注文住宅を建てる工務店・ハウスメーカーから探す
                    </div>
                    <p>
                        小松市で注文住宅を建てる工務店・ハウスメーカーについて特徴やこだわり、建築実例を掲載しています。<br />
                        工法や坪単価、特徴や建築実例のチェック、開催中のイベント情報の予約資料請求などができます。
                    </p>
                </div>
                <div class="sEvent flex a-c j-b">
                    <div class="location">
                        <div class="mapLocation flex a-c">
                            <img src="{{ asset("/./assets/img/map_pointer.png") }}" alt="mapPointer" />
                            <p>施工対応エリア</p>
                            <p>|</p>
                            <p>小松市</p>
                        </div>
                        <div class="homeG flex a-c">
                            <img src="{{ asset("/./assets/img/home_i.png") }}" alt="home_i" />
                            <p>条件</p>
                            <p>|</p>
                            <p>注文住宅</p>
                        </div>
                    </div>
                    <a href="{{ url("#") }}" class="searchBtn flex a-c j-c">
                        <img src="{{ asset("/./assets/img/filter.png") }}" alt="searchBtn" />
                        <p>絞り込み</p>
                    </a>
                </div>
            </div>
            <div class="search-container">
                <p>石川県の注文住宅・工務店・ハウスメーカーを探す</p>

                <div class="search-box">
                    <img src="{{ asset("/./assets/img/search_i.png") }}" alt="検索アイコン" class="icon search-icon" />
                    <input type="text" placeholder="エリアや会社名など入力" />
                </div>

                <div class="filter-container">
                    <button class="filter-button">
                        <img src="{{ asset("/./assets/img/filter.png") }}" alt="絞り込みアイコン" class="" />
                        絞り込み
                    </button>

                    <div class="sort-options">
                        <span class="active">おすすめ順</span> |
                        <span>施工価格が安い順</span> |
                        <span>施工価格が高い順</span>
                    </div>
                </div>

                <div class="result-count">
                    検索結果 (<span class="count">232</span>件)
                </div>
            </div>
            <div class="cardG">
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex col">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>Z-ONE Co., Ltd ▼▼ゼットワン株式会社/工務店</p>
                        </div>
                        <div class="topR flex a-c j-c">
                            <a href="{{ url("#") }}">お気に入り追加</a>
                        </div>
                    </div>
                    <div class="cardC flex">
                        <div class="card-image-slider" data-slider
                            data-images='["./assets/img/blog01.png", "./assets/img/blog02.png", "./assets/img/blog03.png"]'>
                            <div class="image-wrapper"></div>
                            <div class="dots"></div>
                        </div>
                        <div class="card-content flex col j-b">
                            <p class="card-contentT">
                                『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                            </p>
                            <p>
                                施工価格幅
                                <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                        class="unit">万円</span></span>
                            </p>
                            <p>
                                参考坪営価
                                <span class="price">00<span class="unit">万円〜</span>80<span
                                        class="unit">万円/坪</span></span>
                            </p>
                            <div class="tag-container">
                                <div class="tag">施工事例掲載件数 <span>120件</span></div>
                                <div class="tag">
                                    イベント（見察会・相談会） <span>120件</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardG_sp">
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_sp">
                    <div class="cardTop flex a-c j-b">
                        <div class="topL flex a-c">
                            <div class="checkC">
                                <input type="checkbox" name="card" id="card" />
                            </div>
                            <p>会社名がはいります</p>
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
                        <p class="card-contentT">
                            『地球品質』〜自然の恵みと素材を生かし、時と共に心地良さが深まる暮らし
                        </p>
                        <p>
                            施工価格幅
                            <span class="price">1,795<span class="unit">万円〜</span>3,800<span
                                    class="unit">万円</span></span>
                        </p>
                        <p>
                            参考坪営価
                            <span class="price">00<span class="unit">万円〜</span>80<span class="unit">万円/坪</span></span>
                        </p>
                        <div class="tag-container">
                            <div class="tag">施工事例掲載件数 <span>120件</span></div>
                            <div class="tag">
                                イベント（見察会・相談会） <span>120件</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btnG flex a-c j-c">
                <a href="{{ url("#") }}" class="flex a-c">
                    <p>選択中の<span>1</span>件にまとめて資料請求する</p>
                    <p>無料</p>
                </a>
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
        </div>
        <div class="bBar">
            新築・注文住宅サイト イエタッタ <br />>
            石川県の工務店・ハウスメーカーを探す
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset("/./assets/js/script.js") }}"></script>
</body>

</html>