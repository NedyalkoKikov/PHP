<?php
while ($row = mysqli_fetch_array($searchRes)) {
    echo "<tbody>";
  //  echo "<tr style='background-color: ". $row['favorite_color']."'>";
    echo "<td class='table-dataID'>" . $row['ID'] . "</td>";
    echo "<td class='table-dataFirstName'>" . $row['first_name'] . "</td>";
    echo "<td class='table-dataLastName'>" . $row['last_name'] . "</td>";
    echo "<td class='tableDataFavColor'>" . $row['favorite_color'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
