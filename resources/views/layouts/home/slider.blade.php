<section class="main-section content bounceIn wow delay-02s animated client" id="client_outer">
    <div class="main-section container portfolio-title">
        <h2>Khách hàng nói về chúng tôi</h2>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fading">
            <img src="{{asset('img/slider/vinamilk.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides fading">
            <img src="{{asset('img/slider/juno.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides fading">
            <img src="{{asset('img/slider/loreal.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides fading">
            <img src="{{asset('img/slider/coffeehouse.jpg')}}" style="width:100%">
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>

    <!-- The dots/circles -->
    <div class="circles" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</section>