<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Personal CSS -->
        <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
        <link rel="stylesheet" href="css/navigation-general.css">
        <link rel="stylesheet" href="css/style5.css">
        <title>Order Status</title>
    </head>
    <body>
        <!-- Start of Header -->
        <header class="main-screen-header">
            <a href="mainscreen.php" class="logo-link">
                <div class="logo-container">
                    <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
                    <h1 class="abc-mall">ABC Mall</h1>
                </div>
            </a>
            <form action="" method="post">
                <div class="search-container">
                    <input type="text" name="search-nav" id="search-nav" placeholder="SEARCH">
                    <button type="submit" id="search-nav-submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="" id="profile-icon-nav">
                <div class="profile-container">
                    <a href=""><img class="shop-cart" src="DesignMaterials/Icons/shopping_cart_white_24dp.svg" alt="shopping cart icon"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                </div>  
            </a>
        </header>
        <!-- End of Header -->

        <!-- Start of Order Status Container -->
        <div class="order-status-container">
            <div class="os-left">
                <div class="os-left-item">
                    <img src="DesignMaterials/Icons/image_black_24dp.svg" alt="">
                </div>
                <div class="os-left-text">
                    <h2>Akio Item 1: Limited Edition</h2>
                    <h3 id="os-left-text-price">PHP 7.69</h3>
                    <h3>Placed: November 20, 2021</h3>
                    <h3>Arrival: November 25, 2021</h3>
                </div>
            </div>
            <div class="os-right">
                <div class="os-right-text">
                    <h2>Status of Shipping</h2>
                    <h3>Order ID: <span>430060271130382</span></h3>
                    <h3>Address:
                        <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Curabitur vitae ante non leo tristique hendrerit sit amet vel nisi.
                        </span>
                    </h3>
                    <h3>Status: <span>To be delivered</span></h3>
                </div>
                <div class="os-right-payment">
                    <a href="#" class="btn-payment">Payment Status/Payment Method</a>
                </div>
            </div>
        </div>
        <!-- End of Order Status Container -->
    </body>
</html>