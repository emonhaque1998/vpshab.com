import axios from "axios";
import Extra from "./../../Extra";
export default class CountryClasses {
    constructor() {
        this.addCountryForm = document.querySelector("#countrySubmitForm");
        this.addCountrySubmitBtn = document.querySelector("#btnCountrySubmit");
        this.countryHtmlList = document.querySelector("#countryList");
        this.countryExtra = new Extra();
        this.countryList = document.querySelector("#countryList");
    }

    appentCountry(state) {
        const serial = this.countryList.children.length + 1;
        return (this.countryList.innerHTML += `
        <tr>
            <td>#${serial}</td>
            <td>${state.name}</td>
            <td>54</td>
            <td>
                <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title=""
                        data-bs-original-title="View detail" aria-label="Views"><i
                            class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title=""
                        data-bs-original-title="Edit info" aria-label="Edit"><i
                            class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title=""
                        data-bs-original-title="Delete" aria-label="Delete"><i
                            class="bi bi-trash-fill"></i></a>
                </div>
            </td>
        </tr>
    `);
    }

    async addState() {
        this.countryExtra.loading(this.addCountrySubmitBtn);

        const data = new FormData(this.addCountryForm);

        try {
            const response = await axios.post("country", data);
            if (response.status == 200) {
                this.countryExtra.loading(this.addCountrySubmitBtn);
                this.countryExtra.toast(response.data.message, "success");
                this.appentCountry(response.data.returnData);
            }
        } catch (error) {
            this.countryExtra.loading(this.addCountrySubmitBtn);
            this.countryExtra.toast(error.response.data.message, "error");
        }
    }
}
