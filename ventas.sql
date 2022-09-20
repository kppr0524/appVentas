CREATE DATABASE ventaVehiculos;
USE ventaVehiculos;
CREATE TABLE marca (
id_marca INT PRIMARY KEY NOT NULL auto_increment, 
nombre_marca VARCHAR(50) NOT NULL
);
CREATE TABLE modelo (
id_modelo INT PRIMARY KEY NOT NULL auto_increment,
nombre_modelo VARCHAR(50) NOT NULL,
stock_modelo INT(4),
precio_unidad INT(20),
fk_marca INT(4) NOT NULL,
FOREIGN KEY (fk_marca) REFERENCES marca(id_marca) ON UPDATE cascade
);
CREATE TABLE ventas(
id_venta INT PRIMARY KEY NOT NULL auto_increment,
cantidad_venta INT(4) NOT NULL,
total_venta INT(20),
fk_modelo INT(4) NOT NULL,
fecha_venta DATE,
FOREIGN KEY (fk_modelo) REFERENCES modelo(id_modelo) ON UPDATE cascade
);

INSERT INTO marca ( id_marca, nombre_marca) 
VALUES 
( '0001', 'Mazda'),
( '0002', 'Ford'),
( '0003', 'Toyota');

INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, fk_marca) 
VALUES
('0011','CX-3','4','30000000','0001'),
('0012','CX-5','4','40000000','0001'),
('0013','CX-9','4','50000000','0001'),
('0021','Fiesta','4','35000000','0002'),
('0022','Escape','4','52000000','0002'),
('0023','Ranger','4','76000000','0002'),
('0031','Corolla','4','50000000','0003'),
('0032','Rav-4','4','80000000','0003'),
('0033','Fortuner','4','110000000','0003');

INSERT INTO ventas (id_venta, cantidad_venta, total_venta, fk_modelo, fecha_venta) 
VALUES 
('1','1','40000000','0012','2022-09-12'),
('2','2','70000000', '0021','2022-09-10'),
('3','1','110000000','0033','2022-09-13'),
('4','1','52000000','0022','2022-09-15');
