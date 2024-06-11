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

    public function findOne(int $id): array {
            $result = $this->repository->findOne($id);
            $deserializedIntern = [
                'id' => $result->getId(),
                'lastname' => $result->getLastname(),
                'firstname' => $result->getFirstname(),
                'gender' => $result->getGender()
            ];
            return $deserializedIntern;

        
    }

    public function add(Intern $intern): array {
        return [new Intern()];
    }
}