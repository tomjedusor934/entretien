const mysql = require('mysql2');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const db = require('../../config/db');
require('dotenv').config();

const createToken = (id) => {
    return jwt.sign({id}, process.env.TOKEN_SECRET);
}

module.exports.signUp = async (req, res) => {
    const salt = await bcrypt.genSalt();
    const password = await bcrypt.hash(req.body.password, salt);
    console.log(req.body);
    db.query(`INSERT INTO user (email, password, username) VALUE ("${req.body.email}", "${password}", "${req.body.username}")`);
    res.status(200).json("account created");
}

module.exports.signIn = async (req, res) => {
    db.query(`SELECT password, id FROM user WHERE email = ?`, [req.body.email], function (err, data) {
        if(err) {
            throw err;
        } else {
            bcrypt.compare(req.body.password, data[0].password, function(err, auth) {
                if (err) {
                    throw err;
                } else if (auth) {
                    const token = createToken(data[0].id);
                    res.status(200).json("connect");
                } else {
                    res.status(200).send("Wrong Password");
                }
            });
        }
    });
}
