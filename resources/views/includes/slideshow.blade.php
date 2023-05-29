<section id="home-section" class="hero">
    
    <div class="home-slider owl-carousel">
        @foreach ($slideshows as $slideshow)
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="images/{{$slideshow->img}}" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#{{$slideshow->subtitle}}</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">{{$slideshow->title}}</h1>
                                <p class="mb-4">{{$slideshow->text}}</p>

                                <p><a href="{{$slideshow->link}}" class="btn-custom">Discover Now</a></p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        @endforeach
    </div>
</section>