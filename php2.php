</php

  $username = $_POST['username'];
  $password = $_POST['password'];

  print_r(hash_algos));

  $algos = hash_algos();
  $count = count($algos);
  $id = rand(0, $count - 1);
  $algo = $algos[$id];

  echo "User name: $username<br>\n";
  echo "Password: $username<br>\n";

  $password = hash($algo, $password);

  echo "Hashed: $password<br>\n";


?>
