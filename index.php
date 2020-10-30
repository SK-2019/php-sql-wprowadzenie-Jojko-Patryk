<?php
    $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
    $result = $conn->query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Id</th>"); //Nazwy Kolumn
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ // wyciąganie danych VVVVVVV
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); // wyciąga odpowiednie dane z bazy

                echo("</tr>");
            }

            $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
            $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=3)');
                echo("<table border=1>");
                echo("<th>Id</th>"); //Nazwy Kolumn
                echo("<th>Imie</th>");
                echo("<th>Dzial</th>");
                echo("<th>Zarobki</th>");
                    while($row=$result->fetch_assoc()){ // wyciąganie danych VVVVVVV
                        echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); // wyciąga odpowiednie dane z bazy
        
                        echo("</tr>");

                        $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
                        $result = $conn->query('SELECT * FROM pracownicy where imie not like "%a"');
                            echo("<table border=1>");
                            echo("<th>Id</th>"); //Nazwy Kolumn
                            echo("<th>Imie</th>");
                            echo("<th>Dzial</th>");
                            echo("<th>Zarobki</th>");
                                while($row=$result->fetch_assoc()){ // wyciąganie danych VVVVVVV
                                    echo("<tr>");
                                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); // wyciąga odpowiednie dane z bazy
                    
                                    echo("</tr>");

                                    $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
    $result = $conn->query('SELECT * FROM pracownicy where dzial-2');
        echo("<table border=1>");
        echo("<th>Id</th>"); //Nazwy Kolumn
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ // wyciąganie danych VVVVVVV
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); // wyciąga odpowiednie dane z bazy

                echo("</tr>");
                ?>
