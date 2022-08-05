/**
 * JAVASCRIPT
 */
var origin_dtb2_item_url = '';
teatimeSelect();

selectRefresh()

$('.nav-item .nav-link').on('click', function () {
  setTimeout(function () {
    selectRefresh();
  }, 1000)
});

var dtb_serverside = $('#dtb-serverside').DataTable();
// DATATABLES DYNAMIC SERVER SIDE  
function refreshDtbServerSide() {
  $('#dtb-serverside').DataTable().clear();
  $('#dtb-serverside').DataTable().destroy();
  $('#dtb-serverside').DataTable({
    fixedHeader: {
      header: true,
      headerOffset: $('#header').height()
    },

    "scrollX": true,
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
      "url": $('#dtb-serverside').attr('href'),
      "type": "POST"
    },
    "rowCallback": function (row, data) {
      // if ($.inArray(data.DT_RowId, selected) !== -1) {
      //   // $(row).addClass('selected');
      // }
    }
  });
}

function refreshDtbServerSide2() {
  $('#dtb-serverside2').DataTable().clear();
  $('#dtb-serverside2').DataTable().destroy();
  $('#dtb-serverside2').DataTable({
    "scrollX": true,
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
      "url": $('#dtb-serverside2').attr('href'),
      "type": "POST"
    }
  });
}

// define datatable and summernote
$('#dataTable').DataTable({
  "scrollX": true
});

$('.show-item-sel').on('click', function () {
  // check for company id
  if ($('input[name="po_number_type"]')) {
    if ($('input[name="po_number_type"]').val() == 1) {
      var origin_dtb2_item_url = base_url + 'server-side/item_server_side/default_data';
      $('.table-dtb-item').attr('href', origin_dtb2_item_url);
    } else if ($('input[name="po_number_type"]').val() == 2) {
      let ref_company_id = $('.ref_company_id').val();
      var origin_dtb2_item_url = base_url + 'server-side/item_server_side/default_data/' + ref_company_id;
      $('.table-dtb-item').attr('href', origin_dtb2_item_url);
    }

    setTimeout(function () {
      refreshDtbServerSide2();
    }, 100);
  } else {
    setTimeout(function () {
      refreshDtbServerSide2();
    }, 100);
  }
});

/**
 * Uncheck selected data
 */
$(document).on('click', '.uncheck-selected-data', function () {
  selected = []
  refreshDtbServerSide()
  $('.table-tools').remove()
})

function formatDesign(item) {
  var selectionText = item.text.split(".");
  var $returnString = selectionText[0] + "</br>" + selectionText[1];
  return $returnString;
};


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
        dropdownParent: $(this).parent(),
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
  dropdownParent: $(this).parent(),
  templateSelection: templateSelection
});

function selectRefresh() {
  $('.myselect2').each(function () {
    $(this).select2({
      templateResult: templateResult,
      dropdownParent: $(this).parent(),
      templateSelection: templateSelection
    });
  });
}