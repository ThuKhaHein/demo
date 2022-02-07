<?php 
include('db.php');
    $sr_no=1;
    $sql_get = mysqli_query($con, "SELECT * FROM categories");
    while($main_result = mysqli_fetch_assoc($sql_get)) :?>

<a href="info.php?id=<?php echo $main_result['id[1]'];?>" class="text-primary"><i class="fas fa-tools"></i> edit</a>
 <?php endwhile ?>