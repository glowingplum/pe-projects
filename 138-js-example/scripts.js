

var misCosasSimple = [
	"Agenda",
	"Lapicera",
	"Teclado",
	"Mouse",
	"Hojas",
	"Lampara",
	"Reloj",
	"Temporizador",
];

var misCosas = [
	{
		nombre: "Computadora",
		tipo: "electronica",
	},
	{
		nombre: "Agenda",
		tipo: "libreria",
	},
	{
		nombre: "Lapicera",
		tipo: "libreria",
	},
	{
		nombre: "Teclado",
		tipo: "electronica",
	},
	{
		nombre: "Mouse",
		tipo: "electronica",
	},
	{
		nombre: "Hojas",
		tipo: "libreria",
	},
	{
		nombre: "Lampara",
		tipo: "electricidad",
	},
	{
		nombre: "Reloj",
		tipo: "accesorio",
	},
	{
		nombre: "Temporizador",
		tipo: "accesorio",
	},
];

console.log("Libreria:")

misCosas.forEach( function ( cosa ) {
	//if item is stationery
	if( cosa.tipo == "libreria" ) {
		//put it on the list
		console.log( cosa.nombre);
	}
});

console.log("\nElectronica:")

misCosas.forEach( function ( cosa ) {
	//if item is computer stuff
	if( cosa.tipo == "electronica" ) {
		//put it on the list
		console.log( cosa.nombre);
	}
});

console.log("\nAccesorio:")

misCosas.forEach( function ( cosa ) {
	//if item is accesory
	if( cosa.tipo == "accesorio" ) {
		//put it on the list
		console.log( cosa.nombre );
	}
});

var accesorio = misCosas.filter( function(cosa) {
	return cosa.tipo == 'accesorio';
});

console.log( accesorio );


// create function - that accepts an array... and generates markup
// must have heading --- and create a list of the items....

function myClothes() {
	var clothing1name = prompt("Name of your favorite clothing piece:");
	var clothing1color = prompt("What color is it?");
	
	var clothing2name = prompt("Name of your second favorite clothing piece:");
	var clothing2color = prompt("What color is it?");	
	
	var clothing3name = prompt("Name of your third favorite clothing piece:");
	var clothing3color = prompt("What color is it?");

	var myWardrobe = [
		{
			name: clothing1name,
			color: clothing1color,
		},
		{name: clothing2name,
			color: clothing2color,
		},
		{name: clothing3name,
			color: clothing3color,
		},
	];

	myWardrobe.forEach( function( clothing, index ) {
		var index = index + 1;
		var item = document.createElement('li');
		item.textContent = "Clothing " + index + ": " + clothing.color + " " + clothing.name;
		document.body.appendChild(item);
	});

}

//myClothes();



// create function
// prompt for var1 with preferred thing's name (var1.name) and color (var1.color)
// prompt for var2 with preferred thing's name (var2.name) and color (var2.color)
// prompt for var3 with preferred thing's name (var3.name) and color (var3.color)
// create element heading 1
// create element var1 to var 3 with its name and color


function crearSeccionLista(items, heading) {

	var h2 = document.createElement('h2'); // must use quote marks
	h2.textContent = heading;
	document.body.appendChild(h2); //this is var, not html element

	var ol = document.createElement('ol');

	items.forEach( function( item ) {
		var li = document.createElement('li');
		li.textContent = item.nombre;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);

}


crearSeccionLista( accesorio, "Mis accesorios");









































