var itens = document.querySelectorAll('.subtitulo__mobile');

    let closed = true;

    itens.forEach(item => {
        item.addEventListener('click', () => {
            const box = item.nextElementSibling;
            let seta = item.querySelector('.subtitulo__icon');

            if(closed) {
                seta.classList.remove('fa-angle-down');
                seta.classList.add('fa-angle-up');
            } else {
                seta.classList.add('fa-angle-down');
                seta.classList.remove('fa-angle-up');
            }
            
            closed = !closed;

            box.toggleAttribute('data-open');
        })
    })