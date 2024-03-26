import ReviewClasses from "./ReviewClasses";

const review = new ReviewClasses();

if(review.quantityNumber){
    review.quantityNumber.addEventListener("change", (e) => {
        review.amountCalculation();
    })
}
