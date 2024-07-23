import Pizzas from "../models/pizzas.mjs";

const PizzasController = {
    "new": async (req, res) => {
        // console.log(req.body);
        const created = await Pizzas.create({
            nome: req.body.nome,
            tamanho: req.body.tamanho,
            preço: req.body.preço,
            nota: req.body.nota,
            vegetariana: req.body.vegetariana
        });
        res.send(created);
    },
    "one": async (req, res) => {
        const v = await Pizzas.findOne({
            where: { id: req.params.id }
        });
        res.json(v);
    },
    "all": async (req, res) => {
        res.json(await Pizzas.findAll());
        
    },
    "edit": async (req, res) => {
        const v = await Pizzas.findOne({
            where: { id: req.body.id }
        });c
        v.nome = req.body.nome;
        v.tamanho = req.body.tamanho;
        v.preço = req.body.preço;
        v.nota = req.body.nota;
        v.vegetariana = req.body.vegetariana;
        await v.save();
        res.json(v);
    },
    "remove": async (req, res) => {
        const v = await Pizzas.findOne({
            where: { id: req.body.id }
        });
        await v.destroy();
        res.json(v);
    }
};

export default PizzasController;


/*
const PizzasController = Object.create(Object.prototype);

PizzasController.all = async (req, res) => {};

PizzasController.one = async (req, res) => {
    const v = await Pizzas.findOne({
        where: { id: req.params.id }
    });
    res.json(v);
};

PizzasController.new = async (req, res) => {};
PizzasController.edit = async (req, res) => {};
PizzasController.remove = async (req, res) => {};
*/