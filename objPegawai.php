<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('011','Mohammed Salah','Assisten Manager','Islam','Menikah');
$thanos = new Pegawai('073','Thanos Si Botak Ungu','Staff','hindu','Belum');
$erik = new Pegawai('063','Erik si Kepala Magnet','Kabag','Islam','Menikah');
$tony = new Pegawai('070','Tony si Kaleng Besi','Manager','Islam','Menikah');
//dst ...
//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$thanos->mencetak();
$erik->mencetak();
$tony->mencetak();

echo 'Jumlah Pegawai: '.Pegawai::$jml;