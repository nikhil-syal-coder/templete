<?php 
include 'config.php';
?>
<?php 

echo "<h2>The Categories  table</h2> ";
echo "<table>";
echo "<tr><th><input class='check-all' type='checkbox' /></th><th>Category id</th>
<th>Category Name</th><th>Action</th></tr>";
$sql1="SELECT * from tags ";
$result=$conn->query($sql1);

if ($result->num_rows > 0) {
while ($row= $result->fetch_assoc()) {
    echo '<tr><td><input type="checkbox" /></td>';
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo'<td>
    <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
    <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
    <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
</td></tr>';
        
}
}
echo'</table>';