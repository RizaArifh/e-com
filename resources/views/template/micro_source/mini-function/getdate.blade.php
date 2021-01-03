@php

function convertHari($tanggal){
$hari =hari($tanggal);
$tgl=date(' d-m-Y H:i:s', strtotime($tanggal));
$hasil=$hari.$tgl;
return $hasil;
}

function hari($day) {
$d=date('D',strtotime($day));
$hari = $d;

switch ($hari) {
case "Sun":
$hari = "Minggu";
break;
case "Mon":
$hari = "Senin";
break;
case "Tue":
$hari = "Selasa";
break;
case "Wed":
$hari = "Rabu";
break;
case "Thu":
$hari = "Kamis";
break;
case "Fri":
$hari = "Jum'at";
break;
case "Sat":
$hari = "Sabtu";
break;
}
return $hari;
}
@endphp
