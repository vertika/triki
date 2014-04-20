
/*--- TODO Add categories to this -----*/
var categories = ['Agriculture', 'Arts', 'Business', 'Chronology'];

$( init );

$(function() {
  $( "#sortable" ).sortable();
  $( "#sortable" ).disableSelection();
});

function init()
{
  // create clump categories
  $('#categoryBox').append('<ul></ul>');
  var categoryTable = $('#categoryBox').children();
  categoryTable.attr('id','sortable');

  categories.forEach(function(entry) {
    categoryTable.append('<span class="label label-primary" id="draggable" id="'+ entry +'-Label" data="'+ entry + '">' + entry + '</span>');
    $(entry + "-Label").draggable( {
      containment: 'window',
      cursor: 'move',
      revert: true,
      helper: "clone"
    } );
  });

  // create the bin slots
  for ( var i=0; i<6; i++ ) {
    console.log("#bin"+i);
    $("#bin"+i).droppable( {
      accept: '#draggable',
      hoverClass: 'hovered',
      drop: handleCatDrop
    } );
  }

}

function handleCatDrop( event, ui )
{
  //Get category that was just dragged to this well
  var category = ui.draggable[0].innerText;

  //Set bin text to category name
  $(this).text(category)

  //Set bin's category data for use when the play button is hit
  $(this).data('category', category);
}
