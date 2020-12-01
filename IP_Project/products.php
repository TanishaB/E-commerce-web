<?php
$conn=new mysqli('localhost','root','','ecommerce');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All products - Tribal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo1.png" width="125px">
            </div>
            <nav>
                <ul id="items">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Category</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.html">Account</a></li>
                </ul>
    
            </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" width="30px" height="30px" onclick="toggle()">
    </div>

</div>

</body>  


<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default</option>
            <option>Sort by price</option>
            <option>Sort by popularity</option>
            <option>Sort by sale</option>
        </select>
    </div>
    <div class="row">
    <?php
        $query="SELECT * FROM products";
        $result=$conn->query($query);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc()){
            $name=$row['name'];
            $qty=$row['qty'];
            $price=$row['price'];
            $image=$row['image'];
      
    ?>
        <div class="col-4"><a href="product-details.php"><img src="<?php echo $image; ?>" alt=""></a>
        <h3><?php echo $name;?></h3>
        <h4>Qty: <?php echo $qty; ?></h4>
        <p>₹<?php echo $price; ?></p>
        <a href="index.php?id=<?php echo $row['id'];?>" class="btn btn-danger mt-3"><i class="fa fa-shopping-cart"></i> Add to Cart </a>
        </div>
        <?php } } ?>
    </div>
    
        
    
    
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594</span>
    </div>
</div>




<!-------------------------------------footer-------------------------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download our app for android as well as ios</p>
                <div class="app-logo">
                    <img src="images/play.png" alt="">
                    <img src="images/ios.png" alt="">
                </div>
            </div>
            <div class="footer-col-2">
                <h3><img src="images/logo1.png" alt=""></h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="footer-col-3">
                <h3>Ut enim ad</h3>
                <ul>
                    <li>Blogs</li>
                    <li>Join us</li>
                    <li>Discount coupons</li>
                    <li>Refund policy</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>You can follow us on</h3>
                <ul>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>youtube</li>
                </ul>
            </div>
        </div>
        <hr>
            <p class="copyright">Copyright 2020 - Mini Project</p>
    </div>
</div>
<!------------------js for menu toggling---------->
<script>
    var items=document.getElementById("items");
    items.style.maxHeight="0px";

    function toggle(){
        if(items.style.maxHeight=="0px"){
            items.style.maxHeight="200px";
        }
        else{
            items.style.maxHeight="0px";
        }
    }
</script>
</body>
</html>
