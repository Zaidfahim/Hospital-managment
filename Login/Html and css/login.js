function validate()
{
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
if(username=="admin"&& password=="12345")
{
    alert("login successful")
    return false;

}
else

{
    alert("login failed")
}
}