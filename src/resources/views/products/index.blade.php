<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="index.php">
        mogitate
      </a>
    </div>
  </header>
  <main>
    
    <div class="product__item">
      <h2>商品一覧</h2>
      <form class="product__item-register" action="" method="get">
        <div class="product__item-add">
          <button class="product__item-add-submit" type="submit">＋商品を追加</button>
        </div>
      </form>
    </div>
    <div class="container">
      <div>
        <form method="GET" action="{{ url('/') }}">
          <input type="text" name="search" placeholder="商品名で検索" value="{{ request('search') }}">
          <button type="submit">検索</button>
          <div class=price_text>
            価格順で表示
          </div>
          <select name="sort" onchange="this.form.submit()">
              <option value="">価格で並べ替え</option>
              <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>安い順</option>
              <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>高い順</option>
          </select>
        </form>
      </div>
      <div>

      </div>
    </div>
  </main>
</body>
</html>