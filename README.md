## Order API

### Implementação de RESTful API utilizando Laravel (Products, Customers, Orders, LineItems);

* RESTful (definição): A API RESTful tem como base a tecnologia REST (representational state transfer), um tipo de arquitetura e comunicação muito utilizado no desenvolvimento de serviços web.

### Requisitos:
- PHP 7.4*;
- Composer;
- MySQL.

### Como testar a REST API:
Copiar o arquivo .env.example, renomear pra .env e colocar as configurações do seu banco local

Executar os seguintes comando:
> php artisan key:generate
> 
> php artisan migrate --seed
> 
> composer install

Rodar o servidor local (Endereço: "http://127.0.0.1:8000"): 

> php artisan serve

Testar as rotas GET, PUT, UPDATE E DELETE utilizando alguma ferramenta, como Postman.
