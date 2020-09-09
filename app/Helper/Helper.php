<?php

function fileUpload($file, $type)
{
    $extension = $file->getClientOriginalExtension();
    $fileOriginalName = $file->getClientOriginalName();
    $name = substr($fileOriginalName, 0, 4);
    $r = 0;
    $l = strlen($name);
    for ($i = 0; $i < $l; $i++) {
        $r += pow(26, $i) * (ord($name[$l - $i - 1]) - 0x40);
    } 
	$finalName = $r - 1 . date('Ymdhis') . '.' . $extension;
    if ($type == 'S') {
        $storeName = '/storage/slider';
    } elseif ($type == 'CP') {
        $storeName = '/storage/coverpic';
    } elseif ($type == 'E') {
        $storeName = '/storage/example';
    }
    $path = $_SERVER['DOCUMENT_ROOT'] . $storeName;
    $file->move($path, $finalName);
    return $storeName . '/' . $finalName;
}
