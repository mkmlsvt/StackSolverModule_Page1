
<?php
function head()
{
    echo "
    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Stock Solver</title>
        <link rel=\"stylesheet\" href=\"./style/css/bootstrap.min.css\">
    </head>
";
}
?>

<table class = "table card-table partsTable1d" id="stocksTable">
                        <thead class = "thead-light">
                            <tr>
                                <th class = "indexCell">
                                    <label class = "form-label">#</label>
                                </th>
                                <th>
                                    <label class = "form-label">Uzunluk</label>
                                </th>
                                <th>
                                    <label class = "form-label">Adet</label>
                                </th>
                                <th>
                                    <label class = "form-label">Boru tipi</label>
                                </th> 
                                <th>
                                    <label class = "form-label">Ekle/Sil</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr class="partsRow">
                                <td class = "indexCell table-info">1</td>
                                <td>
                                    <input type="number" id = "stockLength" class = "form-control">
                                </td>
                                <td>
                                    <input type="number" id = "stockCount" class = "form-control">
                                </td>
                                <td>
                                    <input type="text" id = "stockType" class = "form-control">
                                </td>
                                <td class = "actionCell pr-2">
                                    <button type = "button" class = " btn btn-sm btn-outline-danger trRemoveStock" tabindex="-1">
                                        <span class = "ion ion-md-close-circle-outline">Sil</span>                                      
                                    </button>
                                    <button type = "button" class = " btn btn-sm btn-outline-primary" onclick = "addItem();" tabindex="-1">
                                        <span class = "ion ion-md-close-circle-outline">Ekle</span>                                      
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>