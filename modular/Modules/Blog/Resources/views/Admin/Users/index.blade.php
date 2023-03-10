<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Buttons') }}
            </h2>
          
        </div>
    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400"></p>
    <h2 class="flex items-center justify-center  text-gray-800 text-3xl font-semibold">Listes des utilisateurs</h2>

    <div class="py-6">
        @if (session('succes'))


        <h6 class="flex items-center justify-center  text-green-800 text-3xl font-semibold">        {{ session('succes') }}
        </h6>

            
        @endif
     <!-- component -->
<!-- component -->
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col">
                        <span class="flex justify-center gap-4  px-2 py-1 text-x font-bold bg-gray-500 text-gray-100">
                            Name
                        </span>
                    </th>
                    <th scope="col">
                        <span class="flex justify-center gap-4  px-2 py-1 text-x font-bold bg-gray-500 text-gray-100">
                            Email
                        </span>
                    </th>
                    <th scope="col" >
                        <span class="flex justify-center gap-4  px-2 py-1 text-x font-bold bg-gray-500 text-gray-100">
                            Roles
                        </span>
                    </th>
                    <th scope="col" >
                        <span class="flex justify-center gap-4  px-2 py-1 text-x font-bold bg-gray-500 text-gray-100">
                            Action
                        </span>
                    </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @foreach ($users as $user)
                        
                    <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4">
                        <span class="flex justify-center gap-4 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                        {{ $user->name }}
                        </span>
                    </td>
            
                    <td class="px-6 py-4">
                        <span class="flex justify-center gap-4  rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                        {{ $user->email }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-4">
                    
                            @foreach ($user->roles()->get()->pluck('name')->toArray() as $role)
                            
                            <span class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                {{ $role}}
                            </span>
            
                            @endforeach
            
                    
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-4">
                        <a x-data="{ tooltip: 'Delete' }" href="#">
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
                        </a>
                        <a x-data="{ tooltip: 'Edite' }" href="{{ route('user.edit',$user) }}">
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
