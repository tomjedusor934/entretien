const { send } = require('express/lib/response');
const jwt = require('jsonwebtoken');
const mysql = require('mysql2');
const dp = require('../config/db');
require('dotenv').config();

module.exports.authtenticate = (req, res, next) => {
    const authHeader = req.headers.authorization
    const token = authHeader.split(' ')[1]
    if (token == null)
        return res.sendStatus(401);
    jwt.verify(token, process.env.TOKEN_SECRET, (err, id) => {
        if (err) return res.sendStatus(403);
        req.id = id;
        next();
    })
}

module.exports.checkUser = (req, res, next) => {
    const token = req.cookies.jwt;
    res.cookie('jwt', token);
    console.log("TOKEN = " + token);
    if (token) {
        jwt.verify(token, process.env.TOKEN_SECRET, async (err, decodedToken) => {
            if (err) {
                res.locals.id = null;
                //res.cookie('jwt', '', {maxAge: 1});
                next();
            } else {
                db.query(`SELECT * FROM user WHERE id = '${decodedToken.id}'`, function(err, rows) {
                    console.log(decodedToken.id);
                    if(err) {
                        throw err;
                    } else {
                        res.locals.id = rows[0].id;
                        next();
                    }
                });
            }
        })
    } else {
        res.locals.id = null;
        next();
    }
}