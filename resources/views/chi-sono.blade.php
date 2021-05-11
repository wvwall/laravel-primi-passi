<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    .nav {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 5px solid black;
        height: 50px;
    }
    .nav ul {
        display: flex;
        width: 60%;
        justify-content: space-around;
        list-style: none;
    }
    .nav ul li {
        text-transform: uppercase;
        font-weight: 600;
    }
    .nav ul li a {
        text-decoration: none;
        color: #006CFA;
    }
    .nav ul li .active {
        text-decoration: none;
        color: black;
    }
    .hello {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: calc(100vh - 50px)
    }
    .hello h1 {
        font-size: 150px;
    }
    .dot {
        color: #006CFA;
    }
    
    
</style>
<body>
    <div class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/chi-sono" class="active">Chi sono</a></li>
            <li><a href="/skills">Skills</a></li>
        </ul>
    </div>
    <main>
        <div class="hello">
        <h1>WALTER <br> VELARDO <span class="dot">.</span></h1>
        </div>
    </main>
</body>
</html>