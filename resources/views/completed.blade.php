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
    <title>Staff Order List</title>
</head>

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-grey-500 to-grey-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="staffmenu"><img class="mr-1" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Reservation</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="menulist"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="#"><img src="{{ asset('image/order.png')}}" width="35px" height="35px">Order List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="notification"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px">Notification</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full h-full">
            <header class="flex fixed justify-center items-center bg-grey-500 w-[80%] h-[120px]">
                <div class="flex flex-row justify-center items-center px-[5px] gap-[5px] rounded-lg bg-grey-300 w-[452px] h-[70px]">
                    <a href="/orderlist"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold rounded-lg w-36 h-[60px]">Pending<div class="-mt-2 text-2xl" id="pending">0</div></button></a>
                    <a href="/orderlist/preparing"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold  rounded-lg w-36 h-[60px]">Preparing<div class="-mt-2 text-2xl " id="preparing">0</div></button></a>
                    <a href="#"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold text-white bg-grey-600 rounded-lg w-36 h-[60px]">Completed<div class="-mt-2 text-2xl" id="completed">0</div></button></a>
                </div>
            </header>

            <main class="grid grid-cols-2 justify-between items-start my-12 px-12 pt-[120px] gap-x-12 gap-y-12 w-full h-full">
                <div class="flex flex-col px-6 py-6 bg-grey-500 shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold">Table 1</h1>
                    <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                        <div class="px-4 pt-4">
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                                <p class="mx-2 italic text-grey-700">+ Extra noodles</p>
                            </div>
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col px-6 py-6 bg-grey-500 shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold">Table 2</h1>
                    <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                        <div class="px-4 pt-4">
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                                <p class="mx-2 italic text-grey-700">+ Extra noodles</p>
                            </div>
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col px-6 py-6 bg-grey-500 shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold">Table 3</h1>
                    <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                        <div class="px-4 pt-4">
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                                <p class="mx-2 italic text-grey-700">+ Extra noodles</p>
                            </div>
                            <div class="mb-4">
                                <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                                <p class="mx-2 italic text-grey-700">+ No sauce</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

</body>

</html>