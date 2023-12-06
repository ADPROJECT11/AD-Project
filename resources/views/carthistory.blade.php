<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <title>Menu</title>
</head>

<body class="bg-grey-200">
    <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <div class="return">
            <a href=/viewcart><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
        </div>
    </div>

    <div class="flex flex-col justify-between items-center">
        <div class="flex flex-col w-11/12 px-5 py-5 mt-5 bg-white shadow-md max-w-md rounded-xl">
            <h1 class="text-3xl font-bold mb-3">Order History</h1>
            <div>
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

            <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

            <div>
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
        </div>
    </div>
</body>

</html>