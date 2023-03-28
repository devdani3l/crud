<?php
        $pesquisa = $_POST['busca'] ?? '';

        include "connection.php";

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    ?>