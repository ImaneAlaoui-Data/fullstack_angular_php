<?php
require_once(__DIR__ . '/Intern.php');

interface InternService {
    public function findAll(): array;
    public function findOne(int $id): array;
    public function add(Intern $intern): array;
}