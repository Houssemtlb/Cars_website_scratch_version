<?php

class AdminAuthView extends View{

    public function show($data)
    {
        echo'
              <div style="display: flex;justify-content: center;flex-direction: column;align-items: center;height: 100%;background-color: #E3E3E3">
                      <h1>Acces Admin</h1>
                      <form style="margin-top: 50px" method="post" action="http://localhost/cars_website_scratch_version/admin/AdminHome">
                           <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" name="username" id="username" placeholder="Enter username">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                          </div>
                          <button id="adminAuthButton" type="submit" class="btn btn-secondary btn-lg btn-block">Login</button>
                    </form>
              </div>';

    }
}