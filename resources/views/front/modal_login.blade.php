@if (Session::has('npm'))

<div class="modal fade bs-example-modal-lg" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title w-100 font-weight-bold">Hallo !</h4>
        <p>Silahkan masuk menggunakan <i>npm</i> dan <i>password</i> AMIKOM anda.</p>
      </div>
    </div>
  </div>
</div>


@else

<div class="modal fade bs-example-modal-lg" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title w-100 font-weight-bold">Login User</h4>
        <hr>
        <p><small>untuk akses semua informasi</small><br/>
        Silahkan masuk menggunakan <i>npm</i> dan <i>password</i> AMIKOM anda.</p>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <form action="{{route('loginuser') }}" method="POST">
        @csrf

        <label>NPM</label>
          <input type="text" name="npm" id="npm" class="form-control">
        </div>

        <div class="md-form mb-4">
          <label>Password </label>
          <input type="password" name="password" class="form-control">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endif