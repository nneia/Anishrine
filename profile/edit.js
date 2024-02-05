var form = {
	
	username:"",
	birthdate:"",
	gender:'',
	location:'',
	avatar:'',
	cover:'',
	bio:''

};
var $ = (selector) => document.getElementById(selector);
document.getElementById('save').onclick = save_changes;
function save_changes (event) {
	form.username = $("username").value;
	form.birthdate = $("birthdate").value;
	form.gender = $("gender").value;
	form.location = $("location").value;
	form.avatar = $("avatar").files[0];
	form.cover = $("cover").files[0];
	form.bio = $("bio").value;
	console.log(form);
	data(form);
}


function data (form) {
	var formData = new FormData();
	formData.append("avatar", form.avatar);
	formData.append("cover", form.cover)
	var textdata = JSON.stringify({
		username:form.username,
		birthdate:form.birthdate,
		gender:form.gender,
		location:form.location,
		bio:form.bio
	});
	formData.append("textData", textdata)
	axios.post("update.php", formData, 
		{
			headers:{'Content-Type': 'multipart/form-data'}
		})
		.then(function (response) {
			
			location.replace(response.data);
			
		});
}