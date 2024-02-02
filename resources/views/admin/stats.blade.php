@extends('components.dash')
@section('content')
    <div class=" mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl ">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="text-center md:border-r">
                <div
                    class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-teal-accent-400 sm:w-12 sm:h-12 bg-mainColor">
                    <svg class="w-8 h-8 text-teal-900 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
                <h6 class="text-4xl  text-purple-600 font-custom">
                   {{ $userCount }}
                </h6>
                <p class="mb-2 font-bold text-md ">Users</p>
            </div>

            <div class="text-center md:border-r">
                <div
                    class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-teal-accent-400 sm:w-12 sm:h-12 bg-mainColor">
                    <svg class="w-8 h-8 text-teal-900 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
                <h6 class="text-4xl  text-purple-600 font-custom">
                    {{ $companyCount }}
                </h6>
                <p class="mb-2 font-bold text-md">Companies</p>
            </div>

            <div class="text-center md:border-r">
                <div
                    class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-teal-accent-400 sm:w-12 sm:h-12 bg-mainColor">
                    <svg class="w-8 h-8 text-teal-900 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
                <h6 class="text-4xl  text-purple-600 font-custom">
                    {{ $announcementCount }}
                </h6>
                <p class="mb-2 font-bold text-md">Announcements</p>
            </div>

            <div class="text-center ">
                <div
                    class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-teal-accent-400 sm:w-12 sm:h-12 bg-mainColor">
                    <svg class="w-8 h-8 text-teal-900 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
                <h6 class="text-4xl  text-purple-600 font-custom">
                    XXX
                </h6>
                <p class="mb-2 font-bold text-md">XXX</p>
            </div>
        </div>
    </div>
@endsection
