import AllProductClasses from "./AllProductClasses";

const allProducts = new AllProductClasses();

//Showing product category wise using javascript
if(allProducts.allProductCetegorySelect){
    allProducts.allProductCetegorySelect.addEventListener("change", (e) => {
        e.preventDefault();
        allProducts.categoryWiseShowingProduct(e);
    })
}

