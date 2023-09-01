@extends ('template.index')

@section('contents')

    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Sobre Nós</h2>
                <h1 class="display-4 text-uppercase">Bem-Vindo a Cakes&Code</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">Na Cakes & Code, unimos confeitaria e programação de maneira única. Somos apaixonados por criar bolos excepcionais que são verdadeiras obras de arte comestíveis.</h4>
                    <p class="mb-5">Assim como programadores escrevem código para aplicativos incríveis, nós combinamos ingredientes de forma harmoniosa para criar bolos meticulosamente projetados. </p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">100% Saudável</h4>
                            <p class="mb-0">Apresentamos os Bolos Saudáveis, uma união perfeita entre sabor e saúde. Nossa linha especial de bolos é criada com ingredientes naturais e nutritivos, substituindo o açúcar por alternativas saudáveis como mel e açúcar de coco. </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Certificações</h4>
                            <p class="mb-0">É com orgulho e gratidão que compartilhamos que nossa cafeteria foi premiada como a Melhor Cafeteria do Estado. Este reconhecimento reflete nossa dedicação à excelência, desde a seleção de grãos até o atendimento aos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



@endsection