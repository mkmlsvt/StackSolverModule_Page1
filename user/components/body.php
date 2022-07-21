<?php

function body()
{
    echo "
    <body class=\"container\">
        " . headerStr() . "
        <div class=\"container-fluid flex-grow-1 container-p-y>
        <form method = \"POST\" action= \"plan-edit\" id = \"planform\">
            <div class = \"card mb-4\">
                <div class = \"card-body\">
                    <div class = \"form-row\">   
                        <div class = \"form-group col-md-6\">
                            <label for = \"material\" class = \"col-sm-2 col-form-label\"> boru </label>                             
                            <input type= \"text\" required = \"required\" id = \"material\" name = \"material\"  class =\"form-control\" placeholder = \"material tanımlama\"/>                    
                                
                         </div>                        
                        <div class = \"form-group col-md-6\">
                            <label for = \"name\" class = \"col-sm-2 col-form-label\"> name </label>                           
                            <input type= \"text\" required = \"required\" id = \"name\" name = \"name\"  class = \"form-control\" placeholder = \"plan name\"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class = \"card mb-4\">
                <div class \"card-header with-elements\">
                    <span class = \"card-header-tittler mr-2 header-6\"> <b>Elimdeki Stoklar<b> </span>
                </div>
                <div class = \"card-body p-0\">
                    <table class = \"table card-table partsTable1d id=\"stocksTable\">
                        <thead class = \"thead-light\">
                            <tr>
                                <th class = \" indexCell>
                                    <label class = \"form-label\">#</label>
                                </th>
                                <th>
                                    <label class = \"form-label\">Uzunluk</label>
                                </th>
                                <th>
                                    <label class = \"form-label\">Adet</label>
                                </th>
                                <th>
                                    <label class = \"form-label\">Boru tipi</label>
                                </th> 
                                <th>
                                    <label class = \"form-label\">Ekle/Sil</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id=\"tbody\">
                            <tr class=\"partsRow\">
                                <td class = \"indexCell table-info>\">1</td>
                                <td>
                                    <input type=\"number\" id = \"stockLength\" class = \"form-control\">
                                </td>
                                <td>
                                    <input type=\"number\" id = \"stockCount\" class = \"form-control\">
                                </td>
                                <td>
                                    <input type=\"text\" id = \"stockType\" class = \"form-control\">
                                </td>
                                <td class = \"actionCell pr-2\">
                                    <button type = \"button\" class = \" btn btn-sm btn-outline-danger trRemoveStock \" tabindex=\"-1\">
                                        <span class = \"ion ion-md-close-circle-outline\">Sil</span>                                      
                                    </button>
                                    <button type = \"button\" class = \" btn btn-sm btn-outline-primary\" onclick = \"addItem();\" tabindex=\"-1\">
                                        <span class = \"ion ion-md-close-circle-outline\">Ekle</span>                                      
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        </div>
        <script>
            var items = 0;
            function addItem()
            {
                items++;
                var html = \"<tr>\";
                html += \"<td>\" + items + \"</td>\";
                html += \"<td> <input name =\'stockLength[]\'></td>\" 
                html += \"<td> <input name =\'stockCount[]\'></td>\" 
                html += \"<td> <input name =\'stockType[]\'></td>\" 
                html += \"</tr>
                document.getElementById(\"tbody\").insertRow().innerHTML = html;
            }
    </script>  
        " . footer() . "
    <body />
    <script>
            var items = 0;
            function addItem()
            {
                items++;
                var html = \"<tr>\";
                html += \"<td>\" + items + \"</td>\";
                html += \"<td> <input name =\'stockLength[]\'></td>\" 
                html += \"<td> <input name =\'stockCount[]\'></td>\" 
                html += \"<td> <input name =\'stockType[]\'></td>\" 
                html += \"</tr>
                document.getElementById(\"tbody\").insertRow().innerHTML = html;
            }
    </script>  
     
    </html>
    ";
}
function headerStr()
{
    return "
    <h3 >Header Gelecek</h3>
    ";
}
function footer()
{
    return "
    <h3>Footer gelecek </h3> 
    ";
}
