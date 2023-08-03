<?php

require "Database.php";

class User extends Database {

    public function createUser($first_name, $last_name, $username, $password){
        //encrypt password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(first_name, last_name, username, `password`) 
                values('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header("location: ../views"); //redirect (go to) to views/index.php
            exit;
        }else{
            die("Error creating user: ".$this->conn->error);
        }
    }

    public function login($username, $password){

        $sql = "SELECT * FROM users WHERE username = '$username'";

        //execute query and get data from database
        $result = $this->conn->query($sql);

        //check if there are users found
        if($result->num_rows == 1){
            $user_row = $result->fetch_assoc();
            //check if password is correct
            if(password_verify($password, $user_row['password'])){
                //login (create session variables)
                session_start();

                $_SESSION['user_id'] = $user_row['id'];
                $_SESSION['username'] = $user_row['username'];

                //go to dashboard page
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Password incorrect.");
            }
        }else{
            die("Cannot find user");
        }
    }

    public function getUsers(){

        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error getting users: ".$this->conn->error);
        }
    }

    public function getUser($id){

        $sql = "SELECT * FROM users WHERE id=$id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc(); //return one row of the result
        }else{
            die("Error retrieving user: ".$this->conn->error);
        }
    }

    public function updateUser($id, $first_name, $last_name, $username){

        $sql = "UPDATE users SET first_name = '$first_name', 
                                last_name = '$last_name', 
                                username = '$username'
                            WHERE id = $id";
        
        if($this->conn->query($sql)){
            //go back to dashboard
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error updating user: ".$this->conn->error);
        }
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id= $id";

        if($this->conn->query($sql)){
            //go to dashoard
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error deleting user: ".$this->conn->error);
        }
    }

    public function updatePhoto($id, $file_name, $tmp_name){

        $sql = "UPDATE users SET photo = '$file_name' WHERE id = $id";

        if($this->conn->query($sql)){
            $destination = "../images/$file_name";

            if(move_uploaded_file($tmp_name, $destination)){ //move from temporary location to images folder
                 
                //go to profile page
                header("location: ../views/profile.php");
                exit;
            }else{
                die("Cannot move file");
            }

        }else {
            die("Error updating photo: ".$this->conn->error);
        }

    }
}