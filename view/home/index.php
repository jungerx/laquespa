<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lá Quê SPA </title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/jquery.flipster.min.css">
</head>

<body data-spy="scroll" data-target=".navbar">
    <header>
        <div class="top-header">
            <div class="container-xl">
                <div class="row">
                    <div class="col-sm-2 col-lg-2 img-logo">
                        <img src="public/images/1.png" alt="">
                    </div>
                    <div class="col-sm-10 col-lg-4 m-auto">
                        <div class="box slogan">
                            <marquee>Tinh túy thảo mộc Việt</marquee>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto">
                        <div class="box hotting">
                            <div class="icon-header">
                                <img src="public/images/fb-header.png" alt="">
                                <img src="public/images/icon-gg.png" alt="">
                                <img src="public/images/icon-yt.png" alt="">
                                <a href="#" class="btn btn-primary">Đặt Lịch</a>
                            </div>
                            <div class="hotline-header">
                                <img src="public/images/phone.png" alt="">
                                <a href="#">Hotline: <span>08999 03333</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand logo-header" href="#">
                        MENU
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link active" href="">Trang chủ</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="?a=gioi_thieu">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link drop-down" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <ul class="dropdown-menu show" aria-labelledby="navbarDropdown">
                                    <li class="dropdown next-mn">
                                        <a class="dropdown-item " href="#" id="navbarDropdown-next" role="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            MỸ PHẨM LÁ CARE
                                        </a>
                                        <ul class="dropdown-menu next-menu show " aria-labelledby="navbarDropdown-next">
                                            <li><a class="dropdown-item" href="#">KEM FACE TUYẾT</a></li>
                                            <li><a class="dropdown-item" href="#">TẮM TRẮNG</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">BỘ CHĂM SÓC TÓC</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link drop-down" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Dịch vụ
                                </a>
                                <ul class="dropdown-menu show" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">BODY MASSAGE</a></li>
                                    <li><a class="dropdown-item" href="#">CHĂM SÓC DA MẶT</a></li>
                                    <li><a class="dropdown-item" href="#">GỘI ĐẦU DINH DƯỠNG</a></li>
                                    <li><a class="dropdown-item" href="#">TẮM TRẮNG TOÀN THÂN</a></li>
                                    <li><a class="dropdown-item" href="#">ĐIỀU TRỊ MỤN CHUYÊN SÂU</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Khuyến mãi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Góc làm đẹp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="menu-slide">
            <div class="container-fuild">
                <div id="menu-slide" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators ">
                        <li data-target="#menu-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#menu-slide" data-slide-to="1"></li>
                        <li data-target="#menu-slide" data-slide-to="2"></li>
                        <li data-target="#menu-slide" data-slide-to="3"></li>
                        <li data-target="#menu-slide" data-slide-to="4"></li>
                        <li data-target="#menu-slide" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/images/banner.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banner-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banner-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banner-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banner-4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banner-5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#menu-slide" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#menu-slide" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </header>
    <main>
        <!-- Giới thiệu -->
        <section>
            <div class="introduce text-center">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="public/images/gt-laque.jpg" alt="">
                        </div>
                        <div class="col-md-6 ">
                            <div class="introduce-info text-left">
                                <h3>giới thiệu về</h3>
                                <h2>LÁ QUÊ SPA</h2>
                                <p class="introduce-text">Không chỉ là nơi chăm sóc sắc đẹp, Lá Quê Spa còn là điểm thư
                                    giãn
                                    tuyệt vời cho bất kỳ ai sau những mệt mỏi cả về thể chất lẫn tinh thần. Cuộc sống
                                    hiện
                                    đại
                                    kèm theo đó là nhịp sống hối hả khiến bạn ít có thời gian chăm sóc bản thân. Dành
                                    một sự
                                    ưu
                                    ái đặc biệt cho cơ thể và lấy lại sức sống căng tràn cho những ngày tiếp theo tại Lá
                                    Quê
                                    Spa
                                    nhé!</p>
                                <a href="#">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- combo -->
        <section>
            <div class="combo text-center">
                <div class="heading-box">
                    <div class="heading">
                        <h4>Lá Quê Spa</h4>
                    </div>
                    <div class="sub-heading">
                        <span class="line-left"></span>
                        <span>combo dịch vụ</span>
                        <span class="line-right"></span>
                    </div>
                </div>
                <div class="container-xl">
                    <div class="combo-content text-left">
                        <div class="row top">
                            <div class="col-md-6">
                                <div class="img-combo">
                                    <img class="imgPath" src="public/images/combo-tam.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="accordion">
                                    <div class="box-info">
                                        <h3 class="title">Tắm Spa</h3>
                                        <div class="select-combo">
                                            <div class="option-combo" data-toggle="collapse" href="#photograhy"
                                                role="button" data="combo-tam">
                                                <h4 class="option">
                                                    Dịch vụ Tắm Bùn
                                                </h4>
                                            </div>
                                            <div class="collapse show" id="photograhy" data-parent="#accordion">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="option-combo collapsed" data-toggle="collapse"
                                                href="#photograhy-1" role="button" data="combo-2">
                                                <h4 class="option">
                                                    Tắm Thảo Mộc
                                                </h4>
                                            </div>
                                            <div class="collapse " id="photograhy-1" data-parent="#accordion">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="option-combo collapsed" data-toggle="collapse"
                                                href="#photograhy-2" role="button" data="combo-3">
                                                <h4 class="option">
                                                    Tắm Trắng Da
                                                </h4>
                                            </div>
                                            <div class="collapse " id="photograhy-2" data-parent="#accordion">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="option-combo collapsed last" data-toggle="collapse"
                                                href="#photograhy-3" role="button" data="combo-4">
                                                <h4 class="option">
                                                    Tắm Dưỡng Da
                                                </h4>
                                            </div>
                                            <div class="collapse " id="photograhy-3" data-parent="#accordion">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row reverse bottom">
                            <div class="col-md-6 ">
                                <div id="accordion-1">
                                    <div class="box-info">
                                        <h3 class="title">Massage Thư Giãn</h3>
                                        <div class="select-combo">
                                            <div class="option-combo" data-toggle="collapse" href="#photograhy-4"
                                                role="button" data="combo-massa">
                                                <h4 class="option">
                                                    Massage Toàn Thân
                                                </h4>
                                            </div>
                                            <div class="collapse show" id="photograhy-4" data-parent="#accordion-1">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="option-combo collapsed" data-toggle="collapse"
                                                href="#photograhy-5" role="button" data="combo-5">
                                                <h4 class="option">
                                                    Massage Đá Nóng
                                                </h4>
                                            </div>
                                            <div class="collapse " id="photograhy-5" data-parent="#accordion-1">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="option-combo collapsed" data-toggle="collapse"
                                                href="#photograhy-6" role="button" data="combo-6">

                                                <h4 class="option">
                                                    Massage Body Thái
                                                </h4>

                                            </div>
                                            <div class="collapse " id="photograhy-6" data-parent="#accordion-1">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-combo collapsed last" data-toggle="collapse"
                                                href="#photograhy-7" role="button" data="combo-7">
                                                <h4 class="option">
                                                    Massage Thư Giãn Thảo Mộc
                                                </h4>
                                            </div>
                                            <div class="collapse " id="photograhy-7" data-parent="#accordion-1">
                                                <div class="option-combo-info">
                                                    <p>Hiện tại, spa có rất nhiều dịch vụ khác nhau, đáp ứng được nhu
                                                        cầu
                                                        của
                                                        rất
                                                        nhiều
                                                        phụ nữ. Làn da phụ nữ sẽ nhanh chóng đều màu, khỏe đẹp, rạng rỡ,
                                                        căng
                                                        bóng
                                                        sau
                                                        khi thực hiện các phương pháp làm đẹp tại đây. Một số dịch vụ
                                                        làm
                                                        trắng
                                                        da
                                                        được
                                                        ưa chuộng ở spa như tắm trắng toàn thân, Tắm trắng da thảo mộc,
                                                        Tắm
                                                        bùn...
                                                    </p>
                                                    <div class="select-time">
                                                        <div>
                                                            <img src="public/images/clock.png" alt="">
                                                            <select name="1" id="">
                                                                <option value="1">
                                                                    <span><strong>60 Phút:</strong> 120.000đ</span>
                                                                </option>
                                                                <option value="2">
                                                                    <span><strong>45 Phút:</strong> 80.000đ</span>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <a href="#" class="btn btn-primary">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="img-combo">
                                    <img class="imgPath-1" src="public/images/combo-massa.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video -->
        <section>
            <div class="video text-center">
                <div class="heading-box">
                    <div class="heading heading-video">
                        <h4>Lá Quê Spa</h4>
                    </div>
                    <div class="sub-heading">
                        <span class="line-left bg"></span>
                        <span>Video Clip</span>
                        <span class="line-right bg"></span>
                    </div>
                </div>
                <div class="container-xl">
                    <div class="video-content carousel">
                        <ul>
                            <li>
                                <div class="box-video " role=button data="video-1">
                                    <div class="video-1">
                                        <img src="public/images/video-1.png" class="d-block m-auto img-video" alt="...">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box-video" role=button data="video-2">
                                    <div class="video-1">
                                        <img src="public/images/video-2.jpg" class="d-block m-auto img-video" alt="...">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box-video" role=button data="video-3">
                                    <div class="video-1">
                                        <img src="public/images/video-3.jpg" class="d-block m-auto img-video" alt="...">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- client -->
        <section>
            <div class="client text-center">
                <div class="care text-center">
                    <div class="container-xl">
                        <div class="logo-care">
                            <img src="public/images/logo-2.png" alt="">
                        </div>
                        <img src="public/images/la-care.png" alt="">
                    </div>
                </div>
                <div class="container-xl">
                    <div class="client-content">
                        <div class="heading-box">
                            <div class="heading">
                                <h4>Lá Quê Spa</h4>
                            </div>
                            <div class="sub-heading">
                                <span class="line-left"></span>
                                <span>Cảm nhận khách hàng</span>
                                <span class="line-right"></span>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-1.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-2.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-3.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-4.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-5.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-client">
                                    <img src="public/images/people-6.png" alt="">
                                    <div class="box-client-info">
                                        <h3 class="name">Trương Thị Thanh Kiều</h3>
                                        <p>Chăm sóc da là nhu cầu làm đẹp của tất cả chị em phụ nữ, spa chăm sóc da
                                            nên
                                            tìm
                                            địa chỉ thật uy tín để làm đẹp tự nhiên, an toàn mà giá cả bình dân cho
                                            các
                                            bạn
                                            ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- góc làm đẹp -->
        <section>
            <div class="beauty-corner text-center">
                <div class="heading-box">
                    <div class="heading">
                        <h4>Lá Quê Spa</h4>
                    </div>
                    <div class="sub-heading">
                        <span class="line-left bg"></span>
                        <span>Góc làm đẹp</span>
                        <span class="line-right bg"></span>
                    </div>
                </div>
                <div class="container-xl">
                    <div class="beauty-corner-people">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="box">
                                    <img src="public/images/12.png" alt="">
                                    <div class="people-info">
                                        <h5>Tổng hợp kiến thức làm đẹp và cách làm trắng da hiệu quả từ ...</h5>
                                        <p>Tổng hợp kiến thức từ cơ bản đến chuyên sâu về làm đẹp và cách làm trắng da
                                            hiệu
                                            quả cho các bạn đam mê chăm sóc da và làm đẹp...</p>
                                    </div>
                                    <div class="time">
                                        <p>08</p>
                                        <span>thg 9</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="box">
                                    <img class="top" src="public/images/13.png" alt="">
                                    <div class="people-info">
                                        <h5>Blog kiến thức làm đẹp - Hướng dẫn chăm sóc da đúng cách</h5>
                                        <p>Tổng hợp kiến thức từ cơ bản đến chuyên sâu về làm đẹp và cách làm trắng da
                                            hiệu
                                            quả cho các bạn đam mê chăm sóc da và làm đẹp...</p>
                                    </div>
                                    <div class="time">
                                        <p>08</p>
                                        <span>thg 9</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box">
                                    <img src="public/images/14.png" alt="">
                                    <div class="people-info">
                                        <h5>Tổng hợp kiến thức làm đẹp và cách làm trắng da hiệu quả từ ...</h5>
                                        <p>Tổng hợp kiến thức từ cơ bản đến chuyên sâu về làm đẹp và cách làm trắng da
                                            hiệu
                                            quả cho các bạn đam mê chăm sóc da và làm đẹp...</p>
                                    </div>
                                    <div class="time">
                                        <p>08</p>
                                        <span>thg 9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contact">
        <!-- contact -->
        <div class="contact text-center">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-2">
                        <img src="public/images/logo-footer.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <div class="location-address text-left">
                            <h5 class="title-footer">lá quê spa hồ chí minh</h5>
                            <div class="hcm-hotline">
                                <img src="public/images/icon-location.png" alt="">
                                <span>555 Phan Văn Trị, Phường 5, Quận Gò Vấp, Tp HCM</span>
                                <br>
                                <img src="public/images/icon-hotline.png" alt="">
                                <span>Điện thoại: 08999 03333 - Tư vấn Hỗ Trợ</span>
                            </div>
                        </div>
                        <div class="location-address text-left mt-4">
                            <h5 class="title-footer">lá quê spa Phan Thiết</h5>
                            <div class="hcm-hotline">
                                <img src="public/images/icon-location.png" alt="">
                                <span>555 Phan Văn Trị, Phường 5, Quận Gò Vấp, Tp HCM</span>
                                <br>
                                <img src="public/images/icon-hotline.png" alt="">
                                <span>Điện thoại: 08999 03333 - Tư vấn Hỗ Trợ</span>
                            </div>
                        </div>

                        <div class="contact-email text-left">
                            <img src="public/images/icon-email.png" alt="">
                            <span>Email: giabaogroup789@gmail.com</span>
                            <br>
                            <img src="images/icon-web.png" alt="">
                            <span>Website: www.tenmienwebsite.com</span>
                        </div>
                    </div>
                    <div class="col-md-3 time-open text-left">
                        <h5 class="title-footer">thời gian mở cửa</h5>
                        <div class="time">
                            <p>Thứ 2 - Thứ 6 : 8h:00 - 21h:00</p>
                            <p>Thứ 7 - Chủ nhật: 9h:00 - 22h00</p>
                            <p>Lễ và Tết nghĩ theo lịch sẽ thông báo sau</p>
                        </div>
                        <div class="MXH">
                            <span>LIÊN KẾT MXH:</span>
                            <a href="#">
                                <img src="public/images/i-fb.png" alt="">
                            </a>
                            <a href="#">
                                <img src="public/images/Layer 50.png" alt="">
                            </a>
                            <a href="#">
                                <img src="public/images/i-yt.png" alt="">
                            </a>
                            <a href="#">
                                <img src="public/images/i-tw.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img-fb">
                            <img src="public/images/contact.png" alt="">
                            <div class="icon-img-fb">
                                <a href="#"><img src="public/images/spa.png" alt=""></a>
                            </div>
                            <div class="like-fb">
                                <a href="#">
                                    <img src="public/images/fb-like.png" alt="">
                                </a>
                            </div>
                            <div class="like-messenger">
                                <a href="#">
                                    <img src="public/images/fb-message.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right text-center">
            <div class="container-xl">
                <p>Copyright © 2020 <span>Lá Quê Spa</span> . Design by Nina Co., Ltd</p>
            </div>
        </div>
        <a href="#" class="back-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </footer>
    <div class="modal-video" id="myModal">
        <div class="modal-container">
            <div class="close-icon">
                <i class="fa-solid fa-xmark" data-dismiss="modal"></i>
            </div>
            <div>
                <video class="play-video" width="850px" height="600px" src="public/video/video-2.mp4" controls>
                </video>
            </div>
        </div>

    </div>
    <script src="public/assets/jquery.min.js"></script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>
    <script src='public/assets/popper.min.js'></script>
    <script src='public/assets/bootstrap/js/bootstrap.min.js'></script>
    <script src="public/js/script.js"></script>
    <script src="public/js/jquery.flipster.min.js"></script>
    <script>
    $(".carousel").flipster({
        style: "carousel",
        spacing: -0.3,
    });
    </script>
</body>

</html>