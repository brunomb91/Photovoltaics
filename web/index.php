<html>
<head>
	<title>Measurements</title>
        <h1>Measurements</h1>
	<style>
	h1 {
        text-align: center;
        text-transform: uppercase;
        color: #4CAF50;
        }

        p {
        text-indent: 50px;
        text-align: justify;
        letter-spacing: 3px;
        }

        #values {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #values td, #values th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #values tr:nth-child(even){background-color: #f2f2f2;}

        #values tr:hover {background-color: #ddd;}

        #values th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        }
</style>
</head>

<body>
        <script>
          setTimeout(function() { window.location=window.location;}, 3000); 
        </script>
	<p>Voltage, current and power results: </p>
	<?php
	   $url = 'data_arduino.json';
	   $data = file_get_contents($url);
	   $value = json_decode($data);
        ?>
	<table id="values">
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
