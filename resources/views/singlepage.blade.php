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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>


<body class=" bg-white dark:bg-gray-800  ">

    <!-- Header -->

    <div class="w-full px-3 mb-6  mx-auto  bg-white rounded-xl dark:bg-gray-800  border-b dark:border-gray-600  ">
        <div class="flex flex-row justify-between  max-w-screen-xl  md:mx-auto md:items-center md:justify-between md:flex-row md:px-2 lg:px-2 mx-5  ">
            <div class="p-4  flex flex-row items-center justify-between">
                <img class="h-8 " src="{{ asset('images/logo.png') }}" alt="Logo image" />
            </div>
            <div class="flex items-center   ">
                <a class="group flex items-center justify-between gap-4 rounded-lg border border-blue-600 bg-blue-600 px-4 py-2  transition-colors hover:bg-transparent focus:outline-none focus:ring" href="/login">
                    <span class="text-sm   text-white transition-colors group-hover:text-blue-600 group-active:text-blue-500">
                        Login
                    </span>

                    <span class="shrink-0 rounded-full border border-current bg-white  text-blue-600 group-active:text-blue-500">
                        <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                <!-- dark mode button -->
                <button id="theme-toggle" type="button" class="ml-5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4  dark:focus:ring-gray-700 rounded-lg text-sm ">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- /dark mode button -->
            </div>
        </div>
    </div>

    <!-- / Header -->



    <!-- content -->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-800 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl  ">

                <!-- For test  -->
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    Best practices for successful prototypes
                </h1>
                <p class="text-justify dark:text-gray-300">
                    <!-- // ! Here will be the announcement  -->
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure amet quis quod facilis, odit fugit deleniti ab eligendi, placeat earum, mollitia animi tenetur. Ad libero culpa aut velit fuga fugit, possimus excepturi, amet optio ipsum dolore est. Inventore quia eum sunt officiis iusto illum, ipsa quas placeat cum, adipisci itaque ad expedita possimus eius neque rerum perspiciatis! At, architecto! Porro tenetur saepe inventore? Cumque provident mollitia quam, iste numquam sint possimus aperiam? Sapiente repellat expedita dolore at vel tempore voluptatibus iusto rerum quisquam, ratione ipsum ex reprehenderit accusantium magnam pariatur aspernatur facilis non fugiat. Distinctio perspiciatis, soluta, quia at omnis modi dicta molestiae magni magnam repellat accusamus officia libero voluptate accusantium aspernatur, suscipit autem possimus! Tempora ea minus est nulla maiores, illo delectus! Delectus repellendus facilis fuga laudantium sed distinctio excepturi, tempore, maxime temporibus qui minus asperiores quidem? Unde illo alias saepe reprehenderit, similique veniam numquam sequi iure ullam qui? Pariatur quibusdam repellendus inventore laboriosam illum exercitationem fugiat excepturi corrupti magni quis, aliquid hic deleniti voluptatem alias ea voluptatum enim eligendi unde labore numquam optio? Temporibus nesciunt magni eveniet, magnam aliquid quo! Aspernatur necessitatibus nam corporis, distinctio libero dolorem quisquam expedita accusamus recusandae. Vel autem maiores, cupiditate exercitationem a architecto, nostrum iste alias hic illum harum! Doloremque excepturi modi itaque commodi eaque amet iure repellat, blanditiis laborum, ex enim laudantium quaerat, sunt fugiat pariatur numquam voluptate eligendi. Odit, sint quisquam. Asperiores maxime a illum debitis, maiores obcaecati est reiciendis dolor dicta repellat consequuntur repellendus quis quo velit explicabo qui vero! Vero, quibusdam. Nulla quam rerum molestiae debitis? Nisi asperiores amet, cupiditate cum sed nostrum quis quisquam. Numquam eos asperiores, cupiditate nostrum reprehenderit qui aliquam, quo ea explicabo ullam doloribus, voluptatum quia est? Architecto corporis, eius, corrupti quos fugiat mollitia quidem incidunt ducimus libero perferendis amet voluptatem aliquam dolorem? Velit repudiandae quae culpa voluptate repellendus ut amet, soluta minima omnis quaerat ipsam obcaecati praesentium odio vero pariatur totam quas aperiam earum? Voluptas aperiam laborum quod animi. Quas ex rem eius consequatur sit adipisci repudiandae, natus aperiam error cupiditate quia facilis, ipsum aliquam corrupti? Inventore ipsum tempore voluptatibus, maiores cumque atque quis voluptas exercitationem ipsa reiciendis iusto rerum dolores cupiditate dolorem nam! Modi sed a repudiandae esse, nesciunt nobis ad porro cupiditate quidem voluptate ratione accusantium culpa quibusdam quos voluptatum? Cum, placeat. Aliquam maxime quas soluta delectus pariatur provident dolorem labore culpa blanditiis obcaecati incidunt doloremque inventore tenetur corrupti deserunt earum dolores adipisci distinctio sed quod nihil modi, sapiente tempore necessitatibus! Hic minus quibusdam ad modi aliquid quis dolor doloremque et atque qui quo tenetur voluptas quia officiis in corporis natus tempore similique, magni ratione alias voluptatem. Sequi nam veniam iste, magnam dicta nesciunt reprehenderit numquam, officiis mollitia nulla ratione a eaque culpa porro! Quod impedit veniam aut minima illum, quae consequatur. Assumenda error pariatur eos. Porro saepe laudantium accusamus iste ipsam modi perspiciatis, voluptas voluptates excepturi labore necessitatibus expedita harum quisquam dolor nesciunt possimus reiciendis cumque ex soluta obcaecati itaque animi vitae. Ex inventore delectus quisquam aut esse blanditiis ipsa nihil.

                </p>
                <!-- For test  -->

            </article>
        </div>
    </main>

    <!-- content -->






    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>