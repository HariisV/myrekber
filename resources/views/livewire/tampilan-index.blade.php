@extends('livewire.fronts.layouts.app')
@section('content')
@include('livewire.fronts.home.hero')
<main id="main">
    @include('livewire.fronts.home.services')
    @include('livewire.fronts.home.alur_rekber')
    @include('livewire.fronts.home.payments')
    @include('livewire.fronts.home.faq')
</main>
@endsection


