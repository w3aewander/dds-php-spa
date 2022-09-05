# DDS-PHP-SPA
### Exemplo em PHP de uma aplicação SPA - Simple Page Application

> por Wanderlei Silva do Carmo <wander.silva@gmail.com>

# Aplicação WEB com PHP 
## HTML, CSS, JavaScript 
Vamos aprender a tríplice aliança HTML, CSS e JAVASCRIT.
> Só pra deixar claro: JavaScript não é JAVA? Pequisem sobre as diferenças entre elas! Posso adiantar que em geral JavaScript precisa do Browser (temos outra abordagem onde o JS é renderizado no lado do servidor, mas aí já é outra história.)

HTML - Hypertext Transfer Protocol - é responsável pelo texto ou o conteúdo da página propriamante dito. Dizemos então que o HTML exibe o conteúdo estático.

JS - ou JavaScript - é responsável pelo dinamismo da página. Requisição de dados, injeção de conteúdo automaticamente, animações e outras operações dinâmicas.

CSS - CASCADE, STYLESHEET ou Folha de Estilo em Cascata provê a apresentação visual da página - equilibrio de cores, animações, o "Look and Feel". É muito importante pois o bom uso das técnicas CSS garantem um site bonito, funcional e atraente para o público.

Para enterermos melhor temos que conhecer o DOM.

## DOM - Document Object Model 

![DOM - document object model](https://www.optimizesmart.com/wp-content/uploads/2014/05/HTML-DOM-Tree.jpg 'Document Object Model')

**Fonte:** https://www.optimizesmart.com/wp-content/uploads/2014/05/HTML-DOM-Tree.jpg. Acesso em: 05, setembro de 2022.


É uma árvore hierárquica que deve ser bem conhecida do desenvolvedor WEB pois é nela que trabalharemos para dar todo o dinamismo necessario para criar sites atraentes.

## Aplicação WEB - SPA
Uma aplicação SPA, do inglês Simple Page Application usa uma abordagem onde o desenvolvimento da aplicação é realizada em página única, ou seja, apenas uma páginas principal, geralemente um index.html ou index.php.

Segundo o site devmedia  
_"Single Page Applications (SPA) são aplicações cuja funcionalidade está concentrada em uma única página. Ao invés de recarregar toda a página ou redirecionar o usuário para uma página nova, apenas o conteúdo principal é atualizado de forma assíncrona, mantendo toda a estrutura da página estática."_ [(DEVMEDIA,2021)](https://www.devmedia.com.br/ja-ouviu-falar-em-single-page-applications/39009#:~:text=Single%20Page%20Applications%20(SPA)%20s%C3%A3o,a%20estrutura%20da%20p%C3%A1gina%20est%C3%A1tica. 'O que são Single Page Application')

Assim sendo, as interações com a página, bem como o carregamento de dados, são realizados via requisições AJAX - Asynchron JavaScript And XML, sem recarregar página.

## Requisições HTTP
### Verbos HTTP
![Requisições HTTP](https://bytesofgigabytes.com/IMAGES/Networking/HTTPcommuncation/http%20communication.png)(https://bytesofgigabytes.com/IMAGES/Networking/HTTPcommuncation/http%20communication.png)

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
2. R -> Retrieve (ou read) - Obtém um ou mais registros 
3. U -> Atualiza um ou mais registros em um banco de dados
4. D -> Delete - excluir um ou mais registros em um banco de dados.

### O que tem a ver os verbos HTTP com o CRUD?
1. O verbo GET - Envia ou  obtém os dados necessários. Neste caso esta requisição solicita os dados para API e os apresenta no navegador ou os entrega para a aplicação que os solicitou.

2. O verbo POST - Envia os dados para a API. Geralmente é enviada uma solicitação para a API criar um novo recurso. A diferença entre o envio via GET e POST é que na requisição GET os dados são exibidos na URL do navegador e o envio via POST é encapsulado no formulário de que os enviou, não sendo visível na URL.

3. O verbo PUT - Envia os dados para a API e caso este exista será atualizada. Utilize este verbo sempre que se desejar solicitar que a API atualize os dados.

4. O verbo DELETE - Envia uma requisição para exclusão dos dados ou recursos.

#### Aprenderemos a realizar requisições http via AJAX em breve.

## Um breve estudo sobre manipulação do DOM com JavaScript
TAG, Atributos, Nós, Children, Child, Siblings, 

### Exemplo de TAG's HTML:

<html>, <head>, <body>  - Demarcam estruturas de uma página

<meta> - Fornecem metainformações sobre a página

<h1> - Níveis de cabeçalhos - utilizados em títulos, subtitulos, etc. (h1,h2,h3,h4,h5,h6)

<BR> - Quebra de linha

<p> - Parágrafos

<div> - Separação em camadas - um layer - ou uma delimitação de conteúdo como se fosse uma caixa ;)

<em>  - Enfase de texto 

<ol> - Lista não ordenada

<ul> - Lista não ordenada

<li> - Item da lista

<hr> - Linha horizontal

<session> - Divide o conteúdo da página em sessões

<style></style> - Bloco para inserção de estilos internos válidos somente para a página atual

<link > - Cria uma referencia externa para um arquivo contendo estilos

<script></script> - Bloco para inserção de arquivos JS.

#### TAGs semânticas:
São TAG's que pelo seu nome já se infere o conteúdo por ela delimitado.

HEADER, MAIN, CONTENT, FOOTER, ARTICLE


## Atributos de TAG's HTML

- src

- rel

- class

- data-*
