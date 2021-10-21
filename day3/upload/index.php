<?php
error_reporting(-1);

/* echo "<pre>";
print_r($_SERVER); // Вывод информации о нашем сервере
echo "</pre>"; */
//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
//echo $_SERVER['SERVER_ADDR'];
//echo $_SERVER['QUERY_STRING'];
// echo $_SERVER['DOCUMENT_ROOT'];
// echo $_SERVER['HTTP_HOST'];
// if(isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['REMOTE_ADDR'];
// if(isset($_SERVER['REMOTE_HOST'])) echo $_SERVER['REMOTE_HOST'];


if(isset($_POST['send'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

// Проверка если фаил был передан формой
if(!empty($_FILES)){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    // if no error now move uploaded file from tmp to our directory
    move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name']); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
        </p>
        <p>
            <input type="file" name="file" id="">
        </p>
        <p>
            <button type="submit" name="send" value="upload">SUBMIT</button>
        </p>
    </form>
</body>
</html>