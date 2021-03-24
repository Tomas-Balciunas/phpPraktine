<?php 

namespace PraktineApp;
use PDO;
class Tasks {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function search() {
        $search_value=$_POST['search'];
            $sql = "SELECT * FROM imones.imones WHERE pavadinimas LIKE '%$search_value%' OR kodas LIKE '%$search_value%'";
            $q = $this->pdo->prepare($sql);
            $q->execute(array($search_value));
            $data = $q->fetchAll(PDO::FETCH_ASSOC);
            if ($data != null && $search_value != "") {
                echo "<div class='container-fluid d-flex justify-content-center'>";
                echo '<table>';
                    echo '<tr style="text-align:center">';
                    echo '<th>Įmonės pavadinimas</th>';
                    echo '<th>Kodas</th>';
                    echo '<th>PVM Kodas</th>';
                    echo '<th>Adresas</th>';
                    echo '<th>Tel.</th>';
                    echo '<th>El.paštas</th>';
                    echo '<th>Veikla</th>';
                    echo '<th>Vadovas</th>';
                    echo '</tr>';
                foreach($data as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['pavadinimas'] . '</td>';
                    echo '<td>'. $row['kodas'] . '</td>';
                    echo '<td>'. $row['pvm_kodas'] . '</td>';
                    echo '<td>'. $row['adresas'] . '</td>';
                    echo '<td>'. $row['telefonas'] . '</td>';
                    echo '<td>'. $row['el_pastas'] . '</td>';
                    echo '<td>'. $row['veikla'] . '</td>';
                    echo '<td>'. $row['vadovas'] . '</td>';
                    echo '</tr>';
                    }
                echo '</table>';
                echo '</div>';
                }else {
                        echo '<p style="text-align: center">'. "Rezultatų nerasta" .'</p>';
                    } 
    }

    public function fullList(){$statement = $this->pdo->prepare("SELECT * FROM imones.imones");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function info($id){

        try {
        $statement = $this->pdo->prepare("SELECT * FROM imones.imones WHERE `id` = :id");
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}