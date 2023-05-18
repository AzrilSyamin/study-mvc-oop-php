<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Edit User</h3>
  <a href="/">Back</a>
  <form action="" method="post">
    <div class="input-group">
      <label>
        User name
        <input type="text" name="user_name" value="<?= $data["user_name"]; ?>">
      </label>
    </div>
    <div class="input-group">
      <label>
        Phone Number
        <input type="text" name="phone_number" value="<?= $data["user_number"]; ?>">
      </label>
    </div>
    <div class="input-group">
      <label>
        Age
        <input type="text" name="user_age" value="<?= $data["user_age"]; ?>">
      </label>
    </div>
    <div class="input-group">
      <button type="submit" name="edit">Edit</button>
    </div>
  </form>

</body>

</html>