<h1>hola</h1>

<?php

const API_URL= "https://whenisthenextmcufilm.com/api";
$ch= curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($ch);

$data=json_decode($result, true);

curl_close($ch);



?>

<h1>
    <?php echo ($data["title"]);?>
</h1>

<h4>
    <?php echo ($data["overview"]);?>
</h4>

<h3>FECHA DE ESTRENO: <?php  echo ($data["release_date"]);?></h3>

<img src=" <?php echo ($data["poster_url"]); ?>" alt="">






<h1>
<?php
    var_dump($data);
?>
</h1>





<style>
    :root{
        color-scheme: dark;

    }

  
</style>