
function busca() {
    const formDados = document.getElementById('buscaProduto')
    const submitHandler = function (event) {
        event.preventDefault()
        const form = event.target
        const formData = new FormData(form)
        formData.append('', '');
        fetch('buscar.php', {
            method: 'POST',

            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                console.log(data)
            })

    }

    formDados.addEventListener('submit', submitHandler);
}