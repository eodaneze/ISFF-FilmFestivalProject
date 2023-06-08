<?php
   require_once('./header.php');
   require_once('./navbar.php');
   require_once('./sidebar.php');
?>
<main class="main" id="main">
    <h3>ISFF | All Registered User</h3>

    <div>

        <table class="table table-responsive table borderless bg-white border">
            <thead>
                <tr align="center">
                    <th>S/N</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $sql = "SELECT * FROM user_register WHERE deleted = 1";
                        $result = mysqli_query($con, $sql);
                        $num = 1;
                        
                        while($row = mysqli_fetch_array($result)){
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $country = $row['country'];

                            ?>
                <tr align="center">
                    <td><a href=""><?=$num++?></a></td>
                    <td><?=$fname?></td>
                    <td><?=$lname?></td>
                    <td><?=$email?></td>
                    <td><?=$phone?></td>
                    <td><?=$country?></td>
                    <td>
                        <button class="btn"><a href="./includes/delete.php?id=<?=$row['id']?>"><i
                                    class="fa-sharp fa-solid fa-xmark"></i></a></button>
                        <button class="btn"><a href="./singleUser.php?id=<?=$row['id']?>"><i
                                    class="fa-regular fa-eye"></i></a></button>
                    </td>
                </tr>

                <?php 
                        }
                     ?>
            </tbody>
        </table>
    </div>
</main>

<?php

  require_once("./footer.php");

?>