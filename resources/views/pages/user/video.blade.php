@extends('layouts.appVideo')

@section('title')
    Video Class
@endsection

@section('content')
    <div class="class">
        <div class="container mx-auto">
            <div class="flex flex-col p-10 space-y-10">
                <div class="title mx-07">
                    <p class="text-sm text-gray-600">Pembukaan</p>
                    <p class="font-medium text-gray-800 -mb-7 -mt-1">Materi Dasar</p>
                </div>
                <div class="thumbnail w-4/5 mx-auto">
                    {{-- <iframe src="" name="iframe_a" ></iframe> --}}
                    <video controls class="w-full h-404 rounded-lg outline-none">
                        <source src="videos/sombong.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="chapter">
                    <h1 class="text-3xl font-medium text-gray-800">List Chapter</h1>
                    <div class="flex bg-white hover:bg-splide transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3 mt-5">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="videos/tes.mp4">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none"
                                    target="iframe_a">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="videos/sombong.mp4">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    PLAY VIDEO
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection