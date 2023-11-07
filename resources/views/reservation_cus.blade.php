<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/reservation_cus.css')}}">

<body>
  <div class="topbar">
    <p id="p1">Reservation</p>
    <p id="p2">Molek Cafe</p>
  </div>
  <div class="content">
    <div class="empty1"></div>
      <div class="box1">
        <div class="box1top">
          <p id="p3">Currently in line</P>
          <p id="p4">5</P>
        </div>
        <div class="box1middletop">
          <p id="p5">Table</p>
        </div>
        <div class="box1middlebottom">
          <p id="p6">Small (1-4)</p>
          <p id="p7">Large (5-12)</p>
        </div>
        <div class="box1bottom">
          <p id="p8">?</p>
          <p id="p9">?</p>
        </div>
      </div>
      <div class="empty2"></div>
        <div class="box2">
          <p id="p10">Personal Information</p>
          <div class="form">
            <form>
              <div><p2>Name:</p2>
                <div class="name">
                  <input type="text" id="thename" required>
                </div>
              </div>
              <div><p2>Mobile Number:</p2>
                <div class="mobile">
                  <!--<img src="{{ asset('image/flag.png')}}" width="20px" height="20px">-->
                  <input type="text" id="phone" value="+60" required>
                </div>
              </div>
              <div class="tableseat">
              <div>
                  <label for="table">Table:</label>
                    <select id="table">
                      <option value="Large">Large</option>
                      <option value="Small">Small</option>
                    </select>
                </div>
                <div><p id="sea">Seats:</p>
                  <div class="seats">
                    <input id="input2" type="text" required>
                  </div>
                </div>
              </div>
              <div class="submit">
                <input type="submit" value="Comfirm Booking">
              </div>
            </form>
        </div>
  </div>
</body>
</html>
