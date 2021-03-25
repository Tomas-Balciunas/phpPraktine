<?php 

namespace PraktineApp;
use PDO;
class Tasks {
    protected $pdo;
    private $pavadinimas;
    private $kodas;
    private $pvmkodas;
    private $adresas;
    private $tel;
    private $elpastas;
    private $veikla;
    private $vadovas;
    private $delkodas;

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

    public function sukurti($task) {
        $this->pavadinimas = $task['pavadinimas'];
        $this->kodas = $task['kodas'];
        $this->pvmkodas = $task['pvmkodas'];
        $this->adresas = $task['adresas'];
        $this->tel = $task['tel'];
        $this->elpastas = $task['elpastas'];
        $this->veikla = $task['veikla'];
        $this->vadovas = $task['vadovas'];
        $this->prideti();
    }

    public function prideti() {
        try {
            $query = "INSERT INTO imones.imones (pavadinimas, kodas, pvm_kodas, adresas, telefonas, el_pastas, veikla, vadovas)
            VALUES (:pavadinimas, :kodas, :pvmkodas, :adresas, :tel, :elpastas, :veikla, :vadovas)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':pavadinimas', $this->pavadinimas, PDO::PARAM_STR);
            $stmt->bindParam(':kodas', $this->kodas, PDO::PARAM_STR);
            $stmt->bindParam(':pvmkodas', $this->pvmkodas, PDO::PARAM_STR);
            $stmt->bindParam(':adresas', $this->adresas, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $this->tel, PDO::PARAM_STR);
            $stmt->bindParam(':elpastas', $this->elpastas, PDO::PARAM_STR);
            $stmt->bindParam(':veikla', $this->veikla, PDO::PARAM_STR);
            $stmt->bindParam(':vadovas', $this->vadovas, PDO::PARAM_STR);
            $stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function sukurtidel($task2) {
        $this->delkodas = $task2['delkodas'];
        $this->salinti();
    }

    public function salinti() {

        try {
        $query = "DELETE FROM imones.imones WHERE kodas = :delkodas";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':delkodas', $this->delkodas, PDO::PARAM_STR);
        $stmt->execute();
    } catch(PDOException $e) {
        echo $e->getMessage();
        }
    }

    
}