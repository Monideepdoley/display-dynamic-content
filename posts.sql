USE testdb;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200),
    content TEXT,
    author_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

INSERT INTO posts (title, content, author_id) VALUES
('First Blog Post', 'This is the first sample blog post.', 1),
('PHP & MySQL Tutorial', 'Learning PHP with database is easy and fun!', 2),
('Hello From Pranom', 'This is a sample post written by the user.', 3);
