<?php
$url="users.json";
$data=file_get_contents($url, true);

// echo('<pre>');
// var_dump($data);
// echo('</pre>')
$results=json_decode($data, true);
// var_dump(gettype($data));





foreach($results as $result ){?>
    <br>
    <p style="border:2px solid #d1d1d1;display:inline-block; "><?= $result["name"] ?></p>

    <?php
}
?>


