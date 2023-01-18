<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];



if ($nama){
    echo
        "nama : {$nama} <br>";
} else {
    echo "nama belum diisi <br>";}

if ($email){
    echo
        "email :  {$email}  <br>";
} else {
    echo "email belum diisi <br>";}

if ($pesan){
    echo 
    "pesan :  {$pesan}"; 
} else {
    echo "pesan belum diisi";}
