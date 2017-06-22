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
                    <h3 class="box-title" style="color: #367fa9;"><b>Add Channel</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form  action="<?php echo e(Route('doAddChannel')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="channel_name">Channel Name</label>
                      <input type="text" name="channel_name" class="form-control" id="channel_name" placeholder="Enter Channel Name">
                    </div>
                      
                    <div class="form-group">
                      <label for="channel_fullname">Channel Full Name</label>
                      <input type="text" name="channel_fullname" class="form-control" id="channel_fullname" placeholder="Enter Channel Full Name">
                    </div>
                      
                    <div class="form-group">
                      <label>Verified Channel</label>
                      <select class="form-control" name="verified">
                          <option value="0">False</option>
                          <option value="1">True</option>
                      </select>
                    </div> 
                      
                    <div class="form-group">
                      <label>Crawl Channel</label>
                      <select class="form-control" name="crawl">
                          <option value="0">True</option>
                          <option value="1">False</option>
                      </select>
                    </div> 
                      
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                
                  
                  
                </form>
              </div><!-- /.box -->
    </section>
    
</aside>

