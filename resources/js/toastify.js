window.addEventListener('notify', function (event) {
    const {type, message} = event.detail[0]
    if (type === 'error') {
        Toastify({
            text: message,
            duration: 5000,
            destination: "",
            newWindow: true,
            close: true,
            gravity: "bottom", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #c21800, #e63900)",
            },
            onClick: function(){} // Callback after click
        }).showToast();
    }

    if (type === 'success') {
        Toastify({
            text: message,
            duration: 5000,
            destination: "",
            newWindow: true,
            close: true,
            gravity: "bottom", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function(){} // Callback after click
        }).showToast();
    }
})

