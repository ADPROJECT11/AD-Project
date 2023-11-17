<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/addmenu.css')}}">
    <!-- Load icon library -->
    <title>MenuList</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="dashboard"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Dashboard</u></a></div>
                <div id="i2"><a href="adminmenu"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu</u></a></div>
                <div id="i3"><a href="account"><img src="{{ asset('image/account.png')}}" width="35px" height="35px"><u id= "icon">Account</u></a></div>
            </div>
            <div class="logout">
                <a href= "logout"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <form action="menu" method="POST" enctype="multipart/form-data">
            <div class="purplebar"><a href= "adminmenu"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a></div>
            <div class="image_upload">
                <input type="file" name="my_image">
            </div>
            <div class="text_input">
                <div class="firstrow">
                    <div class="id">ID:&nbsp<input type="text" name="id" placeholder="id"></div>
                    <div class="foodname">Food Name:&nbsp<input type="text" name="foodname" placeholder="name"></div>
                </div>
                <div class="price">Price:&nbsp<input type="text" name="price" placeholder="price"></div>
                Categories:&nbsp
                <select name="categories">
                    <option value="food">Food</option>
                    <option value="beverages">Bevarage</option>
                    <option value="other">Other</option>
                </select>
                description:<input type="text" name="description">
                <div class="submit">
                    <input type="submit" name="submit" value="Upload">
                </div>
            </div>
        </form>
    </div>

    <script>
    </script>
</body>
</html>