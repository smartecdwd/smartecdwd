	<script language="JavaScript">
   document.oncontextmenu = new Function("return false;")
</script>
<script>
    /*function check(e)
    {
    alert(e.keyCode);
    }*/
    document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                /*alert('not allowed');*/
           }
            return false;
    };
    </script>
	
	style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"