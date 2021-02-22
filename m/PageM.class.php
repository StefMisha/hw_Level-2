<?php

    class PageM { 

        public function getGoods() {
            $query = "SELECT * FROM goods";
            $res = PdoM::Instance() -> Select($query);
            return $res;
        }

        public function getGood() {
            $idGood = $_GET['id'];
            $query = "SELECT * FROM goods WHERE id='$idGood'";
            $res = PdoM::Instance() -> Select($query);
            foreach ($res as $key => $val) {
                return $val;
            }            
        }
        public function getComs() {
            $query = "SELECT * FROM comment";
            $res = PdoM::Instance() -> Select($query);
            return $res;

        }
    }