<?php
/**
 * Intern model of intern people (POJO : Plain Old Java Object)
 * @author Aélion
 * @version 1.0.0
 *  - lastname, firstname, gender attributes
 */
class Intern {
    private int $id;
    private string $lastname;
    private string $firstname;
    /**
     * Intern gender => 0 female 1 male 2 Ungendered
     */
    private int $gender;

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): ?int {
        return $this->id;
    }
    
    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    public function getLastname(): ?string {
        return $this->lastname;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    public function getFirstname(): ?string {
        return $this->firstname;
    }

    public function setGender(int $gender): void {
        $this->gender = $gender;
    }

    public function getGender(): ?int {
        return $this->gender;
    }
}