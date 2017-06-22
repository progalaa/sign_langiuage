<aside class="right-side">
    <section class="content-header">
        <h1>
            Dashboard <small>Control panel</small>
            
        </h1>
        <?php if(session()->has('message') ): ?>
                 <div class="alert alert-success alert-dismissable"><?php echo e(session()->get('message')); ?></div>
        <?php endif; ?>
        
        <ol class="breadcrumb"></ol>
    </section>
    <section class="content">
        <br />
        <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="color: #367fa9;"><b>Add Image</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form  action="<?php echo e(Route('doAddImage')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="keywords">Image Keywords</label>
                      <input name="keywords" id="tags" />
                    </div>


                     <div class="form-group">
                             <label for="image">Upload Image</label>
                             <input type="file" name="image"  id="image">
                     </div>


                     </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                
                  
                  
                </form>
              </div><!-- /.box -->
    </section>
    
</aside>

