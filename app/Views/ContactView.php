<?php

class ContactView extends View{
    public function show($data)
    {
        echo"<div class='section' style='padding-bottom: 150px'>";
            echo"<h1>Contactez nous</h1>";
            foreach ($data as $contact) {
                echo "
                    <a class='card' style='margin-bottom: 20px;width: 800px; text-decoration: none;color: black; padding: 10px;border-radius: 8px'>
                        <div style='display: flex; flex-direction: row; align-items: center; width:100%'>";
                echo "
                            <div style='display: flex;flex-direction: column; margin-left: 10px'>
                                <h6>Contact : $contact[nom] $contact[prenom]</h6>
                                <h6>email : $contact[email]/5</h6>
                            </div>";
                echo "
                        </div>
                    </a>";
            }
        echo"</div>";
    }
}
