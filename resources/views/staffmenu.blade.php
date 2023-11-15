<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/staffmenu.css')}}">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Menu</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="staffmenu"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Reservation</u></a></div>
                <div id="i2"><a href="menulist"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu List</u></a></div>
                <div id="i3"><a href="staffmenu"><img src="{{ asset('image/order.png')}}" width="35px" height="35px"><u id= "icon">Order List</u></a></div>
                <div id="i4"><a href="#"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px"><u id = "icon">Notification</u></a></div>
            </div>
            <div class="logout">
                <a href= "login1"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="toprow">
            <div class="createacc"><a href="createuser">Create Account</a></div>
            <div class="search">
                <!-- The form -->
                <form id="example" action="staffmenu" method="GET">
                    <input id="searchbar" type="text" placeholder="Search by name.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID </th>
                    <th>Username</th>
                    <th>Password <input type="checkbox" onclick="togglePassword()"></th>
                    <th>Roles</th>
                    <th></th>
                </tr>
                <?php
                    $search = '';

                    if(request()->has('search')) {
                        $search = request('search');
                    }

                    $sql = DB::table('user')
                        ->where('username', 'LIKE', '%' . $search . '%')
                        ->get();
                
                    foreach ($sql as $user){
                        echo"<tr>";
                            echo"<td>".$user->id."</td>";                            
                            echo"<td style='text-align:left; padding-left: 10px;'>".$user->username."</td>";
                            echo "<td style='text-align:left; padding-left: 10px;'><input id='password' type='password' value='" . $user->password . "' readonly onclick='togglePassword()'></td>";
                            echo"<td>".$user->Roles."</td>";
                            echo"<td><img src='image/dustbin.png' width='20px' height='20px'></td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>