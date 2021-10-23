<?php
  include('header.php');
  include('ship_process.php');
?>
<section class="home-section">
  <div class="text">Ships</div>  

  <div class="myCon">

    <div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shipModal">Add ship</button>
  </div>
  <div class="card-body">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Ship ID</th>
                <th>Ship Name</th>
                <th>Speed</th>
                <th>Knots</th>
                <th>Route</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($res2) > 0){
                   do { 
            ?>
            <tr>
                <td><?php echo $show_ship['ship_id'] ?></td>
                <td><?php echo $show_ship['ship_name'] ?></td>
                <td><?php echo $show_ship['speed'] ?></td>
                <td><?php echo $show_ship['knots'] ?></td>
                <td><?php echo $show_ship['destination'] ?></td>
                <td><a href="edit_ship.php?id=<?php echo $show_ship['ship_id']; ?>"><button class="btn btn-info">Edit</button></a></td>
            </tr>
            <?php
                    }while ($show_ship = mysqli_fetch_assoc($res2));
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Ship ID</th>
                <th>Ship Name</th>
                <th>Speed</th>
                <th>Knots</th>
                <th>Route</th>
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
<div class="modal fade" id="shipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ship Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">

            <div class="mb-3">
              <label for="shipname" class="form-label">Ship Name</label>
              <input type="text" class="form-control" name="shipname" placeholder="name of ship">
            </div>

            <div class="mb-3">
              <label for="speed" class="form-label">Speed</label>
              <select class="form-select" aria-label="Default select example" name="speed">
                   <option value="23,Normal" selected>Normal</option>
                   <option value="19,Slow Streaming">Slow Streaming</option>
                   <option value="16.5,Extra Slow Streaming">Extra Slow Streaming</option>
                   <option value="13.5,Minimal Costs">Minimal Costs</option>
               </select>
            </div>

            <div class="mb-3">
              <label for="route" class="form-label">Ship Route</label>
              <select class="form-select" aria-label="Default select example" name="route">
                    <?php
                        if(mysqli_num_rows($res1) > 0){

                            do {                     
                                ?><option value="<?php echo $show_route['route_id']; ?>"><?php echo $show_route['destination']; ?></option><?php
                            } while ($show_route = mysqli_fetch_assoc($res1));
                        }
                    ?>
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

