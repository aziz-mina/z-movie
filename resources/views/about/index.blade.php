@extends('layouts.main')

@section('title')
{{'Z Movie | About us' }}
@endsection

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-2xl font-semibold	text-center">
             <i class="fas fa-play-circle text-orange-500 mx-1"></i>Z Movie  
        </h2>
        <p class="text-gray-300 mt-4 text-center"> Z Movie is a movies Website based on 
            <a href="https://www.themoviedb.org/"> MovieDB </a> ,
            Z Movie <br>  Website contains information about popular ,trending <br>  movies , casts , traillers , posters , details of every movies <br>  also all tv 
            shows , actors and all of their movies known for.  
        </p>
        <h2 class="uppercase tracking-wider text-xl mt-8 mb-2 font-semibold text-center">
            Developed by 
        </h2>

        <img src="/img/mina.jpg" class="w-40 h-40 rounded-full mx-auto">

        <h3 class="uppercase tracking-wider text-sm mt-2 mb-3 font-semibold text-center">
            Eng: Mina Isaac
        </h3>
        <div class="text-center mb-5">
            <a href="https://mina-isaac.com"><i class="fas fa-globe text-3xl mr-2"></i></a>
            <a href="https://github.com/mina-isaac-99"><i class="fab fa-github text-3xl mr-2"></i></a>
            <a href="https://linkedin.com/in/minaisaac"><i class="fab fa-linkedin text-3xl"></i></a>
        </div>
        
    </div>
@endsection
