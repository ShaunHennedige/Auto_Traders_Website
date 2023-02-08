
function validateform1(){
    if(document.formCon.firstname.value.length==0)
    {
        window.alert("Fill First Name !!");
    }
    if(document.formCon.lastname.value.length==0)
    {
        window.alert("Fill Last Name !!");
    }
   /*if(document.formCon.p1.value!=document.info.p2.value)
    {
        window.alert("Password incorrect !");
    }*/
   if(documnet.formCon.province)
   {
       window.alert("Select province");
   }
}


function validateform2(){
    if(document.formSign.uname.value.length==0)
    {
        window.alert("Fill User Name !!");
    }
    if(document.formSign.email.value.length==0)
    {
        window.alert("Fill E-mail !!");
    }
    if(document.formSign.pws.value.length==0)
    {
        window.alert("Fill Password !!");
    }
   if(document.formSign.psw.value!=document.formSign.psw-repeat.value)
    {
        window.alert("Password incorrect !");
    }
   if(documnet.formSign.province)
   {
       window.alert("Select province");
   }
}