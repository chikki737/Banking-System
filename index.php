<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }
            h1 {
                text-shadow: 3px 3px 5px pink;
            }
            h2 {
                text-shadow: 3px 3px 5px plum;
            }

            h3{
                color:black;
            }
            body {
                font-family:Garamond;
                padding: 10px;
                background-color: grey;
            }



            /* Header/Blog Title */
            .header {
                padding: 30px;
                text-align: center;
                width:100%;
                height:auto; 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .header h1 {
                font-size: 50px;
            }
            .header p{
                font-size: 30px;
            }

            .topnav {
                overflow: hidden;
                background-color: #333;
                height: 50px;
                align-content: center;
                text-align: center;
            }

            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change color on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            body, html {
                height: 100%;
            }


            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: #ddd;
                margin-top: 20px;
                opacity:0.5;
            }



        </style>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-family: Papyrus;
            }

            * {
                box-sizing: border-box;
            }

            .bg-image {
                /* The image used */
                background-image: url("https://1.bp.blogspot.com/-gZQep8Ws350/XwMAhmRq_yI/AAAAAAAACkk/L1XV-4BvMLYPwnCP903t5Wz9E0y-HSU7wCK4BGAsYHg/s640/Bank-Quotes-About-Banking-and-Bankers.jpg");

                /* Add the blur effect */
                filter: blur(8px);
                -webkit-filter: blur(8px);

                /* Full height */
                height: 100%; 

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            /* Position text in the middle of the page/image */
            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 20px;
                text-align: center;
            }
        </style>
        <style>
            * {box-sizing: border-box;}
            body {font-family: Papyrus;}
            .mySlides {display: none;}
            img {vertical-align: bottom;}

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }
        </style>
    </head>
    <body>

        <div class="bg-image"></div>

        <div class="bg-text">
            <h2 style="font-size:40px">WORLD WIDE BANK</h2>
            <h1>Hello and Welcome!</h1>

            <p><strong>
                    PROGRESS IS CUMULATIVE IN SCIENCE AND ENGINEERING, BUT CYCLICAL IN FINANCE. EVERYDAY IS A BANK ACCOUNT AND TIME IS ACCURACY. NO ONE IS RICH, NO ONE IS POOR, WE'VE GOT 24HOURS EACH.</strong></p>
        </div>
        <div class="topnav" style="align:center">
            <center>
                <a href="#">Home</a>
                <center><a href="viewusers.php">Customers List</a></center>
            </center>
        </div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFua3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%">
                <div class="text">SMILE</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="https://media.istockphoto.com/photos/sign-here-picture-id1282395437?b=1&k=20&m=1282395437&s=170667a&w=0&h=Oril3sR-QGhGFl1bEs6G_FH7dPy9iZ7lKwux7GodL0E=" style="width:100%">
                <div class="text">MONEY</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="https://images.unsplash.com/photo-1533421644343-45b606745fb1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJhbmt8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%">
                <div class="text">WORLD</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="https://images.unsplash.com/photo-1567427013953-88102117053a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGJhbmt8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%">
                <div class="text">CUTENESS</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

    </body>
</html>

