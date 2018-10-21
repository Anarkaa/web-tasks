let tasks = document.querySelector("#tasks");
let div = tasks.querySelectorAll("div");

for(let i=0; i<div.length; i++){
	console.log(i);
	let btn = div[i].querySelector("button");
	btn.addEventListener("click",function(){
		div[i].dataset.status = ('done');
	});
}


