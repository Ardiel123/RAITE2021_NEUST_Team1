<?php
  include('header.php');
  include('crew_process.php');

  $id = $_GET['id'];

  $query5 = "SELECT * FROM crew WHERE crew_id = $id ";
	$result5 = mysqli_query($db,$query5);
	$crew1 = mysqli_fetch_assoc($result5);

?>
<section class="home-section">
  <div class="text">Crews</div>  

  <div class="myCon">

    
     
<div class="card">
  <div class="card-header">
   Edit Crew
  </div>
  <div class="card-body">

   <form method="POST">
          <div class="mb-3 mt-3">
            <label for="upd_fname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="upd_fname" value="<?php echo $crew1['fname'] ?>">
          </div>
          <div class="mb-3">
            <label for="upd_lname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="upd_lname" value="<?php echo $crew1['surname'] ?>">
          </div>


          <div class="mb-3">
              <label for="upd_rank" class="form-label">Rank</label>
              <select class="form-select" aria-label="Default select example" name="upd_rank">
                    <?php
                        if(mysqli_num_rows($result3) > 0){

                            do {                     
                                ?><option value="<?php echo $rank['rank_id'] ?>"
                                  <?php
                                    if($crew['rank_id'] == $rank['rank_id']){
                                      echo "selected";
                                    }
                                  ?>><?php echo $rank['rank_name']; ?></option><?php
                            } while ($rank = mysqli_fetch_assoc($result3));
                        }
                    ?>
               </select>
            </div>  

            <div class="mb-3">
              <label for="upd_ship" class="form-label">Designated Ship</label>
              <select class="form-select" aria-label="Default select example" name="upd_ship">
                    <?php
                        if(mysqli_num_rows($result4) > 0){
                            do {                     
                                ?><option value="<?php echo $ship['ship_id'] ?>"
                                  <?php
                                    if($crew['ship_id'] == $ship['ship_id']){
                                      echo "selected";
                                    }
                                  ?>><?php echo $ship['ship_name']; ?></option><?php
                            } while ($ship = mysqli_fetch_assoc($result4));
                        }
                    ?>
               </select>
            </div>  

  </div>
  <div class="card-footer">
      <input type="hidden" name="the_id" value="<?php echo $id; ?>">
      <button type="submit" class="btn btn-secondary" name="back_edit">Back</button> <button type="submit" class="btn btn-primary" name="save_edit">Save Changes</button>
  </div>
</form>
</div>

    

  </div>

</section>
