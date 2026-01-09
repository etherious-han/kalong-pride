@extends('layouts.app')

@section('title', 'Kalong Pride - Little Family With Big Memorys')

@section('content')

<!-- Hero Section -->
@include('components.hero')

<!-- Section Tentang -->
@include('components.tentang')

<!-- Section Member -->
@include('components.member')

<!-- Section Galeri -->
@include('components.galeri')

<!-- Section Komentar -->
<section id="komentar" class="py-20 bg-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold font-tech">
                <span class="text-white">Komentar & </span>
                <span class="text-chrome glow-blue">Testimonial</span>
            </h2>
            <div class="mt-4 w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto"></div>
        </div>
        <p class="text-silver text-center text-lg max-w-3xl mx-auto">
            Section ini akan menampilkan komentar dan testimonial...
        </p>
    </div>
</section>

@endsection
