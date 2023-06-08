<?php 
$title = "Home";
require_once('./home-header.php');
require_once('./home-navbar.php')
?>

<body style="background-color: #F1F1F1;">



    <div class="hero">
        <img src="./assets/img/slide/hero-pic.png" alt="" style="width: 100%; height: 100vh;">
    </div>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 bg-white shadow border p-3">
                        <div class="text-center">
                            <img src="./assets/img/founder.jpg" class="img-fluid" alt=""
                                style="width: 35rem; height: 35rem ;">
                            <h3 class="fw-bold">Amb. Dr. Lancelot Oduwa Imasuen</h3>
                            <h4>Founder ISFF</h4>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6 icon-boxes py-5 px-lg-5">
                        <h3 style="font-size: 40px;">WELCOME TO ISFF</h3>
                        <p>The International Student Film Festival is set up to encourage and promote young filmmakers
                            who are affiliated to film training institution within and beyond Africa.
                            Thus, filmmakers from Universities, Polytechnics, Colleges of Education, high school,
                            academies, are invited to participate by submitting their films or/and attending the
                            festival.</p>
                        <p>The festival is structured to continuously move from one campus to another each year with
                            engaging activities such as hands-on/practical master classes, film screenings, award night
                            and lots more.</p>

                        <p>ISFF is founded by the renowned international filmmaker, Amb. Dr. Lancelot Oduwa Imasuen (D
                            Guvnor) as another means to bring on board promising filmmakers and further strengthen the
                            capacity of the country's film industry as well as give these emerging filmmakers a sense of
                            belonging.</p>

                        <p>The maiden e2023dition of ISFF is set to take place at Igbenidion University Okada, from
                            Thursday
                            21st to Sunday 24th of September </p>




                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- about director -->
        <div class="bg-white p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="./assets/img/dir.jpg" alt="" style="width: 30rem;" class="img-fluid">
                        <h3>Micheal Chinda</h3>
                        <h5>ISFF Director</h5>

                    </div>
                    <div class=" col-lg-6">
                        <h4>About Director</h4>
                        <p>The International Student Film Festival (ISFF) is thrilled to announce Mr. Chinda Michael
                            Ezebunwor as the new festival director, this came after a rigorous scrutiny of applications
                            from various eligible individuals and filmmakers across the country.</p>
                        <p>Chinda is a skilled, passionate, and resilient filmmaker with numerous creative and award
                            winning audio-visual works to his credit. He holds a Bachelor of Arts (B.A) degree in Film
                            Studies from the University of Port Harcourt, and is currently pursuing Post Graduate
                            degrees at the University of Nigeria, Nsukka. Chinda is affiliated with Alex Ekwueme Federal
                            University Ebonyi State, where he lectures on practical film courses; and the Directors’
                            Guild of Nigeria (DGN) which is the umbrella body for film practitioners in Nigeria.
                            According to him, He is privileged, exhilarated, and challenged to have been appointed by
                            Amb. Dr. Lancelot Oduwa Imasuen (ISFF Founder).</p>
                        <div>
                            <a href="https://globalaffairsmag.com.ng/2023/05/31/international-student-film-festival-appoints-new-director-micheal-chinda/"
                                target="_blank"><button class="btn text-white" style="background-color: #428BCA;">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Counts Section
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>End Counts Section == -->

        <!-- what to expect ===============-->
        <section class="expect bg-white">
            <div class="container">
                <h1 class="text-center" style="color: #428BCA; font-size: 60px; font-weight: 900;">What to Expect</h1>
                <div class="row">
                    <?php
                       require_once('./includes/connection.php');
                       $sql = "SELECT * FROM expectation WHERE deleted = 1";
                       $result = mysqli_query($con, $sql);
                       while($row = mysqli_fetch_assoc($result)){
                           $title = $row['title'];
                           $pic = $row['pic'];
                           $write = $row['write_up'];

                           ?>

                    <div class="col-lg-4">
                        <img src="./includes/expectationdp/<?=$pic?>" alt="" class="img-fluid"
                            style="border-radius: 10px;">
                        <h3 class="text-center mt-3" style="color: #428BCA;"><?=$title?></h3>
                        <p><?=$write?></p>
                    </div>

                    <?php
                        }
                     ?>


                </div>
            </div>
        </section>
        <!--===========end of  what to expect -->


        <!-- news section================== -->
        <style>
        .news-header {
            text-align: center;
        }

        .news-header h1 {
            position: relative;
            color: white;
            padding-bottom: 10px;
            font-weight: bolder;
        }

        .news-header h1::before {
            content: "";
            position: absolute;
            width: 8rem;
            height: 2px;
            bottom: 0;
            background-color: #428BCA;
        }
        </style>
        <section class="news" id="news" style="background-color: #1B273D;">
            <div class="all-news">
                <div class="news-header">
                    <h1>Latest News</h1>
                </div>
                <div class="container">
                    <div class="row mb-4">
                        <?php
                       require_once('./includes/connection.php');
                       $sql = "SELECT * FROM news WHERE deleted = 1";
                       $result = mysqli_query($con, $sql);
                       while($row = mysqli_fetch_assoc($result)){
                           $title = $row['title'];
                           $pic = $row['pic'];
                           $write = $row['write_news'];
                           $author = $row['author'];
                           $link = $row['link'];
                           $date = $row['createddate'];

                           ?>

                        <div class="col-lg-4 mb-3">
                            <div class="card w-100 shadow">
                                <img src="./includes/newsdp/<?=$pic?>" class=" card-img-top" alt="..."
                                    style="height: 400px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="bg-white shadow p-2"><?=$date?></h5>
                                        <p>By <?=$author?></p>
                                    </div>
                                    <h5 class="card-title fw-bold" style="color: #1B273D;"><?=$title?></h5>
                                    <p class="card-text"><?=$write?></p>
                                    <a href="<?=$link?>" target="_blank" class="btn text-white"
                                        style="background-color: #428BCA;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }

                           ?>


                    </div>
                </div>
            </div>
        </section>
        <!-- end of news section================== -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <h3 style="color: #428BCA; font-size: 40px;">What Our Audience is Saying</h3>
                    <p>Film festivals are of grades and indeed ISFF is one with exception</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <div class="row">
                            <?php
                            require_once('./includes/connection.php');
                               $sql = "SELECT * FROM testimony WHERE deleted = 1";
                               $result = mysqli_query($con, $sql);
                               while($row = mysqli_fetch_assoc($result)){
                                   $name = $row['name'];
                                   $pic = $row['pic'];
                                   $position = $row['position'];
                                   $write = $row['write_test'];

                                   ?>

                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <img src="./includes/testimonialdp/<?=$pic?>" class="testimonial-img" alt="">
                                    <h3><?=$name?></h3>
                                    <h4><?=$position?></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        <?=$write?>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <?php
                               }
                            ?>


                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- film submit link -->
        <div class="film-link bg-white p-5 shadow mt-5 border">
            <div class="container">
                <div class="text-center">
                    <h3 class="mb-3">Click the link below to submit your movie</h3>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-12 text-center">

                        <a href="https://filmfreeway.com/TravelingInternationalStudentFilmFestival" target="_blank"><img
                                class=" img-fluid" src="./assets/img/Annotation 2023-05-31 142102.png" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of film submit link -->

        <!-- ======= Contact Section -->
        <section id="contact" class="contact section-bg">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3>Get In Touch With <span>Us</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                        atque vitae autem.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">

                            <div class="col-lg-6">

                                <div class="row justify-content-center">

                                    <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                        <i class="bx bx-map"></i>
                                        <h4>Address</h4>
                                        <p>A108 Adam Street,<br>New York, NY 535022</p>
                                    </div>
                                    <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                        <i class="bx bx-phone"></i>
                                        <h4>Call Us</h4>
                                        <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                                    </div>
                                    <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                        <i class="bx bx-envelope"></i>
                                        <h4>Email Us</h4>
                                        <p>contact@example.com<br>info@example.com</p>
                                    </div>
                                    <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                        <i class="bx bx-time-five"></i>
                                        <h4>Working Hours</h4>
                                        <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="email">Your Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" rows="8" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <?php
   require_once('./home-footer.php')
?>

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php
 require_once('./scripts.php')

?>

</body>

</html>