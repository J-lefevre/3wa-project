<?php include 'include/header.html' ?>

<h2>Ajout de tâches</h2>

<div id="bloc">
    <form method="post" action="include/addTask.php">
        <label for="title">Titre :</label><br/>
        <input type="text" name="title" id="title" /><br />

        <label for="details">Descriptif :</label><br/>
        <textarea name="details" id="details" row="10" cols="50"></textarea><br/>

        <input type="submit" value="Ajouter" />
    </form>
</div>

<?php include 'include/footer.html' ?>
