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

        echo("</table>");
        $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  
    $result = $conn->query('SELECT * FROM pracownicy where imie like "%a"'); // wyświetla tylko kobiety
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
        $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  
    $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=3)'); // wyświetla tylko pracowników z działu pierwszego i trzeciego
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        $conn = new mysqli("mysql-phanteon.alwaysdata.net","phanteon","hasło_testowe","phanteon_test_base");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
    $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=2) and imie like %a');
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
    $result = $conn->query('SELECT * FROM pracownicy where zarobki>20');
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