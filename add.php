<?php
$get_json_file = 'word.json';
$write_list = array();
    $json_string = file_get_contents($get_json_file);
    $list = json_decode($json_string, true);
    $list = is_array($list)?$list:array();
    $write_list['word'] = $_GET['word'];
    $write_list['chineseword'] = $_GET['chineseword'];
    $write_list['example'] = $_GET['example'];https://github.com/sunchonghsien/test/blob/main/add.php
    $write_list['desc'] = $_GET['desc'];
    $write_list['type'] = $_GET['type'];
    $write_list['audio'] = $_GET['audio'];
    $list['data'][] = $write_list;
    $resp = file_put_contents($get_json_file, json_encode($list,JSON_UNESCAPED_UNICODE));
    print_r($resp);
