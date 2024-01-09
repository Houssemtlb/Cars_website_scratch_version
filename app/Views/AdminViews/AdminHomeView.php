<?php

class AdminHomeView extends View{

    public function show($data)
    {
        echo "<div style='display: flex;flex-direction: column;justify-content: center;align-items: center;height: 100%;background-color: #E3E3E3'>
                       <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 200px' href='http://localhost/cars_website_scratch_version/admin/AdminMV'>
                            <div style='display: flex; flex-direction: row; align-items: center; width:100%'>
                                <img src='http://localhost/cars_website_scratch_version/admin/assets/images/cars.png'  alt='cars'/>
                                <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                    <h6>Vehicules</h6>
                                </div>
                            </div>
                       </a>
                       <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 200px' href='http://localhost/cars_website_scratch_version/admin/AdminAvis'>
                            <div style='display: flex; flex-direction: row; align-items: center; width:100%'>
                                <img src='http://localhost/cars_website_scratch_version/admin/assets/images/avis.png'  alt='avis'/>
                                <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                    <h6>Avis</h6>
                                </div>
                            </div>
                       </a>
                       <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 200px' href='http://localhost/cars_website_scratch_version/admin/AdminNews'>
                            <div style='display: flex; flex-direction: row; align-items: center; width:100%'>
                                <img src='http://localhost/cars_website_scratch_version/admin/assets/images/news.png'  alt='news'/>
                                <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                    <h6>News</h6>
                                </div>
                            </div>
                       </a>
                       <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 200px' href='http://localhost/cars_website_scratch_version/admin/AdminUsers'>
                            <div style='display: flex; flex-direction: row; align-items: center; width:100%'>
                                <img src='http://localhost/cars_website_scratch_version/admin/assets/images/users.png'  alt='users'/>
                                <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                    <h6>Users</h6>
                                </div>
                            </div>
                       </a>
                       <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 200px' href='http://localhost/cars_website_scratch_version/admin/AdminParametres'>
                            <div style='display: flex; flex-direction: row; align-items: center; width:100%'>
                                <img src='http://localhost/cars_website_scratch_version/admin/assets/images/parametres.png'  alt='parametres'/>
                                <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                    <h6>Parametres</h6>
                                </div>
                            </div>
                       </a>
               </div>";
    }
}