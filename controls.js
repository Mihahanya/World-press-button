
var err_message = 'Some error in the work of the site, I will fix everything soon'

function ok_length(string) {
	return string.length > 0 && string.length <= 23
}

function numberWithSpaces(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
