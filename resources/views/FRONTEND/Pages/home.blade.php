@extends('FRONTEND.master')
@section('content')
    <!-- carousel -->
    @include('FRONTEND.Components.carousel', ['title' => 'Profile', 'subtitle' => 'User Profile'])
    <!-- /carousel -->

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <img src="https://blissfulplans.com/wp-content/uploads/2020/06/christian-wedding.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="https://blissfulplans.com/wp-content/uploads/2020/06/christian-wedding.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
