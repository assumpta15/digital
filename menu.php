<?php
include 'header.html';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        .menu-items{
    display: flex;
    margin-top: 30px;
    padding: 10px 20px;
    gap: 30px;
}
.menu-items img{
    width: 250px;
    height: 350px;
    gap: 50px;
    align-items: center;
    align-content: center ;
}

.menu-items h3{
    text-align: center;
    margin-top: 20px;
    font-size: 25px;
}
.menu-items p{
    text-align: center;
    margin-top: 20px;
}

.sandwich img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.steak img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.cherries img{
    display: block;
    margin-left: auto;
    margin-right: auto;

}

.wine img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}
/* second grid */

.menu-items2{
    display: flex;
    margin-top: 30px;
    padding: 10px 20px;
    gap: 30px;
}

.menu-items2 img{
    width: 250px;
    height: 350px;
    gap: 30px;
    align-items: center;
    align-content: center ;

}
.menu-items2 h3{
    text-align: center;
    margin-top: 20px;
    font-size: 25px;
}
.menu-items2 p{
    text-align: center;
    margin-top: 20px;
}

.salmon img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}
.popsicle img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.sandwich2 img{
    display: block;
    margin-left: auto;
    margin-right: auto;

}
.croissant img{
    display: block;
    margin-left: auto;
    margin-right: auto;

}

/* pagination */

.pagination{
    margin-top: 40px;
}

.pagination2 a{
    margin-top: 40px;
    /* justify-content: center;
    margin-left: auto;
    margin-right: auto; */
    align-content: center;
    gap: 10px;
    color: black;
    text-decoration: none;
}

.pagination2{
    display: flex;
    justify-content: center;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin-bottom: 10px;
}

.pagination2 li{
    padding: 8px 12px;
    background: #f0f0f0;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.pagination2 li:hover{
    background: #d0d0d0;
}

    </style>
</head>
<body>
<div class="menu-items">
            <div class="sandwich">
                <img src="image/sandwich.jpg" alt="">
                <h3>The Perfect Sandwich, A Real NYC <br> Classic</h3>
      <p>Just some random text, lorem ipsum  text praesent tincidunt <br> ipsum lipsum.</p>
            </div>

            <div class="steak">
                <img src="image/steak.jpg" alt="">
                <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem <br> lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>

            <div class="cherries">
                <img src="image/cherries.jpg" alt="">
                <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
            </div>

            <div class="wine">
                <img src="image/wine.jpg" alt="">
                <h3>Once Again, Robust Wine <br> and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt <br> ipsum lipsum.</p>
            </div>

        </div>


            <!-- second grid -->

            <div class="menu-items2">
                <div class="popsicle">
                    <img src="image/popsicle.jpg" alt="">
                    <h3>All I Need Is a Popsicle</h3>
          <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>

                <div class="salmon">
                    <img src="image/salmon.jpg" alt="">
                    <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>

                <div class="sandwich2">
                    <img src="image/sandwich.jpg" alt="">
                    <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>

                <div class="croissant">
                    <img src="image/croissant.jpg" alt="">
                    <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>

            </div>
            
       
       
        

        <!-- pagination -->
        <div class="pagination">
            <div class="page">
                <ul class="pagination2">

                    <li><a style="" href="#" class="page2">«</a></li> 
                <li> <a href="#" class="">1</a></li>
                <li><a href="#" class="">2</a></li>
                <li><a href="#" class="">3</a></li>
                <li><a href="#" class="">4</a></li>
                <li><a href="#" class="">»</a></li>
                </ul>
               
            </div>
        </div>

        <hr>


        <?php
        include 'footer.html';
        ?>

</body>
</html>