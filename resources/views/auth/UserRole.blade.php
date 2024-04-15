<!DOCTYPE html>
<html>
<head>
    <title>Select User Role</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-radius: 15px 15px 0 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary i {
            font-size: 2.5em;
        }

        .btn-primary h5 {
            margin-top: 10px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Select User Role</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <a href="{{ route('assignRole', ['role' => 3]) }}" class="btn btn-primary p-4">
                                    <i class="fas fa-user-graduate"></i>
                                    <h5 class="mt-3">Student</h5>
                                </a>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <a href="{{ route('assignRole', ['role' => 4]) }}" class="btn btn-primary p-4">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <h5 class="mt-3">Teacher</h5>
                                </a>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <a href="{{ route('assignRole', ['role' => 2]) }}" class="btn btn-primary p-4">
                                    <i class="fas fa-user"></i>
                                    <h5 class="mt-3">Normal User</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
