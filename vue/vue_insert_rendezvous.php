<style>
    h3 {
        text-align: center;
    }

    form {
        width: 450px;
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    form input[type="submit"],
    form input[type="reset"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #1599E3;
        color: #fff;
    }

    form input[type="submit"]:hover,
    form input[type="reset"]:hover {
        background-color: #2876E2;
    }
</style>

<br><br><br>

<h3> Gestion des rendez-vous </h3>
<form method="post">
	<label for="daterdv">Date Rendez-vous</label>
	<input type="date" name="daterdv" value="<?= ($unRendezvous != null) ? $unRendezvous['daterdv'] : '' ?>"> </br>
    
	<label for="heure">Heure Rendez-vous</label>
	<input type="time" name="heure" value="<?= ($unRendezvous != null) ? $unRendezvous['heure'] : '' ?>"> </br>

    <label for="etat">Etat Rendez-vous</label>
    <select name="etat" value="<?= ($unRendezvous != null) ? $unRendezvous['etat'] : '' ?>">
        <option value="attente">En Attente</option>
        <option value="confirme">Confirmé</option>
        <option value="annule">Annulé</option>
    </select><br>

	<label for="idpatient">Le Patient</label>
	<select name="idpatient" value="<?= ($unRendezvous != null) ? $unRendezvous['idpatient'] : '' ?>">
		<?php
		    foreach ($lesPatients as $unPatient) {
		    	echo "<option value='" . $unPatient['idpatient'] . "'>";
		    	echo $unPatient['nom'] . " " . $unPatient['prenom'];
		    	echo "</option>";
		    }
		?>
	</select><br />

	<label for="idmedecin">Le Medecin</label>
	<select name="idmedecin" value="<?= ($unRendezvous != null) ? $unRendezvous['idmedecin'] : '' ?>">
		<?php
		    foreach ($lesMedecins as $unMedecin) {
		    	echo "<option value='" . $unMedecin['idmedecin'] . "'>";
		    	echo $unMedecin['nom'] . " " . $unMedecin['prenom'];
		    	echo "</option>";
		    }
		?>
	</select>
	<br />
	<br />


	<input type="reset" name="Annuler" value="Annuler">
	<input type="submit" <?= ($unRendezvous != null) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>>

	<?= ($unRendezvous != null) ? '<input type="hidden" name="idrendezvous" value="' . $unRendezvous['idrendezvous'] . '">' : '' ?>
</form>