<form class="form-horizontal" role="form" method="POST" action="/password/change">
    @csrf
    <div class="form-group">
        <label for="old_password" class="col-md-4 control-label">Ancien mot de passe</label>
        <div class="col-md-6">
            <input id="old_password" type="password" class="form-control" name="old_password" value="{{ old('old_password') }}" required>
         
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-md-4 control-label">Nouveau mot de passe</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>
        </div> 
        
    </div>
    <div class="form-group">
        <label for="password-confirm" class="col-md-4 control-label">Confirmer nouveau mot de passe</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary btn-block">
                Modifier
            </button>
        </div>
    </div>
</form>