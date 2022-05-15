<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="Images" sizes="16x16" href="#">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/332a215f17.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-xl navbar-light bg-light">
              <a href="" class="navbar-brand">
                <img src="{{asset('assets/images/logoo.png')}}" class="logo" width="15%">
                <h4 class="main-title mb-0">Cupid Knot</h4>
              </a>
              <button
                class="navbar-toggler ml-auto mr-0"
                type="button"
                data-toggle="collapse"
                data-target="#myNav"
                aria-controls="myNav"
                aria-expanded="false"
                aria-label="toggle navigation"
              >
                <span class="bars"><i class="fas fa-bars"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav mx-auto">
                  <!-- <li class="nav-item">
                    <a href="#" class="nav-link active">Dashboard</a>
                    <span class="sr-only">(current)</span>
                  </li> -->
                  <li class="nav-item dropdown">
                  
                  </li>
                  
               
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('alogout')}}"class="nav-link d-flex">
                            <i class="far fa-user mr-2 logout-icon"></i>
                            <span> Logout</span>
                        </a>
                    </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!---End of the Navbar--->
    <!---Summary Board--->
    <section class="mt-5 ">
      <div class="row">
       <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
        <!-- <div class="sum-li info-1  hide"> -->
          <i class="fa fa-cloud-d"></i>
          <div class="count"></div>
          <div class="title"></div>
        </div>
              </div>
      <!---------->
      <div class=" col-lg-5 col-md-3 col-sm-12 col-xs-12 text-center ">
        <div class="sum-board info-2 ">
          <i class="fas fa-envelope text-center"></i>
          <div class="count">11,254</div>
          <div class="title">Message</div>
        </div>
              </div>
      <!---------->
       <!--<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
        <div class="sum-board info-3">
          <i class="far fa-thumbs-up"></i>
          <div class="count">2,257</div>
          <div class="title">Likes</div>
        </div>
              </div>-->
      <!---------->
      <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="sum-board info-4">
          <i class="fas fa-user"></i>
          <div class="count">10,000</div>
          <div class="title">Followers</div>
        </div>
              </div>--> 
      <!---------->

      </div>
    </section>
    <!---End of the summary Board-->
    <!---table Section---->
    <section >
      <div class="row ">
        <div class="col-lg-12 text-white">
          <div class="card">
            <div class="card-body bg-dark ">
            <a href="{{route('agefilter',['status'=>'yes'])}}"><p>Filter by: Manglik</p> </a>
              <div class="active-member ">
                <div class="table-responsive">
                  <table class="table table-xs mb-1 text-white">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Income</th>
                        <th>Occupation</th>
                        <th>Family Type</th>
                        <th>Manglik Status</th>
                       
                        
                      </tr>
                    </thead>
                    <tbody>
                    @if(!empty($users))

                     @foreach($users as $user)
                        <tr>
                      <th>{{$user->name}}</th>
                      <th>{{$user->email}}</th>
                      <th>{{$user->dob}}</th>
                      <th>{{$user->gender}}</th>
                      <th>{{$user->income}}</th>
                      <th>{{$user->occupation}}</th>
                      <th>{{$user->ftype}}</th>
                      <th>{{$user->manglik}}</th>
                       
                      </tr>
                      @endforeach
                     @else
                     @foreach($data as $row)
                     <tr>
                      <th>{{$row->name}}</th>
                      <th>{{$row->email}}</th>
                      <th>{{$row->dob}}</th>
                      <th>{{$row->gender}}</th>
                      <th>{{$row->income}}</th>
                      <th>{{$row->occupation}}</th>
                      <th>{{$row->ftype}}</th>
                      <th>{{$row->manglik}}</th>
                       
                      </tr>
                      @endforeach
                      @endif
                      
                      <!----------------->
                    
                      <!----------------->

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---end of the table section---->
    <!---JS Chart Section--->
    

</footer>
























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <!------->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!------Line chart------>
    <script src="#"></script>
    <script src="#"></script>
    <script src="#"></script>
    <link rel="stylesheet" href="#" />

   
  </body>
</html>
