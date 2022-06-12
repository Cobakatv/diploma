const rengeSlider = document.getElementById("range-slider");


if (rengeSlider) {
    noUiSlider.create(rengeSlider, {
        start: [200, 10000],
        connect: true,
        step: 1,
        range: {
            'min': [200],
            'max': [10000]
        }
    });

    const input1 = document.getElementById("input1");
    const input2 = document.getElementById("input2");
    const inputs = [input1, input2];

    rengeSlider.noUiSlider.on('update', function(values, handle) {
        inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        let arr = [null, null];
        arr[i] = value;

        rengeSlider.noUiSlider.set(arr);
    };

    inputs.forEach((el, index) => {
        el.addEventListener('change', (e) => {
            setRangeSlider(index, e.currentTarget.value);
        });
    });

}