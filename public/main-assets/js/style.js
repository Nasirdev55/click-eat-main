function _id(id){
    return document.getElementById(id);
}
function _cls(cls){
    return document.getElementsByClassName(cls);
}
function plus(id)
{
    var c = id.replace('p','');
    var v = _id("counter"+c);
    var v1 = _cls("counter"+c)[0];
    var val = v.innerHTML;
    if(val > 0){
        v.innerHTML = parseInt(val) + 1;
        v1.innerHTML = parseInt(val) + 1;
    }
}
function minus(id)
{
    var c = id.replace('n','');
    var v = _id("counter"+c);
    var v1 = _cls("counter"+c)[0];
    var val = v.innerHTML;
    if(val > 1){
    v.innerHTML = parseInt(val) - 1;
    v1.innerHTML = parseInt(val) - 1;
    }
}
function shopping_cart()
{
    $('#shopping-cart').show();
}
function shopping_cart_close()
{
    $('#shopping-cart').hide();
}

// slider js
