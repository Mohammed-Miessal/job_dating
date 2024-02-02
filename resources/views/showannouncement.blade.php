@extends('components.app')
@section('content')
    <!-- Main -->


    {{-- <img class="w-full rounded-md h-32 lg:w-32 object-cover"
    src="{{ asset('storage/announcement_images/' . $announcement->image) }}"
    alt="text"> --}}


     <!-- content -->

     <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-800 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl  ">

                <!-- For test  -->
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{$announcement->title}}
                </h1>
                <p class="text-justify dark:text-gray-300">
                    <!-- // ! Here will be the announcement  -->
                  {{$announcement->content}}
                </p>
                <!-- For test  -->

            </article>
        </div>
    </main>

    <!-- content -->




    <!-- Main -->
@endsection
