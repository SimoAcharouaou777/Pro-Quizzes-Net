<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Register</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{asset('assets/img/portfolio/Logo.png')}}" style="width: 185px;" alt="ProQuizzesNet Logo">
                                        <h4 class="mt-1 mb-5 pb-1">Register for ProQuizzesNet</h4>
                                    </div>
                                    <form method="POST" action="{{route('store')}}">
                                        @csrf
                                        @method('POST')
                                        <div class="form-outline mb-4">
                                            <input type="text" id="username" name="username" class="form-control" >
                                            <label class="form-label" for="username">Username</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control" >
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" >
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" >
                                            <label class="form-label" for="confirm_password">Confirm Password</label>
                                        </div>
                                        <div class="mb-4">
                                            <a href="{{route('CompanyRegister')}}">Register as a company</a>
                                        </div>
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Register</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Join the ProQuizzesNet Community</h4>
                                    <p class="small mb-0">Discover a world of interactive quizzes, challenges, and learning opportunities. Engage with fellow learners, educators, and enthusiasts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Modal -->
<div class="modal fade" id="companyModal" tabindex="-1" aria-labelledby="companyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="companyModalLabel">Register as a Company</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your company registration form goes here -->
          <form id="companyRegistrationForm">
            <div class="mb-3">
              <label for="companyName" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="companyName" name="companyName">
            </div>
            <!-- Add more fields as needed -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
    
    
</body>
</html>
