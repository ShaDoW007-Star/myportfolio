<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$database = "portfolio";

$con = mysqli_connect($server, $username, $password, $database);

if($con){
    // echo "Connection Successful";
}else{
    echo "<script>alert('Connection Failed');</script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contactme` VALUES ('$name','$email','$project','$message');";
    $result = mysqli_query($con, $sql);
    if ($result) {
    } else {
        echo "<script>alert('Insert Not Submitted')</script>";
    }

}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
</head>

<body>
    <section class="pt1" id="home">
        <Nav class="nav">
            <div class="name">
                <h1>
                    Aryan
                </h1>
            </div>
            <div>
                <ul class="head">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skill">Skill</a></li>
                    <li><a href="#qualification">Qualification</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                    <li><i class="fa-regular fa-moon" style="color: grey;"></i></li>
                </ul>
            </div>
        </Nav>
        <div class="side">
            <div class="site">
                <i class="fab fa-github"></i><br>
                <i class="fab fa-linkedin-in"></i><br>
                <i class="fab fa-instagram"></i><br>
            </div>
            <div class="info">
                <h1>Hi, i am Aryan</h1>
                <h2>Web Developer</h2>
                <h3>High level experience in web degin and <br> development knowledge, producing <br> quality work</h3>
                <a href="#contact">
                    <button>Contact Me&nbsp;&nbsp;<i class="fa-regular fa-paper-plane"></i></button>
                </a>
            </div>
            <div class="img">
                <img src="Aryan_photo.jpg" alt="Image Err" height="450px" width="450px">
            </div>
        </div>
        <br>
        <br>
    </section>
    <section class="pt2" id="about">
        <!-- <i style="display:inline-block; margin-top:8rem; margin-left:10rem; font-family: Segoe UI, serif; font-size:2rem">About Me</i> -->
        <h1 style="text-align:center; margin-top:8rem;">About Me</h1>
        <div style="display:flex;" class="med-about">
            <div>
                <img src="Aryan_photo.jpg" class="med-about-img" alt="" height="400px" width="400px">
            </div>
            <div class="info1">
                <h1>Web development, with extensive knowledge <br> and years of experience, working in web <br> technologys and UI/UX design delivering <br> quality work</h1>
                <i class="up med-up">08+</i>
                <i class="up">20+</i>
                <i class="up">05+</i><br>
                <ul class="down">
                    <li id="med-down">Year <br> experience</li>
                    <li>completed <br> project</li>
                    <li>companies <br> worked</li>
                </ul>
                <a href="aryan-resume.pdf">Download CV&nbsp;&nbsp;<i class="fas fa-download"></i></a>
            </div>
        </div>
        <br>
        <br>
    </section>
    <section class="pt3" id="skill">
        <!-- <i style="display:inline-block; margin-top:6rem; margin-left:42rem; font-family: Segoe UI, serif; font-size:2rem">My Skills </i> -->
        <h1 style="text-align:center; margin-top:8rem;">Skills</h1>
        <div class="skill_box">
            <div class="content open">
                <div style="display:flex;" class="skill_head">
                    <div style="font-size: 2rem; color:blue">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="first_skill">
                        <h1>Front-End Developer</h1>
                        <span>More than 4 years</span>
                    </div>
                    <i class="fa-solid fa-angle-down" style="margin-left:3rem; margin-top:.5rem"></i>
                </div>
                <div class="skill_list db_skill">
                    <div>
                        <div class="skill_data">
                            <h1>HTML</h1>
                            <h1>90%</h1>
                        </div>
                        <div class="line">
                            <span class="per html"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>CSS</h1>
                            <h1>80%</h1>
                        </div>
                        <div class="line">
                            <span class="per css"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>JavaScript</h1>
                            <h1>60%</h1>
                        </div>
                        <div class="line">
                            <span class="per js"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content close">
                <div style="display:flex;" class="skill_head">
                    <div style="font-size: 2rem; color:blue">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="second_skill">
                        <h1>Back-End Developer</h1>
                        <span>More than 4 years</span>
                    </div>
                    <i class="fa-solid fa-angle-down" style="margin-left:3rem; margin-top:.5rem"></i>
                </div>
                <div class="skill_list db_skill">
                    <div>
                        <div class="skill_data">
                            <h1>PHP</h1>
                            <h1>90%</h1>
                        </div>
                        <div class="line">
                            <span class="per php"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>Python</h1>
                            <h1>85%</h1>
                        </div>
                        <div class="line">
                            <span class="per python"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>Java</h1>
                            <h1>70%</h1>
                        </div>
                        <div class="line">
                            <span class="per java"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>C++</h1>
                            <h1>65%</h1>
                        </div>
                        <div class="line">
                            <span class="per cpp"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content close">
                <div style="display:flex;" class="skill_head">
                    <div style="font-size: 2rem; color:blue">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <div class="third_skill">
                        <h1>Database Developer</h1>
                        <span>More than 4 years</span>
                    </div>
                    <i class="fa-solid fa-angle-down" style="margin-left:3rem; margin-top:.5rem"></i>
                </div>
                <div class="db_skill skill_list">
                    <div>
                        <div class="skill_data">
                            <h1>MySQL</h1>
                            <h1>95%</h1>
                        </div>
                        <div class="line">
                            <span class="per mysql"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>MongoDB</h1>
                            <h1>80%</h1>
                        </div>
                        <div class="line">
                            <span class="per mongodb"></span>
                        </div>
                    </div>
                    <div>
                        <div class="skill_data">
                            <h1>MariaDB</h1>
                            <h1>70%</h1>
                        </div>
                        <div class="line">
                            <span class="per mariadb"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt4" id="qualification">
        <!-- <i style="display:inline-block; margin-top:6rem; margin-left:42rem; font-family: Segoe UI, serif; font-size:2rem">Qualification</i> -->
        <h1 style="text-align:center;">Qualification</h1>
        <div class="qul">
            <div class="edu">
                <i class="fa-solid fa-graduation-cap"></i>
                <h1>Education</h1>
            </div>
            <div class="work">
                <i class="fa-solid fa-briefcase"></i>
                <h1>work</h1>
            </div>
        </div>
        <div class="quli">
            <div class="gridd">
                <div class="q1">
                    <h2>Computer Science Engineering <br> with Cloud Computing</h2>
                    <span>Bachelor of Technology</span>
                    <h3>Parul Institute of Technology</h3>
                    <h4><i class="fa-solid fa-calendar-days"></i>&nbsp; 2022 - 2025</h4>
                </div>
                <div>
                    <span class="round"></span>
                    <span class="line1"></span>
                </div>
                <div></div>
            </div>
            <div class="gridd">
                <div></div>
                <div>
                    <span class="round"></span>
                    <span class="line1"></span>
                </div>
                <div class="q2">
                    <h2>Computer Engineering</h2>
                    <span>Diploma</span>
                    <h3>Shree K.J Polytechnic</h3>
                    <h4><i class="fa-solid fa-calendar-days"></i>&nbsp; 2019 - 2022</h4>
                </div>
            </div>
            <div class="gridd">
                <div class="q3">
                    <h2>10th Schooling</h2>
                    <h3>Sanskar Bharti Vidhyalaya</h3>
                    <h4><i class="fa-solid fa-calendar-days"></i>&nbsp; 2019</h4>
                </div>
                <div>
                    <span class="round"></span>
                    <!-- <span class="line1"></span> -->
                </div>
                <div></div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <section class="pt5">
        <div class="box">
            <div class="box_info">
                <h1>You have a new project</h1>
                <h4>Contact me now and get a 30% discount on <br> your new project.</h4>
                <a href="#contact">
                    <button>Contact Me&nbsp;&nbsp;<i class="fa-regular fa-paper-plane"></i></button>
                </a>
            </div>
            <div class="box_img">
                <img src="Aryan_photo.jpg" alt="Img Err" height="200px" width="200px">
            </div>
        </div>
        <!-- <div>
            <i style="display:inline-block; margin-top:6rem; margin-left:42rem; font-family: Segoe UI, serif; font-size:2rem">Testimonial</i>
            <div class="all_client slideshow-container">
                <div class="feedback mySlides fade">
                    <div style="display: flex;">
                        <div>
                            <img src="Aryan_photo.jpg" alt="img err" height="40px" width="40px" style="border-radius: 50%; margin-top:1rem; margin-left:1rem;">
                        </div>
                        <div class="client_info">
                            <h4>Aryan Patel</h4>
                            <span>Client</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="client_feedback">
                            i get a good impression, i care out my project with <br> all the posibile quality and attention and support <br> 24 hours a day
                        </h5>
                    </div>
                </div>

                <div class="feedback mySlides fade">
                    <div style="display: flex;">
                        <div>
                            <img src="Aryan_photo.jpg" alt="img err" height="40px" width="40px" style="border-radius: 50%; margin-top:1rem; margin-left:1rem;">
                        </div>
                        <div class="client_info">
                            <h4>Aryan Patel</h4>
                            <span>Client</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="client_feedback">
                            i get a good impression, i care out my project with <br> all the posibile quality and attention and support <br> 24 hours a day
                        </h5>
                    </div>
                </div>

                <div class="feedback mySlides fade">
                    <div style="display: flex;">
                        <div>
                            <img src="Aryan_photo.jpg" alt="img err" height="40px" width="40px" style="border-radius: 50%; margin-top:1rem; margin-left:1rem;">
                        </div>
                        <div class="client_info">
                            <h4>Aryan Patel</h4>
                            <span>Client</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="client_feedback">
                            i get a good impression, i care out my project with <br> all the posibile quality and attention and support <br> 24 hours a day
                        </h5>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="pt6" id="contact">
        <!-- <i style="display:inline-block; margin-top:6rem; margin-left:42rem; font-family: Segoe UI, serif; font-size:2rem">Contact Me</i> -->
        <h1 style="text-align:center; margin-top:8rem;">Contact Me</h1>
        <div class="contact">
            <div style="margin-bottom: 3rem; margin-left:1.5rem;">
                <div class="contact_info">
                    <div style="font-size: 1.8rem; margin-top:.3rem; color: hsl(250, 69%, 61%);">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact_info_1">
                        <h3>Call Me</h3>
                        <span>+91 63551 35958</span>
                    </div>
                </div>
                <div class="contact_info">
                    <div style="font-size: 1.8rem; margin-top:.5rem; color: hsl(250, 69%, 61%);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact_info_1">
                        <h3>Email</h3>
                        <span>patelaryan68896@gmail.com</span>
                    </div>
                </div>
                <div class="contact_info">
                    <div style="font-size: 1.8rem; margin-top:.5rem; color: hsl(250, 69%, 61%);">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact_info_1">
                        <h3>Location</h3>
                        <span>Surat, Gujarat</span>
                    </div>
                </div>
            </div>
            <div>
                <form action="index.php" method="POST">
                    <div class="all_info">
                        <div class="med-temp">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <input type="text" name="project" placeholder="Project" size="65" class="med-input"><br>
                        <textarea name="message" id="" cols="60" rows="10" placeholder="Message" class="med-input"></textarea><br>
                        <button class="btn">Submit <i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div style="display: flex; flex-wrap:wrap; justify-content:space-around; margin-bottom:6rem;">
            <div class="foot_info">
                <h2>Aryan Patel</h2>
                <h4>&nbsp;&nbsp;Web Developer</h4>
            </div>
            <div class="foot_site">
                <h3><a href="#qualification">Qualification</a></h3>
                <h3><a href="#home">Portfolio</a></h3>
                <h3><a href="#contact">Contact Me</a></h3>
            </div>
            <div class="foot_logo">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <h4 style="text-align: center; font-size:1.2rem; color:white; font-weight:500;">&copy; All Right Reserved</h4>
        <br>
    </footer>
    </div>
</body>
<script>
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="add.js"></script>

</html>