const express = require ("express");
const app = express();
const userRoutes = require('./src/routes/user/user');
const postRoutes = require('./src/routes/post/post');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');
const mysql = require('mysql2');
require('dotenv').config();

//utils
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));
app.use(cookieParser());

//routes
app.use('/', userRoutes);
app.use('/', postRoutes);

//server
app.listen(process.env.PORT, () => {
    console . log (`Example app listening at http :// localhost : ${process.env.PORT}`);
});