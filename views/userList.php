<table class="table table-striped">
    <thead>
        <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Username</th>
        <th>Password</th>
        <th>Create_at</th>
        <th>Update_at</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['role'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['created_at'] ?></td>
            <td><?php echo $row['updated_at'] ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>

</table>