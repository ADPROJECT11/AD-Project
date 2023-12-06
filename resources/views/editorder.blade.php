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
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
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

        <main class="flex w-full">
            <div class="flex flex-col mx-6 my-6 px-6 py-6 bg-pigment-indigo-400 shadow-md rounded-3xl w-full">
                <h1 class="text-5xl text-white font-bold">Table 1</h1>
                <div class="grid grid-cols-2 justify-between items-center px-6 py-6 gap-x-12 gap-y-12 w-full">
                    <div class="flex flex-col px-5 py-5 bg-white shadow-md max-w-md rounded-xl w-full">
                        <div class="flex justify-end">
                            <button type="button" class="px-1 py-1">
                                <svg class="fill-none stroke-pigment-indigo-400 stroke-[3px]" xmlns="http://www.w3.org/2000/svg" width="23.335" height="23.335" viewBox="0 0 23.335 23.335">
                                    <g transform="translate(-302.995 -562.503) rotate(45)">
                                        <line class="a" x2="30" transform="translate(613.5 183.5)" />
                                        <line class="a" x2="30" transform="translate(628.5 168.5) rotate(90)" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                            <h2 class="text-sm font-bold">RM 13.00</h2>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <div>
                                    <h2 class="text-xl font-bold">Add Topping</h1>
                                        <p class="text-sm text-grey-600">Select one of the options</p>
                                </div>
                                <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                                    <p class="text-center text-white text-sm my-1">Required</p>
                                </div>
                            </div>
                            <form class="mt-3" action="/topping.php">
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="sauce" value="no">
                                <label class="ml-2 text-lg align-middle" for="topping1">No Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping2" name="sauce" value="bbq">
                                <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping3" name="sauce" value="korean">
                                <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping4" name="sauce" value="salted">
                                <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label><br>
                            </form>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <h2 class="text-xl font-bold">Add-On</h1>
                                    <div class="w-20 my-auto bg-grey-500 shadow-md max-w-md rounded-2xl">
                                        <p class="text-center text-white text-sm my-1">Optional</p>
                                    </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <form class="mt-3" action="/addon.php">
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon" value="spaghetti">
                                    <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon2" name="addon" value="meat">
                                    <label class="ml-2 text-lg align-middle" for="addon2">Add Meat</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon3" name="addon" value="egg">
                                    <label class="ml-2 text-lg align-middle" for="addon3">Add Egg</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon4" name="addon" value="fries">
                                    <label class="ml-2 text-lg align-middle" for="addon4">Add French Fries</label><br>
                                </form>
                                <div class="mt-3 text-center align-middle">
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 3.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 1.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                </div>
                            </div>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <h2 class="text-xl font-bold">Special Request</h1>
                                <p class="text-sm text-grey-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                                <form class="mt-3" action="/request.php">
                                    <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request" placeholder="e.g. No peanut"></textarea>
                                </form>
                        </div>
                    </div>

                    <div class="flex flex-col px-5 py-5 bg-white shadow-md max-w-md rounded-xl w-full">
                        <div class="flex justify-end">
                            <button type="button" class="px-1 py-1">
                                <svg class="fill-none stroke-pigment-indigo-400 stroke-[3px]" xmlns="http://www.w3.org/2000/svg" width="23.335" height="23.335" viewBox="0 0 23.335 23.335">
                                    <g transform="translate(-302.995 -562.503) rotate(45)">
                                        <line class="a" x2="30" transform="translate(613.5 183.5)" />
                                        <line class="a" x2="30" transform="translate(628.5 168.5) rotate(90)" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                            <h2 class="text-sm font-bold">RM 13.00</h2>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <div>
                                    <h2 class="text-xl font-bold">Add Topping</h1>
                                        <p class="text-sm text-grey-600">Select one of the options</p>
                                </div>
                                <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                                    <p class="text-center text-white text-sm my-1">Required</p>
                                </div>
                            </div>
                            <form class="mt-3" action="/topping.php">
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="sauce" value="no">
                                <label class="ml-2 text-lg align-middle" for="topping1">No Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping2" name="sauce" value="bbq">
                                <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping3" name="sauce" value="korean">
                                <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping4" name="sauce" value="salted">
                                <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label><br>
                            </form>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <h2 class="text-xl font-bold">Add-On</h1>
                                    <div class="w-20 my-auto bg-grey-500 shadow-md max-w-md rounded-2xl">
                                        <p class="text-center text-white text-sm my-1">Optional</p>
                                    </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <form class="mt-3" action="/addon.php">
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon" value="spaghetti">
                                    <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon2" name="addon" value="meat">
                                    <label class="ml-2 text-lg align-middle" for="addon2">Add Meat</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon3" name="addon" value="egg">
                                    <label class="ml-2 text-lg align-middle" for="addon3">Add Egg</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon4" name="addon" value="fries">
                                    <label class="ml-2 text-lg align-middle" for="addon4">Add French Fries</label><br>
                                </form>
                                <div class="mt-3 text-center align-middle">
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 3.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 1.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                </div>
                            </div>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <h2 class="text-xl font-bold">Special Request</h1>
                                <p class="text-sm text-grey-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                                <form class="mt-3" action="/request.php">
                                    <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request" placeholder="e.g. No peanut"></textarea>
                                </form>
                        </div>
                    </div>

                    <div class="flex flex-col px-5 py-5 bg-white shadow-md max-w-md rounded-xl w-full">
                        <div class="flex justify-end">
                            <button type="button" class="px-1 py-1">
                                <svg class="fill-none stroke-pigment-indigo-400 stroke-[3px]" xmlns="http://www.w3.org/2000/svg" width="23.335" height="23.335" viewBox="0 0 23.335 23.335">
                                    <g transform="translate(-302.995 -562.503) rotate(45)">
                                        <line class="a" x2="30" transform="translate(613.5 183.5)" />
                                        <line class="a" x2="30" transform="translate(628.5 168.5) rotate(90)" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                            <h2 class="text-sm font-bold">RM 13.00</h2>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <div>
                                    <h2 class="text-xl font-bold">Add Topping</h1>
                                        <p class="text-sm text-grey-600">Select one of the options</p>
                                </div>
                                <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                                    <p class="text-center text-white text-sm my-1">Required</p>
                                </div>
                            </div>
                            <form class="mt-3" action="/topping.php">
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="sauce" value="no">
                                <label class="ml-2 text-lg align-middle" for="topping1">No Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping2" name="sauce" value="bbq">
                                <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping3" name="sauce" value="korean">
                                <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label><br>
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping4" name="sauce" value="salted">
                                <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label><br>
                            </form>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <div class="flex flex-row justify-between">
                                <h2 class="text-xl font-bold">Add-On</h1>
                                    <div class="w-20 my-auto bg-grey-500 shadow-md max-w-md rounded-2xl">
                                        <p class="text-center text-white text-sm my-1">Optional</p>
                                    </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <form class="mt-3" action="/addon.php">
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon" value="spaghetti">
                                    <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon2" name="addon" value="meat">
                                    <label class="ml-2 text-lg align-middle" for="addon2">Add Meat</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon3" name="addon" value="egg">
                                    <label class="ml-2 text-lg align-middle" for="addon3">Add Egg</label><br>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon4" name="addon" value="fries">
                                    <label class="ml-2 text-lg align-middle" for="addon4">Add French Fries</label><br>
                                </form>
                                <div class="mt-3 text-center align-middle">
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 3.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 1.00</p>
                                    <p class="text-grey-700 leading-7">+ RM 2.00</p>
                                </div>
                            </div>
                        </div>

                        <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                        <div class="w-full">
                            <h2 class="text-xl font-bold">Special Request</h1>
                                <p class="text-sm text-grey-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                                <form class="mt-3" action="/request.php">
                                    <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request" placeholder="e.g. No peanut"></textarea>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-center items-center mt-6 gap-6 w-full">
                    <button type="submit" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-100 border-4 border-pigment-indigo-500 text-pigment-indigo-500 rounded-lg shadow-md w-40">Confirm</button>
                    <a href="#"><button type="button" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-200 border-4 border-pigment-indigo-700 text-pigment-indigo-700 rounded-lg shadow-md w-40">Reset</button></a>
                    <a href="/orderlist"><button type="button" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-500 border-4 border-pigment-indigo-800 text-white rounded-lg shadow-md w-40">Cancel</button></a>
                    <button type="button" class="inline-block py-2 text-center text-xl font-bold bg-red-600 border-4 border-pigment-indigo-900 text-red-900 rounded-lg shadow-md w-40">Delete</button>
                </div>
            </div>
        </main>
    </div>
</body>

</html>