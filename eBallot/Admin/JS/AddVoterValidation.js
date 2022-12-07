function AddVoterValidation()
{
	var fname=document.getElementById("fname").value;
	if(fname.length<5)
    {
		document.getElementById("nameerror").innerHTML="**First Name should contain minimum 5 words**";
		return false;
	}
	else
    {
		document.getElementById("nameerror").innerHTML="Name is Valid";
		return true;
	}

    
}