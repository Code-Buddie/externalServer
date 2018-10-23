
<?php // Example 26-9: members.php
require_once './header.php';

if (!$loggedin) {
    die(header('Location: index.php'));
}

echo "<div class='container my-3'>";

/**
 * Function to query information based on
 * a parameter: in this case, location.
 *
 */

try {

    $sql = "SELECT *
                        FROM returningUsers ORDER BY visits DESC LIMIT 25";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php
if ($result && $statement->rowCount() > 0) {?>
        <h2>Returning Visitors</h2>

        <table class="table">
        <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>No of Visits</th>
                    <th>Visit times</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) {?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["NAME"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["visits"]; ?> </td>
                <td><?php 
                        $visits = explode(',', $row["visitTimes"]);
                        foreach($visits as $visit){
                            echo '<p>'.$visit.'</p>';  
                        } 
                    ?>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <?php } else {?>
        <blockquote>No results found.</blockquote>
    <?php }
?>