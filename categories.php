<?php require_once 'includes/menu.php' ?>

      <div class="row align-items-center align-content-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        if (isset($_GET['cate_id'])) {
            $selectCategoryByPost = selectCategoryByPost($_GET['cate_id']);
        }

        if ($selectCategoryByPost) {
            foreach ($selectCategoryByPost as $value) {
                ?>
          <div class="col">
            <div class="card h-100">
              <img src="images/<?php echo $value->post_img ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="post.php?post_id=<?php echo $value->post_id ?>"><?php echo $value->post_title ?></a></h5>
                <hr>
                <p class="card-text"><?php echo readMore($value->post_body); ?></p>
                <a href="post.php?post_id=<?php echo $value->post_id ?>" target="_blank" type="button" class="btn btn-outline-secondary btn-block">ادامه مطلب</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">درجه استاد: <?php echo $value->post_author ?></small></br>
                <small class="text-muted text-crate"> تاریخ انتشار : <?= convertDateToFarsi($value->post_created_at); ?> </small>
              </div>
            </div>
          </div>
          <?php }
        } else {
            echo '<p class="alert alert-danger center-block text-center">هیچ مطلبی برای این دسته بندی درج نشده است</p>';
        } ?>
        </div>
      </div>
    </div>
  
  </section>
  <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">

      </div>
    </div>
  </footer>

  <script src="Theme/js/bootstrap.bundle.min.js"></script>
</body>

</html>