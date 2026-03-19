-- CREAR TABLA ALUMNOS
CREATE TABLE ALUMNOS (
    IDAlumno CHAR(2) PRIMARY KEY,
    contraseña VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    pagina VARCHAR(100) NOT NULL,
    nombreJesuita VARCHAR(100) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    informacion VARCHAR(100) NOT NULL
);

-- INSERTAR DATOS EN LA TABLA ALUMNOS
INSERT INTO ALUMNOS (IDAlumno, contraseña, nombre, pagina, nombreJesuita, imagen, informacion) VALUES
('01', 'contraseña1', 'Juan Pérez', 'www.juanperez.com', 'San Juan de la Cruz', 'juanperez.jpg', 'Información adicional sobre Juan Pérez.'),
('02', 'contraseña2', 'María Gómez', 'www.mariagomez.com', 'Santa Teresa de Ávila', 'mariagomez.jpg', 'Información adicional sobre María Gómez.'),
('03', 'contraseña3', 'Carlos Rodríguez', 'www.carlosrodriguez.com', 'San Ignacio de Loyola', 'carlosrodriguez.jpg', 'Información adicional sobre Carlos Rodríguez.'),
('04', 'contraseña4', 'Ana Martínez', 'www.anamartinez.com', 'San Francisco Javier', 'anamartinez.jpg', 'Información adicional sobre Ana Martínez.'),
('05', 'contraseña5', 'Luis Fernández', 'www.luisfernandez.com', 'San Pedro Claver', 'luisfernandez.jpg', 'Información adicional sobre Luis Fernández.');