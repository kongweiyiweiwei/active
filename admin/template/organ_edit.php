<?php
  include_once("connect.php");
  if(!isset($_SESSION["user"])){
    msg("您还没有登录，请先登录","login.php");
  }
  $nid=$_GET["nid"];
$sql="select * from organ where new_id=$nid";
$re=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($re);
//print_r($row);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="do_organ_edit.php" enctype='multipart/form-data'>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
        <input type="hidden"  name="new_id"value="<?=$row['new_id']?>">
          <input type="text" class="input w50" value="<?=$row['name']?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1"  name="thumb" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />

        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:200px; border:1px solid #ddd;"><?=$row['content']?></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"name="sub"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>