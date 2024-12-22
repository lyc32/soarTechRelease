
function openPop()
{
	document.getElementById("messageDialog").className = "modal_open";
}

function prePop(message)
{
	document.getElementById("responseMessage").innerHTML = message;
}

function setPop(message, reload) 
{
	document.getElementById("responseMessage").innerHTML = message;
	if(reload == true)
	{
		let i = 3;
		self.setInterval(() => 
		{
			document.getElementById("countTime").innerHTML = "Go Back To Home Page After " + i + " Seconds";
			i = i - 1;
			if(i == -1)
			{
				location.reload();
			}
		}
		,1000);
	}
	else 
	{
		document.getElementById("closePopButton").className = "btn btn-outline-light py-0 px-2 modal_close_button_show";
	}
}

function resetPop()
{
	document.getElementById("responseMessage").innerHTML = '';
	document.getElementById("closePopButton").className = "btn btn-outline-light py-0 px-2 modal_close_button";
}

function closePop()
{
	document.getElementById("messageDialog").className = "modal_close";
}


