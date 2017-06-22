<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ URL::to('src/img/avatar3.png') }}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{ Route('dashboard') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                              <!--  <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>-->
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Images</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        <li><a href="{{ Route('addImage') }}"><i class="fa fa-angle-double-right"></i> Add Image</a></li>
                        <li><a href="{{ Route('viewImages') }}"><i class="fa fa-angle-double-right"></i> View Image</a></li>

                        </li>


                        
                           
                        
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>