<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_a22100076');
}

function query($query)
{
  $connect = koneksi();
  $result = mysqli_query($connect, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };

  return $rows;
}
