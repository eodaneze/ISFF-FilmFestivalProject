<?php 
$title = "volunteer";
  require_once('./home-header.php');
  require_once('./home-navbar.php')
?>
<style>
.register-hero {
    background: linear-gradient(rgba(27, 39, 61, 0.9), rgba(27, 39, 61, 0.9)), url(./assets/img/register-hero.webp) center/cover no-repeat fixed;
    height: 50vh;
}

.register-hero-text {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 70vh;
    color: white;
    text-align: center;
}

.register-hero-text h1 {
    font-family: var(--font);
    font-size: 50px;
    text-transform: uppercase;

}
</style>

<body style="background-color: #f1f1f1;">
    <div>
        <div class="register-hero">
            <div class="container register-hero-text">
                <div>
                    <h1>Volunteer</h1>
                    <p>
                        <span><a href="./index.html">Home</a>/</span>
                        <span>Register</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- form-box -->
        <div class="container mt-5">
            <?php
              require_once('./message.php')
            ?>
            <div class="text-center mb-4">
                <h1 style="color: #1B273D; font-weight:900">WE'RE GLAD TO HAVE YOU WITH US</h1>
                <p>International Student Film Festival (ISFF) is open to work with interested persons, company, etc.</p>
                <div class="mt-5 mb-4">
                    <h3 style="color: #1B273D; font-family: 'Roboto', sans-serif;">VOLUNTEER REGISTRATION FOR
                        INTERNATIONAL STUDENT FILM FESTIVAL (ISFF)
                        2023 IS NOW ON.</h3>
                    <p>Volunteering is NOT a paid position, BIFF expects young people interested in film to take
                        advantage of the opportunities offered. Volunteers MUST reside in Yenagoa, as NO provision for
                        accommodation or inter-state transportation will be made. Volunteers MUST be above 18 years of
                        age.</p>
                    <p>Preference will be given to Theatre arts and Film Studies students.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <form action="./includes/volunteer.php" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="" class="fw-bold">FirstName</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="fw-bold">LastName</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label for="" class="fw-bold">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label for="" class="fw-bold">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label for="" class="fw-bold">Select Capacity that you wish to work in</label>
                                <select name="capacity" id="" class="form-control">
                                    <option>USHERING</option>
                                    <option>PROTOCOL</option>
                                    <option>SECURITY</option>
                                    <option>
                                        WELFARE</option>
                                    <option>STILL PHOTO</option>
                                    <option>PUBLICITY</option>
                                    <option>FESTIVAL ASSISTANT</option>
                                    <option>TECHNICAL</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 mb-3">
                            <p>Do you have any experience in film festival?</p>
                            <input type="radio" name="exp" value="YES">YES
                            <input type="radio" name="exp" value="NO">NO
                        </div>
                        <div class="mt-4 mb-3">
                            <label for="">Say a word of commitment</label>
                            <textarea name="commit" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 bg-white shadow border p-5">
                    <img src="./assets/img/flyer.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!--end of form-box -->
    </div>
</body>

<?php
  require_once('./home-footer.php');
?>