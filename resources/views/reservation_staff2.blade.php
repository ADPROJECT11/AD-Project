<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reservation_staff.css')}}">
    <!-- Load icon library -->
    <title>Reservation</title>
</head>

<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class="molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class="icon">
                <div id="i1"><a href="staffmenu"><img src="{{ asset('image/reservation.png')}}" width="35px"
                            height="35px"><u id="icon">Reservation</u></a></div>
                <div id="i2"><a href="menulist"><img src="{{ asset('image/menu.png')}}" width="35px"
                            height="35px"><u id="icon">Menu List</u></a></div>
                <div id="i3"><a href="staffmenu"><img src="{{ asset('image/order.png')}}" width="35px"
                            height="35px"><u id="icon">Order List</u></a></div>
                <div id="i4"><a href="#"><img src="{{ asset('image/notification.png')}}" width="35px"
                            height="35px"><u id="icon">Notification</u></a></div>
            </div>
            <div class="logout">
                <a href="login1"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>

    <div class="main" id="main">
        <div class="topbar">
            <p id="p1">Reservation List</p>
        </div>
        <div class="empty1"></div>
        <div class="box">
            <div class="choose">
                <div class="reservationbut"><p id="p2">Reservation</p></div>
                <div class="historybut"><p id="p3">History</p></div>
            </div>
            <div class="empty2"></div>
            <div class="wrap">
            <form class="daytable" action="/reservations" method="get">
                <div class="date1">
                    <img src="{{ asset('image/calendar.png')}}" width="35px" height="35px" id="calender">
                    <input id="date" type="date" name="seats" required style="min-height:45px; min-width:100px;">
                </div>
            </form>

            <div class="table">
                <img src="{{ asset('image/table.png')}}" width="50px" height="50px" style="margin-right:5%;"id="tableimg">
                <select id="table" name="table" style="min-height:55px; min-width:120px;" onchange="large()">
                    <option value="Large" >Large</option>
                    <option value="Small">Small</option>
                    <option value="All">All</option>
                </select>
            </div>

            </div>
        </div>
        <?php
        // Fetch reservations based on the selected table size
        $sql = DB::table('reservations')
            ->get();

        if($reservation){
            $sql=$reservation;
        }

        // Loop through the filtered reservations and display them
        foreach ($sql as $info) {
            echo "<div class='reservebox'>";
            echo "<div class='cusname'>" . $info->name . "</div>";
            echo "<div class='tablebox'>";
            echo "<div class='custableig'>" . "<img src='" . asset('image/table.png') . "' width='35px' height='35px'>"
                . "</div>";
            echo "<div class='custable'>" . $info->table . " -" . "</div>";
            echo "<div class='cusseats'>" . $info->seats . " Seats" . "</div>";
            echo "</div>";
            echo "<div class='cusmobile'>" . "<img src='" . asset('image/phone.png') . "' width='25px' height='25px' style='padding-right:1%;'>"
                . " " . $info->mobile . "</div>";
            echo "</div>";
        }
        ?>

    </div>

    <script>
        function large(){
            var tablename = document.getElementById("table");
            if(tablename.value == "Large"){
                location.href="large";
            }else if(tablename.value == "Small"){
                location.href="small";
            }else{
                location.href="all";
            }
        }
    </script>
</body>

</html>
