@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="text-center text-white mb-8">
            <h1 class="text-3xl font-bold">{{ __('Halaman Dashboard Login') }}</h1>
            <h1 class="text-3xl font-bold">{{ __('Selamat datang di Halaman Dashboard') }}</h1>
        </div>

        <!-- Your existing content -->
        <div class="flex justify-center items-center">
            <div class="w-full max-w-md">
                <div class="-primary shadow-md rounded-lg px-8 py-10 mx-4 my-8">
                    <div class="text-sm mb-4 text-center text-white">
                        @if (session('status'))
                            <div class="bg-green-100 border border-green-800  text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <span class="block sm:inline">{{ session('status') }}</span>
                            </div>
                        @endif

                        @auth
                            <p>{{ __('Kamu sudah login!') }}</p>
                        @endauth
                        @guest
                            <p>{{ __('Kamu belum login, silahkan login') }}</p>
                        @endguest
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        background: linear-gradient(to bottom right, #6c63ff, #6a82fb);
        color: #fff;
        font-family: 'Roboto', sans-serif;
    }

    .primary {
        color: #6c63ff;
    }

    .secondary {
        color: #fff;
    }

    .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .full-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
</style>

<script src="https://kit.fontawesome.com/yourcode.js"></script>

<div class="full-background"
    style="background-image: url('https://source.unsplash.com/random/1600x900'); background-size: cover; background-position: center;">
</div>
