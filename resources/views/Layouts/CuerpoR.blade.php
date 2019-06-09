<form>
       <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationServer01">NOMBRE</label>
            <input type="text" class="form-control is-valid" id="name" placeholder="name" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer02">APELLIDO</label>
            <input type="text" class="form-control is-valid" id="APELLIDO" placeholder="APELLIDO" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input type="text" class="form-control is-invalid" id="USERNAME" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationServer04">CONTRASEÑA</label>
            <input type="text" class="form-control is-valid" id="CONTRASENA" placeholder="CONTRASEÑA" value="" required>
            <div class="valid-feedback">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer05">CORREO</label>
            <input type="text" class="form-control is-invalid" id="CORREO" placeholder="CORREO" required>
            <div class="invalid-feedback">
              .
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer06">TELEONO</label>
            <input type="text" class="form-control is-invalid" id="TELEFONO" placeholder="TELEFONO" required>
            <div class="invalid-feedback">
              Please provide a valid PHONE.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer07">CARRERA</label>
            <input type="text" class="form-control is-invalid" id="CARRERA" placeholder="CARRERA" required>
            <div class="invalid-feedback">
              Please provide a valid CARRERA.
            </div>
          </div>
        </div>
        <div class="col-md-8 mb-6">
            <label for="validationServer08">CAMPO LABORAL</label>
            <input type="text" class="form-control is-invalid" id="CAMPO_LABORAL" placeholder="CAMPO LABORAL" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
            
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">ENVIAR</button>

        
      </form>
