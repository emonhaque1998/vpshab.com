export default class CheckoutClasses{
    constructor(){
        this.countryList = document.querySelector("#countryList");
        this.stateList = document.querySelector("#stateList");
        this.loadingEffect = document.querySelector("#cover-spin");
    }

    async selectCountryChangeState(event){
        this.loadingEffect.style.display = "block"
        this.stateList.innerHTML = `
            <option value="">Select State</option>
        `;
        try{
            const response = await axios.get(`/check-country-state/${event.target.value}`);

            if(response.data.result){
                response.data.result.forEach(element => {
                    var child = document.createElement("option");
                    child.textContent = element.name;
                    this.stateList.appendChild(child)
                    this.loadingEffect.style.display = "none"
                });
            }
            this.loadingEffect.style.display = "none"
        }catch(error){
            console.log(error);
        }
    }
}
