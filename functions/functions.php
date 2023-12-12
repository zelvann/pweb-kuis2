<?php
function check($data) {
  global $conn;
  $demail = $data['email'];
  $dpass = $data['password'];
  $qry = "select * from users u where u.email = '$demail' and u.pass = '$dpass'";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
};

function insert($data) {
  global $conn;
  $dname = $data['nama'];
  $dpassword = $data['password'];
  $dumur = $data['umur'];
  $dgender = $data['gender'];
  $demail = $data['email'];
  $dsekolah = $data['sekolah'];
  $qry = "insert into users values('$dname','$dpassword',$dumur,'$dgender','$demail','$dsekolah')";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
}
?>