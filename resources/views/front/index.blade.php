@extends('front.main')
@section('content')

<div class="home-banner text-white mb-4">
    <div class="container page__container">
        <h1 class="display-4 bold" data-aos="fade-up" data-aos-duration="800">SMARTDESK e-LEARNING PORTAL
        </h1>
        <p class="lead mb-5" data-aos="fade-up" data-aos-duration="1000">
            Please select your institution/centre of study to login to your eLearning platform
        </p>

    </div>
</div>

<div class="container page__container">
    <h2 class="bold m-4 text-center p-4">institutions </h2>


    <div class="d-flex justify-content-around pb-4">

        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="card card__course card__course__animate">
                    
                        <img src="{{ asset('front_assets/img3.jpg')}}" style="width:100%;" alt="Card image cap">
                        <span class="play-button">

                        </span>
                    

                    <div class="p-3 text-center border-bottom">
                        <div class="bold mb-2">
                            <a href="" class="text-body">
                                <span class="course__title">Oliver's Village</span>
                            </a>
                        </div>


                    </div>
                    <div class="p-3 text-center">

                        <a href="{{route('login')}}" class="h4 m-0 btn-primary">view</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card__course card__course__animate">
                    
                        <img src="{{ asset('front_assets/img2.jpg')}}" style="width:100%;" alt="Card image cap">
                        <span class="play-button">

                        </span>
                   

                    <div class="p-3 text-center border-bottom">
                        <div class="bold mb-2">
                            
                                <span class="course__title">
                                    Bojanala Computer Academy
                                </span>
                          
                        </div>
                        <div class="p-3 text-center">

                            <a href="{{route('login')}}" class="h4 m-0 btn-primary">view</a>
    
                        </div>

                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card__course card__course__animate">
                    <a href="" class="card-img-top">
                        <img src="{{ asset('front_assets/img1.jpg')}}" style="width:100%;" alt="Card image cap">
                        <span class="play-button">

                        </span>
                    </a>

                    <div class="p-3 text-center border-bottom">
                        <div class="bold mb-2">
                            <a href="" class="text-body">
                                <span class="course__title">
                                    Mbombela Computer College
                                </span>
                            </a>
                        </div>


                    </div>
                    <div class="p-3 text-center">

                        <a href="{{route('login')}}" class="h4 m-0 btn-primary">view</a>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection