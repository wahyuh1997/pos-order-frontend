/*********************************************************************
 * teatimeSelect
 *
 * this is global function for all select2 for regular function
 *********************************************************************/
teatimeSelect();

selectRefresh()

var dtb_serverside;

// DATATABLES DYNAMIC SERVER SIDE  
function refreshDtbServerSide() {
  let emptyTable = $('.empty-table').html();
  $('#dtb-serverside').DataTable().clear();
  $('#dtb-serverside').DataTable().destroy();
  dtb_serverside = $('#dtb-serverside').DataTable({
    fixedHeader: true,
    fixedHeader: {
      headerOffset: $('.navbar').outerHeight()
    },
    "language": {
      "emptyTable": emptyTable
    },
    "scrollX": true,
    "pageLength": dtb_entries_length,
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
      "url": $('#dtb-serverside').attr('href'),
      "type": "POST",
      "async": true
    },
    createdRow: function (row, data, dataIndex) {
      if (data.DT_RowData != null) {
        $(row).attr('data-id', data.DT_RowData.pid);
      }
    },
    "rowCallback": function (row, data) {
      if ($.inArray(data.DT_RowId, selected) !== -1) {
        $(row).addClass('selected');
      }
    },
  });
}

function templateResult(item, container) {
  // replace the placeholder with the break-tag and put it into an jquery object
  var text = item.text.replace(new RegExp("\n", "g"), '<br/>');
  return $('<span>' + text + '</span>');
}

function templateSelection(item, container) {
  // replace your placeholder with nothing, so your select shows the whole option text
  return item.text.replace('[br]', '');
}

function teatimeSelect() {
  $('.teatimeSelect').each(function () {
    // get the url of elements
    var select2Url = $(this).data('url');
    // run select2 function for each elements
    var more = true;
    if (more == true) {
      $(this).select2({
        placeholder: "Select option",
        allowClear: true,
        ajax: {
          url: select2Url,
          dataType: 'json',
          data: function (params) {
            var query = {
              search: params.term,
              page: params.page || 0
            }

            return query
          },
          processResults: function (data, params) {
            params.page = params.page || 0;

            if (data.pagination.more == true) {
              return {
                results: data.results,
                pagination: {
                  more: (params.page * 7) < data.count_filtered
                }
              };
            } else {
              more = false;
              $('.select2-results__option--load-more').remove();
            }
          },
        },
        templateResult: templateResult,
        templateSelection: templateSelection
      });
    }
  });
}

/* Regular Select2 */
$('.myselect2').select2({
  templateResult: templateResult,
  templateSelection: templateSelection
});

function selectRefresh() {
  $('.myselect2').each(function () {
    $(this).select2({
      templateResult: templateResult,
      templateSelection: templateSelection
    });
  });
}