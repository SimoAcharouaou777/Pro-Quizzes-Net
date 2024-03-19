<!DOCTYPE html>
<html>
<head>
    <title>Select User Role</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Select User Role</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <a href="{{ route('assignRole', ['role' => 3]) }}" class="btn btn-primary">
                                    <i class="fas fa-user-graduate fa-3x"></i>
                                    <h5>Student</h5>
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="{{ route('assignRole', ['role' => 4]) }}" class="btn btn-primary">
                                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                                    <h5>Teacher</h5>
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="{{ route('assignRole', ['role' => 2]) }}" class="btn btn-primary">
                                    <i class="fas fa-user fa-3x"></i>
                                    <h5>Normal User</h5>
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
