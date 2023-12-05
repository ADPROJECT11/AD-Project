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
    <title>Dashboard</title>
</head>

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="#"><img class="mr-[10px]" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Dashboard</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="adminmenu"><img class="mr-[10px]" src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="account"><img class="mr-[10px]" src="{{ asset('image/account.png')}}" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <main class="flex flex-col w-full h-full">
            <div class="flex" id="top-3">
                <div class="flex flex-row justify-start items-center mt-12 px-6 gap-6 w-full h-full">
                    <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/3 rounded-xl">
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">Sales</h1>
                            <button type="button" id="saleButton" data-dropdown-toggle="dropdownSale">
                                <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div id="dropdownSale" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                <a href="/dashboard/sales" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                            </div>
                        </div>
                        <p class="text-base text-grey-600">Total sales of this month</p>
                        <h1 class="text-3xl mt-2 font-bold">$10000.00</h1>
                    </div>

                    <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/3 rounded-xl">
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">Expense</h1>
                            <button type="button" id="expenseButton" data-dropdown-toggle="dropdownExpense">
                                <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div id="dropdownExpense" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                <a href="#" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                            </div>
                        </div>
                        <p class="text-base text-grey-600">Total expense of this month</p>
                        <h1 class="text-3xl mt-2 font-bold">$4000.00</h1>
                    </div>

                    <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/3 rounded-xl">
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">Profit</h1>
                            <button type="button" id="profitButton" data-dropdown-toggle="dropdownProfit">
                                <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div id="dropdownProfit" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                <a href="#" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                            </div>
                        </div>
                        <p class="text-base text-grey-600">Total profit of this month</p>
                        <h1 class="text-3xl mt-2 font-bold">$6000.00</h1>
                    </div>
                </div>
            </div>

            <div class="flex px-6 mt-12" id="chart">
                <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl">
                    <div class="w-full flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Profit of Months</h1>
                        <button type="button" id="profitMonthButton" data-dropdown-toggle="dropdownProfitMonth">
                            <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 50 50">
                                <circle cx="20" cy="20" r="5"></circle>
                                <circle cx="5" cy="20" r="5"></circle>
                                <circle cx="35" cy="20" r="5"></circle>
                            </svg>
                        </button>
                        <div id="dropdownProfitMonth" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                            <a href="#" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                        </div>
                    </div>
                    <p class="mb-2 text-base text-grey-600">Total profit of the month</p>
                    <div class="flex-grow">
                        <canvas id="dashboard-card-01" width="848" height="400"></canvas>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>