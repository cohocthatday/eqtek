@extends('dashboard')
@section('content')
@include('top-page.partials.banner')
<div class="container-fluid">
    <div class="wrapper">
@include('top-page.partials.about-us')
@include('top-page.partials.services')
@include('top-page.partials.customer')
@include('top-page.partials.product')
@include('top-page.partials.environment')
@include('top-page.partials.focus')
@include('top-page.partials.news')
    </div>
</div>
@endsection
