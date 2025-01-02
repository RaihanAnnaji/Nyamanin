@extends('layouts.front.app')
@section('description')
Nyaman.in, cari kost dan Kontrakan makin mudah hanya di Nyaman.in 
@endsection
@section('title')
Nyaman.in
@endsection


@section('content')
@include('front.banner')
<br><br><br>
@if ($promo->count() > 0)
@include('front.sliderCard')
@endif
<br><br><br>
@include('front.cardContent')
<br><br><br>
@include('front.byKota')
<br><br><br>
{{-- @include('layouts.front.footer') --}}

@endsection