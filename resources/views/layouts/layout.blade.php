@section('content1')
<body>
  <div class="container-sm">
    <div class="row justify-content-sm-center">
      <div class="col-4">
        <div class="input-group">
          <input class="form-control mr-sm-2" type="search" placeholder="料理名・食材でレシピを検索" aria-label="Search">
          <button type="button" class="btn btn-outline-danger"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
  </div>
  
  @yield('content2')
  
  <div class ="footer">
    <div class ="row justify-content-md-center">
      <div class="col-2">
        <h5>お酒カテゴリーから探す</h5>
        <ul>
          <li>
            <a href="/categories/beer" class="">
              <span>ビール
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/redwine" class="">
              <span>赤ワイン
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/whitewine" class="">
              <span>白ワイン
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/whiskyandsoda" class="">
              <span>ハイボール
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/sake" class="">
              <span>日本酒
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/remonsour" class="">
              <span>レモンサワー
              </span>
            </a>
          </li>
      </ul>
      </div>
      <div class="col-2">
        <h5>食材から探す</h5>
          <ul>
            <li>
              <a href="/categories/vegetable" class="">
                <span>野菜
                </span>
                </span>
              </a>
            </li>
            <li>
              <a href="/categories/beef" class="">
                <span>お肉
                </span>
                </span>
              </a>
            </li>
            <li>
              <a href="/categories/fish" class="">
                <span>お魚
                </span>
              </a>
            </li>
          </ul>
      </div>
      <div class="col-2">
        <h5>調理時間から探す</h5>
        <ul>
          <li>
            <a href="/categories/5minits" class="">
              <span>５分
              </span>
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/10minits" class="">
              <span>１０分
              </span>
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/15minits" class="">
              <span>１５分
              </span>
            </a>
          </li>
          <li>
            <a href="/categories/20minits" class="">
              <span>２０分
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>  
</body>


@endsection