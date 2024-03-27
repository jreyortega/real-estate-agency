let priceGap = 100000;

/************ PRICE SLIDER ************/

const rangeInput = document.querySelectorAll('.range-input input');
const progress = document.querySelector('.slider .progress');
const priceInput = document.querySelectorAll('.price-input input');

// Initialize slider progress
let minVal = parseInt(priceInput[0].value);
let maxVal = parseInt(priceInput[1].value);
let minPos = (minVal / rangeInput[0].max) * 100;
let maxPos = (maxVal / rangeInput[1].max) * 100;
progress.style.left = minPos + '%';
progress.style.right = 100 - maxPos + '%';

/* Update slider value */
function updateSliderValue() {
    priceInput.forEach(input => {
        input.addEventListener('input', (e) => {
            let minVal = parseInt(priceInput[0].value);
            let maxVal = parseInt(priceInput[1].value);

            if ((maxVal - minVal >= priceGap) && maxVal <= 5000000 && minVal >= 0) {
                if (e.target.className === "input-min") { // if active slider is min
                    rangeInput[0].value = minVal;
                    progress.style.left = (minVal / rangeInput[0].max) * 100 + '%';
                } else {
                    rangeInput[1].value = maxVal;
                    progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + '%';
                }
            } else if (maxVal - minVal < priceGap) {
                if (e.target.className === "input-min") { // if active slider is min
                    console.log('min');
                    rangeInput[0].value = maxVal - priceGap;
                    progress.style.left = ((maxVal - priceGap) / rangeInput[0].max) * 100 + '%';
                } else {
                    console.log('max');
                    rangeInput[1].value = minVal + priceGap;
                    progress.style.right = 100 - ((minVal + priceGap) / rangeInput[1].max) * 100 + '%';
                }
            } else if (maxVal > 5000000) {
                rangeInput[1].value = 5000000;
                priceInput[1].value = 5000000;
            } else if (minVal < 0) {
                rangeInput[0].value = 0;
                priceInput[0].value = 0;
            }
        });
    });
}

// Call the function to update slider value when the page loads
window.addEventListener('load', updateSliderValue);

// Add event listener to price input for real-time updates
priceInput.forEach(input => {
    input.addEventListener('input', updateSliderValue);
});

/* Update price value */
rangeInput.forEach(input => {
    input.addEventListener('input', (e) => {
        let minVal = parseInt(rangeInput[0].value);
        let maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") { // if active slider is min
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            progress.style.left = (minVal / rangeInput[0].max) * 100 + '%';
            progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + '%';
        }
    });
});

/************ BED SLIDER ************/

/************ BATH SLIDER ************/

/************ SQUARE FEET SLIDER ************/

/************ LOT SIZE SLIDER ************/

