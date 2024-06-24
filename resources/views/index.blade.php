<!DOCTYPE html>
<html lang="tr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>İddaa Oran Tahminleri</title>
    <style>
        .giriskayit
        {
            margin-left: 10px;
        }
        .navbar
        {
        }
        .c-item {
            height: 480px;
        }

        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
        /* Genel stil ayarları */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .footer-section {
            flex: 1;
            padding: 0 20px;
        }

        .footer-section h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #666;
        }

        .footer-section ul li a:hover {
            color: #000;
        }

        .copyright {
            background-color: #ddd;
            text-align: center;
            padding: 10px 0;
        }
        .footerlogo
        {
            max-width: 100%;
            height: auto;
            display: block; /* İmajın blok olarak görüntülenmesini sağlar */
            margin: 0 auto; /* İmaja ortalanmış bir biçimde yer verir */
        }
        .carousel-item {
            height: 450px; /* Slider yüksekliği buradan ayarlanır */
        }
        .carousel-item img {
            height: 100%;
            object-fit: cover; /* Görselin slidera tam oturması sağlanır */
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">İddaa Oran Tahminleri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/hakkimizda">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/iletisim">İletişim</a>
                </li>
                <li class="nav-item">


            </ul>
            @if(auth()->check())
                <a href="/dashboard">
                    <button type="button" class="btn btn-success giriskayit">{{ auth()->user()->name }}</button>
                </a>
            @else
                <a href="/login" class="btn btn-success giriskayit">Giriş Yap</a>
                <a href="/kayitol" class="btn btn-success giriskayit">Kayıt Ol</a>

            @endif

        </div>
    </div>
</nav>
</div>

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtRp-5JaHlFnJpVx9EcfPzF07m5ybarcFmzjxprmbLFVp-XLGTUdmP_pxJTjET7hjV2SjGfVMKZUmtRA72gXa7VLBejhPmYuWlbt9pARHqHJ2qtDh026J3PJDtcOihQHOfO9ZUz2gjzEKq9Lpk6DRFeOF6YKZRDIvre1L6UitrlnQb05HOmw75jmXSaW0/s320/Slider1.jpg" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">İddaa Kuponları</p>
                <h1 class="display-1 fw-bolder text-capitalize">İddaa Oran Tahminleri</h1>
                <a href="http://iddaaorantahminleri.com/yapayzekaiddaatahminleri"><button class="btn btn-primary px-4 py-2 fs-5 mt-5">Kazanmaya Başla</button> </a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEicP_gCBEPbpI_MDqZu_JW8CdILsX_dqNr2eXy6vzWTUJHzhPAxxtQ2P8eiI2tguxyhStRceTKuRKwOG544qu0hTWzE09EIEC1TUvq0XS7KS-8gNhPcI4KQdh85MfcSvS_HMYWZ19UMVa1MlO82gRQ8PQHd3sg57ZLl6DVrvxtt39Z2vfJtGZsAhBS6mfs/s320/Slider2.jpg" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
                <p class="text-uppercase fs-3 mt-5">Türkiyenin İddaa Tahmin Sitesi</p>
                <p class="display-1 fw-bolder text-capitalize">Günün İddaa Kuponları</p>
                <a href="http://iddaaorantahminleri.com/yapayzekaiddaatahminleri"><button class="btn btn-primary px-4 py-2 fs-5 mt-5">Kazanmaya Başla</button> </a>

            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgdS4kz5B0zyR3YStlIwaX6AQmBt4yWR41uUJm0juizla1I0KgegnS1jTRZF-ONZwNT3mDUQm70XiaB8G7JQK6sF5kX4KXAYut1-m5VxudCmwSbgXsqY57X2avevLMxR9OwGoZncPiiWzJRNWRvNLChjv6yl3FOxjP3zKlSqyrPLwNYvINuvRV5KCUlj3o/s1366/Slider3.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
                <p class="display-1 fw-bolder text-capitalize mt-5">Kayıt Olarak <b>VİP</b> Kupon'lardan Faydalanın</p>

                <a href="/kayitol"><button class="btn btn-warning px-4 py-2 fs-5 mt-5">Kayıt Ol</button> </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-0 mb-3">
    <div class="col">
        <div class="card h-100">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg5CSBAEnajvdBjRUtkCNPa7LaqTlJWqDPCeih1inPbekwb1HUbwsdq8YR119tIOq7Fw8IrMihUFFZNytBRjBX_KfkSGS6jlDvvzTgezobppdeRAwcGHG3vvA2TWsdfPtaOh3g8ZFHU2J1OusEc9tXhRCBzLgtE6kmOfWrRNa2HWkrxBOF2umPg8MMGj2w/s320/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Yapay Zeka İddaa Tahminleri</h5>
                <p class="card-text">Güncel maçların yüzdesel bilgisayar tahminli yapay zeka iddaa tahminleri</p>
            </div>
            <div class="card-footer">
             <a href="https://iddaaorantahminleri.com/yapayzekaiddaatahminleri/"><center> <button type="button" class="btn btn-success giriskayit">Tahminleri Gör</button></center></a>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtRp-5JaHlFnJpVx9EcfPzF07m5ybarcFmzjxprmbLFVp-XLGTUdmP_pxJTjET7hjV2SjGfVMKZUmtRA72gXa7VLBejhPmYuWlbt9pARHqHJ2qtDh026J3PJDtcOihQHOfO9ZUz2gjzEKq9Lpk6DRFeOF6YKZRDIvre1L6UitrlnQb05HOmw75jmXSaW0/s320/Slider1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VİP İddaa Kuponları</h5>
                <p class="card-text">oynanacak maçlar için birçok kriter incelenerek editörümüz tarafından oluşturulmuş kuponlar sitemizde üyelerimize paylaşılmaktadır.</p>
            </div>
            <div class="card-footer">
              <a href="/kayitol">  <center> <button type="button" class="btn btn-warning giriskayit">Vip Kupon</button></center> </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi_U2Pp9RndQcfPNSEF086TukfMr6O1WTq-gClLuMwmtoaandXeb0lBZ5upQSK0Bkhz4P7aic74kMfUIMHtqWM_yfKUGGBkdT8U0ON6qu-A8vHka4ibFMzLHG9YZS5yS7CqlcKEVe1_4zZqe8Eq6rWR3LAdU9MrSpxi57CmPtZwJOHVVFBw_Fl4Nfx_w-c/s1200/card2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">İddaa Oran Tahminleri</h5>
                <p class="card-text">İddaa Oran Tahminleri Kullanıcılarına Günlük Olarak Kupon Paylaşımı Yapmaktadır Editörümüz Tarafından Kazanma Şansı Yüksek Kuponları Sizlerle Paylaşmaktayız.</p>
            </div>

        </div>
    </div>
</div>

<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <!-----------Resim Eklenecek-->
        </div>
        <div class="footer-section">
            <h3>İletişim</h3>
            <p>E-posta: info@iddaaorantahminleri.com</p>
        </div>
        <div class="footer-section">
            <h3>Hızlı Linkler</h3>
            <ul>
                <li><a href="/">Ana Sayfa</a></li>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="#">İletişim</a></li>
                <li><a href="#">Gizlilik Politikası</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Sosyal Medya</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2024 iddaaorantahminleri.com. Tüm hakları saklıdır. - SoftSa Yazılım.</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
