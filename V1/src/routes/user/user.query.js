const { send } = require('express/lib/response');
const res = require('express/lib/response');
const mysql = require('mysql2');
const bcrypt = require('bcrypt');
const db = require('../../config/db');
require('dotenv').config();

module.exports.viewUsers = (req, res) => {
    console.log(req.params);
    db.query(`SELECT * FROM user`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.json (rows);
        }
    });
};

module.exports.userInfo = (req, res) => {
    console.log(req.params);
    db.query(`SELECT * FROM user WHERE id = '${req.params.id}'`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.json (rows);
        }
    });
};

module.exports.updateInfo = async (req, res) => {
    console.log(req.params);
    const salt = await bcrypt.genSalt();
    const password = await bcrypt.hash(req.body.password, salt);
    db.query(`UPDATE user SET email = '${req.body.email}', password = '${password}', name = '${req.body.name}', firstname = '${req.body.firstname}' WHERE id = '${req.params.id}'`);
    res.json(req.params);
};

module.exports.delete = async (req, res) => {
    console.log(req.params);
    db.query(`DELETE FROM user WHERE id = '${req.params.id}'`);
    res.json(req.params);
};