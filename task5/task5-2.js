function image_load() {
  let c = event.currentTarget;
  let x = c.src;

  document.getElementById("bigImage").src = x;
	
};
document.querySelector("#q").addEventListener('click',image_load);
document.querySelector("#w").addEventListener('click',image_load);
document.querySelector("#e").addEventListener('click',image_load);
document.querySelector("#a").addEventListener('click',image_load);
document.querySelector("#s").addEventListener('click',image_load);