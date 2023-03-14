<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <script src="css/js/bootstrap.bundle.min.js"></script>
    <title>Welcome</title>
    <style>
        @font-face {
            font-family: 'vogamedium';
            src: url('fonts/Voga/cdtype_-_voga_medium-webfont.woff2') format('woff2'),
                url('fonts/Voga/cdtype_-_voga_medium-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'alataregular';
            src: url('fonts/Alata/alata-regular-webfont.woff2') format('woff2'),
                url('fonts/Alata/alata-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        html,
        body,
        .container-fluid {
            height: 100%;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            background: url('images/welcome_img.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box {
            text-align: center;
            color: #373434;
            display: block;
            width: 100%;
            height: 100%;
            /*background-color: black;*/
        }

        .box h1 {
            font-size: 100px;
            width: 500px;
            margin: 10px auto;
            text-transform: uppercase;
            font-family: 'vogamedium';
        }

        .btn {
            width: 150px;
            height: 50px;
            border: none;
            border-radius: 50px;
            background: #373434;
            margin: 10px 30px;
            padding-top: 11px;
        }

        .soc {
            text-align: left;
            /*background: red;*/
            height: 20%;
            padding-top: 15px;
            margin-left: 50px;
            color: white;
            font-family: 'alataregular';


        }

        .soc img {
            width: 25px;
        }

        .soc h4{
            font-size: 16px;
        }

        .welcome-text {
            height: 60%;
            /*background-color: blue;*/
            padding-top: 100px;
        }
        .welcome-text p{
            font-family:'Courier New', Courier, monospace;
            font-size: 25px;
        }

        .button {
            /*background: orange;*/
            height: 20%;
            font-family: 'alataregular';
        }

        h4,
        h5,
        h6 {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container-fluid center">
        <div class="box">
            <div class="welcome-text center">
                <div>
                    <h1>Maria's Wardrobe</h1>
                    <p>Clothing Shop</p>
                </div>
            </div>
            <div class="button center">
                <a href="home.php" class="btn btn-dark">Shop Now</a>
            </div>
            <div class="soc">
                <div>
                    <img src="images/facebook.png" alt="" srcset="">
                    <h4> @mariaswardrobeph</h4>
                </div>
                <div>
                    <img src="images/phone.png" alt="" srcset="">
                    <h4> +63 966-586-8848</h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>