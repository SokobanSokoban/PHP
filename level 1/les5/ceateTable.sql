CREATE TABLE img (
  id INT PRIMARY KEY AUTO_INCREMENT,
  path VARCHAR(255) NOT NULL,
  size INT NOT NULL,
  name VARCHAR(64),
  click INT DEFAULT NULL
);


INSERT INTO  img  
(id, path  ,size ,name ,click)
VALUES
(1, '/img/', 1, '1.jpg', 3),
(2, '/img/', 1, '2.jpg', 1),
(3, '/img/', 1, '3.jpg', 1),
(4, '/img/', 1, '4.jpg', 8),
(5, '/img/', 1, '5.jpg', 2),
(6, '/img/', 1, '6.jpg', 1),
(7, '/img/', 1, '7.jpg', 5),
(8, '/img/', 1, '8.jpg', 0);

  $query = "SELECT * FROM img ORDER BY click DESC"