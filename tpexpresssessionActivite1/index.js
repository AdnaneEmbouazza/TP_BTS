//Using express-session to store page views for a user.
var express = require('express')
var parseurl = require('parseurl')
var session = require('express-session')

var app = express()

app.use(session({
    secret: 'abcd',    //parametre requis
    resave: false,     //deprecated si absent
    saveUninitialized: true //deprecated si absent
}))

pp.use(function (req, res, next) {
 if (!req.session.views) {
 req.session.views = {}
 }
 // get the url pathname
 var pathname = parseurl(req).pathname
 // count the views - utilise la clé pathname pour /foo et /bar, sinon '404'
 if (pathname === '/foo' || pathname === '/bar') {
 req.session.views[pathname] = (req.session.views[pathname] || 0) + 1
 } else {
 req.session.views['404'] = (req.session.views['404'] || 0) + 1
 }
 next()
}) 


app.get('/foo', function (req, res, next) {
    res.send('you viewed this page ' + req.session.views['/foo'] + ' times')
    console.log(req.session.views)
})

app.get('/bar', function (req, res, next) {
    res.send('you viewed this page ' + req.session.views['/bar'] + ' times')
    console.log(req.session.views)
})

app.use(function (req, res) {
 var count = req.session.views['404'] || 0
 res.status(404).send(`
 <h1>404 - Page ${req.path} non trouvée</h1>
 `)
 console.log(req.session.views)
}) 


app.listen(3000)
console.log('Listening on http://localhost:3000')