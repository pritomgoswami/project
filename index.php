
<?php
include "index.html";
 echo '<caption>Dust Values</caption>';
include 'database.php';

$pdo = Database::connect();
$sql = 'SELECT * FROM dust_values';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>'. $row['id'] . '</td>';
echo '<td>'.'<center>'. $row['Readings'] . '</td>';
echo '<td>'. '<center>'.$row['Time'] . '</td>';

echo '</tr>';
}

echo '</table>';

  echo  '</div>';
//   echo '</main>';
Database::disconnect();


?>

</main>

<!-- <div class="div-clear"></div>  -->

<footer>

<div class="fot">
    <p style="margin-top: 10px;">Copyright &copy; BUTEX </p>
</div>
</footer> 
</body>
</html> 



    





