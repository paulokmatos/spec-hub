# Spec-Hub
Spec-Hub é um projeto que fornece um dashboard centralizado para gerenciar a autenticação de usuários que acessam diversos serviços, como Horizon, Telescope, Pulse, Log-Viewer, entre outros, utilizando Laravel e Laradock com MySQL.

## Visão Geral
O Spec-Hub é uma ferramenta que simplifica o gerenciamento de acessos a diferentes serviços de monitoramento e logging. Com uma interface amigável, você pode controlar quem pode acessar cada serviço e visualizar métricas importantes de forma centralizada.

![image](https://github.com/paulokmatos/spec-hub/assets/68530385/9aed46c5-560f-4b06-bf20-4cf8fbe5f5fd)

### Recursos
- **Autenticação Centralizada:** Gerencie acessos a múltiplos serviços a partir de um único dashboard.
- **Interface Intuitiva:** Interface de usuário simples e eficiente para facilitar o uso.
- **Suporte a Múltiplos Serviços:** Integração com Horizon, Telescope, Pulse, Log-Viewer, e outros.
- **Segurança:** Controle de acesso robusto para garantir que apenas usuários autorizados tenham acesso.

### Pré-requisitos
Certifique-se de ter os seguintes softwares instalados:

- Docker
- Docker Compose
- Git

## Instalação
Para instalar o Spec-Hub, siga os passos abaixo:

1 - Clone o repositório:

```` bash
git clone https://github.com/seu-usuario/spec-hub.git
````

2 - Navegue até o diretório do projeto:
```` bash
cd spec-hub
````

3 - Clone o repositório do Laradock dentro do diretório do projeto:

```` bash
cd spec-hub
````

4 - Copie o arquivo de exemplo .env do Laradock:
```` bash
cp laradock/env-example laradock/.env
````

5 - Configure o Laradock para usar o MySQL. No arquivo laradock/.env, configure a variável MYSQL_VERSION:

````env
MYSQL_VERSION=latest
````
6 - Inicie os containers do Laradock:

````bash
cd laradock
docker-compose up -d nginx mysql
````

7 - Instale as dependências do Laravel:
````bash
docker-compose exec workspace composer install
````

8 - Gere a chave da aplicação:
````bash
docker-compose exec workspace php artisan key:generate
````

9 - Execute as migrações do banco de dados:

````bash
docker-compose exec workspace php artisan migrate
````

## Configuração
O Spec-Hub requer algumas variáveis de ambiente para funcionar corretamente. No arquivo .env na raiz do projeto Laravel, configure as seguintes variáveis:
````env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=spec_hub
DB_USERNAME=root
DB_PASSWORD=root
````

## Integração com Serviços
Para cada serviço (Horizon, Telescope, Pulse, Log-Viewer), configure a URL de acesso e as permissões desejadas no dashboard do Spec-Hub.

## Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests no repositório do GitHub.

## Licença
Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
