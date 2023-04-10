<?php
use App\Models\User;
use App\Libraries\MyClass;

if(isset($_POST['action']) && $_POST['action'] == 'delete_many') {
    $selected_ids = isset($_POST['selected_ids']) ? $_POST['selected_ids'] : [];
    if(!empty($selected_ids)) {
        foreach($selected_ids as $id) {
            $user = User::find($id);
            if($user) {
                $user->status = 0;
                $user->updated_at = date('Y-m-d H:i:s');
                $user->updated_by = 1;
                $user->save();
            }
        }
        MyClass::set_flash('message', ['type' => 'success', 'msg' => 'Đưa các mẫu tin vào thùng rác thành công']);
        header('location: index.php?option=user');
        exit();
    } else {
        MyClass::set_flash('message', ['type' => 'error', 'msg' => 'Chưa chọn bản ghi để xóa']);
        header('location: index.php?option=user');
        exit();
    }
}

