<?php
require_once("../app/Core/View.php");
class BottomView extends View {
    //this class is going to load all the scripts required for all the pages and close the page
    public function show($data)
    {
        //calls for your scripts (empty for now)

        echo"</body>
                </html>";
    }
}