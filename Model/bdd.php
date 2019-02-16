<?php

    class bdd
    {
        public function __construct($db_name = "epitech_tp", $db_host = "localhost", $db_user = "root", $db_pass = "root")
        {
            $this->db_name = $db_name;
            $this->db_host = $db_host;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
        }

        public function set_pdo()
        {
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
                echo "success";
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }
        }
    }

    
?>