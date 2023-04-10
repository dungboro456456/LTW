<?php

use App\Models\User;
use App\Libraries\MyClass;

$id=$_REQUEST['id'];
$row=User::find($id);
$row->delete();
MyClass::set_flash('message',['type'=>'success','msg'=>'Xóa dữ liệu thành công']);

header('location:index.php?option=user&cat=trash');