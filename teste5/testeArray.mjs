function testeArray () {

    const obj = [
        {"nome": "Jonas", "idade:": 19},
        {"nome": "Jonas", "idade:": 19}
    ];
    
    for (let i = 0; i < obj.length; i++) {
        const element = obj[i];
        console.log(element);
    }

}

export default testeArray;



