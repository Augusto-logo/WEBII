import express from 'express';
import cors from 'cors';
import VeiculoController from './controllers/veiculo_controller.mjs';

const app = express();
const port = 3000;

app.use(cors());

app.use(express.json());
app.use(express.urlencoded());

app.get('/veiculos', VeiculoController.all);
app.get('/veiculos/:id', VeiculoController.one);
app.post('/veiculos', VeiculoController.new);
app.put('/veiculos', VeiculoController.edit);
app.delete('/veiculos', VeiculoController.remove);

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`);
});
