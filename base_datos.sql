CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_documento VARCHAR(50),
    numero_documento VARCHAR(50),
    nombres VARCHAR(100),
    apellidos VARCHAR(100),
    correo VARCHAR(100),
    telefono VARCHAR(20),
    direccion VARCHAR(255),
    pdf_path VARCHAR(255),  -- Ruta del PDF subido
    qr_code_path VARCHAR(255)  -- Ruta del código QR generado
);
