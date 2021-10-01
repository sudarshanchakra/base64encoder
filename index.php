<?php
if(isset($_POST['text'])){
    $input = $_POST['text'];
    $output = base64_encode($input);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Base64 Encoder</title>
</head>
<body>
    <div class="main">
        <h1 style="text-align: center;">Base64 Encoder</h1>
       <form action="index.php" class="encode_form" method="post">
        <input type="text" name="text" class="encode_input" placeholder="Enter Your Text"/>
        <button type="submit" class="encode_button">Encode</button>
       </form>

    </div>
    <textarea id="" cols="30" class="encode_output" rows="10" ><?php if(isset($output)){echo $output;} ?></textarea>
</body>
</html>
