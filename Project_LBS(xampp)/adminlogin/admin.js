function validation()
{
    let adminname=document.getElementById("adminname").value;
    let password=document.getElementById("pswd").value;
    if (adminname=="admin" && password=="psgtech")
    {
        alert("Login Successfull") ;
        window.location.href = "http://localhost/project_LBS(xampp)/admindetails/ad.html";
        return false;
    }
    else{
        alert("invalid userId or password");
    }
}
