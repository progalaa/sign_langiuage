<aside class="right-side">
    <section class="content-header">
        <h1>
            Dashboard <small>Control panel</small>
            
        </h1>
        @if (session()->has('message') )
                 <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
        @endif
        
        <ol class="breadcrumb"></ol>
    </section>
    <section class="content">
        <br />
        <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="color: #367fa9;"><b>Edit Image</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  @foreach($images as $image)
                  <form  action="../doEditImage/{{ $image->id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="keywords">Image Keywords</label>
                      <input name="keywords" id="tags" value="{{ $image->keywords }}"/>
                    </div>


                     <div class="form-group">
                             <label for="image">Upload Image</label>
                             <input type="file" name="image"  id="image" value="{{ $image->images }}>
                     </div>


                     </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>
                  @endforeach
              </div><!-- /.box -->
    </section>
    
</aside>

