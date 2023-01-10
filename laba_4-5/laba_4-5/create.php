<?php 
    if (isset($_POST['submit'])) {
        // url 
        $imgproduct = $_POST['imgproduct'];
        // название продукта 
        $nameproduct= $_POST['nameproduct'];
        // цена продукта 
        $priceproduct = $_POST['priceproduct'];

        $xml = simplexml_load_file("data.xml");

        // обращаемся к последнему эл-ту
        $lastEl = $xml->product[$xml->count() - 1];

        // создаем тег корневой product 
        $newproduct = $xml->addChild('product', '');
        $newproduct->addChild('name', $nameproduct);
        $newproduct->addChild('price', $priceproduct);
        $newproduct->addChild('img', $imgproduct);

        // добавляем атрибут id на один больше чем у последнего
        $newproduct->addAttribute('id', $lastEl['id'] + 1);

        $xml->saveXML("data.xml");

        echo "<script>
        alert('Ваш продукт успешно создан и добавлен в базу!');
        location.href = 'index_admin.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgproduct" placeholder="url продукта">
        <br>
        <input type="text" name="nameproduct" required placeholder="введите название продукта">
        <br>
        <input type="text" name="priceproduct" required placeholder="введите цену продукта">
        <br>
        <button type="submit" name="submit">Создать</button>
    </form>

    <a href="index_admin.php">Назад</a>
</body>
</html>