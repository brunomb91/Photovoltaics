<html>
<head>
	<title>Valores</title>
</head>

<body>
	<p>Voltage, current and power results: </p>
	<?php
	   $url = 'data_arduino.json';
	   $data = file_get_contents($url);
	   $value = json_decode($data);
        ?>
	<table>
	   <tr>
	      <th>Name</th>
              <th>Value</th>
	   </tr>
	   <tr>
              <td>Vrms</td>
              <td><?php echo $value->Vrms ?></td>
	   </tr>
	   <tr>
              <td>Irms</td>
              <td><?php echo $value->Irms ?></td>
	   </tr>
	   <tr>
              <td>Power</td>
              <td><?php echo $value->Power ?></td>
	   </tr> 
        </table>
</html>
