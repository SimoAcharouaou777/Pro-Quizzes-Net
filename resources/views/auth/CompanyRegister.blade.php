<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Company Registration</title>
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
                                        <h4 class="mt-1 mb-5 pb-1">Company Registration</h4>
                                    </div>
                                    <form method="post" action="{{route('CompanyStore')}}">
                                        @csrf
                                        @method('post')
                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="Representative" class="form-control" >
                                            <label class="form-label" for="companyName">Reprisentative Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="company_name" id="companyName" class="form-control" >
                                            <label class="form-label" for="companyName">Company Name</label>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" >
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" >
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password_confirmation" id="confirmPassword" class="form-control" >
                                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                                        </div>
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Register</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Join the ProQuizzesNet Community as a Company</h4>
                                    <p class="small mb-0">Unlock powerful features for your organization. Engage with learners, educators, and enthusiasts in our community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>
</html>
