
  @extends('layouts.app')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  @endsection

  @section('content')
  <main>
  <div class="create-form__content">
      <div class="create-form__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
          </div>
          <input type="text" name="name" placeholder="商品名を入力" />
          <div class="form__group-title">
            <span class="form__label--item-price">値段</span>
            <span class="form__label--required">必須</span>
          </div>
          <input type="text" name="price" placeholder="値段を入力" />

          <div>
            <span class="form__label--item-price">商品画像</span>
            <span class="form__label--required">必須</span>
          </div>
          <input type="file"  name="image" accept="image/*" required>
          <div>
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須</span>
          </div>
            <input type="checkbox" id="spring" name="season" value="春" required>
            <label for="spring">春</label>
            <input type="checkbox" id="summer" name="season" value="夏" required>
            <label for="summer">夏</label>
            <input type="checkbox" id="autumn" name="season" value="秋" required>
            <label for="autumn">秋</label>
            <input type="checkbox" id="winter" name="season" value="冬" required>
            <label for="winter">冬</label><br>

            <span class="form__label--item-price">商品説明</span>
            <span class="form__label--required">必須</span>
            <div>
              <textarea id="description" name="description" required></textarea>
            </div>
            <button type="submit">登録</button>
        <button type="button" onclick="history.back()">戻る</button>
      </form>
    </div>
  </main>

@endsection