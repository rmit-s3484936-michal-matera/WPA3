




var film = document.getElementById("film");
var genre = document.getElementById("genre");
var day = document.getElementById("day");
var priceSet;
var time = document.getElementById("time");


//Children Film------------------------------------------------------------------------------------------------------------------------
function btChMoF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Monday";
	priceSet = 1;
	document.getElementById("time").value= "13:00";
	document.getElementById("genre").value="CH";		
}
function btChTuF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Tuesday";
	priceSet = 1;
	document.getElementById("time").value= "13:00";
	document.getElementById("genre").value="CH";		
}
function btChWeF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Wednsday";
	priceSet = 2;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="CH";		
}
function btChThF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Thursday";
	priceSet = 2;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="CH";		
}
function btChFrF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Friday";
	priceSet = 2;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="CH";		
}
function btChSaF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Saturday";
	priceSet = 2;
	document.getElementById("time").value= "12:00";
	document.getElementById("genre").value="CH";		
}
function btChSuF(){	
	document.getElementById("film").value= "Finding Nemo 3D";
	document.getElementById("day").value= "Sunday";
	priceSet = 2;
	document.getElementById("time").value= "12:00";
	document.getElementById("genre").value="CH";		
}
//Action Film--------------------------------------------------------------------------------------------------------------------------
function btAcWeF(){	
	document.getElementById("film").value= "Batman Begins";
	document.getElementById("day").value= "Wednsday";
	priceSet = 2;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="AC";		
}
function btAcThF(){	
	document.getElementById("film").value= "Batman Begins";
	document.getElementById("day").value= "Thursday";
	priceSet = 2;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="AC";		
}
function btAcFrF(){	
	document.getElementById("film").value= "Batman Begins";
	document.getElementById("day").value= "Friday";
	priceSet = 2;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="AC";		
}
function btAcSaF(){	
	document.getElementById("film").value= "Batman Begins";
	document.getElementById("day").value= "Saturday";
	priceSet = 2;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="AC";		
}
function btACSuF(){	
	document.getElementById("film").value= "Batman Begins";
	document.getElementById("day").value= "Sunday";
	priceSet = 2;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="AC";		
}

//Romantic Comedy----------------------------------------------------------------------------------------------------------------------
function btRcMoF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Monday";
	priceSet = 1;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="RC";		
}
function btRcTuF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Tuesday";
	priceSet = 1;
	document.getElementById("time").value= "21:00";
	document.getElementById("genre").value="RC";		
}
function btRcWeF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Wednsday";
	priceSet = 1;
	document.getElementById("time").value= "13:00";
	document.getElementById("genre").value="RC";		
}
function btRcThF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Thursday";
	priceSet = 1;
	document.getElementById("time").value= "13:00";
	document.getElementById("genre").value="RC";		
}
function btRcFrF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Friday";
	priceSet = 1;
	document.getElementById("time").value= "13:00";
	document.getElementById("genre").value="RC";		
}
function btRcSaF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Saturday";
	priceSet = 2;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="RC";		
}
function btRcSuF(){	
	document.getElementById("film").value= "27 Dresses";
	document.getElementById("day").value= "Sunday";
	priceSet = 2;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="RC";		
}

//Foriegn Film-------------------------------------------------------------------------------------------------------------------------
function btAfMoF(){	
	document.getElementById("film").value= "Akira";
	document.getElementById("day").value= "Monday";
	priceSet = 1;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="AF";		
}
function btAfTuF(){	
	document.getElementById("film").value= "Akira";
	document.getElementById("day").value= "Tuesday";
	priceSet = 1;
	document.getElementById("time").value= "18:00";
	document.getElementById("genre").value="AF";		
}
function btAfSaF(){	
	document.getElementById("film").value= "Akira";
	document.getElementById("day").value= "Saturday";
	priceSet = 2;
	document.getElementById("time").value= "15:00";
	document.getElementById("genre").value="AF";		
}
function btAfSuF(){	
	document.getElementById("film").value= "Akira";
	document.getElementById("day").value= "Sunday";
	priceSet = 2;
	document.getElementById("time").value= "15:00";
	document.getElementById("genre").value="AF";		
}


//-------------------------------------------------------------------------------------------------------------------------------------



var saChPrice, spChPrice, scChPrice, faChPrice, fcChPrice, bbChPrice;


function calculateDayPrice(){
	if (priceSet ==  1){
		saChPrice = 12;
		spChPrice = 8;
		scChPrice = 10;
		faChPrice = 25;
		fcChPrice = 20;
		b1ChPrice = 20;
		b2ChPrice = 20;
		b3ChPrice = 20;		
	} 
	if (priceSet ==  2){
		saChPrice = 18;
		spChPrice = 12;
		scChPrice = 15;
		faChPrice = 30;
		fcChPrice = 25;
		b1ChPrice = 30;
		b2ChPrice = 30;
		b3ChPrice = 30;
	} 
}

var saPrice = document.getElementById("saPrice");
var spPrice = document.getElementById("spPrice");
var scPrice = document.getElementById("scPrice");
var faPrice = document.getElementById("faPrice");
var fcPrice = document.getElementById("fcPrice");
var b1Price = document.getElementById("b1Price");
var b2Price = document.getElementById("b2Price");
var b3Price = document.getElementById("b3Price");

function update(){

var saNum = document.getElementById("saNum").value;
var saToPrice =saChPrice*saNum;
document.getElementById("saPrice").value= "$" +  (saChPrice*saNum).toFixed(2);

var spNum = document.getElementById("spNum").value;
var spToPrice =spChPrice*spNum;
document.getElementById("spPrice").value= "$" + (spChPrice*spNum).toFixed(2);

var scNum = document.getElementById("scNum").value;
var scToPrice =scChPrice*scNum;
document.getElementById("scPrice").value= "$" + (scChPrice*scNum).toFixed(2);

var faNum = document.getElementById("faNum").value;
var faToPrice =faChPrice*faNum;
document.getElementById("faPrice").value= "$" + (faChPrice*faNum).toFixed(2);

var fcNum = document.getElementById("fcNum").value;
var fcToPrice =fcChPrice*fcNum;
document.getElementById("fcPrice").value= "$" + (fcChPrice*fcNum).toFixed(2);

var b1Num = document.getElementById("b1Num").value;
var b1ToPrice =b1ChPrice*b1Num;
document.getElementById("b1Price").value= "$" + (b1ChPrice*b1Num).toFixed(2);

var b2Num = document.getElementById("b2Num").value;
var b2ToPrice =b2ChPrice*b2Num;
document.getElementById("b2Price").value= "$" + (b2ChPrice*b2Num).toFixed(2);

var b3Num = document.getElementById("b3Num").value;
var b3ToPrice =b3ChPrice*b3Num;
document.getElementById("b3Price").value= "$" + (b3ChPrice*b3Num).toFixed(2);

document.getElementById("toPrice").value = "$" + (saToPrice + spToPrice + scToPrice + faToPrice + fcToPrice + b1ToPrice + b2ToPrice + b3ToPrice).toFixed(2);
}




function resetForm(){
	document.getElementById("bookingForm").reset();
}