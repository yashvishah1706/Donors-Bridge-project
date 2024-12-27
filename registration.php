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
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li><a href="emergency.html">It's an emergency!</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <form class="registerform" name="registerform" action="process.php" method="post"> <!--Form begins here=============================================-->
    <section class="info">
        <div class="loinfo">
            <h3>Login Information</h3>
            <form1>
                <label for="name">FULL NAME</label>
                <input type="text" id="name" name="regsitername" placeholder="YOUR NAME">
                <label for="number">MOBILE NUMBER</label>
                <input type="tel" id="number" name="registernumber" placeholder="YOUR NUMBER">
            </form1>
            <form2>
                <label for="name">EMAIL</label>
                <input type="email" id="name" name="registeremail" placeholder="YOUR EMAIL">
                <label for="number">PASSWORD</label>
                <input type="password" id="number" name="registerpassword" placeholder="YOUR PASSWORD">
            </form2>
        </div>
        <div class="doninfo">
            <h3>Donor Information</h3>
            <form1>
                <label for="name">BLOOD GROUP</label>
                <select id="name" name="registerbloodgroup">
                    <option value="0">SELECT GROUP</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>>
                </select>
                <label for="name">BIRTH DATE (between 18-65) </label>
                <input type="date" id="name" name="registerbirthdate" placeholder="YOUR NUMBER" pattern="\d{4}-\d{2}-\d{2}">
            </form1>
            <form2>
                <label for="name">GENDER</label>
                <select id="name" name="registergender">
                    <option value="0">SELECT GENDER</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="OTHER">OTHER</option>
                </select>
                <label for="name">WEIGHT</label>
                <select id="name" name="registerweight">
                    <option value="0">SELECT WEIGHT (Minimum 45kg)</option>
                    <option value="45-50">45KG-50KG</option>
                    <option value="50-60">50KG-60KG</option>
                    <option value="60-70">60KG-70KG</option>
                    <option value="70-80">70KG-80KG</option>
                    <option value="80-90">80KG-90KG</option>
                    <option value="90-100">90KG-100KG</option>
                    <option value="100-110">100KG-110KG</option>
                    <option value="110-120">110KG-120KG</option>
                    <option value="120-130">120KG-130KG</option>
                    <option value="130-140">130KG-140KG</option>
                    <option value="140-150">140KG-150KG</option>
                    <option value="150-160">150KG-160KG</option>
                    <option value="160+">Above 160</option>
                </select>
            </form2>
        </div>
        <div class="coinfo">
            <h3>Contact Information</h3>
            <form1>
                <label for="name">SHOW MOBILE</label>
                <select id="name" name="registershowmobile">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
                <label for="number">STATE</label>
                <select id="name" name="registerstate">
                <option value="">SELECT STATE</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chattisgarh">Chattisgarh</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Harayana">Harayana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
            </form1>
            <form2>
                <label for="name">SMS ALERT</label>
                <select id="name" name="registersmsalert">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
                <label for="number">DISTRICT</label>
                <input type="text" id="number" name="registerdistrict" placeholder="ENTER YOUR DISTRICT ">

            </form2>
            <form3>
                <label for="name">ZIP CODE</label>
                <input type="text" id="name" name="registerzipcode" placeholder="YOUR ZIP CODE">
                <label for="number">AREA</label>
                <input type="text" id="number" name="registerarea" placeholder="YOUR AREA">
            </form3>
            <form4>
                <label for="name">NEARBY LANDMARKS</label>
                <input type="text" id="name" name="registerlandmarks" placeholder="NEARBY LANDMARKS">
            </form4>
            <button name="submit">
                SUBMIT
            </button>
        </div>
        <h1 style="padding-left: 5cm;">Already Registered ? Login <a style="color:#11ABB0" href="index.html">Here</a></h1>
        <br><br>
    </section>
</form> <!--Form ends here==================================================================-->
    <section class="bottom">
        <div class="footer">
            <div class="col-1">
                <h3>USEFUL LINKS</h3>
                <a href="index.html">HOME</a>
                <a href="registration.php">REGISTRATION</a>
                <a href="whydonateblood.html">WHY DONATE BLOOD</a>
                <a href="canyoudonate.html">CAN YOU DONATE</a>
                <a href="contacts.php">CONTACT US</a>
            </div>
            <div class="col-2">
                <h3> NEWSLETTER</h3>
                <form action="newsletter.php" method="post">
                 <!--Footer email form============================================-->
                 <input type="email" name="footeremail" placeholder="Your Email Address" required="" fdprocessedid="garhud" style="
    margin-right: 60px;
                    <br>
                    <button type="submit">SUBSCRIBE NOW</button>
                </form><!--Form ends====================================================-->
            </div>
            <div class="col-3">
                <h3> CONTACT</h3>
                <br>
                <p>231, vaikom Road, Near Thalook hospital<br>Mumbai, Maharastra, IN<br>Contact: +91 7558 9513 51</p>
            </div>
        </div>
    </section>
</body>
</html>