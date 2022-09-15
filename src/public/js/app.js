/**
 * 
 * Aplicativo exemplo emp PHP
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

const app = document.getElementById('app')
const ancora = document.querySelectorAll('a')

ancora.forEach((e) => {

    e.addEventListener('click', (evt) => {
        evt.preventDefault()

        carregarPagina(e.getAttribute('data-target'))

    })

})

document.addEventListener('DOMContentLoaded', () => {

})


/**
 * Carrega a página informada no parâmetro de entrada da função
 * @param {*} pagina 
 */
const carregarPagina = (pagina, callback) => {

    fetch(`${pagina.toLowerCase()}.html`)
        .then(resp => resp.text())
        .then(resp => app.innerHTML = resp)

    if (callback !== undefined) {
        setTimeout(() => {
            callback()
        }, 500)
    }

}


/**
 * Carregar Alunos
 * 
 */

const carregarTurmas = () => {
    let tbody = ""

    fetch("/turmas.php")
        .then(resp => resp.json())
        .then(resp => {

            resp.dados.forEach(turma => {

                tbody += `<tr>
                            <td>${turma.id}</td>
                            <td>${turma.nome}</td>
                    </tr>`

            })

            document.getElementById('tbody').innerHTML = tbody
        })

}


/**
 * Carregar Alunos
 * 
 */

const carregarAlunos = () => {
    let tbody = ""

    fetch("/alunos.php")
        .then(resp => resp.json())
        .then(resp => {

            resp.dados.forEach(aluno => {

                tbody += `<tr>
                            <td>${aluno.nome}</td>
                            <td>${aluno.semestre}</td>
                            <td>${aluno.pontos}</td>
                    </tr>`

            })

            document.getElementById('tbody').innerHTML = tbody

            setTimeout( () => { obterOptTurmas() }, 2000 )
        })

}

/**
 * Carregar frequencia dos alunos
 */
const carregarFrequencia = () => {

    setTimeout(() => {


        let frequencia = ""

        frequencia += `<tr>
                          <td>Aluno1</td><td>29-08-2022</td>
                          <td><input name="checkbox-alunoId" 
                                     type="checkbox" 
                                     value="1">
                          </td>
                      </tr>`

        document.getElementById("tb-frequencia").innerHTML = frequencia

    }, 500)

}

const obterOptTurmas = () => {


    fetch("/turmas.php")
        .then(resp => resp.json())
        .then(resp => {
            document.getElementById("opt-turmas").innerHTML = '<option selected value="">Escolha uma turma... </option>'
            
            setTimeout(() => {
                resp.dados.forEach(turma =>
                    document.getElementById("opt-turmas").innerHTML += `<option value="${turma.id}">${turma.nome}</option>`)
            }, 50)
        })
}