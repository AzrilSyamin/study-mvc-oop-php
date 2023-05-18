<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="?controller=add">Tambah</a>
  <table>
    <tr>
      <th>ID</th>
      <th>Nama User</th>
      <th>Phone Number</th>
      <th>Umur User</th>
      <th>Action</th>
    </tr>
    <?php foreach ($data["data"] as $user) : ?>
      <tr>
        <td><?= $user["user_id"]; ?></td>
        <td><?= $user["user_name"]; ?></td>
        <td><?= $user["user_number"]; ?></td>
        <td><?= $user["user_age"]; ?></td>
        <td>
          <a href="?controller=edit&id=<?= $user["user_id"]; ?>">Edit</a>
          <br>
          <a href="?controller=delete&id=<?= $user["user_id"]; ?>">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>