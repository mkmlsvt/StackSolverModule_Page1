<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Stock Solver</title>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="./style/css/bootstrap.min.css">
</head>
<body class="container" style="background-color : #F4F4F4" >
    <div class="container-fluid flex-grow-1 container-p-y" style="padding-top:50px" >
        <form method = "POST" action= "plan-edit" id = "planform">
            <div class = "card mb-4">
                <div class = "card-body">
                    <div class ="form-row">   
                        <div class = "form-group col-md-6">
                            <label for = "material" class = "col-sm-2 col-form-label"> boru </label>                             
                            <input type= "text" required = "required" id = "material" name = "material"  class ="form-control" placeholder = "material tanımlama"/>                    
                                
                         </div>                        
                        <div class = "form-group col-md-6">
                            <label for = "name" class = "col-sm-2 col-form-label"> name </label>                           
                            <input type= "text" required = "required" id = "name" name = "name"  class = "form-control" placeholder = "plan name"/>
                        </div>
                    </div>
                </div>
            </div>
    
        <div class="card-body" style="background-color:white" >   
            <div class="row clearfix">
                <div class="col-md-12 column">
                <div class = "card-header with-elements">
                    <span class = "card-header-tittler mr-2 header-6"> <b>Elimdeki Stoklar<b> </span>
                </div>
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr >
                                <th class="text-center">
                                    #
                                </th>
                                <th class="text-center">
                                    Boru uzunlugu(metre)
                                </th>
                                <th class="text-center">
                                    Boru Adeti
                                </th>
                                <th class="text-center">
                                    Boru Tipi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0'>
                                <td>
                                1
                                </td>
                                <td>
                                <input type="number" name='boruUzunlugu0'  placeholder='Uzunluk' class="form-control"/>
                                </td>
                                <td>
                                <input type="number" name='BoruAdeti0' placeholder='Adet' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='BoruTipi0' placeholder='Tip' class="form-control"/>
                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" id="add_row" class="btn btn-success">Satır ekle</button>
            <button type="button" id="delete_row" class="btn btn-danger">Satır Sil</button>
           <!-- <a id="add_row" class="btn btn-default pull-left">Add Row</a>
            <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
            --> </div>         
            <br>
            <br>

            <div class="card-body" style="background-color:white" >   
            <div class="row clearfix">
                <div class="col-md-12 column">
                <div class = "card-header with-elements">
                    <span class = "card-header-tittler mr-2 header-6">Gerekli Parçalar</span>
                </div>
                    <table class="table table-bordered table-hover" id="Req_tab_logic">
                        <thead>
                            <tr >
                                <th class="text-center">
                                    #
                                </th>
                                <th class="text-center">
                                    Boru uzunlugu(metre)
                                </th>
                                <th class="text-center">
                                    Boru Adeti
                                </th>
                                <th class="text-center">
                                    Boru Tipi
                                </th>
                                <th class="text-center">
                                    Boru Etiketi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='Req_addr0'>
                                <td>
                                1
                                </td>
                                <td>
                                <input type="number" name='Req_boruUzunlugu0'  placeholder='Uzunluk' class="form-control"/>
                                </td>
                                <td>
                                <input type="number" name='Req_BoruAdeti0' placeholder='Adet' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='Req_BoruTipi0' placeholder='Tip' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='Req_BoruEtiket0' placeholder='Etiket' class="form-control"/>
                                </td>
                            </tr>
                            <tr id='Req_addr1'></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" id="Req_add_row" class="btn btn-success">Satır ekle</button>
            <button type="button" id="Req_delete_row" class="btn btn-danger">Satır Sil</button>
           <!-- <a id="add_row" class="btn btn-default pull-left">Add Row</a>
            <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
            --> </div>         
        </div>         
    </div> 
    <br>
    <br>
 <div class="container">
   <div class="row">
        <button type="submit" id="Save" class="btn btn-primary">KAYDET</button>
   </div>
</div>
</form>
    <script>
        $(document).ready(function(){
            var i=1;
            $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='boruUzunlugu"+i+"' type='number' placeholder='Uzunluk' class='form-control input-md'  /> </td><td><input  name=''BoruAdeti"+i+"' type='number' placeholder='Adet'  class='form-control input-md'></td><td><input  name='BoruTipi"+i+"' type='text' placeholder='Tİp'  class='form-control input-md'></td>");

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++; 
        });
            $("#delete_row").click(function(){
                if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
                }
            });

        });
     </script>
     <script>
        $(document).ready(function(){
            var j=1;
            $("#Req_add_row").click(function(){
            $('#Req_addr'+j).html("<td>"+ (j+1) +"</td><td><input name='Req_boruUzunlugu"+j+"' type='number' placeholder='Uzunluk' class='form-control input-md'  /> </td><td><input  name=''Req_BoruAdeti"+j+"' type='number' placeholder='Adet'  class='form-control input-md'></td><td><input  name='Req_BoruTipi"+j+"' type='text' placeholder='Tİp'  class='form-control input-md'></td><td><input name='Req_boruEtiket"+j+"' type='text' placeholder='Etiket' class='form-control input-md'/></td>");

            $('#Req_tab_logic').append('<tr id="Req_addr'+(j+1)+'"></tr>');
            j++; 
        });
            $("#Req_delete_row").click(function(){
                if(j>1){
                $("#Req_addr"+(j-1)).html('');
                j--;
                }
            });

        });
     </script>
</body>
</html>