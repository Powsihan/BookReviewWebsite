<?php

namespace classes;

require_once 'DBconnector.php';

use classes\DBconnector;
use PDOException;

class Register {

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $conformPassword;

    public function __construct($firstName, $lastName, $email, $password, $conformPassword) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->conformPassword = $conformPassword;
    }

    public function register() {
                     $dbcon = new DBconnector();
                     $con = $dbcon->getConnection();

        try {

            

            $query = "INSERT INTO reader(firstName, lastName, email, password, conformPassword) VALUES(?, ?, ?, ?, ?);";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->firstName);
            $pstmt->bindValue(2, $this->lastName);
            $pstmt->bindValue(3, $this->email);
            $pstmt->bindValue(4, $this->password);
            $pstmt->bindValue(5, $this->conformPassword);

            $a = $pstmt->execute();

            if ($a > 0) {
                echo 'Success';
            } else {
                echo 'Failure';
            }
        } catch (PDOException $e) {
            die("Connection failed: ") . $e->getMessage();
        }
    }

}
