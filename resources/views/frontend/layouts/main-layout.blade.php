<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà thuốc</title>

    {{-- Boostrap --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}">
    {{-- Semantic --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/Semantic-UI/semantic.min.css') }}">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/fontawesome/css/all.min.css') }}">
    {{-- Slick --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frontend/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
</head>

<body>
    <div class="wrapper">
        {{-- Start Header --}}
        <header id="header">
            @include('frontend.partials.header')
        </header>
        {{-- End Header --}}

        {{-- Start Nav --}}
        <nav id="navbar">
            @include('frontend.partials.menu')
        </nav>
        {{-- End Nav --}}

        {{-- Start Main --}}
        <main id="main">
            <section class="slider">
                <div class="container wrapper-slider">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-8">
                            <div class="left">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/828x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/Banner_Web_PC_1610x492_5_edca1cbe09.png"
                                                class="d-block w-100" alt="Slider1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/828x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/Banner_Web_PC_1610x492_2_4ddb7e1bc7.png"
                                                class="d-block w-100" alt="Slider2">

                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/828x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/web_pc_1610x492_c3d1e2f4cf.jpg"
                                                class="d-block w-100" alt="Slider2">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="right">
                                <div class="silder-img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/399x117/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/399x117_49d70d4809.png"
                                        alt="Hình ảnh slider">
                                </div>
                                <div class="silder-img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/399x117/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/399x117_dbc724b851.jpg"
                                        alt="Hình ảnh slider">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/canmuathuoc_29bf521996.png"
                                        alt="Image box slider">
                                    <span>Cần mua thuốc</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/tuvanvoiduocsi_1855320b40.png"
                                        alt="Image box slider">
                                    <span>Tư vấn với bác sĩ</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/timnhathuoc_cbadb52c85.png"
                                        alt="Image box slider">
                                    <span>Tìm nhà thuốc</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/doncuatoi_5058ac6058.png"
                                        alt="Image box slider">
                                    <span>Đơn của tôi</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/vaccine_013e37b079.png"
                                        alt="Image box slider">
                                    <span>Tiêm vắc xin</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="box-slider">
                                <a href="#">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/kiemtrasuckhoe_15f6ff48e9.png"
                                        alt="Image box slider">
                                    <span>Kiểm tra sức khỏe</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product__sell">
                <div class="box-product__sell">
                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/320x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/san_pham_ban_chay_website_320x41_3x_88c599649c.png"
                        alt="Background">
                    <h3 class="title-product__sell">Sản phẩm bán chạy</h3>
                </div>

                <div class="container wrapper-product__sell mt-4">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <a href="#">
                                <div class="box-content__sell">
                                    <div class="box-content__img">
                                        <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                            alt="Img Product">

                                        <div class="product-sale__sell">
                                            -20%
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                    </div>

                                    <div class="price">
                                        <div class="price__new">
                                            90.400đ <span>/ Tuýp</span>
                                        </div>
                                        <div class="price__old">
                                            113.000đ
                                        </div>
                                    </div>

                                    <div class="total">
                                        <span>
                                            Tuýp 20 Viên
                                        </span>
                                    </div>

                                    <div class="btn-sell">
                                        <a href="">
                                            Chọn mua
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-2 mb-4">
                            <div class="box-content__sell">
                                <div class="box-content__img">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/256x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/DSC_09324_db795e136a.jpg"
                                        alt="Img Product">

                                    <div class="product-sale__sell">
                                        -20%
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Viên sủi Kudos Vitamin C 1000mg hương chanh giúp bổ sung năng lượng</p>
                                </div>

                                <div class="price">
                                    <div class="price__new">
                                        90.400đ <span>/ Tuýp</span>
                                    </div>
                                    <div class="price__old">
                                        113.000đ
                                    </div>
                                </div>

                                <div class="total">
                                    <span>
                                        Tuýp 20 Viên
                                    </span>
                                </div>

                                <div class="btn-sell">
                                    <a href="">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container wrapper-vaccination my-4">
                    <div class="wrapper__img">
                        <div class="title__vaccination">
                            <h1>Tiêm Chủng Long Châu</h1>
                            <p>Vắc Xin Chính Hãng - Luôn Có Sẵn Hàng</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="box__vaccination">
                                    <div class="img-box__vaccination">
                                        <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/TTTC_goitiemvacxin_2_e9afc7c5f1.png"
                                            alt="Img Vaccination">
                                    </div>
                                    <div class="content-box__vaccination">
                                        <h3>Gói tiêm vắc xin</h3>
                                        <p>Đa dạng chủng loại, phù hợp với từng lứa tuổi khách hàng.</p>
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="box__vaccination">
                                    <div class="img-box__vaccination">
                                        <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/TTTC_hethongtiemchung_2_82b6f07e46.png"
                                            alt="Img Vaccination">
                                    </div>
                                    <div class="content-box__vaccination">
                                        <h3>Hệ thống tiêm chủng</h3>
                                        <p>Hiện đại và đẳng cấp, với hơn 30 trung tâm trên toàn quốc.</p>
                                        <a href="#">Xem địa điểm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="box__vaccination">
                                    <div class="img-box__vaccination">
                                        <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/40x0/filters:quality(90)/https://cms-prod.s3-sgn09.fptcloud.com/smalls/TTTC_dkytiemchung_2_21733635fc.png"
                                            alt="Img Vaccination">
                                    </div>
                                    <div class="content-box__vaccination">
                                        <h3>Đăng ký tiêm chủng</h3>
                                        <p>Dễ dàng, giúp tiết kiệm thời gian khi làm thủ tục tại trung tâm.</p>
                                        <a href="#">Đăng ký ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        {{-- End Main --}}

        {{-- Start Footer --}}
        <footer id="footer">

        </footer>
        {{-- End Footer --}}
    </div>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Boostrap --}}
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- Semantic --}}
    <script src="{{ asset('frontend/lib/Semantic-UI/semantic.min.js') }}"></script>
    {{-- FontAwesome --}}
    <script src="{{ asset('frontend/lib/fontawesome/js/all.min.js') }}"></script>

    {{-- Slick --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.single-item').slick({
                infinite: true,
                arrows: true
            });
        })
    </script>
</body>

</html>
