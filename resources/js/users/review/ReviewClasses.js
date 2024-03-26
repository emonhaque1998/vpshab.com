export default class ReviewClasses{
    constructor(){
        this.quantityNumber = document.getElementById("quantityNumber");
        this.priceAmount = document.querySelectorAll("#priceAmount");
        this.getAmmount = document.getElementById("getAmmount");
        this.checkoutRequest = document.getElementById("checkoutRequest");
        this.productSlug = document.getElementById("productSlug");
    }

    amountCalculation(){
        this.priceAmount.forEach(item => {
            item.innerText = Number(this.getAmmount.value) * Number(this.quantityNumber.value)
        })

        this.checkoutRequest.href =  "/checkout/" + Number(this.getAmmount.value) * Number(this.quantityNumber.value) + "/" + this.productSlug.value;

    }
}
