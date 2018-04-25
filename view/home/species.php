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
						Species
					</th>
				</tr>
				<?php
				foreach ($Data as $patient) {
					echo "<tr><td>".$patient['species_id']."</td><td>".$patient['species_description']."</td><td><a class='button button-primary' href='http://localhost/hospital/home/edit_species/".$patient[species_id]."'>edit</a></td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>