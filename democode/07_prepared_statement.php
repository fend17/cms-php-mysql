<?php
$pdo = new PDO(
  "mysql:host=localhost:8889;dbname=users;charset=utf8",
  "root",
  "root"
);

$username_search = "bananpojke";

$my_username = "bananpojke";
$my_password = "hgghsdhasd";

// ALWAYS PREPARE
$statement = $pdo->prepare(
    "INSERT INTO users 
      (username, password) 
      VALUES (:username, :password)"
);
// ALWAYS EXECUTE, execute takes an array as argument
$statement->execute([
  ":username" => $my_username,
  ":password" => $my_password
]);


// //! ALMOST ALWAYS FETCH or FETCHALL
// $all_users = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($all_users as $user) {
//     echo $user["username"];
// }

$statement2 = $pdo->prepare("SELECT * 
  FROM users WHERE username = :username");
$statement2->execute([
  ":username" => $username_search
]);
$data = $statement2->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);