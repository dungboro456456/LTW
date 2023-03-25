<?php

use App\Models\Category;

$id=$_REQUEST['id'];
// $row=Category::where('$id','=',$id)->first();
$row=Category::find($id);
$row->status = 0;
   $row->updated_at = date('Y-m-d H:i:s');   
   $row->updated_by = 1;
   $row->save();
header('location:index.php?option=category&cat=trash');