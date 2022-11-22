<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container"> 
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="row align-items-center">                    
                    <div class="col-6 p-4 p-md-5 formulario">
                        <div class="w-100">
                            <h3>Cadastrar</h3>
                        </div>
                        <form>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="label-control">Nome:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="col">
                                        <label class="label-control">Sobrenome:</label>
                                        <input class="form-control">
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="label-control">Email:</label>
                                <input class="form-control" type="email" placeholder="example@email.com.br">
                            </div> 
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="label-control">Senha:</label>
                                        <input class="form-control" type="password" placeholder="6-10 characters">
                                    </div>
                                    <div class="col">
                                        <label class="label-control">Confirmação da Senha:</label>
                                        <input class="form-control" type="password" placeholder="6-10 characters">
                                    </div>
                                </div>                                
                            </div>  
                            <div class="form-group mb-3">
                                <label class="label-control">Data de Nascimento:</label>
                                <input class="form-control" type="date">
                            </div>  
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="label-control">Endereço:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="col">
                                        <label class="label-control">Número:</label>
                                        <input class="form-control" type="number">
                                    </div>
                                </div>                                
                            </div> 
                                <div class="row">
                                    <div class="col">
                                        <label class="label-control">Cidade:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="col">
                                        <label class="label-control">Estado:</label><br>
                                        <select id="estado" name="estado" class="form-select">
                                            <option selected>Selecione um estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="EX">Estrangeiro</option>
                                        </select> 
                                    </div>
                                </div><br>   
                            <button class="btn btn-primary">Salvar</button>
                            <a href="index.php" class="btn btn-secondary">Voltar</a>                                      
                        </form>
                    </div><!--termino formulario-->
                    <div class="col-6">
                        <img class="img" src="foto.png" width="300px">
                    </div>
                </div>                
            </div>
        </div>   
    </main>
</body>
</html>