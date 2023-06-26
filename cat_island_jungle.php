<?php

// 1. Establishing connection to DB
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'healthinharmony';

$conn = new mysqli($server, $username, $password, $dbName);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    echo 'Connected successfully';
}

// 2. Create table for access
$sql = "CREATE TABLE access (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id VARCHAR(50) NOT NULL,
    permission_level VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table access created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 3. Prepare data for insertion
$user_id = 'testuser';
$permission_level = 'normal';

// 4. Insert data into table
$stmt = $conn->prepare("INSERT INTO access (user_id, permission_level) VALUES (?, ?)");
$stmt->bind_param('ss', $user_id, $permission_level);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 5. Query the access table
$result = $conn->query('SELECT * FROM access');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - user_id: ' . $row['user_id'] . ' - permission_level: ' . $row['permission_level'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 6. Update data in the table
$stmt = $conn->prepare("UPDATE access SET permission_level = ? WHERE user_id = ?");
$stmt->bind_param('ss', $permission_level, $user_id);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 7. Create a new users table
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table users created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 8. Prepare data for insertion
$username = 'testuser';
$password = 'testpassword';

// 9. Insert data into table
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $password);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 10. Query the users table
$result = $conn->query('SELECT * FROM users');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - username: ' . $row['username'] . ' - password: ' . $row['password'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 11. Update data in the table
$stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
$stmt->bind_param('ss', $password, $username);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 12. Create a session table
$sql = "CREATE TABLE sessions (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    session_id VARCHAR(50) NOT NULL,
    user_id VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table sessions created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 13. Prepare data for insertion
$session_id = 'testsession';
$user_id = 'testuser';

// 14. Insert data into table
$stmt = $conn->prepare("INSERT INTO sessions (session_id, user_id) VALUES (?, ?)");
$stmt->bind_param('ss', $session_id, $user_id);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 15. Query the sessions table
$result = $conn->query('SELECT * FROM sessions');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - session_id: ' . $row['session_id'] . ' - user_id: ' . $row['user_id'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 16. Update data in the table
$stmt = $conn->prepare("UPDATE sessions SET user_id = ? WHERE session_id = ?");
$stmt->bind_param('ss', $user_id, $session_id);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 17. Create a log table
$sql = "CREATE TABLE log (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    session_id VARCHAR(50) NOT NULL,
    action VARCHAR(100) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table log created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 18. Prepare data for insertion
$session_id = 'testsession';
$action = 'testaction';

// 19. Insert data into table
$stmt = $conn->prepare("INSERT INTO log (session_id, action) VALUES (?, ?)");
$stmt->bind_param('ss', $session_id, $action);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 20. Query the log table
$result = $conn->query('SELECT * FROM log');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - session_id: ' . $row['session_id'] . ' - action: ' . $row['action'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 21. Update data in the table
$stmt = $conn->prepare("UPDATE log SET action = ? WHERE session_id = ?");
$stmt->bind_param('ss', $action, $session_id);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 22. Create a user_data table
$sql = "CREATE TABLE user_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id VARCHAR(50) NOT NULL,
    health_status VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table user_data created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 23. Prepare data for insertion
$user_id = 'testuser';
$health_status = 'good';

// 24. Insert data into table
$stmt = $conn->prepare("INSERT INTO user_data (user_id, health_status) VALUES (?, ?)");
$stmt->bind_param('ss', $user_id, $health_status);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 25. Query the user_data table
$result = $conn->query('SELECT * FROM user_data');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - user_id: ' . $row['user_id'] . ' - health_status: ' . $row['health_status'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 26. Update data in the table
$stmt = $conn->prepare("UPDATE user_data SET health_status = ? WHERE user_id = ?");
$stmt->bind_param('ss', $health_status, $user_id);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 27. Create a records table
$sql = "CREATE TABLE records (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id VARCHAR(50) NOT NULL,
    health_record VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table records created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 28. Prepare data for insertion
$user_id = 'testuser';
$health_record = 'record1';

// 29. Insert data into table
$stmt = $conn->prepare("INSERT INTO records (user_id, health_record) VALUES (?, ?)");
$stmt->bind_param('ss', $user_id, $health_record);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 30. Query the records table
$result = $conn->query('SELECT * FROM records');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - user_id: ' . $row['user_id'] . ' - health_record: ' . $row['health_record'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
} else {
    echo 'No results';
}

// 31. Update data in the table
$stmt = $conn->prepare("UPDATE records SET health_record = ? WHERE user_id = ?");
$stmt->bind_param('ss', $health_record, $user_id);

if ($stmt->execute() == TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// 32. Create a caretakers table
$sql = "CREATE TABLE caretakers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_id VARCHAR(50) NOT NULL,
    caretaker_id VARCHAR(50) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if ($conn->query($sql) === TRUE) {
    echo ' Table caretakers created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// 33. Prepare data for insertion
$user_id = 'testuser';
$caretaker_id = 'testcaretaker';

// 34. Insert data into table
$stmt = $conn->prepare("INSERT INTO caretakers (user_id, caretaker_id) VALUES (?, ?)");
$stmt->bind_param('ss', $user_id, $caretaker_id);

if ($stmt->execute() == TRUE) {
    echo 'Data added successfully';
} else {
    echo 'Error adding data: ' . $conn->error;
}

// 35. Query the caretakers table
$result = $conn->query('SELECT * FROM caretakers');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id'] . ' - user_id: ' . $row['user_id'] . ' - caretaker_id: ' . $row['caretaker_id'] . ' - date_added: ' . $row['date_added'] . '<br>';
    }
}