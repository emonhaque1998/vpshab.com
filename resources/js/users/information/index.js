import InformationClasses from "./InformationClasses";

const information = new InformationClasses();

// Save informatoion Event
if (information.informationSaveForm) {
    information.informationSaveForm.addEventListener("submit", (e) => {
        e.preventDefault();
        information.saveInformation(e);
    });
}
