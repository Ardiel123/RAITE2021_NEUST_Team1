<?php
  include('header.php');
  include('ship_process.php');
  
  $ship_id = $_GET['id'];

  $edit_ship_sql = "SELECT * FROM ship WHERE ship_id = '$ship_id'";
  $edit_ship_res = mysqli_query($db, $edit_ship_sql);
  $show_shp = mysqli_fetch_assoc($edit_ship_res);

  $speed = $show_shp['knots'].','.$show_shp['speed'];

?>
<section class="home-section">

  <div class="text">Edit <?php echo $show_shp['ship_name']; ?></div>  

  <div class="myCon">

    <div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <form method="POST">

            <div class="mb-3">
              <label for="upd_shipname" class="form-label">Ship Name</label>
              <input type="text" class="form-control" name="upd_shipname" placeholder="name of ship" value="<?php echo $show_shp['ship_name']; ?>">
            </div>

            <div class="mb-3">
              <label for="upd_speed" class="form-label">Speed</label>
              <select class="form-select" aria-label="Default select example" name="upd_speed">
                   <option value="23,Normal" <?php if($speed == "23,Normal"){ echo "selected"; }?>>Normal</option>
                   <option value="19,Slow Streaming" <?php if($speed == "19,Slow Streaming"){ echo "selected"; }?>>Slow Streaming</option>
                   <option value="16.5,Extra Slow Streaming" <?php if($speed == "16.5,Extra Slow Streaming"){ echo "selected"; }?>>Extra Slow Streaming</option>
                   <option value="13.5,Minimal Costs" <?php if($speed == "13.5,Minimal Costs"){ echo "selected"; }?>>Minimal Costs</option>
               </select>
            </div>

            <div class="mb-3">
              <label for="upd_route" class="form-label">Ship Route</label>
              <select class="form-select" aria-label="Default select example" name="upd_route">
                    <?php
                        if(mysqli_num_rows($res1) > 0){

                            do {                     
                                ?><option value="<?php echo $show_route['route_id']; ?>"
                                  <?php
                                    if($show_route['route_id'] ==$show_shp['route_id']){
                                      echo "selected";
                                    }
                                  ?>><?php echo $show_route['destination']; ?></option><?php
                            } while ($show_route = mysqli_fetch_assoc($res1));
                        }
                    ?>
               </select>
            </div>    

  </div>
  <div class="card-footer">
      <input type="hidden" name="the_id" value="<?php echo $ship_id; ?>">
      <button type="submit" class="btn btn-secondary" name="back_edit">Back</button> <button type="submit" class="btn btn-primary" name="save_edit">Save Changes</button>
  </div>
</form>
</div>

  </div>

</section>