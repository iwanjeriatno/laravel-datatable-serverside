use DataTables
.   
.
    public function datatable()
    {
        $data = PayrollItem::all();

        return DataTables::of($data)
        ->addColumn('action', function ($data) {
                return  '<div class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               <a class="dropdown-item" href=""><i class="la la-apps"></i> Edit</a>
                            </div>
                        </div>';
            })
        ->editColumn('id', '{{$id}}')
        ->make(true);
    }
.
.
