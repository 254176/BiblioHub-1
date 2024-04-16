-- Insert data into the Books table
LOAD DATA LOCAL
     INFILE 'books.csv'
     INTO TABLE Books
     FIELDS TERMINATED BY ','
     LINES TERMINATED BY '\n';

-- Insert data into the Inventory table
INSERT INTO Inventory
       (InventoryID, ISBN, TransactionID)
       VALUES
       (1, 9781234567890, 1001),
       (2, 9781234567891, 1002),
       (3, 9781234567892, 1003),
       (4, 9781234567893, 1004);

-- Insert data into the Users table
INSERT INTO Users
       (UserID, Role, Name, Email, Address, Password)
       VALUES
       (1, 'standard', 'Alice Smith', 'alice@example.com', '123 Main St, Anytown, USA', 'password1'),
       (2, 'standard', 'Bob Johnson', 'bob@example.com', '456 Elm St, Othertown, USA', 'password2'),
       (3, 'admin', 'Charlie Brown', 'charlie@example.com', '789 Oak St, Somewhereville, USA', 'password3');

-- Insert data into the Transactions table
INSERT INTO Transactions
       (TransactionID, UserID, InventoryID, TransactionType, TransactionDate, DueDate, State)
       VALUES
       (1001, 1, 1, 0, '2024-04-01 09:00:00', '2024-04-08 09:00:00', 1),
       (1002, 2, 2, 0, '2024-04-02 10:00:00', '2024-04-09 10:00:00', 1),
       (1003, 3, 3, 0, '2024-04-03 11:00:00', '2024-04-10 11:00:00', 1),
       (1004, 1, 4, 0, '2024-04-04 12:00:00', '2024-04-11 12:00:00', 1);

-- Insert data into the Events table
LOAD DATA LOCAL
     INFILE 'events.csv'
     INTO TABLE Events
     FIELDS TERMINATED BY ','
     LINES TERMINATED BY '\n';
