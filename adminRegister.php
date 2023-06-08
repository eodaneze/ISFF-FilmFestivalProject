<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #37517E;
}

.all-form {
    background-color: white;
    padding: 10px;
}

.form-1 {
    display: flex;
    align-items: center;
    border: 1px solid #555;
    width: 450px;
    padding: 8px;
    margin-bottom: 15px;
}

.form-1 input {
    border: none;
    background-color: transparent;
    outline: none;
    margin-left: 10px;
    width: 100%;
}
</style>

<body>
    <div class="all-container">
        <div class="text-center">

            <img src="./assets/img/small-fev.png" alt="">
            <h3 class="logo me-auto text-white">
                Admin Register
            </h3>
        </div>
        <div class="all-form">
            <form action="./includes/adminRegister.php" method="post" enctype="multipart/form-data">
                <div class="form-1">
                    <i class="fa fa-user"></i>

                    <input type="text" name="name" placeholder="Enter name">
                </div>
                <div class="form-1">
                    <i class="fa fa-envelope"></i>

                    <input type="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-1">
                    <i class="fa fa-user"></i>

                    <input type="text" name="uname" placeholder="Enter Username">
                </div>
                <div class="form-1">
                    <i class="fa fa-lock"></i>

                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div class="form-1">
                    <i class="fa fa-upload"></i>

                    <input type="file" name="file">
                </div>
                <div class="form-s">
                    <button name="submit" class="btn btn-block w-100 text-white text-uppercase"
                        style="background-color: #37517E;">Register</button>
                </div>
                <div class="text-center mt-4">
                    <p>Already have an account? <a href="./adminLogin.php">Login</a></p>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>