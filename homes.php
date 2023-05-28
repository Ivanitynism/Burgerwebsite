<!DOCTYPE html>
<html lang="en">
<head>
    <title>Burger</title>
    <link rel="stylesheet" href="webindex.css">
</head>
 <body background="C:\Users\laure\OneDrive\Desktop\Final website\burger.jpg">
    <div class="banner">
    <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="burger.html">Menu</a></li>
                <li><a href="combo.html">Combo-meal</a></li>
                <li><a href="aboutbgr.html">About</a></li>
            </ul>
            
        </div>

        <h2>CREATE YOUR OWN BURGER</h2>
        <p>
        <br> A customized burger is a delicious sandwich made to your specific preferences.It typically starts with a juicy beef patty or vegetarian<br>
            alternative,which is then topped with a variety of condiments, such as lettuce, tomato,onion, pickles, and cheese. Additional toppings<br>
            may include bacon, mushrooms,avocado, or a fried egg. The bun can also be customized, with options ranging from a classic sesame <br>
            seed bun to a pretzel or brioche bun. The beauty of a burger is that you can mix and match ingredients to create a truly unique and tasty <br>
            burger that satisfies your cravings.<br>
        </p>
    <div class="slideshow-container">
     <img class="mySlide" src="b1.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="bb2.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b3.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b4.webp" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b5.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b6.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b7.jpg" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
     <img class="mySlide" src="b8.webp" style="width: 800px; height: 500px; transform: translateX(35%) translateY(30%)">
    
    </div>

        <h3>for more details please contact us:<br> 
            Contact number: 0951-007-9244<br>
            Ivanflaurete@gmail.com
        </h3>

        
</div>

    <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlide");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            }

            myIndex++;
            if (myIndex > x.length) {myIndex = 1};
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000);
            }
    </script>
</body>
</html>