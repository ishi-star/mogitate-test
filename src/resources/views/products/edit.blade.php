@extends('layouts.app')

@section('content')
  <h1>商品編集</h1>
  <form action="{{ url('/products/' . $product->id . '/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>商品名</label>
    <input type="text" name="name" value="{{ $product->name }}" required>

    <label>値段</label>
    <input type="number" name="price" value="{{ $product->price }}" required>

    <label>商品画像</label>
    <input type="file" name="image">

    <label>季節</label><br>
    @foreach(['春', '夏', '秋', '冬'] as $season)
      <label>
        <input type="checkbox" name="season[]" value="{{ $season }}" {{ strpos($product->season, $season) !== false ? 'checked' : '' }}>
        {{ $season }}
      </label>
    @endforeach

    <label>商品説明</label>
    <textarea name="description" required>{{ $product->description }}</textarea>

    <button type="submit">更新する</button>
  </form>
@endsection