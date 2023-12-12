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
    <title>Expense</title>
</head>

<body class="bg-gray-200 print:bg-white">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%] print:hidden">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-gray-200" href="#"><img class="mr-[10px]" src="{{ asset('image/dashboard.png')}}" width="35px" height="35px">Dashboard</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="adminmenu"><img class="mr-[10px]" src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="account"><img class="mr-[10px]" src="{{ asset('image/account.png')}}" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full h-full">
            <header class="fixed w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400 print:hidden">
                <div class="flex">
                    <a href="/dashboard"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </header>

            <main class="flex px-6 pt-24 pb-6 print:pt-0 print:pb-0" id="sales">
                <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl print:shadow-none">
                    <h1 class="px-4 text-3xl font-bold">Expense</h1>
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <button id="generatePDF" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button" onclick="print();">
                                    Generate PDF
                                </button>
                                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </button>
                                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900">Choose category</h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                        <li class="flex items-center">
                                            <input id="food" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="food" class="ml-2 text-sm font-medium text-gray-900">Salary</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="beverage" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="beverage" class="ml-2 text-sm font-medium text-gray-900">Ingredient</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="other" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="other" class="ml-2 text-sm font-medium text-gray-900">Utility</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto px-4">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase rounded-t-xl bg-gray-300">
                                <tr>
                                    <th scope="col" class="px-4 py-3 rounded-tl-xl">ID</th>
                                    <th scope="col" class="px-4 py-3">Name</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Quantity</th>
                                    <th scope="col" class="px-4 py-3">Value</th>
                                    <th scope="col" class="px-4 py-3 rounded-tr-xl">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">S01</th>
                                    <td class="px-4 py-3">Name 1</td>
                                    <td class="px-4 py-3">Salary</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 1900</td>
                                    <td class="px-4 py-3">01/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">S02</th>
                                    <td class="px-4 py-3">Name 2</td>
                                    <td class="px-4 py-3">Salary</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 2000</td>
                                    <td class="px-4 py-3">15/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">S03</th>
                                    <td class="px-4 py-3">Name 3</td>
                                    <td class="px-4 py-3">Salary</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 2000</td>
                                    <td class="px-4 py-3">28/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">I11</th>
                                    <td class="px-4 py-3">Ingredient 1</td>
                                    <td class="px-4 py-3">Ingredient</td>
                                    <td class="px-4 py-3">100</td>
                                    <td class="px-4 py-3">RM 1800</td>
                                    <td class="px-4 py-3">07/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">I12</th>
                                    <td class="px-4 py-3">Ingredient 2</td>
                                    <td class="px-4 py-3">Ingredient</td>
                                    <td class="px-4 py-3">100</td>
                                    <td class="px-4 py-3">RM 599</td>
                                    <td class="px-4 py-3">21/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">I13</th>
                                    <td class="px-4 py-3">Ingredient 3</td>
                                    <td class="px-4 py-3">Ingredient</td>
                                    <td class="px-4 py-3">120</td>
                                    <td class="px-4 py-3">RM 799</td>
                                    <td class="px-4 py-3">03/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">I14</th>
                                    <td class="px-4 py-3">Ingredient 4</td>
                                    <td class="px-4 py-3">Ingredient</td>
                                    <td class="px-4 py-3">300</td>
                                    <td class="px-4 py-3">RM 900</td>
                                    <td class="px-4 py-3">14/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">U01</th>
                                    <td class="px-4 py-3">Utility 1</td>
                                    <td class="px-4 py-3">Utility</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 399</td>
                                    <td class="px-4 py-3">25/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">U02</th>
                                    <td class="px-4 py-3">Utility 2</td>
                                    <td class="px-4 py-3">Utility</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 50</td>
                                    <td class="px-4 py-3">09/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">U03</th>
                                    <td class="px-4 py-3">Utility 3</td>
                                    <td class="px-4 py-3">Utility</td>
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">RM 500</td>
                                    <td class="px-4 py-3">18/05/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500">
                            Showing
                            <span class="font-semibold text-gray-900">1-10</span>
                            of
                            <span class="font-semibold text-gray-900">50</span>
                        </span>
                        <ul class="inline-flex items-stretch -space-x-px">
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </main>
        </div>
    </div>
</body>

</html>