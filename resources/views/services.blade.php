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
            padding-bottom: 0px;
            padding-top: 50px;
            font-weight: 700;
            font-size: 60px;
            color: #515255;
        }

        .teks-2 {
            font-size: 70px;
            color: #515255;
            font-weight: 650;
        }

        .teks-3 {
            font-size: 20px;
            color: #515255;
            padding-bottom: 10px;
        }

        .kesatu {
            padding-bottom: 50px;
            padding-top: 50px;
        }

        .project-title1 {
            font-size: 30px;
            font-weight: 600;
            color: #515255;
            line-height: 0.7;
        }

        .project-subtitle1 {
            font-size: 16px;
            font-weight: 300;
            color: #b2b2b2;
            padding-bottom: 15px;
        }

        .project-subtitle2 {
            font-size: 14px;
            font-weight: 600;
            color: #ff5f07;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="text-center">
        <div class="teks-1">SERVICES</div>
        <div class="teks-2">CREATIVE DIRECTION</div>
        <div class="teks-3">
            Our creative direction service brings your vision to<br>
            life with innovative concepts and strategic planning.<br>
            We work closely with you to develop unique ideas<br>
            that align with your brand and goals.
        </div>
    </section>
    <section class="kesatu">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="d-flex gap-5 align-items-start">
                        <img src="{{ asset('/img/gambar1.jpg') }}" alt="PROJECT ONE" class="rounded-project d-inline"
                            style="width: 650px;">
                        <div class="text">
                            <div class="d-flex align-items-end mb-3 mt-10 gap-4">
                                <div class="project-title1">
                                    First project
                                </div>
                            </div>
                            <div class="project-subtitle1 mb-1">
                                The kit consists of more than a hundred<br>
                                ready-to-use elements that you can combine<br>
                                to get the exact prototype you want
                            </div>
                            <div class="project-subtitle2">
                                <a href="#" class="project-subtitle2 link no-underline">kayaknya slider dah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="teks-2">PRODUCTION</div>
        <div class="teks-3">
            We Manage all aspect of production, from setup to<br>
            execution, ensuring a smooth process. Our team<br>
            handles logistics and on site coordiation to bring<br>
            your project to fruition seamlessly.
        </div>
    </section>
    <section class="text-center">
        <div class="teks-2">GABISAAAAAAA</div>
    </section>
    <section class="text-center">
        <div class="teks-2">POST PRODUCTION</div>
        <div class="teks-3">
            Our Post-Production services include Offline,Online,<br>
            Color Grading and Final touches. We enhance your<br>
            project to deliver a polised and professional end<br>
            result that meets your expectations.
        </div>
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
































</body>

</html>
