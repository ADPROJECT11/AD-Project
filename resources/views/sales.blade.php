<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @media screen and (orientation: portrait) {
            html {
                /* Rotate the content container */
                transform: rotate(-90deg);
                transform-origin: left top;
                /* Set content width to viewport height */
                width: 100vh;
                /* Set content height to viewport width */
                height: 100vw;
                overflow-x: hidden;
                position: absolute;
                top: 100%;
                left: 0;
            }
        }
    </style>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Load icon library -->
    <title>Sales</title>
</head>

<body class="bg-gray-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-gray-200" href="#"><img class="mr-[10px]" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Dashboard</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="adminmenu"><img class="mr-[10px]" src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="account"><img class="mr-[10px]" src="{{ asset('image/account.png')}}" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full h-full">
            <header class="fixed w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
                <div class="return">
                    <a href=/cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </header>

            <main class="flex px-6 pt-24" id="sales">
                <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl">
                    <h1 class="text-2xl font-bold">Sales</h1>
                    <div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>