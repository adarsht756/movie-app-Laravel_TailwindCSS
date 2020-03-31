@extends('main')

@section('content')
    <div class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" class="w-full ">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="w-3 text-orange-500 fill-current">
                        <path fill="currentColor"
                              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
                              class=""></path>
                    </svg>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date']) ->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                         @foreach($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if(!$loop->last), @endif
                        @endforeach
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <div class="text-white font-semibold">Featured Cast</div>
                    <div class="flex mt-4">
                        @foreach($movie['credits']['crew'] as $crew)
                            @if( $loop->index < 2 )
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                @if(count($movie['videos']['results']) > 0)

                    <div class="mt-12">
                        <a target="_blank"
                           href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                           class="text-gray-900 inline-flex items-center bg-orange-400 rounded-full px-5 py-3 hover:bg-orange-500 transition ease-in-out duration-150">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                 role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 class="w-5 fill-current">
                                <path fill="currentColor"
                                      d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"
                                      class=""></path>
                            </svg>
                            <span class="ml-2">Play Trailor</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($movie['credits']['cast'] as $cast)
                    @if($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}"
                                     class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                                <div class="text-sm text-gray-400">
                                    {{ $cast['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($movie['images']['backdrops'] as $image)
                    @if($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}"
                                     class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
