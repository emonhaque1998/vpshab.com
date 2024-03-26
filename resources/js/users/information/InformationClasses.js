import Extra from "../../Extra";

export default class InformationClasses extends Extra {
    constructor() {
        super();
        this.informationSaveForm = document.getElementById(
            "userInformationForm"
        );
        this.informationSubmitBtn = document.getElementById(
            "user_information_save_btn"
        );
    }

    async saveInformation(event) {
        this.loading(this.informationSubmitBtn);
        const data = new FormData(this.informationSaveForm);

        try {
            const response = await axios.post("account-setting", data);
            if (response.status == 200) {
                this.loading(this.informationSubmitBtn);
                this.toast(response.data.message, "success");
            }
        } catch (error) {
            this.loading(this.informationSubmitBtn);
            this.toast(error.response.data.message, "error");
        }
    }
}
