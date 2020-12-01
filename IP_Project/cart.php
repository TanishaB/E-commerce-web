<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All products - Tribal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a href="products.php">Category</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.html">Account</a></li>
                </ul>
    
            </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" width="30px" height="30px" onclick="toggle()">
    </div>

</div>

</body>  

<!------------------------------cart item details----------------------------->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pendant1.jpg">
                    <div>
                        <p>Pack of 30 pendants</p>
                        <small>Price: 500/-</small>
                    </div>
                </div>
            </td>
            <td>1</td>
            <td>500/-</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pendant1.jpg">
                    <div>
                        <p>Pack of 30 pendants</p>
                        <small>Price: 500/-</small>
                        
                    </div>
                </div>
            </td>
            <td>1</td>
            <td>500/-</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>1000/-</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>50/-</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>1050/-</td>
            </tr>
        </table>
    </div>
</div>

<a class="check" href="checkout.html" align="center">Click to Checkout</a>




<!-------------------------------------footer-------------------------------------->







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