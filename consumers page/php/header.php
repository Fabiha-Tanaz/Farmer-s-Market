<head>
    <title>Products - Farmer's Market</title>
    <link rel="stylesheet" href="product.css">
</head>
<header id="header">


        
            <nav>
                <ul>
                    <li><div class="logo">
			<img src="/Shopping\uplaod\png-transparent-logo-brand-we-believe-computer-icons-font-farm-logo-miscellaneous-leaf-payment.png">
		</div>
</li>
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="sindex.php">Products</a></li>
                    <li><a href="article.html">Articles</a></li>
                    <li><a href="job.html">Jobs</a></li>
                    <li><a href="http://localhost/profile">Logout</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="contactus.html">Job Application</a></li>
                  <li>  <div class="navbar-nav"> 
 <li>   <a href="cart.php" class="nav-item nav-link active"></li>
<h5 class="px-5 cart">
<p class="text-dark">
    <i class="fas fa-shopping-cart "></i>Cart 
</div>
</p>
               
</a>

<?php
//want to show how many products are there in the cart
if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);//stored in count
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
}


?>
           
<div class="collapse navbar-collapse" id="navbarNavAltMarkup"></div>
<div class="mr-auto"></div>
</ul></li>

</h5>
</div> 

    </nav>
</header>
