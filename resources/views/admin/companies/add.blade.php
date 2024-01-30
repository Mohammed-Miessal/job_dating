@extends('components.dash')
@section('content')


    <div class="flex items-center justify-center  p-5 border-b rounded-t">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
            Add <span class="text-gray-500 font-lora"> Company </span>
        </h1>
    </div>

    <div class="p-6 space-y-6">
        <form action="addwiki/create" method="post" enctype="multipart/form-data" id="myForm">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                    <input type="text" name="title" id="title"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Title Max(50 chars)">
                   
                </div>
              
                {{-- <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">image</label>
                    <input type="file" name="image" id="image"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    
                </div> --}}
               

            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-dark bg-gray-100 hover:bg-cyan-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-400 dark:focus:ring-gray-700"
                    type="submit">Save</button>
            </div>

        </form>
    </div>
   



 
@endsection
