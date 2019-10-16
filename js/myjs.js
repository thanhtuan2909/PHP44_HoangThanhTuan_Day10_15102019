function viewresult() {
	var name = document.getElementById('name').value;
	var mail = document.getElementById('mail').value;
	var phone = document.getElementById('phone').value;
	var ms = document.getElementById('ms').value;

	var result = '';
	result += "Name: " + name + "<br>" + "Email: " + mail + "<br>" + "Phone: " + phone + "<br>" + "Message: " + ms;

	document.getElementById('result').innerHTML = result;
	return false;
}