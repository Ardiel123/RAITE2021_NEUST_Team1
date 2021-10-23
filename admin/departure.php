<?php
  include('header.php');
  include('departure_process.php');

?>
<section class="home-section">
  <div class="text">Departures</div>  

  <div class="myCon">

    
  <div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#depModal">Add Departure</button>
  </div>
  <div class="card-body">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Dep ID</th>
                <th>Ship Name</th>
                <th>Route</th>
                <th>Distance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($res2) > 0){
                   do { 
            ?>
            <tr>
                <td><?php echo $show_ship2['departure_id'] ?></td>
                <td><?php echo $show_ship2['ship_name'] ?></td>
                <td><?php echo $show_ship2['distance'] ?></td>
                <td><?php echo $show_ship2['destination'] ?></td>
                <td><form method="POST"><input type="hidden" name="idd" value="<?php echo $show_ship2['departure_id'] ?>"><button type="submit" class="btn btn-danger" name="remove">Remove</button></form></td>
            </tr>
            <?php
                    }while ($show_ship2 = mysqli_fetch_assoc($res2));
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Dep ID</th>
                <th>Ship Name</th>
                <th>Route</th>
                <th>Distance</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
  </div>
</div>

  </div>

</section>


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

<!-- add Modal -->
<div class="modal fade" id="depModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Departure Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">

            <div class="mb-3">
             <label for="ship" class="form-label">Ship Name:</label>
               <select name="departure" class="form-control">
                   <?php do {  ?>
                    <option value="<?php echo $show_ship['ship_id']; ?>"><?php echo $show_ship['ship_name'].' : '.$show_ship['destination']; ?></option>
                 <?php }while($show_ship= mysqli_fetch_assoc($res)) ?>
               </select>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="save_ship">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>