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
					<th>
						Species
					</th>
					<th>
						Patient Status
					</th>
					<th>
						Client Name
					</th>
				</tr>
				<?php
				foreach ($patients as $patient) {
					echo "<tr><td>".$patient['ID']."</td><td>".$patient['Name']."</td><td>".$patient['Species']."</td><td>".$patient['PatientStatus']."</td><td>".$patient['FirstName'].$patient['LastName']."</td><td><a class='button button-primary' href='/hospital/patients/edit_patients/".$species[species_id]."'>edit</a></td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>