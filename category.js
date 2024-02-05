function ajax(url, callback, data) {
	const sendData = "data=" + data;
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

function Select(classCategory, data_attr, classChange){
	var that = this;
	this.data = [];
	this.data_attr = data_attr;
	this.classChange = classChange;
	this.items = [];
	var categories = document.querySelectorAll(classCategory);

	categories.forEach(getElem);

	function getElem(category, index) {
		var name = category.getAttribute(data_attr);
		that.items.push(
			{
				name:name,
				select: false,
				change: function(){
					this.select = !this.select;
					return this.select; 
				}
			}
			);
		category.addEventListener('click', listener)
	};
	
	function listener(e) {
		this.classList.toggle(that.classChange);
		that.items[this.getAttribute('data-id')].change();
		that.data = [];
		that.items.forEach(collect);
		console.log(JSON.stringify(that.data));
		ajax('sort.php', server_response, JSON.stringify(that.data));
	}
	function server_response(data) {
		console.log(data)
		document.querySelector('.latest-reviews-container').innerHTML = data;
	}
	function collect(item){		
		if (item.select) {
			that.data.push(item.name);
		}
	}
}
new Select('.category', 'data-category', 'select');
