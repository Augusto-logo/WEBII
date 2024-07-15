import sequelize from "../database/mysql.mjs";
import { DataTypes } from "sequelize";

const Veiculo = sequelize.define('Veiculonodes', {
    fabricante: DataTypes.STRING,
    modelo: DataTypes.STRING
});

await Veiculo.sync();

export default Veiculo;