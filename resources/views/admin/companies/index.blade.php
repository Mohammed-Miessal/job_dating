@extends('components.dash')
@section('content')
    <div class="flex justify-end items-center w-full md:w-full">
        <!-- Search -->
        <div class="w-full"></div>
        <!-- / Search -->
        <!-- Div avec le bouton aligné à droite -->
        <div class="flex justify-end items-center mb-3 w-44 ">
            <a href="{{ route('companies.create') }}">
                <button type="button" id="createProductModalButton" data-modal-target="createProductModal"
                    data-modal-toggle="createProductModal"
                    class="md:w-auto flex items-center justify-end py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    type="button">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add Company
                </button>
            </a>
        </div>
    </div>


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3 text-center">Id</th>
                <th scope="col" class="px-4 py-3 text-center">Image</th>
                <th scope="col" class="px-4 py-3 text-center">Name</th>
                <th scope="col" class="px-4 py-3  text-gray-400 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3 text-center">{{ $company->id }}</td>
                    <td class="px-4 py-3 text-center">
                        @if ($company->image)
                            <div class="flex flex-col justify-center items-center">
                                <img src="{{ asset('storage/company_images/' . $company->image) }}" alt="Company Image"
                                    class="w-auto h-16">
                            </div>
                        @else
                            No Image
                        @endif
                    </td>

                    <td class="px-4 py-3 text-center">{{ $company->name }}</td>

                    <!-- Actions -->
                    <td class="px-4 py-3  text-center flex flex-row flex-wrap justify-center  ">
                        <!-- Buttons  -->
                        <span
                            class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm dark:bg-gray-800 dark:border-gray-500 ">
                            <a href="{{ route('companies.edit', $company->id) }}">
                                <button
                                    class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                    title="Edit ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>
                            </a>
                            <a href="{{ route('companies.show', $company->id) }}">
                                <button
                                    class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                    title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </a>


                            <form action="{{ route('companies.delete', $company->id) }}" method="post"
                                onsubmit="return confirm('Are you sure you want to delete this company?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="inline-block p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                    title="Delete ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </span>
                        <!-- / Buttons  -->
                    </td>
                    <!-- / Actions -->
                </tr>
            @endforeach



        </tbody>
    </table>


    <div class="flex justify-end items-center w-full md:w-full mt-4">
        {{ $companies->links() }}
    </div>
@endsection
