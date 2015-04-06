<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable = yes">
<title>PL Drag and Drop</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>


<script>
 
var correctCards = 0;
$( init );
 
function init() {
 
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );
 
  // Reset the game
  correctCards = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
 
  // Create the pile of shuffled cards
  var numbers = [];
	numbers [ 0 ] = {x:1, y:'Alan Shearer'};
	numbers [ 1 ] = {x:2, y:'Andy Cole'};
	numbers [ 2 ] = {x:3, y:'Thierry Henry'};
	numbers [ 3 ] = {x:4, y:'Wayne Rooney'};
	numbers [ 4 ] = {x:5, y:'Frank Lampard'};
	numbers [ 5 ] = {x:6, y:'Robbie Fowler'};
  	numbers [ 6 ] = {x:7, y:'Les Ferdi-nand'};
	numbers [ 7 ] = {x:8, y:'Michael Owen'};
	numbers [ 8 ] = {x:9, y:'Teddy Shering- ham'};
	numbers [ 9 ] = {x:10, y:'Robin Van Persie'};
	
  numbers.sort( function() { return Math.random() - .1 } );
 
    for ( var i=0; i<10; i++ ) {
    $('<div>' + numbers[i].y + '</div>').data( 'number', numbers[i].x ).attr( 'id', 'card1' ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }
 
  // Create the card slots
  var words = [ '1st - 260 mål', '2nd - 188 mål ', ' 3rd - 176 mål ', '4th - 174 mål', '5th - 170 mål', '6th - 162 mål', '7th - 150 mål', '8th - 150 mål', '9th - 147 mål', '10th - 134 mål' ];
  for ( var i=1; i<=10; i++ ) {
    $('<div>' + words[i-1] + '</div>').data( 'number', i ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }
 
}

function handleCardDrop( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
 
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again
 
  if ( slotNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctCards++;
  } 
   
  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go
 
  if ( correctCards == 10 ) {
    $('#successMessage').show();
    $('#successMessage').animate( {
      left: '380px',
      top: '200px',
      width: '400px',
      height: '100px',
      opacity: 1
    } );
  }
 
}

</script>

</head>
<body>

 <h1>Velkommen til vår Drag&Drop funksjon </h1>
 <h4> Under ser du navnet på de ti personene som har skåret flest mål i Premier League historie.</br>
	Plasser kortene der du tror de passer!</h4>

<div id="content">
 
  <div id="cardPile"> </div>
  <div id="cardSlots"> </div>
 
  <div id="successMessage">
    <h2>Du klarte det</h2>
    <button onclick="init()">Spill igjen</button>
  </div>
 
</div>
 <footer><a href="quiz.php"> Tilbake</a>
    </footer>
</body>
</html>