<?php
class InternRepository {
    private array $interns = [];

    public function __construct() {
        $this->loadIntern();
    }

    public function findAll(): array {
        return $this->interns;
    }

    /**
     * Find an Intern based on his ID
     * @return Intern
     * @throws Exception if not found
     */
    public function findOne(int $id): ?Intern {
        $theIntern = null;
        foreach($this->interns as $intern) {
            if ($intern->getId() === $id) {
                $theIntern = $intern;
                break;
            }
        }

        if (!is_null($theIntern)) {
            return $theIntern;
        }

        throw new \Exception('Intern with id : ' . $id . ' was not found');
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
    }
}