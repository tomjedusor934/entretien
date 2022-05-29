const mysql = require('mysql2');
require('dotenv').config();

const db = mysql.createConnection({
    user: process.env.MYSQL_HOST,
    user: process.env.MYSQL_USER,
    password: process.env.PASSWORD,
    database: process.env.MYSQL_DATABASE
});

module.exports = db;