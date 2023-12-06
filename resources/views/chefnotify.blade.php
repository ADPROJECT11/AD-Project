<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/chefnotify.css')}}">

<body>
<div class="topbar">
    <div id="back"><input type="image" alt="back" src="{{ asset('image/left-arrow.png')}}" width="50px" height="50px"></input></div>
    <div id="add"><input type="image" alt="back" src="{{ asset('image/add1.png')}}" width="50px" height="50px"></input></div>
</div>
    <div class="content">
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
</body>
</html>