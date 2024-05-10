<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 CRUD Application</title>
    <!-- In your master.blade.php or layout file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://temp.staticsave.com/663e7d60124b4.css">
    <style>
        footer {
            background-color: white;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><i class="fa-brands fa-algolia" style="margin-right: 5px;"></i>FCI</div>
        <ul class="ul_nav">
            <a href="{{ route('students.index') }}" style="text-decoration: none;"><li class="li_nav" id="current_tab"><i class="fas fa-home"></i>Home</li></a>
            <li class="li_nav"><i class="fa-solid fa-address-card"></i>About us</li>
            <li class="li_nav"><i class="fa-solid fa-user"></i>Account</li>
        </ul>
    </nav>

    <div class="container mt-5">        
        @yield('content')
        
    </div>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
    </footer>
</body>
</html>

