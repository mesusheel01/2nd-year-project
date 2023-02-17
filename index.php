<!doctype html>
<html>


<head>
    <!-- <meta name="viewport"  -->
    <!-- content="width=device-width,initial-scale=1">   -->
    <title> Survey Portal</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>

        <div class="project">
            <div class="nav">
                <div class="logo">
                    <a href="index.php"><img src="pictures/logo.png" alt="logo" id="logo"></a>
                </div>
                <div class="nav-btn">
                    <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a id="icon" href="index.php">HOME</a></li>
                        <li><a id="icon" href="survey.php">SURVEY</a></li>
                        <li><a id="icon" href="contact_us.php">CONTACT US</a></li>
                        <li><a id="icon" href="about_us.php">ABOUT US</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="p-section0">

                <div class="text0">
                    <h3 class="t1"> SURVEY</h3>
                    <h3 class="t2"> PORTAL</h3>
                    <div class="text00">
                        <p> We are providing a platform to create the best survey in the college. our survey
                            are safe,
                            reliable and more accurate.</p>
                    </div>
                    <div class="signup">
                        <input class="button" onclick="document.location = 'login.php'" type="button" name="sigh"
                            value="SIGN UP">
                        <input class="button" onclick="document.location = 'survey.php'" type="button" name="sigh"
                            value="START A SURVEY">
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div class="p-section1">
                <div class="text1">
                    <h3 class="t3"> CONDUCT A SURVEY</h3>
                    <h3 class="t4"> WITH ONE CLICK</h3>
                    <div class="text11">
                        <p>
                            Just enter the questions and get the survey ready to works
                            for you just with a single click you can also create
                            survey and collect the information related to what you want.
                        </p>
                    </div>
                    <div class="p-survey">
                        <input class="button" onclick="document.location = 'survey.php'" type="button" name="sigh"
                            value="PREVIOUS SURVEY">
                    </div>
                </div>
            </div>

        </section>
        <section class="section2">
            <div class="p-section2">
                <div class="text2">
                    <h3 class="t5"> CREATE YOUR</h3>
                    <h3 class="t6"> OWN SURVEY</h3>
                    <div class="text22">
                        <p>
                            Best way to know about the college and your surroundings. create your own
                            questionnaire or pool.
                        </p>
                    </div>
                    <div class="start-s">
                        <input class="button" onclick="document.location = 'survey.php'" type="button"
                            value="START YOUR OWN SURVEY">
                    </div>
                </div>


            </div>
        </section>
        <section>
            <div class="p-section3">
                <div class="text3">
                    <h3 class="t7"> CONTACT US</h3>
                    <div class="form1">
                        <SPAN class="f-text">Name*</SPAN>
                        <input class="f-input" type="text" placeholder=" Your Name ">
                        <SPAN class="f-text">Last Name</SPAN>
                        <input class="f-input" type="text" placeholder="Your Last Name">
                        <SPAN class="f-text">Your Email*</SPAN>
                        <input class="f-input" type="email" placeholder=" Your Email Address ">
                        <SPAN class="f-text">Message*</SPAN>
                        <textarea id="f-message" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="s-button">
                        <input class="button" type="submit">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="p-footer">
            <div class="fo-text">
                <span>SURVEY PORTAL</span>
                <div class="f-icon">
                    <ul>
                        <li><a href="#"><img id="f-icon1" src="twitter.png"></a> </li>
                        <li><a href="#"><img id="f-icon2" src="insta.png"></a></li>
                        <li><a href="#"><img id="f-icon3" src="facebook.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="contacts">
                <div class="fc-text">
                    <span class="t9">CONTACTS</span>
                </div>
                <div class="gmail">
                    <span><b>surveyportal@gmail.com</b></span>
                    <span><b>999-999-999-9</b></span>
                </div>
            </div>

        </div>
    </footer>

    </div>
    </div>
    </div>



</body>

</html>