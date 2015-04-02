

function editForm(id)
{
    window.location = 'player/'+id+'/edit';
}

function deleteForm(id)
{
    /*bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {*/
            window.location = 'player/delete/'+id;
      /*  }
    }*/
//);
}
/* Table initialisation */
$(document).ready(function() {

    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": 'player/getAll',
        "bJQueryUI": true,
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "player_Id" },
            { "mData": "player_Name" },
            { "mData": "DOB" },
            { "mData": "permanent_Address" },
            { "mData": "temporary_Address" },
            { "mData": "blood_Group" },
            { "mData": "height" },
            { "mData": "weight" },
            { "mData": "complexion" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editForm(' + full['player_Id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteForm(' + full['player_Id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            }
        ]
    });

} );