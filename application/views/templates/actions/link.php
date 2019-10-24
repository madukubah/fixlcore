<?php
$data_param = ((isset($param) && isset($data->$param)) ? $data->$param : "");
$get = ((isset($get)) ? $get : "");
?>
<a href="<?php echo $url . $data_param . $get; ?>" style="margin-top:0px !important;padding-top:4px !important;padding-bottom:5px !important;" style="margin-left: 5px;" class=" btn btn-sm btn-<?php echo $button_color ?>"><?php echo $name ?></a>