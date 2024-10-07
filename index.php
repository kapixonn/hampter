<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <img src="logo.png" alt="Logo" width="100">
        <h1>Nazwa naszej strony i tym czym się zajmujemy</h1>
        <a href="#">Dodawanie swoich osiągnieć</a>
    </div>

  
    <div>
        <form method="GET">
            <h2>Wyszukiwarka po rankingu:</h2>
            <label for="rank">Ranking:</label>
            <input type="number" name="rank" id="rank">
            <button type="submit">Szukaj</button>
        </form>
    </div>

   
    <div>
        <form method="GET">
            <h2>Wyszukiwarka osób po imieniu i nazwisku:</h2>
            <label for="first_name">Imię:</label>
            <input type="text" name="first_name" id="first_name">
            <label for="last_name">Nazwisko:</label>
            <input type="text" name="last_name" id="last_name">
            <button type="submit">Szukaj</button>
        </form>
    </div>

    <div>
        <form method="GET">
            <h2>Wyszukiwarka po rankingu - przedział min do max:</h2>
            <label for="rank_min">Min:</label>
            <input type="number" name="rank_min" id="rank_min">
            <label for="rank_max">Max:</label>
            <input type="number" name="rank_max" id="rank_max">
            <button type="submit">Szukaj</button>
        </form>
    </div>

    
    <div>
        <h2>Wyniki z bazy danych:</h2>
        <table>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Rocznik</th>
                <th>Kraj pochodzenia</th>
                <th>Ranking</th>
            </tr>

            <?php
              
                $conn = new mysqli('localhost', 'root', '', 'hampter');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                
                if (isset($_GET['rank'])) {
                    
                    $rank = $_GET['rank'];
                    $sql = "SELECT * FROM osoby WHERE ranking = $rank";
                } elseif (isset($_GET['first_name']) && isset($_GET['last_name'])) {
                    
                    $first_name = $_GET['first_name'];
                    $last_name = $_GET['last_name'];
                    $sql = "SELECT * FROM osoby WHERE first_name = '$first_name' AND last_name = '$last_name'";
                } elseif (isset($_GET['rank_min']) && isset($_GET['rank_max'])) {
                    
                    $rank_min = $_GET['rank_min'];
                    $rank_max = $_GET['rank_max'];
                    $sql = "SELECT * FROM osoby WHERE ranking BETWEEN $rank_min AND $rank_max";
                } else {
                    
                    $sql = "SELECT * FROM osoby";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['year'] . "</td>";
                        echo "<td>" . $row['nazwa_kraju'] . "</td>";
                        echo "<td>" . $row['ranking'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Brak wyników</td></tr>";
                }

                $conn->close();
            ?>

        </table>
    </div>
nic
</body>
</html>
