<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>

    <!-- Header -->

    <div class="w-full bg-gray-900 ">
        <div class="flex flex-row justify-between  max-w-screen-xl  md:mx-auto md:items-center md:justify-between md:flex-row md:px-2 lg:px-2 mx-5  ">
            <div class="p-4  flex flex-row items-center justify-between">
                <a href="" class="w-full  text-lg font-semibold tracking-widest  rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                    <img class="h-5 " src="{{ asset('images/logo-white.png') }}" alt="Logo" />
                </a>
            </div>
            <div class="">
                <a class=" flex  px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="login">
                    <img class="h-5 mr-3" src="{{ asset('images/icons8-user-100.png') }}" alt="user icon" /> Login</a>
            </div>
        </div>
    </div>

    <!-- / Header -->





</body>

</html>