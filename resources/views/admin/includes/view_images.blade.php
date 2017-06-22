a<aside class="right-side">
    <section class="content-header">
        @if (session()->has('message') )
            <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
        @endif

        @if (session()->has('error') )
            <div class="alert alert-danger alert-dismissable">{{ session()->get('error') }}</div>
        @endif
        <center> <h3 style="color: #367fa9;">
                All Images View
            </h3></center>
        <ol class="breadcrumb"></ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-xs-12">
                <div class="box">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="box-body table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead style="background-color:#367fa9;color: white; ">
                                <tr>
                                    <th>ID</th>
                                    <th>Keywords</th>
                                    <th>Image</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td>{{ $image->keywords }}</td>
                                        <td><img src="{{ URL::to('/images/'.$image->images) }}" alt="some_text" style="width:90px;height:90px;"></td>

                                        <td style="width: 5px;"><a href="editImage/{{ $image->id }}" class="btn btn-info" role="button" ><span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td style="width: 5px;"><a data-href="deleteImage/{{ $image->id }}" class="btn btn-danger"  data-toggle="modal" data-target="#confirm-delete{!! $image->id !!}"><span class="glyphicon glyphicon-trash"></span></a></td>

                                        <div class="modal fade" id="confirm-delete{!! $image->id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <br /><center><h4 style="color: red;"><b>Are You Sure To Confirm Delete Image With ID {!! $image->id !!}</b></h4></center>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <a href="deleteImage/{{ $image->id }}" class="btn btn-danger btn-ok">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                    </form>
                    <?php
                    if(isset($_GET['search']))
                    {
                        echo "";
                    }
                    else{
                    ?>
                    <?php
                    }

                    ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        </div>



    </section><!-- /.content -->



</aside>