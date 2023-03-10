<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Buttons') }}
            </h2>
          
        </div>
    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400"></p>
    <h2 class="flex items-center justify-center  text-gray-800 text-3xl font-semibold">Modification utilisateur</h2>

    <div class="py-6">
     
     <!-- component -->
<!-- component -->


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($errors->all() as $error )
                    <span class="block text-red-500">{{ $error }}</span>
                        
                    @endforeach
            

                    <div class="flex items-center justify-center p-12">


                        <form action="{{ route('user.update',$user) }}" method="POST">
                            @csrf
                            @method("PATCH")


                            <div class="mb-5">
                                <label
                                    for="name"
                                    class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                    Name
                                </label>
                                <input
                                    type="input"
                                    name="name"
                                    id="name"
                                    {{-- value="{{$post->title}}" --}}
                                    value="{{ old('name', $user->name) }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                </div>



                                <div class="mb-5">
                                    <label
                                        for="email"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Email
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        {{-- value="{{$post->title}}" --}}
                                        value="{{ old('email', $user->email) }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                





                                
                                <div class="form-check">
                                    <label
                                    for="roles"
                                    class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                    Roles
                                </label>
                                @foreach ($roles as $role )

                                    <input class="form-check-input" id="roles" type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}" @foreach ($user->roles as $userRole )
                                    @if ($userRole->id==$role->id)
                                    checked
                                    @endif
                                        
                                    @endforeach>
                                        <label class="form-check-label" for="{{ $role->id }}">
                                            {{ $role->name}}
                                        </label>

                                @endforeach

                                </div>
                                    

                    
                                <div class="mb-5">
                                    <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                                    >
                                        Enregistrer modification
                                    </button>
                                </div>


                        </form>

                    
                    </div>
                </div>
            </div>
        </div>




    
    </div>
</x-app-layout>
