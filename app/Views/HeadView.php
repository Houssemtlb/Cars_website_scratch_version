<?php
class HeadView extends View {


    //this class is going to load all the links and metadata required for all the pages
    public function show($data)
    {
        $PublicPath = "http://localhost/cars_website_scratch_version/public";

        echo "<html lang='fr'>
            <head>
                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
                <link rel='stylesheet' href='https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css' />
                <script src='https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js'></script>
                <link href='$PublicPath/assets/css/styleSheet.css' rel='stylesheet' type='text/css' />
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
                <title></title>
            </head>
            <body>";
    }
}



