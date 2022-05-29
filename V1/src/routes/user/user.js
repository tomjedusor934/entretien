const router = require('express').Router();
const authController = require('../auth/auth');
const usersData = require('./user.query');

router.post("/register", authController.signUp);
router.post("/login", authController.signIn);
router.post("/users", usersData.viewUsers);
router.get("/user/:id", usersData.userInfo);
router.put("/user/:id", usersData.updateInfo);
router.delete("/user/:id", usersData.delete);

module.exports = router;