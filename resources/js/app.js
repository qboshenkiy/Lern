document.addEventListener('click', (event) => {
    if (!(event.target instanceof Element)) {
        return;
    }

    const dismissButton = event.target.closest('[data-dismiss-alert]');

    if (dismissButton) {
        dismissButton.closest('.alert')?.remove();
    }
});

document.querySelectorAll('.alert').forEach((alert) => {
    window.setTimeout(() => {
        alert.classList.add('alert--leaving');
        window.setTimeout(() => alert.remove(), 200);
    }, 8000);
});
