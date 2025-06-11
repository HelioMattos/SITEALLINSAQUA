-- Cria o banco de dados
CREATE DATABASE IF NOT EXISTS turismo;
USE turismo;

-- Cria tabela de clientes (usuários administrativos)
DROP TABLE IF EXISTS clientes;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(20),
    senha VARCHAR(255)
);

-- Cria tabela de pacotes turísticos
DROP TABLE IF EXISTS pacotes;

CREATE TABLE pacotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(60) NOT NULL,
    descricao VARCHAR(190) NOT NULL,
    sobre TEXT NOT NULL,
    link VARCHAR(250),
    imagem LONGBLOB, -- armazena o conteúdo binário
    imagem_tipo VARCHAR(50), -- armazena o tipo MIME
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cria usuário do MySQL e concede acesso ao banco
CREATE USER IF NOT EXISTS 'turismo_user'@'localhost' IDENTIFIED BY 'Turismo@123';
GRANT ALL PRIVILEGES ON turismo.* TO 'turismo_user'@'localhost';
FLUSH PRIVILEGES;
