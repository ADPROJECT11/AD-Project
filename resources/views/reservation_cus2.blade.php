<?php
    $sql = DB::table('reservations')->count();
    $currentLine = $sql;

    $sql = DB::table('reservations')->get();
    $current_time = strftime("%d. %b. %Y- %X ");

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

    $reservations = DB::table('reservations')->get();

  ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/reservation_cus2.css')}}">

<body>
  <div class="topbar">
    <p id="p1">Reservation</p>
    <p id="p2">Molek Cafe</p>
  </div>
  <div class="content">
    <div class="empty1"></div>
    <div class="box">
        <div class="upperbox">
            <p id="p3">Booking Successful</p>
            <img src="{{ asset('image/check.png')}}" width="25px" height="25px"></img>
        </div>
        <hr>
        <p id="p4">You are now in queue</p>
        <?php
          echo "<p id='p5'>" . $currentLine . "</p>";
          ?>
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
                $reservations->each(function($item,$key){
                echo "<p id='p11'>" . $item->seats . "</p>";});
                ?>
            </div>
            <div class="forthrow">
                <p id="p12">Reservation number</p>
                <p id="p13">A28</p>
            </div>
            <p id="p14">*Please be patient, we will call you if the table is available</p> 
            <div class="refresh">
                <input type="refresh" value="Refresh queue status">
            </div>
            <div class="cancel">
                <a href="reservation_cus">
                <input type="cancel" value="Cancel Booking">
            </div>
        </div>
    </div>
  </div>

</body>
</html>