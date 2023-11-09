<?php
$url="https://catfact.ninja/fact";
$data=file_get_contents($url);

$result=json_decode($data, true);
?>


<h1>les chats</h1>
<p><?=  $result["fact"] ?></p>

