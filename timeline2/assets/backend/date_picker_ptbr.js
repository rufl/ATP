<script>
// pt-br localization
   $.tools.dateinput.localize("pt-br",  {
     months:        'janeiro,fevereiro,mar&ccedil;o,abril,maio,junho,julho,agosto,' +
                   	'setembro,outubro,novembro,dezembro',
     shortMonths:   'jan,fev,mar,abr,mai,jun,jul,ago,set,out,nov,dez',
     days:          'segunda,ter&ccedil;a&#45;feira,quarta&#45;feira,quinta&#45;feira,sexta&#45;feira,s&aacute;bado,domingo',      
     shortDays:     'seg,ter,qua,qui,sex,sab,dom'
    });
// dateinput initialization. the language is specified with lang- option
    $(":date").dateinput({ 
	    lang: 'pt-br', 
	    format: 'dddd dd, mmmm yyyy',
	    offset: [30, 0]
    });
</script>