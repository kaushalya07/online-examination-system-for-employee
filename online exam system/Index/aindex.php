<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Kite | Home </title>
    <link rel="stylesheet" href="homeStyle.css">
    

    <style>
        /*background*/
        
        body {
            margin: 0;
            padding: 0;
        }

        #gradient-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        </style>
        <style>
        /*Slideshow style sheet*/
        .slideshow-container {
            top: 50px;
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        
        .mySlides {
            display: none;
        }
        
        .slideshow-container img {
            width: 100%;
            height: auto;
        }
        
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .fade {
            animation: fade 2s none;
        }
        
        @keyframes fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        
    </style>  
    
    

    </head>
<body>

  <?php include 'navbar.php';?>



  

    <div class="s-top">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Images/desktop.jpg" alt="Image1">
            </div>
            <div class="mySlides fade">
                <img src="Images/examresult.jpg" alt="Image 2">
            </div>
            <div class="mySlides fade">
                <img src="Images/coding.jpg" alt="Image 3">
            </div>
            <div class="mySlides fade">
                <img src="Images/tech.jpg" alt="Image 4">
            </div>
            <div class="mySlides fade">
                <img src="Images/workspace.jpg" alt="Image 5">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>

    <script>
       var slideIndex = 1;
        var slideTimeout;

        showSlides(slideIndex);

        function plusSlides(n) {
            clearTimeout(slideTimeout);
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            clearTimeout(slideTimeout);
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slideTimeout = setTimeout(showSlides, 6000, slideIndex);
        }
    </script>
    <div class="s2nd">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id at voluptatem officiis magni nihil nemo iste temporibus, ratione soluta! Quisquam deleniti cupiditate praesentium odit atque. Maiores delectus, ducimus odio molestias quo accusamus quidem reprehenderit corrupti dolorem eius modi aut, illo, non eaque sint hic atque eveniet. Corporis, quis facilis! Molestiae perferendis aut eius hic delectus dolor eaque natus repellat reiciendis nemo maxime officia ipsa autem, ab dolorem corrupti dolores itaque accusamus iusto libero numquam rerum quod impedit quae. Doloremque amet libero quam voluptate nihil quae cupiditate atque, eos debitis animi aut perferendis, unde culpa quos nostrum reiciendis hic nesciunt. Molestiae.</p>
    </div>
    <div class="s3rd">
        <div class="img-box">
            <div class="card">
                <img src="Images/index1.jpg" alt="first">
            </div>
            <div class="card">
                <img src="Images/index2.jpg" alt="first">
            </div>
            <div class="card">
                <img src="Images/index3.jpg" alt="first">
            </div>
            <div class="card">
                <img src="Images/index4.jpg" alt="first">
            </div>
        </div>
    </div>








    <?php include 'footer.php';?>
      <!-- END OF FOOTER -->
</body>
</html>