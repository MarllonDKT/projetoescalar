# Projeto Text-to-Speech com Laravel e Amazon Polly

Este projeto foi desenvolvido como parte de um teste prático de estágio em Desenvolvimento Laravel + PHP, com o objetivo de criar uma aplicação que converte texto em áudio usando o serviço **Amazon Polly**.

## Tecnologias Utilizadas

* **Laravel Framework:** `12.24.0`
* **PHP:** `8.3.16`
* **Ambiente de Desenvolvimento:** Laragon
* **Serviço de Nuvem:** Amazon Polly (Text-to-Speech)
* **Biblioteca:** AWS SDK for PHP

## Funcionalidades

O sistema permite que um usuário insira um texto em um formulário e, em seguida, receba um áudio gerado a partir do texto, que é reproduzido diretamente no navegador.

## Como Executar o Projeto

### Pré-requisitos

Para rodar este projeto localmente, você precisará de:

* **Laragon:** Um ambiente de desenvolvimento web completo. [Clique aqui para baixar o Laragon.](https://laragon.org/download/)
* **Conta na AWS:** Para utilizar o Amazon Polly, é necessário ter uma conta na Amazon Web Services.

### 1. Configuração do Ambiente e Dependências

Clone este repositório e navegue até a pasta do projeto. Em seguida, instale as dependências do AWS SDK com o Composer:

#```bash
# composer require aws/aws-sdk-php

**Configuração da AWS**
O projeto depende das suas credenciais da AWS para se conectar ao serviço Amazon Polly. Configure-as no arquivo de ambiente .env na raiz do projeto
AWS_ACCESS_KEY_ID="sua_chave_de_acesso"
AWS_SECRET_ACCESS_KEY="sua_chave_secreta"
AWS_DEFAULT_REGION="sua_regiao" # Ex: sa-east-1

Executando o Servidor Local
Se você estiver usando o Laragon, o ambiente já estará configurado para a URL http://projetoescalar.test/home. Basta iniciar o Laragon e a aplicação estará acessível.

**Como o Código Funciona**
Rotas (web.php): O projeto utiliza uma rota GET para o caminho /home, que retorna a view home.blade.php.

Controlador (TextToSpeechController): A lógica principal reside no TextToSpeechController. No seu construtor, uma nova instância do PollyClient da AWS é inicializada, usando as credenciais do arquivo .env.

Processamento de Áudio: Ao receber o texto, o controlador utiliza o PollyClient para converter o texto em um stream de áudio. Esse stream binário é então codificado em Base64 para ser transmitido de forma segura para a view.

Visualização (home.blade.php): A view recebe um binario Base64 do áudio e a insere em uma tag <audio> do HTML, permitindo que o navegador a reproduza diretamente.
