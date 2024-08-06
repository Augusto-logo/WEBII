import { Sequelize } from "sequelize";

//const sequelize = new Sequelize("mysql://root:root@localhost:3306/dewii2024");
const sequelize = new Sequelize("mysql://root:root@localhost:3306/atividade_node");
sequelize.sync();

export default sequelize;