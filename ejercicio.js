function par(edad) {
	var years = edad*365
	var array = []
	if (edad%2==0) {
		return years.toString()
	}
	else{
		array.push(edad)
		array.push(years)
		return array
	}
}
function pedir(){
	var edad = prompt("Digite su edad")
	console.log(par(edad))
}
