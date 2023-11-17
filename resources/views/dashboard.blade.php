<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
    <!-- Load icon library -->
    <title>MenuList</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="#"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Dashboard</u></a></div>
                <div id="i2"><a href="adminmenu"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu</u></a></div>
                <div id="i3"><a href="account"><img src="{{ asset('image/account.png')}}" width="35px" height="35px"><u id= "icon">Account</u></a></div>
            </div>
            <div class="logout">
                <a href= "logout"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
    </div>

    <script>
    </script>
</body>
</html>