const forms = document.querySelectorAll('.delete-form');

forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const comicName = form.getAttribute('data-delete');
        const hasConfirmed = confirm(`Sei sicuro di voler eliminare il fumetto "${comicName}"?`);
        if(hasConfirmed) form.submit();
    })
})