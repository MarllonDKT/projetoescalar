Este projeto foi desenvolvido como parte do Teste Prático - Estágio em Desenvolvimento Laravel + PHP.
Laravel Framework 12.24.0
PHP 8.3.16
O sistema permite que o usuário digite um texto em um formulário e receba o áudio gerado a partir do Amazon Polly (Text-to-Speech), diretamente no navegador.
Foi usado tambem para criar o projeto o Laragon que é um ambiente de programaçao web

Primeiro ou contruir a rota do meu projeto no arquivo web.php onde criei uma rota simples que faz uma requisiçao HTTP do tipo GET para uma view chamada "HOME".
como eu usei laragon ele cria host virtuais e eu colocoquei o nome de "top" 
"nome do projeto".top
http://projetoescalar.top/home "so vai funcionar na minha maquina isso aqui"
para funcionar na sua o jeito mais facil é baixando o laragon e usar a url 
http://projetoescalar.test/home

apos isso eu instalei o sdk da aws no prompt dentro da minha pasta do projeto
composer require aws/aws-sdk-php

criei a TextToSpeechController e iniciei uma instacia do aws polly
e converti o texto em audio e depois tranformei o audio em binario para poder capturar ele na minha view blade

