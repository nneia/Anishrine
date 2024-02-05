function ajax(url, callback, data) {
	const sendData = JSON.stringify(data);
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
export default ajax