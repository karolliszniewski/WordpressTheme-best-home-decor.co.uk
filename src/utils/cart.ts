// minus buttons
const minusQuantityElements: NodeListOf<HTMLElement> = document.querySelectorAll('.table__minus');
const minusQuantity: HTMLElement[] | null = minusQuantityElements.length > 0 ? Array.from(minusQuantityElements) : null;

// plus buttons
const plusQuantityElements: NodeListOf<HTMLElement> = document.querySelectorAll('.table__plus');
const plusQuantity: HTMLElement[] = plusQuantityElements.length > 0 ? Array.from(plusQuantityElements) : null;

function adjustInputValue(isAddition: boolean) {
    return function(event: Event) {
        event.preventDefault();

        const element = event.currentTarget as HTMLElement;
        const key = element.dataset.key;
        const input = document.querySelector(`input.table__input[data-key="${key}"]`) as HTMLInputElement | null;
console.log('here ok')
        if (input) {
            const currentValue = parseInt(input.value, 10);
            const newValue = isNaN(currentValue) ? 1 : isAddition ? currentValue + 1 : currentValue - 1;
            input.value = newValue.toString();


            //submit form after change (submit form doesnt work so submit button is used instead)
            const submitButton = document.querySelector('button[type="submit"]') as HTMLButtonElement | null;
            if (submitButton) {
                submitButton.click();
            }

        

            // remove from basket if value is 0
            if(newValue === 0){
                const deleteLink = document.querySelector(`a.remove[data-key="${key}"]`) as HTMLAnchorElement | null;
                if(deleteLink){
                    deleteLink.click();
                }
            }
        }
    };
}
if(plusQuantity && minusQuantity){
plusQuantity.forEach(element => {
    element.addEventListener('click', adjustInputValue(true));
});

minusQuantity.forEach(element => {
    element.addEventListener('click', adjustInputValue(false));
});
}



