import { Router } from 'express';

import PizzasController from '../controllers/pizzas_controller.mjs';

const pizzasRouter = Router();

pizzasRouter.use((req, res, next) => {
    if (req.session.logged) {
        next();
    } else {
        res.json({ logged: false });
    }
});

pizzasRouter.get('/', PizzasController.all);
pizzasRouter.get('/:id', PizzasController.one);
pizzasRouter.post('/', PizzasController.new);
pizzasRouter.put('/', PizzasController.edit);
pizzasRouter.delete('/', PizzasController.remove);

export default pizzasRouter;