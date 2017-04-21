     <div class="row">
       <div class="col-lg-3"></div>
          <div class="col-lg-6">
          <?php
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
          <fieldset class="field_set">
               <legend>Bejelentkezés</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="username" class="control-label">felhasználónév:</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="username" name="username" placeholder="felhasználónév" type="text" value="<?php echo set_value('username'); ?>" />
                    <span class="text-danger"><?php echo form_error('username'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group row">
                 <div class="col-lg-4 col-sm-4">
                   <br/>
                   <label for="password" class="control-label">jelszó:</label>
                 </div>
                 <div class="col-lg-8 col-sm-8">
                      <br/>
                      <input class="form-control" id="password" name="password" placeholder="jelszó" type="password" value="<?php echo set_value('password'); ?>" />
                      <span class="text-danger"><?php echo form_error('password'); ?></span>
                 </div>
               </div>

               <div class="row">
               <div class="col-lg-4"></div>
               <div class="col-lg-8 text-center">
                    <br/>
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="belépés" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="mégse" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
        <div class="col-lg-3">
     </div>
