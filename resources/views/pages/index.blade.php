@extends('layouts.main-layout')

@section('content')



        

            <section class="black-bar">

                <div class="container-cards">
                @foreach ($comics as $comic)
                    <div class="cards">
                        <div class="prod-card">
                            <img src="https://www.rivistaundici.com/wp-content/uploads/2023/05/GettyImages-1467624093.jpg?x59145" alt="">
                        </div>
                        <div class="thumb-title">
                            {{$comic["series"]}}
                        </div>
                    </div>
                @endforeach
                    <div class="button">
                        <a href="#"> LOAD MORE </a>
                    </div>
                </div>

            </section>
            
       

@endsection



