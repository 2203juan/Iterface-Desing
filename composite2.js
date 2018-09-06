function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];
    this.compositeProto = function(){
        var objectComposite ={
            add: function(product){
                console.log(product)
                arrayElements.push(product);
                return arrayElements;
            },

            remove: function (product){
                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
                return arrayElements;
            }        
            
        }
    return objectComposite
    }
}
function buildShoppingCar(lista){
    var car = new shoppingCar("paella");
    var resultCar;
    for (var i = 0; i < lista.length; i++) {
        resultCar = car.compositeProto().add(lista[i])
    }
    return resultCar;

}