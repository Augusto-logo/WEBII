import express from 'express';
import cors from 'cors';

import PizzasController from './controllers/pizzas_controller.mjs';

const app = express();
const port = 3000;

app.use(cors());

app.use(express.json());
app.use(express.urlencoded());

app.get('/pizzas', PizzasController.all);
app.get('/pizzas/:id', PizzasController.one);
app.post('/pizzas', PizzasController.new);
app.put('/pizzas', PizzasController.edit);
app.delete('/pizzas', PizzasController.remove);

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`);
});



