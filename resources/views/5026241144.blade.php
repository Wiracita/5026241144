<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Layout Grid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px 0;
        }


        .main-card {
            background-color: white;
            padding: 60px 30px 0 30px;
        }

        .profile-img {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 50%;

            opacity: 1;
        }

        h2.title {
            font-weight: 420;
            letter-spacing: 1px;
            margin-bottom: 60px;
        }

        .testi-quote {
            font-size: 0.75rem;
            line-height: 1.5;
            color: #999;
            font-style: italic;
        }

        .client-name {
            font-size: 0.75rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 0;
            letter-spacing: 0.5px;
        }

        .client-role {
            font-size: 0.65rem;
            color: #bbb;
        }

        .logo-bar {
            background-color: #eeeeee;
            padding: 40px 20px;
            border-top: 1px solid #f0f0f0;
        }

        .logo-text {
            font-size: 0.7rem;
            color: #aaa;
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<div class="container-fluid"> <div class="row justify-content-center">
        <div class="col-11 shadow-sm px-0">

            <div class="main-card text-center">
                <h2 class="title">Our clients love us.</h2>

                <div class="row text-left pb-5">
                    <div class="col-md-6 mb-5">
                        <div class="media align-items-start px-3">
                            <img src="https://th.bing.com/th/id/OIP._6mpoGdcsfqI5EsQ94JD6gHaHa?w=175&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="mr-3 profile-img" alt="User">
                            <div class="media-body">
                                <p class="testi-quote">"Perusahaan ini menunjukkan komitmen yang tinggi terhadap kualitas layanan dan profesionalisme dalam setiap proses kerja sama. Tim yang responsif, komunikatif, dan berorientasi pada solusi membuat setiap proyek dapat berjalan dengan efektif dan efisien."</p>
                                <p class="client-name text-uppercase">BTR RYZEN</p>
                                <p class="client-role">RUSHER</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="media align-items-start px-3">
                            <img src="https://th.bing.com/th/id/OIP.VHh6HwKpTNBV3zr_cO0hUgHaFE?w=257&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="mr-3 profile-img" alt="User">
                            <div class="media-body">
                                <p class="testi-quote">"Saya sangat puas dengan hasil kerja yang diberikan. Proses kolaborasi berjalan dengan lancar karena komunikasi yang terbuka dan pendekatan yang solutif terhadap setiap tantangan yang muncul."</p>
                                <p class="client-name text-uppercase">BTR LUXXY</p>
                                <p class="client-role">SCOUT</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="media align-items-start px-3">
                            <img src="https://th.bing.com/th/id/OIP.0jjRF33sJV7nblRZIM1jsgHaEK?w=299&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="mr-3 profile-img" alt="User">
                            <div class="media-body">
                                <p class="testi-quote">"Layanan yang diberikan sangat profesional dengan kualitas kerja yang konsisten. Tim bekerja secara terstruktur, responsif, dan mampu memberikan solusi yang tepat sesuai kebutuhan. Kami merekomendasikan perusahaan ini sebagai mitra kerja yang terpercaya."</p>
                                <p class="client-name text-uppercase">BTR ZUXXY</p>
                                <p class="client-role">IN GAME LEADER</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="media align-items-start px-3">
                            <img src="data:image/webp;base64,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" class="mr-3 profile-img" alt="User">
                            <div class="media-body">
                                <p class="testi-quote">"Bekerja sama dengan perusahaan ini merupakan pengalaman yang sangat positif. Timnya tidak hanya kompeten, tetapi juga sangat terbuka dalam berdiskusi dan mencari solusi terbaik. Pendekatan yang kolaboratif membuat setiap proses terasa lebih efektif dan menghasilkan output yang memuaskan."</p>
                                <p class="client-name text-uppercase">BTR MICROBOY</p>
                                <p class="client-role">SUPPORT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="logo-bar">
                <div class="d-flex justify-content-between logo-text text-uppercase align-items-center">
        <img src="https://th.bing.com/th/id/OIP.oa78O61kvtgaV6mzxZI83AHaHa?w=181&h=181&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="client-logo-img" alt="Logo 1">
        <img src="https://th.bing.com/th/id/OIP.tkwnX3rfkSJgIoM9MazjQwHaHa?w=170&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="client-logo-img" alt="Logo 2">
        <img src="data:image/webp;base64,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" class="client-logo-img" alt="Logo 3">
        <img src="https://th.bing.com/th/id/OIP.wHw2IQ-h__OOfA2oklCkygHaHa?w=183&h=183&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="client-logo-img" alt="Logo 4">
        <img src="https://th.bing.com/th/id/OIP.2-2ioI7k4pGVp5k77kN2hAHaHa?w=183&h=183&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" class="client-logo-img" alt="Logo 5">
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
