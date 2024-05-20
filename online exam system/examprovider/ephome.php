<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Kite | Home </title>
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="stylesheet" type="text/css" href="footer.css">

    <style>
        
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

  <h2>Welcome to Bluekite Online Examination System !</h2>

  

    <div class="s-top">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../Images/desktop.jpg" alt="Image1">
            </div>
            <div class="mySlides fade">
                <img src="../Images/examresult.jpg" alt="Image 2">
            </div>
            <div class="mySlides fade">
                <img src="../Images/coding.jpg" alt="Image 3">
            </div>
            <div class="mySlides fade">
                <img src="../Images/tech.jpg" alt="Image 4">
            </div>
            <div class="mySlides fade">
                <img src="../Images/workspace.jpg" alt="Image 5">
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
    <p>
      BlueKite Online Examination System is a comprehensive platform designed to facilitate online exams for employees. It provides a user-friendly interface and advanced features to streamline the examination process, making it convenient and efficient for both employees and Companies.
    
    <br>
      Whether you are an employee looking to enhance your knowledge and skills BlueKite is here to provide a seamless and effective experience. Join us today and unlock the possibilities of online learning and assessment!
    </p>
</div>
    <div class="s3rd">
        <div class="img-box">
            <div class="card">
                <img src="../Images/index1.jpg" alt="first">
            </div>
            <div class="card">
                <img src="../Images/index2.jpg" alt="first">
            </div>
            <div class="card">
                <img src="../Images/index3.jpg" alt="first">
            </div>
            <div class="card">
                <img src="../Images/index4.jpg" alt="first">
            </div>
        </div>
    </div>

<br><br>






    <?php include 'footer.php';?>
</body>
</html>