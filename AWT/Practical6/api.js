const http = require('http');

http.createServer((req, resp) => {
    resp.writeHead(200, { 'Content-Type': 'application/json' });
    resp.write(JSON.stringify({ name: 'Rayma', email: 'rayma.sp@gmail.com' }));
    resp.end(); 
}).listen(2000, () => {
    console.log('Server is listening on port 2000');
});