function goHome()
{
	getHtml("home");	
}

function goProduct()
{
	getHtml("product");	
}

function goAbout() 
{
	getHtml("about");
}

function goContact() 
{
	getHtml("contact");
}

function goChat() 
{
	getHtml("chat")
}

function toLogin()
{
	getHtml("login")
}

function goDashboard()
{
	getHtml("dashboard");
}


function getHtml(path) 
{
	let url = './controller/userController.php';
	if(path != undefined || path != null || path != '')
	{
		url = url + "?path="+ path;
	}
	$.ajax(
	{
		url: url,
		method: "GET",
		success: function(data) 
		{
			updatePage(data);
		},
		error: function(error) 
		{
			updatePage("<h1 class=\"text-white\">" + error + "</h1>");
		}
	})
}

function updatePage(data) 
{
	document.getElementById("mainPage").innerHTML = data;
}

function closePop()
{
	document.getElementById("messageDialog").className = "modal_close";
}


