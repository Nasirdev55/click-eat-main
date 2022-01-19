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
if(path == '/restaurant/products')
{
    $('#m1').addClass('active-link show');
    $('#m1 i').removeClass('fa-angle-left');
    $('#m1 i').addClass('fa-angle-down');
    $('#menu1').addClass('show');
    $('#menu1 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/restaurant/products/reviews')
{
    $('#m1').addClass('active-link show');
    $('#m1 i').removeClass('fa-angle-left');
    $('#m1 i').addClass('fa-angle-down');
    $('#menu1').addClass('show');
    $('#menu1 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/restaurant/orders')
{
    $('#m2').addClass('active-link show');
    $('#m2 i').removeClass('fa-angle-left');
    $('#m2 i').addClass('fa-angle-down');
    $('#menu2').addClass('show');
    $('#menu2 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/restaurant/orders/complete')
{
    $('#m2').addClass('active-link show');
    $('#m2 i').removeClass('fa-angle-left');
    $('#m2 i').addClass('fa-angle-down');
    $('#menu2').addClass('show');
    $('#menu2 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/restaurant/payments')
{
    $('#m3').addClass('active-link show');
    $('#m3 i').removeClass('fa-angle-left');
    $('#m3 i').addClass('fa-angle-down');
    $('#menu3').addClass('show');
    $('#menu3 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/restaurant/pages/contact-us')
{
    $('#m4').addClass('active-link show');
    $('#m4 i').removeClass('fa-angle-left');
    $('#m4 i').addClass('fa-angle-down');
    $('#menu4').addClass('show');
    $('#menu4 .link-div:nth-child(3)').addClass('active-link2');
}
else if(path == '/restaurant/pages/blog')
{
    $('#m4').addClass('active-link show');
    $('#m4 i').removeClass('fa-angle-left');
    $('#m4 i').addClass('fa-angle-down');
    $('#menu4').addClass('show');
    $('#menu4 .link-div:nth-child(1)').addClass('active-link2');
}
else if(path == '/restaurant/pages/about-us')
{
    $('#m4').addClass('active-link show');
    $('#m4 i').removeClass('fa-angle-left');
    $('#m4 i').addClass('fa-angle-down');
    $('#menu4').addClass('show');
    $('#menu4 .link-div:nth-child(2)').addClass('active-link2');
}
else if(path == '/restaurant')
{
    $('.single-link1').addClass('active-link');
}
else if(path == '/restaurant/table-booking')
{
    $('.single-link2').addClass('active-link');
}
else if(path == '/restaurant/users')
{
    $('.single-link3').addClass('active-link');
}

