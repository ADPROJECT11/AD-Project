<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/chefaddnotify.css')}}">

<body>
<div class="topbar">
    <div id="back"><input type="image" alt="back" src="{{ asset('image/left-arrow.png')}}" width="50px" height="50px"></input></div>
</div>
    <div class="content">
        <div class="empty1"></div>
        <div class="info">
            <p id="p1">Subject</p>
            <input type="text" id="textbox1" placeholder=" Write your subject">
        </div>
        <div class="message">
            <p id="p2">Message:</p>
            <input type="text" id="textbox2" value="  The detail about Onion...">
        </div>
</div>
<input class="bottombar" type="submit" id="p3" value="Add to List">
</body>
</html>