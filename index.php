<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        
    
    <div class="row">
        <div class="col-sm-6">
            <h1>Dados da vitima</h1>
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="">Nome da Vitima: </label>
                    <input type="text" class="form-control" name="vit_name">
                </div>
                <div class="form-group">
                    <label for="">Idade: </label>
                    <input type="text" class="form-control" name="vit_id">
                </div>
                <div class="form-group">
                    <label for="">Documento</label>
                    <input type="text" class="form-control" name="vit_doc">
                </div>
                <div class="form-group">
                    <label for="">Contato: </label>
                    <input type="text" class="form-control" name="vit_con">
                </div>
                <div class="form-group">
                    <label for="">Descrição do Ocorrido: </label>
                    <textarea rows="5" class="form-control" name="ext_desc"></textarea>
                    <small id="help" class="form-text text-muted"></small>
                </div>
                
                
            
        </div>
        
        <div class="col-sm-6">
            <h1>Dados Extras</h1>
                <div class="form-group">
                    <label for="">Nome do Atendente:  </label>
                    <input type="text" class="form-control" name="col_name">
                </div>
                <div class="form-group">
                    <label for="">RA: </label>
                    <input type="text" class="form-control" name="col_ra">
                </div>
                <div class="form-group">
                    <label for="">Amigo: </label>
                    <input type="text" class="form-control" placeholder="Adicione o contato de um amigo da festa" name="ext_amg">
                </div>
                <div class="form-group">
                    <label for="">Descrição do Suspeito: </label>
                    <textarea rows="5" class="form-control" name="ext_susp"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>

        
    </div>    























    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>