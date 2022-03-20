<?php 

    class User {

        public $id;
        public $name;
        public $email;
        public $addr;
        public $dob;
        public $phone;
        public $password;
        public $password_hash;
        public $role;
        public $user = [];
        public $users = [];
        public $conn;
        public $errors = [];

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function updateUser($name, $password, $re_password, $phone, $addr, $dob) {
            // CHECK NAME IS NOT EMTPY.
            if (strlen($name) == 0) {
                $this->errors['name'] = "Name can't be empty!";
            }

            if ($password != null) {
                if ($password != $re_password || strlen($password) < 5)
                $this->errors['password'] = "Passwords don't match or are too short (must >= 5 characters)!";
            }

            if (strlen($phone) < 10 || strlen($phone) > 11) {
                $this->errors['phone'] = 'Phone number must be included 10 or 11 numbers!';
            }

            if (empty($this->errors) && $password != null) {
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                // UPDATE USER INFORMATION
                $sql = "UPDATE user SET name = ?, password = ?, phone = ?, addr = ?, dob = ?
                        WHERE id = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sssssi", $name, $password_hash, $phone, $addr, $dob, $this->id);
                $stmt->execute();
                header("Location: profile.php?id=" . $this->id);
            } elseif (empty($this->errors)) {
                $sql = "UPDATE user SET name = ?, phone = ?, addr = ?, dob = ?
                        WHERE id = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("ssssi", $name, $phone, $addr, $dob, $this->id);
                $stmt->execute();
                $_SESSION['user_name'] = $name;
                header("Location: profile.php?id=" . $this->id);
            }


        }

        public function checkEmail($email) {
            $sql = "SELECT * FROM user WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $results = $stmt->getResult();
            if ($results->num_rows == 1) {
                return true;
            } else {
                return false;
            }

        }

        public function getUser() {
            $sql = "SELECT * FROM user WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $results = $stmt->get_result();
            if ($results->num_rows == 1) {
                $this->user = $results->fetch_assoc();
            }
        }

        public function checkLogin($email, $password) {
            $this->email = $email;
            $this->password = $password;
            #1) Check that user'existence in DB
            $this->checkUserExists();
            if (!empty($this->user)) {
                // If user exists - check password
                if (password_verify($this->password, $this->user['password'])) {
                    $this->loginUser();
                } else { 
                    $this->errors['login_password'] = "Password doesn't match!";
                }
            } else {
                $this->errors['login_email'] = "Email not found!";
            }
        }
         
        public function checkRegistration ($name, $email, $password, $re_password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->checkUserExists();
            // CHECK IF USERNAME IS ALREADY TAKEN
            if (!empty($this->user)) {
                $this->errors['create_email1'] = "Email is already taken!";
            }
            // CHECK EAMIL IS VALID.
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->errors['create_email2'] = "Invalid email!";
            }
            // CHECK PASSWORDS MATCH AND ARE A CERTAIN LENGTH
            if ($this->password != $re_password || strlen($this->password) < 5) {
                $this->errors['create_password'] = "Passwords don't match or are too short (must > 5 characters)!";
            }

            if (empty($this->errors)) {
                $this->createUser();
            }
        }

        public function createUser() {
            $this->password_hash = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, 3)" ;
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sss", $this->name, $this->email, $this->password_hash);
            $stmt->execute();
            if ($stmt->affected_rows == 1) {
                $this->id = $stmt->insert_id;
                $this->getUser();
                $this->loginUser();
            }
            $location = "Location: index.php?SignUp=success";
            header($location);
        }

        public function loginUser() {
            // CREATE LOGGED IN USE SESSION: ID, NAME, ROLE, LOGGEDIN
            $_SESSION['user_name'] = $this->user['name'];
            $_SESSION['user_id'] = $this->user['id'];
            // $_SESSION['user_role'] = $this->user['role'];
            $_SESSION['loggedin'] = true;
            $location = "Location: index.php?SignUp=success";
            header($location);
        }

        public function checkUserExists() {
            $sql = "SELECT * FROM user WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $this->user = $result->fetch_assoc();
            }
        }

        public function updateProfile() {
            $sql = "UPDATE user SET name = ?, addr = ?, dob = ?, phone = ?, information = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('sssssi', $this->name, $this->addr, $this->dob, $this->phone, $this->information, $this->id);
            $stmt->execute();
            
            $_SESSION['user_name'] = $this->name;
        }

        public function sendRequestRole($requiredRole) {
            $sql = "SELECT * FROM request_role WHERE userID = ? and checked = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $results = $stmt->get_result()->fetch_all();


            if (count($results) > 0) {
                echo 'Your request has existed!';                
            } else {
                $sql = "INSERT INTO request_role (userID, roleBefore, requiredRole) values (?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('iii', $this->id, $this->role, $requiredRole);
                $stmt->execute();
                echo 'Your request is sent';
            }
            
        }

    }

?>