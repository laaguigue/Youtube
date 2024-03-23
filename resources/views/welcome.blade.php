<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock YouTube Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .navbar-custom {
            background-color: #cc0000; /* YouTube Red */
        }
        .navbar-custom .navbar-brand, .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .sidebar {
            background-color: #f9f9f9; /* Lighter Gray */
            padding-top: 20px;
        }
        .main-content {
            padding-top: 20px;
        }
        .video-item {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff; /* White */
            border: 1px solid #ddd; /* Light Gray */
            border-radius: 4px;
        }
        .video-title {
            color: #cc0000; /* YouTube Red */
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="#">MockTube</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Add other navbar items here -->
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <!-- You can add sidebar items here -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Home</a>
                    <!-- Add more links here -->
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <h1>Welcome to MockTube</h1>
                <!-- Example video item -->
                <div class="video-item">
                    <h2 class="video-title">Sample Video Title</h2>
                    <p>This area can display video descriptions or other content related to the video.</p>
                </div>
                <!-- Loop through your videos and display them similarly -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
