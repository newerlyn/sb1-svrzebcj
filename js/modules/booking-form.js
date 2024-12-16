/**
 * Booking Form Module
 */
export function initBookingForm() {
    const bookingForm = document.getElementById('booking-form');
    if (!bookingForm) return;

    bookingForm.addEventListener('submit', handleSubmit);
}

function handleSubmit(e) {
    e.preventDefault();
    
    if (!validateForm(this)) return;
    
    submitForm(this);
}

function validateForm(form) {
    const required = form.querySelectorAll('[required]');
    let isValid = true;

    required.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.classList.add('error');
        } else {
            field.classList.remove('error');
        }
    });

    return isValid;
}

function submitForm(form) {
    const formData = new FormData(form);
    formData.append('action', 'studiokiss_booking');
    formData.append('nonce', studiokiss.nonce);

    fetch(studiokiss.ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            form.reset();
            alert('Thank you! Your booking request has been sent.');
        } else {
            alert('There was an error. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error. Please try again.');
    });
}