<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Topic;
use App\Models\User;

$list = User::all(); 
// var_dump($list); 
?> 
 
 
 
<?php require_once('../views/backend/Header.php') ;?> 
 
  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
     <!-- Content Header (Page header) --> 
     <section class="content-header"> 
      <div class="container-fluid"> 
        <div class="row mb-2"> 
          <div class="col-sm-6"> 
            <h1>Tất cả danh mục </h1> 
          </div> 
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active">Blank Page</li> 
            </ol> 
          </div> 
        </div> 
      </div><!-- /.container-fluid --> 
    </section> 
 
    <!-- Main content --> 
    <section class="content"> 
   
 
<!-- Default box --> 
<div class="card"> 
  <div class="card-header"> 
    <h3 class="card-title">Title</h3> 
 
    <div class="card-tools"> 
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> 
        <i class="fas fa-minus"></i> 
      </button> 
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> 
        <i class="fas fa-times"></i> 
      </button> 
    </div> 
  </div> 
  <div class="card-body"> 
    <table class="table table-bordered table-hover table-striped"> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Id</th> 
                <th>Tên</th> 
                <th>Tên Đăng Nhập</th> 
                <th>Mật Khẩu</th> 
                <th>Email</th> 
                <th>Giới Tính</th> 
                <th>Điện Thoại</th> 
                <th>Hình Ảnh</th> 
                <th>Địa Chỉ</th> 

                <th>Quyền Truy Nhập</th> 
                <th>Ngày Tạo</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php foreach($list as $row):?> 
            <tr> 
                <td> 
                    <input type="checkbox"> 
                </td> 
                <td><?=$row['id']?></td> 
                <td><?=$row['name']?></td> 
                <td><?=$row['username']?></td> 
                <td><?=$row['password']?></td> 
                <td><?=$row['email']?></td> 
                <td><?=$row['gender']?></td> 
                <td><?=$row['phone']?></td> 
                <td><?=$row['image']?></td> 
                <td><?=$row['roles']?></td> 
                <td><?=$row['address']?></td> 
                <td><?=$row['created_at']?></td> 
            </tr> 
            <?php endforeach;?> 
        </tbody> 
    </table> 
  </div> 
  <!-- /.card-body --> 
  
  <!-- /.card-footer--> 
</div> 
<!-- /.card --> 
 
</section> 
<!-- /.content --> 
</div> 
<!-- /.content-wrapper --> 
 
<?php require_once('../views/backend/Footer.php') ;?>
