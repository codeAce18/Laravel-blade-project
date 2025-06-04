<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      integrity="sha512-..."
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset("/./assets/css/style.css") }}" />
    <title>施工事例詳細ページ</title>
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
              <img
                id="mainImage"
                class="main-image"
                src="{{ asset("/./assets/img/slide_main.png") }}"
                alt="Main Image"
              />
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
            <!-- <p class="introT">
              年間50棟限定の家づくり。大阪の狭小住宅、注文住宅を一人の設計担当者がトータルに家づくりについてサポート。
            </p> -->
            <div class="context flex col">
              <p>
                セカンドハウスとして建築した平屋のガレージハウス。山々の緑、海の青など、ロケーションが素晴らしく、春になれば前面道路の桜の木が満開になるなど、季節折々の景観が楽しめるのも魅力のひとつです。ガレージは部分的にガラス壁になっており、お部屋からお気に入りの車をいつでも見ることが出来ます。リビングやバスルームからの眺望は圧巻。素晴らしい眺めの中で趣味のサックスを演奏し、リラックス…贅沢です。普段の生活から解放されるような空間を創造致します。
              </p>
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
          </div>
        </div>
        <div class="content flex j-b">
          <div class="contentL">
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
                <img
                  src="{{ asset("/./assets/img/arrangement 01.png") }}"
                  class="arr_sp"
                  alt="arrangement 01"
                />
                <img
                  src="{{ asset("/./assets/img/arrangement 02.png") }}"
                  class="arr_sp"
                  alt="arrangement 02"
                />
              </div>
            </div>
            <div class="before_a">
              <p class="before_aT">ビフォーアフター</p>
              <div class="before">
                <div class="plan_num flex a-c j-c">１階</div>
                <div class="beforeC flex">
                  <div class="before_img">
                    <img src="{{ asset("/./assets/img/before.png") }}" alt="before" />
                  </div>
                  <div class="beforeC_txt">
                    <p>愛車と海を眺められるLDK</p>
                    <p>
                      リビングにはガレージを眺められるショーケースを設け、愛車のある暮らしを満喫できる空
                      間に。日常の暮らしとは異なるひとときを過ごせる住宅に仕上がりました。
                    </p>
                  </div>
                </div>
                <div class="bArrow flex a-c j-c">
                  <img src="{{ asset("/./assets/img/below_arrow.png") }}" alt="below_arrow" />
                </div>
              </div>
              <div class="after">
                <div class="plan_num flex a-c j-c">１階</div>
                <div class="afterC">
                  <div class="after_img">
                    <img src="{{ asset("/./assets/img/after.png") }}" alt="after" />
                  </div>
                  <div class="beforeC_txt">
                    <p>愛車と海を眺められるLDK</p>
                    <p>
                      リビングにはガレージを眺められるショーケースを設け、愛車のある暮らしを満喫できる空
                      間に。日常の暮らしとは異なるひとときを過ごせる住宅に仕上がりました。
                    </p>
                  </div>
                </div>
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
          </div>
          <div class="contentR">
            <div class="event_info">
              <p class="event_infoT">物件情報</p>
              <div class="e_dataG">
                <div class="e_data flex a-c">
                  <p>施工価格</p>
                  <p class="price">2,600万円〜3,200万円</p>
                </div>
                <div class="e_data flex a-c">
                  <p>構造</p>
                  <p>2階</p>
                </div>
                <div class="e_data flex">
                  <p>間取り</p>
                  <p>3LDK</p>
                </div>
                <div class="e_data flex">
                  <p>延床面積</p>
                  <p>83.636m² [25.29坪]</p>
                </div>
                <div class="e_data flex j-b">
                  <p>坪単価</p>
                  <p>70万円〜</p>
                </div>
                <div class="e_data flex j-b">
                  <p>構造</p>
                  <p>◯◯</p>
                </div>
              </div>
              <div class="btnGroup">
                <div class="featureBtn mb-20 flex a-c j-c">
                  <a href="{{ url("#") }}"
                    >カタログを<br />
                    請求する（無料）</a
                  >
                </div>
                <div class="btn_bGroup flex j-b">
                  <div class="bBtn">
                    <a href="{{ url("#") }}">LINEで質問する</a>
                  </div>
                  <div class="bBtn"><a href="{{ url("#") }}">お気に入りに追加</a></div>
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
            <button>イベント予約する</button>
            <button>イベント予約する</button>
          </div>
        </div>
        <div class="feature">
          <div class="featureT">物件の特長</div>
          <div
            class="toggle-wrapper"
            data-default-open="false"
            data-open-label="[閉じる▲]"
            data-close-label="[もっと見る▼]"
          >
            <div class="toggle-header">
              <p>
                8年連続受賞！ハウスオブザイヤーインエナジー（特別優秀賞・省エネ住宅特別優良企業賞W受賞
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
          <div
            class="toggle-wrapper"
            data-default-open="false"
            data-open-label="[閉じる▲]"
            data-close-label="[もっと見る▼]"
          >
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
          <div
            class="toggle-wrapper"
            data-default-open="false"
            data-open-label="[閉じる▲]"
            data-close-label="[もっと見る▼]"
          >
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
          <div class="btnGroup">
            <div class="featureBtn mb-20 flex a-c j-c">
              <a href="{{ url("#") }}"
                >カタログを<br />
                請求する（無料）</a
              >
            </div>
            <div class="btn_bGroup flex j-b">
              <div class="bBtn">
                <a href="{{ url("#") }}">LINEで質問する</a>
              </div>
              <div class="bBtn"><a href="{{ url("#") }}">お気に入りに追加</a></div>
            </div>
          </div>
          <div class="btnG flex a-c j-b">
            <button>
              電話で<br />
              問い合わせる
            </button>
            <button>イベント予約する</button>
            <button>イベント予約する</button>
            <button>イベント予約する</button>
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
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
              <img src="{{ asset("/./assets/img/blog_sp1.png") }}" alt="left" />
              <img src="{{ asset("/./assets/img/blog_sp2.png") }}" alt="right" />
            </div>
            <div class="card-content flex col j-b">
              <div class="priceG flex a-b">
                <p>
                  参考坪営価
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
              <img src="{{ asset("/./assets/img/blog_sp1.png") }}" alt="left" />
              <img src="{{ asset("/./assets/img/blog_sp2.png") }}" alt="right" />
            </div>
            <div class="card-content flex col j-b">
              <div class="priceG flex a-b">
                <p>
                  参考坪営価
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
              <img src="{{ asset("/./assets/img/blog_sp1.png") }}" alt="left" />
              <img src="{{ asset("/./assets/img/blog_sp2.png") }}" alt="right" />
            </div>
            <div class="card-content flex col j-b">
              <div class="priceG flex a-b">
                <p>
                  参考坪営価
                  <span class="price"
                    >1,795<span class="unit">万円〜</span>3,800<span
                      class="unit"
                      >万円</span
                    ></span
                  >
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
