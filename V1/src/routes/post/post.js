const router = require('express').Router();
const query = require('./post.query');

//post
router.post('/upload/:id', query.createPost);
router.put('/update/:id', query.updatePost);
router.delete('/delete/:id/:id2', query.deletePost);
router.get('/showPost', query.showAllPost);
router.get('/showPosTo/:id', query.showPostTo);


// comments
router.post('/comment-post/:id/:id2', query.addCommentPost);
router.put('/edit-comment-post/:id', query.editCommentPost);
router.delete('/delete-comment-post/:id', query.deleteCommentPost);
router.get('/showCommentFrom/:id', query.showCommentFrom);
router.get('/showCommentOf/:id', query.showCommentOf);

module.exports = router