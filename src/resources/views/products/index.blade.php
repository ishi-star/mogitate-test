@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <main>
    <div class="product__item">
      <h1>商品一覧</h1>

        <div class="product__item-add">
          <!-- <a href="{{ route('products.register') }}" class="product__item-add-submit">＋商品を追加</a> -->
          <a href="{{ route('products.register') }}">＋商品を追加</a>

        </div>
      </form>
    </div>
    <div class="product">
    <div class="container">
      <div>
        <form method="GET" action="{{ url('/') }}">
        @csrf
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
        <img src="" alt="">
      </div>
    </div>
    <style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }

  svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>
    <div class="products">
    @foreach ($products as $product)
        <div class="product-card">
          <a href="{{ route('products.show', $product->id) }}">
            <img class="products__card-item" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" >
          </a>
          <p>{{ $product->name }}</p>
          <p>{{ $product->price }}円</p>
            <!-- <p>{{ $product->description }}</p> -->
        </div>
    @endforeach
      <div class="pagination">
      {{ $products->links() }}
      </div>
    </div>
    </div>
  </main>
  @endsection