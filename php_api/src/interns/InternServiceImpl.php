<?php
require_once(__DIR__ . '/InternService.php');
require_once(__DIR__ . '/InternRepository.php');

class InternServiceImpl implements InternService {
    private InternRepository $repository;

    public function __construct() {
        $this->repository = new InternRepository();
    }

    public function findAll(): array {
        $results = $this->repository->findAll();
        $deserializedResults = [];
        foreach($results as $intern) {
            $deserializedIntern = [
                'id' => $intern->getId(),
                'lastname' => $intern->getLastname(),
                'firstname' => $intern->getFirstname(),
                'gender' => $intern->getGender()
            ];
            array_push($deserializedResults, $deserializedIntern);
        }
        return $deserializedResults;
    }

    public function findOne(int $id): Intern {
        try {
            return $this->repository->findOne($id);
        } catch (\Exception $e) {
            throw $e;
        }
        
    }

    public function add(Intern $intern): Intern {
        return new Intern();
    }
}