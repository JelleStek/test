@extends('layout/layout')

@section('content')
    <section class="hero" style="background-image: url({{asset('images/hero.jpg')}})">
        <div class="container">
            <div class="row vh-100 align-content-center justify-content-center align-items-center">
                <div class="col-12">
                    <div class="content">
                        <div class="top">
                            <span><h1>Welcome</h1><h1>To</h1><h1>The</h1></span>
                        </div>
                        <div class="bottom">
                            <span><h1>New</h1><h1>Future</h1></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
