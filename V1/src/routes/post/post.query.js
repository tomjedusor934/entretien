const { config } = require('dotenv');
const { send } = require('express/lib/response');
const res = require('express/lib/response');
const mysql = require('mysql2');
var isEqual = require('lodash.isequal');
const db = require('../../config/db');
require('dotenv').config();


/*function permVerif(req, res,)
{
    console.log("bbbbb");
    let dir_role = 0;
    db.query("SELECT role from user WHERE id = 4", function(err, rows) {
        dir_role = rows[0];
    });
    db.query(`SELECT role from user WHERE id = "${req.params.id}"`, function(err, rows) {
        let role_adm = rows[0];
        if (isEqual(role_adm, dir_role)) {
            console.log("bienvenu ");
            return (true);
        } else {
            console.log("ooooo");
            return (false);
        }
    });
}*/

//about post||||||||||||||||||

//create a new post
module.exports.createPost = async (req, res) => {

    const id = req.params.id;
    if (isNaN(id) == true)
        return (res.status(200).json("pas de user"));
    db.query(`SELECT * FROM news where contenu = ("${req.body.contenu}")`, function(err, rows) {
        if(err) {
            throw err;
        } else if (rows) {
            db.query(`INSERT INTO news (contenu, created_by) VALUE ("${req.body.contenu}", "${id}")`);
            db.query(`SELECT * FROM news where contenu = "${req.body.contenu}"`, function(err, rows) {
                if(err) {
                    throw err;
                } else {
                    res.status(200).json("post crée");
                }
            });
        }
        else {
            res.status(200).json("post déjà crée");
        }
    });
}

module.exports.updatePost = async (req, res) => {
    console.log(req.params);

    db.query(`UPDATE news SET contenu = '${req.body.contenu}' WHERE id = '${req.params.id}'`);
    res.status(200).json("post update");
}

module.exports.deletePost = async (req, res) => {
    console.log(req.params);
    const id = req.params.id2;
    if (isNaN(id) == true) {
        return (res.status(200).json("pas de user ou pas les perms"));
    }
    /*permVerif(req, res, (resCall) => {
        console.log("test")
        if (resCall == false) {
            console.log("ccccc");
            return (res.status(200).json("pas de user ou pas les perms"));
        }
        console.log(resCall);
    })*/
    db.query(`DELETE FROM comment WHERE link_to = '${id}'`);
    db.query(`DELETE FROM news WHERE id = '${id}'`);
    res.status(200).json("post deleted");

}

//show all post
module.exports.showAllPost = (req, res) => {
    db.query('SELECT * FROM news', function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.status(200).status(200).json(rows);
        }
    });
};

//show all post of one user
module.exports.showPostTo = (req, res) => {
    db.query(`SELECT * FROM news WHERE id = '${req.params.id}'`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.status(200).json (rows);
        }
    });
};

//||||||||||||||||||||||||||||

//about comment|||||||||||||||
module.exports.addCommentPost = async (req, res) => {
    var editor = req.params.id
    var link_to = req.params.id2
    db.query(`INSERT INTO comment (commentaire, created_by, link_to) VALUE ("${req.body.commentaire}", "${editor}", "${link_to}")`);
    db.query(`SELECT * FROM comment where commentaire = "${req.body.commentaire}"`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.status(200).json("commentaire crée");
        }
    });
}

module.exports.editCommentPost = async (req, res) => {
    console.log(req.params);

    db.query(`UPDATE comment SET commentaire = '${req.body.contenu}' WHERE id = '${req.params.id}'`);
    res.status(200).json("comment update");
}

module.exports.deleteCommentPost = async (req, res) => {
    console.log(req.params);
    const id = req.params.id;
    if (isNaN(id) == true) {
        return (res.status(200).json("incorect user"));
    }
    //if (perVerif(req, res))
    db.query(`DELETE FROM comment WHERE id = '${id}'`);
    res.status(200).json("comment deleted");

}

//show every comment of one user
module.exports.showCommentFrom = (req, res) => {
    db.query(`SELECT * FROM comment WHERE created_by = '${req.params.id}'`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.status(200).json (rows);
        }
    });
};

//show every comment of one post
module.exports.showCommentOf = (req, res) => {
    db.query(`SELECT * FROM comment WHERE link_to = '${req.params.id}'`, function(err, rows) {
        if(err) {
            throw err;
        } else {
            res.status(200).json (rows);
        }
    });
};
//||||||||||||||||||||||||||||
