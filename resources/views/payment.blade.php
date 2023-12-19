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
    <title>Payment</title>
</head>

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="reservation"><img class="mr-2" src="{{asset('image/reservation.png')}}" width="35px" height="35px">Reservation</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="menulist"><img class="mr-2" src="{{asset('image/menu.png')}}" width="35px" height="35px">Menu List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="#"><img class="mr-2" src="{{asset('image/order.png')}}" width="35px" height="35px">Order List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="notification"><img class="mr-2"" src=" {{asset('image/notification.png')}}" width="35px" height="35px">Notification</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="payment"><img class="mr-2" src="{{asset('image/cashier.png')}}" width="35px" height="35px">Payment</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full h-full">
            <header class="flex fixed justify-center items-center bg-pigment-indigo-400 w-[80%] h-[120px]">
                <div class="flex flex-row justify-center items-center px-4 py-2 gap-2 rounded-lg bg-pigment-indigo-600">
                    <u class="flex flex-col justify-center items-center text-white font-semibold text-xl underline-offset-4 decoration-2">
                        <img src="{{asset('image/step 1.png')}}" width="30px" height="30px">Payment
                    </u>
                    <img src="{{asset('image/line.png')}}" width="60px" height="50px">
                    <u class="flex flex-col justify-center items-center text-white font-light text-xl no-underline">
                        <img src="{{asset('image/step 2.png')}}" width="30px" height="30px">Confirmation
                    </u>
                    <img src="{{asset('image/line.png')}}" width="60px" height="50px">
                    <u class="flex flex-col justify-center items-center text-white font-light text-xl no-underline">
                        <img src="{{asset('image/step 3.png')}}" width="30px" height="30px">Complete
                    </u>
                </div>
            </header>

            <main class="grid grid-cols-7 justify-between items-start my-6 px-6 pt-[120px] gap-x-6 gap-y-6 w-full h-full">
                <div class="col-span-4 flex flex-col px-6 py-6 bg-white shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold mb-3">Payment</h1>

                    <label class="text-lg align-middle" for="topping1">
                        <div class="peer-checked/topping1:ring-pigment-indigo-500 ring-2 p-2 w-full">
                            <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500 peer/topping1" type="radio" id="topping1" name="sauce" value="no">
                            No Sauce
                        </div>
                    </label>

                    <div>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping2" name="sauce" value="bbq">
                        <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label>
                    </div>
                    <div>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping3" name="sauce" value="korean">
                        <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label>
                    </div>
                    <div>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping4" name="sauce" value="salted">
                        <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label>
                    </div>

                </div>
                <div class="col-span-3 flex flex-col px-6 py-6 bg-white shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold mb-3">Order List</h1>
                    <div class="flex flex-row items-start justify-between">
                        <div class="flex flex-row items-start align-middle text-center">
                            <div class="flex flex-col items-start">
                                <h1 class="text-xl font-bold">F01. Fish & Chips</h1>
                                <p class="italic text-grey-700">+ No sauce</p>
                            </div>
                        </div>
                        <h2 class="text-base font-semibold leading-7">RM 13.00</h2>
                    </div>

                    <div class="flex flex-row items-start justify-between">
                        <div class="flex flex-row items-start align-middle text-center">
                            <div class="flex flex-col items-start">
                                <h1 class="text-xl font-bold">F01. Fish & Chips</h1>
                                <p class="italic text-grey-700">+ No sauce</p>
                                <p class="italic text-grey-700">+ Extra fries</p>
                            </div>
                        </div>
                        <h2 class="text-base font-semibold leading-7">RM 15.00</h2>
                    </div>

                    <div class="flex flex-row items-start justify-between mt-2">
                        <h1 class="text-xl font-bold">Nett total: </h1>
                        <h2 class="text-base font-semibold leading-7">RM 28.00</h2>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>