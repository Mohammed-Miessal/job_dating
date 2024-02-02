@extends('components.dash')
@section('content')
    <div class="flex justify-end items-center w-full md:w-full">
        <!-- Search -->
        <div class="w-full"></div>
        <!-- / Search -->
        <!-- Div avec le bouton aligné à droite -->

    </div>


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                Title :
                <h1>{{ $announcement->title }}</h1>
                description :
                <p>{{ $announcement->description }}</p>
                Content :
                <p>{{ $announcement->content }}</p>
                <p>Company by: {{ $announcement->company->name }}</p>
                <p>Created by: {{ $announcement->user->name }}</p>
                Image :
                @if ($announcement->image)
                    <img src="{{ asset('storage/announcement_images/' . $announcement->image) }}" alt="Announcement Image"
                        class="w-16 h-16">
                @else
                    <p>No image available</p>
                @endif

                <!-- </header> -->
            </article>
        </div>
    </main>
@endsection
