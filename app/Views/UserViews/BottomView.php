<?php
class BottomView extends View {
    //this class is going to load all the scripts required for all the pages and close the page
    public function show($data)
    {
        //calls for your scripts (empty for now)

        echo"   <script src='http://localhost/cars_website_scratch_version/public/assets/js/ComparatorsScript.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
                </body>
                </html>";
    }
}