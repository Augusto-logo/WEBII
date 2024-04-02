const testeFetch = () => {
    
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/MG/municipios')
    .then((Response)=>{
        return Response.json();
    
    })
    .then((json) => {
        for (let i = 0; i < json.length; i++) {
            console.log(json[i].id + ' ' + json[i].nome);
        }
    })

}

export default testeFetch;