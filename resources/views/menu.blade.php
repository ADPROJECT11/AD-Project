<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
<style>
@media screen and (max-width: 720px){}
</style>
<title>Menu </title>
</head>

<body class = "bg-gray-200">
    <div class="flex flex-col items-center">
        <div
            class="w-full px-6 py-4 shadow-md max-w-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
            <div class="return">
                <a href=cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
            </div>
        </div>

        <div class="w-80 mt-8 bg-white shadow-md max-w-md rounded-xl">
            <img class="rounded-xl" src="{{ asset('image/food.jpg')}}">
        </div>

        <div class="flex flex-col w-80 px-5 py-5 -mt-8 bg-white shadow-md max-w-md rounded-xl">
            <div class="w-full flex justify-between items-center">
                <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                <h2 class="text-sm font-bold">RM 13.00</h2>
            </div>
            <hr class="w-11/12 mx-auto my-5 h-1 bg-gray-300 border-0 rounded">
            <div class="w-full pb-5">
                <h2 class="text-xl font-bold">Add Topping</h1>
                <!-- add description of add toppping-->
                <p class="text-xs text-gray-500">Select one of the options</p>
                <!-- add checkbox -->
                
                
                        
            
            </div>
        </div>
    </div>
</body>

</html>