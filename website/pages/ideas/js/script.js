
function popup()
{
	alert("Hello World! \n Mainak Mondal \n 15BCA0005 \n VIT University.");
}
function popup2()
{
	alert("CrashxZ is my in Game Tag.")
}
function login(form)
{
	var username="CrashxZ"
    var password="ff4c71"
    var max=2;
	var flag=0;

	if(form.username.value=="CrashxZ"&&form.password.value=="password"){
		flag=1;
	}
	if(flag==0){
		alert("Invalid Username or Password");
	}else
	{
		window.open("entry.html","_self");
	}
}