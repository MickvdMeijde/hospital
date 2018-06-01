<!DOCTYPE html>
<html>
	<body>
		<header>
			<nav>
				<a id="button1" class="button button-primary" href="./home">Home</a>
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
				foreach ($client as $client) {
					echo "<tr><td>".$client['client_id']."</td><td>".$client['client_firstname']." ".$client['client_lastname']."</td><td><a class='button button-primary' href='/hospital/clients/edit_clients/".$species[species_id]."'>edit</a></td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>