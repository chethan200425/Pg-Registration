// app.js

const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

// Configure MySQL connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'Chethan@156', // replace with your MySQL password
    database: 'RegistrationDB'   // replace with your database name
});

// Connect to MySQL
db.connect(err => {
    if (err) {
        console.error('Database connection error:', err.stack);
        return;
    }
    console.log('Connected to MySQL database');
});

// Route to display the HTML form
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

// Route to handle form submission
app.post('/register', (req, res) => {
    const { first, last, pho, bir, add, join } = req.body;

    // SQL query to insert data into the Registration table
    const query = 'INSERT INTO Registration (first_name, last_name, phone, dob, address, joining_date) VALUES (?, ?, ?, ?, ?, ?)';
    const values = [first, last, pho, bir, add, join];

    db.query(query, values, (err, results) => {
        if (err) {
            console.error('Error inserting data:', err);
            res.status(500).send('Error saving data to database');
            return;
        }
        res.send('Registration successful!');
    });
});

// Start the server
const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
