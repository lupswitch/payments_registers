<div class="app">

	<div class="row mb-2 justify-content-end">
		<button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#modalNew">
			Nueva
		</button>
	</div>

	<div class="row justify-content-center">
		<table class="table table-bordered">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Concepto</th>
	      <th scope="col">Total</th>
	      <th scope="col">Status</th>
				<th scope="col">Limite</th>
				<th scope="col">Opciones</th>
	    </tr>
	  </thead>
	  <tbody>
			{pays}
	    <tr>
	      <th scope="row">{id}</th>
	      <td>{concept}</td>
	      <td>{total}</td>
	      <td>{status}</td>
				<td>{expires}</td>
				<td>
					<button type="button" name="button" class="btn btn-info">Editar</button>
					<button type="button" name="button" class="btn btn-danger">Eliminar</button>
				</td>
	    </tr>
			{/pays}
	  </tbody>
	</table>
	</div>

	<div class="row">
	<!-- Modal -->
	<div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="modalNewLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalNewLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	</div>

</div>
