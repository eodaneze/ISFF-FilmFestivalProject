<?php
require_once('./header.php');
require_once('./navbar.php');
require_once('./sidebar.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM user_register WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $country = $row['country'];
    $org = $row['org'];
    $best_opt = $row['best_opt'];
    $checks = $row['checks'];
    $date = $row['createddate'];
}

?>
<main class="main" id="main">
    <div class="container text-center alert alert-success">This registration was done by <?=$name?> at <?=$date?></div>

    <div>

        <table border="1" class="table table-bordered">
            <tr align="center">
                <td colspan="4" class="h2">User Details</td>
            </tr>
            <tr>
                <th scope>FirstName</th>
                <td><?=$name?></td>
                <th scope>LastName</th>
                <td><?=$lname?></td>

            </tr>
            <tr>
                <th scope>Email</th>
                <td><?=$email?></td>
                <th scope>Phone Number</th>
                <td><?=$phone?></td>

            </tr>
            <tr>
                <th scope>Country</th>
                <td><?=$country?></td>
                <th scope>Organization</th>
                <td><?=$org?></td>

            </tr>
            <tr>
                <th scope>User Type</th>
                <td><?=$best_opt?></td>
                <th scope>What to recieve email?</th>
                <td><?=$checks?></td>

            </tr>

            <tr>
                <th scope>Registered date</th>
                <td><?=$date?></td>
            </tr>
        </table>
    </div>
</main>
<?php
  require_once('./scripts.php');
  require_once('./footer.php');

?>