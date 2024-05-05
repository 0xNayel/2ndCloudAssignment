-- Create the team table
CREATE TABLE team (
    name VARCHAR(255) NOT NULL,
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    age INT NOT NULL,
    cgpa DECIMAL(3,2) NOT NULL
);

-- Insert data for 5 students
INSERT INTO team (name, id, age, cgpa) VALUES
('Ahmed Nayel', 22010026, 20, 2.5),
('Mostafa mohamed', 22010258, 20, 3.34),
('Ezzeldeen Farahat', 22010152, 20, 3.6),
('Ahmed samir', 20221460016, 30, 2.7),
('Ahmed Diefallah', 22010031, 20, 3.3);
