@extends('index')
@section('title', 'status')
@section('content')

<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #c1c1c1;
        border-radius: 20px;
    }

    .card {
        position: relative;
        overflow: hidden;
    }

    .card figcaption {
        position: absolute;
        bottom: -4rem;
        background: rgba(0, 0, 0, 0.7);
        padding: 1rem 0;
        color: #fff;
        width: 100%;
        text-align: center;
        transition: all 200ms;
    }

    .card:hover figcaption {
        bottom: 0;
    }
</style>

<!-- Main Content-->
<main class="container-fluid mt-5 mb-4">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="container-lg mt-5">
                <div class="row" style="height: 35vh">
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 35vh; margin-top:5vh;">
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="lab">
                            <figure class="card h-100 bg-primary rounded-3">
                                <img src="" alt="">
                                <figcaption>Lab MIKE</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection