function addStudent(){
var name = document.getElementById("name").value;
var surname = document.getElementById("surname").value;
var faculty = document.getElementById("faculty").value;
var table = document.getElementById("students");
if (name==="" ){
	document.getElementById('name').style.border="5px solid red";
}
else if (surname===""){
	document.getElementById('surname').style.border="5px solid red";
}

else{
	var t = table.insertRow();
	var cell1 = t.insertCell();
	var cell2 = t.insertCell();
	var cell3 = t.insertCell();
	cell1.innerHTML = name;
	cell2.innerHTML = surname;
	cell3.innerHTML = faculty;
}
}

document.querySelector('button').addEventListener('click',addStudent);