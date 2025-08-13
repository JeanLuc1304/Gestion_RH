<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de conge</title>
    <link rel="stylesheet" href="css\conge.css">
</head>
<body>
<div class="menu">
    <div>
        <div >
            <div>
                <h2>Demande de conge</h2>
            </div>
            <div>
                <form id="leaveRequestForm" method="POST">
                    <div>
                        <label for="type">Type de conge</label>
                        &nbsp; &nbsp;&nbsp;<select id="type" name="type" required>
                            <option value="">Selectionnez un type</option>
                            <option value="paid">Conge paye</option>
                            <option value="sick">Conge maladie</option>
                            <option value="unpaid">Conge sans solde</option>
                            <option value="maternity">Conge maternite</option>
                        </select><br><br>
                    </div>
                    
                    <div>
                        <div>
                            <label for="start_date">Date de debut</label>
                            &nbsp; &nbsp; &nbsp; <input type="date" id="start_date" name="start_date" required><br><br>
                        </div>
                        <div>
                            <label for="end_date">Date de fin</label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="date" id="end_date" name="end_date" required><br><br>
                        </div>
                    </div>
                    
                    <div>
                        <label for="notes">Notes supplementaires</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;<textarea id="notes" name="notes" rows="3"></textarea><br><br>
                    </div>
                    
                    <div>
                        <button type="submit">Soumettre la demande</button><br>
                        <button><a href="accueil.php">Annuler</a></button><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>




