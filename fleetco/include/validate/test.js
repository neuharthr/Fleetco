
function test(sVal)
{var regexp=/^[A-Z]{3}-[0-9]{4}$/;if(!sVal.match(regexp))
return'This field should be in ABC-1234 format';}