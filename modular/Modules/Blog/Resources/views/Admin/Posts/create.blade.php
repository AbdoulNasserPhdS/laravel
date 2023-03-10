<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Buttons') }}
            </h2>
          
        </div>
    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400"></p>
    <h2 class="flex items-center justify-center  text-gray-800 text-3xl font-semibold">Creation poste</h2>


    <div class="py-6">
        <!-- component -->

        {{-- <h6>{{ $post->title }}</h6> --}}



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($errors->all() as $error )
                    <span class="block text-red-500">{{ $error }}</span>
                        
                    @endforeach
            

                    <!-- component -->
                    <div class="flex items-center justify-center p-12">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="mx-auto w-full max-w-[550px] bg-white">
                            
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")
    


                            <div class="mb-5">
                            <label
                                for="title"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Title
                            </label>
                            <input
                                type="input"
                                name="title"
                                id="title"
                                {{-- value="{{$post->title}}" --}}
                                value="{{ old('title')}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>



                            <div class="mb-5">
                                <label
                                    for="content"
                                    class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                    Content
                                </label>
                                <input
                                    type="textarea"
                                    name="content"
                                    id="content"
                                    {{-- value={{ $post->content }} --}}
                                    value="{{ old('content') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>




                            <div class="mb-5">
                                <label
                                    for="email"
                                    class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                    Categorie
                                </label>


                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($categories as $categorie )
                                        <option value="{{ $categorie->id }}"></option>
                                    @endforeach
                                </select>
                            </div>

                    
                            <div class="mb-6 pt-4">
                            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                                Upload File
                            </label>
                    

                            <input
                            type="file"
                            name="image"
                            id="image"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                     
                            </div>
                    
                            <div>
                            <button type="submit"
                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                            >
                                Souvegarder
                            </button>
                            </div>
                        </form>
                        </div>
                    </div>






                </div>


            </div>
        </div>


    </div>
</x-app-layout>
