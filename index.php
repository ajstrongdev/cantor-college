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
            <div class="center">
                <h1>Computing courses</h1>
            </div>
            <div class="flex-container">
                <div class="flex-item-3">
                    <img src="assets/images/atrium-2.webp" alt="Cantor College Atrium facing a whiteboard" />
                    <p>
                    The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.
                    </p>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/atrium-3.webp" alt="Cantor college atrium facing couches">
                    <p>
                    The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer science, software development, information systems, networking and software engineering. It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.
                    </p>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/playstation-lab.webp" alt="Couches and lounge facilities within Cantor College">
                    <p>
                    The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="center">
                <h1>Design courses</h1>
            </div>
            <div class="flex-container">
                <div class="flex-item-3">
                    <img src="assets/images/lecture-hall.webp" alt="Cantor College Atrium facing a whiteboard" />
                    <p>
                    The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.
                    </p>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/skyline.webp" alt="Cantor college atrium facing couches">
                    <p>
                    The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.
                    </p>
                </div>
                <div class="flex-item-3">
                    <img src="assets/images/cantor-couches.webp" alt="Couches and lounge facilities within Cantor College">
                    <p>
                    You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.
                    </p>
                </div>
            </div>
        </div>

        <div class="sbs-holder">
            <div class="sbs-container">
                <div>
                    <img src="assets/images/banner-gallery.webp" alt="Artwork created and displayed within Cantor College" />
                </div>
                <div>
                    <h1>Our College</h1>
                    <p>
                     At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers.
                    </p>
                </div>
            </div>
        </div>
        <div class="sbs-holder">
            <div class="sbs-container">
                <div>
                    <img src="assets/images/friends.webp" alt="Group of friends doing coursework" />
                </div>
                <div>
                    <p>
                    Our students have gone on to successful careers in a wide range of industries across the globe.  Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career. </p>
                </div>
            </div>
        </div>

        <div class="form-cont">
            <form action="mailto:enquiries@cantor.ac.uk" method="post" name="contactForm" enctype="text/plain" onsubmit="return validateForm()">
                <h1>Contact us:</h1>
                <label>Name: <input type="text" name="Name"></label> <br>
                <label>Email: <input type="text" name="Email"></label> <br>
                <input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>

        <?php
            // Add footer
            include("includes/footer.php");
        ?>
        
</body>
</html>