var today = moment().format('YYYY-MM-DD');
document.getElementById("DateBox").value = today;
function ADD(clickID, merchType){
	//Declare Variables
	var price    = parseInt(document.getElementById(clickID + 'Earn').value, 10);
	var num      = parseInt(document.getElementById(clickID + 'Quan').value, 10);
        //Check variables arent blank
	price = isNaN(price) ? 0 : price;
	num =   isNaN(num  ) ? 0 : num;        
        switch(merchType){
            case "-CD":
                priceInc = -5;
                num += -1;
                break;
            case "CD":
                priceInc = 5;
                num += 1;
                break;
            case "-Shirt":
                priceInc = -10;
                num += -1;
                break;
            case "Shirt":
                priceInc = 10;
                num += 1;
                break;
            case "-Poster":
                priceInc = -3;
                num += -1;
                break;
            case "Poster":
                priceInc = 3;
                num += 1;
                break;
        }
	//Increment
	price+=priceInc;
	//Set parent values
	document.getElementById(clickID + 'Earn').value = price;
	document.getElementById(clickID + 'Quan').value = num; 
}
function CLEAR(clickID){
	document.getElementById(clickID + 'Earn').value = "";
	document.getElementById(clickID + 'Quan').value = ""; 
}