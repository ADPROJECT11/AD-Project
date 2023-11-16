<?php 
if(isset($_POST["submit"]) && isset($_FILES["my_image"])){
    echo"<pre>";
    print_r($_FILES["my_image"]);
    echo "<pre>";

    $img_name = $_FILES["my_image"]["name"];
    $img_size = $_FILES["my_image"]["size"];
    $img_name = $_FILES["my_image"]["tmp_name"];
    $error = $_FILES["my_image"]["error"];

    if($error === 0){
        if($img_size > 125000){
            $em = "Sorry, your file is too large.";
            return redirect()->to('testing?error='. $em)->send();
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            echo $img_ex;

            $allowed_exs = array('jpg','jpeg','png', 'tmp');

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = "image/". $new_img_name;
                move_uploaded_file($img_name, $img_upload_path);
                

                DB::insert('INSERT INTO image (img_url) VALUES(?)', [$new_img_name]);
                $sql = DB::table('image')->get();
                foreach ($sql as $img){
                    echo "<img src='image/$img->img_url'>";
                }
            }else{
                $em = "You can't upload files of this type.";
                return redirect()->to('testing?error='. $em)->send();
            }
        }
    }else{
        $em= "unknown error occured";
        return redirect()->to('testing?error='. $em)->send();
    }

}
else{
    header("Location: testing");
}
?>