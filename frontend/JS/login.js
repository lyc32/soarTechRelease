function login()
{
	document.getElementById("username").style = "";
	document.getElementById("password").style = "";
	let userName = document.getElementById("username").value;
	let password = document.getElementById("password").value;
	if(userName == undefined || userName == '' || userName == null)
	{
		document.getElementById("username").style = "border: 2px solid red;";
	}
	else if(password == undefined || password == '' || password == null)
	{
		document.getElementById("password").style = "border: 2px solid red;";
	}
	else 
	{
		let pass = md5(userName + password);
		resetPop();
		openPop();
		prePop('Processing<br>Please wait...');
		$.ajax(
		{
			url: "./controller/authController.php",
			method: "POST",
			data: { opt:'login', username: userName, password: pass},
			dataType:"text",
			success: function(data) 
			{
				if( 'success' == data.trim() )
				{
					setPop('Login Successful', true);
				}
				else
				{
					setPop('Login Failed<br>Please Check Your Account and Password', false);
				}
			}, 
			error: function(error) 
			{
				setPop("Login Failed<br>" + error.message, false);
			}
		})
	}
}

function logout()
{
	resetPop();
	openPop();
	prePop('Processing<br>Please wait...');
	$.ajax(
	{
		url: "./controller/authController.php",
		method: "POST",
		data: { opt:'logout'},
		dataType:"text",
		success: function(data) 
		{
			setPop('Logout Successful', true);
		}, 
		error: function(error) 
		{
			setPop("Logout Failed<br>" + error.message, false);
		}
	})
}

function resetLoginView()
{
	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
	document.getElementById("username").style = "";
	document.getElementById("password").style = "";
}


