const fs=require('fs');
const http =require('http');
const url=require('url');
const server=http.createServer((req,rep)=>{
    console.log(req.url);
    const pathName = req.url;
    if (pathName === '/' || pathName ==='/overview'){
        rep.end('This is the overview');
    }else if(pathName === '/product'){
    rep.end('This is the product');
    }else{
     rep.writeHead(404);
     rep.end('the page not found');  
    } 
    //rep.end("hello from the server");
     });
    
    server.listen(8000,'127.0.0.1',()=>{
        console.log('listening to request on port 8000');
    });