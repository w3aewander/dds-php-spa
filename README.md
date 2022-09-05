# DDS-PHP-SPA
### Exemplo em PHP de uma aplicação SPA - Simple Page Application

> por Wanderlei Silva do Carmo <wander.silva@gmail.com>

Uma aplicação SPA, do inglês Simple Page Application usa uma abordagem onde o desenvolvimento da aplicação é realizada em página única, ou seja, apenas uma páginas principal, geralemente um index.html ou index.php.

Segundo o site devmedia 
_O que são Single Page Applications SPA, ou Single Page Application, é uma aplicação em que todas as funcionalidades estão em uma única página
Ao invés de recarregar a página toda, só uma parte do conteúdo muda
Single Page Applications (SPA) são aplicações cuja funcionalidade está concentrada em uma única página. Ao invés de recarregar toda a página ou redirecionar o usuário para uma página nova, apenas o conteúdo principal é atualizado de forma assíncrona, mantendo toda a estrutura da página estática._

Assim sendo, as interações com a página, bem como o carregamento de dados, são realizados via requisições AJAX - Asynchron JavaScript And XML, sem recarregar página.

## Requisições HTTP
### Verbos HTTP
![Requisições HTTP](https://bytesofgigabytes.com/IMAGES/Networking/HTTPcommuncation/http%20communication.png 'Requisições HTTP')

**Fonte:** https://bytesofgigabytes.com/IMAGES/Networking/HTTPcommuncation/http%20communication.png. Acesso em: 05, setembro de 2022.

## O que aprenderemos neste projeto?

1. Utilizar técnicas para carregar conteúdo dinamicamente sem recarregar toda a página.

2. Utilizar os principais verbos HTTP nas requisições: GET, POST, PUT, DELETE, PATH, OPTION, etc.

### Verbos HTTP
![Verbos HTTP](https://dericferreira.files.wordpress.com/2014/10/ic303440.png 'Verbos HTTP')

**Fonte:** https://dericferreira.files.wordpress.com/2014/10/ic303440.png. Acesso em: 05, setembro de 2022.

### O que é CRUD?

CRUD é uma sigla e um acrônimo que abarca as principais operações com dados na WEB. Estas operações geralmente são oferecidas via API - Application Programming Interface. As operações são explcadas a seguir:

1. C -> Create - criar um novo registro no banco de dados
2. R -> Retrieve (ou read) - Obtém um ou mais registros 3. U -> Atualiza um ou mais registros em um banco de dados
4. D -> Delete - excluir um ou mais registros em um banco de dados.

### O que tem a ver os verbos HTTP com o CRUD?
1. O verbo GET - Envia ou  obtém os dados necessários. Neste caso esta requisição solicita os dados para API e os apresenta no navegador ou os entrega para a aplicação que os solicitou.

2. O verbo POST - Envia os dados para a API. Geralmente é enviada uma solicitação para a API criar um novo recurso. A diferença entre o envio via GET e POST é que na requisição GET os dados são exibidos na URL do navegador e o envio via POST é encapsulado no formulário de que os enviou, não sendo visível na URL.

3. O verbo PUT - Envia os dados para a API e caso este exista será atualizada. Utilize este verbo sempre que se desejar solicitar que a API atualize os dados.

4. O verbo DELETE - Envia uma requisição para exclusão dos dados ou recursos.

#### Aprenderemos a realizar requisições http via AJAX em breve.



