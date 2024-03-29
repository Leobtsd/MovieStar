<?php 

include_once("models/user.php");

class UserDAO implements UserDAOInterface {

    private $conection;
    private $url;

    public function __construct(PDO $conection, $url) {
        $this->conection = $conection;
        $this->url = $url;
    }
    
        
    

    public function buildUser($data) {

        $user = new User();

        $user->id = $data['id'];
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->image = $data['image'];
        $user->bio = $data['bio'];
        $user->token = $data['token'];

        return $user;

    }
    public function create(User $user, $authUser = false) {

    }
    public function update (User $user) {

    }
    public function verifyToken($protected = false) {

    }
    public function setTokenToSession($token, $redirect = true) {

    }
    public function authenticateUser($email, $password) {

    }
    public function findByEmail($email) {

    }
    public function fundById($id) {

    }
    public function findByToken($token) {

    }
    public function changePassword(User $user) {

    }
}


?>