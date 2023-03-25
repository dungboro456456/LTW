<?php
use App\Models\Category;

if(isset($_REQUEST['id'])) {
   $id = $_REQUEST['id'];
   $row = Category::find($id);
   $row->status = 1; // Khôi phục mục tin bằng cách đặt status=1
   $row->updated_at = date('Y-m-d H:i:s');   
   $row->updated_by = 1;
   $row->save();
   header('location:index.php?option=category&cat=trash');
} else {
   echo "Lỗi: Không tìm thấy biến 'id'";
}

