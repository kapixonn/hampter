<?php
   namespace osoby;

   use mysqli;
    class osoby{
   static function main( mysqli $db){
    //kwerenda
    $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM osoby
    LEFT JOIN kraj ON osoby.id_kraj = kraj.id_kraj;";
    //przygotuj zapytanie
    $query = $db->prepare($sql);
    $query->execute();  }

       static function search1(string $user_name, int $min, int $max, mysqli $db){
        //kwerenda
        $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM `osoby`
        LEFT JOIN `kraj` ON osoby.id_kraj = kraj.id_kraj
        WHERE user_name = ? OR ranking BETWEEN ? AND ?;";
        //przygotuj zapytanie
        $query = $db->prepare($sql);
        //podstaw zmienne
        $query->bind_param('sii', $user_name, $min, $max);
        //wykonaj zapytanie
        $query->execute();
        $result = $query->get_result();}

        static function search2(int $ranking, mysqli $db) {
            //kwerenda
            $sql = "SELECT user_name, kraj.nazwa_kraju, ranking FROM `osoby` 
            LEFT JOIN `kraj` ON osoby.id_kraj = kraj.id_kraj
            WHERE ranking = ?;";
            //przygotuj zapytanie
            $query = $db->prepare($sql);
            //podstaw zmienne
            $query->bind_param('i', $ranking);
            //wykonaj zapytanie
            $query->execute(); 
            $result = $query->get_result();}

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
