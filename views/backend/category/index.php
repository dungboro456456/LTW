<?php

use App\Models\Brand;
use App\Models\Category; 


$list = Category::where('status','!=','0')->orderBy('created_at','DESC')->get();

// var_dump($list);
use node_modules\bootstrap\dist\js\bootstrap;

?> 
<?php require_once('../views/backend/Header.php') ;?> 
  <!-- Content Wrapper. Contains page content --> 

  <div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
     <!-- Content Header (Page header) --> 
     <section class="content-header"> 
      <div class="container-fluid"> 
        <div class="row mb-2"> 
          <div class="col-sm-6 " style="justify-content: center;"> 
            <h1 >Tất cả thương hiệu </h1> 
          </div> 
          <div class="col-sm-6 "> 
            <div class="row float-right"> 
              <a class="btn btn-success mr-1 px-1"  href="index.php?option=category&cat=create"><i class="fa-solid fa-plus"></i>Thêm</a>
              <a style="padding: 4px; border-radius: 10%;text-align: center;padding-left: 5px; align-items:center;" class="btn btn-danger mr-1 px-1"  href="index.php?option=category&cat=trash"><i class="fa-solid fa-trash"></i>Thùng Rác</a> 
            </div> 
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
                <th style='width:90px;' class="text-center">image</th> 
                <th>name</th> 
                <th>loại</th> 
                <th>Ngày tạo</th> 
                <th>Chức năng</th> 
                <th>ID</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php foreach($list as $row):?> 
            <tr> 
                <td> 
                    <input type="checkbox"> 
                </td> 
                <td><?=$row['image']?></td> 
                <td><?=$row['name']?></td> 
                <td><?=$row['slug']?></td> 
                <td><?=$row['created_at']?></td> 
                <td>

                <div class="container " style="align-items:center">
                               <?php if($row['status']==1):?>
                                <a class="btn btn-sm btn-success p-3 mr-2" style="border-radius: 17%"; href="index.php?option=category&cat=status&id=<?=$row['id'];?>"> 
                                  <i class="fas fa-toggle-on"></i>
                                  </a>
                              <?php else:?>
                                <a class="btn btn-sm btn-danger p-3 mr-2" style="border-radius: 17%"; href="index.php?option=category&cat=status&id=<?=$row['id'];?>"> 
                                  <i class="fas fa-toggle-off"></i>
                                  </a>
                              <?php endif;?>

                              <a class="btn btn-sm btn-info p-3 mr-2" style="border-radius: 17%"; href="index.php?option=category&cat=detail&id=<?=$row['id'];?>"> 
                              <i class="fa-solid fa-circle-info"></i>
                              </a>

                              <a class="btn btn-sm btn-success p-3 mr-2" style="border-radius: 17%"; href="index.php?option=category&cat=edit&id=<?=$row['id'];?>"> 
                              <i class="fa-solid fa-pen-to-square"></i>
                                  </a>
                              <a class="btn btn-sm btn-danger  p-3 mr-2" style="border-radius: 17%"; href="index.php?option=category&cat=delete&id=<?=$row['id'];?>"> 
                                  <i class="fas fa-trash"></i>
                                  </a>

                              

                </td> 
                <td><?=$row['id']?></td> 
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