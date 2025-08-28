<!-- WORK-WITH -->
@if(isset($templates['gateway'][0]) && $gateway = $templates['gateway'][0])
    <section class="payment-gateway" id="work-with">
        <div class="container">
            <div class="row">
    <div class="col">
        <div class="header-text text-center mb-4">
            <h3>@lang($gateway->description->title)</h3>
        </div>
    </div>
</div>


            <div class="row">
                <div class="col">
                    <div class="workwith owl-carousel">
                        @foreach($gateways as $gateway)
                            <img src="{{ getFile(config('location.gateway.path').$gateway->image) }}" alt="{{ $gateway->name }}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!-- /WORK-WITH -->

<!-- Owl Carousel Scripts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $(".workwith").owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive:{
            0:{ items:2 },
            576:{ items:3 },
            768:{ items:4 },
            992:{ items:5 },
            1200:{ items:6 }
        }
    });
});
</script>
