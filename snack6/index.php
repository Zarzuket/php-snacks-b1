<?php
$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

foreach ($db as $guys => $info){
    echo $guys;
    foreach($info as $name){
        echo $name['name'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style='background-color: grey; height:200px; width:300px'>
        <?php foreach($db["teachers"] as $guys) { ?>
            <li><?php echo $guys['name'] . " " . $guys["lastname"]?></li>
        <?php } ?>
    </div>
    <div style="background-color:green; height:200px; width:300px">
        <?php foreach($db["pm"] as $stud) { ?>
            <li><?php echo $stud['name'] . " " . $stud["lastname"]?></li>
        <?php } ?>
    </div>
</body>
</html>