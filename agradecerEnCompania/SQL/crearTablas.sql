-- CREAR TABLA ALUMNOS
CREATE TABLE alumnos (
    idAlumno CHAR(2) PRIMARY KEY,
    clave VARCHAR(255) NOT NULL, -- Cambiado el nombre de la columna a "clave" para evitar conflictos con palabras reservadas
    nombre VARCHAR(100) NOT NULL,
    webAlumno VARCHAR(100) NOT NULL,
    jesuita VARCHAR(100) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    informacion VARCHAR(100) NOT NULL
);

-- CREAR TABLA AGRADECIMIENTOS
CREATE TABLE agradecimientos (
    idAgradecimiento SMALLINT AUTO_INCREMENT,
    mensaje MEDIUMTEXT NOT NULL,
    idEmisor CHAR(2) NOT NULL,
    idReceptor CHAR(2) NOT NULL,
    -- PK
    CONSTRAINT PK_AGRADECIMIENTOS PRIMARY KEY (idAgradecimiento),
    -- FK
    CONSTRAINT FK_AGRADECIMIENTOS_EMISOR FOREIGN KEY (idEmisor) REFERENCES ALUMNOS(idAlumno) ON DELETE CASCADE,
    CONSTRAINT FK_AGRADECIMIENTOS_RECEPTOR FOREIGN KEY (idReceptor) REFERENCES ALUMNOS(idAlumno) ON DELETE CASCADE,
    -- Restricción para evitar que un alumno se agradezca a sí mismo
    CONSTRAINT CHK_AGRADECIMIENTOS_NO_AUTOGRACIAS CHECK (idEmisor <> idReceptor),
    -- Clave única compueesta por idEmisor e idReceptor para evitar que un alumno agradezca mas de una vez a otro alumno
    CONSTRAINT UQ_AGRADECIMIENTOS_UNICOS UNIQUE (idEmisor, idReceptor) -- hacerlo con create INDEX
    
);