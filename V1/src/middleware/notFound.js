
function notFound(req, res)
{
    return (res.status(200).send('<H2 style="text-align: center;">ERROR: page not found !</H2>'));
}

module.exports = notFound;