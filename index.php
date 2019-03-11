<?php
include_once 'header.php';
?>
<?php
include_once 'includes/dbh.inc.php';
?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Home</h2>
			
			<?php

			if(isset($_SESSION['u_id'])){
				?><h2><?php echo "You are logged in"; ?></h2>

				  <table  class ="table" style="width:80%; margin-left:140px; ">
				  	<tr><th class="tableheading"><h6>Product Type</h6></th><th class="tableheading"><h6>Description</h6></th><th class="tableheading"><h6>contact</h6></th></tr>
<?php 
$sql1 = "SELECT * FROM posts;";
$result = mysqli_query($conn, $sql1);
$resultCheck = mysqli_num_rows ($result);
  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        if($row ['id']%3==0){ 
        ?>
                       <tr>
                      <?php } ?>
          <td>
      
           <h6><?php echo $row['ptype']; ?></h6><br></td>
           <td><p class="p-description"><?php echo $row['pdes']; ?> </p><br></td>
           <td><h6><?php echo "Contact: ";
           echo $row['contact']; ?></h6><br>
           <button class="buybutton" type="button" >BUY</button>
         </td>
         <?php
         if($row ['id']%3==0){ 
        ?>               </tr>
                      <?php } ?>
<?php          
}
}
?>
</table>
<?php          
}
?>
		</div>
	</section>
	
<?php
include_once 'footer.php';
?>