<?php echo $map['js']; ?>
<div class="row">

	<div class="col-sm-4">
		<div class="card">
			<!-- Default panel contents -->
            <div class="card-heading">
                <b>PROVIDER</b>
            </div>
            <table class="table table-sm">
                <thead>
                    <tr><th>#</th>
                        <th>Nama Provider</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
            </table>
		</div>

        <div class="card">
            <!-- Default panel contents -->
            <div class="card-heading">
                <b>CEK KOORDINAT</b>
            </div>
            <div class="card-body">
                <form action="" method="GET">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nama Side</label>
                        <div class="col">
                            <input class="form-control" type="text" name="" placeholder="Nama Side">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Latitude</label>

                        <div class="col">
                            <input class="form-control" type="text" name="" placeholder="Latitude">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Longitute</label>

                        <div class="col">
                            <input class="form-control" type="text" name="" placeholder="Longitute">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-sm btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <!-- Default panel contents -->
            <div class="card-heading">
                <b>CELLPLAN</b>
            </div>
            <table class="table table-sm">
                <thead>
                    <tr><th>#</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td><input id="red" type="checkbox"></td>
                        <td>
                            <div for="red" class="btn btn-danger btn-sm">Zona Eksisting</div>
                        </td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="btn btn-info btn-sm">Zona Baru</div>
                        </td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card">
            <?php echo $map['html']; ?>
        </div>
    </div>
</div>