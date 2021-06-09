@extends('layouts.layouts')
@section('title',' 物件お問い合わせ')
@section('contents')
<div id='contactForm'>
    <h2 class='contact-title'>{{ $property->property_name }}　お問い合わせ完了</h2>
    <p class='thanx-message'>この度はお問い合わせいただき誠にありがとうございました。<br>改めて担当者よりご連絡をさせていただきます。</p>
</div>
@endsection