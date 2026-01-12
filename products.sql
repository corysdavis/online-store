-- Insert categories
INSERT INTO Categories (CategoryName) VALUES
('Posters'),
('Balls'),
('Jerseys'),
('Gloves'),
('Shoes');

-- Insert products
INSERT INTO Products (ProductName, Description, Price, Stock, CategoryID) VALUES
('Signed Poster', 'Poster signed by a famous player', 49.99, 10, 1),
('Signed Baseball', 'Official baseball signed by a star player', 79.99, 5, 2),
('Game Worn Hockey Jersey', 'Authentic hockey jersey worn during a game', 299.99, 2, 3),
('Signed Baseball Glove', 'Leather glove signed by a professional player', 129.99, 3, 4),
('Game Worn Shoes', 'Shoes worn by a player in a professional game', 199.99, 2, 5);
