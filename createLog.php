<?php

    function createLog($data, $filename, $status, $message) {        
        $namaFile = 'logs/'.$filename."_".date("Y-m").".txt"; // nama file
        $dataFile = date("Y-m-d H:i:s")." >> ".$status.", ".$message." >> ".implode(", ",$data); // format response
        $myfile = file_put_contents($namaFile, $dataFile."\n", 8 | 2); // simpan hasil response kedalam file
    }
?>