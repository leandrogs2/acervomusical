<?php

require_once ("music.php");

class musicController {

    private $cadastre;

    public function __construct() {
        $this->cadastre = new music();

        $action = $_POST['action'];
        if ($action == "insert") {
            $this->insert();
        }
    }

    private function insert() {
        $this->cadastre->setAlb_id($_POST['alb_id']);
        $this->cadastre->setArtist($_POST['artist']);
        $this->cadastre->setTitle($_POST['title']);
        $this->cadastre->setTrack($_POST['track']);

        $result = $this->cadastre->insert();

        if ($result >= 1) {
            echo "<script>alert('Registro incluído com sucesso!');
                document.location='../view/cad_cadastro.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');
                history.back()</script>";
        }
    }
}

new musicController();

?>
