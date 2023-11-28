<?php
    //date
    $sql = DB::table('reservations')->get();
    $current_time = strftime('%d. %b. %Y- %X');

    //table
    // Get all reservations with table 'Large'
    $large_reservations = DB::table('reservations')->where('table', 'Large')->orderBy('created_at', 'desc')->get();
    // Get all reservations with table 'Small'
    $small_reservations = DB::table('reservations')->where('table', 'Small')->orderBy('created_at', 'desc')->get();
    if (!$large_reservations->isEmpty()) {
        $table = 'Large';
    } elseif (!$small_reservations->isEmpty()) {
        $table = 'Small';
    } else {
        $table = 'No reservation found';
    }

    //seats and phone
    $reservations = DB::table('reservations')->get();
    $sortedReservations = $reservations->sortByDesc(function ($reservation) {
    return strtotime($reservation->created_at);
    });
    $newestReservation = $sortedReservations->first();
  ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/reservation_cus3.css')}}">

<body>
  <div class="topbar">
    <p id="p1">Reservation</p>
    <p id="p2">Molek Cafe</p>
  </div>
  <div class="content">
    <div class="empty1"></div>
    <div class="box">
        <p id="p3">Its Your Turn Now!</p>
        <img src="{{ asset('image/check.png')}}" width="40px" height="40px"></img>
        <div class="middlebox">
            <div class="firstrow">
                <p id="p6">Time</p>
                <?php
                echo "<p id='p7'>" . $current_time . "</p>";
                ?>
            </div>
            <div class="secondrow">
                <p id="p8">Table</p>
                <?php
                echo "<p id='p9'>" . $table . "</p>";
                ?>
            </div>
            <div class="thirdrow">
                <p id="p10">Seats</p>
                <?php
                echo "<p id='p11'>" . $newestReservation->seats . "</p>";
                ?>
            </div>
            <div class="forthrow">
                <p id="p12">Phone number</p>
                <?php
                echo "<p id='p13'>" . $newestReservation->mobile . "</p>";
                ?>
            </div>
        </div>
        <div class="smallbox">
            <p id="p14">You are now free to walk in</p>
            <p id="p15">or</p>
            <p id="p16">The staff will call you within a minutes</p>
        </div>
        <div class="ok">
                <a href="reservation_cus">
                <input type="ok" value="OK">
        </div>
  </div>

</body>
</html>