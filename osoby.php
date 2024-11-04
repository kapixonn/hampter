<?php
   namespace osoby;

   use mysqli;
    class osoby{
   static function main( mysqli $db){
    $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM osoby
    LEFT JOIN kraj ON osoby.id_kraj = kraj.id_kraj;";
    $result = $db->query($sql);
    $list = Array();
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return$list;
    }

       static function search1(mysqli $db){
        $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM `osoby`
        LEFT JOIN `kraj` ON osoby.id_kraj = kraj.id_kraj
        WHERE user_name = ? OR ranking BETWEEN ? AND ?;";
        $result = $db->query($sql);
        $list = Array();
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        return$list;
        }

        static function search2(mysqli $db) {
            $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM `osoby` 
            LEFT JOIN `kraj` ON osoby.id_kraj = kraj.id_kraj
            WHERE ranking = ?;";
            $result = $db->query($sql);
            $list = Array();
            while($row = $result->fetch_assoc()){
                $list[] = $row;
            }
            return$list;
            }
            // static function new(string $user_name, int $id_kraj, int $ranking, mysqli $db){
            //     //kwerenda
            //     $sql = "INSERT INTO osoby (user_name, id_kraj, ranking) VALUES (?, ?, ?);";
            //     //przygotuj zapytanie
            //     $query = $db->prepare($sql);
            //     //podstaw zmienne
            //     $query->bind_param('sii', $user_name, $id_kraj, $ranking);
            //     //wykonaj zapytanie
            //     $query->execute();  }
        static function top10(mysqli $db )
        {
            $sql = "SELECT osoby.ranking, osoby.user_name, kraj.nazwa_kraju FROM osoby JOIN kraj ON osoby.id_kraj = kraj.id_kraj ORDER BY ranking ASC LIMIT 10;";
            $result = $db->query($sql);
            $list = Array();
            while($row = $result->fetch_assoc()){
                $list[] = $row;
                
            }
            return $list;
        }
    }      
?>
