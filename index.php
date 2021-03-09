<!DOCTYPE html>
	<head>
		<title>Todo App</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div>
	    <nav style="justify-content: center"  class="navbar navbar-dark bg-dark">
	        <span class="navbar-brand mb-0 h1">My Todo Lists</span>
	    </nav>
	    <div class="container">
	        <form action="api/create.php" id="prename-form" method="POST">
	            <div class="form-group">
	              <label >Enter Title Here</label>
	              <input name="title" type="text" class="form-control" placeholder="Enter Title">
	              <input name="body" type="text" class="form-control" placeholder="Enter Body">
	            </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	        </form>
	        <table class="table table-dark">
	            <thead>
	              <tr>
	                <th scope="col">Serial</th>
	                <th scope="col">Todos</th>
	                <th scope="col">Delete</th>
	                <th scope="col">Update</th>
	              </tr>
	            </thead>
	            <tbody>
	                <tr>
	                  <th scope="row"></th>
	                  <td>
	                  </td>
	                  <td>
	                      <form style="display:inline" action="" method="">
	                          <button class="btn btn-danger"> Delete Post </button>
	                      </form>
	                  </td>
	                  <td scope="row">
	                    <form action="" method="POST">
	                      <div class="form-group">
	                        <input name="update title" type="text" class="form-control" placeholder="Update Title">
	                        <input name="update body" type="text" class="form-control" placeholder="Update Body">
	                      </div>
	                      <button type="submit" class="btn btn-primary">Submit</button>
	                    </form>
	                  </td>
	                </tr>
	            </tbody>
	          </table>
	          
	    </div>
		
	</body>
</html>
