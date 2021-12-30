@extends('layouts.main')

@section('container')

    <div class="">
        <h1 class="text-center mb-5">Halaman About</h1>
        <h3 class="text-center">{{ $name }}</h3>
        <p class="text-center"><strong>"Remaja yang cantik, kuat dan kemandirian yang tinggi"</strong></p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle mb-3" style="display:block; margin:auto">
    </div>
@endsection
