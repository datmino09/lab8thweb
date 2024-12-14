<?php 
  $New = new News();
  $news = db->getAll();
?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="image.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tiêu đề bài báo</h5>
          <p class="card-text">Đây là mô tả ngắn về bài báo.</p>
        </div>
      </div>
    </div>
    <!-- Thêm các bài báo khác -->
  </div>
</div>
