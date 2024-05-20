<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="faq.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
        <?php include 'navbar.php';?>
        <div class="QA">
        <div class="queAns">
        <div class="faq">
            <button class="accordion">
            Qusetion 1<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    kskkskwwiiwjjndnndjdjdjkskkaakkakaananna
                </p>
            </div>
           </div>
          </div>
          </div>

        <div class="QA">
        <div class="queAns">
        <div class="faq">
            <button class="accordion">
            Qusetion 2<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Can employees get exam results in fast?
                </p>
                 </div>
                </div>
                </div>
                </div>

                <div class="QA">
                <div class="queAns">
                <div class="faq">
            <button class="accordion">
                Qusetion 3<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Is blukite provides all exams for emloyees?
                </p>
                 </div>
                </div>
                </div>
                </div>

                <div class="QA">
                <div class="queAns">
                <div class="faq">
            <button class="accordion">
              Qusetion 4<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Are there exam unit in this system ?
                </p>
                 </div>
                </div>
                </div>
                </div>
                <div class="QA">
                <div class="queAns">
                <div class="faq">
            <button class="accordion">
              Qusetion 5<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Can Employees attempt exam any time ?
                </p>
                 </div>
                </div>
                </div>
                </div>

                <div class="QA">
                <div class="queAns">
                <div class="faq">
            <button class="accordion">
              Qusetion 6<i class="fas fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                Can Employees can know their grade ?
                </p>
                 </div>
                </div>
                </div>
                </div>
                <input type="button" value="Ask Qustion" onclick="window.location.href='askqustions.php'">
                </div>
    
    
    <script>
       var acc = document.getElementsByClassName("accordion");
       var i;
       for(i = 0; i < acc.length; i++){
           acc[i].addEventListener("click", function(){
               this.classList.toggle("active");
               this.parentElement.classList.toggle("active");
               var panel = this.nextElementSibling;

               if(panel.style.display === "block"){
                   panel.style.display = "none";
               }
               else{
                   panel.style.display = "block";
               }
           });
       }
    </script>
    <?php include 'footer.php';?>
</body>
</html>
