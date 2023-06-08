<?php 
$title = "Register";
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
                    <h1>Register</h1>
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
                <h1>FESTIVAL REGISTRATION FORM</h1>
                <p>Please use the form below to register to attend Bayelsa International Film Festival. Registration is
                    FREE!</p>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <form action="./includes/register.php" method="post">
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
                                <label for="" class="fw-bold">Country of Residence</label>
                                <select name="country" class="form-control">
                                    <option>Nigeria</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label for="" class="fw-bold">Organization/Institution</label>
                                <input type="text" name="org" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label for="" class="fw-bold">Select the option that best describe you</label>
                                <select name="best_opt" id="" class="form-control">
                                    <option>STUDENT</option>
                                    <option>INDUSTRY DELEGATE</option>
                                    <option>SELECTED FILMMAKER</option>
                                    <option>NOMINEE</option>
                                    <option>PANELIST</option>
                                    <option>AWARD RECIPIENT</option>
                                    <option>MEDIA</option>
                                    <option>FESTIVALIA</option>
                                    <option>OBSERVER</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 mb-3">
                            <input type="checkbox" name="checks"
                                value="I would like to receive email updates regarding future festivals"> I would like
                            to receive email updates
                            regarding future
                            festivals
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