<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/chefchecknotify.css')}}">

<body>
<div class="topbar">
    <div id="back"><input type="image" alt="back" src="{{ asset('image/left-arrow.png')}}" width="50px" height="50px"></input></div>
    <div id="add"><input type="image" alt="back" src="{{ asset('image/add1.png')}}" width="50px" height="50px"></input></div>
</div>
    <div class="content">
        <div class="empty1"></div>
        <div class="info">
            <p id="p1">Less Onion</p>
        </div>
        <hr id="u1" width=94%></hr>
        <div class="datestatus">
            <p id="date">28-10-2023</p>
            <p id="status"><i>Status: Solved</i></p>
        </div>
        <div class="message">
            <p id="p2">Message:</p>
            <input type="text" id="textbox" value="  The detail about Onion...">
        </div>
    </div>
<input class="bottombar" type="submit" id="p3" value="Add to List">
</body>
</html>