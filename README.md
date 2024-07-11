Tecnologias Usadas:
<ul>
    <li>Laravel</li>
    <li>Livewire</li>
    <li>HTML</li>
    <li>Tailwind</li>
    <li>Mysql</li>

</ul>

# Rodar com docker usando Laravel Sail

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

Comando para não precisar fazer ./vendor/bin/sail toda vez.<br>

```
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
Criar .env <br>
<code>cp .env.example .env</code>

```
sail up
sail artisan key:generate
sail artisan migrate
sail artisan db:seed
```



