import express from 'express';
import cors from 'cors';
import session from 'express-session';
import sequelize from './database/mysql.mjs';
import CSS from 'connect-session-sequelize';

import userRouter from './routers/user_router.mjs';
import pizzasRouter from './routers/pizzas_router.mjs';

const app = express();
const port = 3000;

const SequelizeStore = CSS(session.Store);

app.use(
    session({
        secret: '#7UIERU933E00LERI##327345&6',
        store: new SequelizeStore({
            db: sequelize
        })
    })
);
sequelize.sync();
app.use(cors({
    origin: [
        'http://localhost:5500',
        'http://127.0.0.1:5500'
    ],
    credentials: true
}));

app.use(express.json());
app.use(express.urlencoded());

app.use('/user', userRouter);
app.use('/pizzas', pizzasRouter);
// app.use('/locacoes', locacaoRouter);

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`);
});



