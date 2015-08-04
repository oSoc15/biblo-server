{{--
 <td>
     <table class="nested-table" style="width: 100%;">
         <tr style="width: 50%;">
             <td class="foto" style="width: 50%;">
                 <img src="http://placehold.it/100x150">
             </td>
             <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                 <h4 style="margin-top: 0;">titel</h4>
                 <h5>Auteur</h5>
                 <h5>Genre</h5>
             </td>
         </tr>
     </table>
  </td>



  1) maak nen FOREACH van bovenstaande, met de juiste info waar nodig
  2) begin met <tr> en na 2 x de foreach te laten lopen doe je sluit je de </tr>,
     dan opnieuw openen, 2x en dan weer sluiten.

 --}}


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Uw afgeprinte suggesties</title>
    <style>
        #wrapper {
        margin:0 auto;
            width:600px;
            height:800px;
            font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .table{
            width:600px;
            height:800px;
        }

        .tr-table{
            background-color:#0b97c4;
            color:white;
        }

        .tr-table h5 {
        color:white;
        }

        .tr-table h5 a {
        font-weight:300;
        color:orange;
        text-decoration:none;
        }

        tr {
            width:50%;
        }


        h4 {
        margin-top:0;
        }


        .foto {
        width:50%;
        }

        .andere {
        width:50%;
        margin-top:0;
        padding-top:0;

        }
        .nested-table {
        width:100%;
        }

    </style>
</head>
<body>

<div id="wrapper" style="margin: 0 auto;width: 600px;height: 800px;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
   <table class="table" style="width: 600px;height: 800px;">
      <tr class="tr-table" style="width: 50%;background-color: #0b97c4;color: white;">
         <th colspan="2">
            <h3>Bieblo Suggesties</h3>
         </th>
      </tr>



        <tr style="width: 50%;">
            <td>
                <table class="nested-table" style="width: 100%;">
                    <tr style="width: 50%;">
                        <td class="foto" style="width: 50%;">
                            <img src="http://placehold.it/100x150">
                        </td>
                        <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                            <h4 style="margin-top: 0;">titel</h4>
                            <h5>Auteur</h5>
                            <h5>Genre</h5>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
            <table class="nested-table" style="width: 100%;">
                <tr style="width: 50%;">
                    <td class="foto" style="width: 50%;">
                        <img src="http://placehold.it/100x150">
                    </td>
                    <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                        <h4 style="margin-top: 0;">titel</h4>
                        <h5>Auteur</h5>
                        <h5>Genre</h5>
                    </td>
                </tr>
            </table>
        </td>
        </tr>

        <tr style="width: 50%;">
            <td>
                <table class="nested-table" style="width: 100%;">
                    <tr style="width: 50%;">
                        <td class="foto" style="width: 50%;">
                            <img src="http://placehold.it/100x150">
                        </td>
                        <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                            <h4 style="margin-top: 0;">titel</h4>
                            <h5>Auteur</h5>
                            <h5>Genre</h5>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
            <table class="nested-table" style="width: 100%;">
                <tr style="width: 50%;">
                    <td class="foto" style="width: 50%;">
                        <img src="http://placehold.it/100x150">
                    </td>
                    <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                        <h4 style="margin-top: 0;">titel</h4>
                        <h5>Auteur</h5>
                        <h5>Genre</h5>
                    </td>
                </tr>
            </table>
        </td>
        </tr>

        <tr style="width: 50%;">
            <td>
                <table class="nested-table" style="width: 100%;">
                    <tr style="width: 50%;">
                        <td class="foto" style="width: 50%;">
                            <img src="http://placehold.it/100x150">
                        </td>
                        <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                            <h4 style="margin-top: 0;">titel</h4>
                            <h5>Auteur</h5>
                            <h5>Genre</h5>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
            <table class="nested-table" style="width: 100%;">
                <tr style="width: 50%;">
                    <td class="foto" style="width: 50%;">
                        <img src="http://placehold.it/100x150">
                    </td>
                    <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                        <h4 style="margin-top: 0;">titel</h4>
                        <h5>Auteur</h5>
                        <h5>Genre</h5>
                    </td>
                </tr>
            </table>
        </td>
        </tr>

        <tr style="width: 50%;">
            <td>
                <table class="nested-table" style="width: 100%;">
                    <tr style="width: 50%;">
                        <td class="foto" style="width: 50%;">
                            <img src="http://placehold.it/100x150">
                        </td>
                        <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                            <h4 style="margin-top: 0;">titel</h4>
                            <h5>Auteur</h5>
                            <h5>Genre</h5>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
            <table class="nested-table" style="width: 100%;">
                <tr style="width: 50%;">
                    <td class="foto" style="width: 50%;">
                        <img src="http://placehold.it/100x150">
                    </td>
                    <td class="andere" style="width: 50%;margin-top: 0;padding-top: 0;">
                        <h4 style="margin-top: 0;">titel</h4>
                        <h5>Auteur</h5>
                        <h5>Genre</h5>
                    </td>
                </tr>
            </table>
        </td>
        </tr>
      <tr class="tr-table" style="width: 50%;background-color: #0b97c4;color: white;">
         <th colspan="2">
            <h5 style="color: white;">Ga naar de applicatie <a href="http://www.bieblo.be" style="font-weight: 300;color: orange;text-decoration: none;">hier</a></h5>
         </th>
      </tr>
   </table>
</div>



</body>
</html>


