import express from "express";

// Inicialización
const app = express()

//Configuraciones
app.set('port', process.env.PORT || 4000)

//Middlewares

//rutas

//Archivos Publicos


app.listen(app.get('port'), ()=>console.log('servidorior escuchando en el puerto: ', app.get('port')))
//Servidor