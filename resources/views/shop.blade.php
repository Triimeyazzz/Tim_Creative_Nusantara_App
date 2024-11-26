<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tim Creativ Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(255, 255, 255);
        }

        .teks-1 {
            padding-bottom: 25px;
            padding-top: 50px;
            font-weight: 700;
            font-size: 60px;
            color: #515255;
        }
    </style>
</head>

<body>
    <section class="text-center">
        <div class="teks-1">SHOP</div>
    </section>
    <section class="text-center">
        <div class="teks-1">DIGITAL PRODUCT</div>
    </section>
    <section class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                    <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center" style="width: 300px;"
                        alt="gambar">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="text-center">
        <div class="teks-1">MERCH</div>
    </section>
    <section class="kedua">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card d-flex border-0">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="w-100 rounded" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT ONE</h5>
                            <p class="card-text">A set of 130 elements, perfectly<br>
                                fitting each other. Click, drag</p>
                            <a href="#" class="text-decoration-none">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d-flex border-0">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="w-100 rounded" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT TWO</h5>
                            <p class="card-text">An excellent way of preparing a<br>
                                project’s wireframe</p>
                            <a href="#" class="text-decoration-none">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d-flex border-0">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="w-100 rounded" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT THREE</h5>
                            <p class="card-text">A whole lot of inspiration you can get<br>
                                from the vast variety of combinations</p>
                            <a href="#" class="text-decoration-none">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




















</body>

</html>
