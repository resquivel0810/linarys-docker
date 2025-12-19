$( document ).ready(function() {
 var cookies=localStorage.getItem('cookies_linarys');
 if(cookies==null||cookies==false)
 {
    $('#cookieModal').modal('show');
    document.getElementsByTagName('html')[0].style.overflow = "hidden";
 }
});
function accept_cookies()
{
    localStorage.setItem('cookies_linarys',true);
    $('#cookieModal').modal('hide');
}
