<?php

class Login {

    private $con = null;

    public function __construct(PDO $con = null) {
        $this->con = $con;
    }

    function validate(int $chave, string $senha): void {
        $query = "SELECT *
                FROM star_user
                WHERE chave = $chave AND senha = '$senha';";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $result = $stmt->rowCount();
        //Pode ser feita com session
        if($result>0) {
            header("location: ../ex22.php?r=$chave");
        } else {
            header("location: ../ex22.php");
        }
    }
}

?>