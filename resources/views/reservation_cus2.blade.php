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
        <p id="p5">?</p>
        <div class="middlebox">
            <div class="firstrow">
                <p id="p6">Time</p>
                <p id="p7">2023-10-25 10:33pm</p>
            </div>
            <div class="secondrow">
                <p id="p8">Table</p>
                <p id="p9">Large</p>
            </div>
            <div class="thirdrow">
                <p id="p10">Seats</p>
                <p id="p11">8</p>
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