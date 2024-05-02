CREATE TABLE produto(
	codigo INT AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(250) NOT NULL,
	quantidade INT DEFAULT 0,
	valor DECIMAL(6,2) DEFAULT 0.0
);

-- Criar usuário
CREATE USER userproduto@localhost IDENTIFIED BY '123';

-- Conceder privilégios para o banco de dados
GRANT CREATE, INSERT, UPDATE, DELETE, SELECT ON dbproduto.* TO userproduto@localhost;

-- Atualizar as permissões
FLUSH PRIVILEGES;
