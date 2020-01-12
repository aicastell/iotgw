<?php
    function read_varname($varname)
    {
        $LINEAS=parse_ini_file("/etc/iotgw.ini");
        return $LINEAS[$varname];
    }

    function write_ini_file($array, $file)
    {
        $str="";
        foreach($array as $key => $val)
        {
            $str .= $key."=".$val."\n";
        }

        if ($fd = fopen($file, 'w'))
        {
            fwrite($fd, $str);
            fclose($fd);
        }
    }
?>

