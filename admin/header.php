<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>

  	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="../css/sidebar.css">

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

	<div class="sidebar">
	    <div class="logo-details">
	      	<i class="fab fa-servicestack icon"></i>
	        <div class="logo_name">Seafarer</div>
	        <i class='bx bx-menu' id="btn" ></i>
	    </div>
	    <ul class="nav-list">
	      <li>
	        <a href="#">
	          <i class='bx bx-grid-alt'></i>
	          <span class="links_name">Dashboard</span>
	        </a>
	      </li>
	      <li>
	        <a href="#">
	          <i class="fas fa-male"></i>
	          <span class="links_name">Crews</span>
	        </a>
	      </li>
	      <li>
	        <a href="#">
	          <i class="fas fa-ship"></i>
	          <span class="links_name">Ships</span>
	        </a>
	      </li>
	      <li>
	        <a href="#">
	          <i class="fas fa-play"></i>
	          <span class="links_name">Departures</span>
	        </a>
	      </li>
	      <li>
	        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
	          <i class='bx bx-log-out'></i>
	          <span class="links_name">Logout</span>
	        </a>
	      </li>
	    </ul>
  	</div>

</body>
</html>

<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
  });
</script>

<!-- Logout Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to Logout?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Logout</button>
      </div>
    </div>
  </div>
</div>