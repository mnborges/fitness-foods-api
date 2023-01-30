<div align="center">
  <h1>Fitness Foods API</h1>
  <p>
    REST API para fácil acesso às informações nutricionais dos mais diversos produtos!
  </p>
</div>
<br />

## Sobre o projeto

Desenvolvido para solução do desafio PHP Challenge 20200916 da [Coodesh](https://coodesh.com/), que estabelece que o objetivo da API é auxiliar nutricionistas da empresa Fitness Foods LC através do acesso aos dados do projeto [Open Food Facts](https://br.openfoodfacts.org/), além de outras regras e orientações.

## Stack

  <ul>
    <li><a href="https://laravel.com/">Laravel</a></li>
    <li><a href="https://www.php.net/">PHP</a></li>
    <li><a href="https://www.mysql.com/">MySQL</a></li>
    <li><a href="https://www.docker.com/">Docker</a></li>
  </ul>

## Pré-requisitos

Apenas [Docker Desktop](https://www.docker.com/products/docker-desktop/), [Git](https://git-scm.com/downloads) e seus próprios requisitos são necessários para execução dessa aplicação.

## Execução passo a passo

1. Clone este repositório e acesse o caminho para o diretório do projeto no terminal

    Exemplo:

    ```bash
    git clone https://github.com/mnborges/fitness-foods-api.git
    cd fitness-foods-api
    ```

2. Copie as variáveis de ambiente declaradas em [.env.example](.env.example) para um novo arquivo .env na raiz do projeto, ou apenas renomeie .env.example para .env

    Exemplo:

    ```bash
    cp .env.example .env
    ```

    Observe que a variável `APP_KEY` está indefinida, essa chave será gerada nos próximos passos.

3. Instale as dependências do projeto utilizando a imagem Docker do gerenciador de dependências Composer

    ```bash
    docker run --rm -u "$(id -u):$(id -g)" -v "$(pwd):/var/www/html" -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs
    ```

    Essa etapa pode levar alguns minutos.

4. Construa e execute o docker container

    ```bash
    ./vendor/bin/sail up
    ```

    Caso ache conveniente, é possível configurar um alias para executar os comandos da interface Sail mais facilmente, veja como na [documentação do Laravel](https://laravel.com/docs/9.x/sail#configuring-a-shell-alias).

5. Abra uma nova sessão em seu terminal e execute o seguinte comando para gerar uma chave para a variável de ambiente `APP_KEY` no arquivo .env

    ```bash
    ./vendor/bin/sail php artisan key:generate
    ```

6. Execute a migração do banco de dados

    ```bash
    ./vendor/bin/sail php artisan migrate
    ```

7. Processe os testes através do comando seguinte para verificar que todos os endpoints estão acessíveis e adequados

    ```bash
    ./vendor/bin/sail php artisan test
    ```

8. Verifique a aplicação em funcionamento no endereço [localhost](https://localhost).

    Para interromper a execução do docker container pressione Control+C na sessão de terminal do passo 4, ou utilize o comando seguinte em outra sessão

    ```bash
     ./vendor/bin/sail down
    ```

## Contato

Maieza N. Borges - [LinkedIn](https://www.linkedin.com/in/maieza-borges-903895b8/) - maieza.borges@gmail.com
