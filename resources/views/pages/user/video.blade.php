@extends('layouts.appVideo')

@section('title')
    Video Class
@endsection

@section('content')
    <div class="class">
        <div class="container mx-auto">
            <div class="flex flex-col p-10 space-y-10">
                <div class="title mx-07">
                    <p class="text-sm text-gray-600">Judul Chapter</p>
                    <p class="font-medium text-gray-800 -mb-7 -mt-1">{{ $chapters->title }}</p>
                </div>
                <div class="thumbnail w-4/5 mx-auto">
                    <iframe 
                        class="w-full h-404 rounded-lg shadow-xl outline-none" height="350" 
                        src="https://www.youtube.com/embed/2hoppIV55mc" title="YouTube video player"  title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        name="target"
                        allowfullscreen
                    >
                    </iframe>
                </div>
                <div class="chapter">
                    <h1 class="text-3xl font-medium text-gray-800">List Video</h1>
                    <div class="flex bg-white hover:bg-splide transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3 mt-5">
                        @php
                            $dataAos = 0
                        @endphp
                        @foreach ($video as $videos)
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="{{ $dataAos += 100 }}">
                                {{ $videos->title }}
                            </p>
                            <a href="{{ $videos->video }}" target="target" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="{{ $dataAos += 100 }}">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none"
                                    target="iframe_a">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        @endforeach
                    </div>
                </div>
                <div class="review-dropdown-button relative">
                    <div class="flex flex-col">
                        <div class="flex items-center">
                            <h1 class="text-3xl font-medium text-gray-800">Reviews</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="review-dropdown absolute top-full left-0 flex bg-white hover:bg-splide w-1/2 transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3">
                            <h5>Tuliskan Review Terbaikmu!</h5>
                            <textarea 
                                name="" 
                                class="shadow-xl rounded-xl focus:ring-2 focus:ring-blue-600 outline-none p-5"
                                rows="7"
                                placeholder="Ketik pesan . . . . . . ."
                                style="resize: none;"
                            ></textarea>
                            <div class="flex justify-end -space-x-12">
                                <a href="#">
                                    <button 
                                        class="bg-red-400 hover:bg-red-500 transition duration-300 py-3 px-3 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                        CANCEL
                                    </button>
                                </a>   
                                <a href="#">
                                    <button 
                                        class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-3 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                        SUBMIT
                                    </button>
                                </a>  
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="reviews1">
                    <div class="grid grid-cols-3 gap-8">
                        <div class="" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="{{ asset('images/user.png') }}" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
