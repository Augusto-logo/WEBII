import sequelize from "../database/mysql.mjs";
import { DataTypes } from "sequelize";

const Veiculo = sequelize.define("VeiculoNode", {
    fabricante: DataTypes.STRING,
    modelo: DataTypes.STRING,
    cavalos: DataTypes.STRING,
})

await Veiculo.sync({  });

export default Veiculo;