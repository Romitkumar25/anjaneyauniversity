<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="media.css"/>
    <title>Social Media</title>
</head>
<body>
    <div class="fabs" onclick="toggleBtn()">
    <div class="action">
        <i class="fa fa-plus" id="add"></i>
        <i class="fa fa-times"  style="display: none" id="remove"></i>
         </div>
         <div class="btns">
            <a href="#" class="btn" style="background-color: #3b5999;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn" style="background-color: #55acee;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://wa.me//916260244331" class="btn" style="background-color: #25D366;">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="http://instagram.com/anjaneyauniversity" class="btn" style="background-color: #e4405f;">
                <i class="fab fa-instagram"></i>
            </a>
         </div>
         
    </div>
</body>
<script>
    function toggleBtn() {
        const Btns = document.querySelector(".btns");
        const add = document.getElementById("add");
        const remove = document.getElementById("remove");
        const btn = document.querySelector(".btns").querySelectorAll("a");
        Btns.classList.toggle("open");
        if (Btns.classList.contains("open")) {
            btn.forEach((e, i) => {
                bottom = 40 * i;
                e.style.bottom = bottom + "px";
            });
        } else {
            btn.forEach(e => {
                e.style.bottom = "0px";
            });
        }
    
    }
</script>
</html>


<!-- https://fontawesome.com/v4/icons/ -->