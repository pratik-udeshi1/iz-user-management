<div class="container">
    <div id="signupbox" class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-body" >
                <form id="userForm" class="form-inline" method="post" autocomplete="off">

                    @csrf

                    <div id="div_id_error" class="form-group col-md-12"></div>

                    <input type="hidden" name="user_id" id="user_id">
                    <div id="div_id_name" class="form-group col-md-8 mb-10" >
                        <label for="id_name" class="control-label col-md-4"> Name<span class="">*</span> </label>
                        <div class="col-md-8">
                            <input class="form-control" id="id_name" maxlength="40" name="name" placeholder="Enter Name" type="text" />
                        </div>
                    </div>
                    <div id="div_id_email" class="form-group col-md-8 mb-10" >
                        <label for="id_email" class="control-label col-md-4"> Email</label>
                        <div class="col-md-8">
                            <input class="form-control" id="id_email" maxlength="40" name="email" placeholder="Enter Email" type="email" />
                        </div>
                    </div>
                    <div id="div_id_phone" class="form-group col-md-8 mb-10" >
                        <label for="id_phone" class="control-label col-md-4"> Phone</label>
                        <div class="col-md-8">
                            <input class="form-control" id="id_phone" maxlength="20" name="phone" placeholder="Enter Phone" type="text" />
                        </div>
                    </div>
                    <div id="div_id_city" class="form-group col-md-8 mb-10" >
                        <label for="id_city" class="control-label col-md-4"> City</label>
                        <div class="col-md-8">
                            <input class="form-control" id="id_city" maxlength="20" name="city" placeholder="Enter City" type="text" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>