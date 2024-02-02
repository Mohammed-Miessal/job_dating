@extends('components.dash')
@section('content')
    <div class="flex items-center justify-center  p-5 border-b rounded-t">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
            Add <span class="text-gray-500 font-lora">Announcement </span>
        </h1>
    </div>

    <div class="p-6 space-y-6">

        <form action="{{ route('announcements.update', $announcement->id) }}" method="post" id="myForm"
            enctype="multipart/form-data">


            @csrf
            @method('PUT')


            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ $announcement->title }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Title Max(50 chars)">

                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                    <input type="text" name="description" id="description" value="{{ $announcement->description }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Description Max(100 chars)">

                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="company_id" class="text-sm font-medium text-gray-900 block mb-2">Company</label>
                    <select id="company_id" name="company_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled>Choose a Company</option>

                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"
                                {{ $announcement->company_id == $company->id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">image</label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">

                </div>


                <div class="col-span-full">
                    <label for="content" class="text-sm font-medium text-gray-900 block mb-2">Content</label>

                    <textarea name="content" id="content"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        {{ $announcement->content }}
                    </textarea>
                </div>


            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-dark bg-gray-100 hover:bg-cyan-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-400 dark:focus:ring-gray-700"
                    type="submit">Save</button>
            </div>

        </form>
    </div>
@endsection
