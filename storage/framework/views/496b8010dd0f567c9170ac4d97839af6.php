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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <title>Order List</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon/logo.ico')); ?>">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="<?php echo e(asset('image/logo.png')); ?>" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="orderlist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/order.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="menulist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/menu.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Menu</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="reservation_staff">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/reservation.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Reservation</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="notification">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/notification.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Notification</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="payment">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                </svg>
                <span class="ml-2 font-medium">Payment</span>
            </a>
        </div>

    </div>
    <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-100 hover:bg-gray-300" href="logout">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        <span class="ml-2 font-medium">Logout</span>
    </a>
</div>
<!-- Component End  -->

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <div class="flex flex-col w-full h-full">
            <header class="flex fixed justify-center items-center w-[80%] h-[120px]">
                <div class="flex flex-row justify-center items-center px-[5px] gap-[5px] rounded-lg bg-pigment-indigo-600 w-[452px] h-[70px]">
                    <?php
                    $pending = count($orderno);
                    $preparing = count($preparing);
                    $completed = count($completed);
                    ?>
                    <a href="orderlist"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold rounded-lg bg-pigment-indigo-200 w-36 h-[60px]">Pending<div class="-mt-2 text-2xl text-pigment-indigo-600" id="pending"><?php echo $pending; ?></div></button></a>
                    <a href="preparing"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold rounded-lg text-white w-36 h-[60px]">Preparing<div class="-mt-2 text-2xl text-pigment-indigo-200" id="preparing"><?php echo $preparing; ?></div></button></a>
                    <a href="complete"><button type="button" class="flex flex-col justify-center items-center text-lg font-bold rounded-lg text-white w-36 h-[60px]">Completed<div class="-mt-2 text-2xl text-pigment-indigo-200" id="completed"><?php echo $completed; ?></div></button></a>
                </div>
            </header>

            <main class="grid grid-cols-2 justify-between items-start my-12 px-12 pt-[120px] gap-x-12 gap-y-12 w-full h-full">
                <?php foreach ($orderno as $orderno) {
                    $order = DB::table('order_food_nos')
                        ->where('order_no', '=', $orderno->id)
                        ->get();
                ?>
                    <div class="flex flex-col px-6 py-6 bg-pigment-indigo-400 shadow-md rounded-3xl">
                        <h1 class="text-3xl text-white font-bold">Table <?php if (isset($order[0])) echo $order[0]->table_no; ?></h1>
                        <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                            <div class="px-4 pt-4">
                                <?php
                                foreach ($order as $orders) {
                                    $menu = DB::table('menus')
                                        ->where('foodid', '=', $orders->foodid)
                                        ->first();
                                ?>
                                    <div class="mb-4">
                                        <h1 class="text-xl mx-2 font-bold"><?php echo $menu->foodid . '. ' . $menu->foodname . '  x' . $orders->quantity; ?></h1>
                                        <?php
                                        $toppingorder = DB::table('orders')
                                            ->where('food_no', '=', $orders->id)
                                            ->get();
                                        foreach ($toppingorder as $description) {
                                            if ($description->top_or_add == "topping") {
                                                $temp = DB::table('toptions')
                                                    ->where('id', '=', $description->choice_no)
                                                    ->first();
                                            } else {
                                                $temp = DB::table('aoptions')
                                                    ->where('id', '=', $description->choice_no)
                                                    ->first();
                                            }
                                        ?>
                                            <p class="mx-2 italic text-grey-700">+ <?php echo $temp->option ?></p>
                                        <?php } ?>
                                        <?php if ($orders->request) : ?>
                                            <p class="mx-2 italic text-gray-700 text-left">Note: <?php echo $orders->request ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <form id='form' method="get" action="approve">
                            <input type="hidden" name='id' id='hidden'>
                            <input type="hidden" name='action' id='action'> <!-- Corrected the ID here -->
                            <div class="flex flex-row justify-between items-center mt-6">
                                <button type="button" name="action" value="edit" onclick="submitForm('<?php echo $orderno->id; ?>', 'edit')" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-100 border-4 border-pigment-indigo-500 text-pigment-indigo-500 rounded-lg shadow-md w-36">Edit</button>
                                <button type="button" name="action" value="approve" onclick="submitForm('<?php echo $orderno->id; ?>', 'approve')" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-500 border-4 border-pigment-indigo-800 text-white rounded-lg shadow-md w-36">Approve</button>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
            </main>
        </div>
    </div>
    <script>
        function submitForm(id, action) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            document.getElementById('action').value = action;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/orderlist.blade.php ENDPATH**/ ?>