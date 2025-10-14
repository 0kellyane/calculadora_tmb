# 🧮 Calculadora TMB (Taxa Metabólica Basal)

Este é um projeto simples de calculadora de Taxa Metabólica Basal (TMB) desenvolvido em **Laravel**, como exercício de fundamentos para demonstrar a aplicação básica do framework.

A Taxa Metabólica Basal (TMB) representa a quantidade mínima de calorias que o corpo humano precisa para manter suas funções vitais em repouso. Este projeto calcula a TMB com base em dados como peso, altura, idade e sexo, utilizando uma das fórmulas preditivas mais comuns (por exemplo, a fórmula de Harris-Benedict ou Mifflin-St Jeor).

## ✨ Funcionalidades

* **Cálculo da TMB:** Calcula a TMB com base nas entradas do usuário.
* **Interface Amigável:** Formulário simples e direto desenvolvido com o Blade do Laravel.
* **Validação de Dados:** Utiliza as funcionalidades de validação do Laravel para garantir que os dados de entrada sejam válidos.

## ⚙️ Tecnologias Utilizadas

* PHP (>= 8.1)
* **Laravel** (>= 10.x): O framework PHP utilizado para estruturar a aplicação.
* HTML/CSS: Para a apresentação e o layout da calculadora.
* Blade: O motor de templating do Laravel.

## 🚀 Como Rodar o Projeto Localmente

Siga os passos abaixo para clonar o repositório e rodar a aplicação em sua máquina:

### Pré-requisitos
Certifique-se de que você tem o seguinte instalado:

* PHP
* Composer
* Node.js e NPM (Opcional, se você utilizou Vite/mix para assets)

### Instalação

1.  **Clone o repositório:**
    ```bash
    git clone [URL-DO-SEU-REPOSITÓRIO]
    cd [nome-do-seu-repositório]
    ```

2.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```

3.  **Configure o ambiente:**
    Crie o arquivo de configuração do ambiente (se não existir):
    ```bash
    cp .env.example .env
    ```

4.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

5.  **Inicie o servidor de desenvolvimento do Laravel:**
    ```bash
    php artisan serve
    ```

6.  **Acesse a aplicação:**
    Abra seu navegador e vá para `http://127.0.0.1:8000` (ou a porta que o Artisan indicar).

## 📐 Estrutura do Projeto (Foco em Fundamentos)

Os principais arquivos para este projeto de fundamentos estão localizados em:

* `routes/web.php`: Definição das rotas para exibir o formulário e processar o cálculo.
* `app/Http/Controllers/TmbController.php`: (Se você usou um Controller) A lógica principal para receber os dados, realizar o cálculo e retornar o resultado.
* `resources/views/calculadora.blade.php`: A view principal contendo o formulário HTML.
* `resources/views/resultado.blade.php`: (Opcional) A view para exibir o resultado.

## 👤 Autor

Kellyane Caldas
