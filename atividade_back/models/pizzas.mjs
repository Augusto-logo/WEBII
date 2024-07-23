import sequelize from "../database/mysql.mjs";
import { DataTypes } from "sequelize";

const Pizzas = sequelize.define('pizzas', {
    nome: DataTypes.STRING,
    tamanho: DataTypes.STRING,
    preço: DataTypes.STRING,
    nota: DataTypes.STRING,
    vegetariana: DataTypes.STRING
});

await Pizzas.sync();

export default Pizzas;