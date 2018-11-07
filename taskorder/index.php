<?php include 'include/connect.php' ?>
<?php include 'include/header.html' ?>

<?php $responses = $pdo->query('SELECT * FROM task'); ?>

<div id="bloc">
    <a href="add.php" id="addButton">Ajouter une tâche</a>

    <?php foreach($responses as $response) : ?>
        <ul class="item-listing">
            <li>
                <span>Titre :</span> <?php echo htmlspecialchars($response['title']); ?><br/>
                <span>Descriptif : </span><br/>
                <?php echo htmlspecialchars($response['details']); ?><br/>
                <a href="include/deleteTask.php?idTask=<?php echo htmlspecialchars($response['id']); ?>" id="deleteButton">Supprimer la tâche</a>
            </li>
        </ul>
    <?php endforeach ?>
</div>


<?php include 'include/footer.html' ?>
