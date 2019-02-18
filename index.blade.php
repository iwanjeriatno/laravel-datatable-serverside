<link rel="stylesheet" href="{{ asset('datatables.bundle.css') }}">
.
.
<div class="table-responsive">
    <table class="table table-striped- table-bordered table-hover table-checkable id="m_table_1" data-url="{{ route('komponen-gaji.datatable') }}">
    	<thead class="text-center">
    		<tr>
    			<th width="1%">No</th>
          <th>Nama Komponen</th>
          <th>Deskripsi</th>
          <th>Kategori</th>
          <th>Sub Kategori</th>
          <th>Kode Akun</th>
          <th>Jumlah (Rp)</th>
          <th>Default</th>
          <th class="text-center" width="10%">Aksi</th>
    		</tr>
    	</thead>
    	<tbody class="text-left"></tbody>
    </table>
</div>
.
.
<script type="text/javascript" src="{{ asset('datatables.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('script.js') }}"></script>
