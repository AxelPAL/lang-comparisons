/**
 * TextController
 *
 * @description :: Server-side logic for managing texts
 * @help        :: See http://sailsjs.org/#!/documentation/concepts/Controllers
 */

module.exports = {
    texts: function (req, res) {
        Text.find({}).paginate({page: 0, limit: 3000}).exec(function (err, users) {
            if (err) {
                res.send(400);
            } else {
                res.view({users: users});
            }
        });
        //return res.view("texts");
    }
};

