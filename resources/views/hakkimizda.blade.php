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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }


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

<div class="container">
    <h1>Hakkımızda</h1>
    <p>İddaa Oran Tahminleri, uzman ekibimiz ve gelişmiş yapay zeka algoritmaları sayesinde yüksek başarı oranıyla öne çıkmaktadır.</p>
    <p>Her gün güncellenen veri tabanımız ve detaylı analizlerimiz sayesinde, kullanıcılarımıza en doğru bahis tahminlerini sunarak kazançlı bahisler yapmalarına yardımcı oluyoruz.</p>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
