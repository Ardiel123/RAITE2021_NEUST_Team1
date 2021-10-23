<?php
  include('header.php');

  include('crew_process.php');
?>
<section class="home-section">
  <div class="text">Crews</div>  

  <div class="myCon">

    
     
<div class="card">
  <div class="card-header">
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Add Crew
</button>
  </div>
  <div class="card-body">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Crew Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Rank</th>
                <th>Ship ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php do{ ?>
            <tr>
                <td><?php echo $crew['crew_id'] ?></td>
                <td><?php echo $crew['fname'] ?></td>
                <td><?php echo $crew['surname'] ?></td>
                <td><?php echo $crew['rank_name'] ?></td>
                <td><?php echo $crew['ship_name'] ?></td>
                 <td><form method="POST"><input type="hidden" name="idd" value="<?php echo $crew['crew_id'] ?>"><button type="submit" class="btn btn-danger" name="remove">Remove</button></form></td>
            </tr>
            <?php }while($crew = mysqli_fetch_assoc($result2)) ?>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
  </div>
</div>

    

  </div>


</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Crew</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST">
          <div class="mb-3 mt-3">
            <label for="fname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
          </div>
          <div class="mb-3">
             <label for="rank" class="form-label">Rank:</label>
           <select name="rank" class="form-control">
            <?php do {  ?>
                <option value="<?php echo $rank['rank_id'] ?>" ><?php echo $rank['rank_name'] ?></option>
             <?php }while($rank= mysqli_fetch_assoc($result3)) ?>
              
           </select>
          </div>
        <div class="mb-3">
             <label for="ship" class="form-label">Ship Name:</label>
           <select name="ship" class="form-control">
               <?php while($ship= mysqli_fetch_assoc($result4)){  ?>
                <option value="<?php echo $ship['ship_id'] ?>"><?php echo $ship['ship_name'] ?></option>
             <?php } ?>
           </select>
          </div>
         
  

      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add_crew" class="btn btn-primary">Save changes</button>
      </div>
            </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
    });
  });
</script>