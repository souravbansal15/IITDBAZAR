 <?php
include_once 'header.php';
?>

<?php

					if(isset($_SESSION['u_id'])){
echo'  <div class="page">


        <table>
          <form action="includes/input.inc.php" method="POST">
            <tr>
              <td> <label>Name :</label></td>
              <td><input type="text" name="f_name" autocomplete="off"></td>
            </tr>
            <tr>
              <td><label for="">Hostel :</label></td>
              <td> <input type="text" name="f_hostel" autocomplete="off"></td>
            </tr>
            <tr>
              <td><label for=""> Contact no. :</label></td>
              <td><input type="text" name="f_contact" autocomplete="off"></td>
            </tr>
            <tr>
              <td>Product Type :</td>
              <td><select   name="f_ptype">
  <option value="books">books</option>
  <option value="electronics">electronics</option>
  <option value="stationary">stationary</option>
  <option value="lab">lab</option>
</select></td>
            </tr>
            
            <tr>
              <td><label for="">Description :</label></td>
              <td> <input type="text" name="f_pdes" autocomplete="off"></td>
            </tr>

            <tr>
              <td> <label for="">Selling Price :</label></td>
              <td> <input type="text" name="f_psell" autocomplete="off"></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="btn btn-primary" name="submit">Submit</button></td>
            </tr>

          </form>
        </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="index.js" charset="utf-8"></script>
';
				} else {
		echo"<h1>Please Log In to see the contents of the website</h1>";
					}

?>
<?php
include_once 'footer.php';
?>