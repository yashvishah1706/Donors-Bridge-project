<!DOCTYPE html>
<html>
<head>
    <title>Donors Bridge</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="resources/logo.jpeg">
</head>
<body>
    <section class="header1">
        <nav>
            <a href="index.html"><img src="resources/logo.jpeg" alt="hi"></a>
            <div class="nav-links1">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="registration.php">REGISTER</a></li>
                    <li><a href="index.html#findonor">FIND DONOR</a></li>
                    <li><a href="whydonateblood.html">WHY DONATE BLOOD</a></li>
                    <li><a href="canyoudonate.html">CAN YOU DONATE</a></li>
                    <li><a href="aboutus.html">REFER A FRIEND</a></li>
                    <li><a href="contacts.php">CONTACT US</a></li>
                    <li><a href="emergency.html">It's an emergency!</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="ratio">
        <div class="dnprocess">
            <h1>
                Contact Us
            </h1>
        </div>
        <div id="ratio1" class="ratio1" action="contact.php">
            <form action="contact.php" method="post">
                <label>YOUR NAME</label>
                <input type="text" name="name" value="" placeholder="YOUR NAME" required><br>
                <label>NUMBER</label>
                <input type="text" name="number" value="" placeholder="NUMBER" required><br>
                <label>EMAIL</label>
                <input type="email" name="email" value="" placeholder="EMAIL" required>
                <br>
                <label>Message</label>
                <input type="text" name="message" value="" placeholder="Enter Message Here" required>
                <br>
                <button name="submit">Submit</button>
            </form>
        </div>
        <div class="ratinfo">
            <h1>ADDRESS</h1>
            <p>231, Vaikom Road, Near thalook hospital<br>Mumbai,Maharashtra</p>
            <h1>CONTACT NUMBER</h1>
            <p>MOBILE: +91 7558 9513 51 | 
            TELEPHONE: 0484-292674</p>
            <p>EMAIL: <a href="mailto:DonorsBridge@gmail.com">DonorsBridge@gmail.com</a></p>
        </div>
    </section>
    <section class="bottom" style="padding-top: 4.4cm;">
        <div class="footer">
            <div class="col-1">
                <h3>USEFUL LINKS</h3>
                <a href="index.html">HOME</a>
                <a href="registration.html">REGISTRATION</a>
                <a href="whydonateblood.html">WHY DONATE BLOOD</a>
                <a href="canyoudonate.html">CAN YOU DONATE</a>
                <a href="contacts.php">CONTACT US</a>
            </div>
            <div class="col-2">
                <h3> NEWSLETTER</h3>
                <form>
                <input type="email" name="footeremail" placeholder="Your Email Address" required="" fdprocessedid="garhud" style="
    margin-right: 60px;">
                    <br>
                    <button type="submit">SUBSCRIBE NOW</button>
                </form>
            </div>
            <div class="col-3">
                <h3> CONTACT</h3>
                <br>
                <p>231, vaikom Road, Near Thalook hospital<br>Mumbai,Maharashtra<br>Contact: +91 7558 9513 51</p>
            </div>
        </div>
    </section>
</body>
</html>