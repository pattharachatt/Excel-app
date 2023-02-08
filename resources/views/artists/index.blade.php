@extends('layouts.app')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="#">
            {{ 'Add Artist' }}
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ 'Artists List' }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="row table table-bordered table-striped table-hover datatable datatable-Artist">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ 'No.' }}
                        </th>
                        <th>
                            {{ 'Name(EN)' }}
                        </th>
                        <th>
                            {{ 'Name(TH)' }}
                        </th>
                        <th>
                            {{ 'Birth of date' }}
                        </th>
                        <th>
                            {{ 'Place of date' }}
                        </th>
                        <th>
                            {{ 'Address' }}
                        </th>
                        <th>
                            {{ 'About the artist' }}
                        </th>
                        <th>
                            {{ 'Master of work1' }}
                        </th>
                        <th>
                            {{ 'Master of work2' }}
                        </th>
                        <th>
                            {{ 'Master of work3' }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artists as $key => $artist)
                    <tr data-entry-id="{{ $artist->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $artist->id ?? '' }}
                        </td>
                        <td>
                            {{ $artist->id ?? '' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'Delete'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('Nothing to selected')

        return
      }

      if (confirm('Are you sure?')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Artist:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection