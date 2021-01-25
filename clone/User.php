<?php

class User {
    
    private $con, $username, $sqlData;

    public function User($con, $username) {
        $this->con = $con;

        $query = $this->con->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(":id", $username);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getUsername() {
        return $this->sqlData['username'];
    }

    public function getName() {
        return $this->sqlData['firstName'] . " " . $this->sqlData['lastName'];
    }

    public function getFirstName() {
        return $this->sqlData['firstName'];
    }

    public function getLastName() {
        return $this->sqlData['lastName'];
    }

    public function getEmail() {
        return $this->sqlData['email'];
    }

    public function getProfilePic() {
        return $this->sqlData['profilePic'];
    }

    public function getSignUpDate() {
        return $this->sqlData['signUpDate'];
    }
}

?>