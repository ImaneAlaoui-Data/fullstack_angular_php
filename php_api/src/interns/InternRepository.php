<?php
require_once(__DIR__ . '/../db/DbConnect.php');
class InternRepository {
    private array $interns = [];
    private \PDO $connection;

    public function __construct() {
        $connection = new DbConnect();
        $connection->connect();
        $this->connection = $connection->getConnection();
    }

    public function findAll(): array {
        // 1) Sets the SQL query
        $sqlQuery = 'SELECT id, lastname, firstname, gender FROM intern;';
        $pdoStatement = $this->connection->query($sqlQuery);
        if ($pdoStatement !== false) {
            while($row = $pdoStatement->fetch(PDO::FETCH_OBJ)) {
                $intern = new Intern(); // Model
                $intern->setId($row->id);
                $intern->setLastname($row->lastname);
                $intern->setFirstname($row->firstname);
                $intern->setGender($row->gender);
                array_push($this->interns, $intern);
            }
        }
        return $this->interns;
    }

    /**
     * Find an Intern based on his ID
     * @return Intern
     * @throws Exception if not found
     */
    public function findOne(int $id): ?Intern {
        //1. Définir la requête pour récupérer 1 Intern
        // à partir de son id
        $sqlQuery = 'SELECT id, lastname, firstname, gender FROM intern WHERE id=' . $id;

        // 2. Exécuter la requête
        $pdoStatement = $this->connection->query($sqlQuery);

        // 3. Si la requête retourne 1 élément
        // créer l'instance de la classe Intern correspondante
        // et la retourner
        if ($pdoStatement !== false) {
            $row = $pdoStatement->fetch(PDO::FETCH_OBJ);
            $intern = new Intern(); // Model
            $intern->setId($row->id);
            $intern->setLastname($row->lastname);
            $intern->setFirstname($row->firstname);
            $intern->setGender($row->gender);

            return $intern;
        }
        // 3.1 Si la requête ne retourne aucune ligne
        // Lever une exception
        throw new \Exception('No intern were found with ' . $id . ' ID');
    }

    public function add(Intern $intern): Intern {
        return $intern;
    }

    private function loadIntern(): void {
        $intern = new Intern();
        $intern->setId(1);
        $intern->setLastname('Aubert');
        $intern->setFirstname('Jean-Luc');
        $intern->setGender(1);

        array_push($this->interns, $intern);

        $intern = new Intern();
        $intern->setId(2);
        $intern->setLastname('Lecomte');
        $intern->setFirstname('Valérie');
        $intern->setGender(0);

        array_push($this->interns, $intern);

        $intern = new Intern();
        $intern->setId(3);
        $intern->setLastname('Chenu');
        $intern->setFirstname('Guillaume');
        $intern->setGender(1);

        array_push($this->interns, $intern);
    }
}