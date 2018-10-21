let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

let countr = document.querySelector("#countries");
let cbc = document.querySelector("#cities");



for(let i=0; i<countries.length; i++){
    let option = document.createElement("option");
    option.text = countries[i];
    document.querySelector('#countries').appendChild(option);
}

function f(){
    
    let item = document.getElementById("countries").value;
    
    let opt = cbc.querySelectorAll("option");
    for(let i=0;i<opt.length;i++){
        opt[i].remove();   
    
    }
    for(let i =0; i<cities_by_country[item].length; i++){
        let cities = document.createElement("option");
        let val = document.getElementById("countries").value;
        cities.textContent = cities_by_country[val][i];
        document.querySelector('#cities').appendChild(cities);
    }
    
}
document.querySelector("#countries").addEventListener("change",f);

