-- Smart Inventory Management System
-- Database Initialization Script for Railway

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL DEFAULT 0,
    category VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data
INSERT INTO products (name, description, price, quantity, category) VALUES
('Laptop HP Pavilion', 'High-performance laptop for business and gaming', 25990.00, 15, 'Electronics'),
('Wireless Mouse Logitech', 'Ergonomic wireless mouse with long battery life', 590.00, 50, 'Accessories'),
('USB-C Hub 7-in-1', 'Multi-port adapter for modern laptops', 890.00, 30, 'Accessories'),
('Gaming Keyboard RGB', 'Mechanical keyboard with customizable RGB lighting', 2490.00, 20, 'Gaming'),
('Monitor 27" 4K', 'Ultra HD monitor with IPS panel', 12990.00, 10, 'Electronics');
