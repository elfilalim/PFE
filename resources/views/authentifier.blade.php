<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="al"></div>
        <div class="container">
        <div class="logo"><img src=logo.png></div>
            <div class="under-logo">
                <div class="header">Sign In</div>
                <div class='info'>Deafault username and password<br> are your name</div>
                <input id='username' class='text' onfocus="handle2()" class='inc2' type="text" name="Username" placeholder='Username' value="">
                <!-- Had to remove the type "password" due to the browser user credential's autofill-->
                <input id='password' class='pass' onfocus="handle1()" class='inc1' type="password" name="Password" placeholder='Password' value="">
                <button>Sign In</button>
                <svg width="390" height="549" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect id='rect' class='rect1'   x="45px"  y="300px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #fff; stroke-width: 1px; fill: #000" />
                </svg>
            </div>
        </div>
        <script src="js/java.js"></script>
</body>
</html>