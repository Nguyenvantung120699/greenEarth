<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{asset("/")}}" class="simple-text logo-normal">
            <i class="material-icons">home</i> Green Earth
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav nav-list">
            <li class="nav-item active">
                <a class="nav-link" href="{{url("admin/home")}}">
                    <i class="material-icons">dashboard</i>
                    <p>Quản trị Website</p>
                </a>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">edit</i>
                        <p>Hoạt Động</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/post/create")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-file"></i>
                                    <p>Thêm Hoạt Động</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/post")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-th-list"></i>
                                    <p>Tất cả Hoạt Động</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/comment")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-comments"></i>
                                    <p>Tất cả bình luận</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("admin/category")}}">
                    <i class="material-icons">content_paste</i>
                    <p>Quản lý chuyên mục</p>
                </a>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">event</i>
                        <p>Sự kiện</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/event/create")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-file"></i>
                                    <p>Thêm sự kiện</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/event")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-th-list"></i>
                                    <p>Tất cả sự kiện</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">nfc</i>
                        <p>Chiến dịch</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/campaign/create")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-file"></i>
                                    <p>Thêm chiến dịch</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/campaign")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-th-list"></i>
                                    <p>Tất cả chiến dịch</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">library_books</i>
                        <p>Quản lý thành viên</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/member")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-users"></i>
                                    <p>Tất cả thành viên</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/member/pending")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-user-plus nav-icon"></i>
                                    <p>Thành viên chờ duyệt</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">account_tree</i>
                        <p>Tài trợ</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/donors/create")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-file"></i>
                                    <p>Thêm nhà tài trợ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/donors")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-th-list"></i>
                                    <p>Tất cả nhà tài trợ</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">   
                <a class="nav-link" href="{{url("admin/donate")}}">
                    <i class="fa fa-globe" ></i>
                    <p>Ủng hộ</p>
                </a>
            </li>
            <li class="nav-item">
                <div class="btn-group dropright">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p>Tài khoản</p>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("admin/account/create")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-file"></i>
                                    <p>Thêm tài khoản</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("admin/account")}}" class="nav-link text-capitalize">
                                    <i class="fa fa-th-list"></i>
                                    <p>Tất cả tài khoản</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("admin/introduction")}}">
                    <i class="fa fa-users"></i>
                    <p>Quản lý nhân viên</p>
                </a>
            </li>

        </ul>
    </div>

</div>
