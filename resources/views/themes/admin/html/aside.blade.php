<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{url("admin/home")}}">
                    <i class="material-icons">dashboard</i>
                    <p>Quản trị Website</p>
                </a>
            </li>
            <li class="nav-item has-treeview ">
                <a href="" class="nav-link text-capitalize">
                    <i class="nav-icon far fa-edit"></i>
                    <p>
                        Bài viết
                        <i class="material-icons">edit</i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url("admin/post/create")}}" class="nav-link text-capitalize">
                            <i class="far fa-circle text-info nav-icon"></i>
                            <p>Viết bài mới</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url("admin/post")}}" class="nav-link text-capitalize">
                            <i class="far fa-circle text-info nav-icon"></i>
                            <p>Tất cả bài viết</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url("admin/comment")}}" class="nav-link text-capitalize">
                            <i class="far fa-circle text-info nav-icon"></i>
                            <p>Tất cả bình luận</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url("admin/category")}}">
                    <i class="material-icons">content_paste</i>
                    <p>Quản lý chuyên mục</p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link text-capitalize">
                    <i class="material-icons">library_books</i>
                    <p>
                        Quản lý thành viên

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url("admin/member")}}" class="nav-link text-capitalize">
                            <i class="far fa-circle text-info nav-icon"></i>
                            <p>Tất cả thành viên</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url("admin/member/pending")}}" class="nav-link text-capitalize">
                            <i class="far fa-circle text-info nav-icon"></i>
                            <p>Thành viên chờ duyệt</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">person</i>
                    <p>Tài khoản</p>
                </a>
            </li>

        </ul>
    </div>
</div>
