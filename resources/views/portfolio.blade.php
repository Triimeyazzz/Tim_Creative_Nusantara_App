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
            padding-bottom: 10px;
            padding-top: 50px;
            font-weight: 700;
            font-size: 60px;
            color: #515255;
        }

        .teks-2 {
            font-size: 15px;
            color: #515255;
            padding-bottom: 50px;
        }

        .kesatu {
            padding-bottom: 50px;
            padding-top: 50px;
        }

        .kedua {
            padding-bottom: 50px;
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

        .ketiga {
            padding-bottom: 0px;
        }

        .project-title2 {
            font-size: 14px;
            font-weight: 600;
            color: #515255;
            line-height: 0.7;
        }

        .project-subtitle3 {
            font-size: 16px;
            font-weight: 300;
            color: #b2b2b2;
            padding-bottom: 15px;
        }

        .project-subtitle4 {
            font-size: 14px;
            font-weight: 600;
            color: #ff5f07;
            text-decoration: none;
        }

        .keempat {
            padding-bottom: 50px;
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }


        .nav-item .nav-link.active {
            background-color: #ff5f07;
            color: white !important;
            color: #515255;
        }
        .nav-item .nav-link:not(.active) {
            color: black !important;
        }
    </style>
</head>

<body>
    <section class="text-center">
        <div class="teks-1">PORTFOLIO</div>
        <div class="teks-2">
            The kit consists of more than a hundred<br>
            ready-to-use elements that you can combine to<br>
            get the exact prototype you want
        </div>
    </section>
    <section class="portofolio">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-1 text-center">
                    <button class="btn btn-light btn-lg btn-prev"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="col-md-10">
                    <div class="owl-carousel owl-theme owl-portofolio">
                        <div class="item">
                            <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center w-100" alt="gambar">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center w-100" alt="gambar">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center w-100" alt="gambar">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center w-100" alt="gambar">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/icon-pp2.jpg') }}" class="align-items-center w-100" alt="gambar">
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-center ">
                    <button class="btn btn-light btn-lg btn-next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
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
                                Basically, the kit consists of more than a hundred<br>
                                ready-to-use elements that you can combine to get<br>
                                the exact prototype you want. We tried to make it<br>
                                as versatile as possible, at the same time getting rid<br>
                                of all the redundant features to help you save time<br>
                                and focus on your project. Wireframe Kit is a<br>
                                professional instrument; here you won’t find any><br>
                                bright interface or colorful layout, only a precise set of tools.
                            </div>
                            <div class="project-subtitle2">
                                <a href="#" class="project-subtitle2 link no-underline">VIEW FULL PROJECT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kedua">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 d-flex gap-1">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="card-img-top" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT ONE</h5>
                            <p class="card-text">A set of 130 elements, perfectly<br>
                                fitting each other. Click, drag</p>
                            <a href="#" class="project-subtitle4 link no-underline">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 d-flex gap-1">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="card-img-top" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT TWO</h5>
                            <p class="card-text">An excellent way of preparing a<br>
                                project’s wireframe</p>
                            <a href="#" class="project-subtitle4 link no-underline">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 d-flex gap-1">
                        <img src="{{ asset('/img/gambar1.jpg') }}" class="card-img-top" alt="belum tau">
                        <div class="card-body" style="border: 0px;">
                            <h5 class="card-title fw-bold">PROJECT THREE</h5>
                            <p class="card-text">A whole lot of inspiration you can get<br>
                                from the vast variety of combinations</p>
                            <a href="#" class="project-subtitle4 link no-underline">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ketiga">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-7">
                    <img src="{{ asset('/img/office1.jpg') }}" alt="PROJECT ONE" class="rounded-project d-inline w-100">
                </div>
                <div class="col-md-5">
                    <div class="text">
                        <div class="d-flex align-items-end mb-3 gap-4">
                            <div class="project-title2 fw-bold">
                                PROJECT ONE
                            </div>
                        </div>
                        <div class="project-subtitle3 mb-1">
                            Kit is a professional instrument;<br>
                            here you won’t find any bright<br>
                            interface or colorful layout, only a<br>
                            precise set of tools to make a<br>
                            working prototype of any complexity
                        </div>
                        <div class="project-subtitle4">
                            <a href="#" class="project-subtitle4 link no-underline">VIEW FULL PROJECT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="teks-1">Our Projects</div>
    </section>
    <section class="keempat">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach ($categories as $key => $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill px-4 py-2 {{ $key == 0 ? 'active' : '' }}" id="pills-{{ Str::slug($category->name) }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ Str::slug($category->name) }}" type="button" role="tab" aria-controls="pills-{{ Str::slug($category->name) }}" aria-selected="true">{{ $category->name }}</button>
              </li>
            @endforeach
          </ul>
    </section>
    <section class="kedua">
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                @foreach ($categories as $key => $category)
                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="pills-{{ Str::slug($category->name) }}" role="tabpanel" aria-labelledby="pills-{{ Str::slug($category->name) }}-tab" tabindex="0">
                        <div class="row g-3">
                            @foreach ($category->portofolios as $portofolio)
                                @foreach ($portofolio->galleries as $gallery)

                                <div class="col-md-3">
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/'.  $gallery->image_path )}}" class="card-img-top" alt="belum tau">
                                    </div>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>












    <script src="http://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="hs://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function() {
            var owlPortofolio = $(".owl-portofolio").owlCarousel({
                loop: true, // Membuat carousel melingkar
                margin: 20, // Jarak antar item
                nav: false,
                dots: false, // Menambahkan navigasi
                responsive: {
                    0: {
                        items: 1 // 1 item di layar kecil
                    },
                    600: {
                        items: 2 // 2 items di layar sedang
                    },
                    1000: {
                        items: 3 // 3 items di layar besar
                    }
                }
            });


            // Go to the next item
            $('.btn-next').click(function() {
                owlPortofolio.trigger('next.owl.carousel');
            })
            // Go to the previous item
            $('.btn-prev').click(function() {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owlPortofolio.trigger('prev.owl.carousel', [300]);
            })
        });
    </script>

</body>

</html>
