var recieveData = document.querySelector("#recievedata");
var submitData = document.querySelector("#submitdata");
submitData.addEventListener('click', submit);
function submit (e) {
	var data = recieveData.value;
	console.log(data);
	ajax('datatransfer.php', transfer, data);
}
function transfer (d) {
	alert('Thank you for the feedback:)');
	recieveData.value='';
}

function ajax(url, callback, data) {
	const sendData = "nnn=" + data;
	const xhr = new XMLHttpRequest();
	xhr.open('POST', url, true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send(sendData);
	xhr.onreadystatechange = function () {
	if (xhr.readyState == 4 && xhr.status == 200){
		callback(JSON.parse(xhr.responseText)); 
		}
	};
	

};
