@extends('layouts.layouts')
@section('title',' 物件お問い合わせ')
@section('contents')
<div id='contactForm'>
    <h2 class='contact-title'>{{ $property->property_name }}　お問い合わせ</h2>
    <div class='form'>
        @if($errors->any())
        <div class='alert alert-danger'>
            <p>入力項目に誤りがあります。</p>
        </div>
        @endif
        <p class=attention>全て必須項目です。</p>
        <form action="" method="post">
            @csrf
            <div class='form-group'>
                <label for="name">氏名</label>
                <input type="text" name="name" class="form-control" />
                @error('name')<div class='error-message'>*{{ $message }}</div>@enderror
            </div>
            <div class='form-group'>
                <label for="email">Eメールアドレス</label>
                <input type="text" name="email" class="form-control" />
                @error('email')<div class='error-message'>*{{ $message }}</div>@enderror
            </div>
            <div class='form-group'>
                <label for="content">お問合せ内容</label>
                <textarea type="text" name="content" class="form-control"></textarea>
                @error('content')<div class='error-message'>*{{ $message }}</div>@enderror
            </div>
            <input type="submit" class='btn btn-info btn-block'>
        </form>
    </div>
</div>
@endsection