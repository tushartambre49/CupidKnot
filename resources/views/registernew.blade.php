<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
<script src="{{asset('assets/js/login.js')}}"></script>
<body>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Register</h1>
						 </div>
					</div>
                   <form action="{{route('saveUser')}}" method="post">
                   @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text" name="fname"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter First Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text" name="lname"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Last Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Date Of Birth</label>
                              <input type="date" name="dob" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Gender</label>
                              <div class="form-check">
                              <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Male
                               </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                             Female
                            </label>
                            </div>

                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Annual Income</label>
                              <input type="number" name="income" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Annual Income in INR">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Occupation</label>
                              <select class="form-control"  name="occupation" id="cars">
                              <option>Select</option>
                              <option value="private job">private job</option>
                              <option value="government job">government job</option>
                              <option value="Business">Business</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Family Type</label>
                              <select class="form-control"  name="familytype" id="cars">
                              <option>Select</option>
                              <option value="joint family">Joint Family</option>
                              <option value="nuclear family">Nuclear Family</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Manglik</label>
                              <select class="form-control"  name="manglik" id="cars">
                              <option>Select</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              </select>
                           </div>
                           <h1>Partner Preference</h1>
                           <div class="form-group">
                           <label for="formControlRange">Expected Income</label>
                           <input type="range" min="10000" name="eincome" max="10000000" class="form-control-range" id="formControlRange" onInput="$('#rangeval').html($(this).val())">
                           <span id="rangeval">00<!-- Default value --></span>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Occupation</label>
                              <select class="form-control"  name="eoccupation" id="cars">
                              <option>Select</option>
                              <option value="private job">private job</option>
                              <option value="government job">government job</option>
                              <option value="Business">Business</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Family Type</label>
                              <select class="form-control"  name="efamilytype" id="cars">
                              <option>Select</option>
                              <option value="joint family">Joint Family</option>
                              <option value="nuclear family">Nuclear Family</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Manglik</label>
                              <select class="form-control"  name="emanglik">
                              <option>Select</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              </select>
                           </div>
                          
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                           </div>
                           </form>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="{{route('redirectToGoogle')}}" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">have an account? <a href="{{route('loginpage')}}" id="signup">Login Here</a></p>
                           </div>

                         
                       
                 
				</div>
			</div>
	
		</div>
      </div>   
      <script>
  var slider = new Slider('#ex2', {});
  </script>
         
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      @if(session()->has('fail'))
         <script>
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '{{session("fail")}}'

})
  
         </script>
      @endif
</body>