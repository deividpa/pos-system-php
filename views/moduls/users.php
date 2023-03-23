<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Control Panel: <b>Users</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="main">Home</a></li>
            <li class="breadcrumb-item active">Manage Users</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Manage Users</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <br />
        <div class="d-block"> 
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
            Add new user
          </button>
        </div> 
      </div>
      <div class="card-body">
        Start creating your amazing application!
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último Login</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">Usuario Administrador</td>
              <td class="align-middle">admin</td>
              <td class="align-middle">
                <img src="views/img/users/default/avatarAnon.png" alt="Profile picture" class="img-thumbnail" width="40px"  />
              </td>
              <td class="align-middle">Administrador</td>
              <td class="align-middle"><button class="btn btn-success btn-sm">Activado</button></td>
              <td class="align-middle">2023-03-20 12:05:32</td>
              <td class="align-middle">
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                  <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- Creación de modal para agregar nuevo usuario -->
<div class="modal fade" id="modalAddUser">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cuerpo de Página</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary">Guardar Cambios</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
