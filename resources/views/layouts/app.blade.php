<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: #eceff1;">
    <div class="nav">
        <ul>
            <li><a href="/" class="active-home">Home</a></li>
            <li><a href="/chi-sono" class="active-chi">Chi sono</a></li>
            <li><a href="/skills" class="active-ski">Skills</a></li>
        </ul>
    </div>
    <main>
        @yield('main')
    </main>
</body>
</html>