<h1>Zanrovi</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Naziv</th>
    </tr>
    <?php foreach ($viewData['genres'] as $genre) {
        echo "<tr><td>{$genre->ID}</td><td>{$genre->naziv}</td></tr>";
    }
    ?>
</table>