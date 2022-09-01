@extends('layouts.app')

@section('page_title')
    comics
@endsection

@section('main_content')
    <section class="series">
        <div class="container">
            {{-- current series --}}
            <div class="current-series-text btn">
                current series
            </div>
    
            {{-- thumb series --}}
            <div class="card-container">
                {{-- foreach per stampare le serie --}}
                @foreach ($series_array as $item)
                    <div class="card">
                        {{-- thumb image --}}
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                        
                        {{-- series title --}}
                        <h3 class="series-title">{{$item['series']}}</h3>
                    </div>
                @endforeach
            </div>
    
            {{-- load more --}}
            <div class="center">
                <span class="load-more btn">
                    <a href="#">LOAD MORE</a>
                </span>
            </div>
        </div>
    </section>

    {{-- main links --}}
    <section class="main-links">
        <div class="container">

            {{-- content --}}
            <ul class="flex">
                <li>
                    <a href="#" class="flex">

                        <!-- icon -->
                        <div class="icon">
                            <img src="{{asset('../images/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        
                        <!-- text -->
                        <div class="text">
                            <span> digital comics </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex">

                        <!-- icon -->
                        <div class="icon">
                            <img src="{{asset('../images/buy-comics-merchandise.png')}}" alt="">
                        </div>
                        
                        <!-- text -->
                        <div class="text">
                            <span> digital comics </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex">

                        <!-- icon -->
                        <div class="icon">
                            <img src="{{asset('../images/buy-comics-subscriptions.png')}}" alt="">
                        </div>
                        
                        <!-- text -->
                        <div class="text">
                            <span> digital comics </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex">

                        <!-- icon -->
                        <div class="icon">
                            <img src="{{asset('../images/buy-comics-shop-locator.png')}}" alt="">
                        </div>
                        
                        <!-- text -->
                        <div class="text">
                            <span> digital comics </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex">

                        <!-- icon -->
                        <div class="icon">
                            <img src="{{asset('../images/buy-dc-power-visa.svg')}}" alt="">
                        </div>
                        
                        <!-- text -->
                        <div class="text">
                            <span> digital comics </span>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </section>
@endsection