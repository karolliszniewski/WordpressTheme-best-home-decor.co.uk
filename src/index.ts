import "./styles/index.scss"
import "./styles/page-my-account.scss"
import "./styles/product-archive.scss"
import "./styles/single-product.scss"
import "./styles/cart.scss"
import './utils/toggle';
import './utils/youtube';
import './utils/affiliate';
import './utils/slider';



document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.querySelector('.woocommerce-ordering') as HTMLSelectElement;
    
    if (selectElement) {
        const formElement = selectElement.closest('form') as HTMLFormElement;

        selectElement.addEventListener('change', function () {
            formElement.submit();
        });
    }
});
