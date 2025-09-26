const express = require('express')
const app = express()

//enrutador basico
app.get('/', (req, res)=>{
    res.send("Inicio")
})

app.get('/about', (req, res)=>{
    res.send("Acerca de")
})

app.get('/nosotros', (req, res)=>{
    res.send("Sobre nosotros")
})

app.get('/productos', (req, res)=>{
    res.send("Sobre nuestros productos")
})

//Obtener imagenes
app.get('/imagenes', (req, res)=>{
    res.sendFile('./src/img/express.jpg', {
        root:__dirname
    })
})

//Obtener JSON
app.get('/user', (req, res)=>{
    res.json({'name': 'Jesus'})
})


//Peticiones Post
app.post('/productos', (req, res)=>{
    res.send('Creando productos')
})

//Petición Put
app.put('/productos', (req, res)=>{
    res.send('Actualizando productos')
})

//Petición Delete
app.delete('/productos', (req, res)=>{
    res.send('Eliminado productos')
})

//Petición Patch
app.patch('/productos', (req, res)=>{
    res.send('Actualizando sólo una parte (dato) de productos')
})

//Verificar estado del servidor
app.get('/server', (req, res)=>{
    res.sendStatus(204)
})

//manejo de ruta no encontrada
app.use((req, res)=>{
    res.send('La página solicitada no fue encontrada')
})

//Creación del servidor
const port = 3000

app.listen(port)
console.log(`Servidor funcionando en el puerto ${port}`)