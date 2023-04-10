<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
// $row=User::where('$id','=',$id)->first();
$row = User::find($id);
$row->status = 0;
$row->updated_at = date('Y-m-d H:i:s');   
$row->updated_by = 1;
$row->save();
MyClass::set_flash('message', ['type' => 'success', 'msg' => 'Đưa mẫu tin vào thùng rác thành công']);
header('location:index.php?option=user&cat=trash');
