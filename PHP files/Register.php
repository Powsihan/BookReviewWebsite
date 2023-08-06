<?php

namespace classes;

use classes\DbConnector;
use PDOException;

require_once 'DbConnector.php';

class Register {

    private $fname;
    private $lname;
    private $email;
    private $password;
    private $cpassword;

    public function __construct($fname, $lname, $email, $password, $cpassword) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->username = $email;
        $this->password = $password;
        $this->email = $cpassword;
    }

    public function register() {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "SERT INTO User(Fname, Lname,Email,Password,Conform_password)VALUES(?,?,?,?,?)";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->fname);
            $pstmt->bindValue(2, $this->lname);
            $pstmt->bindValue(3, $this->email);
            $pstmt->bindValue(4, $this->password);
            $pstmt->bindValue(5, $this->cpassword);

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
