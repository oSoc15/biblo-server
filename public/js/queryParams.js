function coverFormatter(value) {
    return '<img src="' + value + '" alt="image" class="table__image">';
}


function operateFormatter(value, row, index){
    return [
        '<a class="edit" href="" title="Edit">',
        'Wijzig ',
        '</a>',
        '|',
        '<a class="remove" href="" title="Remove">',
        ' Verwijderen ',
        '</a>'
    ].join('');
};

function queryParams() {
    return {
        type: 'owner',
        sort: 'updated',
        direction: 'desc',
        per_page: 100,
        page: 1
    };
}