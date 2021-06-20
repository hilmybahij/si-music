<?php

namespace App;

class Login extends Koneksi {

    public function __construct(Type $var = null)
    {
        parent::__construct();
    }

    public function proses()
    {
        $i_username = $_POST['i_username'];
        $i_password = $_POST['i_password'];

        $sql = "SELECT * FROM login WHERE nama=:nama AND password=:password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_name", $i_username);
        $stmt->bindParam(":user_password", $i_password);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!empty($row)){
            $_SESSION ['user_name'] = $row['user_name'];
        } else {
            $_SESSION ['error'] = "Login Error";
        }
}
}
