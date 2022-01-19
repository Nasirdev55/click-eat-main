<div class="page-sidebar">
            <div class="logo position-relative">
                <h3>Clickeat</h3>
                <span onclick="document.querySelector('.page-sidebar').style.display = 'none'" class="close" style="position: absolute;right:5px;margin-bottom: 10px;"><img src="{{ asset('super-admin-assets/icons/Icon material-cancel.svg') }}" alt=""></span>
            </div>
            <div class="pl-4 link-div lnk1">
                <a href="/">
                    <i class="fa fa-th-large"></i><b class="ml-2 link">Dashboard</b></a>
            </div>
            <div class="pl-4 link-div lnk2">
                <a href="/">
                    <i class="fa fa-user"></i><b class="ml-2 link">Users</b></a>
            </div>
            
            <div class="pl-4 link-div" data-target="#menu1" data-toggle="collapse" id="m1" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-store"></i><b class="ml-2 link">Markets</b></a><i class="fa fa-angle-left m1-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu1">
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/marketes')}}">
                    <b class="ml-2 link">Markets List</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/marketes/approval')}}">
                    <b class="ml-2 link">Markete Approval</b></a>
                </div>
            </div>
            <div class="pl-4 link-div" data-target="#menu2" data-toggle="collapse" id="m2" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-box-open"></i><b class="ml-2 link">Products</b></a><i class="fa fa-angle-left m2-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu2">
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/products')}}">
                    <b class="ml-2 link">Products List</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="product-reviews">
                    <b class="ml-2 link">Products Reviews</b></a>
                </div>
            </div>
            <div class="pl-4 link-div" data-target="#menu3" data-toggle="collapse" id="m3" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-clipboard-list"></i><b class="ml-2 link">Orders</b></a><i class="fa fa-angle-left m3-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu3">
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/products')}}">
                    <b class="ml-2 link">Orders List</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="orders-status">
                    <b class="ml-2 link">Orders Status</b></a>
                </div>
            </div>
            <div class="pl-4 link-div" data-target="#menu4" data-toggle="collapse" id="m4" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-car"></i><b class="ml-2 link">Drivers</b></a><i class="fa fa-angle-left m4-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu4">
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/drivers')}}">
                    <b class="ml-2 link">Drivers List</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/drivers/approval')}}">
                    <b class="ml-2 link">Drivers Approval</b></a>
                </div>
            </div>
            <div class="pl-4 link-div" data-target="#menu5" data-toggle="collapse" id="m5" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-credit-card"></i><b class="ml-2 link">Payments</b></a><i class="fa fa-angle-left m5-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu5">
                <div class="pl-4 link-div">
                    <a href="payments-list">
                    <b class="ml-2 link">Payments</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="earnings">
                    <b class="ml-2 link">Earnings</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="markets-payouts">
                    <b class="ml-2 link">Markete Payouts</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="drivers-payouts">
                    <b class="ml-2 link">Drivers Payouts</b></a>
                </div>
            </div>
            <div class="pl-4 link-div" data-target="#menu7" data-toggle="collapse" id="m7" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-file"></i><b class="ml-2 link">Pages</b></a><i class="fa fa-angle-left m7-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu7">
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/pages/home')}}">
                    <b class="ml-2 link">Home</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/pages/about')}}">
                    <b class="ml-2 link">About Us</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/pages/services')}}">
                    <b class="ml-2 link">Our Services</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/pages/packages')}}">
                    <b class="ml-2 link">Packages</b></a>
                </div>
                <div class="pl-4 link-div">
                    <a href="{{url('/admin/pages/contact')}}">
                    <b class="ml-2 link">Contact Us</b></a>
                </div>
            </div>
        </div>