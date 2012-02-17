//---- JQuery Snippets-----

//Char Limit in TextArea:

//------(Head)
<!-- Limit Start -->
    <script language="javascript">
    function limitChars(textid, limit, infodiv)
    {
      var text = $('#'+textid).val(); 
      var textlength = text.length;
      if(textlength > limit)
      {
        $('#' + infodiv).html('O limite' + '&eacute;' + 'de' +limit+ 'caracteres');
        $('#'+textid).val(text.substr(0,limit));
        return false;
      }
      else
      {
        $('#' + infodiv).html((limit - textlength) +' caracteres.');
        return true;
      }
    }

    $(function(){
      $('#textarea').keyup(function(){
        limitChars('textarea', 20, 'charlimitinfo');
      })
    });
    </script>
    <!-- Limit End -->


//------(Body)
  <div style="padding:10px">
  <textarea name="textarea" id="textarea" rows="6" cols="50"></textarea><br />
  <span id="charlimitinfo" style=" float:left; color:#aa3333; font-size:15px; font-family:vardana" ></span> 
  </div>