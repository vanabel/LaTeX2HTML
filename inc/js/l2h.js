// Since WP work in compatibility mode, we should use jQuery instead of $
jQuery( function($){
  // document ready function
  // alert('We are ready!');
  // click outside of jquery ui to close
  $(document.body).on( "click", ".ui-widget-overlay", function(){
    $.each(
      $( ".ui-dialog" ), function(){
	var dialog;
	dialog=$(this).children(".ui-dialog-content");
	if( dialog.dialog( "option", "modal" ) ){
	  dialog.dialog("close");
	}
      });
  });
  // click to clean bibtex input and double click to restore
  var bibitem ='';
  $('textarea#bibitems')
    .focus( function(){
      bibitem = $(this).val();
      $(this).val( '' );
    }).dblclick(function(){
      $(this).val( bibitem );
    });
  // select template of latex
  $('pre#latex_template').click( function(){
    var refNode = $( this )[0];
    if ( $.browser.msie ) {
      var range = document.body.createTextRange();
      range.moveToElementText( refNode );
      range.select();
    } else if ( $.browser.mozilla || $.browser.opera ) {
      var selection = window.getSelection();
      var range = document.createRange();
      range.selectNodeContents( refNode );
      selection.removeAllRanges();
      selection.addRange( range );
    } else if ( $.browser.safari ) {
      var selection = window.getSelection();
      selection.setBaseAndExtent( refNode, 0, refNode, 1 );
    }
  });

  $('#wrd_contribute').click( function(){
    $( '#paymds' ).css( 'display', 'none' );
  });

  $('#donation').click( function(){
    $('#imgpaypal').show();
    $('#imgtenpay').hide();
    $('#imgalipay').hide();
    $('#paypal').prop('checked', true);
    $('#paymds').css("display", "block");
    $('#wrd_contribute').prop('checked', false);
  });

  $('#paymds').change(function(){
    var img = $(this).find(":checked").attr('id');
    if( img == 'paypal' ){
      $('#imgpaypal').show();
      $('#imgtenpay').hide();
      $('#imgalipay').hide();
    }
    if( img == 'tenpay' ){
      $('#imgpaypal').hide();
      $('#imgtenpay').show();
      $('#imgalipay').hide();
    }
    if( img == 'alipay' ){
      $('#imgpaypal').hide();
      $('#imgtenpay').hide();
      $('#imgalipay').show();
    }
  });
  //set the height of iframe
    $('iframe').css('height', $('#wpfooter').position().top-$('.nav-tab-wrapper').next('h2').position().top-$('.nav-tab-wrapper').next('h2').outerHeight(true)-$('.about-text').outerHeight(true));
    $('iframe').css('width', $(window).width() * 0.9 | 0);
	$('#diviframe').height( $('iframe').height()-18 );
	$('#diviframe').width( $('iframe').width()-18 );
	console.log(
	[
	$(window).height(), 
	$( document ).height(), 
	$('iframe').position().top, 
	$('#wpfooter').position().top, 
	$('#wpfooter').outerHeight(true), 
	$('#wpadminbar').outerHeight(true), 
	$('h1').outerHeight(true),
	$('.about-text').children('p').outerHeight(true), 
	$('.nav-tab-wrapper').outerHeight(true),
	$('.nav-tab-wrapper').next('h2').outerHeight(true)]
	)
});
