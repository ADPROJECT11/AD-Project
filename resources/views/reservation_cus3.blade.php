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