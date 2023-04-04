<html>
<body>
Bonjour, <?php echo htmlspecialchars($_POST['name']); ?>.<br>
Vous avez <?php echo (int)$_POST['age']; ?> ans.<br>
Votre numéro est   <?php echo (int)$_POST['num']; ?>.<br>
Votre adresse mail est <?php echo (int)$_POST['email']; ?>.<br>
Comme Classe d'Ulm vous avez choisis <?php echo (int)$_POST['Ulm']; ?>. <br>
Et pour finir comme formulaire vous prenez <?php echo (int)$_POST['form']; ?>.
</body>
</html>