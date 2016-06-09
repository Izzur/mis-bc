<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Query Test</title>

	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/welcome.css">
</head>
<body>

	<div id="container">
		<h1>Query Test</h1>

		<div id="body">
			<table>
				<tr><th>AFKO</th></tr>
				<tr>
					<th>Order</th>
					<th>Scheduled start</th>
					<th>Scheduled finish</th>
					<th>Valid from</th>
					<th>ID</th>
				</tr>
				<?php
				foreach ($afko as $key => $value) {
					echo "<tr>";
					print_r("<td>".$value->AUFNR."</td>");
					print_r("<td>".$value->GSTRS."</td>");
					print_r("<td>".$value->GLTRS."</td>");
					print_r("<td>".$value->PDATV."</td>");
					print_r("<td>".$value->BEDID."</td>");
					echo "</tr>";
				}
				?>
			</table>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>
</html>