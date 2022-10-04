
var err_message = 'Some error in the work of the site, I will fix everything soon'

function ok_name(string) {
	return string.length > 0 && string.length <= 32 && /^[\x00-\x7F]*$/.test(string);
}

function numberWithSpaces(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
