@extends('layouts.app')

@section('title', 'About - Partial views Demo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class ="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-4">
            <h1 class="mb-4">About-Partial Views</h1>
            <p class="lead">Halaman ini mendemonstrasikan pengunaan <strong>partial Views</strong> dengan <code><code>&#64;include</code></code> directive.</p>
        </div>

        <h3 class="mb-4">Tim kami</h3>
        <div class="row">
            @foreach($team as $member)
            <x-team-member
                :name="$member['name'] "
                :role="$member['role'] "
                :theme="$theme"
                :avatar=" ['👩‍💻','👩‍🌾','🤵‍♀️'][$loop->index]"
                :description="'Bergabung sejak 2024 dan kontribusi dalam pengembangan'"
            />
            @endforeach

        </div>

        @include('partials.team-stats', ['theme' => $theme])
    </div>

</div>
@endsection