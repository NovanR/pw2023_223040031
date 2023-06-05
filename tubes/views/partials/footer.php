<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer {
            padding-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            height: 200px;
            background-color: darkturquoise;
        }

        .footer .contact i {
            margin-right: 5px;
        }

        @media (max-width: 550px) {
            .footer {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="footer">
        <div class="partner">
            <h5>Supported By:</h5>
            <br>
            <img src="img/mendik.png" alt="mendikbud" style="width: 80px;">
            <img src="img/google.png" alt="google" style="width: 70px;">
        </div>
        <div class="contact">
            <h5>Kontak Kami: </h5>
            <br>
            <p><i class="fa-solid fa-phone"></i>081234567890</p>
            <p><i class="fa-solid fa-envelope"></i>Pintarmatematika@gmail.com</p>
            <a href="cs.php" style="color: black; text-decoration: none;" target="_blank"><i class="fa-solid fa-users"></i>Customer Service</a>
        </div>
        <div class="platform">
            <h5>Platform Kami: </h5>
            <br>
            <a href="https://www.apple.com/id/app-store " target="_blank"><img src="img/app.png" alt="instagram" style="width: 150px;"></a>
            <br>
            <a href="https://play.google.com/" target="_blank" style="transform: translateX(10px); position: absolute;"><img src="img/ps.png" alt="play store" style="width: 130px;"></a>

        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>