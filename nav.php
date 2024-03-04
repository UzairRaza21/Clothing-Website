<?php

if(!session_id()){
    session_start();
}


?>

<!-- Nav Start -->
<?php
                if (isset($_SESSION['id'])) {
                ?>
                     <!-- Nav Start -->
                     <nav>
        <div id="logo-pic">
            <img src="./lmages/logo.jpg" alt="threads" width="180" height="60">
        </div>
        
        <div>
            <ul id="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./logout.php">Logout</a></li>
                <li><a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 18px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a></li>
                <li><a href="" style="margin-left: 40px; color: whitesmoke; font-size: 18px;"><i class="fa-solid fa-user"></i>    <?php echo $_SESSION['username'] ?></a></li>
            </ul>
        </div>

        <div id="menu" >
            <img onclick="openMenu()" src="./lmages/hamburger.png" alt="menu" width="20">
            <a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 20px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a>
        </div>
    </nav>
    
    <div id="nav-col" >
        <div id="nav-col-links" class="nav-col-links">
            <a id="link" href="./index.php">Home</a>
            <a id="link" href="./products.php">Products</a>
            <a id="link" href="./contact.php">Contact</a>
            <a id="link" href="./logout.php">Logout</a>
        </div>
        
    </div>
    <!-- Nav End -->

    <?php
                } else {
                ?>
    <nav>
        <div id="logo-pic">
            <img src="./lmages/logo.jpg" alt="threads" width="180" height="60">
        </div>
        
        <div>
            <ul id="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 18px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a></li>
            </ul>
        </div>

        <div id="menu" >
            <img onclick="openMenu()" src="./lmages/hamburger.png" alt="menu" width="20">
            <a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 20px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a>
        </div>
    </nav>
    
    <div id="nav-col" >
        <div id="nav-col-links" class="nav-col-links">
            <a id="link" href="./index.php">Home</a>
            <a id="link" href="./products.php">Products</a>
            <a id="link" href="./contact.php">Contact</a>
            <a id="link" href="./login.php">Login</a>
        </div>
        
    </div>

                <?php
                }
                ?>
    <!-- Nav End -->





