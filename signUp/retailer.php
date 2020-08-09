<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="author" content="Prashant Bhatta">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hamropasal</title>

	<style type="text/css">
		.main-form {
    width: 450px;
    margin: auto;
}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stlye.css">
</head>

<body>
	<?php include'header.php'; ?>
	  <form action="" class="main-form needs-validation" novalidate>
       <h5 style="text-decoration: underline; text-align: center;">Admin</h5>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control " required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <div class="invalid-feedback">Please enter a valid username.</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" required>
        </div>
         <div class="form-group">
            <label for="phone-number">Phone-number</label>
            <input type="text" name="phone-number" id="phone-number" class="form-control" required>
        </div>
          <div class="form-group">
            <label for="gender">Address</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male">Kathmandu</option>
                <option value="female">Pokhara</option>
                <option value="female">Biratnagar</option>

            </select>
        </div>
       
        

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="female">Other</option>

            </select>
        </div>
        <div class="form-check">
        <h5 style="text-decoration: underline; text-align: center;">Shop Info:</h5>

         <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="male">Stationary</option>
                <option value="female">Cafe</option>
                <option value="female">Hardware</option>

            </select>
        </div>

        <div class="form-group">
            <label for="reg-number">PAN/Reg No:</label>
            <input type="text" name="reg-number" id="reg-number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Address</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male">Kathmandu</option>
                <option value="female">Pokhara</option>
                <option value="female">Biratnagar</option>

            </select>
        </div>
        <div class="form-group">
            <label for="phone-number">Contact</label>
            <input type="text" name="phone-number" id="phone-number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Website">Website</label>
            <input type="text" name="Website" id="Website" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
        var form = document.querySelector('.needs-validation');

        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        })
    </script>
</body>
</html>