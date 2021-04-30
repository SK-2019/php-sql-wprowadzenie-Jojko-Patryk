$sql = "SELECT * FROM tytul";
echo("<h3>Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id_tytul</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id_tytul']."</td><td>".$row['tytul']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul Order by id asc';
echo("<h3>Autorzy i Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>autor_id</th>");
echo("<th>autor</th>");
echo("<th>tytul_id</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['autor_id']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul_id']."</td><td>".$row['tytul']."</td>");
    echo("</tr>");
}
echo("</table>");