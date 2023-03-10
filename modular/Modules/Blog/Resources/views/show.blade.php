<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('blog::layouts.navigation')


                      <!-- component -->
           <div class="max-w-screen-xl mx-auto">
               
                  <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                      <div class="absolute left-0 bottom-0 w-full h-full z-10"
                          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="{{ str_contains($post->image, 'posts/') ? asset('/storage/'. $post->image) : $post->image }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                        <div class="p-4 absolute bottom-0 left-0 z-20">
                            <a href="#" class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
                            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                                {{ $post->title }}
                            </h2>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/97.jpg"
                                  class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-200 text-sm"> {{ $post->user->name }}</p>
                                    <p class="font-semibold text-gray-400 text-xs">{{ $post->created_at->format('d/m/Y')}}</p>
                                </div>
                            </div>
                        </div>
                  </div>

                  <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                      <p class="pb-6">{{ $post->content }}</p>
                  </div>
              
            </div>

              

        </div>
    </body>
</html>
