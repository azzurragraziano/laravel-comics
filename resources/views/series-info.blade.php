@extends('layouts.app')

@section('page_title')
    series info
@endsection

@section('main_content')
    <section class="comics-info">
        <div class="blue-bg"></div>

        {{-- thumb --}}
        <div class="thumb">
            <div class="small-container">
                {{-- img --}}
                <img src="{{$current_series['thumb']}}" alt="{{$current_series['title']}}">

                {{-- label --}}
                <div id="comic-book" class="label">comic book</div>
                <div id="view-gallery" class="label">view galley</div>
            </div>
        </div>

        {{-- title and description --}}
        <div class="comics-info-top">
            <div class="small-container">

                <div class="row flex">

                    {{-- info, price and description --}}
                    <div class="left-col">
                        {{-- current series title --}}
                        <h1>{{$current_series['title']}}</h1>
            
                        {{-- price --}}
                        <span class="price-and-info">
                            <span id="price">
                                <span>U.S. Price: </span> {{$current_series['price']}}
                            </span>
            
                            <span id="available">
                                available
                            </span>
            
                            <span id="check">
                                Check Availability 
                                <i class="fa-solid fa-sort-down"></i>
                            </span>
                        </span>

                        {{-- description --}}
                        <div class="description">
                            <p>
                                {{$current_series['description']}}
                            </p>
                        </div>
                    </div>

                    {{-- advertisement --}}
                    <div class="right-col">
                        <div>
                            advertisement
                        </div>

                        <img src="{{asset('../images/adv.jpg')}}" alt="apply now">
                    </div>

                </div>
            </div>
        </div>

        {{-- talent and specs --}}
        <div class="comics-info-bottom">
            <div class="small-container">
                <div class="row flex">
                    {{-- talent --}}
                    <div class="col">
    
                        {{-- talent list --}}
                        <h3>Talent</h3>
    
                        <ul class="talent-list">
                            {{-- artist --}}
                            <li class="flex">
                                <h4>Art by:</h4>
    
                                <span>
                                    @foreach ($current_series['artists'] as $artist)
                                        <a href="#">
                                            {{$artist}} {{!$loop->last ? ',' : ''}}
                                        </a>
                                    @endforeach
                                </span>
                            </li>
    
                            {{-- writers --}}
                            <li class="flex">
                                <h4>Written by:</h4>
    
                                <span>
                                    @foreach ($current_series['writers'] as $writer)
                                        <a href="#">
                                            {{$writer}} {{!$loop->last ? ',' : ''}}
                                        </a>
                                    @endforeach
                                </span>
                            </li>
                        </ul>
    
                    </div>
    
                    {{-- specs --}}
                    <div class="col">
                        
                        {{-- specs list --}}
                        <h3>Specs</h3>

                        <ul class="specs-list">
                            {{-- series --}}
                            <li class="flex">
                                <h4>Series:</h4>
    
                                <span> 
                                    {{$current_series['series']}}
                                </span>
                            </li>
    
                            {{-- U.S.Price --}}
                            <li class="flex">
                                <h4>U.S. Price:</h4>
    
                                <span> 
                                    {{$current_series['price']}}
                                </span>
                            </li>

                            {{-- on sale date --}}
                            <li class="flex">
                                <h4>On Sale Date: </h4>
    
                                <span> 
                                    {{$current_series['sale_date']}}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection