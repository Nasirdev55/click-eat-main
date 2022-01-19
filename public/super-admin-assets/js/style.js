function _id(id){
    return document.getElementById(id);
}
function _cls(cls){
    return document.getElementsByClassName(cls);
}
function active_link(id)
{
    var i = _cls('link-div');
    var it = _id('menu'+id.replace('m',id));
    if($('.'+id+'-icon').hasClass('fa-angle-down'))
    {
        $('.'+id+'-icon').removeClass('fa-angle-down');
        $('.'+id+'-icon').addClass('fa-angle-left');
    }
    else
    {
        $('.'+id+'-icon').addClass('fa-angle-down');
        $('.'+id+'-icon').removeClass('fa-angle-left');
    }
}

function flag_change(){
    var l = $('#lang').val();
    if(l == "ar")
    _id('lang-img').src = 'super-admin-assets/icons/tn_sa-flag.gif';
    if(l == "ur")
    _id('lang-img').src = 'super-admin-assets/icons/tn_pk-flag.gif';
    if(l == "en")
    _id('lang-img').src = 'super-admin-assets/icons/tn_us-flag.gif';
}

function dropdown()
{
    $('#user-menu-links').toggle();
}


var path = window.location.pathname;
if(path == '/admin')
{
    $('.lnk1').addClass('active-link');
}
else if(path == '/admin/users')
{
    $('.lnk2').addClass('active-link');
}
if(path == '/admin/pages/home')
{
    $('#m7').addClass('active-link show');
    $('#m7 i').removeClass('fa-angle-left');
    $('#m7 i').addClass('fa-angle-down');
    $('#menu7').addClass('show');
    $('#menu7 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/pages/about')
{
    $('#m7').addClass('active-link show');
    $('#m7 i').removeClass('fa-angle-left');
    $('#m7 i').addClass('fa-angle-down');
    $('#menu7').addClass('show');
    $('#menu7 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/pages/services')
{
    $('#m7').addClass('active-link show');
    $('#m7 i').removeClass('fa-angle-left');
    $('#m7 i').addClass('fa-angle-down');
    $('#menu7').addClass('show');
    $('#menu7 .link-div:nth-child(3)').addClass('active-link2');
}
else if(path == '/admin/pages/contact')
{
    $('#m7').addClass('active-link show');
    $('#m7 i').removeClass('fa-angle-left');
    $('#m7 i').addClass('fa-angle-down');
    $('#menu7').addClass('show');
    $('#menu7 .link-div:nth-child(4)').addClass('active-link2');
}
else if(path == '/admin/restaurants')
{
    $('#m1').addClass('active-link show');
    $('#m1 i').removeClass('fa-angle-left');
    $('#m1 i').addClass('fa-angle-down');
    $('#menu1').addClass('show');
    $('#menu1 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/restaurants/approval')
{
    $('#m1').addClass('active-link show');
    $('#m1 i').removeClass('fa-angle-left');
    $('#m1 i').addClass('fa-angle-down');
    $('#menu1').addClass('show');
    $('#menu1 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/drivers')
{
    $('#m4').addClass('active-link show');
    $('#m4 i').removeClass('fa-angle-left');
    $('#m4 i').addClass('fa-angle-down');
    $('#menu4').addClass('show');
    $('#menu4 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/drivers/approval')
{
    $('#m4').addClass('active-link show');
    $('#m4 i').removeClass('fa-angle-left');
    $('#m4 i').addClass('fa-angle-down');
    $('#menu4').addClass('show');
    $('#menu4 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/products')
{
    $('#m2').addClass('active-link show');
    $('#m2 i').removeClass('fa-angle-left');
    $('#m2 i').addClass('fa-angle-down');
    $('#menu2').addClass('show');
    $('#menu2 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/product-reviews')
{
    $('#m2').addClass('active-link show');
    $('#m2 i').removeClass('fa-angle-left');
    $('#m2 i').addClass('fa-angle-down');
    $('#menu2').addClass('show');
    $('#menu2 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/orders')
{
    $('#m3').addClass('active-link show');
    $('#m3 i').removeClass('fa-angle-left');
    $('#m3 i').addClass('fa-angle-down');
    $('#menu3').addClass('show');
    $('#menu3 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/orders-complete')
{
    $('#m3').addClass('active-link show');
    $('#m3 i').removeClass('fa-angle-left');
    $('#m3 i').addClass('fa-angle-down');
    $('#menu3').addClass('show');
    $('#menu3 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/payments-list')
{
    $('#m5').addClass('active-link show');
    $('#m5 i').removeClass('fa-angle-left');
    $('#m5 i').addClass('fa-angle-down');
    $('#menu5').addClass('show');
    $('#menu5 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/admin/earnings-list')
{
    $('#m5').addClass('active-link show');
    $('#m5 i').removeClass('fa-angle-left');
    $('#m5 i').addClass('fa-angle-down');
    $('#menu5').addClass('show');
    $('#menu5 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/admin/restaurant-payouts')
{
    $('#m5').addClass('active-link show');
    $('#m5 i').removeClass('fa-angle-left');
    $('#m5 i').addClass('fa-angle-down');
    $('#menu5').addClass('show');
    $('#menu5 .link-div:nth-child(3)').addClass('active-link2');
}
else if(path == '/admin/drivers-payouts')
{
    $('#m5').addClass('active-link show');
    $('#m5 i').removeClass('fa-angle-left');
    $('#m5 i').addClass('fa-angle-down');
    $('#menu5').addClass('show');
    $('#menu5 .link-div:nth-child(4)').addClass('active-link2');
}