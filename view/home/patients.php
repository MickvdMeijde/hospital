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
				foreach ($Data as $patient) {
					echo "<tr><td>".$patient['ID']."</td><td>".$patient['Name']."</td><td>".$patient['Species']."</td><td>".$patient['PatientStatus']."</td><td>".$patient['FirstName'].$patient['LastName']."</td></tr>";
				}?>
			</table>
		</main>
	</body>
</html>