use taller;
CREATE TABLE Contactos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(50),
    celular VARCHAR(10),
    mensaje TEXT
);
select *from Contactos;