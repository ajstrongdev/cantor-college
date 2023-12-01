<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cantor College</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <script src="assets/js/navbar.js" defer></script>
    <script src="assets/js/validation.js" defer></script>
    <link rel="icon" type="image/png" href="assets/images/logo-trans-cropped.png">
</head>
<body>

    <?php
        // Menu & Banner
        include("includes/header.php");
    ?>

        <div class="row">
            <div class="flex-container">
                <div class="flex-item-3">
                    <img src="assets/images/atrium-2.webp" alt="" />
                    <h1>Title</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.
                    </p>
                    <div class="button">
                        <a href="">Learn more</a>
                    </div>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/atrium-3.webp" alt="">
                    <h1>Title</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.
                    </p>
                    <div class="button">
                        <a href="">Learn more</a>
                    </div>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/cantor-couches.webp" alt="">
                    <h1>Title</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.
                    </p>
                    <div class="button">
                        <a href="">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sbs-holder">
            <div class="sbs-container">
                <div>
                    <img src="assets/images/banner-gallery.webp" />
                </div>
                <div>
                    <h1>Hello there,</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.</p>
                </div>
            </div>
        </div>
        <div class="sbs-holder">
            <div class="sbs-container">
                <div>
                    <img src="assets/images/friends.webp" />
                </div>
                <div>
                    <h1>Hello there,</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.</p>
                </div>
            </div>
        </div>

        <div class="form-cont">
            <form action="mailto:enquiries@cantor.ac.uk" method="post" name="contactForm" enctype="text/plain" onsubmit="return validateForm()">
                <h1>Contact us:</h1>
                Name: <input type="text" name="Name"> <br>
                Email: <input type="text" name="Email"> <br>
                <input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>

        <?php
            // Add footer
            include("includes/footer.php");
        ?>
        
</body>
</html>