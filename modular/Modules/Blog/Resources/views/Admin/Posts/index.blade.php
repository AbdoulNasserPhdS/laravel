<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Buttons') }}
            </h2>
          
        </div>
    </x-slot>

    {{-- <p class="py-4 text-gray-600 dark:text-gray-400">Listes des postes</p> --}}
    <p class="py-4 text-gray-600 dark:text-gray-400"></p>

    <h2 class="flex items-center justify-center  text-gray-800 text-3xl font-semibold">Liste des postes</h2>



    <div class="py-6">
        @if (session('succes'))


        <h6 class="flex items-center justify-center  text-green-800 text-3xl font-semibold">        {{ session('succes') }}
        </h6>

            
        @endif


                <!-- component -->
            <div class="table w-full p-2">
                <table class="w-full border">
                    <thead>
                        <tr class="bg-gray-50 border-b">
                        
                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    ID
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    Titre
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    Auteur
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    Categorie
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    Date de publication
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin  bg-gray-500 text-gray-100">
                                <div class="flex items-center justify-center">
                                    Action
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                            
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="p-2 border-r">{{ $post->id }}</td>
                            <td class="p-2 border-r" style="background-color: rgb(237, 237, 237);">{{ $post->title}}</td>
                            <td class="p-2 border-r">{{ $post->user->name }}</td>
                            <td class="p-2 border-r">{{ $post->category->name }}</td>
                            <td class="p-2 border-r">{{ $post->created_at->format('d/m/Y')}}</td>

                            <td class="p-2 border-r">

                            





                                <div class="flex justify-center gap-4">



                                    <form action="{{ route('post.destroy',$post) }}" method="POST" class=" text-white hover:shadow-lg text-xs ">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="#FF0000"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6"
                                            x-tooltip="tooltip"
                                            
                                            >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            />
                                            </svg>
                                        </button>
                                    </form>

                                    

                                    
                            
                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('post.edit',$post) }}">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-6 w-6"
                                        x-tooltip="tooltip"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                        </svg>
                                    </a>
                                    </div>


                                    

                            </td>

                        </tr>
                        @endforeach

                
                    </tbody>
                </table>
            </div>
    </div>
</x-app-layout>
