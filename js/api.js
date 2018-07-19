function enterdata() {
	
	// var uname = document.getElementById('uname').value;
	// var email = document.getElementById('email').value;
	// var fname = document.getElementById('fname').value;
	// var lname = document.getElementById('lname').value;
	// var phn = document.getElementById('phn').value;
	// var ref = document.getElementById('ref').value;
	// var company = document.getElementById('company').value;
	// var occ = document.getElementById('occ').value;
	// var country = document.getElementById('country').value;
	// var state = document.getElementById('state').value;
	// var city = document.getElementById('city').value;
	// var password = document.getElementById('password').value;
	// var cpass = document.getElementById('cpass').value;

	//  console.log(uname);
	// // alert(uname);
	// let signupdata = {

	// }

	axios.post('http://localhost:8081/register',
			{
				userName: "uname",
			    email: "email@gmail.com",
			    firstName: "fname",
			    lastName: "lname",
			    phoneNumber: "123",
			    country: "India",
			    password: "ragghusonam"
	}).then((response) => {
                console.log("response",response.data);
                console.log("You have signed up successfully.",1);
            })
    	.catch((error) => {
                console.log("error-------->",error.response.data)
            })
}