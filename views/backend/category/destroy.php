<?php

use App\Models\Category;

$id=$_REQUEST['id'];
$row=Category::find($id);
$row->delete();
header('location:index.php?option=category&cat=trash');