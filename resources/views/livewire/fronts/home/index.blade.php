@extends('fronts.layouts.app')
@section('content')
@include('fronts.home.hero')
<main id="main">
    @include('fronts.home.services')
    @include('fronts.home.alur_rekber')
    @include('fronts.home.payments')
    @include('fronts.home.faq')
</main>
@endsection


