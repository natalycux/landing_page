-- Create database
CREATE DATABASE IF NOT EXISTS landing_db;
USE landing_db;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    category VARCHAR(100) NOT NULL, -- Guardamos la categoría como texto
    price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create purchases table
CREATE TABLE IF NOT EXISTS purchases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    purchase_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

-- Create general platform comments table
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Create course comments table
CREATE TABLE IF NOT EXISTS course_comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);
-- Insertando muchos cursos con diferentes categorías
INSERT INTO courses (title, description, category, price) VALUES
('JavaScript for Beginners', 'Learn JavaScript from scratch.', 'Programming', 49.99),
('Advanced Python', 'Deep dive into Python for data science and AI.', 'Programming', 69.99),
('Mastering CSS', 'Advanced CSS techniques for modern web design.', 'Design', 39.99),
('UX/UI Fundamentals', 'Learn the principles of user experience and interface design.', 'Design', 45.00),
('SEO Strategies', 'Optimize websites to rank higher in search engines.', 'Marketing', 29.99),
('Social Media Growth', 'Master social media marketing techniques.', 'Marketing', 35.99),
('Introduction to C++', 'Learn the basics of C++ programming.', 'Programming', 55.00),
('Illustrator for Beginners', 'Create stunning vector designs with Illustrator.', 'Design', 40.00),
('Facebook Ads Mastery', 'Run high-converting ads on Facebook and Instagram.', 'Marketing', 50.00),
('Laravel for Web Apps', 'Develop powerful PHP applications with Laravel.', 'Programming', 59.99),
('React Native Development', 'Build mobile apps using React Native.', 'Programming', 70.00);

-- Insertando muchos comentarios sobre la plataforma
INSERT INTO comments (user_id, comment) VALUES
(1, 'This platform is amazing! The courses are well-structured and easy to follow.'),
(2, 'Great experience so far. The interface is very user-friendly.'),
(3, 'I love the variety of courses offered. Looking forward to more content!'),
(4, 'Fast and easy to navigate. Definitely worth the investment.'),
(5, 'Customer support is very responsive. Had an issue and they solved it quickly.'),
(6, 'The pricing is reasonable for the value provided.'),
(7, 'Would be great if they added more interactive exercises.'),
(8, 'I recommended this platform to my friends, and they love it too.'),
(9, 'The video quality and explanations are top-notch.'),
(10, 'I wish there were more free courses to try before purchasing.');

-- Insertando muchos comentarios para cursos específicos
INSERT INTO course_comments (user_id, course_id, comment) VALUES
(1, 1, 'This JavaScript course is perfect for beginners!'),
(2, 2, 'The Python course really helped me understand data science concepts.'),
(3, 3, 'Mastering CSS gave me the confidence to design beautiful websites.'),
(4, 4, 'This UX/UI course is well-organized and easy to follow.'),
(5, 5, 'SEO Strategies really boosted my website ranking!'),
(6, 6, 'Highly recommend Social Media Growth for marketers.'),
(7, 7, 'C++ Introduction was detailed and easy to grasp.'),
(8, 8, 'Illustrator for Beginners helped me start my design journey.'),
(9, 9, 'Facebook Ads Mastery showed me how to run effective ad campaigns.'),
(10, 10, 'Laravel for Web Apps was a game-changer for my development career.');
