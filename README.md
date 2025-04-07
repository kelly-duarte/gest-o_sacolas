#  Gestão de Personalização de Sacolas

Sistema desenvolvido para auxiliar na gestão de pedidos de personalização de sacolas, permitindo o cadastro de clientes, informações dos pedidos e especificações dos produtos.

##  Estrutura do Projeto


## Funcionalidades

- Tela de login simples (`front_index.html`)
- Tela de cadastro de pedidos e clientes (`index.html`)
- Armazenamento dos dados em banco de dados (via `cadastro.php`)
- Listagem de registros cadastrados (`listar.php`)
- Conexão com o banco via `conexao.php`

## Como executar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/index.html)
2. Copie a pasta `GestaoSacolas` para dentro de `C:/xampp/htdocs`
3. Execute o XAMPP e inicie o Apache e MySQL
4. No navegador, acesse: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Crie um banco com o nome `gestao_sacolas`
   - Importe o arquivo `banco.sql`
5. Acesse o sistema:
   - Página de login: [http://localhost/GestaoSacolas/front_index.html](http://localhost/GestaoSacolas/front_index.html)
   - Página de cadastro: [http://localhost/GestaoSacolas/index.html](http://localhost/GestaoSacolas/index.html)

##  Desenvolvedores

- Kelly Duarte
- Larissa Alves
- André Felipe Simões

##  Observações

Este repositório foi criado com fins acadêmicos para a disciplina de Projeto Integrador I. O front-end foi inicialmente entregue em documento Word e convertido para HTML com ajuda colaborativa.
