//Меню для мобильной версии//
window.onload = function () {
	var menuItem2 = document.querySelector(".list-2");
	menuItem2.addEventListener("click", function () {
		var listOpen = document.querySelector(".list-open-2");
		listOpen.classList.toggle("list-open-2-mb");
	})
}
//Для выбора категории//


	
/*	function Ganre(name) {
			this.name = name;
			this.select = false;
			const that = this;
			this.getName = function () {
				return that.name
			}
	};
	Comedy = new Ganre('Comedy');*/


