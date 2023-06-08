<?php
$title = 'Testimonials';
  require_once('./header.php');
//   require_once('./home-header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

?>
<main class="main" id="main">
    <h3>ISFF | VIEW TESTIMONIALS</h3>
    <?php
    require_once('./message.php')
    ?>

    <div class="row container">
        <?php
         $sql = "SELECT * FROM testimony WHERE deleted = 1";
         $result = mysqli_query($con, $sql);
         while($row = mysqli_fetch_assoc($result)){
             $name = $row['name'];
             $pic = $row['pic'];
             $position = $row['position'];
             $write = $row['write_test'];
             $id = $row['id'];

             ?>

        <div class="col-lg-6 bg-white shadow text-center p-3">
            <img src="./includes/testimonialdp/<?=$pic?>" alt="" style="width: 8rem; height: 8rem; border-radius: 50%">
            <h4><?=$name?></h4>
            <h5><?=$position?></h5>
            <a href="./includes/deleteTestimonials.php?id=<?=$id?>"><i class="fa fa-trash text-danger"></i></a>
            <!-- <a href="./editTestimonials.php?id=<?=$id?>" class="mx-3"><i class="fa fa-edit text-success"></i></a> -->
            <p>
                <i class="fa-solid fa-quote-left"></i>
                <?=$write?>
                <i class=" fa-solid fa-quote-right"></i>
            </p>
        </div>
        <?php
            
         }

             

        ?>

    </div>
</main>
<?php
  require_once('./footer.php');
?>