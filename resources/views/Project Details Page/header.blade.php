<header>
      <div class="menu_part">
        <div class="topBar">
          <div class="site_name flex j-c a-c">
            <p>
              大阪府 兵庫県 奈良県 で 注文住宅
              を建てるなら株式会社桝田工務店【イエタッタ】
            </p>
          </div>
          <div class="num_s flex j-c">
            <div class="container flex a-c j-b">
              <div class="num flex a-c">
                <div class="data flex a-b">
                  <p>住宅会社</p>
                  <p>352</p>
                  <p>社</p>
                </div>
                <div class="data flex a-b">
                  <p>施工事例</p>
                  <p>689</p>
                  <p>社</p>
                </div>
                <div class="data flex a-b">
                  <p>モデルハウス</p>
                  <p>112</p>
                  <p>社</p>
                </div>
                <div class="data flex a-b">
                  <p>土地・建売</p>
                  <p>156</p>
                  <p>社</p>
                </div>
              </div>
              <div class="search_c flex a-c">
                <button class="s_btn" id="reqInfo">まとめて資料請求する</button>
                <div class="search flex a-c">
                  <input type="text" placeholder="会社名やキーワードで検索" />
                  <button class="sBtn" id="sBtn">
                    <img src="{{ asset("/./assets/img/search_icon.png") }}" alt="" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="menuBar flex col a-c j-c">
          <div class="container">
            <div class="t_part flex j-c a-c">
              <div class="ribbon flex col a-c">
                <img
                  src="{{ asset("/./assets/img/heart_noti.png") }}"
                  class="heart"
                  alt="heart"
                />
                <div class="count">0 件</div>
                <div class="label">お気に入り</div>
              </div>
              <div class="ribbonSp">
                <div class="ribbonSpimg">
                  <div class="noti">126</div>
                </div>
                <p>お気に入り</p>
              </div>
              <img src="{{ asset("/./assets/img/title.png") }}" class="title" alt="title" />
              <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <!-- Sliding Menu -->
              <div class="ham_menu" id="ham_menu">
                <button class="close-btn" onclick="toggleMenu()">×</button>
                <div class="menu-items flex col">
                  <a href="{{ url("#") }}"> 工務店・ハウスメーカーを探す </a>
                  <a href="{{ url("#") }}">施工事例を見る</a>
                  <a href="{{ url("#") }}">住宅イベントに行く</a>
                  <a href="{{ url("#") }}">モデルハウスを見る</a>
                  <a href="{{ url("#") }}"> リノベーション・リフォーム事例を見る </a>
                  <a href="{{ url("#") }}">土地・建売・投資用物件を探す</a>
                  <a href="{{ url("#") }}">家づくりコラム</a>
                  <a href="{{ url("#") }}">家作り基礎講座</a>
                </div>
              </div>
            </div>
            <div class="menu_list flex j-b">
              <a href="{{ url("#") }}" class="menu flex j-c a-c">
                工務店・ハウス<br />メーカーを探す
              </a>
              <a href="{{ url("#") }}" class="menu flex col j-c a-c">施工事例を<br />見る</a>
              <a href="{{ url("#") }}" class="menu flex col j-c a-c"
                >住宅イベントに<br />行く</a
              >
              <a href="{{ url("#") }}" class="menu flex col j-c a-c"
                >モデルハウスを<br />見る</a
              >
              <a href="{{ url("#") }}" class="menu flex col j-c a-c">
                リノベーション・<br />リフォーム事例を見る
              </a>
              <a href="{{ url("#") }}" class="menu flex col j-c a-c"
                >土地・建売・<br />投資用物件を探す</a
              >
              <a href="{{ url("#") }}" class="menu flex col j-c a-c">家づくりコラム</a>
              <a href="{{ url("#") }}" class="menu flex col j-c a-c">家作り基礎講座</a>
            </div>
            <div class="ad">
              <div class="sideBar">新築・注文住宅サイト イエタッタ</div>
              <img src="{{ asset("/./assets/img/ad1.png") }}" class="ad_img" alt="" />
              <a href="{{ url("#") }}" class="ad_more flex a-c">
                <p>詳しくはこちら</p>
                <img src="{{ asset("/./assets/img/ad_more.png") }}" alt="more" />
              </a>
            </div>
            <img src="{{ asset("/./assets/img/ad_sp.png") }}" class="adSp" alt="adSp" />
          </div>
        </div>
      </div>
    </header>