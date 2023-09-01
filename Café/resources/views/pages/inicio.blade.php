@extends('template.index')

@section('contents')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="font-secondary text-primary mb-4">Delicioso e macio</h1>
                <h1 class="display-1 text-uppercase text-white mb-4">Cakes&Code</h1>
                <h1 class="text-uppercase text-white">A melhor cafeteria em Bauru</h1>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://youtu.be/3lkvHZEx4w0" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="https://youtu.be/3lkvHZEx4w0" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Video Modal End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h1 class="display-4 text-uppercase">Avaliações dos clientes!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Ana</h4>
                            <span>PoleDancer</span>
                        </div>
                    </div>
                    <p class="mb-0">É ótimo para repor minhas energias depois de meus shows.
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Gustavo</h4>
                            <span>Personal</span>
                        </div>
                    </div>
                    <p class="mb-0">Muito boa, extremamente útil as minhas dietas!!!
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">kauê</h4>
                            <span>Herdeiro</span>
                        </div>
                    </div>
                    <p class="mb-0">Eu amo!!Sempre estou lá, pois tenho muito tempo livre.
                                            </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Larissa</h4>
                            <span>Médica</span>
                        </div>
                    </div>
                    <p class="mb-0">Delicioso, e muito saudavel tambem, amei!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection