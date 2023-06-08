<?php
$title = 'Testimonials';
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

?>
<main class="main" id="main">
    <h3>ISFF | ADD News </h3>

    <div class="mt-5 border p-5">
        <form action="./includes/addNews.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="">title</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="">News Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Upload Image</label>
                    <input type="file" name="file" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <label for="">News content</label>
                    <textarea name="write" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div>
                <button class="btn btn-secondary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?php
  require_once('./footer.php');
?>horext