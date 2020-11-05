CREATE DATABASE fseletro;

USE fseletro;

-- CRIAÇÃO DA TABELA PRODUTO

CREATE TABLE produtos (
idproduto INT AUTO_INCREMENT PRIMARY KEY,
data_inclusao DATETIME,
categoria VARCHAR(45),
descricao VARCHAR(150),                    
preco DECIMAL(8,2),
precofinal DECIMAL(8,2),
imagem VARCHAR(255),
PRIMARY KEY (idproduto)
)AUTO_INCREMENT = 100;

INSERT INTO produtos (categoria, descricao, preco, precofinal, imagem)
VALUES ("geladeira", "Geladeira Frost Free Brastemp Side Inverse 540 Litros", "6389.00", "5019.00", "imagens/produtos/geladeira_brastemp_2.png"),
("geladeira", "Geladeira Frost Free Brastemp Branca 375 Litros", "2086.00", "1910.00", "imagens/produtos/geladeira_brastemp.png"),
("geladeira", "Geladeira Frost Free Consul Prata 340 Litros", "2199.90", "2069.00", "imagens/produtos/geladeira_consul.png"),
("fogao", "Fogão 4 Bocas Consul Inox com Mesa de Vidro", "1209.90", "1129.00", "imagens/produtos/fogao_consul.png"),
("fogao", "Fogão de Piso 4 Bocas Atlas com Acendimento Automático", "609.90", "519.70", "imagens/produtos/fogao_monaco.png"),
("microondas", "Forno de Microondas Consul 32 Litros Inox 220V", "580.90", "409.88", "imagens/produtos/microondas_consul.png"),
("microondas", "Forno de Microondas 25 Litros Espelhado Philco 220V", "508.70", "464.53", "imagens/produtos/microondas_philco.png"),
("microondas", "Forno de Microondas Electrolux 20 Litros Branco", "459.90", "436.05", "imagens/produtos/microondas_electrolux.png"),
("lava-louca", "Lava-Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch", "3599.00", "2799.90", "imagens/produtos/lavadora_louca_electrolux.png"),
("lava-louca", "Lava-Louça Compacta 8 Serviços Branca 127V Brastemp", "1970.50", "1730.61", "imagens/produtos/lavadora_louca_brastemp.png"),
("lava-roupa", "Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca", "1699.00", "1214.00", "imagens/produtos/lavadora_roupas_brastemp.png"),
("lava-roupa", "Lavadora de Roupas Philco Inverter 12KG", "2399.00", "2179.00", "imagens/produtos/lavadora_roupas_philco.png");

-- CRIAÇÃO DA TABELA COMENTÁRIOS

CREATE TABLE comentarios (
id INT AUTO_INCREMENT,
nome VARCHAR(100),
msg VARCHAR(300),
data DATETIME DEFAULT now(),
primary key (id));

-- CRIAÇÃO DA TABELA PEDIDOS

CREATE TABLE pedidos ( 
idpedido INT AUTO_INCREMENT, 
nome_cliente VARCHAR(50) NOT NULL, 
nome_produto VARCHAR(200) NOT NULL,
endereco VARCHAR(150) NOT NULL,
quantidade INT NOT NULL,
PRIMARY KEY (idpedido));
