
const categoryTitle = document.querySelectorAll('.category-title');
const allCategoryPosts = document.querySelectorAll('.all');

for(let n=0; n<categoryTitle.length; n++){
	categoryTitle[n].addEventListener('click',filterPosts.bind(this,categoryTitle[n]));
}


funtion filterPosts(item){
	changeActivePosition(item);
	for(let n=0; n<allCategoryPosts.length; n++){
		if(allCategoryPosts[n].classList.contains(item.attributes.id.value)){
			allCategoryPosts[n].style.display="block";
		} else{
			allCategoryPosts[n].style.display="none";
		}


		}
	}

funtion changeActivePosition(activeItem){
	for(let n=0; n<categoryTitle.length; n++){
		categoryTitle[n].classList.remove('active');
	}

	activeItem.classList.add('active');
};



