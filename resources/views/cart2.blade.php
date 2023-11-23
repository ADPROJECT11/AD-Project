<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <script>
        <?php
        $cartItems = DB::table('cart')->get();
        ?>
    </script>
    <title>Menu</title>
</head>

<body class="bg-gray-200">
    <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <div class="return">
            <a href=/cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
        </div>
    </div>

    <form method="POST" action="posttest">
        @csrf
        <div class="flex flex-col justify-between items-center">
            <div class="flex flex-col w-11/12 px-5 pt-5 mt-5 bg-white shadow-md max-w-md rounded-xl">

                <?php
                foreach ($cartItems as $item) {
                    echo '<div class="flex flex-row items-start justify-between">';
                    echo '<div class="flex flex-row items-start align-middle text-center">';
                    echo '<div class="flex align-middle text-center">';
                    echo '<button type="button" class="text-pigment-indigo-400 onclick=""><img id="minus" src="' . asset('image/minus.png') . '" width="12px" height="12px"></button>';
                    echo '<p class="inline-block w-7 h-7 mx-2 text-xl leading-6 font-bold bg-pigment-indigo-100 border-2 border-pigment-indigo-500 rounded-lg shadow-md" id="count">' . $item->quantity . '</p>';
                    echo '<button type="button" class="text-pigment-indigo-400 onclick=""><img id="add" src="' . asset('image/add.png') . '" width="12px" height="12px"></button>';
                    echo '</div>';
                    echo '<div class="flex flex-col items-start">';
                    echo '<h1 class="text-xl mx-2 font-bold">' . $item->fID . '. ' . $item->foodname . '</h1>';
                    echo '<p class="mx-2 italic text-gray-700">' . $item->description . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<h2 class="text-base font-semibold leading-7">RM ' . number_format($item->price, 2) . '</h2>';
                    echo '</div>';
                    echo '<div class="ml-20 flex flex-row justify-between">';
                    echo '<a href="/food"><button class="-mx-1 text-lg font-semibold text-aqua-green-600">Edit</button></a>';
                    echo '<button class="font-semibold text-red-600"><img id="add" src="' . asset('image/remove.png') . '" width="30px" height="30px"></button>';
                    echo '</div>';
                    echo '<div class="mt-2 pb-5">';
                    echo '<a href="/cusmenu"><button class="text-lg italic font-semibold text-pigment-indigo-500 hover:underline">Add More Items</button></a>';
                    echo '</div>';
                }

                ?>
            </div>


            <div class="fixed inset-x-0 bottom-0">
                <div class="w-full py-3 shadow-inner rounded-t-3xl bg-pigment-indigo-200">
                    <div class="flex flex-row justify-center items-center">
                        <h1 class="text-xl font-bold mx-2">Quantity:</h1>
                        <!--
                    <p class="text-2xl font-bold text-pigment-indigo-400" id="quantity">
                        <script>
                            quantity();
                        </script>
                    </p>
                    -->
                        <?php
                        echo '<p class="text-2xl font-bold text-pigment-indigo-400" id="quantity">' . $item->quantity . '</p>';
                        ?>
                    </div>
                    <div class="flex flex-row justify-center items-center">
                        <h1 class="text-xl font-bold mx-2">Nett total:</h1>
                        <?php
                        $total = 0;
                        foreach ($cartItems as $item) {
                            $total += $item->price * $item->quantity;
                        }
                        echo '<p class="text-2xl font-bold text-pigment-indigo-400">RM ' . $total . '</p>';
                        ?>
                    </div>
                </div>
                <button type="button" data-modal-target="confirmation-modal" data-modal-toggle="confirmation-modal" class="w-full py-4 text-center text-xl font-bold bg-pigment-indigo-400 active:bg-pigment-indigo-500 text-white shadow-inner" name="checkout">Checkout</button>
            </div>
        </div>

        <div id="confirmation-modal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-11/12 max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="confirmation-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <img class="mx-auto mb-4 w-12 h-12" src="{{asset('image/warning.png')}}" width="50px" height="50px">
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Do you want to confirm your order?</h3>
                        <button data-modal-target="complete-modal" data-modal-hide="confirmation-modal" data-modal-toggle="complete-modal" type="button" class="text-white bg-pigment-indigo-400 active:bg-pigment-indigo-500 focus:ring-4 focus:outline-none focus:ring-pigment-indigo-300 dark:focus:ring-pigment-indigo-700 font-semibold rounded-lg inline-flex items-center px-5 py-2.5 text-center mr-2">Confirm</button>
                        <button data-modal-hide="confirmation-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="complete-modal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-11/12 max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="p-6 text-center">
                        <img class="mx-auto mb-4 w-12 h-12" src="{{asset('image/complete.png')}}" width="50px" height="50px">
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Order successfully confirmed</h3>
                        <a href="/cusmenu"><button data-modal-hide="complete-modal" type="submit" class="text-white bg-pigment-indigo-400 active:bg-pigment-indigo-500 focus:ring-4 focus:outline-none focus:ring-pigment-indigo-300 dark:focus:ring-pigment-indigo-700 font-semibold rounded-lg inline-flex items-center px-10 py-2.5 text-center">OK</button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>