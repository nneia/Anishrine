<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style type="text/css">
	

</style>

<body>

<?$post_id = $_GET['id'];
 ?>

  <div class='container'>
   <? require('db.php');
/*
$post_data = $pdo ->query("SELECT * FROM `example-table` WHERE `post_id` = $a");
*/

$post_data = $pdo ->query("SELECT * FROM `example-table` WHERE `post_id` = $post_id");


foreach ($post_data as $post_item):?>
<h3><?=$post_item['post_title'];?></h3>
<p><?=$post_item['post_text'];?></p>
      
    <?endforeach?>
  </div>





</body>
</html>