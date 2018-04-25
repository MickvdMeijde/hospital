<!DOCTYPE html>
<html>
	<body>
		<header>
			<nav>
				<a class="button button-primary" href="http://localhost/hospital/">home</a>
			</nav>
		</header>
		<main>
			<table>
				<tr>
					<th>
						ID
					</th>
					<th>
						Name
					</th>
				</tr>
				<?php
				foreach ($Data as $patient) {
					echo "<tr><td>".$patient['client_id']."</td><td>".$patient['client_firstname']." ".$patient['client_lastname']."</td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>