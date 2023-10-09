SELECT
    DISTINCT CASE
        WHEN depto LIKE 'La Paz' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'La Paz')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'La Paz')+0
    END AS "La Paz",
    
    CASE
        WHEN depto LIKE 'Oruro' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Oruro')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Oruro')+0
    END AS "Oruro",
    
     CASE
        WHEN depto LIKE 'Cochabamba' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Cochabamba')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Cochabamba')+0
    END AS "Cochabamba",
    
    CASE
        WHEN depto LIKE 'Potosi' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Potosi')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Potosi')+0
    END AS "Potosi",
    
     CASE
        WHEN depto LIKE 'Santa Cruz' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Santa Cruz')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Santa Cruz')+0
    END AS "Santa Cruz",

    CASE
        WHEN depto LIKE 'Tarija' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Tarija')
        ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Tarija')+0
    END AS "Tarija",

    CASE
        WHEN depto LIKE 'Chuquisaca' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Chuquisaca')
        ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Chuquisaca')+0)
    END AS "Chuquisaca",
    
    CASE
        WHEN depto LIKE 'Beni' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Beni')
        ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Beni')+0)
    END AS "Beni",
    
    CASE
        WHEN depto LIKE 'Pando' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Pando')
        ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Pando')+0)
    END AS "Pando"
FROM
    estudiante;