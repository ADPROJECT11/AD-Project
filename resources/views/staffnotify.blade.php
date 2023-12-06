<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/staffnotify.css')}}">
    <!-- Load icon library -->
    <title>Staff Notify</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="staffmenu"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Reservation</u></a></div>
                <div id="i2"><a href="menulist"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu List</u></a></div>
                <div id="i3"><a href="staffmenu"><img src="{{ asset('image/order.png')}}" width="35px" height="35px"><u id= "icon">Order List</u></a></div>
                <div id="i4"><a href="#"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px"><u id = "icon">Notification</u></a></div>
            </div>
            <div class="logout">
                <a href= "login1"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="topbar">
            <p id="p1">Notification</p>
        </div>
        <div class="empty1"></div>
        <div class="date">
            <p id="p3">29/11/2023</p>
        </div>
        <div class="box">
            <div class="food">
                <p id="p4">1KG Onion</p>
                <p id="p5"><i>Status: Solved</i></p>
            </div>
            <div class="info">
            <div id="info"><input type="image" alt="back" src="{{ asset('image/info.png')}}" width="50px" height="50px"></input></div>
            </div>
        </div>
    </div>

    <script>
    </script>
</body>
</html>