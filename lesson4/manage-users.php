<style>
    .users button {
        margin-top: 1%;
    }

    table {
        width: 100%;
    }

    tr,
    th,
    td {
        border: 1px solid black;
    }
</style>
<div class="users">
    <button>Add User</button>
    <?php
    include 'connection.php';

    $sql = "SELECT * FROM users";
    $result = $pdo->query($sql);
    ?>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {  // Correct method
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row['username']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>