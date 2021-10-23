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
  	<div>
   <form method="POST" enctype="multipart/form-data">
          <div class="mb-3 mt-3">
            <label for="fname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo $crew1['fname'] ?>">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo $crew1['surname'] ?>">
          </div>
          <div class="mb-3">
             <label for="rank" class="form-label">Rank:</label>
           <select name="rank" class="form-control">
            <?php do {  ?>
                <option><?php echo $crew1['rank'] ?></option>
             <?php }while($rank= mysqli_fetch_assoc($result3)) ?>
              
           </select>
          </div>
       <div class="form-group">
             <label for="img">Display Image: </label>
             <img id="preimage" src="<?php echo $crew1['image'] ?>">
            <input  type="file" class="form-control" name="img">
        </div>
        <div class="mb-3">
             <label for="ship" class="form-label">Ship ID:</label>
           <select name="ship" class="form-control">
               <?php do {  ?>
                <option><?php echo $crew1['ship_id'] ?></option>
             <?php }while($ship= mysqli_fetch_assoc($result4)) ?>
           </select>
          </div>
    </form>

   

    </div>
  </div>
</div>

    

  </div>
<script>
								function preview(event){
									var output = document.getElementById('preimage');
									output.src = URL.createObjectURL(event.target.files[0]);
								};
							</script> 






</section>

   
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
