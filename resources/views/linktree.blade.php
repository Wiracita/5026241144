<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ExcelsoCoffee | Linktree</title>


    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(42, 43, 42);
            min-height: 100vh;
        }


        .linktree-wrapper {
            width: 540px;
            background-color: #071e1e;
        }

        .linktree-container {
            width: 100%;
            max-width: 680px;
            padding: 40px 24px 60px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .btn-topbar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.692);
            border: none;
            color: black;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;

        }

        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 32px;
        }

        .logo-circle {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            overflow: hidden;
        }

        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .logo-circle .logo-text-fallback {
            font-size: 18px;
            font-weight: 700;
            color: white;
            letter-spacing: 1px;
            text-align: center;
        }

        .username {
            font-size: 20px;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .links-section {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .link-btn {

            background: rgba(0, 0, 0, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;

        }

        .link-label {
            font-size: 15px;
            font-weight: 500;
            color: white;
            flex: 1;
            text-align: center;
        }

        .link-label2 {
            font-size: 15px;
            font-weight: 500;
            color: black;
            flex: 1;
            text-align: center;
        }

        .dots-btn {
            background: transparent;
            border: none;
            color: rgba(255, 255, 255, 0.5);
            font-size: 18px;
            cursor: pointer;
            padding: 4px 6px;
            border-radius: 50%;
            line-height: 1;
        }

        .linktree-footer {
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.4);
            font-size: 13px;
        }

        .linktree-footer a {
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
        }

        .sosmed-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 28px;
        }

        .sosmed-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;


            font-size: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;

        }

        .btn-join {
            display: inline-block;


            font-size: 15px;
            font-weight: 600;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            margin-bottom: 24px;
            background-color: white;

        }

        .footer-links {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.45);
            line-height: 2;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.45);
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex justify-content-center">

    <div class="linktree-wrapper">
        <div class="linktree-container">


            <div class="topbar">

                <a href="#" class="btn-topbar">
                    <i class="bi bi-asterisk"></i>

                </a>


                <div class="d-flex gap-2">
                    <a href="#" class="btn-topbar">
                        <i class="bi bi-bell"></i>
                    </a>
                    <a href="#" class="btn-topbar">
                        <i class="bi bi-box-arrow-up"></i>
                    </a>
                </div>
            </div>


            <div class="profile-section">
                <div class="logo-circle">


                    <img src="/assets/img/logo-excelso.webp">


                </div>

                <div class="username">
                    @ExcelsoCoffee
                    <img src="/assets/img/logo-verif.svg">

                </div>
            </div>


            <div class="links-section">

                <a href="https://www.instagram.com/excelsocoffee" target="_blank" class="link-btn">
                    <span class="link-label">Follow Excelso's Instagram</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="https://play.google.com/store" target="_blank" class="link-btn">
                    <span class="link-label">Download Excelso Member App (Android)</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="https://apps.apple.com" target="_blank" class="link-btn">
                    <span class="link-label">Download Excelso Member App (IOS)</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="#" class="link-btn">
                    <span class="link-label">Promotion</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="#" class="link-btn">
                    <span class="link-label">Menu Book</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="https://www.gofood.co.id" target="_blank" class="link-btn">
                    <span class="link-label">Order Via GoFood</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="https://shopee.co.id/food" target="_blank" class="link-btn">
                    <span class="link-label">Order Via ShopeeFood</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

                <a href="https://food.grab.com" target="_blank" class="link-btn">
                    <span class="link-label">Order Via GrabFood</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </a>

            </div>


            <div class="linktree-footer">


                <div class="sosmed-icons">
                    <a href="https://www.facebook.com/excelsocoffee" target="_blank" class="sosmed-btn">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/excelsocoffee" target="_blank" class="sosmed-btn">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com/excelsocoffee" target="_blank" class="sosmed-btn">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>



                <a href="https://linktr.ee" target="_blank" class="btn-join">
                    <span class="link-label2"> Join ExcelsoCoffee on Linktree</span>
                    <button class="dots-btn" onclick="event.preventDefault()">
                    </button>
                </a>


                <div class="footer-links">
                    <a href="#">Cookie Preferences</a> &middot;
                    <a href="#">Report</a> &middot;
                    <a href="#">Privacy</a> &middot;
                    <a href="#">Explore</a> &middot;
                    <a href="#">About this account</a>
                </div>

            </div>


            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
