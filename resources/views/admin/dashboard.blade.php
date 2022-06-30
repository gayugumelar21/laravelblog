<!-- mengimpor file master.blade.php sebagai kerangka tampilan -->
@extends('admin.layout.master')

@push('css')
<!-- CSS tambahan halaman dashboard jika ada -->
@endpush

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <p>Welcome to admin dashboard, <strong>{{ Auth::user()->name }}</strong></p>
</main>
@endsection

@push('js')
<!-- JS tambahan halaman dashboard jika ada -->
@endpush