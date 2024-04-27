# Leitor de PDF para Auditoria de Contas Telefônicas

## Descrição
Este projeto consiste em uma API desenvolvida com PHP e Laravel que automatiza a leitura e análise de faturas de serviços telefônicos em formato PDF, especificamente de empresas como a VIVO e outras que seguem o mesmo padrão de faturamento. A API extrai dados chave das faturas, organiza essas informações e as envia para uma planilha no Google Sheets.

## Funcionalidades
- **Extração de Dados**: Lê e extrai informações importantes de faturas em PDF.
- **Organização de Dados**: Organiza os dados extraídos em um formato estruturado.
- **Integração com Google Sheets**: Envia os dados organizados diretamente para uma planilha do Google Sheets, facilitando análises e auditorias.

## Tecnologias Utilizadas
- **PHP**: Linguagem de programação utilizada para o desenvolvimento do backend.
- **Laravel**: Framework PHP para construção de aplicações web e APIs.
- **Google Sheets API**: Utilizada para integrar a saída de dados com planilhas online.

## Como Usar
1. Clone o repositório usando `git clone [url-do-repositório]`.
2. Configure o ambiente de desenvolvimento instalando o PHP e o Composer.
3. Navegue até a pasta do projeto e instale as dependências do Laravel com `composer install`.
4. Configure as credenciais da API do Google Sheets no arquivo `.env`.
5. Inicie o servidor local com `php artisan serve`.
6. Envie uma requisição POST com um arquivo PDF anexado para `[endereço do servidor]/api/leituraPdf`.

