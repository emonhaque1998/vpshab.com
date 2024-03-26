import axios from "axios";
import CheckoutClasses from "./CheckoutClasses";

const checkOut = new CheckoutClasses();  
// Select country after change State automaticaly
if(checkOut.countryList){
    checkOut.countryList.addEventListener("change", async (e)=>{
        e.preventDefault();
        checkOut.selectCountryChangeState(e);
    });
}