<footer class="footer_page">
        <hr class="footer">
        &copy;Half.net.ru 2023-...<br>
        По всем вопросам: <a href="mailto:feedback@half.net.ru">feedback@half.net.ru</a>
    </footer>
</body>
<script>
	$('.nav-toggle').on('click', function(){
		$('#menu').toggleClass('active');
	});
    if( $(document).height() <= $(window).height() ){		
        $(".footer_page").addClass("fixed-bottom");
    }
</script>
</html>