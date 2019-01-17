# Teste Prático de PHP para novos Colaboradores

O objetivo deste teste é conhecer suas habilidades em:

* PHP, MySQL, HTML, CSS e JavaScript;
* Entendimento e análise dos requisitos;
* Normalização de banco de dados;
* Integração com WebServices;

Deve ser realizado usando o Framework CakePHP versão 2 ou 3 com banco de dados MySQL.

## Problema

### Sistema de Vendas

* O cliente quer registrar vendas de produtos com a data da venda e endereço de entrega.
* Deve ser possível buscar produtos pelo nome ou referência;
* Na medida que vai adicionando os produtos na tela de venda, tem que mostrar em uma tabela o nome, preço e nome do(s) fornecedor(es) do produto adicionado quando existir. Deve também atualizar o valor total da venda; Exemplo:

|  Nome  |  Preço  |  Fornecedor(es)  |
| ------ | ------- | -----------------|
| Prod A | 2,50    | Forn A, Forn B   |
| Prod B | 10,00   |                  |
| Prod C | 5,00    | Forn D           |

**Total: 17,50**


* Deve ter um campo de CEP do endereço de entrega. Ao preencher esse campo deve buscar automaticamente a UF, nome da cidade, bairro e rua de entrega.
* Não pode salvar a venda sem informar o endereço completo de entrega;
* O cliente necessita ter o o histórico completo das vendas, com seus itens, valor total, data e endereço de entrega completo;

## Requisitos

* Criar um Modelo ER usando Workbench https://www.mysql.com/products/workbench/
* O cadastro de produtos deve conter nome, referência e preco.  Todos obrigatórios;
* O banco de dados deve tratar a questão de um produto ter vários fornecedores, você deve criar campos/tabelas para tal;
* O cadastro de fornecedores só precisa ter nome;
* O banco de dados não pode permitir 2 produtos com mesma referência;
* Usar AJAX para buscar produtos e JavaScript para atualizar a tabela de produtos da venda;
* Considere sempre quantidade 1 para cada item adicionado na tela de venda;
* Deve usar o webservice da ViaCEP para completar o endereço após preencher o campo CEP;
* Os preços dos produtos sofrem atualização semanal, isso não pode interferir no valor das vendas registradas e de seus produtos. Modele o banco de dados de tal forma a tratar essa questão;
* A única tela de cadastro que você precisa fazer é a de vendas, não precisa criar as telas de cadastro de produtos e fornecedores, somente suas tabelas no ER e banco de dados. Popule as tabelas diretamente no banco com INSERT's;
* Faça fork desse projeto e edite este README explicando como devo fazer para criar as tabelas e testar a tela de venda;
* Todos os arquivos necessários para rodar o projeto devem estar no repositório do github;


## Diferenciais

* Fazer a tela de venda responsiva (que se adapta a diferentes dispositivos);
* Usar testes unitários para qualquer parte do sistema