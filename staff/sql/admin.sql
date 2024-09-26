create table admin (
                       id int(4) NOT NULL primary key,
                       a_name varchar(50) not null ,
                       a_user varchar(50) not null unique,
                       a_pass varchar(100)
);


INSERT INTO admin (id, a_name, a_user, a_pass)
VALUES
    (1, 'John Doe', 'john_doe', 'password123'),
    (2, 'Jane Smith', 'jane_smith', 'pass456'),
    (3, 'Alice Johnson', 'alice_john', 'alice789'),
    (4, 'Bob Brown', 'bob_brown', 'brown1234'),
    (5, 'Charlie Davis', 'charlie_davis', 'charlie987'),
    (6, 'Diana Green', 'diana_green', 'green654'),
    (7, 'lnwza007', 'rushmi0', '63a9f0ea7bb98050796b649e85481845');
