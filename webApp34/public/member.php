<?php 
  include_once '../inc/header.php';
  include_once '../inc/db.php';
    include '../ajax/function.php';

  
?>
<style type="text/css" src="../inc/assets/style.css"></style>


<!-- Main sidebar -->
<div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
	<div class="sidebar-content">
		<div class="sidebar-category sidebar-default">
			<div class="sidebar-user">
				<div class="category-content">
					<?php if($_SESSION['auth'] == "Success" && !empty($_SESSION['user'])){ ?>
    <div class="row justify-content-center">
     <h2>Welcome <?= ucfirst($_SESSION['user']['name']); ?></h2>
  </div> 
				</div>
			</div>
		</div>
		<!-- /Sidebar Category -->
		<div class="sidebar-category sidebar-default">
				<div class="category-title">
					<span>Profile Image</span>
				</div>
			<div class="category-content">
				<ul id="fruits-nav" class="nav flex-column">
					<li class="nav-item">
						<?php
                $check = userDetail($conn, $_SESSION['user']['id']);
                if( !empty($check['file_content']) ){ ?>
                    <img src="<?=BASE_URL.'public/upload/'.$check['file_content'] ?>" height="200px"
                    width="200px" class="rounded float-left">
                <?php }else{
            ?>
            <img src="<?=BASE_URL."inc/assets/dummy-image.jpg"?>" height="200px" class="rounded float-left">
        <?php } }?>
					</li>
					
					
				</ul>
				<!-- /Nav -->
			</div>
			<!-- /Category Content -->
		</div>
		<!-- /Sidebar Category -->
		<div class="sidebar-category sidebar-default">
				<div class="category-title">
					<span></span>
				</div>
			<div class="category-content">
				<ul id="sidebar-editable-nav" class="nav flex-column">
					<li class="nav-item">
						<form action="upload.php" method="post" id="user-img" enctype="multipart/form-data">
    <input type="file" name="file" id="fileToUpload">
    <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>" id="user_id"><br/>
    <input type="submit" name="submit">
    </form>
					</li>
					
					
				</ul>
				<!-- /Nav -->
			</div>
			<!-- /Category Content -->
		</div>
		<!-- /Sidebar Category -->
	</div>
</div>
<!-- /main sidebar -->
 <!-- end content-wrapper -->

<?php 
  include_once '../inc/footer.php';
?>