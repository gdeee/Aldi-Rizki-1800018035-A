function search() {		//function = membuat fungsi
    var input = document.formcari.keyword.value;		//var = varibel		value = nilai kembalian
    var output = "http://www.google.com/search?q=" + input ;	//var = varibel
    window.open(output, 'google', config='height=500, width=750, scrollbars=yes location=yes') //windows.open = membuka windows baru
}