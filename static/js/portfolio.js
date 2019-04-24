function projectsToggle(x){
	switch(x){
		case 1: var element = document.getElementById("page_antiSocialMode"); break;
		case 2: var element = document.getElementById("page_towerOfHanoi"); break;
		case 3: var element = document.getElementById("page_nameGenerator"); break;
		case 4: var element = document.getElementById("page_saveNewton"); break;
		case 5: var element = document.getElementById("page_tickIT"); break;
		case 6: var element = document.getElementById("page_speakEasy"); break;
		case 7: var element = document.getElementById("page_MIPS"); break;
		case 8: var element = document.getElementById("page_cPlusPlus"); break;
	}

	if(!element.style.display || element.style.display == "none"){
		page_antiSocialMode.style.display = "none";
		page_towerOfHanoi.style.display = "none";
		page_nameGenerator.style.display = "none";
		page_saveNewton.style.display = "none";
		page_tickIT.style.display = "none";
		page_speakEasy.style.display = "none";
		page_MIPS.style.display = "none";
		page_cPlusPlus.style.display = "none";
		page_portfolio.style.display = "none";
		element.style.display = "block";
	} else {
		element.style.display = "none";
		page_portfolio.style.display = "block";
	}
}
