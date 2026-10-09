<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">MY APP</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
            <h1 class="display-5 fw-bold text-primary">Welcome to Homepage</h1>
            <p class="col-md-8 fs-4 text-muted">This is a styled home view built with Laravel and Bootstrap 5.</p>
            <a href="/about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>

</body>
</html>