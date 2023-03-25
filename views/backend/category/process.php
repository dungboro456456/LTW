<?php

use App\Models\Category;

if (isset($_POST['THEM']))
{
    $row=new Category;
    $row->name=$_POST['name'];
    $row->metadesc=$_POST['metadesc'];
    $row->metakey=$_POST['metakey'];
    $row->parent_id=$_POST['parent_id'];
    // $row->sort_order=$_POST['sort_order'];
    $row->status=$_POST['status'];
    // $row->slug=$_POST['slug'];
    $row->created_at=date('Y-m-d H:i:s');
    // $row->create_by=1;
    $row->save();
    header('location:index.php?option=category');
}
