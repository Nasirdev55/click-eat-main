<div class="page-topbar">
                <div class="mx-4">
                    <i class="fa fa-bars res-bars" onclick="document.querySelector('.page-sidebar').style.display = 'block'"></i>
                </div>
                <i class="ti-search" style="position: relative;left:30px"></i>
                <input type="text" name="" id="" class="search-field pl-5" placeholder="Serach">
                <div class="ml-4">
                    <i class="fa fa-bell"></i>
                </div>
                <div class="ml-4">
                <div class="dropdown" id="user-menu">
  <a href="#" class="nav-link text-black" onclick="dropdown()" type="button">
  <img src="{{ asset('super-admin-assets/img/images/pictures/abdulla-m-uTaSlu2Jfsg-unsplash.jpg') }}" alt="" style="width: 34px;height:34px;border-radius:50%;margin-left:10px">
 <span style="color: black;"> ClickEat <i class="fa fa-angle-down"></i> </span>
</a>
  <div class="dropdown-menu" id="user-menu-links">
    <a class="dropdown-item" href="#" onclick="document.querySelector('#admin-logout').submit()">Logout</a>
    <form action="{{url('admin/logout')}}" id="admin-logout" method="post">@csrf</form>
  </div>
</div>
                </div> 
            </div>