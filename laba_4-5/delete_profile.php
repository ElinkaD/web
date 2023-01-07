<?php 
    // 
    if (isset($_GET['id'])) {

        // id из запроса
        $id = $_GET['id'];

        $xml = simplexml_load_file("data.xml");

        $i = 0; 


        foreach($xml->product as $product) {
            if ($product['id'] == $id) {
                unset($xml->product[$i]);
                break;
            }
            $i++;
        }

        $xml->saveXML("data.xml");
        echo "<script>location.href='index_admin.php'</script>";
    }
?>