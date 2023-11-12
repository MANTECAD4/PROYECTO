<x-mi-layout> 
        <div class="h-100 w-100 d-flex justify-content-center align-items-center mt-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 60%; width:60%">
                <div class="carousel-inner ">
                    <div class="carousel-item active  ">
                        <img src="{{asset('assets/img/logo1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{asset('assets/img/logo2.jpg ')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/logo3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/logo4.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>           
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>    
    
</x-mi-layout>