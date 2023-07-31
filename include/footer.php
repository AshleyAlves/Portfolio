<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col">
            <p>Desenvolvido por: Ashley de Freitas Alves - <span id="year">2022</span></p>                
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

<script>
$('#switch-style').change(function() {
// se estiver marcado
if ($(this).is(':checked')) {
    applyNight(); // este método aplica a classe para cor escura, veja ele mais a baixo
    createCookie("night",true,999) // adiciona um cookie para lembrar a cor mais tarde
} else {
    applyDay(); // este método aplica a classe para cor clara, veja ele mais a baixo 
//     swapStyleSheet('/css/style.css');
    eraseCookie("night") // remove o cookie que lembra a cor mais tarde
}
});
function applyNight()
{
$( "body" ).addClass( "night" );
}

function applyDay() {
$( "body" ).removeClass( "night" );
}
function readCookie(name) {
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

$('.main-header a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 500);
});
</script>

<script>
	AOS.init();

	 $('[data-fancybox]').fancybox({
		toolbar: true,
		hash: false,		
		protect: true,
		animationEffect: "zoom-in-out",
  		animationDuration: 1000,
  		transitionEffect: "zoom-in-out",
  		transitionDuration: 600
	});

</script>
