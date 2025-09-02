const costValue = document.querySelector(".cost__value");
const showButton = document.querySelector(".cost__show-button");

showButton.addEventListener("click", () => {
    if(costValue.textContent.includes("BYN")) {
        const bynValue = parseInt(costValue.textContent.replace(/[^\d]/g, ''), 10);
        const rubValue =  Math.round(bynValue*30).toLocaleString();

        costValue.textContent = `от ${rubValue} RUB`;
        showButton.textContent = '(показать в BYN)';
    } else {
        const rubValue = parseInt(costValue.textContent.replace(/[^\d]/g, ''), 10);
        const bynValue =  Math.round(rubValue/30).toLocaleString();

        costValue.textContent = `от ${bynValue} BYN`;
        showButton.textContent = '(показать в RUB)';
    }
});