/**
 * 
 * Aplicativo exemplo emp PHP
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

const app = document.getElementById('app')
const ancora = document.querySelectorAll('a')

document.addEventListener('DOMContentLoaded', () => {
    
    ancora.forEach( ( e ) =>{
    
        e.addEventListener('click', (evt) => {  
             evt.preventDefault()
    
             carregarPagina( e.getAttribute('data-target') )
             
        })
    
    })

})


/**
 * Carrega a página informada no parâmetro de entrada da função
 * @param {*} pagina 
 */
const carregarPagina = (pagina, callback) => {
    
    fetch(`${pagina.toLowerCase()}.html`)
        .then( resp => resp.text() )
        .then( resp => app.innerHTML = resp  )

        if (callback !== undefined) { 
            setTimeout( () => { 
                callback()
            }, 500 )
        }

}

/**
 * Carregar Alunos
 * 
 */

const carregarAlunos = () => {
let tbody = ""

fetch("/alunos.php")
     .then (resp => resp.json())
     .then (resp => {
    
        resp.dados.forEach( aluno => {
                    
                    tbody += `<tr>
                            <td>${aluno.nome}</td>
                            <td>${aluno.semestre}</td>
                            <td>${aluno.pontos}</td>
                    </tr>`
      
         })

        document.getElementById('tbody').innerHTML = tbody
    })

}

/**
 * Carregar frequencia dos alunos
 */
const carregarFrequencia = () => {  

  setTimeout( () => {

    
  let frequencia = ""

    frequencia +=   `<tr>
                          <td>Aluno1</td><td>29-08-2022</td>
                          <td><input name="checkbox-alunoId" 
                                     type="checkbox" 
                                     value="1">
                          </td>
                      </tr>`
 
    document.getElementById("tb-frequencia").innerHTML = frequencia

    }, 500)

}