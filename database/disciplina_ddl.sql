CREATE TABLE IF NOT EXISTS disciplina (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
carga_horaria int NOT NULL,
curso_id INT,
FOREIGN KEY (curso_id) REFERENCES curso(id)
)ENGINE=MYISAM;

INSERT INTO  disciplina (id, nome, carga_horaria, curso_id) VALUES
(1, 'Desenvolvimento de sistemas web', 4, 1);