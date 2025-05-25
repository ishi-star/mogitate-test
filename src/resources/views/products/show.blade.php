@extends('layouts.app')

@section('content')
  <h1>商品詳細</h1>
  <div class="product-detail">
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" >
    <h2>{{ $product->name }}</h2>
    <p>価格：{{ $product->price }}円</p>
    <p>季節：{{ $product->season }}</p>
    <p>{{ $product->description }}</p>

    <a href="{{ url('/products/' . $product->id . '/update') }}">編集する</a>
    <form action="{{ url('/products/' . $product->id . '/delete') }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
      @csrf
      <button type="submit">削除する</button>
    </form>
  </div>
@endsection