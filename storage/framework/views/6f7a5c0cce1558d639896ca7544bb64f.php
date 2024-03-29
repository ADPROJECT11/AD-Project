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
    <title>Notification</title>
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
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="cheforderlist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/order.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 bg-gray-300 rounded" href="notify">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/notification.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Notification</span>
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

        <main class="w-full h-full">
            <nav class="flex pt-4 pl-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="notify" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Notification
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="flex items-center justify-end flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 px-12 py-4 dark:bg-gray-900">
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="chefaddnotification" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Notification</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <form id="form" action="notifydetails" method="get">
                <input type="hidden" id="hidden" name="id">
                <div class="grid grid-cols-2 justify-between items-start py-2 px-12 pt-[10px] gap-x-12 gap-y-8 w-full">
                    <?php

                    use Illuminate\Support\Carbon;

                    $notifications = DB::table('notifications')->orderBy('updated_at', 'desc')->get();

                    if (count($notifications) > 0) {
                        $currentDate = null;

                        foreach ($notifications as $notificationItem) {
                            $temp = Carbon::parse($notificationItem->updated_at);
                            $temp->setTime(12, 0, 0);
                            if ($currentDate) {
                                $currentDate = Carbon::parse($currentDate);
                                $currentDate->setTime(12, 0, 0);
                            }


                            // Check if the dates are different
                            if ($temp != $currentDate) {
                                // Close the previous date container if it exists
                                if (!is_null($currentDate)) {
                                    echo '</ul></div></div>';
                                }

                                // Start a new date container
                                echo '<div class="area-date-container">';
                                echo '<label for="date" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">' . $temp->format('d M Y') . '</label>';
                                echo '<div class="flex flex-col container max-w-md mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">';
                                echo '<ul class="flex flex-col divide-y w-full">';
                            }

                            // Display individual notifications
                            echo '<li class="flex flex-row" onclick="submitForm(\'' . $notificationItem->id . '\')">';
                            echo '<div class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 justify-between items-center p-4 w-full">';
                            echo '<div>';
                            echo '<div class="text-xl font-medium text-gray-900">' . $notificationItem->subject . '</div>';
                            echo '<div class="italic">Status: ' . $notificationItem->status . '</div>';
                            echo '<div class="mt-2 text-m font-medium italic">From: ' . $notificationItem->roles . '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</li>';

                            // Update the current date
                            $currentDate = $temp;
                        }

                        // Close the last date container
                        echo '</ul></div></div>';
                    } else {
                        echo 'No notifications found.';
                    }
                    ?>
            </form>
        </main>
    </div>
    <script>
        function submitForm(id) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/notify.blade.php ENDPATH**/ ?>