<!DOCTYPE html>
<html>
<head>
</head>
<body>
     <form method="post" action="testing" enctype="multipart/form-data">
        @csrf
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>


    <?php
        $sql = DB::table('images')->get();
        foreach ($sql as $image) {
            echo "<img src='storage/image/$image->name' width='50px' height='50px'>";
        }
    ?>
</body>
</html>