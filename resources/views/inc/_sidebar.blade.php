<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span>File Management</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="#"><i class="fa fa-user"></i>
                            <span>User Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                     <ul class="treeview-menu">
                         <li><a href="{{route('user.create')}}"><i class="fa fa-user-plus"></i>Create New User</a> </li>
                         <li><a href="{{route('user.index')}}"><i class="fa fa-eye"></i>View Users</a> </li>
                     </ul>
                    </li>
                    <li><a href=""><i class="fa fa-gear"></i>Control</a></li>
                    <li class="treeview"><a href="#"><i class="fa fa-building-o"></i>
                            <span>Branch Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('branch.create')}}"><i class="fa fa-home"></i>Add New Branch</a> </li>
                            <li><a href="{{route('branch.index')}}"><i class="fa fa-eye"></i>View all Branch</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-bank"></i>
                            <span>Bank Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('bank.create')}}"><i class="fa fa-user-plus"></i>Register new Bank</a> </li>
                            <li><a href="{{route('bank.index')}}"><i class="fa fa-eye"></i>View Registered  Bank</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-gear"></i>
                            <span>Pension Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-user-plus"></i>1</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-gear"></i>
                            <span>Salary Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-user-plus"></i>1</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-gear"></i>
                            <span>State Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('state.create')}}"><i class="fa fa-plus"></i>Register State</a> </li>
                            <li><a href="{{route('state.index')}}"><i class="fa fa-plus"></i>View State</a> </li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-level-up   "></i><i class="fa fa-level-down"></i>
                            <span>Rank / Post Management</span>
                            <span class="pull-right-container"></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-user-plus"></i>1</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Employee Management</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-eye"></i>1</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-archive-o"></i>
                    <span>Transaction Management</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-plus"></i>1</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Processing Management</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-plus"></i>1</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>Report</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-briefcase"></i>1</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Tool</span>
                    <span class="pull-right-container">

            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-briefcase"></i>Close Month</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
