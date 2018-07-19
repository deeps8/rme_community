<!DOCTYPE html>
<html>
<head>
	<title>Login | Signup</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<!--IE Edge Meta TAg-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap cmd-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
	 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- bootstarp scripts -->
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>	
		<div class="mb-0 text-center logo">
			<img src="img/logo.png" style="height: 60px;">
		</div>
		
	<div class="container b-block">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 ls-block m-auto center-box" >
				<div class="container">
					<div class="row">
						<div class="col ls-btn" style="padding-right: 0;">
							<button id="l-btn" class="active" onclick="open_l()">Login</button>
						</div>
						<div class="col ls-btn" style="padding-left: 0;" >
							<button id="s-btn" onclick="open_s()">SignUp</button>
						</div>
					</div>
					<div id="login">

						<div class="form-div" >
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-user"></i></span>
								<input type="text" name="br_name" placeholder="User Name" class="form-control" required>
							</div>
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-lock"></i></span>
								<input type="password" name="pass" placeholder="Password" class="form-control" required>
							</div>
							<div class="form-group">
								<input type="submit" name="login-btn" class="btn btn-success" value="Login">
							</div>
							New User?<a href="#" onclick="open_s()">SignUp</a><a href="#">Forget-Password?</a>
						</div>
					</div>
					<div id="signup">
						<div class="form-div">
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-user"></i></span>
								<input type="text" name="u_name" placeholder="User Name" class="form-control" required
								 id="uname" >
							</div>
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-envelope"></i></span>
								<input type="email" name="email" placeholder="Email" class="form-control" required id="email">
							</div>
							<div class="row">
							<div class="form-group input-group-btn input-area col-6">
								<span class="input-group-addon gly left-20" style="left:20px"><i class="fas fa-user"></i></span>
								<input type="text" name="f_name" placeholder="First Name" class="form-control" required id="fname">
							</div>
							<div class="form-group input-group-btn input-area col-6">
								<span class="input-group-addon gly left-20" style="left:20px"><i class="fas fa-user"></i></span>
								<input type="text" name="l_name" placeholder="Last Name" class="form-control" required id="lname">
							</div>
							</div>
							<div class="row">
							<div class="form-group input-group-btn input-area col">
								<span class="input-group-addon gly left-20" style="left:20px"><i class="fas fa-phone"></i></span>
								<input type="text" name="phn" placeholder="Phone Number" class="form-control" required id="phn">
							</div>
							<div class="form-group input-group-btn input-area col">
								<span class="input-group-addon gly left-20" style="left:20px"><i class="fas fa-phone"></i></span>
								<input type="text" name="referal" placeholder="Referal Code" class="form-control" required id="ref">
							</div>
							</div>
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-building"></i></span>
								<input type="text" name="company" placeholder="Company Name" class="form-control" required id="company">
							</div>
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-users"></i></span>
								<select name="occupation" class="form-control" id="occ">
									<option>Select Occupation</option>
									<option value="1">Land Owner</option>
									<option value="2">Land Developer</option>
									<option value="3">Builder</option>
									<option value="4">Broker</option>
									<option value="5">Project Investor</option>
									<option value="6">Broking Houses</option>
									<option value="7">Vendors</option>
									<option value="8">Customer</option>
									<option value="9">Facilitator</option>
								</select>
							</div>
							<div class="form-group input-group-btn input-area">
								<span class="input-group-addon gly"><i class="fas fa-globe"></i></span>
								<input type="text" name="country" value="India" disabled="" class="form-control" id="country">
							</div>
							<div class="row">
							<div class="form-group input-group-btn input-area col ">
								<span class="input-group-addon gly left-20"><i class="fas fa-home"></i></span>
								<select name="state" class="form-control" id="state">
									<option>Select State</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
								</select>
							</div>
							<div class="form-group input-group-btn input-area col">
								<span class="input-group-addon gly left-20"><i class="fas fa-home"></i></span>
								<input type="text" name="city" placeholder="Enter City"  class="form-control" id="city">
							</div>
							</div>
							<div class="row">
							<div class="form-group input-group-btn input-area col">
								<span class="input-group-addon gly" style="left: 20px"><i class="fas fa-lock"></i></span>
								<input type="password" name="pass" placeholder="Password" class="form-control" required id="password">
							</div>
							<div class="form-group input-group-btn input-area col">
								<span class="input-group-addon gly" style="left: 20px"><i class="fas fa-lock"></i></span>
								<input type="password" name="confirmpass" placeholder="Confirm Password" class="form-control" required
								 id="cpass">
							</div>
							</div>
							<div class="form-group">
								<input type="submit" name="signup-btn" value="SignUp" class=" btn btn-success" onclick="enterdata()">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var login = document.getElementById('login');
		var signup = document.getElementById('signup');

		function open_l(){
			login.style.display="block";
			signup.style.display="none";

			$('#s-btn').removeClass("active");
			$('#l-btn').addClass("active");
		}

		function open_s(){
			signup.style.display="block";
			login.style.display="none";

			$('#s-btn').addClass("active");
			$('#l-btn').removeClass("active");
	}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.0/axios.js"></script>
	<script type="text/javascript" src="js/api.js"></script>
</body>
</html>