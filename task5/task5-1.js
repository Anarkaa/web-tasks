function onClick(){
	var s11 = parseInt(document.getElementById("s11").value);
	var s12 = parseInt(document.getElementById("s12").value);
	var s13 = parseInt(document.getElementById("s13").value);
	var s21 = parseInt(document.getElementById("s21").value);
	var s22 = parseInt(document.getElementById("s22").value);
	var s23 = parseInt(document.getElementById("s23").value);
	var s31 = parseInt(document.getElementById("s31").value);
	var s32 = parseInt(document.getElementById("s32").value);
	var s33 = parseInt(document.getElementById("s33").value);
	var sum = [s11,s12,s13,s21,s22,s23,s31,s32,s33];

	for (var i =0; i<sum.length; i++) {
		var result = (sum[0]*sum[4]*sum[8]+sum[1]*sum[5]*sum[6]+sum[2]*sum[3]*sum[7])-(sum[6]*sum[4]*sum[2]+sum[0]*sum[5]*sum[7]+sum[1]*sum[3]*sum[8]);
	}
	document.getElementById('result').innerHTML = result;
}

const button = document.querySelector('button');
button.addEventListener('click', onClick);
