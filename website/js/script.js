
function popup()
{
	alert("Hello World! \n Team Meryln \n BCA \n VIT University.");
}
function popup2()
{
	alert("ITA1007 is the course code of the Subject.");
}
function login(form)
{
    if(form.username.value === "" && form.password.value==="")
        flag=1;
    if(flag===0)
        alert("Invalid Username or Password");
}
function responseR(form){
		var email=form.email.value;
		var flag=0;
		for(i=0;i<email.length;i++)
		{
			if(email.charAt(i)==='@'|| email.charAt(i)==='.')
				flag++;
		}
		if(flag<2){
                    alert("Invalid Email");
		}
		else{
			
		}

}