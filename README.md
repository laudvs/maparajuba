# 🌿 Coletivo Maparajuba - Landing Page

Landing Page desenvolvida para o escritório de advocacia **Coletivo Maparajuba**.  
O projeto tem como objetivo apresentar informações institucionais, serviços prestados e possibilitar que clientes entrem em contato através de um formulário.  
As mensagens enviadas são armazenadas em um banco de dados **MySQL**, utilizando **PHP** como back-end.

---

## 🚀 Funcionalidades

- **Landing Page responsiva** com:
  - Seção de apresentação (*hero*).
  - Seção "Sobre nós".
  - Seção de serviços oferecidos.
  - Formulário de contato.

- **Formulário de contato**:
  - Envia dados de nome, e-mail e mensagem.
  - Os dados são salvos no banco de dados MySQL.

- **Painel administrativo (admin.php)**:
  - Lista todas as mensagens enviadas.
  - Ordena por data de envio.
  - Permite acompanhar as informações de contato recebidas.

---

## 🛠️ Tecnologias Utilizadas

- **Front-end**
  - HTML5
  - CSS3
  - JavaScript (básico para validação)

- **Back-end**
  - PHP 8+ (processamento do formulário e painel administrativo)

- **Banco de Dados**
  - MySQL (armazenamento das mensagens enviadas)

- **Servidor local**
  - XAMPP (Apache + PHP + MySQL)
  - phpMyAdmin (gerenciamento do banco de dados)

---

## 📂 Estrutura de Pastas

```

maparajuba/
│
├── front-end/          # Arquivos de interface
│   ├── index.html      # Página principal
│   ├── style.css       # Estilos
│   └── script.js       # Scripts básicos
│
├── back-end/           # Arquivos PHP
│   ├── contato.php     # Recebe e salva dados do formulário
│   └── admin.php       # Painel administrativo (visualização de mensagens)
│
└── banco-de-dados/     # Scripts SQL
└── db.sql          # Criação do banco e tabela

````

---

## 🗄️ Banco de Dados

Banco: **`advocacia`**  
Tabela: **`contatos`**

```sql
CREATE DATABASE advocacia;
USE advocacia;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
````

---

## 📌 Próximos Passos

* ✅ Criar sistema de exclusão de mensagens no `admin.php`.
* 🔒 Adicionar autenticação para acesso ao painel administrativo.
* 📱 Melhorar responsividade para dispositivos móveis.
* ✉️ Configurar envio de e-mails automáticos de confirmação.

---

## 👩‍💻 Autoria

Desenvolvido para o **Coletivo Maparajuba**.
Organizado por **Laurah Vasconcelos**.

```
