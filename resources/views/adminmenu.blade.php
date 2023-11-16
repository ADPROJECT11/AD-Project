<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminmenu.css')}}">
    <!-- Load icon library -->
    <title>MenuList</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="#"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Dashboard</u></a></div>
                <div id="i2"><a href="adminmenu"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu</u></a></div>
                <div id="i3"><a href="account"><img src="{{ asset('image/account.png')}}" width="35px" height="35px"><u id= "icon">Account</u></a></div>
            </div>
            <div class="logout">
                <a href= "login1"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="purple">
                <div class="searchbar">
                    <i><img src="{{ asset('image/search.png')}}" width="25px" height="25px"></i>
                    <input type="text">
                </div>
                <div class="categories">
                    <div id="c1"><a href="#food">Food</a></div>
                    <div id="c2"><a href="#beverage">Beverages</a></div>  
                    <div id="c3"><a href="#others">Others</a></div>              
                </div>
            </div>
            <div class="white">
            <?php
                $sql = DB::table('menu')
                ->where('categories', '=', 'food')
                ->get();
                echo "<div class='foodbox'>";
                    echo "<div id='food'>Food</div>"; //food subtitle?>
                    <div id='plus'><a href='addmenu'><img src='{{ asset('image/plus.png')}}' width='30px' height='30px'></a></div>
                <?php
                echo "</div>";
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'>picture</div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->id . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . $food->price."</div>";
                            echo "</div>";
                            echo "<div class='description'>". $food->description ."</div>";
                        echo "</div>";
                    echo "</div>";
                }
                echo "</br>";

                $sql = DB::table('menu') //get the beverage list
                ->where('categories', '=', 'beverages')
                ->get();
                echo "<div id='beverage'>Beverages</div>"; //beverage subtitle
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'>picture</div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->id . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . $food->price."</div>";
                            echo "</div>";
                            echo "<div class='description'>". $food->description ."</div>";
                        echo "</div>";
                    echo "</div>";
                }
                echo "</br>";

                $sql = DB::table('menu') //get the beverage list
                ->where('categories', '!=', 'food')
                ->where('categories', '!=', 'beverages')
                ->get();
                echo "<div id='others'>Others</div>"; //Others subtitle
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'>picture</div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->id . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . $food->price."</div>";
                            echo "</div>";
                            echo "<div class='description'>". $food->description ."</div>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            </div>
    </div>

    <script>
    </script>
</body>
</html>