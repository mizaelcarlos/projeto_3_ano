CREATE TABLE laboratorio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    tipo VARCHAR(255),
    capacidade INT,
    equipamentos VARCHAR(255),
    responsavel VARCHAR(255)
);
