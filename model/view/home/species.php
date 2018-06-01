<!DOCTYPE html>
<html>
	<body>
		<header>
			<nav>
				<a id="button1" class="button button-primary" href="./home"Hhome</a>
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
				foreach ($Data as $species) {
					echo "<tr><td>".$species['species_id']."</td><td>".$species['species_description']."</td><td><a class='button button-primary' href='/hospital/species/edit_species/".$species[species_id]."'>edit</a></td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>