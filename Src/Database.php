<?php
class Database{
    public $conn;
    
    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=animalcaredatabase","root","");
        $this->conn=$pdo;
    }

    //registration method
    public function register($usertype,
        $username,
        $email,
        $name,
        $gender,
        $profession,
        $contractnumber,
        $location,
        $password)
    {

        try{
            $password=md5($password);
            $registration_query="INSERT INTO users (usertype,
                                                username,
                                                email,
                                                name,
                                                gender, 
                                                password,
                                                profession,
                                                contractnumber,
                                                location)
            VALUES (:usertype,
                    :username,
                    :email,
                    :name,
                    :gender, 
                    :password,
                    :profession,
                    :contractnumber,
                    :location)";
            $statement=$this->conn->prepare($registration_query);
            $statement->execute
            (
                array
                (
                    ":usertype"         =>  $usertype,
                    ":username"         =>  $username,
                    ":email"            =>  $email,
                    ":name"             =>  $name,
                    ":gender"           =>  $gender,
                    ":password"         =>  $password,
                    ":profession"       =>  $profession,
                    ":contractnumber"   =>  $contractnumber,
                    ":location"         =>  $location
                )
            );
            if ($statement) {
                session_start();
                $_SESSION['message'] = "Successfully Added";
                echo $_SESSION['message'];

                header('location:../userProfile.php');
            } else {
                $_SESSION['message'] = "Couldn't store , try again";
                echo $_SESSION['message'];
                header('location:../index.php');
            }
        }catch (PDOException $e) {
            $msg = $e->getMessage();
            if(isset($meg)){

                $_SESSION['message'] = $msg;
                $_SESSION['message'];
                header('Location:../index.php');
            }
        }
    }
    //Login method
    public function login($email,$password)
    {
            $login="SELECT * FROM users WHERE email=:email AND password=:password";
            $statement=$this->conn->prepare($login);
            $statement->execute
            (
                array
                (	':email' => $email,
                    ':password' => md5($password)
                )
            );
            $result = $statement->fetchAll();
            return count($result);

    }
    //Show all data  from users table from database
    public function readUserdata()
    {
        $Select="SELECT * FROM users";
        $statement=$this->conn->prepare($Select);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }

    public function ShowById($user_id )
    {
        $Select="SELECT * FROM users WHERE user_id=:user_id";
        $statement=$this->conn->prepare($Select);
        $statement->execute
        (
            array(':user_id' =>$user_id  )

        );
        $result = $statement->fetchAll();
        return $result;
    }

    //post insert method
    public function postinsert($uname,$pname,$Symptoms,$animal,$description)
    {
        $registration_query="INSERT INTO posts (uname, pname,Symptoms,animal,description)
			VALUES (:uname,:pname,:Symptoms,:animal,:description)";
        // 	var_dump($insert_query);
        // 	echo "<br>";

        $statement=$this->conn->prepare($registration_query);
        $statement->execute
        (
            array
            (
                ":uname"=>$uname,
                ":pname"=>$pname,
                ":Symptoms"=>$Symptoms,
                ":animal"=>$animal,
                ":description"=>$description,
            )
        );

        echo "You have Posted successfully!";
        header("Location: PostandCommentMedicare.php");
        exit();
    }

    //show posts
    public function readpostdata()
    {
        $Select="SELECT * FROM posts";
        $statement=$this->conn->prepare($Select);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }
    //post insert method
    public function commentInsert($post_id,$comment)
    {
        $registration_query="INSERT INTO comments (post_id,comment)VALUES (:post_id,:comment)";
        $statement=$this->conn->prepare($registration_query);
        $statement->execute
        (
            array
            (
                ":post_id"=>$post_id,
                ":comment"=>$comment
            )
        );

        echo "You have successfully! Added comment";
        header("Location: PostandCommentViewMedicare.php");
        exit();
    }
    //show posts and comments
    public function readcommentdata()
    {
        $Select="SELECT * FROM comments";
        $statement=$this->conn->prepare($Select);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }

    //show posts by id
    public function ShowPostById($post_id)
    {
        $Select="SELECT * FROM posts WHERE post_id=:post_id";
        $statement=$this->conn->prepare($Select);
        $statement->execute
        (
            array(':post_id' =>$post_id  )
        );
        $result = $statement->fetchAll();
        return $result;
    }

    //permanent delete for comments
    public function Delete($comments_id )
    {
        $delete="DELETE FROM comments WHERE comments_id=:comments_id";
        $statement=$this->conn->prepare($delete);
        $statement->execute
        (
            array(':comments_id' =>$comments_id  )

        );
        $result = $statement->fetchAll();
        return $result;
    }

}


?>